<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js ie8 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="w1-verification" content="117844634768"/>


    <title>交易服务</title>
    <meta property="og:title" content="交易服务"/>
    <meta property="og:description" content=""/>
    <meta property="og:url" content="/operations/"/>
    <meta property="og:image" content="/themes/rbforex/images/logo-soc-share.png"/>

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

            $('.nav.nav-pills > li').each(function () {
                var $this = $(this);
                if (($this).find('.dropdown-menu li').length > 0) {
                    $this.find('.nav-wrapper>a').removeAttr('href')
                }
            });
        });
    </script>


    <div id="path">
        <a href="/">首页</a>/交易服务
    </div>


    <div id="left">
        <h1>交易服务</h1>
        <div>
            <div>
                <style type="text/css">
                    @import url("/css/font-awesome.min.css");
                </style>
                <div class="trading">
                    <p>
                        加入GoldMany，交易者可尽享最优交易条件，从而在外汇市场尽情驰骋。GoldMany订单执行速度快、账户类型多、
                        账户管理便捷、多种交易终端可选、交易条件优惠，客户可充分享受在线交易的优势和乐趣。
                    </p>
                    <ul class="buttons">
                        <li>
                            <a class="likeBigButton rw-tip_holder"
                               target="_blank" title="外汇交易涉及高风险, 可能导致失去您的整个投资.">
                                <span>注册 </span>
                            </a>
                        </li>
                    </ul>
                    <h3 class="styled-h first">
                        <i class="icon">&nbsp;</i><span class="styled-h-text">GoldMany 交易平台</span></h3>
                    <p>
                        GoldMany提供给您几个交易平台, 能帮助您在外汇市场交易. 您可以从列表选择交易平台,
                        包括最流行的交易终端和当您在室外或办公室可用于交易的手机版本.
                    </p>
                    <ul class="trading-platforms">
                        <li style="width: 38%;">
                            <i class="icon icon-monitor" style="margin-bottom: 5px;">&nbsp;</i>
                            <ul class="trading-platforms-links">
                                <li>
                                    <a class="link-item" href="/trade-conditions/metatrader4-mt4/"
                                       target="_blank">MetaTrader4
                                    </a>
                                </li>
                            </ul>
                            <div class="clearfix">
                                &nbsp;</div>
                        </li>
                        <li style="width: 30%;">
                            <i class="icon icon-phone">&nbsp;</i>
                            <ul class="trading-platforms-links">
                                <li>
                                    <a class="link-item" href="/operations/mobile-forex/iphonetrader/"
                                       target="_blank">iPhone Trader
                                    </a>
                                </li>
                                <li>
                                    <a class="link-item" href="/operations/mobile-forex/iphonetrader/"
                                       target="_blank">iPad Trader
                                    </a>
                                </li>
                                <li>
                                    <a class="link-item" href="/operations/mobile-forex/androidtrader/"
                                       target="_blank">Android Trader
                                    </a>
                                </li>
                            </ul>
                            <div class="clearfix">
                                &nbsp;
                            </div>
                        </li>
                    </ul>
                    <p style="margin-top: 40px;">
                        <a href="/trade-conditions/terminals/" target="_blank">更多交易终端</a></p>
                    <h3 class="styled-h first">
                        <i class="icon">&nbsp;</i>
                        <span class="styled-h-text">交易账户类型</span>
                    </h3>
                    <p>
                        GoldMany 建立广泛的外汇账户能够满足任何交易者的需求和要求.
                    </p>
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="tc-tl">
                                Fix-Cent&nbsp;</th>
                            <th>
                                ECN账户
                            </th>
                            <th class="tc-tr">
                                STP账户
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                固定点差
                            </td>
                            <td>
                                固定点差
                            </td>
                            <td class="last">
                                浮动点差
                            </td>
                        </tr>
                        <tr>
                            <td>
                                小数点后4位
                            </td>
                            <td>
                                小数点后4位
                            </td>
                            <td class="last">
                                小数点后5位
                            </td>
                        </tr>
                        <tr class="last">
                            <td class="tc-bl">
                                即时执行模式
                            </td>
                            <td>
                                即时执行模式
                            </td>
                            <td  class="tc-br last">
                                市场执行模式
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <ul class="buttons">
                        <li>
                            <a class="likeBigButton" href="/trading-accounts/standard/" target="_blank">
                                <span>开设交易账户</span>
                            </a>
                        </li>
                    </ul>
                    <p>
                        <a class="rw-tip_holder"
                           target="_blank">更多交易账户类型
                        </a>
                    </p>
                    <div class="left">
                        <h3 class="styled-h" style="margin-top:0;">
                            <i class="icon">&nbsp;</i>
                            <span class="styled-h-text">GoldMany 分析服务</span>
                        </h3>
                        <ul class="services">
                            <li style="line-height: 34px;">
                                <i class="icon icon-pie" style="width:18px;">&nbsp;</i>
                                <a href="/analytics/forex-forecast/" target="_blank">
                                    外汇预测和分析</a>
                            </li>


                            <li style="line-height: 34px;">
                                <i class="fa fa-tasks" style="width: 31px;color: #455A77;font-size: 16px;">&nbsp;</i>
                                <a
                                        target="_blank">
                                    <span class="bonus-title">GoldMany分析中心</span>
                                </a>
                            </li>
                            <li style="line-height: 34px;">
                                <i class="fa fa-area-chart" style="width: 31px;color: #455A77;font-size: 16px;">
                                    &nbsp;
                                </i>
                                <a href="/analytics/tradingcentral/" target="_blank">
                                    <span class="bonus-title">Trading Central的预测和分析</span>
                                </a>
                            </li>
                            <li style="line-height: 34px;">
                                <i class="icon icon-news" style="width:18px;">&nbsp;</i>
                                <a
                                        target="_blank">
                                    外汇新闻
                                </a>
                            </li>
                            <li style="line-height: 34px;">
                                <i class="icon icon-calendar" style="width:18px;">&nbsp;</i>
                                <a href="/analytics/economic-calendar/" target="_blank">经济日历</a>
                            </li>
                        </ul>
                        <p>
                            <a class="services-more" href="/analytics/" target="_blank">更多分析服务</a>
                        </p>
                    </div>
                    <div class="right">
                        <h3 class="styled-h" i="" style="margin-top:0;">
                            &nbsp;
                            <span class="styled-h-text">GoldMany当前奖励和提供</span>
                        </h3>
                        <ul class="bonuses">
                            <li style="line-height: 34px;">
                                <img class="icon" src="/images/trading/tesla_client.png"
                                     style="width:18px;"/>
                                <a href="/operations/bonuses-promotions/forex-bonus-deposit/"
                                        target="_blank">
                                    <span class="bonus-title">经典存款赠金最高至115%</span>
                                </a>
                            </li>
                            <li style="line-height: 34px;">
                                <i class="icon icon-scales" style="width:18px">&nbsp;</i>
                                <a href="/operations/bonuses-promotions/tradable-bonus/"
                                        target="_blank">
                                    <span class="bonus-title">可交易的奖金 50％</span>
                                </a>
                            </li>
                            <li style="line-height: 34px;">
                                <img class="icon"
                                     src="/images/trading/leverage_client.png"
                                     style="width:18px"/>
                                <a href="/operations/bonuses-promotions/1000-up-leverage/"
                                                            target="_blank">
                                    <span class="bonus-title">杠杆高达 1:100
                                        <i class="fa fa-question-circle" style="color: #344964; font-size: 12px"
                                                title="波兰客户可用最大杠杆为1:100.">&nbsp;
                                        </i>
                                    </span>
                                </a>
                            </li>
                            <li style="line-height: 34px;">
                                <i class="fa fa-percent" style="width: 31px;color: #455A77;
                                font-size: 16px;">&nbsp;</i>
                                <a href="/operations/bonuses-promotions/up-to-10-percents-on-account-balance/" target="_blank">
                                    最高至账户结余的10%
                                </a>
                            </li>
                            <li style="line-height: 34px;">
                                <i class="fa fa-upload" style="width:18px;width: 31px;
                                color: #455A77;font-size: 16px;">&nbsp;
                                </i>
                                <a href="/operations/bonuses-promotions/vip-client/"
                                        target="_blank">&quot;VIP&quot;客户计划
                                </a>
                            </li>
                        </ul>
                        <a class="bonuses-more" href="/operations/bonuses-promotions/" target="_blank">
                            更多当前提供
                        </a>
                    </div>

                    <div class="clearfix">
                        &nbsp;</div>
                    <h3 class="styled-h" style="margin-top:0;">
                        <i class="icon">&nbsp;</i><span class="styled-h-text">国际认可</span></h3>
                    <p>
                        成为公司的客户之后, 您将被提供国际公认的经纪服务, GoldMany已经获得一些著名的奖项.</p>
                    <div class="note_block gray">
                        <ul class="awards">
                            <li>
                                <img class="icon"
                                     src="/images/trading/mena_2015_premia_110.png"
                                     style="margin-bottom: 10px; width: 83px; height: 110px;"/><span
                                        class="award-title">&laquo;年最佳外汇零售经济商&raquo; 2015</span></li>
                            <li>
                                <img class="icon" src="/images/trading/award3_client.png"
                                     style="margin-bottom: 10px;"/><span class="award-title">&laquo;亚洲增长最快的外汇品牌&raquo;
                                    2014</span></li>
                            <li>
                                <img class="icon" src="/images/trading/award5_client.png"
                                     style="margin-bottom: 10px;"/><span class="award-title">&laquo;最佳标准外汇经纪商&raquo;
                                    2014</span></li>
                            <li>
                                <img class="icon"
                                     src="/images/trading/award4-1_client.png"
                                     style="margin-bottom: 10px;"/>
                                <span class="award-title">&laquo;俄罗斯和独联体最佳零售外汇品牌奖&raquo;
                                    2013</span>
                            </li>
                            <li>
                                <img class="icon" src="/images/trading/icon-awards-1.png"
                                     style="margin-bottom: 10px;"/>
                                <span class="award-title">&laquo;最佳零售外汇经纪人&raquo;
                                    2013</span>
                            </li>
                        </ul>
                        <br/>
                        <br/>
                        <div class="clearfix">
                            &nbsp;</div>
                        <br/>
                        <a href="/about/awards/" target="_blank">更多关于公司的奖项</a>
                        <div class="clearfix">
                            &nbsp;</div>
                    </div>
                </div>
            </div>
            <br/>
        </div>
    </div>

    <div id="right">
        <ul id="r-menu">
            <li>
                <a href="/operations/security/">资金安全</a>


            </li>
            <li>
                <a href="/operations/deposit-withdraw/">存款 / 取款</a>


            </li>
            {{--<li>--}}
                {{--<a href="/operations/1000-up-leverage/">杠杆最大值1:1000</a>--}}


            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="/operations/forex-contest/">外汇模拟账户比赛</a>--}}


            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="/operations/forex-vps/">VPS外汇服务器</a>--}}


            {{--</li>--}}
        </ul>

        @include('user.partials.right_bar')

    </div>


    @include('user.partials.footer')

