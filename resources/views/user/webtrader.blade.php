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


    <title>WebTrader RoboForex</title>
    <meta property="og:title" content="WebTrader GoldMany" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="/trade-conditions/webtrader/" />
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
        <a href="/" >首页</a>/<a href="/trade-conditions/account-types/" >条件</a>/WebTrader GoldMany
    </div>

    <div id="left">
        <h1 >网络终端 - WebTrader GoldMany</h1>
        <table class="soc-2 share">
            <tr>
                <td class="soc-3">
                    <div class="fb-like" data-href="/trade-conditions/webtrader/"
                         data-send="false" data-layout="button_count" data-width="82" data-show-faces="true">

                    </div>
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
                       data-url="/trade-conditions/webtrader/">

                    </a>
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
                         data-href="/trade-conditions/webtrader/">

                    </div>

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
        <div ><style type="text/css">
                ul.tabs {
                    margin: 0;
                    padding: 0;
                    float: left;
                    list-style: none;
                    height: 32px;
                    width: 648px;
                }
                ul.tabs li {
                    float: left;
                    margin: 0;
                    cursor: pointer;
                    padding: 0px;
                    height: 31px;
                    line-height: 31px;
                    background-color: #fff;
                    color: #344964;
                    overflow: hidden;
                    position: relative;
                    text-align: center;
                    border-top: 1px solid #e3e3e3;
                    border-bottom: 1px solid #e3e3e3;
                    width: 215px;
                }
                ul.tabs li.first.active {
                    border-left: 1px solid #344964;
                }
                ul.tabs li.first {
                    border-left: 1px solid #e3e3e3;
                }
                ul.tabs li.last {
                    border-right: 1px solid #e3e3e3;
                    width: 216px;
                }
                ul.tabs li.last.active {
                    border-right: 1px solid #344964;
                }
                ul.tabs li.active {
                    background-color: #344964;
                    color: #fff;
                    display: block;
                    border-top: 1px solid #344964;
                    border-bottom: 1px solid #344964;
                }
                .tab_container {
                    border-bottom: 1px solid #e3e3e3;
                    border-left: 1px solid #e3e3e3;
                    border-right: 1px solid #e3e3e3;
                    clear: both;
                    width: 646px;
                    background: #fff;
                    overflow: auto;
                    margin-bottom: 20px;
                    -webkit-border-radius: 0 0 5px 5px;
                    -moz-border-radius: 0 0 5px 5px;
                    -o-border-radius: 0 0 5px 5px;
                    border-radius: 0 0 5px 5px;
                }
                .tab_content {
                    padding: 20px 20px 0 20px;
                    display: none;
                    text-align: justify;
                }
                .tab_container .terms li {
                    padding:0 0 5px 20px;
                }
                .tab_drawer_heading { display: none; }
                .info_holder {
                    margin-top: 30px;
                    -webkit-border-radius: 0 0 5px 5px;
                    -moz-border-radius: 0 0 5px 5px;
                    -o-border-radius: 0 0 5px 5px;
                    border-radius: 0 0 5px 5px;
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
                }</style>
            <img alt="" src="/images/webtrader/WebTrader648x203.jpg" style="height: 203px; width: 648px;" />
            <div>
                <ul class="tabs">
                    <li class="first active" rel="tab1">
                        优势</li>
                    <li rel="tab2">
                        主要特点</li>
                    <li class="last" rel="tab3">
                        界面的例子</li>
                </ul>
                <div class="tab_container">
                    <h3 class="tab_drawer_heading d_active" rel="tab1">
                        Tab 1</h3>
                    <div class="tab_content" id="tab1" style="display: block;">
                        <p>
                            WebTrader不受操作系统限制，通过浏览器便可安全交易。只要能上网，您不需任何软件下载安装，简单点击鼠标，便可进入MT4交易账户进行操作。</p>
                        <p>
                            <strong>外汇交易用户定能充分体会网页交易终端的优势：</strong></p>
                        <ul class="terms">
                            <li>
                                指标信号: 移动平均线, 指数平滑移动平均线, 相对强弱指标 (RSI), 平滑异同平均线 (MACD), 随机指标, 布林线指标,一目平衡表指标, 跳动量图表</li>
                            <li>
                                直观易懂的界面和24/7进入交易</li>
                            <li>
                                通过任何互联网浏览器在任何操作系统(Windows, Mac OS, Linux)交易</li>
                            <li>
                                从任何移动设备访问</li>
                            <li>
                                终端不需要下载和安装</li>
                            <li>
                                无需额外的授权进入任何类型的MT4账户</li>
                            <li>
                                这个网络终端界面运行更快,图表显示更好</li>
                            <li>
                                这个终端支持双重授权 (通过短信发送确认码登陆WebTrader)</li>
                        </ul>
                    </div>
                    <!-- #tab1 -->
                    <h3 class="tab_drawer_heading" rel="tab2">
                        Tab 2</h3>
                    <div class="tab_content" id="tab2" style="display: none;">
                        <p>
                            WebTrader GoldMany不是一个附加的交易平台 &ndash; 它是一个全功能的交易终端, 包含成功安全交易的所有必需的工具. 每个交易者可以在WebTrader GoldMany发现其多样化的特点, 足够使他们在外汇市场有效运作.</p>
                        <p>
                            <strong>这个终端的主要特点:</strong></p>
                        <ul class="terms">
                            <li>
                                指标信号: 移动平均线, 指数平滑移动平均线, 相对强弱指标 (RSI), 平滑异同平均线 (MACD), 随机指标, 布林线指标,一目平衡表指标, 跳动量图表</li>
                            <li>
                                图形分析工具 &ndash; 十字星, 垂直线, 水平线, 趋势线, 等距通道, 斐波那契回调线, 矩形, 三角形</li>
                            <li>
                                无需额外授权操作即可在平台直接使用会员中心基本服务:开户, 管理资金, 查看增金信息等</li>
                            <li>
                                2种类型的图表: 日本蜡烛图和线形图</li>
                            <li>
                                每种工具9个时段: 从1分钟到1个月</li>
                            <li>
                                交易时账户间的简单切换</li>
                            <li>
                                报价在线更新监控</li>
                            <li>
                                &quot;收藏夹&quot; 面板</li>
                            <li>
                                打开订单和账户余额的监控; 有机会修改打开头寸和它们的止损和止盈水平</li>
                            <li>
                                所开头寸和挂单现在直接会在图表窗口显示(如果您移动您的鼠标至图表中的订单/头寸, 盈亏和止盈/止损将会在图表呈现</li>
                            <li>
                                账户历史和交易操作日志</li>
                            <li>
                                简单的导航 &ndash; 更容易的工具, 打开头寸, 和交易历史的查询</li>
                            <li>
                                一键交易服务</li>
                        </ul>
                    </div>
                    <!-- #tab2 -->
                    <h3 class="tab_drawer_heading" rel="tab3">
                        Tab 3</h3>
                    <div class="tab_content" id="tab3" style="overflow: hidden; display: none;">
                        <p>
                            网页交易平台界面含多个具体板块，按用户使用习惯组成。</p>
                        <p>
                            您可以按平台右上方&quot;设置&quot;键，选择您想要显示的板块和图表元素，或是选择暗色或明亮颜色方案。</p>
                        <p>
                            <strong>平台的界面例子 (亮色方案):</strong></p>
                        <div style="text-align: center;padding-bottom:5px;">
                            <a class="grouped_elements"
                               href="/images/webtrader/leverage_1l.png"
                               rel="image_group" style="    margin-right: 3px;" title="在日本蜡烛图在线监控报价更新.">
                                <img src="/images/webtrader/leverage_s_1l.png"
                                     style="width: 140px; height: 94px; border: 1px solid rgb(169, 169, 169);" />
                            </a>
                            <a class="grouped_elements"
                               href="/images/webtrader/leverage_2l.png"
                               rel="image_group" style="    margin-right: 3px;" title="在线形图表在线监控报价更新.">
                                <img src="/images/webtrader/leverage_s_2l.png"
                                     style="width: 140px; height:94px; border: 1px solid rgb(169, 169, 169);" />
                            </a>
                            <a class="grouped_elements"
                               href="/images/webtrader/leverage_3l.png"
                               rel="image_group" style="    margin-right: 3px;" title="可用账户间的切换窗口.">
                                <img src="/images/webtrader/leverage_s_3l.png"
                                     style="width: 140px; height:94px; border: 1px solid rgb(169, 169, 169);" />
                            </a>
                            <a class="grouped_elements"
                               href="/images/webtrader/leverage_4l.png"
                               rel="image_group" title="打开订单的窗口.">
                                <img src="/images/webtrader/leverage_s_4l.png"
                                     style="width: 140px; height:94px; border: 1px solid rgb(169, 169, 169);" />
                            </a>
                        </div>
                        <p>
                            <strong>平台的界面例子 (深色方案):</strong></p>
                        <div style="text-align: center;padding-bottom:5px;">
                            <a class="grouped_elements"
                               href="/images/webtrader/leverage_1.png"
                               rel="image_group" style="    margin-right: 3px;" title="在日本蜡烛图在线监控报价更新.">
                                <img src="/images/webtrader/leverage_s_1.png"
                                     style="width: 140px; height: 94px; border: 1px solid rgb(169, 169, 169);" />
                            </a>
                            <a class="grouped_elements"
                               href="/images/webtrader/leverage_2.png"
                               rel="image_group" style="    margin-right: 3px;" title="在线形图表在线监控报价更新.">
                                <img src="/images/webtrader/leverage_s_2.png"
                                     style="width: 140px; height:94px; border: 1px solid rgb(169, 169, 169);" />
                            </a>
                            <a class="grouped_elements"
                               href="/images/webtrader/leverage_3.png"
                               rel="image_group" style="    margin-right: 3px;" title="可用账户间的切换窗口.">
                                <img src="/images/webtrader/leverage_s_3.png"
                                     style="width: 140px; height:94px; border: 1px solid rgb(169, 169, 169);" />
                            </a>
                            <a class="grouped_elements"
                               href="/images/webtrader/leverage_4.png"
                               rel="image_group" title="打开订单的窗口.">
                                <img src="/images/webtrader/leverage_s_4.png"
                                     style="width: 140px; height:94px; border: 1px solid rgb(169, 169, 169);" />
                            </a>
                        </div>
                        <p>
                            WebTrader GoldMany 网页交易终端设计简单实用，即使对初学者也很容易上手。用户可以通过&quot;WebTrader概述&quot;键了解各项功能。
                        </p>
                        <script lang="text/javascript">
                            jQuery(document).ready(function() {
                                /*                       $("a[rel=image_group, image_group2]").fancybox({*/
                                $("a.grouped_elements").fancybox({
                                    'transitionIn'      : 'none',
                                    'transitionOut'     : 'none',
                                    'titlePosition'     : 'over',
                                    'titleFormat'       : function(title, currentArray, currentIndex, currentOpts) {
                                        return '<span id="fancybox-title-over">' +  (currentIndex + 1) + ' / ' + currentArray.length + title + '</span>';
                                    }
                                });
                            });
                        </script></div>
                </div>
                <!-- #tab3 -->
            </div>
            <div class="info_holder">
                <div class="info_block">
                    <img src="http://www.roboforex.ru/files/filemanager/image3/ears/d2499527d5-lt.png" /></div>
                <p class="info_title">
                    使用GoldMany移动设备交易平台应用, 能让您使用所有类型的MT4账号在任意基于
                    <a href="https://itunes.apple.com/us/app/mobiletrader-roboforex/id1137639247?mt=8" target="_blank">IOS</a>
                    和
                    <a href="https://play.google.com/store/apps/details?id=com.roboforex.webtrader" target="_blank">安卓</a>的移动设备上进行交易.
                </p>
            </div>
            <div class="note_block">
                <strong>请注意</strong>只有货币对和重金属可在WebTrader在线交易平台交易.差价合约暂时不被支持.</div>
            <p style="text-align: justify;">
                将此链接添加到您的收藏夹以方便登陆：</p>
            <div class="clear">
                &nbsp;</div>
            <p style="text-align: center;">
                <span style="font-size:24px;">
                    <a href="https://webtrader.goldmany.com/?lang=cn" target="_blank">
                        webtrader.goldmany.com</a>
                </span>
            </p>
            <p style="text-align: justify;">
                您现在即可通过网页交易终端进行外汇交易。请输入您的MT4账号和密码。如果您没有MT4交易账户，请在会员中心处开设。
            </p>
            <p style="text-align: center;">
                <a class="likeBigButton" href="https://webtrader.roboforex.com/?lang=cn" target="_blank">
                    <span>开始交易</span></a>&nbsp;
                <a class="likeBigButton rw-tip_holder"
                   href="https://my.cn.roboforex.com/cs/trading-account/open-trading-account/"
                   style="margin-right:10px;" target="_blank"><span>开设MT4交易账户</span>
                </a>
            </p>
            <div class="note_block">
                WebTrader新版本已包含所有交易终端功能，但我们仍将继续努力不断完善此平台。
                如您有任何就网页交易终端的改进意见或建议，请点击WebTrader窗口里的&quot;发送反馈&quot;与我们分享。</div>
            <p>
                我们历来重视用户对公司新软件的评价，如您能拨冗就平台操作相关反馈和建议发送到公司邮箱
                <a href="mailto:china@goldmany.com">info@goldmany.com</a>，我们将不胜感激。
            </p>
            <script type="text/javascript">
                $(".tab_content").hide();
                $(".tab_content:first").show();

                /* if in tab mode */
                $("ul.tabs li").click(function() {

                    $(".tab_content").hide();
                    var activeTab = $(this).attr("rel");
                    $("#"+activeTab).fadeIn();

                    $("ul.tabs li").removeClass("active");
                    $(this).addClass("active");

                    $(".tab_drawer_heading").removeClass("d_active");
                    $(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");

                });
                /* if in drawer mode */
                $(".tab_drawer_heading").click(function() {

                    $(".tab_content").hide();
                    var d_activeTab = $(this).attr("rel");
                    $("#"+d_activeTab).fadeIn();

                    $(".tab_drawer_heading").removeClass("d_active");
                    $(this).addClass("d_active");

                    $("ul.tabs li").removeClass("active");
                    $("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
                });


                /* Extra class "tab_last"
                 to add border to right side
                 of last tab */
                $('ul.tabs li').last().addClass("tab_last");

            </script></div>
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
            <li >
                <a href="/trade-conditions/forex-order-types/"  >订单类型</a>


            </li>
            <li >
                <a href="/trade-conditions/terminals/"  >交易终端</a>


            </li>
            <li  class="selected" >
                <a>WebTrader GoldMany</a>


                <ul>
                    <li >
                        <a href="/trade-conditions/webtrader/webtrader-features/"  >WebTrader GoldMany 特性</a>
                    </li>
                </ul>
            </li>
            <li >
                <a href="/trade-conditions/metatrader4-mt4/"  >MetaTrader 4 (MT4)</a>
            </li>
            <li >
                <a href="/trade-conditions/mobile-forex/"  >«移动外汇» 服务</a>


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