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


    <title>学习资源</title>
    <meta property="og:title" content="学习资源" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="http://cn.roboforex.com/beginner/" />
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
        <a href="/" >首页</a>
        /                                              学习资源
    </div>

    <div id="left">
        <h1 >学习资源</h1>
        <div ><style type="text/css">
                .info_holder {
                    border: 1px solid #e3e3e3;
                    height: 60px;
                    margin-bottom: 30px;
                    overflow: hidden;
                }
                .info_holder .info_block {
                    width: 10px;
                    padding: 20px 10px 20px 20px;
                    display: inline-block;
                    vertical-align: top;
                    background: #197CD8;
                    height: 20px;
                    position: relative;
                }
                .info_holder .info_block img {
                    width: 20px;
                }
                .info_holder .info_block:after {
                    border: 20px solid transparent;
                    border-left: 10px solid #197CD8;
                    border-top: 40px solid #197CD8;
                    content: "";
                    position: absolute;
                    top: 0;
                    right: 0;
                    margin-right: -30px;
                }
                .info_holder .info_title {
                    display: inline-block;
                    vertical-align: top;
                    width: 520px;
                    padding: 14px;
                    margin-bottom: 0;
                    margin-left: 45px;
                    margin-top: 0;
                    height: 32px;
                    line-height: 32px;
                    font-weight: bold;
                }</style>
            <div class="info_holder">
                <div class="info_block">
                    <img src="http://www.roboforex.com/files/filemanager/image3/ears/d2499527d5-lt.png" /></div>
                <p class="info_title">
                    對所有客戶免費開放的&quot;GoldMany分析中心&quot;.
                    <a href="https://my.cn.roboforex.com/cs/analytics" target="_blank">了解更多.</a></p>
            </div>
            <p>
                外汇交易者是买入和卖出货币. 通常他们的工作是基于简单规则做出交易: 尽可能低的买入和尽可能高的卖出. 在完成以下几个步骤之后, 您将会知道如何在外汇市场交易.</p>
            <ul class="steps" style="list-style:none;">
                <li>
                    <i class="icon">1</i>&nbsp;<a href="#step-1"><span class="step-description">注册会员中心并且开设交易账户</span> </a></li>
                <li>
                    <i class="icon">2</i>&nbsp;<a href="#step-2"><span class="step-description">下载和安装 MetaTrader4 交易平台</span> </a></li>
                <li>
                    <i class="icon">3</i>&nbsp;<a href="#step-3"><span class="step-description">训练如何交易 </span></a></li>
                <li>
                    <i class="icon">4</i>&nbsp;<a href="#step-4"><span class="step-description">存款到您的交易账户 </span> </a></li>
                <li>
                    <i class="icon">5</i>&nbsp;<a href="#step-5"><span class="step-description">外汇市场交易: 如何打开订单</span> </a></li>
            </ul>
            <h2 class="step-title" id="step-1">
                步骤 1.</h2>
            <h3 class="step-description">
                注册会员中心并且开设交易账户</h3>
            <p>
                您需要注册会员中心并且开设交易账户来开始和GoldMany在外汇市场交易. 对于初学交易者, 我们建议Demo-Standard模拟账户或MT4 Fix-Cent 真实美分账户.</p>
            <p>
                模拟账户是一种非常好的方法来学习如何使用虚拟资金进行交易, 没有任何真正资金损失. 您不需要作出任何重大的金融投资, 10 USD 足够开始交易.</p>
            <div style="float: left; margin-right:20px; text-align:center">
                <a href="/images/beginner/beginner_1.1.png">
                    <img alt="" src="/images/beginner/beginner_1.1_sm.png" style="width: 300px; height: 308px;" />
                </a><br />
                <a class="likeBigButton" href="https://my.cn.roboforex.com/cs/register-demo/"
                   style="margin:0 auto; margin-top:15px;" target="_blank"><span>开设模拟账户</span></a>
            </div>
            <div style="float: left; text-align:center">
                <a href="/images/beginner/beginner_1.2.png">
                    <img alt="" src="/images/beginner/beginner_1.2_sm.png" style="width: 300px; height: 308px;" />
                </a><br />
                <a class="likeBigButton rw-tip_holder" href="https://my.cn.roboforex.com/cs/register/fix-cent/"
                   style="margin:0 auto; margin-top:15px;" target="_blank"><span>开设美分账户</span></a>
            </div>
            <div style="clear:both; height:0;margin-bottom:1.5em">
                &nbsp;</div>
            <p>
                注册真实账户之后, 您将收到一个凭证邮件 (账户号码和密码), 它是进入交易平台启动之前使用.</p>
            <h2 class="step-title" id="step-2">
                步骤 2.</h2>
            <h3 class="step-description">
                下载和安装 MetaTrader4 交易平台</h3>
            <p>
                今天, MetaTrader4是世界最受欢迎的交易平台之一. 为了买入和卖出货币, 您需要从我们网站下载这个平台,
                并安装在您的电脑. 这只需几分钟,然后您就可以开始在外汇市场交易.</p>
            <p>
                <img alt="" src="/images/beginner/beginner_2.png" /></p>
            <h2 class="step-title" id="step-3">
                步骤 3.</h2>
            <h3 class="step-description">
                训练如何交易</h3>
            <p>
                为了帮助您学习如何预测货币对的运动, GoldMany公司为您提供大量教学和参考资料.</p>
            <ul class="nav-step3" style="padding:0;">
                <li>
                    <a href="/beginner/forex-education/" target="_blank"><span>外汇教学视频教程</span>
                        <i class="icon icon-courses">&nbsp;</i></a></li>
                <li>
                    <a href="/analytics/forex-forecast/" target="_blank"><span>技术分析和外汇预测</span>
                        <i class="icon icon-graph">&nbsp;</i></a></li>
                <li>
                    <a href="/beginner/webinars/" target="_blank"><span>来自GoldMany专家的研讨会</span>
                        <i class="icon icon-webinars">&nbsp;</i></a></li>
            </ul>
            <h2 class="step-title" id="step-4">
                步骤 4.</h2>
            <h3 class="step-description">
                存款到您的交易账户</h3>
            <p>
                如果您觉得您已经准备好开始用真实资金交易, 您需要存款到您的交易账户.
                您可以在您会员中心&quot;<a href="http://my.cn.roboforex.com/operations/deposit-funds/" target="_blank">
                    出入金</a>&quot;版块完成这个操作. 您可以使用任何可用的最方便您的支付方式存款到您的交易账户.
                当您进行存款的时候, 可以从我们公司得到高达50% 奖金.</p>
            <p>
                <img alt="" src="/images/beginner/beginner_4.png" /></p>
            <h2 class="step-title" id="step-5">
                步骤 5.</h2>
            <h3 class="step-description">
                外汇市场交易: 如何打开订单</h3>
            <p>
                存款到交易账户之后, 您将在交易终端看到您的账户余额.</p>
            <p>
                <img alt="" src="/images/beginner/beginner_5.1.png" /></p>
            <p>
                在MetaTrader4平台做出一个交易, 您需要右键单击您想要交易的货币对图表,从&quot;交易&quot;窗口选择&quot;
                新订单&quot;.</p>
            <p>
                <img alt="" src="/images/beginner/beginner_5.2.png" /></p>
            <p>
                在那之后, 您的订单被打开, 这意味着您已经独立的开始外汇市场交易.</p>
            <p>
                <img alt="" src="/images/beginner/beginner_5.3.png" style="width: 648px; height: 421px;" /></p>
            <p>
                如果您有任何问题, 您可以使用公司网站的以下方法向我们的在线支持专家提出: 在线客服,
                免费电话&quot;网络电话&quot; 和&quot;回电服务&quot;.</p>
            <p>
                <img alt="" src="/images/beginner/beginner_5.4.png" /></p>
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