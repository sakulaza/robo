var TW = {};

/**
 * Эмуляция настоящего класса.
 */

(function(){
  var initializing = false, fnTest = /xyz/.test(function(){xyz;}) ? /\b_super\b/ : /.*/;

  // The base Class implementation (does nothing)
  this.Class = function(){};

  // Create a new Class that inherits from this class
  Class.extend = function(prop) {
    var _super = this.prototype;

    // Instantiate a base class (but only create the instance,
    // don't run the init constructor)
    initializing = true;
    var prototype = new this();
    initializing = false;

    // Copy the properties over onto the new prototype
    for (var name in prop) {
      // Check if we're overwriting an existing function
      prototype[name] = typeof prop[name] == "function" &&
        typeof _super[name] == "function" && fnTest.test(prop[name]) ?
        (function(name, fn){
          return function() {
            var tmp = this._super;

            // Add a new ._super() method that is the same method
            // but on the super-class
            this._super = _super[name];

            // The method only need to be bound temporarily, so we
            // remove it when we're done executing
            var ret = fn.apply(this, arguments);
            this._super = tmp;

            return ret;
          };
        })(name, prop[name]) :
        prop[name];
    }

    // The dummy class constructor
    function Class() {
      // All construction is actually done in the init method
      if ( !initializing && this.initialize )
        this.initialize.apply(this, arguments);
    }

    // Populate our constructed prototype object
    Class.prototype = prototype;

    // Enforce the constructor to be what we expect
    Class.prototype.constructor = Class;

    // And make this class extendable
    Class.extend = arguments.callee;

    return Class;
  };
})();

/**
 * Класс для рендинга блока
 */
TW.Render = Class.extend({

	_data_source: [],

	/**
	 * Рендим блок
	 */
	_block: function(modif){
		if (this._data_source.length < 1){
			throw 'no-data';
		}

		var data = this._data_source.shift();

		return this._process($('#event_block'), data, modif);
	},

	/**
	 * Рендит шаблон. Подставляет вместо плейсхолдеров данные из data
	 */
	_process: function (template, data, modif){
		var html = template.html(),
			placeholder = null;

		for (var i in data){
			var escape = true;

			if (_.isObject(modif) && _.isFunction(modif[i])){
				data[i] = modif[i](data[i], i);
				escape = false;
			}

			var data_ = escape ? _.escape(data[i]) : data[i];
			placeholder = '@' + i + '@';

			while (html.indexOf(placeholder) > -1) {
				html = html.replace(placeholder, data_);
			}
		}
		

		return html;
	}
});

TW.View = TW.Render.extend({

	setData: function(data){
		this._data_source = this._prepareData(data);
	},

	_prepareData: function(data){
		return data;
	},

	render: function(data){
		this.setData(data);
		var l = this._data_source.length;
		for (var i = 0; i < l; i ++){
			this.append();
		}
	},

	refresh: function(data){
		this.clear();
		this.render(data);
	},

	clear: function(){
		$('#feed_table .tw-items').remove();
	},

	showNoDataMessage: function(){
		this.clear();
		var html = $('#no-data-message').html();
		$('#feed_table').append(html);
	},

	append: function(){
		$('#feed_table').append(this._block());
	},

	prepend: function(){
		$(this._block()).insertAfter('#trades-hook');
	},

	prependAnimation: function(){
		$(this._block()).css('background-color', '#FCF6B1')
			.insertAfter('#trades-hook')
			.animate({ backgroundColor: 'transparent' }, 2000, function(){
				$(this).css('background-color', 'transparent');
			})
	},

	_block: function(){
		return this._super({profit_pips_norm: function(value){ return value ? value : '-' }});
	}
});

TW.View._instance = null;

TW.View.getInstance = function(){

	if (TW.View._instance == null){
		TW.View._instance = new TW.View();
	}

	return TW.View._instance;
};

/**
 * Класс отвечает за создания таблицы с анимацией и возможностью подгрузки доп. записей
 */

TW.ViewEx = TW.View.extend({

	_interv_animation: null,
	_data: [],

	initialize: function(){
		$('#add-more-trades').click($.proxy(this.onAddMore, this));
	},

	/**
	 * Подготавливаем данные для блоков.
	 * Данные разбиваются на 3 части:
	 * 	- 10 первых записей,
	 * 	- 10 вторых, которые буду появлятся постепенно,
	 *  - оставшиеся записи
	 */
	_prepareData: function(data){
		var res = {
			init: [],
			ten: [],
			rest: []
		};

		if (data.length < 11){
			res.init = data;
			return res;
		}

		res.ten = data.slice(0, 10).reverse();

		data.splice(0, res.ten.length);

		res.init = data.slice(0, 10).reverse();

		if (data.length < 21){
			return res;
		}

		data.splice(0, res.init.length);
		res.rest = data;

		return res;
	},

	setData: function(data){
		this._data = this._prepareData(data);
	},

	render: function(data){
		this.setData(data);
		this.switchSource('init');
		this.prepend10();
		this.switchSource('ten');
		this.startAnimation();
	},

	destroy: function(){
		this.stopAnimation();
		this.hideAddButton();
	},

	hasData: function(){
		return Boolean(this._data_source.length);
	},

	/**
	 * Рисует первые 10 событий
	 */
	append10: function(){
		for (var i = 0; i < 10; i ++){
			try {
				this.append();
			} catch (e) {
				break;
			}
		}
	},

	/**
	 * Добавляем 10 блоков в начало
	 */
	prepend10: function(){
		for (var i = 0; i < 10; i ++){
			try {
				this.prepend();
			} catch (e) {
				break;
			}
		}
	},

	/**
	 * Меняем источник данных
	 */
	switchSource: function(name){
		this._data_source = this._data[name];
	},

	/**
	 * Показываем кнопку "Добавить еще"
	 */
	showAddButton: function(){
		$('#add-more-trades').show();
	},

	hideAddButton: function(){
		$('#add-more-trades').hide();
	},

	onAddMore: function(e){
		this.append10();
		if (!this.hasData()){
			this.hideAddButton();
		}
	},

	/**
	 * Начинаем анимацию
	 */
	startAnimation: function(){

		this._interv_animation = setInterval($.proxy(function(){

			try{
				this.prependAnimation();
			} catch(e) {
				this.stopAnimation();
				if (e == 'no-data'){
					this.showAddButton();
					this.switchSource('rest');
				}

				return ;
			}

		}, this), 4000);
	},

	stopAnimation: function(){
		clearInterval(this._interv_animation);
	},

	breakProcess: function(){
		this.stopAnimation();
		this.hideAddButton();
	}
});

