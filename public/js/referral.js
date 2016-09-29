/**
 * Класс обработчиков обработки реферальных переходов
 */
(function (RBFX) {
    RBFX.ReferralsReferral = RBFX.Class.extend({
        _options: {
            referrer_info_url: '',
            set_referrer_agent_id_cookie_url: '',
            remove_referrer_agent_id_cookie_url: ''
        },

        init: function (options) {
            this._options = $.extend({}, this._options, options);
        },

        getReferrerInfo: function () {
            var ob_self = this;
            $.rbfx.ajax(
                this._options.referrer_info_url,
                {
                    data: {referrer: document.referrer},
                    dataType: 'json',
                    type: 'POST',
                    success: function (data, textStatus, jqXHR) {
                        if (data.is_partner_referrer) {
                            ob_self.setAgentIdCookieByReferrer();
                        } else if (data.is_search_engine_referrer) {
                            ob_self.removeAgentIdCookieByReferrer();
                        }
                    }
                }
            );
        },

        setAgentIdCookieByReferrer: function () {
            $.rbfx.ajax(
                this._options.set_referrer_agent_id_cookie_url,
                {
                    data: {
                        referrer: document.referrer,
                        url: $(location).attr('href')
                    },
                    dataType: 'json',
                    type: 'POST'
                }
            );
        },

        removeAgentIdCookieByReferrer: function () {
            $.rbfx.ajax(
                this._options.remove_referrer_agent_id_cookie_url,
                {
                    data: {
                        referrer: document.referrer
                    },
                    dataType: 'json',
                    type: 'POST'
                }
            );
        }
    });
})(RBFX);