 <!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie8 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if IE 9 ]> <html class="no-js ie9 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="w1-verification" content="117844634768" />


    <title>交易终端</title>
    <meta property="og:title" content="交易终端" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="http://cn.roboforex.com/trade-conditions/terminals/" />
    <meta property="og:image" content="/themes/rbforex/images/logo-soc-share.png" />

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
        <a href="/" >首页</a>/<a href="/trade-conditions/account-types/" >条件</a>/交易终端
    </div>

    <link rel="stylesheet" href="/themes/rbforex/css/page.css" type="text/css" />

    <h1>
        <strong>交易终端</strong></h1>
    <table class="soc-2 share">
        <tr>
            <td class="soc-3">
                <div class="fb-like" data-href="http://cn.roboforex.com/trade-conditions/terminals/" data-send="false" data-layout="button_count" data-width="82" data-show-faces="true"></div>
                <div id="fb-root"></div>
                <script>

                    (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id))
                            return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&status=0";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));

                </script>
            </td>
            <td class="soc-3 linkedin">
                <script src="//platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
                <script type="IN/Share" data-counter="right"></script>
            </td>
            <td>
                <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://cn.roboforex.com/trade-conditions/terminals/"></a>
                <script>!function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//platform.twitter.com/widgets.js";
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, "script", "twitter-wjs");</script>
            </td>
            <td>
                <!-- Place this tag where you want the +1 button to render. -->
                <div class="g-plusone" data-size="medium" data-annotation="bubble" data-width="300" data-href="http://cn.roboforex.com/trade-conditions/terminals/"></div>

                <!-- Place this tag after the last +1 button tag. -->
                <script type="text/javascript">

                    (function() {
                        var po = document.createElement('script');
                        po.type = 'text/javascript';
                        po.async = true;
                        po.src = 'https://apis.google.com/js/plusone.js';
                        var s = document.getElementsByTagName('script')[0];
                        s.parentNode.insertBefore(po, s);
                    })();

                </script>
            </td>
        </tr>
    </table>
    <p>
        RoboForex为您提供多种交易平台，助您在外汇市场驰骋。您可从列表中选取最钟意的交易终端以及对应移动终端，
        从而出门在外一样自由交易。请根据个人使用喜好选择最适合您的交易终端。</p>
    <ul class="terminal-list terminal-list-ch">
        <li style="height:420px;">
            <div class="img">
                <img alt="" src="/images/terminals/platform-item-1.jpg" /></div>
            <div class="t-name">
                MetaTrader4</div>
            <div class="t-desc">
                MetaTrader4终端在国际金融市场交易范围最广：外汇、期货和CFD差价合同都可以在该平台交易。</div>
            <div class="t-buttons">
                <a class="t-button lighter" href="/trade-conditions/metatrader4-mt4/" target="_blank">
                    <span>阅读</span></a>
                <a class="t-button modal-trigger" data-terminal="mt4"
                   href="https://my.cn.roboforex.com/cs/help/download-center/" target="_blank">
                    <span>更多</span></a></div>
        </li>
        <li style="height:420px;">
            <div class="img">
                <img alt="" src="/images/terminals/platform-item-2.jpg" /></div>
            <div class="t-name">
                MetaTrader5</div>
            <div class="t-desc">
                MetaTrader5是金融市场交易终端更新版本：可交易外汇、股票、期货和差价合同。</div>
            <div class="t-buttons">
                <a class="t-button lighter" href="/trade-conditions/metatrader5-mt5/" target="_blank">
                    <span>阅读</span></a>
                <a class="t-button modal-trigger" data-terminal="mt5"
                   href="https://my.cn.roboforex.com/cs/help/download-center/" target="_blank"><span>更多</span>
                </a></div>
        </li>
        <li style="height:420px;">
            <div class="img">
                <img alt="" src="/images/terminals/platform-item.png"
                     style="width: 292px; height: 240px;" /></div>
            <div class="t-name">
                WebTrader RoboForex</div>
            <div class="t-desc" style="margin-bottom: 0px;">
                WebTrader网页交易终端，功能全，无需另外安装，只需点击几下鼠标更可进入MT4账户操作。</div>
            <div class="t-buttons" style="padding-top: 0;">
                <a class="t-button lighter" href="/trade-conditions/webtrader/" target="_blank">
                    <span>阅读</span></a>
                <a class="t-button" href="https://webtrader.roboforex.com" target="_blank">
                    <span>运行</span></a></div>
        </li>
        <li style="height:420px;">
            <div class="img">
                <img alt="" src="/images/terminals/platform-item-7.jpg" /></div>
            <div class="t-name">
                MultiTerminal</div>
            <div class="t-desc">
                RoboForex 多账户终端适用于同时管理多个投资者账户的账户经理或者同时操作多个账户的交易者。</div>
            <div class="t-buttons">
                <a class="t-button lighter" href="/operations/mam-multiterminal/" target="_blank">
                    <span>阅读</span></a>
                <a class="t-button modal-trigger" data-terminal="mt4"
                   href="https://my.cn.roboforex.com/cs/help/download-center/" target="_blank">
                    <span>更多</span></a></div>
        </li>
        <li style="height:420px;">
            <div class="img">
                <img alt="" src="/images/terminals/g_ctrader.png" style="width: 292px; height: 240px;" /></div>
            <div class="t-name">
                cTrader</div>
            <div class="t-desc">
                cTrader是基于无处理平台技术（NDD）的交易终端，无做庄、无重新报价、订单执行无延迟，确保订单执行的STP直通模式。</div>
            <div class="t-buttons">
                <a class="t-button lighter" href="/trade-conditions/ctrader/" target="_blank">
                    <span>阅读</span></a>
                <a class="t-button modal-trigger" data-terminal="ctrader"
                   href="https://my.cn.roboforex.com/cs/help/download-center/" target="_blank">
                    <span>更多</span></a>
            </div>
        </li>
        <li style="height: 420px;">
            <!-- Not divide! -->
            <div class="img">
                <img alt="" src="/images/terminals/ctrader_mobile_05.jpg" style="width: 292px; height: 240px;" />
            </div>
            <div class="t-name">
                cTrader Mobile Web</div>
            <div class="t-desc">
                cTrader网页移动平台-基于NDD(无柜台交易)技术的交易平台. 无须任何特别的设置就能让交易者通过IOS或安卓系统的移动设备使用浏览器进行交易.</div>
            <div class="t-buttons">
                <a class="t-button lighter" href="/trade-conditions/ctrader/ctrader-web/" target="_blank">
                    <span>阅读</span></a>
                <a class="t-button" href="http://ct.roboforex.com/" target="_blank"><span>运行</span></a>
            </div>
        </li>
        <li style="height: 420px;">
            <!-- Not divide! -->
            <div class="img">
                <img alt="" src="/images/terminals/ctrader_app.png" style="width: 292px; height: 240px;" /></div>
            <div class="t-name">
                cTrader iOS/Android</div>
            <div class="t-desc">
                偏好手机应用的客户可安装使用为iOS和安卓开发的移动交易平台，包含ECN平台的所有强大功能。</div>
            <div class="t-buttons">
                <a class="t-button lighter" href="https://play.google.com/store/apps/details?id=com.roboforex.ct"
                   target="_blank"><span>Android</span>
                </a>
                <a class="t-button" href="https://itunes.apple.com/app/roboforex-ctrader/id955758232?mt=8"
                   style="width: 95px;" target="_blank"><span>iOS</span></a>
            </div>
        </li>
        <li style="height: 420px;">
            <!-- Not divide! -->
            <div class="img">
                <img alt="" src="/images/terminals/ctrader_web_05.jpg" style="width: 292px; height: 240px;" />
            </div>
            <div class="t-name">
                cTtrader Web</div>
            <div class="t-desc">
                cTrader Web 是全功能版本的cTrader 终端, 旨在通过NDD技术使用任何互联网浏览器进入国际货币市场. 该终端
                <span>运行</span>在Windows, Linux, 和 Mac OS 操作系统.</div>
            <div class="t-buttons">
                <a class="t-button lighter" href="/trade-conditions/ctrader/ctrader-web/" target="_blank">
                    <span>阅读</span></a>
                <a class="t-button" href="https://ct.roboforex.com/" target="_blank"><span>运行</span></a>
            </div>
        </li>
        <li style="height: 420px;">
            <!-- Not divide! -->
            <div class="img">
                <img alt="" src="/images/terminals/mobile%20trader_app.png" style="width: 292px; height: 240px;" />
            </div>
            <div class="t-name">
                RoboForex MobileTrader</div>
            <div class="t-desc">
                RoboForex移动交易平台能让您使用任何安卓或IOS的移动设备进行交易. 程序支持所有类型的MT4账号.</div>
            <div class="t-buttons">
                <a class="t-button lighter" href="https://play.google.com/store/apps/details?id=com.roboforex.webtrader"
                   target="_blank"><span>Android</span></a>
                <a class="t-button" href="https://itunes.apple.com/us/app/mobiletrader-roboforex/id1137639247?mt=8"
                   style="width: 95px;" target="_blank"><span>iOS</span></a>
            </div>
        </li>
        <li style="height:420px;">
            <div class="img">
                <img alt="" src="/images/terminals/platform-item-4.jpg" /></div>
            <div class="t-name">
                Android Trader</div>
            <div class="t-desc">
                AndroidTrader 是一个功能齐全的交易终端, 它允许您使用任何<span>运行</span>Android OS的移动设备进行交易..</div>
            <div class="t-buttons">
                <a class="t-button lighter" href="/operations/mobile-forex/androidtrader/" target="_blank">
                    <span>阅读</span></a>
                <a class="t-button" href="http://play.google.com/store/apps/details?id=net.metaquotes.metatrader4"
                   target="_blank"><span>更多</span></a>
            </div>
        </li>
        <li style="height:420px;">
            <div class="img">
                <img alt="" src="/images/terminals/platform-item-5.jpg" /></div>
            <div class="t-name">
                iPhone/iPad Trader</div>
            <div class="t-desc">
                iPhone/iPad Trader 是一个为iPhone/iPad功能齐全的移动交易终端, 它允许您在外汇市场工作并完全兼容MetaTrader4 和MetaTrader5交易平台.</div>
            <div class="t-buttons">
                <a class="t-button lighter" href="/operations/mobile-forex/iphonetrader/" target="_blank">
                    <span>阅读</span></a>
                <a class="t-button" href="http://itunes.apple.com/us/app/metatrader-4/id496212596"
                   target="_blank"><span>更多</span></a>
            </div>
        </li>
        <li style="height:420px;">
            <div class="img">
                <img alt="" src="/images/terminals/g_mt5_linux.png"
                     style="width: 292px; height: 240px;" />
            </div>
            <div class="t-name">
                MetaTrader4 Linux</div>
            <div class="t-desc">
                MetaTrader4 Terminal (MT4) Linux 是一个交易终端允许交易者使用Linux操作系统在外汇市场进行操作.</div>
            <div class="t-buttons">
                <a class="t-button lighter" href="/trading-accounts/download-metatrader4-mt4/metatrader4-mt4-for-linux/"
                   target="_blank"><span>阅读</span></a>
                <a class="t-button modal-trigger" data-terminal="mt4"
                   href="https://my.cn.roboforex.com/cs/help/download-center/" target="_blank"><span>更多</span></a>
            </div>
        </li>
        <li style="height: 420px;">
            <!-- Not divide! -->
            <div class="img">
                <img alt="" src="/images/terminals/mt5_mac_240.png" style="width: 292px; height: 240px;" />
            </div>
            <div class="t-name">
                MetaTrader5 Mac OS</div>
            <div class="t-desc">
                Mac OS系统的MetaTrader5 交易平台是最新的交易终端,在苹果操作系统下运行特别开发的.</div>
            <div class="t-buttons">
                <a class="t-button lighter" href="/trade-conditions/metatrader5-mt5/metatrader5-mt5-for-macintosh/" target="_blank">
                    <span>阅读</span>
                </a>
                <a class="t-button modal-trigger" data-terminal="mt5"
                   href="http://repository.playonmac.com/PlayOnMac/PlayOnMac_4.1.8.dmg" target="_blank">
                    <span>更多</span></a>
            </div>
        </li>
        <li style="height: 420px;">
            <div class="img">
                <img alt="" src="/images/terminals/stock-terminal.png"
                     style="width: 292px; height: 240px;">
            </div>
            <div class="t-name"> Umstel</div>
            <div class="t-desc"> RoboForex为您带来一个可交易美股的方便且现代化的网页平台. 交易投资从100美金起并且交易超过8,000只的股票和交易所基金.</div>
            <div class="t-buttons">
                <a class="t-button lighter" href="https://stock.roboforex.com/" target="_blank">
                    <span>更多</span></a>
                <a class="t-button" href="https://roboforex.tradingidea.com/terminal" target="_blank">
                    <span>启动</span></a>
            </div>
        </li>
    </ul>





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