TW.ViewEx._instance = null;

TW.ViewEx.getInstance = function(){

	if (TW.ViewEx._instance == null){
		TW.ViewEx._instance = new TW.ViewEx();
	}
	return TW.ViewEx._instance;
};


/**
 * Класс работает с фильтром
 */
TW.Filter = Class.extend({

	initialize: function(){
		$('#refresh-feed').click($.proxy(this.onRefreshFeed, this));
		$('#filter-form').submit(function(){return false});
	},

	onRefreshFeed: function(e){

		if (!this.canLoad()){
			TW.ViewEx.getInstance().breakProcess();
			TW.ViewEx.getInstance().refresh(_.clone(trades_feed));

			return false;
		}

		var data = $('#filter-form').serialize();

		this.showProgress();
		$.post(trade_lk_domain + '/' + dqConfig.lang + '/tradewall/index/feed/', data, $.proxy(function(data){
			this.hideProgress();
			if (_.isArray(data)){
				TW.ViewEx.getInstance().breakProcess();

				if (_.isEmpty(data)){
					TW.View.getInstance().showNoDataMessage();
					return ;
				}

				TW.View.getInstance().refresh(data);
			}
		}, this), 'json');

		return false;
	},

	canLoad: function(){
		if ($.trim($('#filter-form [name=provider_name]').val()) != ''){
			return true;
		}

		try {
			$('#filter-form [type=checkbox]').each(function(){
				if ($(this).attr('checked')){
					throw 'can-load';
				}
			});

		} catch(e) {
			if (e == 'can-load') {
				return true;
			}
		}

		return false;
	},

	showProgress: function(){
		$('.tw-filter .loader-background').show();
	},

	hideProgress: function(){
		$('.tw-filter .loader-background').hide();
	}
});

/**
 * Класс для обработки мини-блока
 */
TW.Block = TW.Render.extend({

	_interval: null,

	initialize: function(data){
		this._data_source = data;
		this._data_source.reverse();
		this.draw3();
		$('#tw-block-hook').css('margin-top', '-161px');
		this.startAnimation();

	},

	draw3: function(){
		for (var i =0; i < 4; i ++){
			try {
				this.draw();
			} catch (e) {
				break ;
			}
		}
	},

	draw: function(){
		var modif = {profit_pips_norm: $.proxy(function(value){
			if (!value){
				return '';
			}
			return this._process($('#tw-block-profit-template'), {profit_pips_norm: value});
		}, this)};

		$('#tw-block-hook').prepend(this._block(modif));
	},

	startAnimation: function(){
		this._interval = setInterval($.proxy(function(){
			this.drawEx();
		}, this), 5000);
	},

	drawEx: function(){
		var dummy = $('<div></div>').css('height', '0').css('font-size', '0');

		$('#tw-block-hook').prepend(dummy);

		dummy.animate({height: 161}, 'slow', $.proxy(function(){
			try {
				this.draw();
			} catch (e) {
				this.stopAnimation();
				return ;
			}
			dummy.remove();
			$('#tw-block-hook .tw-block-item:last').remove();
		}, this));
	},

	stopAnimation: function(){
		clearInterval(this._interval);
	}
});


TW.CfxBlock = TW.Block.extend({

	initialize: function(data){
		this._super(data);
		$('#tw-block-hook').css('margin-top', '0');
	},

	draw: function(){
		var modif = {profit_pips_norm: $.proxy(function(value){
			if (!value){
				return '';
			}
			return this._process($('#tw-block-profit-template'), {profit_pips_norm: value});
		}, this)};

		$('#tw-block-hook').append(this._block(modif));
	},

	drawEx: function(){
		var hook = $('#tw-block-hook');

		hook.animate({'margin-left': -297}, 'slow', $.proxy(function(){
			$('#tw-block-hook .tw-block-item:first').remove();
			hook.css('margin-left', '0');

			try {
				this.draw();
			} catch (e) {
				this.stopAnimation();
				return ;
			}
		}, this));
	}
});