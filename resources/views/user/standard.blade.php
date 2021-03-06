 <!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie8 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if IE 9 ]> <html class="no-js ie9 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="与GoldMany 经纪人一起开设外汇交易帐户： Level2，使命令实行自动化，浮动0.3PIP点差，1：500交易杠杆，最小点差2PIP，最小交易0.01LOT,专家顾问，袖珍和微账户类型。 " />
    <meta name="keywords" content="交易帐户，在线交易帐户，外汇交易帐户，在线股票交易帐户，股票交易帐户，网上股票交易账，CFD帐户，在线CFD交易帐户，黄金交易帐户，在线黄金交易帐户
" />
    <meta name="w1-verification" content="117844634768" />


    <title>开设帐户</title>
    <meta property="og:title" content="开设帐户" />
    <meta property="og:description" content="与GoldMany 经纪人一起开设外汇交易帐户： Level2，使命令实行自动化，
    浮动0.3PIP点差，1：500交易杠杆，最小点差2PIP，最小交易0.01LOT,专家顾问，袖珍和微账户类型。 " />
    <meta property="og:url" content="/trading-accounts/standard/" />
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
        <a href="/" >首页</a>/<a href="/trading-accounts/standard/" >账户</a>/开设账户
    </div>

    <link rel="stylesheet" href="/css/page.css" type="text/css" />

    <h1>开设账户</h1>
    <p style="text-align: justify">
        正确选择账户类型并利用其账户条件是交易成功的关键。不论您的交易策略和习惯如何，
        GoldMany总有一款账户类型能满足您的需求。
        我们提供的账户类型有：Fix-Cent账户、以及适合专业交易者的ECN和STP浮动点差无柜台交易账户。
    </p>
    <table border="0" cellpadding="7" cellspacing="0" class="table" style="width: 100%">
        <tbody>
        <tr bgcolor="#e0eee0" valign="top">
            <th class="tc-tl" width="150">
                <h2>
                    账户类型</h2>
            </th>
            <th>
                <h2>
                    主要特点</h2>
            </th>
            <th class="tc-tr" width="150">
                <h2>
                    开设账户</h2>
            </th>
        </tr>
        <tr valign="top">
            <td>
                <h2 style="font-size: 22px">
                    <a name="proecn"></a>标准账户&nbsp;</h2>
                <p style="font-size: 10px">
                    特点: 固定点差1.6 点起, 小数点后5位, 订单以市场执行模式,执行少于1秒, NDD (无交易柜台).</p>
            </td>
            <td>
                <p style="font-size: 12px; text-align: justify;">
                    适合专业交易者的ECN 固定点差无柜台交易账户，其特点为点差固定、少于1秒的市场执行模式、无柜台交易、
                    无止损止盈点数限制、从汇市主要ECN系统获取。
                    无手续费，返点要求与标准账户相同。
                </p>
            </td>
            <td class="last">
                <p>
                    <a class="likeBigButton rw-tip_holder"
                       href="https://my.cn.roboforex.com/cs/register/ecn-fix/" target="_blank"
                       title="Opening form for MetaTrader 4 ECN-FixSpread">
                        <span style="width:100px; text-align:center;">开设 MT4</span>
                    </a><br />
                </p>
            </td>
        </tr>
        <tr bgcolor="#e0eee0" valign="top">
            <td>
                <h2 style="font-size: 22px; margin-bottom: 0px;">
                    <a name="proecn"></a>ECN账户</h2>
                <h3 style="margin-top: 0px;">
                    ECN-Pro Affiliate <span class="footnote">*</span></h3>
                <p style="font-size: 10px">
                    特点: 浮动点差, 5 位小数报价, 市场执行模式 (少于1秒), NDD (无交易柜台).</p>
            </td>
            <td>
                <p style="font-size: 12px; text-align: justify;">
                    专业的ECN浮动点差无柜台交易账户，客户下单通过最大金融市场电子通讯系统撮合成交，具有低点差、执行快、
                    无止损止盈和挂单点数限制，
                    有保障。当前，可以支持ECN-Pro的交易平台有
                    <a href="/trade-conditions/metatrader4-mt4/" target="_blank">MT4</a>。
                </p>

            </td>
            <td class="last">
                <p>
                    <a class="likeBigButton rw-tip_holder"
                       href="https://my.cn.roboforex.com/cs/register/ecn-pro/" target="_blank"
                       title="Opening form for MetaTrader 4 Pro ECN"><span style="width:100px;
                       text-align:center;">开设 MT4</span>
                    </a><br />

                    <span style="color: grey; font-size: 10px">&nbsp;</span>
                </p>
            </td>
        </tr>
        <tr valign="top">
            <td>
                <h2 style="font-size: 22px; margin-bottom: 0px;">STP账户</h2>
                <h3 style="margin-top: 0px;">
                    Fix-Affiliate <span class="footnote">*</span></h3>
                <p style="font-size: 10px">
                    账户特点: 固定点差, 4位小数报价,即时执行模式 (forex mini)</p>
            </td>
            <td valign="top">
                <p style="text-align: justify;">
                    固定点差标准账户适合有经验、有特定交易条件要求以执行特殊交易策略的投资者。
                    该账户的特点是点差固定、4位小数报价和即时执行模式。这类账户最适于交易固定点差的智能软件。
                </p>
            </td>
            <td class="last">
                <p>
                    <a class="likeBigButton rw-tip_holder"
                       href="https://my.cn.roboforex.com/cs/register/fix-standard/" target="_blank"
                       title="Opening form for MetaTrader 4 Fix Standard">
                        <span style="width:100px; text-align:center;">开设 MT4</span>
                    </a><br />
                    <span style="color: grey; font-size: 10px">
                        MT4 Fix-Standard 账户在 29 9月 2016, 之前开设, 客户来自 Ukraine.
                    </span>
                </p>
            </td>
        </tr>
        </tbody>
    </table>
    <p style="font-size:11px;">
        <span class="footnote">*</span> - 客户只有在注册新账户或新会员中时使用了代理代码或在使用代理链接注册后
        才可以获得代理账号. 开设这些类型的账户只适用于 GoldMany的合作伙伴.
    </p>
    <p>
        您可以在 &quot;<a href="/trade-conditions/account-types/" target="_blank">账户类型</a>&quot;
        对照表找到更详细的信息.
    </p>



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