 <!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie8 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if IE 9 ]> <html class="no-js ie9 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="公司新闻提供 交易条件的完善，模拟交易大赛等 更新" />
    <meta name="keywords" content="在线交易 外汇 外汇保证金 杠杆 免费15美金 MT4交易平台" />
    <meta name="w1-verification" content="117844634768" />


    <title>公司新闻</title>
    <meta property="og:title" content="公司新闻" />
    <meta property="og:description" content="公司新闻提供 交易条件的完善，模拟交易大赛等 更新" />
    <meta property="og:url" content="/about/news/" />
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
        <a href="/" >首页</a>/<a href="/about/" >关于GoldMany</a>/公司新闻
    </div>

    <div id="left">

        <div id="news-subscribe">
            <form method="post" id="subscribe" enctype="multipart/form-data" action="" target="_self" onsubmit="return false;">
                <p>
                    <input id="s-email" name="email[email]" placeholder="输入您的电子邮件" class="fText" value="" onkeydown="if (key_enter(event)) form_validate_email();" />
                    <button type="button" id="s-submit" class="fSubmit button likeBigButtonLoader" onclick="form_validate_email();" >订阅</button>
                    <a href="/news/rss/" id="s-rss" class="rss-button">
                        <i class="fa fa-rss-square"></i>
                    </a>
                </p>
            </form>

            <script type="text/javascript">
                var err_request = '数据上传时发生一个错误';
                var form_state = 1;

                function form_validate_email()
                {
                    if (form_state == 0) return;
                    form_state = 0;

                    var selector = '#subscribe';
                    var form = $(selector);
                    var validate_path = '/subscription/validateMain/';

                    JsHttpRequest.query(validate_path, form.serialize(),
                            function(result, errors)
                            {
                                form_state = 1;
                                if (result && result.res == 0)
                                {
                                    $.dqValidate(selector, result);
                                } else if (result && result.res == 1 && result.link)
                                {
                                    //alert(result.link);
                                    window.location.assign(result.link);
                                    return;
                                } else
                                {
                                    console.log(errors);
                                }
                            }, true
                    );
                }

            </script>
        </div>

        <h1>公司新闻</h1>
        <div class="marg_top_30"><br />
        </div>

        <div class="newsList">
            <div class="nl-item" ">
            <div class="nli-date">27.09.2016</div>
            <h2><a href="/about/news/change-trading-conditions-10-2016/693/">变化的优化报价和交易条件</a></h2>
            <div class="nli-announce">改变的条件和原则报价在MetaTrader5平台上.</div>
        </div>
        <div class="nl-item" ">
        <div class="nli-date">09.09.2016</div>
        <h2><a href="/about/news/stock-GoldMany-09-2016/692/">使用stock.GoldMany.com在全球公司进行投资</a></h2>
        <div class="nli-announce">本公司推出100美金起步的股票在线网页交易平台.</div>
    </div>
    <div class="nl-item" ">
    <div class="nli-date">02.09.2016</div>
    <h2><a href="/about/news/schedule-trade-change-cfd-xau-xag-09-2016/691/">Changes in trading schedule on CFD and Metals</a></h2>
    <div class="nli-announce">Trading schedule on Contracts for Difference and Metals will be changed.</div>
</div>
<div class="nl-item" ">
<div class="nli-date">31.08.2016</div>
<h2><a href="/about/news/coupons-the-dakar-2017/689/">"2017达喀尔之路"活动礼券已在您的会员中心里</a></h2>
<div class="nli-announce">现在您可以在一个页面就可以查看所有活动以及所获得礼券的最新信息.</div>
</div>
<div class="nl-item" ">
<div class="nli-date">24.08.2016</div>
<h2><a href="/about/news/schedule-trade-change-cfd-08-2016/687/">差价合约FTSE100指数交易时间更改</a></h2>
<div class="nli-announce">差价合约FTSE100指数交易时间将做出更改.</div>
</div>
<div class="nl-item" ">
<div class="nli-date">17.08.2016</div>
<h2><a href="/about/news/new-payment-bitcoin/685/">GoldMany的客户可以使用比特币入金</a></h2>
<div class="nli-announce">我们的客户可以使用趋势支付系统比特币入金交易账户.</div>
</div>
<div class="nl-item" ">
<div class="nli-date">16.08.2016</div>
<h2><a href="/about/news/improved-trading-conditions-08-2016/684/">贵金属交易列表扩充ECN和Pro类型账户交易条件改进</a></h2>
<div class="nli-announce">Pro-Cent, Pro-Standard, ECN-Pro NDD以及ECN-Pro Affiliate类型账户的交易工具列表已经进行了扩充.</div>
</div>
<div class="nl-item" ">
<div class="nli-date">10.08.2016</div>
<h2><a href="/about/news/the-dakar-2017/682/">从GoldMany获得观看2017达喀尔拉力赛的机会!</a></h2>
<div class="nli-announce">公司赠送两张全世界最大越野赛事2017年达喀尔拉力锦标赛的门票.</div>
</div>
<div class="nl-item" ">
<div class="nli-date">27.07.2016</div>
<h2><a href="/about/news/GoldMany-digest-072016/679/">新闻摘要: GoldMany夏季服务热点</a></h2>
<div class="nli-announce">赠金计划改进, 用交易量来增加获利机会以及其它新闻.</div>
</div>
<div class="nl-item" ">
<div class="nli-date">18.07.2016</div>
<h2><a href="/about/news/GoldMany-ltd-license/677/">公司名称更改为GoldMany Ltd</a></h2>
<div class="nli-announce">RoboTrade Ltd新的官方名称以及执照更新.</div>
</div>
</div>
<div class="pagination">
    页:


    <a href="" class="selected"><span>1</span></a>

    <a href="/about/news/page/2/" >
        2
    </a>
    <a href="/about/news/page/3/" >
        3
    </a>
    <a href="/about/news/page/4/" >
        4
    </a>
    <a href="/about/news/page/5/" >
        5
    </a>

    <span class="p-period">...</span>
    <a href="/about/news/page/49/" title="末页"> 49 </a>
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
            <li >
                <a href="/about/business-model/"  >商业模式</a>
            </li>
            <li >
                <a href="/about/liquidity-providers/"  >流动性</a>
            </li>
            <li >
                <a href="/about/regulation/"  >公司监管</a>
            </li>
            <li class="selected">
                <a>公司新闻</a>
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