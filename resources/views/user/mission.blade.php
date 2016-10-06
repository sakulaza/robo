 <!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie8 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if IE 9 ]> <html class="no-js ie9 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="GoldMany一直致力于为客户提供优势的外汇交易条件，最小投资只需10美金，免费5美金，黄金交易" />
    <meta name="keywords" content="外汇交易商 在线交易 外汇交易 外汇 免费5美金 保证金交易 美元 欧元" />
    <meta name="w1-verification" content="117844634768" />


    <title>GoldMany宗旨</title>
    <meta property="og:title" content="GoldMany宗旨" />
    <meta property="og:description" content="GoldMany一直致力于为客户提供优势的外汇交易条件，最小投资只需10美金，免费5美金，黄金交易" />
    <meta property="og:url" content="http://cn.GoldMany.com/about/mission/" />
    <meta property="og:image" content="/themes/rbforex/images/logo-soc-share.png" />

    <link href="/favicon.ico" rel="icon" type="image/x-icon"/>
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon"/>

    <link media="all" rel="stylesheet" href="/css/redmond.css"/>
    <link href="/css/jquery.jgrowl.css" rel="stylesheet" type="text/css"/>

    <link href="/css/jquery.fancybox-1.3.4.css?v=1" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="/css/style.css?v=180" type="text/css" />

    <!-- Raygun -->
    <script type="text/javascript" src="/js/raygun.min.js"></script>
    <script type="text/javascript">

        Raygun.init('SnxLQMCCmsCBWASJpoUn3g==', {ignore3rdPartyErrors: true}).attach();

    </script>
    <!-- /Raygun -->

    <script src="/js/production.min.js"></script>

    <link rel="stylesheet" href="/css/font-awesome.css?v=2" type="text/css" />


    <script type="text/javascript" >
        var is_sent_auth_request = false;

        var dqConfig = {
            'lk_domen' : 'https://my.cn.GoldMany.com/cs',
            'livesupport_url' : 'https://my.cn.GoldMany.com/cs/livesupport/',
            'livesupport_anonymous_url' : 'https://my.cn.GoldMany.com/cs/livesupport/anonymous/',
            'theme' : '/themes/rbforex/',
            'root_path' : '/',
            'callback_domen' : '',
            'lang' : 'cs',
            'ok' : 'Ok',
            'cancel' : 'Cancel',
            'callback_title' : 'Order callback',
            'button_selector': '.form button, .form .button, .likeBigButtonLoader'
        };


        function showFaqText(id)
        {
            var show = $('#faq_text'+id).css('display') == 'none' ? true : false;

            if (show) {
                $('#faq_text'+id).show();
            } else {
                $('#faq_text'+id).hide();
            }
        }

        $(function(){
            (new RBFX.Loader({use_global_button_selector: true})).initEvents();


        });

        $(document).ready(function(){
            $('#tua-submit').click(function(e){
                if (is_sent_auth_request){
                    e.preventDefault();
                    return;
                }

                is_sent_auth_request = true;
            });
        });

    </script>

    <script async src='https://www.google-analytics.com/ga.js'></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-75510320-1', 'auto');
        ga('send', 'pageview');

        var _gaq = _gaq || [];
        _gaq.push(['_setDomainName', 'GoldMany.com']);
        _gaq.push(['_trackPageview']);
        function gaqPush(category, action, opt_label, opt_noninteraction) {}
    </script>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
                document,'script','https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '240223389695091');
        fbq('track', "PageView");</script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=240223389695091&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->

    <script type="text/javascript">

    </script>
    <script type="text/javascript">

        var terminal_settings = {
            labels: {
                link_template: '您可以从 <a href=\"https://my.cn.GoldMany.com/cs/\">会员中心</a>' +
                '<a href=\"https://my.cn.GoldMany.com/cs/help/download-center/\" target=\"_blank\">的下载中心</a> ' +
                '下载交易平台.'
            },
            terminal: {
                mt4: {
                    demo_url: '/register-demo/mt',
                    real_url: '/register/mt',
                    usage: 'MetaTrader4中使用',
                    callback: function() {
                        gaqPush('Downloads 4','EXE');
                        ga('send', 'event', 'Download','click','Metatrader4');
                    }
                },
                mt5: {
                    demo_url: '/register-demo/mt5',
                    real_url: '/register/mt5',
                    usage: 'MetaTrader5中使用',
                    callback: function() {
                        gaqPush('Downloads 5','EXE');
                        ga('send', 'event', 'Download','click','Metatrader5');
                    }
                },
                ctrader: {
                    demo_url: '/register-demo/ct',
                    real_url: '/register/ct',
                    usage: 'cTrader中使用',
                    callback: function() {
                        gaqPush('Downloads cTrader','EXE');
                        ga('send', 'event', 'Download','click','cTrader');
                    }
                },
                viking: {
                    demo_url: '/register-demo/viking',
                    real_url: '/register/viking',
                    usage: 'Viking Trader中使用',
                    callback: function() {
                        gaqPush('Downloads Viking','EXE');
                        ga('send', 'event', 'Download','click','Viking');
                    }
                }
            }
        };
        $(document).ready(function() {
            $('iframe').each(function() {
                var url = $(this).attr('src');
                if (url.indexOf('javascript:') != -1) return;
                if (url.indexOf("?") > 0) {
                    $(this).attr({
                        "src" : url + "&wmode=transparent",
                        "wmode" : "Opaque"
                    });
                }
                else {
                    $(this).attr({
                        "src" : url + "?wmode=transparent",
                        "wmode" : "Opaque"
                    });
                }
            });

            var $body =	$('body'),
            // Modal template
                    $modalOverlay =	$("<div class='modal fade' id='my-modal' tabindex='-1' role='dialog' " +
                            "style='display: none;'> <div class='modal-dialog'> " +
                            "<div class='modal-content'> <div class='modal-content-container'> " +
                            "<div class='modal-header'> <a class='close button-close'>" +
                            "<img src='/images/times-big.png' alt='X' width='14' height='14'/>" +
                            "</a> <p class='modal-header-description' data-id='modal-header-desc'></p> </div> " +
                            "<div class='modal-body'> <div class='modal-body-header'> <h2>开设交易账户</h2> " +
                            "<h3 data-id='modal-body-header-desc-h3'></h3> </div> " +
                            "<form action='' class='modal-form' id='modal_form' method='GET'> " +
                            "<label for='email' class='form-label'>邮箱:</label> <div class='form-input'> " +
                            "<input autocomplete='off' type='text' name='email' id='email' class='focus-it' value='' " +
                            "placeholder=''/> </div> 				" +
                            "<div class=\"account_type_block\"><label for='accountType' class='form-label'>账户类型:" +
                            "</label> <div class='form-input radio'> " +
                            "<label id='real-title' class='radio-title checked'>真实</label> " +
                            "<label id='demo-title' class='radio-title'>模拟</label></div> </div> " +
                            "</form> </div> <div class='modal-footer'> <a class='button-close' data-dismiss='modal'>" +
                            "<img src='/images/times-small.png' alt='x' width='8' height='8'/>" +
                            "<i class='icon'></i><span>感谢,我已经有一个</span></a> " +
                            "<a class='button-open' id='modal_form_register' href='#'> <span>开设账户</span> </a> " +
                            "</div> </div> </div> </div> </div>");
            // Append overlayed modal to body of document
            $body.append($modalOverlay);
            $('#modal_form_register').click(function(e) {
                e.preventDefault();
                $('#modal_form').submit();
            });

            $('a.modal-trigger').bind('click', function(e){
                var $body = $('body'),
                        trigger = $(this),
                        $my_modal = $('#my-modal'),
                        type = trigger.attr('data-terminal');
                if (!type || terminal_settings.terminal[type] === undefined) {
                    return;
                }
                var terminal_data = terminal_settings.terminal[type];
                e.preventDefault();
                if (terminal_data.callback && (terminal_data.callback instanceof Function)) {
                    terminal_data.callback();
                }
                // Data to add to the modal
                $('[data-id="modal-header-desc"]').html(terminal_settings.labels['link_template'].replace('<url>', trigger.attr('href')));
                $('[data-id="modal-body-header-desc-h3"]').html(terminal_data.usage);
                $('#modal_form').attr('action', dqConfig.lk_domen + (terminal_data.real_url ? terminal_data.real_url : terminal_data.demo_url));
                $('#real-title').attr('data-register-form', dqConfig.lk_domen + terminal_data.real_url);
                $('#demo-title').attr('data-register-form', dqConfig.lk_domen + terminal_data.demo_url);
                // Trigger modal
                $my_modal.show();
                // Append overlayed modal to body of document
                $body.append($modalOverlay);
                // Global attributes
                var $buttonClose = $('.button-close');
                //var $manualDownload  = $('.manual-download');
                // Set a file downloading timeout of 3s
                /* var timeout = setTimeout(function () {
                 var href = trigger.attr('href');
                 window.location.href = href;
                 }, 0); */
                // Cancel timeout if modal were closed by buttons
                $buttonClose.bind('click', function(){
                    $my_modal.hide();
                    // clearTimeout(timeout);
                });
                // Cancel timeout if download were triggered manually
                /* $manualDownload.bind('click', function(){
                 clearTimeout(timeout);
                 }); */
                // Cancel timeout if modal were closed by ESC
                $(document).bind('keyup', function(e){
                    if (e.keyCode == 27) {
                        $my_modal.hide();
                        clearTimeout(timeout);
                    }
                });
                // Add/remove a ckecked class to the radio labels (for CSS styling)
                var $modalCheckboxes = $(".form-input.radio label");
                $modalCheckboxes.click(function() {
                    $modalCheckboxes.removeClass('checked');
                    $(this).addClass('checked');
                    $('#modal_form').attr('action', $(this).attr('data-register-form'));
                });

                $(document).click(function(event) {
                    if (!$(event.target).closest(".modal-trigger, .modal-dialog").length) {
                        $("#my-modal").hide();
                    }
                });
            });

        });

    </script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('.rw-tip_holder, .infobanner_container, #h-offer, #tu-registration').mouseenter(
                    function() {
                        var rw_title = '外汇交易涉及高风险, 可能导致失去您的整个投资.';
                        $(this).attr('title', rw_title);
                    })
                    .hover(
                            function(){
                                var title = $(this).attr('title');
                                $(this).data('rw-tip_text', title).removeAttr('title');
                                $('<p class="rw-tip"></p>').text(title).appendTo('body').fadeIn('slow');
                            },
                            function() {
                                $(this).attr('title', $(this).data('rw-tip_text'));
                                $('.rw-tip').remove();
                            })
                    .mousemove(
                            function(e) {
                                var mousex = e.pageX + 20;
                                var mousey = e.pageY + 20;
                                $('.rw-tip').css({ top: mousey, left: mousex })
                            });
        });
    </script>


