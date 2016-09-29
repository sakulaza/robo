/**
 *
 *
 *
 *
 *
 *
 $.rbfx.ajax(
     admin_path+'/reconciliation/fixapi/validate/',
     {
         data		: $('#form_edit').serialize(),
         dataType	: 'json',
         type		: 'POST',
         beforeSend	: function(jqXHR, settings){
             console.log('my beforeSend');
             console.log(jqXHR);
             console.log(settings);
         },
         complete	: function(jqXHR, textStatus){
             console.log('my complete');
             console.log(jqXHR);
             console.log(textStatus);
         },
         error		: function(jqXHR, textStatus, errorThrown){
             console.log('my error');
             console.log(jqXHR);
             console.log(textStatus);
             console.log(errorThrown);
         },
         success		: function(data, textStatus, jqXHR){
             console.log('my success');
             console.log(data);
             console.log(textStatus);
             console.log(jqXHR);
         }
     },
     {
         url					: admin_path+'/reconciliation/fixapi/result/',
         frequency	            : 10 * 1000,
         process				: function(data, textStatus, jqXHR){
             console.log('my process');
             console.log(data);
             console.log(textStatus);
             console.log(jqXHR);
         },
         error				: function(jqXHR, textStatus, errorThrown){
             console.log('my error');
             console.log(jqXHR);
             console.log(textStatus);
             console.log(errorThrown);
         },
         success				: function(data, textStatus, jqXHR){
             console.log('my success');
             console.log(data);
             console.log(textStatus);
             console.log(jqXHR);
         }
     }, false
     );
 });

 $(function(){
    $.rbfx.ajax(
        '/test_url/',
        {
            data: $(form).serialize(),
            dataType: 'json',
            type: 'POST',
            success: function(data, textStatus, jqXHR){
                ...//Обрабатываем данные от основного запроса
            }
        },
		{
            process: function(data, textStatus, jqXHR){
                ...//Обрабатываем промежуточные данные
            },
            success: function(data, textStatus, jqXHR){
                ...//Обрабатываем результирующие данные данные
			}
        }
    );
});
 *
 */
(function(RBFX){
    RBFX.Ajax = RBFX.Class.extend({
        _url: '',
        _settings: {},
        _process_url: '/ajaxasync/result/',
        _process_frequency: 5 * 1000,
        _process_settings: {},
        _debug_mode: false,
        _pid: null,
        _RESULT_STATUS: {
            PROCESS: 'process',
            SUCCESS: 'success',
            ERROR: 'error'
        },

        init: function(url, settings, process_settings, debug_mode){
            //Основные параметры
            this._url = url;
            this._settings = settings || {};
            this._process_settings = process_settings || {};
            this._debug_mode = debug_mode || false;

            //Внутренные параметры
            this._pid = Math.floor(Math.random()*1000000);
        },
        process: function(){
            if (parseFloat($().jquery) < 1.5) {
                $.ajax($.extend({}, {url: this._addRand(this._addPid(this._url))}, this._buildProcessSettings()));
            } else {
                $.ajax(this._addRand(this._addPid(this._url)), this._buildProcessSettings());
            }
        },
        /**
         * Catch exception with message "rbfx.ajax.disable_process_checking_result"
         * @returns {*}
         * @private
         */
        _buildProcessSettings: function(){
            var ob_self = this;
            var settings = $.extend({}, this._settings);
            settings.success = function(data, textStatus, jqXHR){
                try{
                    if (ob_self._settings.success){
                        ob_self._settings.success(data, textStatus, jqXHR);
                    }

                    if (Object.keys(ob_self._process_settings).length){
                        ob_self._sendAjaxResult(data);
                    }
                } catch (ex){
                    if (ex.message == 'rbfx.ajax.disable_process_checking_result'){
                        return;
                    }

                    throw ex;
                }
            };
            return settings;
        },
        _sendAjaxResult: function(previous_data){
            var ob_self = this;
            $.ajax(this._addRand(this._addPid(this._getProcessUrl())), {
                data		: previous_data,
                dataType	: 'json',
                type		: 'POST',
                beforeSend	: function(jqXHR, settings){
                    if (ob_self._debug_mode){
                        console.log('beforeSend');
                        console.log(jqXHR);
                        console.log(settings);
                    }
                },
                complete	: function(jqXHR, textStatus){
                    if (ob_self._debug_mode){
                        console.log('complete');
                        console.log(jqXHR);
                        console.log(textStatus);
                    }
                },
                error		: function(jqXHR, textStatus, errorThrown){
                    if (ob_self._debug_mode){
                        console.log('error');
                        console.log(jqXHR);
                        console.log(textStatus);
                        console.log(errorThrown);
                    }

                    if (ob_self._process_settings.error){
                        ob_self._process_settings.error(jqXHR, textStatus, errorThrown);
                    }
                },
                success		: function(data, textStatus, jqXHR){
                    if (ob_self._debug_mode){
                        console.log('success');
                        console.log(data);
                        console.log(textStatus);
                        console.log(jqXHR);
                    }

                    if (data.status){
                        switch (data.status){
                            case ob_self._RESULT_STATUS.PROCESS:
                                if (ob_self._process_settings.process){
                                    ob_self._process_settings.process(data.data, textStatus, jqXHR);
                                }

                                setTimeout(
                                    function(){
                                        ob_self._sendAjaxResult(previous_data);
                                    },
                                    ob_self._getProcessFrequency()
                                );
                                break;

                            case ob_self._RESULT_STATUS.SUCCESS:
                                ob_self._process_settings.success(data.data, textStatus, jqXHR);
                                break;

                            case ob_self._RESULT_STATUS.ERROR:
                                ob_self._process_settings.error(data.data, textStatus, jqXHR);
                                break;
                        }
                    }
                }
            });
        },
        _getProcessUrl: function(){
            return this._process_settings.url ? this._process_settings.url : this._process_url;
        },
        _getProcessFrequency: function(){
            return this._process_settings.frequency ? this._process_settings.frequency : this._process_frequency;
        },
        _addPid: function(url){
            return this._addGetParamToUrl(url, 'ajax_pid', this._pid);
        },
        _addRand: function(url){
            return this._addGetParamToUrl(url, '_', Math.random());
        },
        _addGetParamToUrl: function(url, param_name, param_value){
            var pos = url.indexOf('?');
            if (pos >= 0){
                var uri = url.substr(0, pos);
                var get_args_string = url.substr(pos + 1);
            } else {
                var uri = url;
                var get_args_string = '';
            }

            get_args_string += (get_args_string ? '&' : '') + param_name+'='+param_value;

            return uri+'?'+get_args_string;
        }
    });
})(RBFX);

(function(){
    $.extend($.rbfx, {
        ajax: function(url, settings, process_settings, debug_mode){
            (new RBFX.Ajax(url, settings, process_settings, debug_mode)).process();
        }
    });
})($.rbfx);