</div>


<script src="/js/linktracker.js?v=2"></script>


<script type="text/javascript" src="/js/ajax.js?v=1"></script>
<script type="text/javascript" src="/js/referral.js?v=1"></script>
{{--<script type="text/javascript">--}}

    {{--$(function () {--}}
        {{--(new RBFX.ReferralsReferral({--}}
            {{--referrer_info_url: '/referrals/getReferrerInfo/',--}}
            {{--set_referrer_agent_id_cookie_url: '/referrals/setAgentIdCookieByReferrer/',--}}
            {{--remove_referrer_agent_id_cookie_url: '/referrals/removeAgentIdCookieByReferrer/'--}}
        {{--})).getReferrerInfo();--}}
    {{--});--}}

{{--</script>--}}
<div id="external-link-notification" class="external-link-notification__container">
    <div class="external-link-notification__popup">
        <div class="external-link-notification__message">
            <div class="external-link-notification__info-intro">
                <h2>请注意！</h2>
                <p>您将访问GoldMany(CY) Ltd (由CySEC监管, 执照编号. 191/13)的网站.</p>
            </div>
            <div class="external-link-notification__checkbox">
                <input id="external-link-state" type="checkbox"/>
                <label for="external-link-state">无需任何确认即可随时访问此网站</label>
            </div>
        </div>
        <div class="clear"></div>
        <div class="external-link-notification__buttons">
            <a id="external-link-accept-button" class="external-link-notification__accept" href="#"
               data-disable-notification>前往</a>
            <a id="external-link-cancel-button" class="external-link-notification__cancel" href="#"
               data-disable-notification>取消</a>
        </div>
        <div class="clear"></div>
    </div>