</head>

<body class="ltr">
<div id="jGrowl" class="top-right jGrowl"></div>
<link rel="stylesheet" href="/css/uikit.min.css?v=1">
<script type="text/javascript" src="/js/uikit.min.js?v=1"></script>


<div id="wrapper" class="cs">
    @include('user.partials.top')

    @include('user.partials.header')

    @include('user.partials.nav')

    <script type="text/javascript">
        $(document).ready(function () {
            var md = new MobileDetect(window.navigator.userAgent);
            if (md.mobile() === null) {
                return;
            }

            $('.nav.nav-pills > li').each(function(){
                var $this = $(this);
                if (($this).find('.dropdown-menu li').length > 0) {
                    $this.find('.nav-wrapper>a').removeAttr('href')
                }
            });
        });
    </script>


    <div id="path">
        <a href="/" >首页</a>/<a href="/about/" >关于GoldMany</a>/                                              公司宗旨
    </div>

    <div id="left">
        <h1 >GoldMany宗旨</h1>
        <div ><p style="text-align: justify;">
                GoldMany公司的宗旨是:利用现代的工具和技术, 提供优质和可靠的经纪服务给客户和合作伙伴.</p>
            <p style="text-align: justify;">
                我们一直努力通过灵活的方式满足客户的需求和愿望</p>
            <p style="text-align: justify;">
                我们公司作为可靠的合作人在个人业务的发展过程中,一直得到客户的肯定. 我们的所有客户收到可靠和低价的优质服务. 公司的专家不断监测货币和股票市场的情况,跟踪创新技术和工具的出现,并成功地应用它们.</p>
            <p style="text-align: justify;">
                今天, GoldMany公司为给客户和商业合作伙伴提供成功的和可盈利的多样性服务而自豪, 无论经验和投资规模, 我们的客户都收到优质的服务.</p>
            <p style="text-align: justify;">
                专业参与金融市场和货币市场的丰富经验是我们的员工做出最佳决定的最佳保证.</p>
            <p style="text-align: justify;">
                在与客户和合作伙伴的关系上,我们做到无障碍沟通和透明性 .</p>
            <ul>
                <li style="text-align: justify;">
                    <strong>保密.</strong> 客户和合作伙伴的所有信息决定安全;</li>
                <li style="text-align: justify;">
                    <strong>透明.</strong> GoldMany符合法律的工作流程, 简单, 方便,便于客户和合作伙伴理解 ;</li>
                <li style="text-align: justify;">
                    <strong>无障碍.</strong> 任何时候您都可以得到我们专家的专业的服务.</li>
            </ul>
        </div>
    </div>

    <div id="right">
        <ul id="r-menu">
            <li >
                <a href="/about/why-GoldMany/"  >为什么选择GoldMany</a>
            </li>
            <li class="selected" >
                <a  >公司宗旨</a>
            </li>
            <li >
                <a href="/about/business-model/"  >商业模式</a>
            </li>
            <li >
                <a href="/about/liquidity-providers/"  >流动性</a>
            </li>
            <li >
                <a href="/about/regulation/"  >公司监管</a>
            </li>
            <li >
                <a href="/about/news/"  >公司新闻</a>
            </li>
            <li >
                <a href="/about/feedback/"  >反馈建议</a>
            </li>
            <li >
                <a href="/about/faq/"  >常见问题</a>
            </li>
            <li >
                <a href="/about/contacts/"  >联系我们</a>
            </li>
        </ul>

        @include('user.partials.right_bar')

    </div>



    @include('user.partials.footer')

