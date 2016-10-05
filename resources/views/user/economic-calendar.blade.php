 <!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie8 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if IE 9 ]> <html class="no-js ie9 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="来自RoboForex公司详尽的外汇财经日历. 全球金融市场最重要的和预期事件实时更新." />
    <meta name="keywords" content="财经日历,财经事件,财经事件日历" />
    <meta name="w1-verification" content="117844634768" />


    <title>外汇财经日历</title>
    <meta property="og:title" content="外汇财经日历" />
    <meta property="og:description" content="来自RoboForex公司详尽的外汇财经日历. 全球金融市场最重要的和预期事件实时更新." />
    <meta property="og:url" content="http://cn.roboforex.com/analytics/economic-calendar/" />
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
        /                                              外汇日历
    </div>

    <link rel="stylesheet" href="/themes/rbforex/css/anythingslider.css" type="text/css" />

    <div id="left">
        <h1>外汇财经日历</h1>
        <table class="soc-2 share">
            <tr>
                <td class="soc-3">
                    <div class="fb-like" data-href="http://cn.roboforex.com/analytics/economic-calendar/" data-send="false" data-layout="button_count" data-width="82" data-show-faces="true"></div>
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
                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://cn.roboforex.com/analytics/economic-calendar/"></a>
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
                    <div class="g-plusone" data-size="medium" data-annotation="bubble" data-width="300" data-href="http://cn.roboforex.com/analytics/economic-calendar/"></div>

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
        <div style="display:table;table-layout: fixed;width:100%">
            <div id="description" style="display:table-footer-group;">

            </div>
            <div style="display:table-header-group;">
                <div id="news-subscribe" class="events-news-subscribe">
                    <form method="post" id="subscribe" enctype="multipart/form-data" action="" target="_self" onsubmit="return false;">
                        <p>
                            <input onkeydown="if (key_enter(event)) form_validate_email();" value="" class="fText" placeholder="输入邮箱" name="email[email]" id="s-email">
                            <button type="button" onclick="form_validate_email();" class="fSubmit button likeBigButtonLoader" id="s-submit">订阅</button>
                            <a id="s-rss" href="/analytics/economic-calendar/rss" class="rss-button">
                                <i class="fa fa-rss-square"></i>
                            </a>
                        </p>
                    </form>
                </div>

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

                <div class="dq-validate-errors"></div>
                <div id="c-timezones" class="event-timezones">
                    <div>
                        <label for="timezones">
                            <strong>您的时区: </strong> (现在 <span id="block_time">19:24</span>)
                        </label>
                    </div>
                    <select onchange="eventsChangeGMT();" name="post[gmt]" id="timezones">
                        <option value="">Detect timezone</option>
                        <option value="Etc/GMT+12" >GMT -12:00 Etc/GMT+12</option>
                        <option value="Pacific/Samoa" >GMT -11:00 Pacific/Samoa</option>
                        <option value="Pacific/Tahiti" >GMT -10:00 Pacific/Tahiti</option>
                        <option value="America/Anchorage" >GMT -8:00 America/Anchorage</option>
                        <option value="America/Los_Angeles" >GMT -7:00 America/Los_Angeles</option>
                        <option value="America/Denver" >GMT -6:00 America/Denver</option>
                        <option value="America/Chicago" >GMT -5:00 America/Chicago</option>
                        <option value="America/New_York" >GMT -4:00 America/New_York</option>
                        <option value="America/Argentina/Buenos_Aires" >GMT -3:00 America/Argentina/Buenos_Aires</option>
                        <option value="Brazil/DeNoronha" >GMT -2:00 Brazil/DeNoronha</option>
                        <option value="Atlantic/Cape_Verde" >GMT -1:00 Atlantic/Cape_Verde</option>
                        <option value="Atlantic/Azores" >GMT +0:00 Atlantic/Azores</option>
                        <option value="Europe/London" selected="selected">GMT +1:00 Europe/London</option>
                        <option value="Europe/Paris" >GMT +2:00 Europe/Paris</option>
                        <option value="Europe/Moscow" >GMT +3:00 Europe/Moscow</option>
                        <option value="Europe/Samara" >GMT +4:00 Europe/Samara</option>
                        <option value="Asia/Yekaterinburg" >GMT +5:00 Asia/Yekaterinburg</option>
                        <option value="Asia/Omsk" >GMT +6:00 Asia/Omsk</option>
                        <option value="Asia/Krasnoyarsk" >GMT +7:00 Asia/Krasnoyarsk</option>
                        <option value="Asia/Irkutsk" >GMT +8:00 Asia/Irkutsk</option>
                        <option value="Asia/Yakutsk" >GMT +9:00 Asia/Yakutsk</option>
                        <option value="Asia/Vladivostok" >GMT +10:00 Asia/Vladivostok</option>
                        <option value="Asia/Magadan" >GMT +11:00 Asia/Magadan</option>
                        <option value="Pacific/Apia" >GMT +14:00 Pacific/Apia</option>
                    </select>
                </div>

                <div class="events_week specs " id="events_4">
                    <div class="ss-caption">
                        <a class="ss-fix-cent active" 	href="/analytics/economic-calendar/recentnext/"><span class="ss-switch-sub"><span class="ss-switch-text">最新 & 居后</span></span></a>
                        <a class="ss-fix-stan " 		href="/analytics/economic-calendar/today/"><span class="ss-switch-sub"><span class="ss-switch-text">今日</span></span></a>
                        <a class="ss-pro-cent " 		href="/analytics/economic-calendar/tomorrow/"><span class="ss-switch-sub"><span class="ss-switch-text">明天</span></span></a>
                        <a class="ss-pro-stan " 		href="/analytics/economic-calendar/thisweek/"><span class="ss-switch-sub"><span class="ss-switch-text">这周</span></span></a>
                        <a class="ss-pro-stan-ecn " 	href="/analytics/economic-calendar/nextweek/"><span class="ss-switch-sub"><span class="ss-switch-text">下周</span></span></a>

                        <a data-target="c-filter" class="switch-filter" href="javascript:void(0)" onclick="showFilterPage();"><span class="ss-switch-sub"><span class="ss-switch-text">过滤</span></span></a>
                    </div>
                    <form id="fxst-filterform" target="_self" action="" enctype="multipart/form-data" method="post">
                        <div class="" id="calendar-block" style="display:none;" >
                            <div id="calendar-object">
                                <table id="calendar-table" >

                                    <tr id="calendar-caption">
                                        <th></th><th colspan="5">10月</th>
                                        <th></th>
                                    </tr>

                                    <tr class="e_table"><th>星期一</th><th>星期二</th><th>星期三</th><th>星期四</th><th>星期五</th><th>星期六</th><th>星期日</th></tr>



                                    <tr class="e_table">
                                        <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td><a href="/analytics/economic-calendar/date/2016/10/01/">1</a></td><td><a href="/analytics/economic-calendar/date/2016/10/02/">2</a></td>
                                    </tr>

                                    <tr class="e_table">
                                        <td><a href="/analytics/economic-calendar/date/2016/10/03/">3</a></td><td><a href="/analytics/economic-calendar/date/2016/10/04/">4</a></td><td><div class="selected"><a href="/analytics/economic-calendar/date/2016/10/05/">5</a></div></td><td><a href="/analytics/economic-calendar/date/2016/10/06/">6</a></td><td><a href="/analytics/economic-calendar/date/2016/10/07/">7</a></td><td><a href="/analytics/economic-calendar/date/2016/10/08/">8</a></td><td><a href="/analytics/economic-calendar/date/2016/10/09/">9</a></td>
                                    </tr>

                                    <tr class="e_table">
                                        <td><a href="/analytics/economic-calendar/date/2016/10/10/">10</a></td><td><a href="/analytics/economic-calendar/date/2016/10/11/">11</a></td><td><a href="/analytics/economic-calendar/date/2016/10/12/">12</a></td><td><a href="/analytics/economic-calendar/date/2016/10/13/">13</a></td><td><a href="/analytics/economic-calendar/date/2016/10/14/">14</a></td><td><span>15</span></td><td><a href="/analytics/economic-calendar/date/2016/10/16/">16</a></td>
                                    </tr>

                                    <tr class="e_table">
                                        <td><a href="/analytics/economic-calendar/date/2016/10/17/">17</a></td><td><a href="/analytics/economic-calendar/date/2016/10/18/">18</a></td><td><a href="/analytics/economic-calendar/date/2016/10/19/">19</a></td><td><a href="/analytics/economic-calendar/date/2016/10/20/">20</a></td><td><a href="/analytics/economic-calendar/date/2016/10/21/">21</a></td><td><span>22</span></td><td><a href="/analytics/economic-calendar/date/2016/10/23/">23</a></td>
                                    </tr>

                                    <tr class="e_table">
                                        <td><a href="/analytics/economic-calendar/date/2016/10/24/">24</a></td><td><a href="/analytics/economic-calendar/date/2016/10/25/">25</a></td><td><a href="/analytics/economic-calendar/date/2016/10/26/">26</a></td><td><a href="/analytics/economic-calendar/date/2016/10/27/">27</a></td><td><a href="/analytics/economic-calendar/date/2016/10/28/">28</a></td><td><a href="/analytics/economic-calendar/date/2016/10/29/">29</a></td><td><a href="/analytics/economic-calendar/date/2016/10/30/">30</a></td>
                                    </tr>

                                    <tr class="e_table">
                                        <td><a href="/analytics/economic-calendar/date/2016/10/31/">31</a></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                        <div id="c-filter" class="filter-block" style="display: none;"></div>
                    </form>
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
                            <td class="events-dateline" colspan="8">星期四, 10月 06</td>
                        </tr>
                        <tr class="event-item" id="72576" onclick="showEventDetails('72576');" data-target="showEvent_72576" class="event-details-switch">
                            <td>00:50</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/jp.gif" class="event-currency-flag">	JP
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    日本外资买进日股
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">-211.70¥</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72576" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72576" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72577" onclick="showEventDetails('72577');" data-target="showEvent_72577" class="event-details-switch">
                            <td>00:50</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/jp.gif" class="event-currency-flag">	JP
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    日本买进外国债券
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">1178.60¥</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72577" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72577" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72578" onclick="showEventDetails('72578');" data-target="showEvent_72578" class="event-details-switch">
                            <td>01:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/au.gif" class="event-currency-flag">	AU
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    澳大利亚贸易帐
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">-2410.00</td>
                            <td class="event-consensus">-2300.00</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72578" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72578" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72579" onclick="showEventDetails('72579');" data-target="showEvent_72579" class="event-details-switch">
                            <td>01:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/au.gif" class="event-currency-flag">	AU
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    进口月率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">0.00%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72579" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72579" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72580" onclick="showEventDetails('72580');" data-target="showEvent_72580" class="event-details-switch">
                            <td>01:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/au.gif" class="event-currency-flag">	AU
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    出口月率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">3.00%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72580" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72580" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72581" onclick="showEventDetails('72581');" data-target="showEvent_72581" class="event-details-switch">
                            <td>02:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/co.gif" class="event-currency-flag">	CO
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    哥伦比亚消费者物价指数月率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">-0.32%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72581" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72581" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72582" onclick="showEventDetails('72582');" data-target="showEvent_72582" class="event-details-switch">
                            <td>02:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/co.gif" class="event-currency-flag">	CO
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    哥伦比亚消费者物价指数年率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">8.10%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72582" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72582" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72583" onclick="showEventDetails('72583');" data-target="showEvent_72583" class="event-details-switch">
                            <td>05:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/nl.gif" class="event-currency-flag">	NL
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    荷兰消费者物价指数年率（未季调）
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">0.20%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72583" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72583" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72584" onclick="showEventDetails('72584');" data-target="showEvent_72584" class="event-details-switch">
                            <td>07:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/de.gif" class="event-currency-flag">	DE
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    德国工厂订单月率（季调后）
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">0.20%</td>
                            <td class="event-consensus">0.20%</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72584" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72584" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72585" onclick="showEventDetails('72585');" data-target="showEvent_72585" class="event-details-switch">
                            <td>07:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/de.gif" class="event-currency-flag">	DE
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    德国工厂订单年率（未季调）
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">-0.70%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72585" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72585" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72586" onclick="showEventDetails('72586');" data-target="showEvent_72586" class="event-details-switch">
                            <td>08:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/cz.gif" class="event-currency-flag">	CZ
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    捷克零售销售年率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">5.10%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72586" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72586" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72587" onclick="showEventDetails('72587');" data-target="showEvent_72587" class="event-details-switch">
                            <td>08:15</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/ch.gif" class="event-currency-flag">	CH
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    瑞士消费者物价指数年率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">-0.10%</td>
                            <td class="event-consensus">0.00%</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72587" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72587" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72588" onclick="showEventDetails('72588');" data-target="showEvent_72588" class="event-details-switch">
                            <td>08:15</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/ch.gif" class="event-currency-flag">	CH
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    瑞士消费者物价指数月率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">-0.10%</td>
                            <td class="event-consensus">0.20%</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72588" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72588" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72589" onclick="showEventDetails('72589');" data-target="showEvent_72589" class="event-details-switch">
                            <td>10:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/gr.gif" class="event-currency-flag">	GR
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    希腊失业率月率
                                    (7月)
                                </a>
                            </td>
                            <td class="event-revised">23.40%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72589" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72589" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72590" onclick="showEventDetails('72590');" data-target="showEvent_72590" class="event-details-switch">
                            <td>12:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    美国挑战者企业裁员人数
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">32.188</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72590" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72590" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72591" onclick="showEventDetails('72591');" data-target="showEvent_72591" class="event-details-switch">
                            <td>12:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/emu.gif" class="event-currency-flag">	EMU
                            </td>
                            <td>
                                <div title="高波动预期" class="e-value-3"><span>高波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    欧洲央行会议纪要
                                </a>
                            </td>
                            <td class="event-revised"></td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72591" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72591" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72592" onclick="showEventDetails('72592');" data-target="showEvent_72592" class="event-details-switch">
                            <td>13:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    初请失业救济金人数
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">254.00</td>
                            <td class="event-consensus">256.00</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72592" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72592" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72593" onclick="showEventDetails('72593');" data-target="showEvent_72593" class="event-details-switch">
                            <td>13:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    续请失业救济金人数
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">2.062</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72593" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72593" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72594" onclick="showEventDetails('72594');" data-target="showEvent_72594" class="event-details-switch">
                            <td>13:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/ca.gif" class="event-currency-flag">	CA
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    加拿大营建许可月率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">0.80%</td>
                            <td class="event-consensus">3.00%</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72594" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72594" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72595" onclick="showEventDetails('72595');" data-target="showEvent_72595" class="event-details-switch">
                            <td>14:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/mx.gif" class="event-currency-flag">	MX
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    墨西哥消费者信心指数
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">86.50</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72595" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72595" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72596" onclick="showEventDetails('72596');" data-target="showEvent_72596" class="event-details-switch">
                            <td>14:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/mx.gif" class="event-currency-flag">	MX
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    墨西哥消费者信心指数（季调后）
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">87.30</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72596" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72596" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72597" onclick="showEventDetails('72597');" data-target="showEvent_72597" class="event-details-switch">
                            <td>14:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/cn.gif" class="event-currency-flag">	CN
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    中国外汇储备月率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">3.19¥</td>
                            <td class="event-consensus">3.18¥</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72597" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72597" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72598" onclick="showEventDetails('72598');" data-target="showEvent_72598" class="event-details-switch">
                            <td>15:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    EIA天然气库存变化
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">49.00</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72598" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72598" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73140" onclick="showEventDetails('73140');" data-target="showEvent_73140" class="event-details-switch">
                            <td>23:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/au.gif" class="event-currency-flag">	AU
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    澳大利亚AIG建筑业表现指数
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">46.60</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73140" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73140" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr>
                            <td class="events-dateline" colspan="8">星期五, 10月 07</td>
                        </tr>
                        <tr class="event-item" id="72599" onclick="showEventDetails('72599');" data-target="showEvent_72599" class="event-details-switch">
                            <td>00:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/au.gif" class="event-currency-flag">	AU
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    澳大利亚AIG建筑业表现指数
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">46.60</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72599" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72599" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72600" onclick="showEventDetails('72600');" data-target="showEvent_72600" class="event-details-switch">
                            <td>01:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/jp.gif" class="event-currency-flag">	JP
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    日本劳动现金收入年率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">1.40%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72600" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72600" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73141" onclick="showEventDetails('73141');" data-target="showEvent_73141" class="event-details-switch">
                            <td>01:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/emu.gif" class="event-currency-flag">	EMU
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    国际货币基金组织（IMF）会议
                                </a>
                            </td>
                            <td class="event-revised"></td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73141" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73141" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72601" onclick="showEventDetails('72601');" data-target="showEvent_72601" class="event-details-switch">
                            <td>05:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/nl.gif" class="event-currency-flag">	NL
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    荷兰制造业生产
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">-0.80%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72601" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72601" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72602" onclick="showEventDetails('72602');" data-target="showEvent_72602" class="event-details-switch">
                            <td>06:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/jp.gif" class="event-currency-flag">	JP
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    日本同步指标
                                    (8月)
                                    <b title="初始发布">p</b>
                                </a>
                            </td>
                            <td class="event-revised">112.10</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72602" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72602" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72603" onclick="showEventDetails('72603');" data-target="showEvent_72603" class="event-details-switch">
                            <td>06:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/jp.gif" class="event-currency-flag">	JP
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    日本领先指标
                                    (8月)
                                    <b title="初始发布">p</b>
                                </a>
                            </td>
                            <td class="event-revised">100.00</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72603" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72603" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72606" onclick="showEventDetails('72606');" data-target="showEvent_72606" class="event-details-switch">
                            <td>07:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/ro.gif" class="event-currency-flag">	RO
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    罗马尼亚GDP
                                    (4月)
                                </a>
                            </td>
                            <td class="event-revised">6.00%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72606" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72606" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72607" onclick="showEventDetails('72607');" data-target="showEvent_72607" class="event-details-switch">
                            <td>07:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/fi.gif" class="event-currency-flag">	FI
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    芬兰贸易帐
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">-0.24€</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72607" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72607" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72604" onclick="showEventDetails('72604');" data-target="showEvent_72604" class="event-details-switch">
                            <td>07:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/de.gif" class="event-currency-flag">	DE
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    德国工业产出月率（季调后）
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">-1.50%</td>
                            <td class="event-consensus">0.80%</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72604" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72604" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72605" onclick="showEventDetails('72605');" data-target="showEvent_72605" class="event-details-switch">
                            <td>07:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/de.gif" class="event-currency-flag">	DE
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    德国工业产出年率（工作日调整后）（未季调）
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">-1.20%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72605" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72605" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72608" onclick="showEventDetails('72608');" data-target="showEvent_72608" class="event-details-switch">
                            <td>07:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/za.gif" class="event-currency-flag">	ZA
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    外汇和黄金储备净额（美元）
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">40.795$</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72608" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72608" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72609" onclick="showEventDetails('72609');" data-target="showEvent_72609" class="event-details-switch">
                            <td>07:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/za.gif" class="event-currency-flag">	ZA
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    外汇和黄金储备总额
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">45.708$</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72609" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72609" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72610" onclick="showEventDetails('72610');" data-target="showEvent_72610" class="event-details-switch">
                            <td>07:45</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/fr.gif" class="event-currency-flag">	FR
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    法国进口
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">41.40€</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72610" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72610" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72611" onclick="showEventDetails('72611');" data-target="showEvent_72611" class="event-details-switch">
                            <td>07:45</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/fr.gif" class="event-currency-flag">	FR
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    法国贸易帐
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">-4.50€</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72611" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72611" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72612" onclick="showEventDetails('72612');" data-target="showEvent_72612" class="event-details-switch">
                            <td>07:45</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/fr.gif" class="event-currency-flag">	FR
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    法国出口
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">36.90€</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72612" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72612" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72613" onclick="showEventDetails('72613');" data-target="showEvent_72613" class="event-details-switch">
                            <td>07:45</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/fr.gif" class="event-currency-flag">	FR
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    法国工业产出月率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">-0.60%</td>
                            <td class="event-consensus">0.70%</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72613" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72613" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72614" onclick="showEventDetails('72614');" data-target="showEvent_72614" class="event-details-switch">
                            <td>07:45</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/fr.gif" class="event-currency-flag">	FR
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    法国政府预算
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">-80.85€</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72614" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72614" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72615" onclick="showEventDetails('72615');" data-target="showEvent_72615" class="event-details-switch">
                            <td>08:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/hu.gif" class="event-currency-flag">	HU
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    工业产值（年比）
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">-4.70%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72615" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72615" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72623" onclick="showEventDetails('72623');" data-target="showEvent_72623" class="event-details-switch">
                            <td>08:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/hu.gif" class="event-currency-flag">	HU
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    匈牙利贸易帐
                                    (8月)
                                    <b title="初始发布">p</b>
                                </a>
                            </td>
                            <td class="event-revised">668.00€</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72623" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72623" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73142" onclick="showEventDetails('73142');" data-target="showEvent_73142" class="event-details-switch">
                            <td>08:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/es.gif" class="event-currency-flag">	ES
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    西班牙工业产值年率（季调后）
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">0.30%</td>
                            <td class="event-consensus">0.90%</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73142" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73142" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72619" onclick="showEventDetails('72619');" data-target="showEvent_72619" class="event-details-switch">
                            <td>08:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/ch.gif" class="event-currency-flag">	CH
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    瑞士央行外汇储备
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">627.00</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72619" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72619" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72618" onclick="showEventDetails('72618');" data-target="showEvent_72618" class="event-details-switch">
                            <td>08:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/cz.gif" class="event-currency-flag">	CZ
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    工业生产（年比）
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">3.90%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72618" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72618" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72622" onclick="showEventDetails('72622');" data-target="showEvent_72622" class="event-details-switch">
                            <td>08:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/cz.gif" class="event-currency-flag">	CZ
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    建筑产出（年比）
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">-16.30%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72622" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72622" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72624" onclick="showEventDetails('72624');" data-target="showEvent_72624" class="event-details-switch">
                            <td>08:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/cz.gif" class="event-currency-flag">	CZ
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    捷克贸易帐月率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">4.40</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72624" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72624" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72616" onclick="showEventDetails('72616');" data-target="showEvent_72616" class="event-details-switch">
                            <td>08:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/at.gif" class="event-currency-flag">	AT
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    奥地利批发物价指数年率（未季调）
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">-2.10%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72616" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72616" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72617" onclick="showEventDetails('72617');" data-target="showEvent_72617" class="event-details-switch">
                            <td>08:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/at.gif" class="event-currency-flag">	AT
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    奥地利批发物价指数月率（未季调）
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">-0.20%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72617" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72617" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72621" onclick="showEventDetails('72621');" data-target="showEvent_72621" class="event-details-switch">
                            <td>08:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/at.gif" class="event-currency-flag">	AT
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    奥地利贸易帐
                                    (7月)
                                </a>
                            </td>
                            <td class="event-revised">129.70€</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72621" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72621" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72620" onclick="showEventDetails('72620');" data-target="showEvent_72620" class="event-details-switch">
                            <td>08:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/dk.gif" class="event-currency-flag">	DK
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    丹麦工业生产月率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">1.90%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72620" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72620" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72625" onclick="showEventDetails('72625');" data-target="showEvent_72625" class="event-details-switch">
                            <td>08:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/es.gif" class="event-currency-flag">	ES
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    西班牙工业产值年率（季调后）
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">0.30%</td>
                            <td class="event-consensus">1.30%</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72625" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72625" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72626" onclick="showEventDetails('72626');" data-target="showEvent_72626" class="event-details-switch">
                            <td>08:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/uk.gif" class="event-currency-flag">	UK
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    英国Halifax房价指数年率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">6.90%</td>
                            <td class="event-consensus">5.80%</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72626" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72626" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72627" onclick="showEventDetails('72627');" data-target="showEvent_72627" class="event-details-switch">
                            <td>08:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/uk.gif" class="event-currency-flag">	UK
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    英国Halifax房价指数月率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">-0.20%</td>
                            <td class="event-consensus">0.00%</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72627" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72627" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72629" onclick="showEventDetails('72629');" data-target="showEvent_72629" class="event-details-switch">
                            <td>09:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/cz.gif" class="event-currency-flag">	CZ
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    外汇储备
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">70.53€</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72629" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72629" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72628" onclick="showEventDetails('72628');" data-target="showEvent_72628" class="event-details-switch">
                            <td>09:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/no.gif" class="event-currency-flag">	NO
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    挪威制造业生产
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">3.70%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72628" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72628" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72630" onclick="showEventDetails('72630');" data-target="showEvent_72630" class="event-details-switch">
                            <td>09:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/uk.gif" class="event-currency-flag">	UK
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    英国工业生产月率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">0.10%</td>
                            <td class="event-consensus">0.10%</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72630" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72630" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72631" onclick="showEventDetails('72631');" data-target="showEvent_72631" class="event-details-switch">
                            <td>09:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/uk.gif" class="event-currency-flag">	UK
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    英国制造业生产月率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">-0.90%</td>
                            <td class="event-consensus">0.40%</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72631" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72631" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72632" onclick="showEventDetails('72632');" data-target="showEvent_72632" class="event-details-switch">
                            <td>09:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/uk.gif" class="event-currency-flag">	UK
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    英国工业生产年率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">2.10%</td>
                            <td class="event-consensus">1.30%</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72632" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72632" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72633" onclick="showEventDetails('72633');" data-target="showEvent_72633" class="event-details-switch">
                            <td>09:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/uk.gif" class="event-currency-flag">	UK
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    英国制造业生产年率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">0.80%</td>
                            <td class="event-consensus">0.80%</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72633" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72633" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72634" onclick="showEventDetails('72634');" data-target="showEvent_72634" class="event-details-switch">
                            <td>09:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/uk.gif" class="event-currency-flag">	UK
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    英国贸易帐(非欧盟国家)
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">-4.19£</td>
                            <td class="event-consensus">-3.70£</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72634" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72634" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72635" onclick="showEventDetails('72635');" data-target="showEvent_72635" class="event-details-switch">
                            <td>09:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/uk.gif" class="event-currency-flag">	UK
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    英国贸易帐
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">-4.502£</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72635" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72635" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72636" onclick="showEventDetails('72636');" data-target="showEvent_72636" class="event-details-switch">
                            <td>09:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/uk.gif" class="event-currency-flag">	UK
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    英国商品贸易帐
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">-11.76£</td>
                            <td class="event-consensus">-11.30£</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72636" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72636" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72638" onclick="showEventDetails('72638');" data-target="showEvent_72638" class="event-details-switch">
                            <td>10:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/sg.gif" class="event-currency-flag">	SG
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    外汇储备
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">252.30</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72638" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72638" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72637" onclick="showEventDetails('72637');" data-target="showEvent_72637" class="event-details-switch">
                            <td>10:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/uk.gif" class="event-currency-flag">	UK
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    英国10年期国债拍卖
                                </a>
                            </td>
                            <td class="event-revised">0.69%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72637" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72637" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72640" onclick="showEventDetails('72640');" data-target="showEvent_72640" class="event-details-switch">
                            <td>12:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/in.gif" class="event-currency-flag">	IN
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    外汇储备
                                </a>
                            </td>
                            <td class="event-revised">370.77$</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72640" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72640" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72639" onclick="showEventDetails('72639');" data-target="showEvent_72639" class="event-details-switch">
                            <td>12:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/cl.gif" class="event-currency-flag">	CL
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    智利贸易帐
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised"></td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72639" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72639" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72642" onclick="showEventDetails('72642');" data-target="showEvent_72642" class="event-details-switch">
                            <td>13:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/pl.gif" class="event-currency-flag">	PL
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    波兰外汇储备（美元）
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">98.70€</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72642" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72642" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72641" onclick="showEventDetails('72641');" data-target="showEvent_72641" class="event-details-switch">
                            <td>13:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/br.gif" class="event-currency-flag">	BR
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    IPCA通胀指数
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">0.44%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72641" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72641" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72643" onclick="showEventDetails('72643');" data-target="showEvent_72643" class="event-details-switch">
                            <td>13:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/cl.gif" class="event-currency-flag">	CL
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    智利消费者物价指数月率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">0.00%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72643" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72643" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72644" onclick="showEventDetails('72644');" data-target="showEvent_72644" class="event-details-switch">
                            <td>13:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/cl.gif" class="event-currency-flag">	CL
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    智利核心消费者物价指数月率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">0.10%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72644" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72644" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72645" onclick="showEventDetails('72645');" data-target="showEvent_72645" class="event-details-switch">
                            <td>13:15</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/ca.gif" class="event-currency-flag">	CA
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    加拿大新屋开工年率（季调后）
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">182.70</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72645" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72645" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72646" onclick="showEventDetails('72646');" data-target="showEvent_72646" class="event-details-switch">
                            <td>13:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="高波动预期" class="e-value-3"><span>高波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    美国失业率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">4.90%</td>
                            <td class="event-consensus">4.90%</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72646" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72646" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72647" onclick="showEventDetails('72647');" data-target="showEvent_72647" class="event-details-switch">
                            <td>13:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    美国就业参与率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">62.80%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72647" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72647" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72648" onclick="showEventDetails('72648');" data-target="showEvent_72648" class="event-details-switch">
                            <td>13:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    美国平均时薪月率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">0.10%</td>
                            <td class="event-consensus">0.30%</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72648" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72648" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72649" onclick="showEventDetails('72649');" data-target="showEvent_72649" class="event-details-switch">
                            <td>13:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    美国平均每周工时
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">34.30</td>
                            <td class="event-consensus">34.40</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72649" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72649" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72650" onclick="showEventDetails('72650');" data-target="showEvent_72650" class="event-details-switch">
                            <td>13:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="高波动预期" class="e-value-3"><span>高波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    美国非农就业人数变化
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">151.00</td>
                            <td class="event-consensus">172.00</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72650" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72650" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72651" onclick="showEventDetails('72651');" data-target="showEvent_72651" class="event-details-switch">
                            <td>13:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    美国平均时薪年率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">2.40%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72651" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72651" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72652" onclick="showEventDetails('72652');" data-target="showEvent_72652" class="event-details-switch">
                            <td>13:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/ca.gif" class="event-currency-flag">	CA
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    加拿大失业率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">7.00%</td>
                            <td class="event-consensus">7.00%</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72652" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72652" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72653" onclick="showEventDetails('72653');" data-target="showEvent_72653" class="event-details-switch">
                            <td>13:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/ca.gif" class="event-currency-flag">	CA
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    加拿大就业参与率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">65.50%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72653" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72653" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72654" onclick="showEventDetails('72654');" data-target="showEvent_72654" class="event-details-switch">
                            <td>13:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/ca.gif" class="event-currency-flag">	CA
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    加拿大就业人数变化
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">26.20</td>
                            <td class="event-consensus">10.00</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72654" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72654" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72655" onclick="showEventDetails('72655');" data-target="showEvent_72655" class="event-details-switch">
                            <td>14:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/mx.gif" class="event-currency-flag">	MX
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    核心通胀指数
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">0.19%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72655" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72655" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72656" onclick="showEventDetails('72656');" data-target="showEvent_72656" class="event-details-switch">
                            <td>14:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/mx.gif" class="event-currency-flag">	MX
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    整体通胀指数
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">0.28%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72656" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72656" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72657" onclick="showEventDetails('72657');" data-target="showEvent_72657" class="event-details-switch">
                            <td>14:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/mx.gif" class="event-currency-flag">	MX
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    12个月通胀指数
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">2.73%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72657" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72657" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72659" onclick="showEventDetails('72659');" data-target="showEvent_72659" class="event-details-switch">
                            <td>15:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    美国批发库存月率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">0.00%</td>
                            <td class="event-consensus">-0.10%</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72659" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72659" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72658" onclick="showEventDetails('72658');" data-target="showEvent_72658" class="event-details-switch">
                            <td>15:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/uk.gif" class="event-currency-flag">	UK
                            </td>
                            <td>
                                <div title="高波动预期" class="e-value-3"><span>高波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    英国NIESR三个月GDP预估值
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">0.30%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72658" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72658" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72660" onclick="showEventDetails('72660');" data-target="showEvent_72660" class="event-details-switch">
                            <td>15:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/ca.gif" class="event-currency-flag">	CA
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    Ivey采购经理人指数
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">53.80</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72660" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72660" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72661" onclick="showEventDetails('72661');" data-target="showEvent_72661" class="event-details-switch">
                            <td>15:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/ca.gif" class="event-currency-flag">	CA
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    加拿大Ivey采购经理人指数（季调后)
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">52.30</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72661" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72661" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72662" onclick="showEventDetails('72662');" data-target="showEvent_72662" class="event-details-switch">
                            <td>15:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/tr.gif" class="event-currency-flag">	TR
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    土耳其国库现金余额
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">5.46</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72662" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72662" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73143" onclick="showEventDetails('73143');" data-target="showEvent_73143" class="event-details-switch">
                            <td>15:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    美联储费希尔发表讲话
                                </a>
                            </td>
                            <td class="event-revised"></td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73143" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73143" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73104" onclick="showEventDetails('73104');" data-target="showEvent_73104" class="event-details-switch">
                            <td>15:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/ca.gif" class="event-currency-flag">	CA
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    加拿大央行商业展望调查
                                </a>
                            </td>
                            <td class="event-revised"></td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73104" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73104" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72663" onclick="showEventDetails('72663');" data-target="showEvent_72663" class="event-details-switch">
                            <td>17:45</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    美联储Mester讲话
                                </a>
                            </td>
                            <td class="event-revised"></td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72663" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72663" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72664" onclick="showEventDetails('72664');" data-target="showEvent_72664" class="event-details-switch">
                            <td>18:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    贝克休斯美国石油钻机数
                                </a>
                            </td>
                            <td class="event-revised">425.00</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72664" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72664" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73105" onclick="showEventDetails('73105');" data-target="showEvent_73105" class="event-details-switch">
                            <td>18:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    3年期国债拍卖
                                </a>
                            </td>
                            <td class="event-revised">0.947%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73105" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73105" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72665" onclick="showEventDetails('72665');" data-target="showEvent_72665" class="event-details-switch">
                            <td>20:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    美国消费者信贷
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">17.71$</td>
                            <td class="event-consensus">17.50$</td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72665" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72665" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73144" onclick="showEventDetails('73144');" data-target="showEvent_73144" class="event-details-switch">
                            <td>20:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    美联储理事乔治发表讲话
                                </a>
                            </td>
                            <td class="event-revised"></td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73144" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73144" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72667" onclick="showEventDetails('72667');" data-target="showEvent_72667" class="event-details-switch">
                            <td>20:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    CFTC黄金投机净头寸
                                </a>
                            </td>
                            <td class="event-revised">291.90$</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72667" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72667" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72669" onclick="showEventDetails('72669');" data-target="showEvent_72669" class="event-details-switch">
                            <td>20:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    CFTC美元投机净头寸
                                </a>
                            </td>
                            <td class="event-revised">60.10$</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72669" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72669" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72670" onclick="showEventDetails('72670');" data-target="showEvent_72670" class="event-details-switch">
                            <td>20:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    CFTC原油投机净头寸
                                </a>
                            </td>
                            <td class="event-revised">291.60</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72670" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72670" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72672" onclick="showEventDetails('72672');" data-target="showEvent_72672" class="event-details-switch">
                            <td>20:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/jp.gif" class="event-currency-flag">	JP
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    CFTC日元投机净头寸
                                </a>
                            </td>
                            <td class="event-revised">69.00¥</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72672" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72672" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72668" onclick="showEventDetails('72668');" data-target="showEvent_72668" class="event-details-switch">
                            <td>20:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/au.gif" class="event-currency-flag">	AU
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    CFTC澳元投机净头寸
                                </a>
                            </td>
                            <td class="event-revised">15.00$</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72668" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72668" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72666" onclick="showEventDetails('72666');" data-target="showEvent_72666" class="event-details-switch">
                            <td>20:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/emu.gif" class="event-currency-flag">	EMU
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    CFTC欧元投机净头寸
                                </a>
                            </td>
                            <td class="event-revised">-76.00€</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72666" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72666" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72671" onclick="showEventDetails('72671');" data-target="showEvent_72671" class="event-details-switch">
                            <td>20:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/uk.gif" class="event-currency-flag">	UK
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    CFTC英镑投机净头寸
                                </a>
                            </td>
                            <td class="event-revised">-88.00£</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72671" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72671" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73145" onclick="showEventDetails('73145');" data-target="showEvent_73145" class="event-details-switch">
                            <td>21:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    美联储布赖纳得发表讲话
                                </a>
                            </td>
                            <td class="event-revised"></td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73145" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73145" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr>
                            <td class="events-dateline" colspan="8">Saturday, 10月 08</td>
                        </tr>
                        <tr class="event-item" id="72673" onclick="showEventDetails('72673');" data-target="showEvent_72673" class="event-details-switch">
                            <td>01:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/cn.gif" class="event-currency-flag">	CN
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    中国外商直接投资 （年初至今）
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">4.50%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72673" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72673" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73146" onclick="showEventDetails('73146');" data-target="showEvent_73146" class="event-details-switch">
                            <td>01:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/emu.gif" class="event-currency-flag">	EMU
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    国际货币基金组织（IMF）会议
                                </a>
                            </td>
                            <td class="event-revised"></td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73146" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73146" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72674" onclick="showEventDetails('72674');" data-target="showEvent_72674" class="event-details-switch">
                            <td>02:45</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/cn.gif" class="event-currency-flag">	CN
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    中国财新服务业采购经理人指数
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">52.10</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72674" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72674" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72675" onclick="showEventDetails('72675');" data-target="showEvent_72675" class="event-details-switch">
                            <td>06:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/pe.gif" class="event-currency-flag">	PE
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    秘鲁贸易账
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised"></td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72675" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72675" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr>
                            <td class="events-dateline" colspan="8">Sunday, 10月 09</td>
                        </tr>
                        <tr class="event-item" id="72676" onclick="showEventDetails('72676');" data-target="showEvent_72676" class="event-details-switch">
                            <td>01:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/kr.gif" class="event-currency-flag">	KR
                            </td>
                            <td>
                                <div title="无波动预期" class="e-value-0"><span>无波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    韩语文日
                                </a>
                            </td>
                            <td class="event-revised"></td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72676" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72676" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73147" onclick="showEventDetails('73147');" data-target="showEvent_73147" class="event-details-switch">
                            <td>01:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/emu.gif" class="event-currency-flag">	EMU
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    国际货币基金组织（IMF）会议
                                </a>
                            </td>
                            <td class="event-revised"></td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73147" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73147" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr>
                            <td class="events-dateline" colspan="8">星期一, 10月 10</td>
                        </tr>
                        <tr class="event-item" id="72677" onclick="showEventDetails('72677');" data-target="showEvent_72677" class="event-details-switch">
                            <td>00:01</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/uk.gif" class="event-currency-flag">	UK
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    英国BRC同店零售销售年率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">-0.90%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72677" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72677" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72678" onclick="showEventDetails('72678');" data-target="showEvent_72678" class="event-details-switch">
                            <td>00:50</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/jp.gif" class="event-currency-flag">	JP
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    日本贸易帐 - 国际收支的依据
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">613.90¥</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72678" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72678" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72679" onclick="showEventDetails('72679');" data-target="showEvent_72679" class="event-details-switch">
                            <td>00:50</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/jp.gif" class="event-currency-flag">	JP
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    日本经常帐（未季调）
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">1938.20¥</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72679" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72679" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72680" onclick="showEventDetails('72680');" data-target="showEvent_72680" class="event-details-switch">
                            <td>00:50</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/jp.gif" class="event-currency-flag">	JP
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    日本核心机械订单月率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">4.90%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72680" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72680" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72681" onclick="showEventDetails('72681');" data-target="showEvent_72681" class="event-details-switch">
                            <td>00:50</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/jp.gif" class="event-currency-flag">	JP
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    日本核心机械订单年率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">5.20%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72681" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72681" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72682" onclick="showEventDetails('72682');" data-target="showEvent_72682" class="event-details-switch">
                            <td>01:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="无波动预期" class="e-value-0"><span>无波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    市场休市
                                </a>
                            </td>
                            <td class="event-revised"></td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72682" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72682" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72684" onclick="showEventDetails('72684');" data-target="showEvent_72684" class="event-details-switch">
                            <td>01:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/ar.gif" class="event-currency-flag">	AR
                            </td>
                            <td>
                                <div title="无波动预期" class="e-value-0"><span>无波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    哥伦布日
                                </a>
                            </td>
                            <td class="event-revised"></td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72684" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72684" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72686" onclick="showEventDetails('72686');" data-target="showEvent_72686" class="event-details-switch">
                            <td>01:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/jp.gif" class="event-currency-flag">	JP
                            </td>
                            <td>
                                <div title="无波动预期" class="e-value-0"><span>无波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    体育节
                                </a>
                            </td>
                            <td class="event-revised"></td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72686" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72686" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73106" onclick="showEventDetails('73106');" data-target="showEvent_73106" class="event-details-switch">
                            <td>01:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/cn.gif" class="event-currency-flag">	CN
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    中国外商直接投资 （年初至今）
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">4.50%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73106" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73106" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72685" onclick="showEventDetails('72685');" data-target="showEvent_72685" class="event-details-switch">
                            <td>01:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/ca.gif" class="event-currency-flag">	CA
                            </td>
                            <td>
                                <div title="无波动预期" class="e-value-0"><span>无波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    感恩节
                                </a>
                            </td>
                            <td class="event-revised"></td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72685" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72685" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72683" onclick="showEventDetails('72683');" data-target="showEvent_72683" class="event-details-switch">
                            <td>01:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/hk.gif" class="event-currency-flag">	HK
                            </td>
                            <td>
                                <div title="无波动预期" class="e-value-0"><span>无波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    重阳节
                                </a>
                            </td>
                            <td class="event-revised"></td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72683" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72683" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72687" onclick="showEventDetails('72687');" data-target="showEvent_72687" class="event-details-switch">
                            <td>06:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/jp.gif" class="event-currency-flag">	JP
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    日本经济观察家现况指数
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">45.60</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72687" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72687" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72688" onclick="showEventDetails('72688');" data-target="showEvent_72688" class="event-details-switch">
                            <td>06:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/jp.gif" class="event-currency-flag">	JP
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    日本经济观察家前景指数
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">47.40</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72688" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72688" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72689" onclick="showEventDetails('72689');" data-target="showEvent_72689" class="event-details-switch">
                            <td>06:45</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/ch.gif" class="event-currency-flag">	CH
                            </td>
                            <td>
                                <div title="高波动预期" class="e-value-3"><span>高波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    瑞士失业率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">3.40%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72689" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72689" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72690" onclick="showEventDetails('72690');" data-target="showEvent_72690" class="event-details-switch">
                            <td>07:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/de.gif" class="event-currency-flag">	DE
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    德国进口月率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">-0.70%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72690" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72690" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72691" onclick="showEventDetails('72691');" data-target="showEvent_72691" class="event-details-switch">
                            <td>07:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/de.gif" class="event-currency-flag">	DE
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    德国经常账（未季调）
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">18.60€</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72691" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72691" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72692" onclick="showEventDetails('72692');" data-target="showEvent_72692" class="event-details-switch">
                            <td>07:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/de.gif" class="event-currency-flag">	DE
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    德国贸易账（季调后）
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">19.40€</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72692" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72692" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72693" onclick="showEventDetails('72693');" data-target="showEvent_72693" class="event-details-switch">
                            <td>07:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/de.gif" class="event-currency-flag">	DE
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    德国出口月率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">-2.60%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72693" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72693" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72694" onclick="showEventDetails('72694');" data-target="showEvent_72694" class="event-details-switch">
                            <td>09:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/it.gif" class="event-currency-flag">	IT
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    意大利工业生产月率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">0.40%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72694" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72694" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72695" onclick="showEventDetails('72695');" data-target="showEvent_72695" class="event-details-switch">
                            <td>09:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/it.gif" class="event-currency-flag">	IT
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    意大利工业生产年率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">-0.30%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72695" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72695" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72696" onclick="showEventDetails('72696');" data-target="showEvent_72696" class="event-details-switch">
                            <td>09:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/emu.gif" class="event-currency-flag">	EMU
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    欧元区Sentix投资者信心指数
                                    (10月)
                                </a>
                            </td>
                            <td class="event-revised">5.60</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72696" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72696" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73107" onclick="showEventDetails('73107');" data-target="showEvent_73107" class="event-details-switch">
                            <td>10:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/gr.gif" class="event-currency-flag">	GR
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    希腊工业生产年率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">4.10%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73107" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73107" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73109" onclick="showEventDetails('73109');" data-target="showEvent_73109" class="event-details-switch">
                            <td>10:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/gr.gif" class="event-currency-flag">	GR
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    希腊消费者物价调和指数年率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">0.40%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73109" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73109" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73110" onclick="showEventDetails('73110');" data-target="showEvent_73110" class="event-details-switch">
                            <td>10:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/gr.gif" class="event-currency-flag">	GR
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    希腊消费者物价指数年率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">-0.90%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73110" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73110" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73148" onclick="showEventDetails('73148');" data-target="showEvent_73148" class="event-details-switch">
                            <td>10:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/uk.gif" class="event-currency-flag">	UK
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    英国10年期国债拍卖
                                </a>
                            </td>
                            <td class="event-revised">0.69%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73148" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73148" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73108" onclick="showEventDetails('73108');" data-target="showEvent_73108" class="event-details-switch">
                            <td>10:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/pt.gif" class="event-currency-flag">	PT
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    葡萄牙贸易账
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">-2.41€</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73108" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73108" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72697" onclick="showEventDetails('72697');" data-target="showEvent_72697" class="event-details-switch">
                            <td>10:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/de.gif" class="event-currency-flag">	DE
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    德国10年期国债拍卖
                                </a>
                            </td>
                            <td class="event-revised">-0.11%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72697" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72697" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72698" onclick="showEventDetails('72698');" data-target="showEvent_72698" class="event-details-switch">
                            <td>11:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    NFIB小型企业信心指数
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">94.40</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72698" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72698" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72699" onclick="showEventDetails('72699');" data-target="showEvent_72699" class="event-details-switch">
                            <td>15:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    美国就业市场状况指数LMCI
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">-0.70</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72699" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72699" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72700" onclick="showEventDetails('72700');" data-target="showEvent_72700" class="event-details-switch">
                            <td>16:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    3个月汇票拍卖
                                </a>
                            </td>
                            <td class="event-revised">0.31%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72700" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72700" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72701" onclick="showEventDetails('72701');" data-target="showEvent_72701" class="event-details-switch">
                            <td>16:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    6个月汇票拍卖
                                </a>
                            </td>
                            <td class="event-revised">0.49%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72701" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72701" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73111" onclick="showEventDetails('73111');" data-target="showEvent_73111" class="event-details-switch">
                            <td>22:45</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/nz.gif" class="event-currency-flag">	NZ
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    新西兰电子卡零售销售月率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">-0.40%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73111" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73111" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73112" onclick="showEventDetails('73112');" data-target="showEvent_73112" class="event-details-switch">
                            <td>22:45</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/nz.gif" class="event-currency-flag">	NZ
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    新西兰电子卡零售销售年率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">3.70%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73112" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73112" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72702" onclick="showEventDetails('72702');" data-target="showEvent_72702" class="event-details-switch">
                            <td>23:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/nz.gif" class="event-currency-flag">	NZ
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    新西兰NZIER商业信心指数
                                    (7月)
                                </a>
                            </td>
                            <td class="event-revised">19.00%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72702" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72702" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr>
                            <td class="events-dateline" colspan="8">星期二, 10月 11</td>
                        </tr>
                        <tr class="event-item" id="73113" onclick="showEventDetails('73113');" data-target="showEvent_73113" class="event-details-switch">
                            <td>00:01</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/uk.gif" class="event-currency-flag">	UK
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    英国BRC同店零售销售年率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">-0.90%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73113" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73113" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73114" onclick="showEventDetails('73114');" data-target="showEvent_73114" class="event-details-switch">
                            <td>00:50</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/jp.gif" class="event-currency-flag">	JP
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    日本贸易帐 - 国际收支的依据
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">613.90¥</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73114" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73114" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73115" onclick="showEventDetails('73115');" data-target="showEvent_73115" class="event-details-switch">
                            <td>00:50</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/jp.gif" class="event-currency-flag">	JP
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    日本经常帐（未季调）
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">1938.20¥</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73115" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73115" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72703" onclick="showEventDetails('72703');" data-target="showEvent_72703" class="event-details-switch">
                            <td>01:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/in.gif" class="event-currency-flag">	IN
                            </td>
                            <td>
                                <div title="无波动预期" class="e-value-0"><span>无波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    十胜节
                                </a>
                            </td>
                            <td class="event-revised"></td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72703" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72703" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72704" onclick="showEventDetails('72704');" data-target="showEvent_72704" class="event-details-switch">
                            <td>01:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/au.gif" class="event-currency-flag">	AU
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    澳大利亚Westpac消费者信心指数月率
                                    (10月)
                                </a>
                            </td>
                            <td class="event-revised">0.30%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72704" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72704" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72705" onclick="showEventDetails('72705');" data-target="showEvent_72705" class="event-details-switch">
                            <td>02:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/au.gif" class="event-currency-flag">	AU
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    澳大利亚房屋贷款总额月率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">0.50%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72705" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72705" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72706" onclick="showEventDetails('72706');" data-target="showEvent_72706" class="event-details-switch">
                            <td>02:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/au.gif" class="event-currency-flag">	AU
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    澳大利亚房屋贷款月率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">-4.20%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72706" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72706" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72707" onclick="showEventDetails('72707');" data-target="showEvent_72707" class="event-details-switch">
                            <td>02:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/au.gif" class="event-currency-flag">	AU
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    澳大利亚NAB商业信心指数
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">6.00</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72707" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72707" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72708" onclick="showEventDetails('72708');" data-target="showEvent_72708" class="event-details-switch">
                            <td>02:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/au.gif" class="event-currency-flag">	AU
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    澳大利亚NAB商业景气指数
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">7.00</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72708" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72708" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73116" onclick="showEventDetails('73116');" data-target="showEvent_73116" class="event-details-switch">
                            <td>03:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/cn.gif" class="event-currency-flag">	CN
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    中国M2货币供应年率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">13.00%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73116" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73116" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73117" onclick="showEventDetails('73117');" data-target="showEvent_73117" class="event-details-switch">
                            <td>03:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/cn.gif" class="event-currency-flag">	CN
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    中国新增人民币贷款
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">948.70</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73117" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73117" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72709" onclick="showEventDetails('72709');" data-target="showEvent_72709" class="event-details-switch">
                            <td>07:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/de.gif" class="event-currency-flag">	DE
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    德国批发物价指数月率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">-0.70%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72709" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72709" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72710" onclick="showEventDetails('72710');" data-target="showEvent_72710" class="event-details-switch">
                            <td>07:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/de.gif" class="event-currency-flag">	DE
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    德国批发物价指数年率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">-1.20%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72710" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72710" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72711" onclick="showEventDetails('72711');" data-target="showEvent_72711" class="event-details-switch">
                            <td>07:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/jp.gif" class="event-currency-flag">	JP
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    日本机械工具订单年率
                                    (9月)
                                    <b title="初始发布">p</b>
                                </a>
                            </td>
                            <td class="event-revised">-8.40%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72711" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72711" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72713" onclick="showEventDetails('72713');" data-target="showEvent_72713" class="event-details-switch">
                            <td>10:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/de.gif" class="event-currency-flag">	DE
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    德国ZEW经济现状指数
                                    (10月)
                                </a>
                            </td>
                            <td class="event-revised">55.10</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72713" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72713" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72714" onclick="showEventDetails('72714');" data-target="showEvent_72714" class="event-details-switch">
                            <td>10:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/de.gif" class="event-currency-flag">	DE
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    德国ZEW经济景气指数
                                    (10月)
                                </a>
                            </td>
                            <td class="event-revised">0.50</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72714" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72714" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72715" onclick="showEventDetails('72715');" data-target="showEvent_72715" class="event-details-switch">
                            <td>10:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/es.gif" class="event-currency-flag">	ES
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    西班牙12个月国债拍卖
                                </a>
                            </td>
                            <td class="event-revised">-0.20%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72715" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72715" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72716" onclick="showEventDetails('72716');" data-target="showEvent_72716" class="event-details-switch">
                            <td>10:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/es.gif" class="event-currency-flag">	ES
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    西班牙6个月国债拍卖
                                </a>
                            </td>
                            <td class="event-revised">-0.265%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72716" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72716" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72712" onclick="showEventDetails('72712');" data-target="showEvent_72712" class="event-details-switch">
                            <td>10:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/emu.gif" class="event-currency-flag">	EMU
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    欧元区ZEW经济景气指数
                                    (10月)
                                </a>
                            </td>
                            <td class="event-revised">5.40</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72712" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72712" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73118" onclick="showEventDetails('73118');" data-target="showEvent_73118" class="event-details-switch">
                            <td>11:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    NFIB小型企业信心指数
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">94.40</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73118" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73118" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73119" onclick="showEventDetails('73119');" data-target="showEvent_73119" class="event-details-switch">
                            <td>13:15</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/ca.gif" class="event-currency-flag">	CA
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    加拿大新屋开工年率（季调后）
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">182.70</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73119" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73119" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72717" onclick="showEventDetails('72717');" data-target="showEvent_72717" class="event-details-switch">
                            <td>13:55</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    红皮书指数（月率）
                                    (10月)
                                </a>
                            </td>
                            <td class="event-revised">-0.40%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72717" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72717" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72718" onclick="showEventDetails('72718');" data-target="showEvent_72718" class="event-details-switch">
                            <td>13:55</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    红皮书指数（年率）
                                    (10月)
                                </a>
                            </td>
                            <td class="event-revised">1.30%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72718" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72718" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73149" onclick="showEventDetails('73149');" data-target="showEvent_73149" class="event-details-switch">
                            <td>18:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    3年期国债拍卖
                                </a>
                            </td>
                            <td class="event-revised">0.947%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73149" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73149" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72719" onclick="showEventDetails('72719');" data-target="showEvent_72719" class="event-details-switch">
                            <td>21:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="无波动预期" class="e-value-0"><span>无波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    美国API每周原油库存
                                </a>
                            </td>
                            <td class="event-revised"></td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72719" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72719" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr>
                            <td class="events-dateline" colspan="8">星期三, 10月 12</td>
                        </tr>
                        <tr class="event-item" id="72720" onclick="showEventDetails('72720');" data-target="showEvent_72720" class="event-details-switch">
                            <td>00:50</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/jp.gif" class="event-currency-flag">	JP
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    日本银行信贷年率（含信托）
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">2.00%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72720" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72720" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73120" onclick="showEventDetails('73120');" data-target="showEvent_73120" class="event-details-switch">
                            <td>00:50</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/jp.gif" class="event-currency-flag">	JP
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    日本核心机械订单月率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">4.90%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73120" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73120" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73121" onclick="showEventDetails('73121');" data-target="showEvent_73121" class="event-details-switch">
                            <td>00:50</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/jp.gif" class="event-currency-flag">	JP
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    日本核心机械订单年率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">5.20%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73121" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73121" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72723" onclick="showEventDetails('72723');" data-target="showEvent_72723" class="event-details-switch">
                            <td>01:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/mx.gif" class="event-currency-flag">	MX
                            </td>
                            <td>
                                <div title="无波动预期" class="e-value-0"><span>无波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    哥伦布日
                                </a>
                            </td>
                            <td class="event-revised"></td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72723" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72723" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72724" onclick="showEventDetails('72724');" data-target="showEvent_72724" class="event-details-switch">
                            <td>01:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/es.gif" class="event-currency-flag">	ES
                            </td>
                            <td>
                                <div title="无波动预期" class="e-value-0"><span>无波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    西班牙国庆日
                                </a>
                            </td>
                            <td class="event-revised"></td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72724" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72724" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72722" onclick="showEventDetails('72722');" data-target="showEvent_72722" class="event-details-switch">
                            <td>01:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/br.gif" class="event-currency-flag">	BR
                            </td>
                            <td>
                                <div title="无波动预期" class="e-value-0"><span>无波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    圣母显灵节
                                </a>
                            </td>
                            <td class="event-revised"></td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72722" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72722" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72721" onclick="showEventDetails('72721');" data-target="showEvent_72721" class="event-details-switch">
                            <td>01:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/cl.gif" class="event-currency-flag">	CL
                            </td>
                            <td>
                                <div title="无波动预期" class="e-value-0"><span>无波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    哥伦布日
                                </a>
                            </td>
                            <td class="event-revised"></td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72721" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72721" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73122" onclick="showEventDetails('73122');" data-target="showEvent_73122" class="event-details-switch">
                            <td>01:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/au.gif" class="event-currency-flag">	AU
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    澳大利亚Westpac消费者信心指数月率
                                    (10月)
                                </a>
                            </td>
                            <td class="event-revised">0.30%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73122" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73122" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73123" onclick="showEventDetails('73123');" data-target="showEvent_73123" class="event-details-switch">
                            <td>07:45</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/fr.gif" class="event-currency-flag">	FR
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    法国消费者物价指数年率终值
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">0.50%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73123" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73123" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73124" onclick="showEventDetails('73124');" data-target="showEvent_73124" class="event-details-switch">
                            <td>07:45</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/fr.gif" class="event-currency-flag">	FR
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    法国消费者物价指数月率终值
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">0.30%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73124" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73124" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73125" onclick="showEventDetails('73125');" data-target="showEvent_73125" class="event-details-switch">
                            <td>07:45</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/fr.gif" class="event-currency-flag">	FR
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    法国扣除烟草后核心通胀指数月率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">0.30%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73125" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73125" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72726" onclick="showEventDetails('72726');" data-target="showEvent_72726" class="event-details-switch">
                            <td>10:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/es.gif" class="event-currency-flag">	ES
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    西班牙10年期债券拍卖
                                </a>
                            </td>
                            <td class="event-revised">1.125%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72726" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72726" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72725" onclick="showEventDetails('72725');" data-target="showEvent_72725" class="event-details-switch">
                            <td>10:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/ch.gif" class="event-currency-flag">	CH
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    瑞士ZEW经济预期指数
                                    (10月)
                                </a>
                            </td>
                            <td class="event-revised">2.70</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72725" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72725" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72727" onclick="showEventDetails('72727');" data-target="showEvent_72727" class="event-details-switch">
                            <td>10:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/emu.gif" class="event-currency-flag">	EMU
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    欧元区工业生产年率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">-0.50%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72727" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72727" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72728" onclick="showEventDetails('72728');" data-target="showEvent_72728" class="event-details-switch">
                            <td>10:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/emu.gif" class="event-currency-flag">	EMU
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    欧元区工业生产月率
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">-1.10%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72728" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72728" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73126" onclick="showEventDetails('73126');" data-target="showEvent_73126" class="event-details-switch">
                            <td>10:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/pt.gif" class="event-currency-flag">	PT
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    葡萄牙消费者物价指数月率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">-0.20%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73126" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73126" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73127" onclick="showEventDetails('73127');" data-target="showEvent_73127" class="event-details-switch">
                            <td>10:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/pt.gif" class="event-currency-flag">	PT
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    葡萄牙消费者物价指数年率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">0.70%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73127" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73127" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72729" onclick="showEventDetails('72729');" data-target="showEvent_72729" class="event-details-switch">
                            <td>12:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    MBA抵押贷款申请
                                    (10月)
                                </a>
                            </td>
                            <td class="event-revised"></td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72729" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72729" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72730" onclick="showEventDetails('72730');" data-target="showEvent_72730" class="event-details-switch">
                            <td>15:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    JOLTS职位空缺数据
                                    (8月)
                                </a>
                            </td>
                            <td class="event-revised">5.871</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72730" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72730" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72731" onclick="showEventDetails('72731');" data-target="showEvent_72731" class="event-details-switch">
                            <td>15:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    EIA原油库存变化
                                    (10月)
                                </a>
                            </td>
                            <td class="event-revised"></td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72731" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72731" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72732" onclick="showEventDetails('72732');" data-target="showEvent_72732" class="event-details-switch">
                            <td>16:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    52周汇票拍卖
                                </a>
                            </td>
                            <td class="event-revised">0.63%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72732" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72732" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72733" onclick="showEventDetails('72733');" data-target="showEvent_72733" class="event-details-switch">
                            <td>16:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    4周汇票拍卖
                                </a>
                            </td>
                            <td class="event-revised">0.26%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72733" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72733" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72734" onclick="showEventDetails('72734');" data-target="showEvent_72734" class="event-details-switch">
                            <td>18:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    美国10年期国债拍卖
                                </a>
                            </td>
                            <td class="event-revised">1.699%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72734" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72734" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72735" onclick="showEventDetails('72735');" data-target="showEvent_72735" class="event-details-switch">
                            <td>19:00</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="高波动预期" class="e-value-3"><span>高波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    美联储公开市场委员会会议纪要
                                </a>
                            </td>
                            <td class="event-revised"></td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72735" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72735" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="73128" onclick="showEventDetails('73128');" data-target="showEvent_73128" class="event-details-switch">
                            <td>21:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/us.gif" class="event-currency-flag">	US
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    美国API每周原油库存
                                </a>
                            </td>
                            <td class="event-revised">-7.60</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_73128" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_73128" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72736" onclick="showEventDetails('72736');" data-target="showEvent_72736" class="event-details-switch">
                            <td>23:30</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/nz.gif" class="event-currency-flag">	NZ
                            </td>
                            <td>
                                <div title="中等波动预期" class="e-value-2"><span>中等波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    ANZ-Business采购经理人指数
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">55.10</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72736" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72736" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        <tr class="event-item" id="72737" onclick="showEventDetails('72737');" data-target="showEvent_72737" class="event-details-switch">
                            <td>23:45</td>
                            <td class="e-name">
                                <img alt="" src="/themes/rbforex/images/flags/icon/nz.gif" class="event-currency-flag">	NZ
                            </td>
                            <td>
                                <div title="低波动预期" class="e-value-1"><span>低波动预期</span></div></td>
                            <td>
                                <a href="javascript:void(0);" >
                                    食品价格指数月率
                                    (9月)
                                </a>
                            </td>
                            <td class="event-revised">1.30%</td>
                            <td class="event-consensus"></td>
                            <td class=""></td>
                            <td class="event-expand">
                                <a href="javascript:void(0)" data-target="showEvent_72737" class="event-details-switch switch-left"></a>
                            </td>
                        </tr>
                        <tr class="event-item-indicator" id="showEvent_72737" style="display: none;">
                            <td colspan="8" class="event-details"></td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var base_path = '/analytics/economic-calendar/';



        /*! jsTimezoneDetect - v1.0.5 - 2013-04-01 */
        (function(e){var t=function(){"use strict";var e="s",n=2011,r=function(e){var t=-e.getTimezoneOffset();return t!==null?t:0},i=function(e,t,n){var r=new Date;return e!==undefined&&r.setFullYear(e),r.setDate(n),r.setMonth(t),r},s=function(e){return r(i(e,0,2))},o=function(e){return r(i(e,5,2))},u=function(e){var t=e.getMonth()>7?o(e.getFullYear()):s(e.getFullYear()),n=r(e);return t-n!==0},a=function(){var t=s(n),r=o(n),i=t-r;return i<0?t+",1":i>0?r+",1,"+e:t+",0"},f=function(){var e=a();return new t.TimeZone(t.olson.timezones[e])},l=function(e){var t=new Date(2010,6,15,1,0,0,0),n={"America/Denver":new Date(2011,2,13,3,0,0,0),"America/Mazatlan":new Date(2011,3,3,3,0,0,0),"America/Chicago":new Date(2011,2,13,3,0,0,0),"America/Mexico_City":new Date(2011,3,3,3,0,0,0),"America/Asuncion":new Date(2012,9,7,3,0,0,0),"America/Santiago":new Date(2012,9,3,3,0,0,0),"America/Campo_Grande":new Date(2012,9,21,5,0,0,0),"America/Montevideo":new Date(2011,9,2,3,0,0,0),"America/Sao_Paulo":new Date(2011,9,16,5,0,0,0),"America/Los_Angeles":new Date(2011,2,13,8,0,0,0),"America/Santa_Isabel":new Date(2011,3,5,8,0,0,0),"America/Havana":new Date(2012,2,10,2,0,0,0),"America/New_York":new Date(2012,2,10,7,0,0,0),"Asia/Beirut":new Date(2011,2,27,1,0,0,0),"Europe/Helsinki":new Date(2011,2,27,4,0,0,0),"Europe/Istanbul":new Date(2011,2,28,5,0,0,0),"Asia/Damascus":new Date(2011,3,1,2,0,0,0),"Asia/Jerusalem":new Date(2011,3,1,6,0,0,0),"Asia/Gaza":new Date(2009,2,28,0,30,0,0),"Africa/Cairo":new Date(2009,3,25,0,30,0,0),"Pacific/Auckland":new Date(2011,8,26,7,0,0,0),"Pacific/Fiji":new Date(2010,10,29,23,0,0,0),"America/Halifax":new Date(2011,2,13,6,0,0,0),"America/Goose_Bay":new Date(2011,2,13,2,1,0,0),"America/Miquelon":new Date(2011,2,13,5,0,0,0),"America/Godthab":new Date(2011,2,27,1,0,0,0),"Europe/Moscow":t,"Asia/Yekaterinburg":t,"Asia/Omsk":t,"Asia/Krasnoyarsk":t,"Asia/Irkutsk":t,"Asia/Yakutsk":t,"Asia/Vladivostok":t,"Asia/Kamchatka":t,"Europe/Minsk":t,"Pacific/Apia":new Date(2010,10,1,1,0,0,0),"Australia/Perth":new Date(2008,10,1,1,0,0,0)};return n[e]};return{determine:f,date_is_dst:u,dst_start_for:l}}();t.TimeZone=function(e){"use strict";var n={"America/Denver":["America/Denver","America/Mazatlan"],"America/Chicago":["America/Chicago","America/Mexico_City"],"America/Santiago":["America/Santiago","America/Asuncion","America/Campo_Grande"],"America/Montevideo":["America/Montevideo","America/Sao_Paulo"],"Asia/Beirut":["Asia/Beirut","Europe/Helsinki","Europe/Istanbul","Asia/Damascus","Asia/Jerusalem","Asia/Gaza"],"Pacific/Auckland":["Pacific/Auckland","Pacific/Fiji"],"America/Los_Angeles":["America/Los_Angeles","America/Santa_Isabel"],"America/New_York":["America/Havana","America/New_York"],"America/Halifax":["America/Goose_Bay","America/Halifax"],"America/Godthab":["America/Miquelon","America/Godthab"],"Asia/Dubai":["Europe/Moscow"],"Asia/Dhaka":["Asia/Yekaterinburg"],"Asia/Jakarta":["Asia/Omsk"],"Asia/Shanghai":["Asia/Krasnoyarsk","Australia/Perth"],"Asia/Tokyo":["Asia/Irkutsk"],"Australia/Brisbane":["Asia/Yakutsk"],"Pacific/Noumea":["Asia/Vladivostok"],"Pacific/Tarawa":["Asia/Kamchatka"],"Pacific/Tongatapu":["Pacific/Apia"],"Africa/Johannesburg":["Asia/Gaza","Africa/Cairo"],"Asia/Baghdad":["Europe/Minsk"]},r=e,i=function(){var e=n[r],i=e.length,s=0,o=e[0];for(;s<i;s+=1){o=e[s];if(t.date_is_dst(t.dst_start_for(o))){r=o;return}}},s=function(){return typeof n[r]!="undefined"};return s()&&i(),{name:function(){return r}}},t.olson={},t.olson.timezones={"-720,0":"Pacific/Majuro","-660,0":"Pacific/Pago_Pago","-600,1":"America/Adak","-600,0":"Pacific/Honolulu","-570,0":"Pacific/Marquesas","-540,0":"Pacific/Gambier","-540,1":"America/Anchorage","-480,1":"America/Los_Angeles","-480,0":"Pacific/Pitcairn","-420,0":"America/Phoenix","-420,1":"America/Denver","-360,0":"America/Guatemala","-360,1":"America/Chicago","-360,1,s":"Pacific/Easter","-300,0":"America/Bogota","-300,1":"America/New_York","-270,0":"America/Caracas","-240,1":"America/Halifax","-240,0":"America/Santo_Domingo","-240,1,s":"America/Santiago","-210,1":"America/St_Johns","-180,1":"America/Godthab","-180,0":"America/Argentina/Buenos_Aires","-180,1,s":"America/Montevideo","-120,0":"America/Noronha","-120,1":"America/Noronha","-60,1":"Atlantic/Azores","-60,0":"Atlantic/Cape_Verde","0,0":"UTC","0,1":"Europe/London","60,1":"Europe/Berlin","60,0":"Africa/Lagos","60,1,s":"Africa/Windhoek","120,1":"Asia/Beirut","120,0":"Africa/Johannesburg","180,0":"Asia/Baghdad","180,1":"Europe/Moscow","210,1":"Asia/Tehran","240,0":"Asia/Dubai","240,1":"Asia/Baku","270,0":"Asia/Kabul","300,1":"Asia/Yekaterinburg","300,0":"Asia/Karachi","330,0":"Asia/Kolkata","345,0":"Asia/Kathmandu","360,0":"Asia/Dhaka","360,1":"Asia/Omsk","390,0":"Asia/Rangoon","420,1":"Asia/Krasnoyarsk","420,0":"Asia/Jakarta","480,0":"Asia/Shanghai","480,1":"Asia/Irkutsk","525,0":"Australia/Eucla","525,1,s":"Australia/Eucla","540,1":"Asia/Yakutsk","540,0":"Asia/Tokyo","570,0":"Australia/Darwin","570,1,s":"Australia/Adelaide","600,0":"Australia/Brisbane","600,1":"Asia/Vladivostok","600,1,s":"Australia/Sydney","630,1,s":"Australia/Lord_Howe","660,1":"Asia/Kamchatka","660,0":"Pacific/Noumea","690,0":"Pacific/Norfolk","720,1,s":"Pacific/Auckland","720,0":"Pacific/Tarawa","765,1,s":"Pacific/Chatham","780,0":"Pacific/Tongatapu","780,1,s":"Pacific/Apia","840,0":"Pacific/Kiritimati"},typeof exports!="undefined"?exports.jstz=t:e.jstz=t})(this);

        function getCookies(c_name)
        {
            var i,x,y,ARRcookies=document.cookie.split(";");
            for (i=0;i<ARRcookies.length;i++){
                x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
                y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
                x=x.replace(/^\s+|\s+$/g,"");
                if (x==c_name){
                    return unescape(y);
                }
            }
        }

        $(document).ready(function(){

            $('tr.event-item').last().addClass('last-child');
            $('tr.event-item-indicator').last().addClass('last-child');
        });

        function removeHistoryTabWithoutContent(event_id, tab_class)
        {
            var table_size = $('#tabs_content_'+ event_id+' div.tab_has_history table.table tr').size();
            var $tab_content = $('#tabs_content_' + event_id);
            var $tab_history = $tab_content.children(tab_class);
            if (table_size < 2 || $tab_history.text().length < 10) {
                $('#showEvent_' + event_id + ' li' + tab_class ).remove();
                if ($tab_content.children().length == 1) {
                    $tab_content.remove();
                } else {
                    $tab_history.remove();
                }
            }
        }

        function showEventDetails(event_id)
        {
            if ($('#showEvent_'+event_id).is(':hidden') == true)
            {
                JsHttpRequest.query('/ecocalendar/showEvent/',
                        {'event_id' : event_id },
                        function(result, errors)
                        {
                            if (result.res == 1)
                            {
                                $('#showEvent_'+event_id).show();
                                $('#showEvent_'+event_id+' td').html(result.template);
                                removeHistoryTabWithoutContent(event_id, '.tab_has_history');
                            } else {
                                console.log(errors);
                            }
                        }, true
                );

                $('#'+event_id+' .event-details-switch').removeClass('switch-left');
                $('#'+event_id+' .event-details-switch').addClass('switch-down');
            }
            else
            {
                $('#showEvent_'+event_id).hide();
                $('#showEvent_'+event_id+' td').html('');

                $('#'+event_id+' .event-details-switch').removeClass('switch-down');
                $('#'+event_id+' .event-details-switch').addClass('switch-left');
            }
        }

        function showOlsenScaleInfo(id)
        {
            $('#olsen_'+id+' .olsentext').toggle();
        }

        function showOlsenScaleCurrencyGraph(id, date)
        {
            var curr_list = $('#curr_'+id+' option:selected').val();
            var curr =  $('#curr_'+id+' option:selected').text();

            var chart = 'http://www.olsenscale.com/sc/smq/latest?data=smqimage&date='+date+'&instrument='+curr_list+'&width=390&height=175&caption='+curr+'&days=3&showLabels=0&tz=GMT%2B0';
            var radar = 'http://www.olsenscale.com/sc/smq/latest?data=smqspider&date='+date+'&legs='+curr_list+'&center=USD&width=200&height=175&caption='+curr+'&printValue=1&showGradient=0&strongLabels=1';

            $('#olsen_'+id+' [name="chart"]').attr('src', chart);
            $('#olsen_'+id+' [name="radar"]').attr('src', radar);
        }

        function openTab(tab_name, event_id)
        {
            $('#showEvent_'+event_id+' .switch-rating-tabs li').removeClass('active');

            $('#showEvent_'+event_id+' .switch-rating-tabs li.tab_'+tab_name).addClass('active');

            $('#tabs_content_'+event_id+' > div').hide();
            $('#tabs_content_'+event_id+' .tab_'+tab_name).show();
        }

        function setDefaultTimezone()
        {
            var tz = jstz.determine(); // Determines the time zone of the browser client
            $.cookie('time_zone_name', tz.name(), {path: '/',  domain: document.domain});

            var now = new Date();
            $.cookie('time_zone_offset', now.getTimezoneOffset() * -1, {path: '/', expires: 365*10 ,domain: document.domain});
            var d1 = new Date(),
                    d2 = new Date();
            // Date one is set to January 1st of this year
            // Guaranteed not to be in DST for northern hemisphere,
            // and guaranteed to be in DST for southern hemisphere
            // (If DST exists on client PC)
            d1.setDate(1);
            d1.setMonth(1);
            // Date two is set to July 1st of this year
            // Guaranteed to be in DST for northern hemisphere,
            // and guaranteed not to be in DST for southern hemisphere
            // (If DST exists on client PC)
            d2.setDate(1);
            d2.setMonth(7);
            if (parseInt(d1.getTimezoneOffset())==parseInt(d2.getTimezoneOffset()))
            {
                $.cookie("time_zone_dst", "0", {path: '/', expires: 365*10 ,domain: document.domain});
            }
            // DST exists for this time zone – check if it is currently active
            else
            {
                // Find out if we are on northern or southern hemisphere
                // Hemisphere is positive for northern, and negative for southern
                var hemisphere = parseInt(d1.getTimezoneOffset())-parseInt(d2.getTimezoneOffset());
                // Current date is still before or after DST, not containing DST
                if ((hemisphere>0 && parseInt(d1.getTimezoneOffset())==parseInt(now.getTimezoneOffset())) ||
                        (hemisphere<0 && parseInt(d2.getTimezoneOffset())==parseInt(now.getTimezoneOffset())))
                {
                    $.cookie("time_zone_dst", "0", {path: '/', expires: 365*10 ,domain: document.domain});
                } // DST is active right now with the current date
                else
                {
                    $.cookie("time_zone_dst", "1", {path: '/', expires: 365*10 ,domain: document.domain});
                }
            }
        }

        function eventsChangeGMT()
        {
            var timezone = $('#timezones').val();
            if (timezone === '')
            {
                setDefaultTimezone();
                location.reload(true);
            }
            else
            {
                JsHttpRequest.query('/ecocalendar/changeGmt/',
                        {'timezone' : timezone},
                        function(result, errors) {
                            if (result.res == 1)
                            {
                                $.cookie('time_zone_offset', result.offset, {path: '/',  domain: document.domain});
                                $.cookie('time_zone_dst', result.dst, {path: '/',  domain: document.domain});
                                $.cookie('time_zone_name', result.timezone_name, {path: '/',  domain: document.domain});
                                location.reload(true);
                            }
                            else
                            {
                                $.dqMessage(result.errors);
                                console.log(errors);
                            }
                        }, true
                );
            }
        }

        function showFilterPage()
        {
            JsHttpRequest.query('/ecocalendar/showFilterPage/',
                    {},
                    function(result, errors) {
                        if (result.res == 1)
                        {
                            $('#c-filter').html(result.template);
                        }
                        else
                        {
                            console.log(errors);
                        }
                    }, true
            );
        }

        $('.switch-filter').click(function(){
            showFilterPage();
            $('#calendar-block').toggle($('.filter-block').is(':hidden'));
            $(this).toggleClass('active');
            $('#'+$(this).attr('data-target')).slideToggle();
        });

        // подгрузка изображений для заголовка грида
        if(document.images)
        {
            var pic1=new Image();
            pic1.src="/themes/rbforex/images/inner/tc-tl.png";
            var pic2=new Image();
            pic2.src="/themes/rbforex/images/inner/tc-tr.png";
        }

        $(function()
        {
            if (getCookies('time_zone_offset') === undefined || getCookies('time_zone_dst') === undefined)
            {
                setDefaultTimezone();
                if (getCookies('refreshed') != 1)
                {
                    $.cookie('refreshed', 1, {path: '/', expires: 365*10, domain: document.domain});
                    location.reload(true);
                }
            }
        });

    </script>

    <div id="right">
        <ul id="r-menu">
            <li  class="selected" >
                <a>外汇日历</a>


            </li>
            <li >
                <a href="/analytics/forex-forecast/"  >外汇分析 外汇预测</a>


            </li>
            <li >
                <a href="https://my.cn.roboforex.com/cs/analytics"  target="_blank"  >RoboForex分析中心</a>


            </li>
            <li >
                <a href="/analytics/charts/"  >免费外汇图表</a>


            </li>
            <li >
                <a href="/analytics/forex-calculator/"  >外汇保证金计算器</a>


            </li>
            <li >
                <a href="/analytics/interest-rates/"  >外汇利率</a>


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
            referrer_info_url: 'http://cn.roboforex.com/referrals/getReferrerInfo/',
            set_referrer_agent_id_cookie_url: 'http://cn.roboforex.com/referrals/setAgentIdCookieByReferrer/',
            remove_referrer_agent_id_cookie_url: 'http://cn.roboforex.com/referrals/removeAgentIdCookieByReferrer/'
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