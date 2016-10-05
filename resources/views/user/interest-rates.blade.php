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

    <title>外汇利率</title>
    <meta property="og:title" content="外汇利率" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="/analytics/interest-rates/" />
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
        /                                              <a href="/analytics/" >分析</a>
        /                                              外汇利率
    </div>

    <div id="left">
        <h1>外汇利率</h1>
        <div class="analytics"><style type="text/css">
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
                    <nobr>&quot;<a href="https://my.cn.roboforex.com/cs/analytics" target="_blank">GoldMany分析中心</a>&quot;</nobr>里所有及時更新的利率, 以及其它基本面數據以及最新的市場新聞.</p>
            </div>
            <div class="analytics">
                <p>
                    外汇利率在外汇市场货币价格移动中扮演最重要的角色. 中央银行是最具影响力的演员, 这些金融机构设定国际利率. 外汇利率决定投资现金流量. 因为货币代表的是一个国家的经济, 利率的差异影响关系另一方的货币相对价值. 当中央银行改变外汇利率导致外汇市场经历移动和波动. 在外汇交易领域, 准确的推测中央银行的行动可以提高交易员成功交易的机会.</p>
                <p>
                    GoldMany 呈现了一个主要货币的<strong>国际利率</strong>变化表格, 从2009年至今:</p>
                <table class="table">
                    <tbody>
                    <tr>
                        <th class="tc-tl">
                            <p>
                                国家</p>
                        </th>
                        <th style="text-align: left;" width="150">
                            当前利率<span class="footnote">*</span></th>
                        <th style="text-align: left;" width="150">
                            先前</th>
                        <th class="tc-tr" style="text-align: left;" width="150">
                            最后改变</th>
                    </tr>
                    <tr>
                        <td>
                            <strong>澳大利亚</strong></td>
                        <td>
                            1.50 %</td>
                        <td>
                            1.75 %</td>
                        <td class="last">
                            8月2日2016</td>
                    </tr>
                    <tr>
                        <td>
                            <strong>巴西</strong></td>
                        <td>
                            14.25 %</td>
                        <td>
                            13.75 %</td>
                        <td class="last">
                            7月30日2015</td>
                    </tr>
                    <tr>
                        <td>
                            <strong>大不列颠</strong></td>
                        <td>
                            0.25 %</td>
                        <td>
                            0.50 %</td>
                        <td class="last">
                            8月4日2016</td>
                    </tr>
                    <tr>
                        <td>
                            <strong>匈牙利</strong></td>
                        <td>
                            0.90 %</td>
                        <td>
                            1.05 %</td>
                        <td class="last">
                            5月24日2016</td>
                    </tr>
                    <tr>
                        <td>
                            <strong>香港</strong></td>
                        <td>
                            0.50 %</td>
                        <td>
                            1.50 %</td>
                        <td class="last">
                            12月17日2008</td>
                    </tr>
                    <tr>
                        <td>
                            <strong>欧洲联盟</strong></td>
                        <td>
                            0.00 %</td>
                        <td>
                            0.05 %</td>
                        <td class="last">
                            3月10日2016</td>
                    </tr>
                    <tr>
                        <td>
                            <strong>印度</strong></td>
                        <td>
                            6.50 %</td>
                        <td>
                            6.75 %</td>
                        <td class="last">
                            4月5日2016</td>
                    </tr>
                    <tr>
                        <td>
                            <strong>冰岛</strong></td>
                        <td>
                            5.25 %</td>
                        <td>
                            5.75 %</td>
                        <td class="last">
                            8月24日2016</td>
                    </tr>
                    <tr>
                        <td>
                            <strong>加拿大</strong></td>
                        <td>
                            0.50 %</td>
                        <td>
                            0.75 %</td>
                        <td class="last">
                            7月15日2015</td>
                    </tr>
                    <tr>
                        <td>
                            <strong>中国</strong></td>
                        <td>
                            4.35 %</td>
                        <td>
                            4.55 %</td>
                        <td class="last">
                            10月23日2015</td>
                    </tr>
                    <tr>
                        <td>
                            <strong>新西兰</strong></td>
                        <td>
                            2.00 %</td>
                        <td>
                            2.25 %</td>
                        <td class="last">
                            8月11日2016</td>
                    </tr>
                    <tr>
                        <td>
                            <strong>挪威</strong></td>
                        <td>
                            0.50 %</td>
                        <td>
                            0.75 %</td>
                        <td class="last">
                            3月17日2016</td>
                    </tr>
                    <tr>
                        <td>
                            <strong>波兰</strong></td>
                        <td>
                            1.50 %</td>
                        <td>
                            2.00 %</td>
                        <td class="last">
                            <font face="arial, sans-serif" size="2"><span style="line-height: 16px;">3月4日2015</span></font></td>
                    </tr>
                    <tr>
                        <td>
                            <strong><span class="short_text" id="result_box"><span style="" title="">大韩民国</span></span></strong></td>
                        <td>
                            1.25 %</td>
                        <td>
                            1.50 %</td>
                        <td class="last">
                            6月9日2016</td>
                    </tr>
                    <tr>
                        <td>
                            <strong>美国</strong></td>
                        <td>
                            0.50 %</td>
                        <td>
                            0.25 %</td>
                        <td class="last">
                            12月16日2015</td>
                    </tr>
                    <tr>
                        <td>
                            <strong>台湾</strong></td>
                        <td>
                            1.375 %</td>
                        <td>
                            1.50 %</td>
                        <td class="last">
                            6月13日2016</td>
                    </tr>
                    <tr>
                        <td>
                            <strong>土耳其</strong></td>
                        <td>
                            7.50 %</td>
                        <td>
                            7.75 %</td>
                        <td class="last">
                            2月24日2015</td>
                    </tr>
                    <tr>
                        <td>
                            <strong>捷克</strong></td>
                        <td>
                            0.05 %</td>
                        <td>
                            0.25 %</td>
                        <td class="last">
                            11月1日2012</td>
                    </tr>
                    <tr>
                        <td>
                            <strong>瑞士</strong></td>
                        <td>
                            -0.75 %</td>
                        <td>
                            -0.25 %</td>
                        <td class="last">
                            8月29日2015</td>
                    </tr>
                    <tr>
                        <td>
                            <strong>瑞典</strong></td>
                        <td>
                            -0.50 %</td>
                        <td>
                            -0.35 %</td>
                        <td class="last">
                            2月11日2016</td>
                    </tr>
                    <tr>
                        <td>
                            <strong>南非</strong></td>
                        <td>
                            7.00 %</td>
                        <td>
                            6.75 %</td>
                        <td class="last">
                            3月17日2016</td>
                    </tr>
                    <tr class="last">
                        <td class="tc-bl">
                            <strong>日本</strong></td>
                        <td>
                            -0.10 %</td>
                        <td>
                            -0.10 %</td>
                        <td class="tc-br last">
                            1月29日2016</td>
                    </tr>
                    </tbody>
                </table>
                <div id="ss-footnotes">
                    <span class="footnote">*</span> - 降低利率会导致商业活动的增加以及外汇市场的波动.</div>
            </div>
            <br />
        </div>
    </div>

    <div id="right">
        <ul id="r-menu">
            <li >
                <a href="/analytics/economic-calendar/"  >外汇日历</a>


            </li>
            <li >
                <a href="/analytics/forex-forecast/"  >外汇分析 外汇预测</a>


            </li>
            <li >
                <a href="https://my.cn.roboforex.com/cs/analytics"  target="_blank"  >GoldMany分析中心</a>


            </li>
            <li >
                <a href="/analytics/charts/"  >免费外汇图表</a>


            </li>
            <li >
                <a href="/analytics/forex-calculator/"  >外汇保证金计算器</a>


            </li>
            <li  class="selected" >
                <a>外汇利率</a>


            </li>
            <li >
                <a href="/analytics/national-holidays/"  >银行假日</a>


            </li>
            <li >
                <a href="/analytics/tradingcentral/"  >Trading Central的预测和分析</a>


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