</div>



<script src="/js/linktracker.js?v=2"></script>


<script type="text/javascript" src="/js/ajax.js?v=1"></script>
<script type="text/javascript" src="/js/referral.js?v=1"></script>
<script type="text/javascript">

    $(function () {
        (new RBFX.ReferralsReferral({
            referrer_info_url: '/referrals/getReferrerInfo/',
            set_referrer_agent_id_cookie_url: '/referrals/setAgentIdCookieByReferrer/',
            remove_referrer_agent_id_cookie_url: '/referrals/removeAgentIdCookieByReferrer/'
        })).getReferrerInfo();
    });

</script><div id="external-link-notification" class="external-link-notification__container">
    <div class="external-link-notification__popup">
        <div class="external-link-notification__message">
            <div class="external-link-notification__info-intro">
                <h2>请注意！</h2><p>您将访问GoldMany(CY) Ltd (由CySEC监管, 执照编号. 191/13)的网站.</p>
            </div>
            <div class="external-link-notification__checkbox">
                <input id="external-link-state" type="checkbox" />
                <label for="external-link-state">无需任何确认即可随时访问此网站</label>
            </div>
        </div>
        <div class="clear"></div>
        <div class="external-link-notification__buttons">
            <a id="external-link-accept-button" class="external-link-notification__accept" href="#" data-disable-notification>前往</a>
            <a id="external-link-cancel-button" class="external-link-notification__cancel" href="#" data-disable-notification>取消</a>
        </div>
        <div class="clear"></div>
    </div>
