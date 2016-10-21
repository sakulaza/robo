 <!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie8 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if IE 9 ]> <html class="no-js ie9 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <title>免费外汇图表</title>
    <meta property="og:title" content="免费外汇图表" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="/analytics/charts/" />

    @include('user.partials.script')
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
        <a href="/" >首页</a>
        /                                              <a href="/analytics/" >分析</a>
        /                                              免费外汇图表
    </div>

    <div id="left">
        <h1>外汇图表</h1>
        <div style="display:table;table-layout: fixed;width:100%">
            <div id="description" style="display:table-footer-group;">
            </div>
            <div style="display:table-header-group;">
                <h2>报价 <span id="h1_charts" class="upper">EURUSD</span></h2>

                <div><p><span id="text_valuta" style="text-transform: uppercase;">EURUSD</span> = 1.12172 (2016.10.05 20:57:19)</p></div>

                <div id="r-chart">
                    <div id="rc-caption">
                        <div id="rcc-currency-wrapper">
                            <div class="likeSelect">
                                <ul style="width:auto;">
                                    <li class="first">报价</li>
                                    <li class="selected">
                                        <a href="/analytics/charts/">EURUSD</a>
                                    </li>
                                    <li >
                                        <a href="/analytics/charts/GBPCHF/5/">GBPCHF</a>
                                    </li>
                                    <li >
                                        <a href="/analytics/charts/GBPJPY/5/">GBPJPY</a>
                                    </li>
                                    <li >
                                        <a href="/analytics/charts/GBPUSD/5/">GBPUSD</a>
                                    </li>
                                    <li >
                                        <a href="/analytics/charts/EURCHF/5/">EURCHF</a>
                                    </li>
                                    <li >
                                        <a href="/analytics/charts/EURGBP/5/">EURGBP</a>
                                    </li>
                                    <li >
                                        <a href="/analytics/charts/EURJPY/5/">EURJPY</a>
                                    </li>
                                    <li >
                                        <a href="/analytics/charts/AUDUSD/5/">AUDUSD</a>
                                    </li>
                                    <li >
                                        <a href="/analytics/charts/NZDUSD/5/">NZDUSD</a>
                                    </li>
                                    <li >
                                        <a href="/analytics/charts/USDCAD/5/">USDCAD</a>
                                    </li>
                                    <li >
                                        <a href="/analytics/charts/USDCHF/5/">USDCHF</a>
                                    </li>
                                    <li >
                                        <a href="/analytics/charts/USDJPY/5/">USDJPY</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="rcc-days-wrapper">
                            <div class="likeSelect">
                                <ul style="width:auto;">
                                    <li class="first">Interval</li>
                                    <li class="selected">
                                        <a href="/analytics/charts/">5分钟</a>
                                    </li>
                                    <li >
                                        <a href="/analytics/charts/EURUSD/60/">1小时</a>
                                    </li>
                                    <li >
                                        <a href="/analytics/charts/EURUSD/1440/">1天</a>
                                    </li>
                                    <li >
                                        <a href="/analytics/charts/EURUSD/10080/">1周</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div id="rc-content-show">
                        <img src="http://www.roboforex.com/images/charts/eurusd5_600x400x4.gif" />
                    </div>

                    <div class="chart-warning">风险警示: 以前交易操作的结果不能保证未来也是同样的结果.</div>

                </div>

                <div class="marg_bot_30">您已选择货币 <span id="text_valuta" style="text-transform: uppercase;">EURUSD</span> 和时间范围 <span id="text_time">5分钟</span></div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var folder = 'http://www.roboforex.com/images/charts/';
        var ext = '_600x400x4.gif';


        $(document).ready(function(){
            $('#rcc-currency, #rcc-days').change(function(){
                $('#rc-content-show').html('<img src="'+folder + $('#rcc-currency').val() + $('#rcc-days').val() + ext + '" />');
                $('#text_valuta').text( $('#rcc-currency').val() );
                $('#h1_charts').text( $('#rcc-currency').val() );
                $('#text_time').text( $('#rcc-days-wrapper ul li').text() );
            });
        });
    </script>



    <div id="right">
        <ul id="r-menu">
            <li >
                <a href="/analytics/economic-calendar/"  >外汇日历</a>


            </li>
            <li >
                <a href="/analytics/forex-forecast/"  >外汇分析 外汇预测</a>


            </li>
            <li >
                <a href="https://my.cn.roboforex.com/cs/analytics"  target="_blank"  >GoldMany分析中心</a>


            </li>
            <li  class="selected" >
                <a>免费外汇图表</a>


            </li>
            <li >
                <a href="/analytics/forex-calculator/"  >外汇保证金计算器</a>


            </li>
            <li >
                <a href="/analytics/interest-rates/"  >外汇利率</a>


            </li>
            <li >
                <a href="/analytics/national-holidays/"  >银行假日</a>


            </li>
            <li >
                <a href="/analytics/tradingcentral/"  >Trading Central的预测和分析</a>


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