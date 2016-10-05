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

    <title>分析</title>
    <meta property="og:title" content="分析"/>
    <meta property="og:description" content=""/>
    <meta property="og:url" content="/analytics/"/>
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
        <a href="/">首页</a>
        / 分析
    </div>

    <div id="left">
        <h1>外汇分析</h1>
        <div class="analytics">
            <style type="text/css">
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
                }
            </style>
            <p>
                每个交易者的主要工作是收集和处理关于外汇市场的信息. 外汇分析是一种分析基本和技术指标外汇趋势的能力.</p>
            <div class="info_holder">
                <div class="info_block">
                    <img src="http://www.roboforex.com/files/filemanager/image3/ears/d2499527d5-lt.png"></div>
                <p class="info_title">對所有客戶免費開放的"GoldMany分析中心".
                    <a href="https://my.cn.roboforex.com/cs/analytics" target="_blank">了解更多.</a>
                </p>
            </div>
            <p class="analytics-categories">
                {{--<a href="https://www.youtube.com/user/RoboForexLP" target="_blank">视频分析</a>,--}}
                <a href="/beginner/webinars/" target="_blank">在线研讨会</a>,
                <a href="/analytics/forex-forecast/" target="_blank">外汇预测和分析</a>,
                <a href="https://my.cn.roboforex.com/cs/profile/forex-news/" target="_blank">外汇新闻</a>,
                <a href="https://my.cn.roboforex.com/cs/profile/tradingcentral/" target="_blank">Trading
                    Central分析</a>,
                <a href="/analytics/economic-calendar/" target="_blank">经济日历</a>
            </p>


            <script type="text/javascript">

                $(document).ready(function () {
                    var $player = $("#yn-preview-player");
                    var $loader = $(".yn-loader");

                    $(".yn-title").eq(0).addClass("active");
                    $(".yn-title").click(function () {
                        var ytId = $(this).attr("data-yt-id");
                        $player.attr("src", "http://www.youtube.com/embed/" + ytId + "?autoplay=1");
                        $player.show();
                        $loader.hide();
                        var active = $(".yn-title.active");
                        active.removeClass("active");
                        active = $(this);
                        active.addClass("active");
                    });
                });

            </script>

            {{--<h3 class="styled-h first">--}}
                {{--<i class="icon icon-yt"></i><span class="styled-h-text"><a--}}
                            {{--href="https://www.youtube.com/user/RoboForexLP" target="_blank">视频分析</a></span>--}}
            {{--</h3>--}}
            {{--<div class="lc-left">--}}
                {{--<div class="youtube-news">--}}

                    {{--<div class="yn-item">--}}
                        {{--<div class="yn-thumbnail">--}}
                            {{--<img alt="RoboForex - Forex Technical Analysis 01.04.2015 EUR/USD, GBP/USD, …"--}}
                                 {{--src="https://i.ytimg.com/vi/xq0SMWRP5VA/default.jpg">--}}
                            {{--<a data-yt-id="xq0SMWRP5VA" class="yn-title"--}}
                               {{--title="RoboForex - Forex Technical Analysis 01.04.2015 EUR/USD, GBP/USD, USD/CHF, USD/JPY, AUD/USD, GOLD">--}}
                                {{--<span>RoboForex - Forex Technical Analysis 01.04.2015 EUR/USD,…</span>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="yn-item">--}}
                        {{--<div class="yn-thumbnail">--}}
                            {{--<img alt="RoboForex - Forex Technical Analysis 20.03.2015 EUR/USD, GBP/USD, …"--}}
                                 {{--src="https://i.ytimg.com/vi/HqEvaQnmyXc/default.jpg">--}}
                            {{--<a data-yt-id="HqEvaQnmyXc" class="yn-title"--}}
                               {{--title="RoboForex - Forex Technical Analysis 20.03.2015 EUR/USD, GBP/USD, USD/CHF, USD/JPY, AUD/USD, GOLD">--}}
                                {{--<span>RoboForex - Forex Technical Analysis 20.03.2015 EUR/USD,…</span>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="yn-item">--}}
                        {{--<div class="yn-thumbnail">--}}
                            {{--<img alt="RoboForex - Forex Technical Analysis 13.03.2015 EUR/USD, GBP/USD, …"--}}
                                 {{--src="https://i.ytimg.com/vi/fN0uM-fJU80/default.jpg">--}}
                            {{--<a data-yt-id="fN0uM-fJU80" class="yn-title"--}}
                               {{--title="RoboForex - Forex Technical Analysis 13.03.2015 EUR/USD, GBP/USD, USD/CHF, USD/JPY, AUD/USD, GOLD">--}}
                                {{--<span>RoboForex - Forex Technical Analysis 13.03.2015 EUR/USD,…</span>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="lc-right">--}}
                {{--<div class="youtube-news">--}}
                    {{--<div class="yn-preview">--}}
                        {{--<img style="display: none;" alt="Loader" class="yn-loader"--}}
                             {{--src="themes/rbforex/images/yt/yn-loader.gif">--}}
                        {{--<iframe width="304" height="200" frameborder="0" allowfullscreen=""--}}
                                {{--src="http://www.youtube.com/embed/xq0SMWRP5VA" id="yn-preview-player"></iframe>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}

            <div style="clear:both;"></div>

            <div class="left">
                <div class="modal fade reg-webinar" id="modal_webinar" tabindex="-1" role="dialog"
                     style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-content-container">
                                <div class="modal-header">
                                    <a class="close button-close"> <img src="/themes/rbforex/images/modal/times-big.png"
                                                                        alt="X" width="14" height="14"/> </a>
                                    <h2>注册研讨会</h2>
                                </div>
                                <div class="modal-body">
                                    <p>您需要登录您的会员中心来进入RoboForex在线研讨会. 您如果还没有会员中心, 请马上注册一个.</p>
                                    <form id="webinar_form" class="modal-form"
                                          action="https://my.cn.roboforex.com/cs/login/" method="post" target="_blank">
                                        <div class="form-input-error">
                                            <i class="icon icon-remove-circle"></i>
                                            <div class="text">请填写所有字段!</div>
                                        </div>
                                        <label for="webinar_email" class="form-label">E-mail:</label>
                                        <div class="form-input">
                                            <input autocomplete="off" type="text" name="login[email]" id="webinar_email"
                                                   class="focus-it" value="" placeholder="E-mail" maxlength="255"/>
                                        </div>
                                        <label for="webinar_password" class="form-label">密码:</label>
                                        <div class="form-input">
                                            <input autocomplete="off" type="password" name="login[password]"
                                                   id="webinar_password" value="" placeholder="密码" maxlength="100"/>
                                        </div>
                                        <input name="redirect_url_from_site" type="hidden"
                                               value="https://my.cn.roboforex.com/cs/webinars/"/>

                                        <div class="modal-footer modal-body-footer">
                                            <ul class="modal-footer-controls">
                                                <li><input id="webinar_form_send" type="submit" class="button-open"
                                                           value="登陆"></li>
                                                <li><span class="or">或</span></li>
                                                <li><a href="https://my.cn.roboforex.com/cs/register/"
                                                       class="link-open rw-tip_holder">注册</a></li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <link href="/themes/admin/js/shadowbox/shadowbox.css" media="all" rel="stylesheet" type="text/css">
                <script src="/themes/admin/js/shadowbox/shadowbox.js" type="text/javascript"></script>
                <script src="/themes/rbforex/js/webinars/registration.js" type="text/javascript"></script>
                <h3 class="styled-h half"><i class="icon icon-webinars"></i>
                    <span class="styled-h-text"><a href="/beginner/webinars/" target="_blank">在线研讨会</a></span>
                </h3>

                <div class="r-scheduled-webinars">
                    <div class="rsw-caption">
                        <ul class="rsw-timetable">
                            <li>
                                <span class="rsw-timetable-time"></span>
                        <span class="rsw-timetable-title">
                                                            <a href="javascript:void(0);" class="open-direct-popup"
                                                               data-room-url="">

																	</a>
                                                        <i class="icon icon-tv"></i>
                            <span class="rsw-timetable-author"></span>
                        </span>
                            </li>
                        </ul>
                    </div>
                </div>

                <script>

                    $(document).ready(function () {
                        (new RBFX.WebinarsRegistration(
                                dqConfig.lang != 'ru',
                                {

                                    'no_webinars': '研讨会没有发现!',
                                    'email_placeholder': 'E-mail',
                                    'pass_placeholder': '密码'

                                }
                        )).initEvents();
                    });

                </script>

                <h3 class="styled-h">
                    <i class="icon icon-news"></i>
				<span class="styled-h-text">
					<a href="https://my.cn.roboforex.com/cs/profile/dow-jones-news/" target="_blank">道琼斯新闻流 <i
                                class="styled-h-logo logo-dowjones"></i></a>
				</span>
                </h3>

                <div class="analytics-container ">
                    <p style="text-align: justify;">
                        <strong>道琼斯是世界顶尖的金融财经信息提供商. 道琼斯新闻流服务将帮助您时刻得到最新的经济数据,</strong></p>
                    <p>
                        <strong>您可以如下位置阅读到道琼斯新闻流:</strong></p>
                    <ul class="listed">
                        <li>
                            <a href="https://my.cn.roboforex.com/cs/profile/dow-jones-news/" target="_blank">在您个人用户中心的&quot;道琼斯财经新闻&quot;的版块</a>
                        </li>
                        <li>
                            <a href="http://cn.roboforex.com/trade-conditions/metatrader4-mt4/" target="_blank">在您的MT4交易平台</a>
                        </li>
                    </ul>

                </div>
            </div>

            <div class="right">
                <h3 class="styled-h half">
                    <i class="icon icon-analysis"></i>
	<span class="styled-h-text">
		<a href="/analytics/forex-forecast/" target="_blank">外汇预测和分析</a>
	</span>
                </h3>
                <div class="r-scheduled-webinars forecasts">
                    <div class="rsw-caption">
                        <ul class="rsw-timetable">
                            <li>
						<span class="rsw-timetable-title long">
							<a href="/analytics/forex-forecast/technical-analysis/fibo-30092016/" target="_blank">斐波那契数列分析30.09.2016 (EUR/USD, EUR/GBP)</a>
							<span class="rsw-timetable-author">外汇技术面分析和预测</span>
						</span>
                            </li>
                            <li>
						<span class="rsw-timetable-title long">
							<a href="/analytics/forex-forecast/ichimoku-analysis/ichimoku-30092016/" target="_blank">一目云图分析30.09.2016 (GBP/USD, GOLD)</a>
							<span class="rsw-timetable-author"> 外汇一目均衡图分析和预测</span>
						</span>
                            </li>
                            <li>
						<span class="rsw-timetable-title long">
							<a href="/analytics/forex-forecast/murray-analysis/murrey-eurusd-audusd-30092016/"
                               target="_blank">穆雷数学线分析 30.09.2016 (EUR/USD, AUD/USD)</a>
							<span class="rsw-timetable-author">外汇穆雷数学线分析和预测</span>
						</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <h3 class="styled-h half">
                    <i class="icon icon-trading-central"></i>
                <span class="styled-h-text">
                    <a href="/analytics/tradingcentral/" target="_blank">
                        Trading Central
                    </a>
                </span>
                </h3>

                <div class="analytics-container">
                    <p style="text-align: justify;">
                        <strong>交易中心的分析材料为金融外汇市场里交易经验丰富的交易者和初学者提供每日消息推送和信号.</strong></p>
                    <p>
                        <strong>交易中心的分析以下形态存在:</strong></p>
                    <ul class="listed">
                        <li>
                            <a href="http://cn.roboforex.com/analytics/tradingcentral/" target="_blank">cTrader里的小部件</a>
                        </li>
                        <li>
                            <a href="http://cn.roboforex.com/files/docs/TC_indicator_MetaTrader-User_Guide.pdf"
                               target="_blank">MT4里的指标</a></li>
                        <li>
                            <a href="https://my.cn.roboforex.com/cs/profile/tradingcentral/"
                               target="_blank">个人用户中心里的分析栏</a></li>
                    </ul>

                </div>
            </div>
            <div style="clear:both;"></div>

            <h3 class="styled-h">
                <i class="icon icon-calendar"></i>
			<span class="styled-h-text">
				<a href="/analytics/economic-calendar/" target="_blank">经济日历</a>
			</span>
            </h3>
            <table class="table events">
                <tbody>
                <tr>
                    <th class="c-tl">时间</th>
                    <th>国家</th>
                    <th>量</th>
                    <th>事件</th>
                    <th class="c-tr">前值</th>
                    <th>一致</th>
                    <th>实际</th>
                    <th class="event-expand">&nbsp;</th>
                </tr>
                <tr>
                    <td class="events-dateline" colspan="8">星期三, 10月 05</td>
                </tr>
                <tr class="event-item " id="72574" onclick="showEventDetails('72574');" data-target="showEvent_72574"
                    class="event-details-switch">
                    <td>22:30</td>
                    <td class="e-name">
                        <img alt="" src="/images/flags/icon/us.gif" class="event-currency-flag"> US
                    </td>
                    <td>
                        <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div>
                    </td>
                    <td>
                        <a href="javascript:void(0);">
                            EIA原油库存变化
                            (9月)
                        </a>
                    </td>
                    <td class="event-revised">-1.882</td>
                    <td>2.687</td>
                    <td></td>
                    <td class="event-expand">
                        <a href="javascript:void(0)" data-target="showEvent_72574"
                           class="event-details-switch switch-left"></a>
                    </td>
                </tr>
                <tr class="event-item-indicator" id="showEvent_72574" style="display: none;">
                    <td colspan="8" class="event-details"></td>
                </tr>
                <tr>
                    <td class="events-dateline" colspan="8">星期四, 10月 06</td>
                </tr>
                <tr class="event-item " id="72575" onclick="showEventDetails('72575');" data-target="showEvent_72575"
                    class="event-details-switch">
                    <td>01:00</td>
                    <td class="e-name">
                        <img alt="" src="/images/flags/icon/us.gif" class="event-currency-flag"> US
                    </td>
                    <td>
                        <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div>
                    </td>
                    <td>
                        <a href="javascript:void(0);">
                            5年期国债拍卖
                        </a>
                    </td>
                    <td class="event-revised">1.125%</td>
                    <td></td>
                    <td></td>
                    <td class="event-expand">
                        <a href="javascript:void(0)" data-target="showEvent_72575"
                           class="event-details-switch switch-left"></a>
                    </td>
                </tr>
                <tr class="event-item-indicator" id="showEvent_72575" style="display: none;">
                    <td colspan="8" class="event-details"></td>
                </tr>
                <tr class="event-item " id="72576" onclick="showEventDetails('72576');" data-target="showEvent_72576"
                    class="event-details-switch">
                    <td>07:50</td>
                    <td class="e-name">
                        <img alt="" src="/images/flags/icon/jp.gif" class="event-currency-flag"> JP
                    </td>
                    <td>
                        <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div>
                    </td>
                    <td>
                        <a href="javascript:void(0);">
                            日本外资买进日股
                            (9月)
                        </a>
                    </td>
                    <td class="event-revised">-211.70¥</td>
                    <td></td>
                    <td></td>
                    <td class="event-expand">
                        <a href="javascript:void(0)" data-target="showEvent_72576"
                           class="event-details-switch switch-left"></a>
                    </td>
                </tr>
                <tr class="event-item-indicator" id="showEvent_72576" style="display: none;">
                    <td colspan="8" class="event-details"></td>
                </tr>
                <tr class="event-item " id="72577" onclick="showEventDetails('72577');" data-target="showEvent_72577"
                    class="event-details-switch">
                    <td>07:50</td>
                    <td class="e-name">
                        <img alt="" src="/images/flags/icon/jp.gif" class="event-currency-flag"> JP
                    </td>
                    <td>
                        <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div>
                    </td>
                    <td>
                        <a href="javascript:void(0);">
                            日本买进外国债券
                            (9月)
                        </a>
                    </td>
                    <td class="event-revised">1178.60¥</td>
                    <td></td>
                    <td></td>
                    <td class="event-expand">
                        <a href="javascript:void(0)" data-target="showEvent_72577"
                           class="event-details-switch switch-left"></a>
                    </td>
                </tr>
                <tr class="event-item-indicator" id="showEvent_72577" style="display: none;">
                    <td colspan="8" class="event-details"></td>
                </tr>
                <tr class="event-item " id="72578" onclick="showEventDetails('72578');" data-target="showEvent_72578"
                    class="event-details-switch">
                    <td>08:30</td>
                    <td class="e-name">
                        <img alt="" src="/images/flags/icon/au.gif" class="event-currency-flag"> AU
                    </td>
                    <td>
                        <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div>
                    </td>
                    <td>
                        <a href="javascript:void(0);">
                            澳大利亚贸易帐
                            (8月)
                        </a>
                    </td>
                    <td class="event-revised">-2410.00</td>
                    <td>-2300.00</td>
                    <td></td>
                    <td class="event-expand">
                        <a href="javascript:void(0)" data-target="showEvent_72578"
                           class="event-details-switch switch-left"></a>
                    </td>
                </tr>
                <tr class="event-item-indicator" id="showEvent_72578" style="display: none;">
                    <td colspan="8" class="event-details"></td>
                </tr>
                </tbody>
            </table>

            <script type="text/javascript">


                function showEventDetails(event_id) {
                    if ($('#showEvent_' + event_id).is(':hidden') == true) {
                        JsHttpRequest.query('/ecocalendar/showEvent/',
                                {'event_id': event_id},
                                function (result, errors) {
                                    if (result.res == 1) {
                                        $('#showEvent_' + event_id).show();
                                        $('#showEvent_' + event_id + ' td').html(result.template);
                                    } else {
                                        console.log(errors);
                                    }
                                }, true
                        );

                        $('#' + event_id + ' .event-details-switch').removeClass('switch-left');
                        $('#' + event_id + ' .event-details-switch').addClass('switch-down');
                    }
                    else {
                        $('#showEvent_' + event_id).hide();
                        $('#showEvent_' + event_id + ' td').html('');

                        $('#' + event_id + ' .event-details-switch').removeClass('switch-down');
                        $('#' + event_id + ' .event-details-switch').addClass('switch-left');
                    }
                }

                function openTab(tab_name, event_id) {
                    $('#showEvent_' + event_id + ' .switch-rating-tabs li').removeClass('active');

                    $('#showEvent_' + event_id + ' .switch-rating-tabs li.tab_' + tab_name).addClass('active');

                    $('#tabs_content_' + event_id + ' > div').hide();
                    $('#tabs_content_' + event_id + ' .tab_' + tab_name).show();
                }

                function showOlsenScaleInfo(id) {
                    $('#olsen_' + id + ' .olsentext').toggle();
                }

                function showOlsenScaleCurrencyGraph(id, date) {
                    var curr_list = $('#curr_' + id + ' option:selected').val();
                    var curr = $('#curr_' + id + ' option:selected').text();

                    var chart = 'http://www.olsenscale.com/sc/smq/latest?data=smqimage&date=' + date + '&instrument=' + curr_list + '&width=390&height=175&caption=' + curr + '&days=3&showLabels=0&tz=GMT%2B0';
                    var radar = 'http://www.olsenscale.com/sc/smq/latest?data=smqspider&date=' + date + '&legs=' + curr_list + '&center=USD&width=200&height=175&caption=' + curr + '&printValue=1&showGradient=0&strongLabels=1';

                    $('#olsen_' + id + ' [name="chart"]').attr('src', chart);
                    $('#olsen_' + id + ' [name="radar"]').attr('src', radar);
                }


            </script>

            <hr/>
        </div>
    </div>

    <div id="right">
        <ul id="r-menu">
            <li>
                <a href="/analytics/economic-calendar/">外汇日历</a>


            </li>
            <li>
                <a href="/analytics/forex-forecast/">外汇分析 外汇预测</a>


            </li>
            <li>
                <a href="https://my.cn.roboforex.com/cs/analytics" target="_blank">GoldMany分析中心</a>


            </li>
            <li>
                <a href="/analytics/charts/">免费外汇图表</a>


            </li>
            <li>
                <a href="/analytics/forex-calculator/">外汇保证金计算器</a>


            </li>
            <li>
                <a href="/analytics/interest-rates/">外汇利率</a>


            </li>
            <li>
                <a href="/analytics/national-holidays/">银行假日</a>


            </li>
            <li>
                <a href="/analytics/tradingcentral/">Trading Central的预测和分析</a>


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

</script>
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