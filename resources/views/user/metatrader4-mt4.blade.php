 <!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie8 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if IE 9 ]> <html class="no-js ie9 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="MetaTrader 4(MT4) 交易平台" />
    <meta name="keywords" content="mt4, mt 4, metatrader 4, mt4 外汇, meta trader 4, metatrader 4 交易商, metatrader 4 图表, metatrader 4 指标" />
    <meta name="w1-verification" content="117844634768" />


    <title>MetaTrader 4 (MT4) 交易平台</title>
    <meta property="og:title" content="MetaTrader 4 (MT4) 交易平台" />
    <meta property="og:description" content="MetaTrader 4(MT4) 交易平台" />
    <meta property="og:url" content="/trade-conditions/metatrader4-mt4/" />
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
        <a href="/" >首页</a>/<a href="/trade-conditions/account-types/" >条件</a>/MetaTrader 4 (MT4)
    </div>
    <div id="left">
        <h1 >MetaTrader 4 (MT4) 交易平台</h1>
        <table class="soc-2 share">
            <tr>
                <td class="soc-3">
                    <div class="fb-like" data-href="/trade-conditions/metatrader4-mt4/"
                         data-send="false" data-layout="button_count" data-width="82"
                         data-show-faces="true">
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
                       data-url="/trade-conditions/metatrader4-mt4/">
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
                         data-href="/trade-conditions/metatrader4-mt4/">

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
                    background-color: #C9C7C4;
                    color: #344964;
                    overflow: hidden;
                    position: relative;
                    text-align: center;
                    border-top: 1px solid #C9C7C4;
                    border-bottom: 1px solid #C9C7C4;
                    width: 215px;
                    text-shadow: 0 0px 7px rgba(0, 0, 0, 0.88);
                    color: #FFF;
                    font-size: 13px;
                    font-weight: bold;
                    text-transform: uppercase;
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
                    background-color: #005799;
                    color: #fff;
                    display: block;
                    border-top: 1px solid #005799;
                    border-bottom: 1px solid #005799;
                }
                .tab_container {
                    border-bottom: 1px solid #e3e3e3;
                    border-left: 1px solid #e3e3e3;
                    border-right: 1px solid #e3e3e3;
                    clear: both;
                    float: left;
                    width: 646px;
                    background: #fff;
                    overflow: auto;
                    margin-bottom: 0px;
                    -webkit-border-radius: 0 0 5px 5px;
                    -moz-border-radius: 0 0 5px 5px;
                    -o-border-radius: 0 0 5px 5px;
                    border-radius: 0 0 5px 5px;
                }
                .tab_content {
                    padding: 20px;
                    display: none;
                    text-align: justify;
                }
                .tab_container .terms li {
                    padding:0 0 5px 20px;
                }
                .tab_drawer_heading { display: none; }

                .account-types {
                    width: 205px;
                    height: 230px;
                    display: inline-block;
                    box-sizing: border-box;
                    padding: 12px;
                    vertical-align: top;
                    border: 1px solid #e3e3e3;
                    border-radius: 5px;
                    box-shadow: 0px 9px 6px -10px rgba(0, 0, 0, 0.68);
                }
                .terms > li {
                    margin-bottom: 10px;
                }
                .results-btn {
                    height: 20px;
                    line-height: 20px;
                    font-size: 14px;
                    text-decoration: none;
                    cursor: pointer;
                    display: inline-block;
                    font-size: 13px;
                    margin-bottom: 0;
                    padding: 4px 15px;
                    text-align: center;
                    vertical-align: middle;
                    background: #005799;
                    border: 1px solid #005799;
                    color: #fff;
                    width: 143px;
                    border-radius: 4px;
                    box-shadow: 0px 12px 9px -13px rgba(0, 0, 0, 0.74902);
                    -webkit-transition: all 200ms linear;
                    -moz-transition: all 200ms linear;
                    -o-transition: all 200ms linear;
                    transition: all 200ms linear;
                }
                .results-btn:hover {
                    opacity: 0.8;
                }
                div.webtrader_block:after {
                    border: 20px solid transparent;
                    border-left: 10px solid rgba(227, 227, 227, 0.25);
                    border-top: 40px solid rgba(227, 227, 227, 0.25);
                    content: "";
                    position: absolute;
                    top: 0;
                    right: 0;
                    margin-right: -30px;
                }
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
            <img alt="" src="http://www.roboforex.com/files/filemanager/image3/structure/trade-conditions/mt4/mt4-head.png"
                 style="height: 203px; width: 648px;vertical-align: bottom;" />
            <div>
                <ul class="tabs">
                    <li class="first active" rel="tab1">
                        重要功能</li>
                    <li rel="tab2">
                        特别特性</li>
                    <li class="last tab_last" rel="tab3">
                        更多</li>
                </ul>
                <div class="tab_container" style="
    background: url(http://www.roboforex.com/files/filemanager/image3/structure/trade-conditions/mt4-logo-opacity.png) 96% 89% no-repeat;
">
                    <h3 class="tab_drawer_heading d_active" rel="tab1">
                        重要功能</h3>
                    <div class="tab_content" id="tab1" style="display: block;
                    background: url(http://www.roboforex.com/files/filemanager/image3/structure/trade-conditions/mt4/mt4-logo-opacity.png;) 96% 89% no-repeat;">
                        <p>
                            MT4为交易者中最受欢迎最流行的交易平台. 这主要是由于平台界面友好, 拥有很多不同的交易市场分析工具, 并且允许客户创立新的自动交易软件或使用现有的自动交易软件.</p>
                        <p>
                            <strong>平台主要功能:</strong></p>
                        <ul class="terms" style="margin-left: 20px;">
                            <li>
                                3种订单执行模式</li>
                            <li>
                                多种订单种类(市场, 挂单, 止价单,等)</li>
                            <li>
                                可见的账户交易历史记录</li>
                            <li>
                                可收取系统信号和交易时间信号</li>
                            <li>
                                一键交易</li>
                            <li>
                                9种交易时间段</li>
                            <li>
                                50种整合的技术分析指标</li>
                            <li>
                                免费的基础自动分析专家软件</li>
                        </ul>
                    </div>
                    <!-- #tab1 -->
                    <h3 class="tab_drawer_heading" rel="tab2">
                        特别特性</h3>
                    <div class="tab_content" id="tab2" style="display: none;">
                        <p>
                            <strong>MT4平台让您可以完全操控您的交易:</strong></p>
                        <ul class="terms" style="margin-left: 20px;">
                            <li>
                                以在线形式从世界金融市场获得报价</li>
                            <li>
                                紧随金融市场新闻事件</li>
                            <li>
                                建立以MQL4为基准的交易程式</li>
                            <li>
                                创立您自己的指标</li>
                            <li>
                                直接从平台里的MetaTrader市场添加交易程式和指标</li>
                        </ul>
                        <div style="text-align: center;margin-bottom: 20px;">
                            <a href="http://www.roboforex.com/files/filemanager/image3/structure/trade-conditions/mt4/001.png"
                               rel="image_group" style="    margin-right: 3px;">
                                <img src="http://www.roboforex.com/files/filemanager/image3/structure/trade-conditions/mt4/001.png"
                                     style="width: 135px; border: 1px solid rgb(169, 169, 169);" />
                            </a>
                            <a href="http://www.roboforex.com/files/filemanager/image3/structure/trade-conditions/mt4/002.png"
                               rel="image_group" style="    margin-right: 3px;">
                                <img src="http://www.roboforex.com/files/filemanager/image3/structure/trade-conditions/mt4/002.png"
                                     style="width: 135px; border: 1px solid rgb(169, 169, 169);" />
                            </a>
                            <a href="http://www.roboforex.com/files/filemanager/image3/structure/trade-conditions/mt4/003.png"
                               rel="image_group" style="    margin-right: 3px;">
                                <img src="http://www.roboforex.com/files/filemanager/image3/structure/trade-conditions/mt4/003.png"
                                     style="width: 135px; border: 1px solid rgb(169, 169, 169);" />
                            </a>
                            <a href="http://www.roboforex.com/files/filemanager/image3/structure/trade-conditions/mt4/004.png"
                               rel="image_group">
                                <img src="http://www.roboforex.com/files/filemanager/image3/structure/trade-conditions/mt4/004.png"
                                     style="width: 135px; border: 1px solid rgb(169, 169, 169);" />
                            </a>
                        </div>
                    </div>
                    <!-- #tab2 -->
                    <h3 class="tab_drawer_heading" rel="tab3">
                        更多</h3>
                    <div class="tab_content" id="tab3" style="overflow: hidden; display: none;">
                        <p style="text-align: center;font-size: 16px;padding-bottom: 3px;margin: 0px auto 17px;">
                            使用MT4的更多资源:</p>
                        <ul>
                            <li>
                                <a href="http://cn.roboforex.com/trading-accounts/download-metatrader4-mt4/metatrader4-mt4-for-mac-os/" target="_blank">Mac OS操作系统MT4安装说明</a></li>
                            <li>
                                <a href="http://cn.roboforex.com/trading-accounts/download-metatrader4-mt4/metatrader4-mt4-for-linux/" target="_blank">Linux系统MT4安装说明</a></li>
                            <li>
                                <a href="http://cn.roboforex.com/trading-accounts/download-metatrader4-mt4/advisors-mt4/" target="_blank">MT4 EA安装说明</a></li>
                            <li>
                                <a href="http://cn.roboforex.com/trade-conditions/mobile-forex/push-notifications/" target="_blank">开启手机平台推送消息提醒功能</a></li>
                        </ul>
                    </div>
                </div>
                <!-- #tab3 --></div>
            <img src="http://my.roboforex.com/files/filemanager/image3/letters/sh-sep.png" style="width: 100%; height: 20px !important;margin-bottom: 10px;opacity: 0.4;" />
            <div style="
    -webkit-border-radius: 0 0 5px 5px;
    -moz-border-radius: 0 0 5px 5px;
    -o-border-radius: 0 0 5px 5px;
    border-radius: 0 0 5px 5px;
    border: 1px solid #e3e3e3;
    height: 60px;
">
                <div class="webtrader_block" style="
    width: 115px;
    padding: 20px 10px 20px 20px;
    display: inline-block;
    vertical-align: top;
    background: rgba(227, 227, 227, 0.25);
    height: 20px;
    position: relative;
">
                    <img src="https://webtrader.roboforex.com/img/logo/logo.png" style="
" /></div>
                <p style="
    display: inline-block;
    vertical-align: top;
    width: 446px;
    padding: 14px;
    margin-bottom: 0;
    margin-left: 20px;
    margin-top: 0;
    height: 32px;
">
                    在浏览器或移动设备上使用功能齐全的在线交易平台.
                    <a href="http://cn.roboforex.com/trade-conditions/webtrader/" target="_blank">阅读更多...</a>
                </p>
            </div>
            <div class="info_holder">
                <div class="info_block">
                    <img src="http://www.roboforex.ru/files/filemanager/image3/ears/d2499527d5-lt.png" /></div>
                <p class="info_title">
                    使用RoboForex移动设备交易平台应用, 能让您使用所有类型的MT4账号在任意基于
                    <a href="https://itunes.apple.com/us/app/mobiletrader-roboforex/id1137639247?mt=8" target="_blank">IOS</a>
                    和
                    <a href="https://play.google.com/store/apps/details?id=com.roboforex.webtrader" target="_blank">安卓</a>
                    的移动设备上进行交易.
                </p>
            </div>
            <p style="text-align: center;">
                <a class="results-btn modal-trigger" data-terminal="mt4"
                   href="http://my.roboforex.com/en/help/download-center/" style="text-decoration: none;
                   color: #fff;" target="_blank"><span>下载MT4</span></a>
            </p>
            <div style="
    text-align: center;
">
                <img src="http://www.roboforex.com/files/filemanager/image3/structure/trade-conditions/mt5/cd27352c89.png"
                     style="width: 190px; height: 31px;" title="MetaTrader4 доступен на всех популярных платформах" />
            </div>
            <h2 style="text-align: center;margin: 40px 0 20px;">
                MT4账户类型</h2>
            <p>
                GoldMany提供的所有账户类型都可以在MT4平台里使用. 确定您的经验等级现在就开户:</p>
            <div style="text-align: center;margin-bottom: 30px;">
                <div class="account-types" style="
    background: url(http://www.roboforex.com/files/filemanager/image3/structure/trade-conditions/mt4/f8dc31ff1c.png);
    background-position-x: 0%;
    background-position-y: 119%;
    background-repeat: no-repeat;
">
                    <div style="font-size: 17px;margin: 0 5px 5px;padding-bottom: 4px;border-bottom: 1px solid #e3e3e3;color: #005799;/* text-shadow: 0 1px 3px rgba(0, 0, 0, 0.22); */">
                        对于初学者</div>
                    <p style="
    font-weight: bold;
">
                        没分账户</p>
                    <div style="text-align: left;height: 130px;">
                        <ul class="terms" style="
    font-size: 12px;
">
                            <li>
                                点差: 从0.4点起</li>
                            <li>
                                商品: 多至34对货币对, 金属</li>
                            <li>
                                交易最小保证金: 基准货币的0.01个单位</li>
                        </ul>
                    </div>
                </div>
                <div class="account-types" style="margin: 0 10px;
                background: url(http://www.roboforex.com/files/filemanager/image3/structure/trade-conditions/mt4/f8dc31ff1c.png);
                background-position-x: 51%;background-position-y: 119%;
                background-repeat: no-repeat;">
                    <div style="font-size: 17px;margin: 0 5px 5px;padding-bottom: 4px;border-bottom: 1px solid #e3e3e3;color: #005799;/* text-shadow: 0 1px 3px rgba(0, 0, 0, 0.22); */">
                        对交易者</div>
                    <p style="
    font-weight: bold;
">
                        标准账户</p>
                    <div style="text-align: left;height: 130px;">
                        <ul class="terms" style="
    font-size: 12px;
">
                            <li>
                                点差: 从0.4点起</li>
                            <li>
                                商品: 多至34对货币对, 金属, CFD</li>
                            <li>
                                交易最小保证金: 基准货币的1个单位</li>
                        </ul>
                    </div>
                </div>
                <div class="account-types" style="
    background: url(http://www.roboforex.com/files/filemanager/image3/structure/trade-conditions/mt4/f8dc31ff1c.png);
    background-position-x: 102%;
    background-position-y: 119%;
    background-repeat: no-repeat;
">
                    <div style="font-size: 17px;margin: 0 5px 5px;padding-bottom: 4px;border-bottom: 1px solid #e3e3e3;color: #005799;/* text-shadow: 0 1px 3px rgba(0, 0, 0, 0.22); */">
                        对专家级交易者</div>
                    <p style="
    font-weight: bold;
">
                        ECN-账户</p>
                    <div style="text-align: left;height: 130px;">
                        <ul class="terms" style="
    font-size: 12px;
">
                            <li>
                                点差: 从0点起</li>
                            <li>
                                商品: 多至34对货币对, 金属, CFD</li>
                            <li>
                                交易最小保证金: 基准货币的3.33个单位</li>
                        </ul>
                    </div>
                </div>
            </div>
            <p style="text-align: center; margin-bottom: 30px;">
                <a class="results-btn rw-tip_holder" href="https://my.cn.roboforex.com/cs/register/"
                   style="text-decoration: none;color: #fff;" target="_blank"
                   title="">
                    <span>开户</span></a>
            </p>
            <p>
                交易条件细则可以在&quot;<a href="http://cn.roboforex.com/trade-conditions/account-types/"
                                  target="_blank">GoldMany交易账户类型和条件</a>&quot;页面找到.
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
                <a>MetaTrader 4 (MT4)</a>
            </li>
            <li >
                <a href="/trade-conditions/mobile-forex/"  >«移动外汇» 服务</a>


            </li>
        </ul>



        <ul id="r-icons">
            <li>
                <a href="https://my.cn.GoldMany.com/cs/register/" class="rw-tip_holder" id="fdi1">
                    开设<br />真实账户
                </a>
            </li>
            <li><a href="/trading-accounts/demo/" id="fdi2">开设<br />模拟账户</a></li>
            <li>
                <a href="https://my.cn.roboforex.com/cs/help/download-center/" class="modal-trigger"
                   data-terminal="mt4" id="fdi3r">下载<br />METATRADER4</a>
            </li>
            <li class="last">
                <a href="https://my.cn.roboforex.com/cs/help/download-center/" id="fdi4"
                   class="modal-trigger" data-terminal="mt4"
                   onclick="gaqPush('Downloads Multiterminal','EXE');
                   ga('send', 'event', 'Download','click','Multiterminal');" target="_blank">
                    下载MultiTerminal</a>
            </li>
        </ul>
        <div class="risk-warning">风险警示: 外汇交易意味着您是自愿承担失去资金的可能风险.</div>


    </div>



    @include('user.partials.footer')

</div>



<script src="/themes/rbforex/js/main/rbfx/linktracker.js?v=2"></script>


<script type="text/javascript" src="/themes/rbforex/js/rbfx/ajax.js?v=1"></script>
<script type="text/javascript" src="/themes/rbforex/js/referrals/rbfx/referral.js?v=1"></script>
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

<script src="/themes/rbforex/js/externallink/rbfx/notification.js"></script>
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