(function (RBFX) {
	RBFX.ExternalLinkNotification = RBFX.Class.extend({
		/**
		 * Настройки обработчиков событий
		 */
		_options: {
			popup_selector: null,
			notification_state_selector: null,
			cancel_button_selector: null,
			accept_button_selector: null,
			accept_callback_map: {},
			notification_domain_list: [],
			trigger_selector: null,
			cookie_name: null
		},
		/**
		 * Отключить оповещение
		 */
		_disable_notification_domains: [],
		/**
		 * Объект, вызвавший показ предупреждения
		 */
		_trigger_element: null,
		/**
		 * Домен выбранной ссылки
		 */
		_selected_domain: null,

		init: function (options) {
			this._options = $.extend({}, this._options, options);
			var domain_list_cookie = $.cookie(this._options.cookie_name);
			this._disable_notification_domains = !domain_list_cookie ? [] : domain_list_cookie.split(';');
		},
		/**
		 * Инициализировать обработку событий
		 */
		initEventHandlers: function() {
			this._initAcceptHandler();
			this._initCancelHandler();
			this._initPopupTriggerHandler();
			this._initChangeNotificationStateHandler();
		},
		/**
		 * Инициализировать обработчик кнопки Отмена
		 */
		_initCancelHandler: function() {
			var self = this;
			$(this._options.cancel_button_selector).click(function() {
				self._close();
				return false;
			});
		},
		/**
		 * Инициализировать обработчик кнопки Перейти
		 */
		_initAcceptHandler: function() {
			var self = this;
			$(this._options.accept_button_selector).click(function() {
				var selector = null,
					callback_result = null,
					trigger_element = $(self._trigger_element);
				for (selector in self._options.accept_callback_map) {
					if (!trigger_element.is(selector)) {
						continue;
					}

					callback_result = self._options.accept_callback_map[selector](trigger_element);
					if (callback_result === false) {
						self._close();

						return false;
					}
				}

				if (trigger_element.attr('target') == '_blank') {
					window.open(trigger_element.attr('href'), '_blank');
				} else {
					window.location.href = trigger_element.attr('href');
				}

				self._close();

				return false;
			});
		},
		/**
		 * Скрыть предупреждение
		 */
		_close: function() {
			$(this._options.popup_selector).hide();
			var checkbox = $(this._options.notification_state_selector);
			checkbox[0].checked = false;
			if ($.fn.dqCheckbox) {
				checkbox.next().removeClass('checked');
			}
		},
		/**
		 * Инициализировать обработчик триггера модального окна
		 */
		_initPopupTriggerHandler: function() {
			if ($.fn.on) {
				$('body').on('click', this._options.trigger_selector, this._createPopupTriggerCallback());
			} else {
				$('body').delegate(this._options.trigger_selector, 'click', this._createPopupTriggerCallback());
			}
		},
		/**
		 * Создать callback обработчика триггера модального окна
		 */
		_createPopupTriggerCallback: function() {
			var self = this;

			return function(event) {
				if (!this.href || this.href == '#') {
					return;
				}

				var domain = this.hostname.replace(/^www\./, '');
				if ($.inArray(domain, self._disable_notification_domains) !== -1) {
					return;
				}

				var domain_index = null;
				for (domain_index in self._options.notification_domain_list) {
					if (self._options.notification_domain_list[domain_index] === domain) {
						self._trigger_element = this;
						self._selected_domain = domain;
						$(self._options.popup_selector).show();
						event.stopImmediatePropagation();
						return false;
					}
				}
			};
		},
		/**
		 * Инициализировать обработчик отключения предпреждений
		 */
		_initChangeNotificationStateHandler: function() {
			var self = this;
			$(this._options.notification_state_selector).click(function() {
				if ($(this).is(':checked')) {
					self._disable_notification_domains.push(self._selected_domain);
				} else {
					var index = $.inArray(self._selected_domain, self._disable_notification_domains);
					if (index !== -1) {
						self._disable_notification_domains.splice(index, 1);
					}
				}

				$.cookie(self._options.cookie_name, self._disable_notification_domains.join(';'), { expires: 1825, path: '/' });
			});
		}
	});
})(RBFX);