 <!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie8 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if IE 9 ]> <html class="no-js ie9 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <title>常见定单类型</title>
    <meta property="og:title" content="常见定单类型" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="/beginner/order-type/" />



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
        /                                              常见定单类型
    </div>



    <div id="left">
        <h1 >常见定单类型</h1>
        <table class="soc-2 share">
            <tr>
                <td class="soc-3">
                    <div class="fb-like" data-href="http://cn.roboforex.com/beginner/order-type/" data-send="false" data-layout="button_count" data-width="82" data-show-faces="true"></div>
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
                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://cn.roboforex.com/beginner/order-type/"></a>
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
                    <div class="g-plusone" data-size="medium" data-annotation="bubble" data-width="300" data-href="http://cn.roboforex.com/beginner/order-type/"></div>

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
        <div ><p>
                为执行交易可以准备和发出交易指令，并且可以监控和管理开仓头寸。为了这些目的，可以使用几种下单类型。定单是经纪公司执行交易的一种指令。包括以下几种类型的定单：</p>
            <p>
                <b>市价单</b></p><p>
                市价单是经纪公司以现价买入或卖出金融品种的定单。经纪公司执行此定单建立交易头寸，买入是以卖方叫价（卖出价）成交的，卖出是以买方出价（买入价）成交的。市价单中含有止损和获利定单.</p>
            <p>
                <b>挂单交易</b></p><p>
                挂单交易是经纪公司未来以固定价格买入或卖出金融品种的一种定单。在未来的价格等于设定的价格水平时，此定单类型用于建立交易头寸。挂单交易包括四种类型：</p>
            <p>
                <b>限价买单</b></p><p>
                在未来的卖方&quot;叫价&quot;（卖出价）等于指定水平时买入。而且当前市场价格水平高于挂单交易设定的价格；</p>
            <p>
                <b>止损买单</b></p><p>
                在未来的卖方&quot;叫价&quot;（卖出价）等于指定水平时买入。而且当前市场价格水平低于挂单交易设定的价格；</p>
            <p>
                <b>限价卖单</b></p><p>
                在未来的买方&quot;出价&quot;（买入价）等于指定水平时卖出。而且当前市场价格水平低于挂单交易设定的价格；
            <p>
                <b>止损卖单</b></p><p>
                在未来的买方&quot;出价&quot;（买入价）等于指定水平时卖出。而且当前市场价格水平高于挂单交易设定的价格。挂单交易中含有止损和获利定单。在挂单交易启动后，它的止损和赢利将会自动附加上。</p>
            <p>
                <b>止损</b></p><p>
                止损定单用于在金融品种价格开始向无盈利方向运行时使亏损最小化。如果价位达到设定的价位线，将会自动关闭。该定单常常与开仓就是与挂单交易结合。在设定止损定单之后，经纪公司进行定单执行。而且，在图表窗口会显示定单价格水平的标记；在设定止损定单之后，经纪公司进行定单执行。而且，在图表窗口会显示定单价格水平的标记；自动止损需查看交易停止.</p>
            <p>
                <b>赢利</b></p>
            获利定单是为了在金融品种价格达到预期水平之后进行获利了结。定单可以与市价单和挂单一起交予经纪公司执行。同样这类定单也可以进行修改或删除。既然这样，您除了要填写获利栏目以外，其他的操作和止损定单一样。 </div>
    </div>

    <div id="right">
        <ul id="r-menu">
            <li >
                <a href="/beginner/how-to-trade-forex/"  >如何进行外汇交易</a>


            </li>
            <li >
                <a href="/beginner/what-is-forex-trading/"  >什么是外汇交易</a>


            </li>
            <li  class="selected" >
                <a>常见定单类型</a>

            </li>
            <li >
                <a href="/beginner/metatrader-4-demo-account/"  >MetaTrader 4模拟帐户</a>
            </li>
            <li >
                <a href="/beginner/expert-advisors/"  >外汇专家顾问(EA)</a>
            </li>
            <li >
                <a href="/beginner/risk/"  >风险控制</a>
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