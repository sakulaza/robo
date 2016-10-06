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
    <meta property="og:url" content="/trade-conditions/terminals/" />
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
    <p>
        GoldMany为您提供多种交易平台，助您在外汇市场驰骋。您可从列表中选取最钟意的交易终端以及对应移动终端，
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
                   href="https://download.mql5.com/cdn/web/8248/mt4/goldmanyglobal4setup.exe"
                   target="_blank">
                    <span>更多</span></a></div>
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