</div>

<script src="/js/notification.js"></script>
<script>

    $(document).ready(function () {
        var link_tracker = new RBFX.MainLinkTracker();
        (new RBFX.ExternalLinkNotification({
            popup_selector: '#external-link-notification',
            notification_state_selector: '#external-link-state',
            cancel_button_selector: '#external-link-cancel-button',
            accept_button_selector: '#external-link-accept-button',
            accept_callback_map: {
                'a[data-banner-info]': link_tracker.handleBannerLinkClick
            },
            notification_domain_list: ["robofx.com", "robofx.ru", "robooption.com", "GoldMany.pl", "GoldMany.pt", "it.GoldMany.com", "rbfx.es"],
            trigger_selector: 'a:not([data-disable-notification])',
            cookie_name: 'disable_external_link_notification'
        })).initEventHandlers();
    });

</script>
<script>

    $(function () {
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
            } catch (e) {
            }
        });
        var n = d.getElementsByTagName('script')[0], s = d.createElement('script'), f = function () {
            n.parentNode.insertBefore(s, n);
        };
        s.type = 'text/javascript';
        s.async = true;
        s.src = (d.location.protocol == 'https:' ? 'https:' : 'http:') + '//mc.yandex.ru/metrika/watch.js';
        if (w.opera == '[object Opera]') {
            d.addEventListener('DOMContentLoaded', f, false);
        } else {
            f();
        }
    })(document, window, 'yandex_metrika_callbacks');</script>
<noscript>
    <div><img src="//mc.yandex.ru/watch/23465704" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
</body>
</html>