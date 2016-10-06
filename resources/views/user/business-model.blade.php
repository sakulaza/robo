 <!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie8 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if IE 9 ]> <html class="no-js ie9 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="公司提供STP（直通式）交易模式，无交易员交易，" />
    <meta name="keywords" content="STP直通式交易 无交易员交易 优势性的外汇交易条件" />
    <meta name="w1-verification" content="117844634768" />


    <title>外汇交易模式</title>
    <meta property="og:title" content="外汇交易模式" />
    <meta property="og:description" content="公司提供STP（直通式）交易模式，无交易员交易，" />
    <meta property="og:url" content="/about/business-model/" />
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
        <a href="/" >首页</a>/<a href="/about/" >关于GoldMany</a>/商业模式
    </div>

    <div id="left">
        <h1 >外汇交易模式</h1>
        <div ><div>
                <div>
                    <div class="note_block">
                        <p style="text-align: justify">
                            有两种典型的商业模式:</p>
                        <ul class="terms" style="margin-bottom: 0;">
                            <li>
                                <h4 style="color: #205d83;">
                                    直通式处理 (STP)</h4>
                                <p style="text-align: justify">
                                    这种模式, 交易公司是客户和报价提供者之间的中介. 客户的订单以STP模式自动的发送给报价提供者 , 交易公司只是活动点差的部分佣金. 这种模式交易公司只有兴趣提高交易者的交易量,因为可以通过每笔交易获得佣金 .&nbsp; 交易商以STP交易和客户没有利益冲突.</p>
                            </li>
                            <li>
                                <h4 style="color: #205d83;">
                                    做市商（Market Maker）</h4>
                                <p style="text-align: justify; margin-bottom: 0;">
                                    做市商模式下客户通过汇商买卖，汇商此时是客户的交易对手。如果客户盈利则汇商亏损，反之则反是。大多数客户在外汇市场的经验有限，初期很容易便出现交易亏损。</p>
                            </li>
                        </ul>
                    </div>
                    <h2>
                        GoldMany集团使用的模式:</h2>
                    <h4 style="color: rgb(32, 93, 131);">
                        Gold Many Global Ltd 有限公司的STP模式</h4>
                    Gold Many Global Ltd 有限公司运用STP桥接技术，使客户直接对接流动性提供商。<br />
                    <h4 style="color: #205d83;">
                        Gold Many Global Ltd&nbsp;混合商业模式</h4>
                    <p style="text-align: justify">
                        Gold Many Global Ltd在美分账户中扮演做市商角色，即为客户交易的对手方。这是因为，流动性提供商对每笔交易有最低数量要求。</p>
                    <p style="text-align: justify">
                        对于所有标准和ECN账户，GoldMany通过STP桥接技术接入流动性提供商。所有超过0.01手（即1000个单位）的交易下单将发送至中间桥然后传送到流动性提供商。每笔交易GoldMany从中收取部分点差。</p>
                </div>
            </div>
        </div>
    </div>


    <div id="right">
        <ul id="r-menu">
            <li >
                <a href="/about/why-GoldMany/"  >为什么选择GoldMany</a>
            </li>
            <li >
                <a href="/about/mission/"  >公司宗旨</a>
            </li>
            <li class="selected">
                <a  >商业模式</a>
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