</div>

<script src="/js/notification.js"></script>
<script>

    $(document).ready(function() {
        var link_tracker = new RBFX.MainLinkTracker();
        (new RBFX.ExternalLinkNotification({
            popup_selector: '#external-link-notification',
            notification_state_selector: '#external-link-state',
            cancel_button_selector: '#external-link-cancel-button',
            accept_button_selector: '#external-link-accept-button',
            accept_callback_map: {
                'a[data-banner-info]': link_tracker.handleBannerLinkClick
            },
            notification_domain_list: ["robofx.com","robofx.ru","robooption.com","GoldMany.pl","GoldMany.pt","it.GoldMany.com","rbfx.es"],
            trigger_selector: 'a:not([data-disable-notification])',
            cookie_name: 'disable_external_link_notification'
        })).initEventHandlers();
    });

</script>
<script>

    $(function() {
        (new RBFX.MainLinkTracker()).initEventHandlers();
    });

</script>
<script type="text/javascript">(function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter = new Ya.Metrika({
                    id: 23465704,
                    webvisor: true,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true
                });
            } catch (e) { }
        });
        var n = d.getElementsByTagName('script')[0], s = d.createElement('script'), f = function () { n.parentNode.insertBefore(s, n); };
        s.type = 'text/javascript';
        s.async = true;
        s.src = (d.location.protocol == 'https:' ? 'https:' : 'http:') + '//mc.yandex.ru/metrika/watch.js';
        if (w.opera == '[object Opera]') { d.addEventListener('DOMContentLoaded', f, false); } else { f(); }
    })(document, window, 'yandex_metrika_callbacks');</script>
<noscript><div><img src="//mc.yandex.ru/watch/23465704" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
</body>
</html>