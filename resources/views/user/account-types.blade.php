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
    <meta name="description" content="通过账户类型，可以了解微小账户和标准账户有关最小交易，杠杆，保证金，最小存款，Swap-Free"/>
    <meta name="keywords" content="多种交易账户类型 微小账户 标准账户 最小交易 杠杆 保证金 Swap-Free 账户 掉期账户"/>
    <meta name="w1-verification" content="117844634768"/>


    <title>账户类型</title>
    <meta property="og:title" content="账户类型"/>
    <meta property="og:description" content="通过账户类型，可以了解微小账户和标准账户有关最小交易，杠杆，保证金，最小存款，Swap-Free"/>
    <meta property="og:url" content="/trade-conditions/account-types/"/>
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
        <a href="/">首页</a>/<a href="/trade-conditions/account-types/">条件</a>/账户类型
    </div>

    <link rel="stylesheet" href="/css/page.css" type="text/css"/>

    <style type="text/css">
        .table th, .table td {
            padding: 7px 5px 7px;
        }

        .acc-button {
            padding: 5px 3px;
            font-size: 13px;
            box-sizing: border-box;
            min-width: 120px;
            display: inline-block;
            margin: 2px;
            border-radius: 5px;
            text-decoration: none !important;
            text-align: center;
            background: #3c95c3;
            color: #fff !important;
            box-shadow: 0px 2px 7px -4px rgba(0, 0, 0, 0.74902);
        }

        .specs .ss-caption a.active {
            color: #fff;
            background: #536c8d;
            background: -moz-linear-gradient(top, #536c8d 0%, #193963 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #536c8d), color-stop(100%, #193963));
            background: -webkit-linear-gradient(top, #536c8d 0%, #193963 100%);
            background: -o-linear-gradient(top, #536c8d 0%, #193963 100%);
            background: -ms-linear-gradient(top, #536c8d 0%, #193963 100%);
            background: linear-gradient(to bottom, #536c8d 0%, #193963 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#536c8d', endColorstr='#193963', GradientType=0);
            position: relative;
            border-radius: 5px 5px 0 0;
            width: 186px;
            height: 50px;
        }

        .specs .ss-caption {
            padding: 5px 0px 0px;
            overflow: hidden;
            zoom: 1;
            background: #fff;
            border-bottom: 2px solid #193963;
        }

        .specs .ss-caption a.active .ss-switch-sub {
            background: none;
        }

        .specs .ss-caption a {
            font-size: 20px;
            color: #4A5256;
            text-decoration: none;
            float: left;
            margin: 0 5px 0 0;
            cursor: pointer;
            background-color: #e3e3e3;
            height: 50px;
            line-height: 50px;
            border-radius: 5px 5px 0 0;
            width: 181px;
            text-align: center;
        }

        .ss-switch-text {
            border-bottom: none;
        }

        .ss-switch-sub {
            float: none;
        }

        .modalDialog {
            position: 固定;
            font-family: Arial, Helvetica, sans-serif;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.8);
            z-index: 99999;
            opacity: 0;
            -webkit-transition: opacity 200ms ease-in;
            -moz-transition: opacity 200ms ease-in;
            transition: opacity 200ms ease-in;
            pointer-events: none;
        }

        .modalDialog:target {
            opacity: 1;
            pointer-events: auto;
        }

        .modalDialog > div {
            width: 648px;
            position: relative;
            margin: 10% auto;
            padding: 20px;
            border-radius: 5px;
            background: #fff;
        }

        .close {
            background: #606061;
            color: #FFFFFF !important;
            line-height: 25px;
            position: absolute;
            right: -12px;
            text-align: center;
            top: -10px;
            width: 25px;
            text-decoration: none !important;
            font-weight: bold;
            -webkit-border-radius: 12px;
            -moz-border-radius: 12px;
            border-radius: 12px;
            -moz-box-shadow: 1px 1px 3px #000;
            -webkit-box-shadow: 1px 1px 3px #000;
            box-shadow: 1px 1px 3px #000;
        }

        .close:hover {
            background: #00d9ff;
        }

        .button_holder {
            margin-top: -15px;
            background-color: #fff;
            -webkit-transition: all 200ms linear;
            -moz-transition: all 200ms linear;
            -o-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .flexible {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            align-items: center;
            margin-bottom: 15px;
            text-align: center;
            border: 1px solid #005799;
            padding: 5px;
        }</style>
    <style type="text/css">
        @import url("/css/font-awesome.min.css");</style>
    <h1>
        GoldMany 交易账户类型和条件</h1>
    <table class="soc-2 share">
        <tr>
            <td class="soc-3">
                <div class="fb-like" data-href="/trade-conditions/account-types/" data-send="false"
                     data-layout="button_count" data-width="82" data-show-faces="true"></div>
                <div id="fb-root"></div>
                <script>

                    (function (d, s, id) {
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
                   data-url="/trade-conditions/account-types/"></a>
                <script>!function (d, s, id) {
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
                <div class="g-plusone" data-size="medium" data-annotation="bubble"
                     data-width="300" data-href="/trade-conditions/account-types/"></div>

                <!-- Place this tag after the last +1 button tag. -->
                <script type="text/javascript">

                    (function () {
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
    <p style="text-align:justify;">
        GoldMany为客户提供最优订单成交条件,多种账户类型以及账户管理的便捷服务。
        <a href="/trade-conditions/metatrader4-mt4/" target="_blank">MT4</a>,
        <a href="/trade-conditions/metatrader5-mt5/" target="_blank">MT5</a>,
        <a href="/trade-conditions/ctrader/" target="_blank">cTrader</a>，
        <a href="http://cn.GoldMany.com/trade-conditions/webtrader/" target="_blank">WebTrader</a>
        网页交易平台，苹果与安卓移动平台等多类型交易终端,优惠的交易条件让您尽享在线交易的便利。</p>
    <div class="flexible" style="background-color: #FAFBFC;">
        <div style="width: 15%;">
            <img src="http://www.roboforex.com/files/filemanager/image3/structure/operations/bonuses-promotions/road-to-dakar-2016/dakar_pages.png"
                 style="
    width: 100px;
"/></div>
        <div style="text-align: justify;width: 83%;font-size: 15px;">
            当您在GoldMany开设新的账户时,您不仅可以享受优惠的交易条件,也有机会亲眼观看2017年达喀尔拉力赛!<br/>
            在<a href="/operations/bonuses-promotions/road-to-dakar-2017/" target="_blank">活动页面</a>阅读条款. 达喀尔之路正在等您!
        </div>
    </div>
    <h2>
        GoldMany致力为客户提供全方位优质服务。</h2>
    <div class="specs">
        <div class="ss-caption">
            <a class="ss-fix-cent active" href="#fix-cent" rel="ss-fix-cent" style="margin-top: 5px;">
                <span class="ss-switch-sub"><span class="ss-switch-text">标准账户</span> </span>
            </a>
            <a class="ss-fix-stan" href="#fix-stan" rel="ss-fix-stan" style="margin-top: 5px;">
                <span class="ss-switch-sub"> <span class="ss-switch-text">ECN 账户</span> </span>
            </a>
            {{--<a class="ss-pro-cent" href="#pro-cent" rel="ss-pro-cent" style="margin-top: 5px;"> --}}
                {{--<span class="ss-switch-sub"> <span class="ss-switch-text">美分账户</span> </span> --}}
            {{--</a> --}}
            {{--<a class="ss-pro-stan-ecn" href="#pro-stan-ecn" rel="ss-pro-stan-ecn" style="margin-top: 5px; "> --}}
                {{--<span class="ss-switch-sub" style="padding: 2px 9px;"> --}}
                    {{--<span class="ss-switch-text">Affiliate 账户</span> --}}
                {{--</span> --}}
            {{--</a> --}}
            <a class="ss-pro-stan" href="#pro-stan" rel="ss-pro-stan" style="margin-top: 5px;margin-right: 0px;">
                <span class="ss-switch-sub"> <span class="ss-switch-text">模拟账户</span> </span>
            </a>
        </div>
        <div class="ss-content active" id="ss-fix-cent">
            <table class="table">
                <tbody>
                <tr>
                    <th class="tc-tl" style="width: 226px;">
                        &nbsp;</th>
                    <th style="text-align:center; vertical-align: middle; font-size: 16px;">
                        Fix-Standard
                    </th>
                    <th style="text-align:center; vertical-align: middle; font-size: 16px;">
                        Pro-Standard
                    </th>
                </tr>
                <tr valign="middle">
                    <td>
                        <strong>交易平台和终端</strong></td>
                    <td style="text-align: center;  width: 139px;">
                        <a href="/trade-conditions/metatrader4-mt4/" style="text-decoration: none"
                           target="_blank" title="MetaTrader4 交易平台浏览.">MetaTrader4
                        </a>
                        <br/>
                        <a href="/trade-conditions/metatrader5-mt5/" style="text-decoration: none"
                           target="_blank" title="MetaTrader5 交易平台浏览.">MetaTrader5
                        </a><br/>
                        <br/>
                        <a href="/trade-conditions/webtrader/" style="text-decoration: none"
                           target="_blank" title="WebTrader交易终端概述.">WebTrader</a>
                        <br/>
                        <a href="/operations/mobile-forex/iphonetrader/" style="text-decoration: none"
                           target="_blank" title="iPhoneTrader mobile 交易平台浏览.">iPhoneTrader</a><br/>
                        <a href="/operations/mobile-forex/androidtrader/" style="text-decoration: none"
                           target="_blank" title="AndroidTrader mobile 交易平台浏览.">Android&nbsp;Trader</a></td>
                    <td style="text-align: center;  width: 139px;">
                        <a href="/trade-conditions/metatrader4-mt4/" style="text-decoration: none" target="_blank"
                           title="MetaTrader4 交易平台浏览.">MetaTrader4</a><br/>
                        <a href="/trade-conditions/metatrader5-mt5/" style="text-decoration: none" target="_blank"
                           title="MetaTrader5 交易平台浏览.">MetaTrader5</a><br/>
                        <a href="/trade-conditions/ctrader/" style="text-decoration: none" target="_blank"
                           title="cTrader 交易平台浏览.">cTrader</a><br/>
                        <br/>
                        <a href="/trade-conditions/webtrader/" style="text-decoration: none" target="_blank"
                           title="WebTrader交易终端概述.">WebTrader</a><br/>
                        <a href="/operations/mobile-forex/iphonetrader/" style="text-decoration: none" target="_blank"
                           title="iPhoneTrader mobile 交易平台浏览.">iPhoneTrader</a><br/>
                        <a href="/operations/mobile-forex/androidtrader/" style="text-decoration: none" target="_blank"
                           title="AndroidTrader mobile 交易平台浏览.">Android&nbsp;Trader</a><br/>
                        <a href="https://ct.roboforex.com" style="text-decoration: none" target="_blank"
                           title="cTrader Web 交易平台浏览.">cTrader&nbsp;Web</a></td>
                </tr>
                <tr>
                    <td>
                        <strong>开设账户</strong></td>
                    <td style="text-align: center;">
                        <a class="acc-button acc-button-link" href="javascript:void(0)" id="acc_link1"
                           onclick="showFaqText(1);">开设账户</a>
                        <div style="position: relative; ">
                            <div class="button_holder" id="acc_place1"
                                 style="position: absolute; width: 100%; height: 0px; overflow: hidden;">
                                <a class="acc-button rw-tip_holder"
                                   href="https://my.cn.roboforex.com/cs/register/fix-standard/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT4账户</a><a
                                        class="acc-button rw-tip_holder"
                                        href="https://my.cn.roboforex.com/cs/register/mt5/fix-stan/"
                                        style="text-decoration: none; color:#fff;" target="_blank">开设MT5账户</a><a
                                        class="acc-button rw-tip_holder"
                                        href="https://my.cn.roboforex.com/cs/register-copyfx/"
                                        style="text-decoration: none; background-color: #f0ad0c; border: 1px solid #f0ad0c;"
                                        target="_blank">开设CopyFX账户</a></div>
                        </div>
                    </td>
                    <td style="text-align: center;">
                        <a class="acc-button acc-button-link" href="javascript:void(0)" id="acc_link2"
                           onclick="showFaqText(2);">开设账户</a>
                        <div style="position: relative; ">
                            <div class="button_holder" id="acc_place2"
                                 style="position: absolute; width: 100%; height: 0px; overflow: hidden;">
                                <a class="acc-button rw-tip_holder"
                                   href="https://my.cn.roboforex.com/cs/register/pro-standard/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT4账户</a><a
                                        class="acc-button rw-tip_holder"
                                        href="https://my.cn.roboforex.com/cs/register/mt5/pro-stan/"
                                        style="text-decoration: none; color:#fff;" target="_blank">开设MT5账户</a><a
                                        class="acc-button rw-tip_holder"
                                        href="https://my.cn.roboforex.com/cs/register/ct/pro-stan/"
                                        style="text-decoration: none; color:#fff;">开设cTrader账户</a><a
                                        class="acc-button rw-tip_holder"
                                        href="https://my.cn.roboforex.com/cs/register-copyfx/"
                                        style="text-decoration: none; background-color: #f0ad0c; border: 1px solid #f0ad0c;"
                                        target="_blank">开设CopyFX账户</a></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>存款货币</strong></td>
                    <td style="text-align: center;">
                        USD, EUR, CNY, GOLD
                    </td>
                    <td style="text-align: center;">
                        USD, EUR, CNY, <span class="tooltip" title="МТ4 和 МТ5 平台.">GOLD</span></td>
                </tr>
                <tr>
                    <td>
                        <strong>最低存款</strong></td>
                    <td style="text-align: center;">
                        无
                    </td>
                    <td style="text-align: center;">
                        无
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong class="tooltip" title="此类型账户在杠杆最大时开设最低交易量的头寸所需的资金.">交易的最小保证金 (基础货币单位)</strong></td>
                    <td style="text-align: center;">
                        1
                    </td>
                    <td style="text-align: center;">
                        1
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>每百万美元交易手续费</strong></td>
                    <td style="text-align: center;">
                        无
                    </td>
                    <td style="text-align: center;">
                        无
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>执行类型</strong></td>
                    <td style="text-align: center;">
                        <span class="tooltip" title="即时执行 - 根据交易条件,订单执行按照客户要求指定的价格.">即时执行</span></td>
                    <td style="text-align: center;">
                        <span class="tooltip" title="市价执行 - 订单在当前的市场价格处理成交.">市场执行</span></td>
                </tr>
                <tr>
                    <td>
                        <strong>点差</strong></td>
                    <td style="text-align: center;">
                        <span class="tooltip" title="点差不会改变.">固定</span><br/>
                        2 点起
                    </td>
                    <td style="text-align: center;">
                        <span class="tooltip" title="点差变化取决于市场条件.">浮动</span><br/>
                        0.4 点起
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>报价</strong></td>
                    <td style="text-align: center;">
                        基本的<br/>
                        (小数点后4位)
                    </td>
                    <td style="text-align: center;">
                        扩展的<br/>
                        (小数点后5位)
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong class="tooltip"
                                title="最大容许杠杆值取决于您的账户类型以及交易平台类型. 根据我们的客户协议, 公司有权更改客户账户的杠杆.">最大杠杆</strong></td>
                    <td style="text-align: center;">
                        <span class="tooltip" title="MT4和MT5平台杠杆是1:500.">1:1000</span></td>
                    <td style="text-align: center;">
                        <span class="tooltip" title="MT4,MT5和cTrader平台杠杆是1:500.">1:1000</span></td>
                </tr>
                <tr>
                    <td>
                        <strong>最小交易量（手数）</strong></td>
                    <td style="text-align: center;">
                        0.01
                    </td>
                    <td style="text-align: center;">
                        0.01
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>最大交易量 (手数)</strong></td>
                    <td style="text-align: center;">
                        100
                    </td>
                    <td style="text-align: center;">
                        100
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong class="tooltip" title="只考虑打开头寸和挂单.">最大头寸数量</strong></td>
                    <td style="text-align: center;">
                        没有限制
                    </td>
                    <td style="text-align: center;">
                        没有限制
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>最小头寸增量</strong></td>
                    <td style="text-align: center;">
                        0.01
                    </td>
                    <td style="text-align: center;">
                        0.01
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>保证金补充通知</strong></td>
                    <td style="text-align: center;">
                        50%
                    </td>
                    <td style="text-align: center;">
                        50%
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong class="tooltip" title="当保证金水平达到预先指定的最小数量,账户的交易进入强制关闭过程.">强制平仓</strong></td>
                    <td style="text-align: center;">
                        20%
                    </td>
                    <td style="text-align: center;">
                        20%
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong><a href="/operations/rebate/" target="_blank">&quot;返点&quot; 服务</a></strong></td>
                    <td style="text-align: center;">
                        高达 15%点差的
                    </td>
                    <td style="text-align: center;">
                        高达 15%点差的
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong><a href="/operations/bonuses-promotions/tradable-bonus/"
                                   target="_blank">可交易的存款奖励</a></strong></td>
                    <td style="text-align: center;">
                        高达 <a href="/operations/bonuses-promotions/tradable-bonus/" target="_blank">50%</a></td>
                    <td style="text-align: center;">
                        高达 <a href="/operations/bonuses-promotions/tradable-bonus/" target="_blank">50%</a></td>
                </tr>
                <tr>
                    <td>
                        <strong><a href="/operations/forex-bonus-deposit/" target="_blank">经典的存款奖励</a></strong></td>
                    <td style="text-align: center;">
                        高达 <a href="/operations/bonuses-promotions/115-deposit-bonus/" target="_blank">115%</a></td>
                    <td style="text-align: center;">
                        高达 <a href="/operations/bonuses-promotions/115-deposit-bonus/" target="_blank">115%</a></td>
                </tr>
                <tr>
                    <td>
                        <strong><a href="/operations/bonuses-promotions/up-to-10-percents-on-account-balance/"
                                   target="_blank">最高至账户结余的10%</a></strong></td>
                    <td style="text-align: center;">
                        高达 <a href="/operations/bonuses-promotions/up-to-10-percents-on-account-balance/"
                              target="_blank">10%</a></td>
                    <td style="text-align: center;">
                        高达 <a href="/operations/bonuses-promotions/up-to-10-percents-on-account-balance/"
                              target="_blank">10%</a></td>
                </tr>
                <tr>
                    <td>
                        <strong><a href="/operations/bonuses-promotions/free-withdrawal/" target="_blank">无手续费出金</a>
                        </strong></td>
                    <td style="text-align: center;">
                        有
                    </td>
                    <td style="text-align: center;">
                        有
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong class="tooltip" title="要启用Swap-Free服务, 请联系我们的技术支持.">无隔夜利息账户</strong></td>
                    <td style="text-align: center;">
                        有
                    </td>
                    <td style="text-align: center;">
                        <span class="tooltip" title="Swap-Free 账户不可用于cTrader平台.">有</span></td>
                </tr>
                <tr>
                    <td>
                        <strong><a href="/operations/one-click-trading-service/" target="_blank">一键交易</a></strong></td>
                    <td style="text-align: center;">
                        有
                    </td>
                    <td style="text-align: center;">
                        有
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>交易工具</strong></td>
                    <td style="text-align: center;">
                        <a href="/trade-conditions/specifications/#fix-stan" target="_blank">31 种货币对, 贵金属</a></td>
                    <td style="text-align: center;">
                        <a href="/trade-conditions/specifications/#pro-stan" target="_blank">34 种货币对, 贵金属, CFD</a></td>
                </tr>
                <tr>
                    <td>
                        <strong><a href="/operations/fixed-zero-spread/" target="_blank">0点差工具</a></strong></td>
                    <td style="text-align: center;">
                        11 种货币对, 贵金属
                    </td>
                    <td style="text-align: center;">
                        <span class="tooltip" title="只对MT4 和 MT5账户.">11 种货币对, 贵金属</span></td>
                </tr>
                <tr>
                    <td>
                        <strong>账户历史被保存</strong></td>
                    <td style="text-align: center;">
                        <span class="tooltip" title="这个限制只对MT4账户有效.">1年</span></td>
                    <td style="text-align: center;">
                        <span class="tooltip" title="这个限制只对MT4账户有效.">1年</span></td>
                </tr>
                <tr>
                    <td>
                        <strong>开设账户</strong></td>
                    <td style="text-align: center;">
                        <a class="acc-button acc-button-link" href="javascript:void(0)" id="acc_link3"
                           onclick="showFaqText(3);">开设账户</a>
                        <div style="position: relative; ">
                            <div class="button_holder" id="acc_place3"
                                 style="position: absolute; width: 100%; height: 0px; overflow: hidden;">
                                <a class="acc-button rw-tip_holder"
                                   href="https://my.cn.roboforex.com/cs/register/fix-standard/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT4账户</a><a
                                        class="acc-button rw-tip_holder"
                                        href="https://my.cn.roboforex.com/cs/register/mt5/fix-stan/"
                                        style="text-decoration: none; color:#fff;" target="_blank">开设MT5账户</a><a
                                        class="acc-button rw-tip_holder"
                                        href="https://my.cn.roboforex.com/cs/register-copyfx/"
                                        style="text-decoration: none; background-color: #f0ad0c; border: 1px solid #f0ad0c;"
                                        target="_blank">开设CopyFX账户</a></div>
                        </div>
                    </td>
                    <td style="text-align: center;">
                        <a class="acc-button acc-button-link" href="javascript:void(0)" id="acc_link4"
                           onclick="showFaqText(4);">开设账户</a>
                        <div style="position: relative; ">
                            <div class="button_holder" id="acc_place4"
                                 style="position: absolute; width: 100%; height: 0px; overflow: hidden;">
                                <a class="acc-button rw-tip_holder"
                                   href="https://my.cn.roboforex.com/cs/register/pro-standard/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT4账户</a><a
                                        class="acc-button rw-tip_holder"
                                        href="https://my.cn.roboforex.com/cs/register/mt5/pro-stan/"
                                        style="text-decoration: none; color:#fff;" target="_blank">开设MT5账户</a><a
                                        class="acc-button rw-tip_holder"
                                        href="https://my.cn.roboforex.com/cs/register/ct/pro-stan/"
                                        style="text-decoration: none; color:#fff;">开设cTrader账户</a><a
                                        class="acc-button rw-tip_holder"
                                        href="https://my.cn.roboforex.com/cs/register-copyfx/"
                                        style="text-decoration: none; background-color: #f0ad0c; border: 1px solid ##f0ad0c;"
                                        target="_blank">开设CopyFX账户</a></div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="ss-content" id="ss-fix-stan">
            <table class="table">
                <tbody>
                <tr>
                    <th class="tc-tl" style="width: 226px;">
                        &nbsp;</th>
                    <th style="text-align:center; vertical-align: middle;  font-size: 16px;">
                        ECN-Pro NDD
                    </th>
                    <th class="tc-tr" style="text-align:center; vertical-align: middle;  font-size: 16px;">
                        ECN-FixSpread NDD
                    </th>
                </tr>
                <tr valign="middle">
                    <td>
                        <strong>交易平台和终端</strong></td>
                    <td style="text-align: center;  width: 240px;">
                        <a href="/trade-conditions/metatrader4-mt4/" style="text-decoration: none" target="_blank"
                           title="MetaTrader4 交易平台浏览.">MetaTrader4</a><br/>
                        <a href="/trade-conditions/metatrader5-mt5/" style="text-decoration: none" target="_blank"
                           title="MetaTrader5 交易平台浏览.">MetaTrader5</a><br/>
                        <a href="/trade-conditions/ctrader/" style="text-decoration: none" target="_blank"
                           title="cTrader 交易平台浏览.">cTrader</a><br/>
                        <br/>
                        <a href="/trade-conditions/webtrader/" style="text-decoration: none" target="_blank"
                           title="WebTrader交易终端概述.">WebTrader</a><br/>
                        <a href="/operations/mobile-forex/iphonetrader/" style="text-decoration: none" target="_blank"
                           title="iPhoneTrader mobile 交易平台浏览.">iPhoneTrader</a><br/>
                        <a href="/operations/mobile-forex/androidtrader/" style="text-decoration: none" target="_blank"
                           title="AndroidTrader mobile 交易平台浏览.">Android&nbsp;Trader</a><br/>
                        <a href="https://ct.roboforex.com" style="text-decoration: none" target="_blank"
                           title="cTrader Web 交易平台浏览.">cTrader&nbsp;Web</a></td>
                    <td style="text-align: center;  width: 209px;">
                        <a href="/trade-conditions/metatrader4-mt4/" style="text-decoration: none" target="_blank"
                           title="MetaTrader4 交易平台浏览.">MetaTrader4</a><br/>
                        <a href="/trade-conditions/metatrader5-mt5/" style="text-decoration: none" target="_blank"
                           title="MetaTrader5 交易平台浏览.">MetaTrader5</a><br/>
                        <br/>
                        <a href="/trade-conditions/webtrader/" style="text-decoration: none" target="_blank"
                           title="WebTrader交易终端概述.">WebTrader</a><br/>
                        <a href="/operations/mobile-forex/iphonetrader/" style="text-decoration: none" target="_blank"
                           title="iPhoneTrader mobile 交易平台浏览.">iPhoneTrader</a><br/>
                        <a href="/operations/mobile-forex/androidtrader/" style="text-decoration: none" target="_blank"
                           title="AndroidTrader mobile 交易平台浏览.">Android&nbsp;Trader</a></td>
                </tr>
                <tr>
                    <td>
                        <strong>开设账户</strong></td>
                    <td style="text-align: center;">
                        <a class="acc-button acc-button-link" href="javascript:void(0)" id="acc_link5"
                           onclick="showFaqText(5);">开设账户</a>
                        <div style="position: relative; ">
                            <div class="button_holder" id="acc_place5"
                                 style="position: absolute; width: 100%; height: 0px; overflow: hidden;">
                                <a class="acc-button rw-tip_holder"
                                   href="https://my.cn.roboforex.com/cs/register/ecn-pro/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT4账户</a>
                                <a class="acc-button rw-tip_holder"
                                   href="https://my.cn.roboforex.com/cs/register/mt5/ecn-pro/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT5账户</a>
                                <a class="acc-button rw-tip_holder" href="https://my.cn.roboforex.com/cs/register/ct/"
                                   style="text-decoration: none; color:#fff;">开设cTrader账户</a>
                                <a class="acc-button rw-tip_holder"
                                   href="https://my.cn.roboforex.com/cs/register-copyfx/"
                                   style="text-decoration: none; background-color: #f0ad0c;border: 1px solid #f0ad0c;"
                                   target="_blank">开设CopyFX账户</a></div>
                        </div>
                    </td>
                    <td style="text-align: center;">
                        <a class="acc-button acc-button-link" href="javascript:void(0)" id="acc_link6"
                           onclick="showFaqText(6);">开设账户</a>
                        <div style="position: relative; ">
                            <div class="button_holder" id="acc_place6"
                                 style="position: absolute; width: 100%; height: 0px; overflow: hidden;">
                                <a class="acc-button rw-tip_holder"
                                   href="https://my.cn.roboforex.com/cs/register/ecn-fix/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT4账户</a>
                                <a class="acc-button rw-tip_holder"
                                   href="https://my.cn.roboforex.com/cs/register/mt5/ecn-fix/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT5账户</a>
                                <a class="acc-button rw-tip_holder"
                                   href="https://my.cn.roboforex.com/cs/register-copyfx/"
                                   style="text-decoration: none; background-color: #f0ad0c;border: 1px solid #f0ad0c;"
                                   target="_blank">开设CopyFX账户</a></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>存款货币</strong></td>
                    <td style="text-align: center;">
                        USD, EUR, <span class="tooltip" title="МТ4, МТ5 和 сТrader 平台.">CNY</span>, <span class="tooltip"
                                                                                                         title="МТ4 和 МТ5 平台.">GOLD</span>
                    </td>
                    <td style="text-align: center;">
                        USD, EUR, CNY, GOLD
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>最低存款</strong></td>
                    <td style="text-align: center;">
                        无
                    </td>
                    <td style="text-align: center;">
                        无
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong class="tooltip" title="此类型账户在杠杆最大时开设最低交易量的头寸所需的资金.">交易的最小保证金(基础货币单位)</strong></td>
                    <td style="text-align: center;">
                        3.33
                    </td>
                    <td style="text-align: center;">
                        3.33
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>每百万美元交易手续费</strong></td>
                    <td style="text-align: center;">
                        <span class="tooltip" title="在ECN账户完成一个交易 (打开 / 关闭) 的佣金是双倍比率计算.">20 USD</span></td>
                    <td style="text-align: center;">
                        无
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>执行模式</strong></td>
                    <td class="last" style="text-align: center;">
                        <span class="tooltip" title="市价执行 - 订单在当前的市场价格处理成交.">市场执行</span></td>
                    <td style="text-align: center;">
                        <span class="tooltip" title="市价执行 - 订单在当前的市场价格处理成交.">市场执行</span></td>
                </tr>
                <tr>
                    <td>
                        <strong>点差</strong></td>
                    <td style="text-align: center;">
                        <span class="tooltip" title="点差变化取决于市场条件.">浮动</span><br/>
                        0 点起
                    </td>
                    <td style="text-align: center;">
                        <span class="tooltip" title="点差不会改变.">固定</span><br/>
                        1.6 点起
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>报价</strong></td>
                    <td style="text-align: center;">
                        扩展的<br/>
                        (小数点后5位)
                    </td>
                    <td style="text-align: center;">
                        扩展的<br/>
                        (小数点后5位)
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong class="tooltip"
                                title="最大容许杠杆值取决于您的账户类型以及交易平台类型. 根据我们的客户协议, 公司有权更改客户账户的杠杆.">最大杠杆</strong></td>
                    <td style="text-align: center;">
                        1:300
                    </td>
                    <td style="text-align: center;">
                        1:300
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>最小交易量（手数）</strong></td>
                    <td style="text-align: center;">
                        0.01
                    </td>
                    <td style="text-align: center;">
                        0.01
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>最大交易量 (手数)</strong></td>
                    <td style="text-align: center;">
                        50
                    </td>
                    <td style="text-align: center;">
                        50
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong class="tooltip" title="只考虑打开头寸和挂单.">最大头寸数量</strong></td>
                    <td style="text-align: center;">
                        没有限制
                    </td>
                    <td style="text-align: center;">
                        没有限制
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>最小头寸增量</strong></td>
                    <td style="text-align: center;">
                        0.01
                    </td>
                    <td style="text-align: center;">
                        0.01
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>保证金补充通知</strong></td>
                    <td style="text-align: center;">
                        60%
                    </td>
                    <td style="text-align: center;">
                        60%
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong class="tooltip" title="当保证金水平达到预先指定的最小数量,账户的交易进入强制关闭过程.">强制平仓</strong></td>
                    <td style="text-align: center;">
                        40%
                    </td>
                    <td style="text-align: center;">
                        40%
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong><a href="/operations/rebate/" target="_blank">&quot;返点&quot; 服务</a></strong></td>
                    <td style="text-align: center;">
                        高达 15%手续费的
                    </td>
                    <td style="text-align: center;">
                        高达 15%点差的
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong><a href="/operations/bonuses-promotions/tradable-bonus/"
                                   target="_blank">可交易的存款奖励</a></strong></td>
                    <td style="text-align: center;">
                        否
                    </td>
                    <td style="text-align: center;">
                        否
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong><a href="/operations/forex-bonus-deposit/" target="_blank">经典的存款奖励</a></strong></td>
                    <td style="text-align: center;">
                        否
                    </td>
                    <td style="text-align: center;">
                        否
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong><a href="/operations/bonuses-promotions/up-to-10-percents-on-account-balance/"
                                   target="_blank">最高至账户结余的10%</a></strong></td>
                    <td style="text-align: center;">
                        高达 <a href="/operations/bonuses-promotions/up-to-10-percents-on-account-balance/"
                              target="_blank">10%</a></td>
                    <td style="text-align: center;">
                        高达 <a href="/operations/bonuses-promotions/up-to-10-percents-on-account-balance/"
                              target="_blank">10%</a></td>
                </tr>
                <tr>
                    <td>
                        <strong><a href="/operations/bonuses-promotions/free-withdrawal/" target="_blank">无手续费出金</a>
                        </strong></td>
                    <td style="text-align: center;">
                        有
                    </td>
                    <td style="text-align: center;">
                        有
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>无隔夜利息账户</strong></td>
                    <td style="text-align: center;">
                        否
                    </td>
                    <td style="text-align: center;">
                        否
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong><a href="/operations/one-click-trading-service/" target="_blank">一键交易</a></strong></td>
                    <td style="text-align: center;">
                        有
                    </td>
                    <td style="text-align: center;">
                        有
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>交易工具</strong></td>
                    <td style="text-align: center;">
                        <a href="/trade-conditions/specifications/#pro-stan-ecn" target="_blank">34 种货币对, 贵金属, CFD</a>
                    </td>
                    <td style="text-align: center;">
                        <a href="/trade-conditions/specifications/#fix-stan-ecn" target="_blank">13 种货币对, 贵金属</a></td>
                </tr>
                <tr>
                    <td>
                        <strong><a href="/operations/fixed-zero-spread/" target="_blank">0点差工具</a></strong></td>
                    <td style="text-align: center;">
                        否
                    </td>
                    <td style="text-align: center;">
                        否
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>账户历史被保存</strong></td>
                    <td style="text-align: center;">
                        <span class="tooltip" title="这个限制只对MT4账户有效.">1年</span></td>
                    <td style="text-align: center;">
                        <span class="tooltip" title="这个限制只对MT4账户有效.">1年</span></td>
                </tr>
                <tr>
                    <td>
                        <strong>开设账户</strong></td>
                    <td style="text-align: center;">
                        <a class="acc-button acc-button-link" href="javascript:void(0)" id="acc_link7"
                           onclick="showFaqText(7);">开设账户</a>
                        <div style="position: relative; ">
                            <div class="button_holder" id="acc_place7"
                                 style="position: absolute; width: 100%; height: 0px; overflow: hidden;">
                                <a class="acc-button rw-tip_holder"
                                   href="https://my.cn.roboforex.com/cs/register/ecn-pro/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT4账户</a>
                                <a class="acc-button rw-tip_holder"
                                   href="https://my.cn.roboforex.com/cs/register/mt5/ecn-pro/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT5账户</a>
                                <a class="acc-button rw-tip_holder" href="https://my.cn.roboforex.com/cs/register/ct/"
                                   style="text-decoration: none; color:#fff;">开设cTrader账户</a>
                                <a class="acc-button rw-tip_holder"
                                   href="https://my.cn.roboforex.com/cs/register-copyfx/"
                                   style="text-decoration: none; background-color: #f0ad0c;border: 1px solid ##f0ad0c;"
                                   target="_blank">开设CopyFX账户</a></div>
                        </div>
                    </td>
                    <td style="text-align: center;">
                        <a class="acc-button acc-button-link" href="javascript:void(0)" id="acc_link8"
                           onclick="showFaqText(8);">开设账户</a>
                        <div style="position: relative; ">
                            <div class="button_holder" id="acc_place8"
                                 style="position: absolute; width: 100%; height: 0px; overflow: hidden;">
                                <a class="acc-button rw-tip_holder"
                                   href="https://my.cn.roboforex.com/cs/register/ecn-fix/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT4账户</a>
                                <a class="acc-button rw-tip_holder"
                                   href="https://my.cn.roboforex.com/cs/register/mt5/ecn-fix/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT5账户</a>
                                <a class="acc-button rw-tip_holder"
                                   href="https://my.cn.roboforex.com/cs/register-copyfx/"
                                   style="text-decoration: none; background-color: #f0ad0c;border: 1px solid #f0ad0c;"
                                   target="_blank">开设CopyFX账户</a></div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="ss-content" id="ss-pro-stan">
            <p style="margin:20px 0px; text-align: center; font-size: 14px;">
                模拟账户的交易条件和订单执行几乎与GoldMany真实账户一致.</p>
            <table class="table">
                <tbody>
                <tr>
                    <th class="tc-tl" style="width: 226px;">
                        &nbsp;</th>
                    <th style="text-align:center; vertical-align: middle;  font-size: 16px;">
                        Demo Fix
                    </th>
                    <th style="text-align:center; vertical-align: middle;  font-size: 16px;">
                        Demo Pro
                    </th>
                    <th style="text-align:center; vertical-align: middle;  font-size: 16px;">
                        Demo ECN-Pro NDD
                    </th>
                    <th class="tc-tr" style="text-align:center; vertical-align: middle;  font-size: 16px;">
                        Demo ECN-FixSpread NDD
                    </th>
                </tr>
                <tr valign="middle">
                    <td>
                        <strong>交易平台和终端</strong></td>
                    <td style="text-align: center;">
                        <a href="/trade-conditions/metatrader4-mt4/" style="text-decoration: none" target="_blank"
                           title="MetaTrader4 交易平台浏览.">MetaTrader4</a><br/>
                        <a href="/trade-conditions/metatrader5-mt5/" style="text-decoration: none" target="_blank"
                           title="MetaTrader5 交易平台浏览.">MetaTrader5</a><br/>
                        <br/>
                        <a href="/trade-conditions/webtrader/" style="text-decoration: none" target="_blank"
                           title="WebTrader交易终端概述.">WebTrader</a><br/>
                        <a href="/operations/mobile-forex/iphonetrader/" style="text-decoration: none" target="_blank"
                           title="iPhoneTrader mobile 交易平台浏览.">iPhoneTrader</a><br/>
                        <a href="/operations/mobile-forex/androidtrader/" style="text-decoration: none" target="_blank"
                           title="AndroidTrader mobile 交易平台浏览.">Android&nbsp;Trader</a></td>
                    <td style="text-align: center;">
                        <a href="/trade-conditions/metatrader4-mt4/" style="text-decoration: none" target="_blank"
                           title="MetaTrader4 交易平台浏览.">MetaTrader4</a><br/>
                        <a href="/trade-conditions/metatrader5-mt5/" style="text-decoration: none" target="_blank"
                           title="MetaTrader5 交易平台浏览.">MetaTrader5</a><br/>
                        <a href="/trade-conditions/ctrader/" style="text-decoration: none" target="_blank"
                           title="cTrader 交易平台浏览.">cTrader</a><br/>
                        <br/>
                        <a href="/trade-conditions/webtrader/" style="text-decoration: none" target="_blank"
                           title="WebTrader交易终端概述.">WebTrader</a><br/>
                        <a href="/operations/mobile-forex/iphonetrader/" style="text-decoration: none" target="_blank"
                           title="iPhoneTrader mobile 交易平台浏览.">iPhoneTrader</a><br/>
                        <a href="/operations/mobile-forex/androidtrader/" style="text-decoration: none" target="_blank"
                           title="AndroidTrader mobile 交易平台浏览.">Android&nbsp;Trader</a></td>
                    <td style="text-align: center;">
                        <a href="/trade-conditions/metatrader4-mt4/" style="text-decoration: none" target="_blank"
                           title="MetaTrader4 交易平台浏览.">MetaTrader4</a><br/>
                        <a href="/trade-conditions/metatrader5-mt5/" style="text-decoration: none" target="_blank"
                           title="MetaTrader5 交易平台浏览.">MetaTrader5</a><br/>
                        <a href="/trade-conditions/ctrader/" style="text-decoration: none" target="_blank"
                           title="cTrader 交易平台浏览.">cTrader</a><br/>
                        <br/>
                        <a href="/trade-conditions/webtrader/" style="text-decoration: none" target="_blank"
                           title="WebTrader交易终端概述.">WebTrader</a><br/>
                        <a href="/operations/mobile-forex/iphonetrader/" style="text-decoration: none" target="_blank"
                           title="iPhoneTrader mobile 交易平台浏览.">iPhoneTrader</a><br/>
                        <a href="/operations/mobile-forex/androidtrader/" style="text-decoration: none" target="_blank"
                           title="AndroidTrader mobile 交易平台浏览.">Android&nbsp;Trader</a><br/>
                        <a href="https://ct.roboforex.com" style="text-decoration: none" target="_blank"
                           title="cTrader Web 交易平台浏览.">cTrader&nbsp;Web</a></td>
                    <td style="text-align: center;">
                        <a href="/trade-conditions/metatrader4-mt4/" style="text-decoration: none" target="_blank"
                           title="MetaTrader4 交易平台浏览.">MetaTrader4</a><br/>
                        <a href="/trade-conditions/metatrader5-mt5/" style="text-decoration: none" target="_blank"
                           title="MetaTrader5 交易平台浏览.">MetaTrader5</a><br/>
                        <br/>
                        <a href="/trade-conditions/webtrader/" style="text-decoration: none" target="_blank"
                           title="WebTrader交易终端概述.">WebTrader</a><br/>
                        <a href="/operations/mobile-forex/iphonetrader/" style="text-decoration: none" target="_blank"
                           title="iPhoneTrader mobile 交易平台浏览.">iPhoneTrader</a><br/>
                        <a href="/operations/mobile-forex/androidtrader/" style="text-decoration: none" target="_blank"
                           title="AndroidTrader mobile 交易平台浏览.">Android&nbsp;Trader</a></td>
                </tr>
                <tr>
                    <td>
                        <strong>开设账户</strong></td>
                    <td style="text-align: center;">
                        <a class="acc-button acc-button-link" href="javascript:void(0)" id="acc_link13"
                           onclick="showFaqText(13);">开设账户</a>
                        <div style="position: relative; ">
                            <div class="button_holder" id="acc_place13"
                                 style="position: absolute; width: 100%; height: 0px; overflow: hidden;">
                                <a class="acc-button" href="https://my.cn.roboforex.com/cs/register-demo/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT4账户</a>
                                <a class="acc-button" href="https://my.cn.roboforex.com/cs/register-demo/mt5/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT5账户</a></div>
                        </div>
                    </td>
                    <td style="text-align: center;">
                        <a class="acc-button acc-button-link" href="javascript:void(0)" id="acc_link14"
                           onclick="showFaqText(14);">开设账户</a>
                        <div style="position: relative; ">
                            <div class="button_holder" id="acc_place14"
                                 style="position: absolute; width: 100%; height: 0px; overflow: hidden;">
                                <a class="acc-button" href="https://my.cn.roboforex.com/cs/register-demo/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT4账户</a>
                                <a class="acc-button" href="https://my.cn.roboforex.com/cs/register-demo/mt5/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT5账户</a></div>
                        </div>
                    </td>
                    <td style="text-align: center;">
                        <a class="acc-button acc-button-link" href="javascript:void(0)" id="acc_link15"
                           onclick="showFaqText(15);">开设账户</a>
                        <div style="position: relative; ">
                            <div class="button_holder" id="acc_place15"
                                 style="position: absolute; width: 100%; height: 0px; overflow: hidden;">
                                <a class="acc-button" href="https://my.cn.roboforex.com/cs/register-demo/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT4账户</a>
                                <a class="acc-button" href="https://my.cn.roboforex.com/cs/register-demo/mt5/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT5账户</a>
                                <a class="acc-button" href="https://my.cn.roboforex.com/cs/register-demo/ct/"
                                   style="text-decoration: none; color:#fff;">开设cTrader账户</a></div>
                        </div>
                    </td>
                    <td style="text-align: center;">
                        <a class="acc-button acc-button-link" href="javascript:void(0)" id="acc_link16"
                           onclick="showFaqText(16);">开设账户</a>
                        <div style="position: relative; ">
                            <div class="button_holder" id="acc_place16"
                                 style="position: absolute; width: 100%; height: 0px; overflow: hidden;">
                                <a class="acc-button" href="https://my.cn.roboforex.com/cs/register-demo/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT4账户</a>
                                <a class="acc-button" href="https://my.cn.roboforex.com/cs/register-demo/mt5/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT5账户</a></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>存款货币</strong></td>
                    <td style="text-align: center;">
                        USD
                    </td>
                    <td style="text-align: center;">
                        USD
                    </td>
                    <td style="text-align: center;">
                        USD
                    </td>
                    <td style="text-align: center;">
                        USD
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong class="tooltip" title="此类型账户在杠杆最大时开设最低交易量的头寸所需的资金.">交易的最小保证金(基础货币单位)</strong></td>
                    <td style="text-align: center;">
                        1
                    </td>
                    <td style="text-align: center;">
                        1
                    </td>
                    <td style="text-align: center;">
                        3.33
                    </td>
                    <td style="text-align: center;">
                        3.33
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>每百万美元交易手续费</strong></td>
                    <td style="text-align: center;">
                        无
                    </td>
                    <td style="text-align: center;">
                        无
                    </td>
                    <td style="text-align: center;">
                        <span class="tooltip" title="在ECN账户完成一个交易 (打开 / 关闭) 的佣金是双倍比率计算.">20 USD</span></td>
                    <td style="text-align: center;">
                        否
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>执行模式</strong></td>
                    <td style="text-align: center;">
                        <span class="tooltip" title="即时执行 - 根据交易条件,订单执行按照客户要求指定的价格.">即时执行</span></td>
                    <td style="text-align: center;">
                        <span class="tooltip" title="市价执行 - 订单在当前的市场价格处理成交.">市场执行</span></td>
                    <td style="text-align: center;">
                        <span class="tooltip" title="市价执行 - 订单在当前的市场价格处理成交.">市场执行</span></td>
                    <td class="last" style="text-align: center;">
                        <span class="tooltip" title="市价执行 - 订单在当前的市场价格处理成交.">市场执行</span></td>
                </tr>
                <tr>
                    <td>
                        <strong>点差</strong></td>
                    <td style="text-align: center;">
                        <span class="tooltip" title="点差不会改变.">固定</span><br/>
                        2 点起
                    </td>
                    <td style="text-align: center;">
                        <span class="tooltip" title="点差变化取决于市场条件.">浮动</span><br/>
                        0.4 点起
                    </td>
                    <td style="text-align: center;">
                        <span class="tooltip" title="点差变化取决于市场条件.">浮动</span><br/>
                        0 点起
                    </td>
                    <td style="text-align: center;">
                        <span class="tooltip" title="点差不会改变.">固定</span><br/>
                        1.6 点起
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>报价</strong></td>
                    <td style="text-align: center;">
                        基本的<br/>
                        (小数点后4位)
                    </td>
                    <td style="text-align: center;">
                        扩展的<br/>
                        (小数点后5位)
                    </td>
                    <td style="text-align: center;">
                        扩展的<br/>
                        (小数点后5位)
                    </td>
                    <td style="text-align: center;">
                        扩展的<br/>
                        (小数点后5位)
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong class="tooltip"
                                title="最大容许杠杆值取决于您的账户类型以及交易平台类型. 根据我们的客户协议, 公司有权更改客户账户的杠杆.">最大杠杆</strong></td>
                    <td style="text-align: center;">
                        <span class="tooltip" title="MT4和MT5平台杠杆是1:500.">1:1000</span></td>
                    <td style="text-align: center;">
                        <span class="tooltip" title="MT4和MT5平台杠杆是1:500.">1:1000</span></td>
                    <td style="text-align: center;">
                        1:300
                    </td>
                    <td style="text-align: center;">
                        1:300
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>最小交易量（手数）</strong></td>
                    <td style="text-align: center;">
                        0.01
                    </td>
                    <td style="text-align: center;">
                        0.01
                    </td>
                    <td style="text-align: center;">
                        0.01
                    </td>
                    <td style="text-align: center;">
                        0.01
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>最大交易量 (手数)</strong></td>
                    <td style="text-align: center;">
                        100
                    </td>
                    <td style="text-align: center;">
                        100
                    </td>
                    <td style="text-align: center;">
                        50
                    </td>
                    <td style="text-align: center;">
                        50
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong class="tooltip" title="只考虑打开头寸和挂单.">最大头寸数量</strong></td>
                    <td style="text-align: center;">
                        200
                    </td>
                    <td style="text-align: center;">
                        200
                    </td>
                    <td style="text-align: center;">
                        200
                    </td>
                    <td style="text-align: center;">
                        200
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>最小头寸增量</strong></td>
                    <td style="text-align: center;">
                        0.01
                    </td>
                    <td style="text-align: center;">
                        0.01
                    </td>
                    <td style="text-align: center;">
                        0.01
                    </td>
                    <td style="text-align: center;">
                        0.01
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>保证金补充通知</strong></td>
                    <td style="text-align: center;">
                        50%
                    </td>
                    <td style="text-align: center;">
                        50%
                    </td>
                    <td style="text-align: center;">
                        60%
                    </td>
                    <td style="text-align: center;">
                        60%
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong class="tooltip" title="当保证金水平达到预先指定的最小数量,账户的交易进入强制关闭过程.">强制平仓</strong></td>
                    <td style="text-align: center;">
                        20%
                    </td>
                    <td style="text-align: center;">
                        20%
                    </td>
                    <td style="text-align: center;">
                        40%
                    </td>
                    <td style="text-align: center;">
                        40%
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong><a href="/operations/rebate/" target="_blank">&quot;返点&quot; 服务</a></strong></td>
                    <td style="text-align: center;">
                        高达 15%点差的
                    </td>
                    <td style="text-align: center;">
                        高达 15%点差的
                    </td>
                    <td style="text-align: center;">
                        高达 15%手续费的
                    </td>
                    <td class="last" style="text-align: center;">
                        高达 15%点差的
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong><a href="/operations/bonuses-promotions/tradable-bonus/"
                                   target="_blank">可交易的存款奖励</a></strong></td>
                    <td style="text-align: center;">
                        否
                    </td>
                    <td style="text-align: center;">
                        否
                    </td>
                    <td style="text-align: center;">
                        否
                    </td>
                    <td style="text-align: center;">
                        否
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong><a href="/operations/forex-bonus-deposit/" target="_blank">经典的存款奖励</a></strong></td>
                    <td style="text-align: center;">
                        否
                    </td>
                    <td style="text-align: center;">
                        否
                    </td>
                    <td style="text-align: center;">
                        否
                    </td>
                    <td style="text-align: center;">
                        否
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong><a href="/operations/bonuses-promotions/up-to-10-percents-on-account-balance/"
                                   target="_blank">最高至账户结余的10%</a></strong></td>
                    <td style="text-align: center;">
                        否
                    </td>
                    <td style="text-align: center;">
                        否
                    </td>
                    <td style="text-align: center;">
                        否
                    </td>
                    <td style="text-align: center;">
                        否
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>无隔夜利息账户</strong></td>
                    <td style="text-align: center;">
                        否
                    </td>
                    <td style="text-align: center;">
                        否
                    </td>
                    <td style="text-align: center;">
                        否
                    </td>
                    <td style="text-align: center;">
                        否
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong><a href="/operations/one-click-trading-service/" target="_blank">一键交易</a></strong></td>
                    <td style="text-align: center;">
                        有
                    </td>
                    <td style="text-align: center;">
                        有
                    </td>
                    <td style="text-align: center;">
                        有
                    </td>
                    <td style="text-align: center;">
                        有
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>交易工具</strong></td>
                    <td style="text-align: center;">
                        <a href="/trade-conditions/specifications/#fix-stan" target="_blank">31 种货币对, 贵金属</a></td>
                    <td style="text-align: center;">
                        <a href="/trade-conditions/specifications/#pro-stan" target="_blank">34 种货币对, 贵金属</a></td>
                    <td style="text-align: center;">
                        <a href="/trade-conditions/specifications/#pro-stan-ecn" target="_blank">34 种货币对, 贵金属, CFD</a>
                    </td>
                    <td style="text-align: center;">
                        <a href="/trade-conditions/specifications/#fix-stan-ecn" target="_blank">13 种货币对, 贵金属</a></td>
                </tr>
                <tr>
                    <td>
                        <strong><a href="/operations/fixed-zero-spread/" target="_blank">0点差工具</a></strong></td>
                    <td style="text-align: center;">
                        否
                    </td>
                    <td style="text-align: center;">
                        否
                    </td>
                    <td style="text-align: center;">
                        否
                    </td>
                    <td style="text-align: center;">
                        否
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>账户历史被保存</strong></td>
                    <td style="text-align: center;">
                        1个月
                    </td>
                    <td style="text-align: center;">
                        1个月
                    </td>
                    <td style="text-align: center;">
                        1个月
                    </td>
                    <td style="text-align: center;">
                        1个月
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>开设账户</strong></td>
                    <td style="text-align: center;">
                        <a class="acc-button acc-button-link" href="javascript:void(0)" id="acc_link17"
                           onclick="showFaqText(17);">开设账户</a>
                        <div style="position: relative; ">
                            <div class="button_holder" id="acc_place17"
                                 style="position: absolute; width: 100%; height: 0px; overflow: hidden;">
                                <a class="acc-button" href="https://my.cn.roboforex.com/cs/register-demo/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT4账户</a>
                                <a class="acc-button" href="https://my.cn.roboforex.com/cs/register-demo/mt5/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT5账户</a></div>
                        </div>
                    </td>
                    <td style="text-align: center;">
                        <a class="acc-button acc-button-link" href="javascript:void(0)" id="acc_link18"
                           onclick="showFaqText(18);">开设账户</a>
                        <div style="position: relative; ">
                            <div class="button_holder" id="acc_place18"
                                 style="position: absolute; width: 100%; height: 0px; overflow: hidden;">
                                <a class="acc-button" href="https://my.cn.roboforex.com/cs/register-demo/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT4账户</a>
                                <a class="acc-button" href="https://my.cn.roboforex.com/cs/register-demo/mt5/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT5账户</a></div>
                        </div>
                    </td>
                    <td style="text-align: center;">
                        <a class="acc-button acc-button-link" href="javascript:void(0)" id="acc_link19"
                           onclick="showFaqText(19);">开设账户</a>
                        <div style="position: relative; ">
                            <div class="button_holder" id="acc_place19"
                                 style="position: absolute; width: 100%; height: 0px; overflow: hidden;">
                                <a class="acc-button" href="https://my.cn.roboforex.com/cs/register-demo/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT4账户</a>
                                <a class="acc-button" href="https://my.cn.roboforex.com/cs/register-demo/mt5/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT5账户</a>
                                <a class="acc-button" href="https://my.cn.roboforex.com/cs/register-demo/ct/"
                                   style="text-decoration: none; color:#fff;">开设cTrader账户</a></div>
                        </div>
                    </td>
                    <td style="text-align: center;">
                        <a class="acc-button acc-button-link" href="javascript:void(0)" id="acc_link20"
                           onclick="showFaqText(20);">开设账户</a>
                        <div style="position: relative; ">
                            <div class="button_holder" id="acc_place20"
                                 style="position: absolute; width: 100%; height: 0px; overflow: hidden;">
                                <a class="acc-button" href="https://my.cn.roboforex.com/cs/register-demo/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT4账户</a>
                                <a class="acc-button" href="https://my.cn.roboforex.com/cs/register-demo/mt5/"
                                   style="text-decoration: none; color:#fff;" target="_blank">开设MT5账户</a></div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <p>
        每个账户类型的更多信息可以在 <a href="/trading-accounts/standard/">开设外汇账户</a> 部分查看.</p>
    <div id="cond-time">
        <strong>交易时间</strong>: 每天24小时,从星期一上午12:00:01 (服务器时间) 到星期五下午 11:58:59 (服务器时间).<br/>
        <div>
            <strong>注意</strong>: 欧洲东部时间 (EET) 标准 = GMT+2 (夏令时 = GMT+3).
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            var hash = window.location.hash.substring(1);

            //alert('.ss-'+hash);
            $('.ss-caption a.ss-' + hash).click(function (e) {
            });


            $('.ss-caption a').click(function (e) {
                var obj = $(this);

                $('.ss-caption a.active').removeClass('active');
                obj.addClass('active');

                $('.ss-content').removeClass('active');
                $('#' + obj.attr('rel')).addClass('active');
                //console.log(obj.attr('rel'));
                //console.log('.ss-content2.' + obj.attr('rel'), $('.ss-content2.' + obj.attr('rel')+':first').length);

                $('.ss-content2').removeClass('active');
                var active_tab = $('.ss-caption2 .' + obj.attr('rel') + '.active').attr('rel');
                if (!active_tab) active_tab = $('.ss-caption2 .' + obj.attr('rel') + ':first').attr('rel');
                //console.log('.ss-caption2 .' + obj.attr('rel') + '.active ', active_tab);
                $('#' + active_tab).addClass('active');

                //var id = obj.parents('.ss-content').attr('id');

                e.preventDefault();
            });

            $('.ss-caption a.ss-' + hash).click();


            $('.ss-caption2 a').click(function (e) {
                var obj = $(this);

                $('a.active', obj.parents('.specs2')).removeClass('active');
                'ss-' + obj.addClass('active');

                $('.ss-content2').removeClass('active');
                $('#' + obj.attr('rel')).addClass('active');

                e.preventDefault();
            });
        });

        function showFaqText(id) {
            var show = $('#acc_place' + id).css('height') == '0px' ? true : false;
            //$('.button_holder').hide();

            if (show) {
                $('#acc_place' + id).css('height', 'auto');
                $('#acc_link' + id).hide();
            } else {
                $('#acc_place' + id).css('height', '0px');
                $('#acc_link' + id).addClass('acc-button').html('Открыть счёт');
            }
        }
        ;

        jQuery(function ($) {
            $(document).mouseup(function (e) {
                var div = $(".button_holder");
                if (!div.is(e.target)
                        && div.has(e.target).length === 0) {
                    div.css('height', '0px');
                    $('.acc-button-link').show();
                }
            });
        });

        function showPlatform(id) {
            var show = $('#platform_holder' + id).css('display') == 'none' ? true : false;
            //$('.button_holder').hide();

            if (show) {
                $('#platform_holder' + id).show();
                $('#platform_link' + id).hide();
            } else {
                $('#platform_holder' + id).hide();
                $('#platform_link' + id).show();
            }
        }
        ;
    </script>


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