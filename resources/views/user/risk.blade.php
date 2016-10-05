 <!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie8 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if IE 9 ]> <html class="no-js ie9 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <title>风险控制</title>
    <meta property="og:title" content="风险控制" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="/beginner/risk/" />

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
        /                                              <a href="/beginner/" >学习资源</a>
        /                                              风险控制
    </div>



    <div id="left">
        <h1 >风险控制</h1>
        <div >
            <p>
                外汇市场与其它投资市场一样，也存在着风险。而外汇保证金交易在为投资者带来高额获利机会的同时，
                也随之带来了风险。但没有人会因噎废食，对于投资者而言，不会因为可能存在的风险而放弃获取高额利润的机会。
                我们为投资者提供以下建议，以帮助您尽可能的将风险最小化，同时实现盈利最大化。
                <br>
                　</p>
            <p><b>控制好每次交易的开仓比例</b>，对于入市不久的交易者来说，开仓比例不能过大，
                只有当积累了充分的交易经验以及拥有持续良好的交易记录时再考虑逐步扩大开仓比例。对于初涉汇市的新手，
                我们认为开仓比例不超过
                5% 会比较安全。而拥有比较好经验的交易者一般可以开仓 10%( 100 倍的杠杆 )。</p>
            <p><b>每次交易都要设置止损价</b>，并且严格执行，当汇价向自己操作的有利方向运行时，
                可以不断跟踪缩小止损 (
                比如做多的，当汇价上涨后可以提高止损价；做空的，当汇价下跌时可以下调止损价
                )，但是反过来当汇价向不利于自己开仓方向运行时不能扩大止损，不然就有违原先为控制风险而设置止损的初衷了。
            </p>
            <p><b>设置止赢也能降低风险</b>，因为未平仓部位产生的浮动盈利不算真正赚钱，只有获利了结了才是真正赚到钱。
                一般来说短线操作，止赢可以相对小些，长线操作，止赢相对大些。
                另外，每次操作时止赢空间最好是止损空间的两倍甚至更高，只有潜在收益风险比相对较高时才值得去做。
            </p>
            <p><b>持仓时间不要过长</b>，因为持仓时间越长，期间可能发生的不确定事件就越多，给开仓部位带来的风险就越大，
                所以短线交易的潜在风险要小于长线交易。
            </p>
            <p><b>努力提高自己交易的稳定性</b>，一段时期内获取同样点数收益的交易记录波动比较小，其蕴涵的风险也较小。 </p>
            <p><b>避免持仓过重大数据、事件的公布</b>，做短线的也不要持仓过周末。 </p>
            <p>
                此外，提高交易平台运用的熟练度，也有助于投资者更好的控制外汇交易风险。在实际操作前，
                通过大量的模拟交易平台操作，可以有效地规避因为下错单、下反单等低级错误所造成的无谓损失。</p>
        </div>
    </div>


    <div id="right">
        <ul id="r-menu">
            <li >
                <a href="/beginner/how-to-trade-forex/"  >如何进行外汇交易</a>


            </li>
            <li >
                <a href="/beginner/what-is-forex-trading/"  >什么是外汇交易</a>


            </li>
            <li >
                <a href="/beginner/order-type/"  >常见定单类型</a>


            </li>
            <li >
                <a href="/beginner/metatrader-4-demo-account/"  >MetaTrader 4模拟帐户</a>


            </li>
            <li >
                <a href="/beginner/expert-advisors/"  >外汇专家顾问(EA)</a>


            </li>
            <li  class="selected" >
                <a>风险控制</a>


            </li>
            <li >
                <a href="/beginner/glossary/"  >常用术语</a>
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