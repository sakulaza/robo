 <!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie8 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if IE 9 ]> <html class="no-js ie9 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="定单的执行规则，包括止损 止盈 杠杆 挂单 头寸" />
    <meta name="keywords" content="外汇交易 保证金交易 MT4交易平台 免费5美金 止损 止盈 杠杆 挂单 头寸" />
    <meta name="w1-verification" content="117844634768" />


    <title>订单类型</title>
    <meta property="og:title" content="订单类型" />
    <meta property="og:description" content="定单的执行规则，包括止损 止盈 杠杆 挂单 头寸" />
    <meta property="og:url" content="/trade-conditions/forex-order-types/" />
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
        <a href="/" >首页</a>/<a href="/trade-conditions/account-types/" >条件</a>/订单类型
    </div>

    <div id="left">
        <h1 >账户类型 定单执行 止损 止盈 杠杆 挂单 头寸</h1>
        <table class="soc-2 share">
            <tr>
                <td class="soc-3">
                    <div class="fb-like" data-href="http://cn.roboforex.com/trade-conditions/forex-order-types/" data-send="false" data-layout="button_count" data-width="82" data-show-faces="true"></div>
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
                    <a href="https://twitter.com/share" class="twitter-share-button"
                       data-url="/trade-conditions/forex-order-types/"></a>
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
                    <div class="g-plusone" data-size="medium" data-annotation="bubble" data-width="300"
                         data-href="/trade-conditions/forex-order-types/"></div>

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
        <div ><h2>
                定单类型</h2>
            <p>
                客户终端允许您创建和发送命令,执行买卖交易.该终端还可以控制和管理仓位.为此,有几种类型的交易指令.该命令是对客户进行交易的交易指令。该终端使用下列命令::</p>
            <p>
                <strong>&ldquo;市价定单&rdquo; </strong>是一个以现价买或卖金融工具的命令. 执行该命令将立即开设一个交易头寸.</p>
            <p>
                <strong>&ldquo;挂单&rdquo; </strong>是一个在未来以指定价格开仓或平仓的命令. 该命令用于当价格达到一定的价位时开设一个交易头寸. 下面的挂单类型有效的: 买入限价, 买入止损, 卖出限价, 和卖出止损. 一个挂单应跟随止损和获利定单. 当一个挂单被激活时, 止损和获利定单会自动在开仓价位执行.</p>
            <p>
                <strong>&ldquo;止损&rdquo; </strong>- 是当金融工具的价格向不获利的方向移动时,旨在减少损失的一个命令. 这样的定单总是和未结头寸或者挂单相联系的. 检查这种定单是否符合多头条件, 使用买入价, 空头是使用卖出价.</p>
            <p>
                <strong>&ldquo;获利&rdquo; </strong>是当金融工具的价格达到理想水平时,旨在赚钱的一个命令. 执行该命令会平仓. 一个获利定单总是和未结头寸或挂单相联系的. 检查这种定单是否符合多头条件是使用买入价,空头是使用卖出价.</p>
            <h2>
                定单执行</h2>
            <p>
                客户定单执行的质量是GoldMany优先考虑的.</p>
            <p>
                1. 一个金融工具的价格有2个值: 买入价和卖出价. 买入价是一个金融工具在市场上的出售价格. 卖出价是一个金融工具在市场上的购入价格. 客户开仓一个空头或平仓一个多头使用买入价. 客户开仓一个多头或平仓一个空头是卖出价.点差是卖出价和买入价的差价.</p>
            <p>
                2. Fix-Cent 和 Fix-Standard 账户是使用 &laquo;即时执行&raquo; 执行模式. Pro-Cent 和 Pro-Standard 账户是使用 &laquo;市价执行&raquo; 执行模式.</p>
            <p>
                3. 如果市场条件不同于一般条件,定单处理时间可能会延长.</p>
            <p>
                4. Pro-Cent 和 Pro-Standard 账户的卖出止损,买入止损,买入限价, 卖出限价,获利, 止损定单的是以处理定单时的现价执行.</p>
            <p>
                5. Fix-Cent, Fix-Standard 账户的卖出止损,买入止损,止损定单会不以指定价格执行, 如果这些定单是以gap模式接受处理.</p>
            <p>
                6. 为了开仓交易, 客户的交易账户必须有可用资金 (可用保证金) . 保证金的大小取决于自己的杠杆数. 客户可选择的最大杠杆是 1:1000.</p>
            <p>
                7. 客户必须保持交易账户的保证金在要求的水平之上. 如果没有,头寸将根据交易规则强行平仓.</p>
            <p>
                8. 保证金水平是保证金股权的一个百分比率. Margin Level = (Equity / Margin) * 100.</p>
        </div>
    </div>

    <div id="right">
        <ul id="r-menu">
            <li >
                <a href="/trade-conditions/account-types/"  >账户类型</a>


            </li>
            <li >
                <a href="/trade-conditions/specifications/"  >合约细则</a>


            </li>
            <li >
                <a href="/trade-conditions/ecn/"  >专业ECN 账户</a>


            </li>
            <li >
                <a href="/trade-conditions/cfd-trading-goldmany/"  >CFD(差价合约）</a>


            </li>
            <li  class="selected" >
                <a>订单类型</a>
            </li>
            <li >
                <a href="/trade-conditions/terminals/"  >交易终端</a>


            </li>
            <li >
                <a href="/trade-conditions/metatrader4-mt4/"  >MetaTrader 4 (MT4)</a>


            </li>
            <li >
                <a href="/trade-conditions/mobile-forex/"  >«移动外汇» 服务</a>


            </li>
        </ul>



        <ul id="r-icons">
            <li><a href="https://my.cn.roboforex.com/cs/register/" class="rw-tip_holder" id="fdi1">开设<br />
                    真实账户</a></li>
            <li><a href="/trading-accounts/demo/" id="fdi2">开设<br />模拟账户</a></li>
            <li>
                <a href="https://my.cn.roboforex.com/cs/help/download-center/" class="modal-trigger"
                   data-terminal="mt4" id="fdi3r">下载<br />METATRADER4</a>
            </li>
            <li class="last">
                <a href="https://my.cn.roboforex.com/cs/help/download-center/" id="fdi4"
                                class="modal-trigger" data-terminal="mt4"
                   onclick="gaqPush('Downloads Multiterminal','EXE');
                   ga('send', 'event', 'Download','click','Multiterminal');"
                   target="_blank">下载MultiTerminal</a></li>
        </ul>
        <div class="risk-warning">风险警示: 外汇交易意味着您是自愿承担失去资金的可能风险.</div>
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