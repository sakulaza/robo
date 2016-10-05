/**
 * Абстрактный класс обработчиков событий страницы прогнозов
 */
(function(RBFX){
    RBFX.ForecastAbstract = RBFX.Class.extend({
        _last_date:         null,
        _data_path:         null,
        _selected_cat_id:   0,

        init: function(last_date, data_path, selected_cat_id){
            this._last_date         = last_date;
            this._data_path         = data_path;
            this._selected_cat_id   = selected_cat_id;
        },

        _selectors: {
            'item_list':              '.scroll-container',
            'calendar':               '#calendar-forecasts-wrapper',
            'calendar_item':          '.calendar',
            'calendar_list':          '.taf-calendar .calendar',
            'calendar_toggle':        '.taf-another-date',
            'category_list':          '.taf-tags-list',
            'category_item':          '.forecast-cat-item'
        },

        _is_update_running:            false,
        _is_allowed_loading:           true,
        _selected_day_url:             null,
        _days_loaded:                  3,
        _height_offset:                300,

        initEvents: function(){
            this._initUpdateListEvents();
            this._initAppendListEvents();
            this._initCalendarEvents();
            this._setSelectedCategoryItem();
        },

        /**
         * Инициализировать обработчики событий обновления списков
         */
        _initUpdateListEvents: function(){
            var self = this;
            $(this._selectors.category_item).click(function(){
                $(self._selectors.category_list).find('.active').removeClass('active');
                $(this).addClass('active');
                self._updateList(this.id, null, false);
            });
        },

        /**
         * Инициализировать обработчики событий загруски списков за пред. дни
         */
        _initAppendListEvents: function(){
            var self = this;
            $(window).scroll(function(e){
                if ($(window).scrollTop() + $(window).height() >= $(document).height() - self._height_offset) {
                    self._loadPrevDayList();
                }
            });
        },

        /**
         * Инициализировать обработчики событий показа календаря и обновления списков через него
         */
        _initCalendarEvents: function(){
            var self = this;
            $(this._selectors.calendar_toggle).live('click', function(){
                var siblings = $(this).siblings(self._selectors.calendar_item);
                $(self._selectors.calendar_list).not(siblings).hide();
                $(self._selectors.calendar_list).not(siblings).remove();

                if ($(this).parent().find(self._selectors.calendar_item).length > 0) {
                    self._hideCalendar(this);
                }else{
                    self._showCalendar(this);
                }
            });
        },

        /**
         * Установить выбранную категорию в списке тегов
         */
        _setSelectedCategoryItem: function(){
            $(this._selectors.category_list).find('.active').removeClass('active');
            $(this._selectors.category_list).find('#'+this._selected_cat_id).addClass('active');
        },

        /**
         * Обновить список статей (аяксом)
         * @param {int} cat_id - ID категорий
         * @param {string} date_from - дата с (Y-m-d)
         * @param {boolean} is_update_by_calendar - флажок обновления данных из календаря
         */
        _updateList: function(cat_id, date_from, is_update_by_calendar){
            if (this._is_update_running) return;
            this._is_update_running = true;

            var self = this;
            JsHttpRequest.query(this._buildForecastListRequestUrl(),
                {'cat_id': cat_id, 'date_from': date_from, 'adjust_date': is_update_by_calendar},
                function(result, errors){
					if (result){
                        $(self._selectors.item_list).html(result.list);
                        self._resetLoadSettings();
                        self._setLastDate(result.last_date);

                        if (is_update_by_calendar){
                            self._setSelectedCalendarDay();
                        }else{
                            self._updateCalendarWrapper(result.calendar);
                            self._selected_day_url = null;
                        }
                        $('html, body').animate(
                            {scrollTop: $(self._selectors.category_list).offset().top }, 'slow', 'swing'
                        );
                    }
					self._is_update_running = false;
                }, true
            );
        },
        
        /**
         * Сформировать url запроса прогнозов
         * @returns {String}
         */
        _buildForecastListRequestUrl: function() {
        	return this._data_path+'updateList/';
        },

        /**
         * Загрузить список за предыдущий день и приклеить его к отображаемому (аяксом)
         */
        _loadPrevDayList: function(){
            if (!this._is_allowed_loading) return;
            this._is_allowed_loading = false;

            if (this._days_loaded < 10) {
                this._days_loaded++;

                var self = this;
                JsHttpRequest.query(this._buildPreviousDayForecastRequestUrl(),
                    {'cat_id': self._getSelectedCatId(), 'date_from': self._last_date, days_amount: 1},
                    function(result, errors){
                        if (result.day_list){
                            self._setLastDate(result.last_date);
                            $(self._selectors.item_list).append(result.day_list);
                        }
						self._is_allowed_loading = true;
                    }, true
                );
            }
        },
        
        /**
         * Сформировать url запроса прогнозов за предыдущий день 
         * @returns {String}
         */
        _buildPreviousDayForecastRequestUrl: function() {
        	return this._data_path+'getPrevDayList/';
        },

        /**
         * Обновить отображение календаря при навигаций по месяцам (аяксом)
         * @param {object} el - обьект стрелочки (пред/след месяц)
         * @param {object} parent - родительский обьект календаря
         */
        _updateCalendar: function(el, parent){
            var self = this;
            JsHttpRequest.query(this._buildCalendarRequestUrl(),
                {'month_url': $(el).attr('data-month-url'), 'cat_id': self._getSelectedCatId()},
                function(result, errors){
                    if (result.calendar){
                        self._updateCalendarWrapper(result.calendar);
                        self._hideCalendar(parent);
                        self._showCalendar(parent);
                        self._setSelectedCalendarDay();
                    }
                }, true
            );
        },
        
        /**
         * Сформировать url запроса календаря
         * @returns {String}
         */
        _buildCalendarRequestUrl: function() {
        	return this._data_path+'updateCalendarByMonth/';
        },

        /**
         * Установить выбранный день в календаре
         */
        _setSelectedCalendarDay: function(){
            $(this._selectors.calendar_item).find('.selected').removeClass('selected');
            $(this._selectors.calendar_item)
                .find("[data-day-url='"+this._selected_day_url+"']")
                .parent().addClass('selected');
        },

        /**
         * Установить даты последнего блока статей из списка
         * @param {string} date
         */
        _setLastDate: function(date){
            this._last_date = date;
        },

        /**
         * Сбросить настройки для загруски списока за предыдущий день
         */
        _resetLoadSettings: function(){
            this._days_loaded           = 3;
            this._is_allowed_loading    = true;
        },

        /**
         * Получить ID тек. категорий (0 = все)
         * @returns {int}
         */
        _getSelectedCatId: function(){
            return $(this._selectors.category_list).find('.active').attr('id');
        },

        /**
         * Показать тек. календарь
         * @param {object} el - обьект тек. календаря
         */
        _showCalendar: function(el){
            $(el).after($(this._selectors.calendar).html());
            $(el).parent().find(this._selectors.calendar_item).show();

            var self = this;
            $(el).parent().find(self._selectors.calendar_item).find('.cc-previous').click(function(){
                self._updateCalendar(this, el);
            });
            $(el).parent().find(self._selectors.calendar_item).find('.cc-next').click(function(){
                self._updateCalendar(this, el);
            });
            $(el).parent().find(self._selectors.calendar_item).find('.cc-day').click(function(){
                self._selected_day_url = $(this).attr('data-day-url');
                self._updateList(self._getSelectedCatId(), self._getDateFromSelectedDayUrl(), true);
            });
        },

        /**
         * Скрыть тек. календарь
         * @param {object} el - обьект тек. календаря
         */
        _hideCalendar: function(el){
            $(el).parent().find(this._selectors.calendar_item).hide();
            $(el).parent().find(this._selectors.calendar_item).remove();
        },

        /**
         * Получить дату в формате (Y-m-d) из урла ведущии на страницу статьй соотв. дня
         * @returns {string}
         */
        _getDateFromSelectedDayUrl: function(){
            var url_string  = this._selected_day_url.replace('/analytics/forex-forecast/date/', '');
            var date_arr    = url_string.split('/');

            return date_arr[0]+'-'+date_arr[1]+'-'+date_arr[2];
        },

        /**
         * Обновить контент в врапере календаря
         * (скрытый хтмл блок содержащий полный календарь играущий роль матрицы)
         * @param {string} data
         */
        _updateCalendarWrapper: function(data){
            $(this._selectors.calendar).html('<div class="calendar">'+data+'</div>');
        }
    });
})(RBFX);