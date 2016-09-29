(function (RBFX) {
	RBFX.MainLinkTracker = RBFX.Class.extend({
		/**
		 * Инициализировать обработку событий
		 */
		initEventHandlers: function() {
			this._initFormSubmitHandler();
			this._initBannerLinkandler();
		},
		/**
		 * Инициализировать обработчик отправки формы
		 */
		_initFormSubmitHandler: function() {
			$('body').delegate('form[action^=' + dqConfig.lk_domen + ']', 'submit', function() {
				_gaq.push(['_linkByPost', this]);
			});
		},
		/**
		 * Инициализировать обработчик нажатия на ссылку в инфобаннере
		 */
		_initBannerLinkandler: function() {
			var self = this;
			$('body').delegate('a[data-banner-info]', 'click', function() {
				return self.handleBannerLinkClick($(this));
			});
		},
		/**
		 * Обработать нажатие на ссылку в инфобаннере
		 */
		handleBannerLinkClick: function(element) {
			var params = element.attr('data-banner-info').split("|");
			trackOutboundLink(this, params[0], params[1]);

			return false;
		}
	});
})(RBFX);