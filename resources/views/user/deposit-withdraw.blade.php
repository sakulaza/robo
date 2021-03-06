<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js ie8 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="w1-verification" content="117844634768"/>
    <link rel="canonical" href="/operations/"/>


    <title>存款 / 取款</title>
    <meta property="og:title" content="存款 / 取款"/>
    <meta property="og:description" content=""/>
    <meta property="og:url" content="/operations/deposit-withdraw/"/>
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
        <a href="/">首页</a>/<a href="/operations/">交易服务</a>/存款 / 取款
    </div>

    <link rel="stylesheet" href="/themes/rbforex/css/page.css" type="text/css"/>

    <style type="text/css">
        .terminals_head {
            border: 1px solid #e3e3e3;
            width: 930px;
            height: 260px;
            margin-bottom: 30px;
            padding: 0;
            position: relative;
        }

        .terminals_head-inner {
            width: 350px;
            height: 260px;
            background: rgba(255, 255, 255, 0.85);
            padding: 20px;
        }

        .terminals_head-title {
            font-size: 21px;
            margin-top: 0;
            margin-bottom: 30px;
            color: #317CA3;
        }

        .terminals_head .terminals_banner {
            display: block;
            position: absolute;
            right: 0;
            box-shadow: -5px 3px 18px -10px rgba(0, 0, 0, 0.74902);
            z-index: 9;
            width: 670px;
            height: 270px;
            border: 1px solid #e3e3e3;
            border-radius: 5px;
            margin-top: -5px;
        }

        .terminals_head .link-holder {
            position: absolute;
            height: 100%;
            width: 260px;
            background: rgba(250, 251, 252, 1);
            top: 0;
            margin-bottom: -20px;
            left: 0;
            box-sizing: border-box;
            padding: 0 5px;
        }

        .terminals_head .link-holder .terminal-link {
            width: 100%;
            height: 14.3%;
            padding: 10px;
            box-sizing: border-box;
            overflow: hidden;
            text-align: left;
            text-transform: uppercase;
            font-size: 13px;
            line-height: 21px;
            border-bottom: 1px solid #E3E3E3;
            -webkit-transition: all 200ms linear;
            -moz-transition: all 200ms linear;
            -o-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .terminals_head .link-holder .terminal-link:hover {
            padding-left: 20px;
        }

        .terminals_head .link-holder .terminal-link img {
            height: 15px;
            float: left;
            display: block;
            margin-top: 2px;
            margin-right: 10px;
        }

        .terminals_head .link-holder .terminal-link a {
            border-bottom: 1px dotted #317CA3;
        }

        .terms {
            font-size: 14px;
            /*font-weight: bold;*/
        }

        .terms > li {
            margin-bottom: 13px;
        }

        .container {
            margin-top: 80px;
            width: 261px;
            -webkit-transition: all 200ms linear;
            -moz-transition: all 200ms linear;
            -o-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        ul.tabs {
            list-style: none;
            height: 32px;
            padding: 0;
            float: left;
            display: block;
        }

        ul.tabs li {
            border-bottom: 1px solid #e3e3e3;
            border-left: 1px solid #e3e3e3;
            margin: 0;
            padding: 0 13px;
            cursor: pointer;
            height: 32px;
            line-height: 31px;
            background-color: #fff;
            color: #344964;
            width: 235px;
            overflow: hidden;
            position: relative;
            font-size: 13px;
            -webkit-transition: all 100ms linear;
            -moz-transition: all 100ms linear;
            -o-transition: all 100ms linear;
            transition: all 100ms linear;
        }

        ul.tabs li.active {
            background-color: #344964;
            color: #fff;
            display: block;
        }

        ul.tabs li.first {
            border-top: 1px solid #e3e3e3;
            border-radius: 5px 0 0 0;
        }

        ul.tabs li.last {
            border-radius: 0 0 0 5px;
        }

        ul.tabs li:hover {
            background-color: #e3e3e3;
            color: #344964;
        }

        .tab_container {
            position: relative;
            border: 1px solid #e3e3e3;
            box-shadow: -3px -3px 18px -10px rgba(0, 0, 0, 0.74902);
            background: #FAFBFC;
            width: 648px;
            margin-left: 261px;
            margin-bottom: 20px;
            margin-top: -40px;
            padding: 10px;
            min-height: 300px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -o-border-radius: 5px;
            border-radius: 5px;
        }

        .tab_content {
            padding: 10px;
            display: none;
            text-align: justify;
            background: #FAFBFC;

        }

        .tab_content ul.payment-grid {
            padding: 0;
        }

        .tab_content ul.payment-grid li.payment-item {
            display: inline-block;
            border: 1px solid #e3e3e3;
            vertical-align: top;
            text-align: center;
            width: 270px;
            padding: 8px;
            margin: 11px;
            background: #fff;
            height: 345px;
            position: relative;
            overflow: hidden;
            -webkit-box-shadow: 0px 12px 12px -12px rgba(0, 0, 0, 0.74902);
            -moz-box-shadow: 0px 12px 12px -12px rgba(0, 0, 0, 0.74902);
            -ms-box-shadow: 0px 12px 12px -12px rgba(0, 0, 0, 0.74902);
            -o-box-shadow: 0px 12px 12px -12px rgba(0, 0, 0, 0.74902);
            box-shadow: 0px 12px 12px -12px rgba(0, 0, 0, 0.74902);

        }

        .tab_content ul.payment-grid li.payment-item .more-link_holder {
            margin-top: 5px;
            margin-bottom: 0;
        }

        .tab_content ul.payment-grid > li.payment-item {
            margin-bottom: 20px;
            list-style-type: none;
            font-size: 12px;

        }

        .tab_content ul.payment-grid > li.payment-item img {
            width: 200px;
        }

        .tab_content ul.payment-grid > li.payment-item .bonus-logo-holder {
            position: absolute;
            height: 120px;
            width: 120px;
            background: rgba(227, 227, 227, 0.42);
            border-radius: 50%;
            top: 0;
            left: 0;
            margin-left: -60px;
            margin-top: -60px;
        }

        .tab_content ul.payment-grid > li.payment-item .bonus-logo {
            position: absolute;
            left: 10px;
            top: 11px;
            width: 27px;
        }

        .tab_content ul.payment-grid ul.item-title {
            padding-left: 20px;
            text-align: left;
            height: 80px;
        }

        /* list view */
        .tab_content ul.payment-list {
            padding: 0;
        }

        .tab_content ul.payment-list li.payment-item {
            display: block;
            border: 1px solid #e3e3e3;
            vertical-align: top;
            text-align: center;
            width: 587px;
            padding: 8px;
            margin: 11px;
            background: #fff;
            height: 160px;
            position: relative;
            overflow: hidden;
            -webkit-box-shadow: 0px 12px 12px -12px rgba(0, 0, 0, 0.74902);
            -moz-box-shadow: 0px 12px 12px -12px rgba(0, 0, 0, 0.74902);
            -ms-box-shadow: 0px 12px 12px -12px rgba(0, 0, 0, 0.74902);
            -o-box-shadow: 0px 12px 12px -12px rgba(0, 0, 0, 0.74902);
            box-shadow: 0px 12px 12px -12px rgba(0, 0, 0, 0.74902);
        }

        .tab_content ul.payment-list li.payment-item:hover, .tab_content ul.payment-grid li.payment-item:hover {
            -webkit-box-shadow: 0px 10px 20px -9px rgba(0, 0, 0, 0.74902);
            -moz-box-shadow: 0px 10px 20px -9px rgba(0, 0, 0, 0.74902);
            -ms-box-shadow: 0px 10px 20px -9px rgba(0, 0, 0, 0.74902);
            -o-box-shadow: 0px 10px 20px -9px rgba(0, 0, 0, 0.74902);
            box-shadow: 0px 10px 20px -9px rgba(0, 0, 0, 0.74902);
        }

        .tab_content ul.payment-list li.payment-item .more-link_holder {
            position: absolute;
            bottom: 0px;
            text-align: center;
            width: 100%;
        }

        .tab_content ul.payment-list > li.payment-item {
            margin-bottom: 20px;
            list-style-type: none;
            font-size: 12px;

        }

        .tab_content ul.payment-list > li.payment-item .bonus-logo-holder {
            position: absolute;
            height: 120px;
            width: 120px;
            background: rgba(227, 227, 227, 0.42);
            border-radius: 50%;
            top: 0;
            right: 0;
            margin-right: -60px;
            margin-top: -60px;
        }

        .tab_content ul.payment-list > li.payment-item .bonus-logo {
            position: absolute;
            right: 0px;
            top: 11px;
            width: 27px;
        }

        .tab_content ul.payment-list > li.payment-item img {
            width: 160px;
            float: left;
            margin-right: 10px;
            margin-left: 10px;
        }

        .tab_content ul.payment-list ul.item-title {
            padding-left: 20px;
            text-align: left;
            height: 90px;
            margin-top: 20px;
            float: left;
            width: 240px;
        }

        .tab_content ul.payment-list li.payment-item > h3 {
            margin-top: 11px;
            text-align: left;
            margin-bottom: 5px;
            margin-left: 10px;
        }

        .view-btn_link {
            white-space: nowrap;
            text-align: center;
            overflow: hidden;
            display: inline-block;
            padding: 4px 8px;
            font-size: 13px;
            line-height: 20px;
            margin: 6px;
            text-align: center;
            color: #344964;
            text-shadow: none;
            vertical-align: middle;
            cursor: pointer;
            border: 1px solid #344964;
            /*background: #286a95;*/
            width: 100px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -o-border-radius: 4px;
            border-radius: 4px;
            -webkit-box-shadow: 1px 3px 6px 0px rgba(0, 0, 0, 0.4);
            -moz-box-shadow: 1px 3px 6px 0px rgba(0, 0, 0, 0.4);
            -ms-box-shadow: 1px 3px 6px 0px rgba(0, 0, 0, 0.4);
            -o-box-shadow: 1px 3px 6px 0px rgba(0, 0, 0, 0.4);
            box-shadow: 1px 2px 6px 0px rgba(0, 0, 0, 0.4);
        }

        .payment-view:hover, .view-btn_link:hover {
            opacity: 0.8;
        }

        .button_holder {
            margin-top: 15px;
            margin-bottom: 0px;
            text-align: center;
        }

        .buttons {
            text-align: right;
            right: 160px;
            margin-top: -62px;
            position: absolute;
        }

        .grid-icon, .list-icon {
            display: block;
        }

        .grid-icon .grid-icon-block {
            width: 4px;
            height: 4px;
            float: left;
            margin: 1px;
            font-size: 0;
        }

        /* .list-icon {
           width: 18px;
           height: 18px;
           clear: both;
           font-size: 0;
         }*/
        .list-icon .list-icon-block_min {
            width: 4px;
            height: 4px;
            float: left;
            background: #a9a9a9;
            margin: 1px;
            font-size: 0;
        }

        .list-icon .list-icon-block_mid {
            width: 10px;
            height: 4px;
            float: left;
            background: #a9a9a9;
            margin: 1px;
            font-size: 0;
        }

        .view-btn {
            white-space: nowrap;
            text-align: center;
            overflow: hidden;
            display: inline-block;
            padding: 1px;
            font-size: 14px;
            line-height: 20px;
            text-align: center;
            text-shadow: none;
            vertical-align: middle;
            cursor: pointer;
            background: #fff;
            border: 1px solid #344964;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            -webkit-box-shadow: 1px 1px 2px 0px rgba(0, 0, 0, 0.4);
            -moz-box-shadow: 1px 1px 2px 0px rgba(0, 0, 0, 0.4);
            -ms-box-shadow: 1px 1px 2px 0px rgba(0, 0, 0, 0.4);
            -o-box-shadow: 1px 1px 2px 0px rgba(0, 0, 0, 0.4);
            box-shadow: 1px 1px 2px 0px rgba(0, 0, 0, 0.4);
            -webkit-transition: all 100ms linear;
            -moz-transition: all 100ms linear;
            -o-transition: all 100ms linear;
            transition: all 100ms linear;
        }

        .view-btn_selected {
            white-space: nowrap;
            text-align: center;
            overflow: hidden;
            display: inline-block;
            padding: 1px;
            font-size: 14px;
            line-height: 20px;
            text-align: center;
            color: #fff !important;
            text-shadow: none;
            vertical-align: middle;
            cursor: pointer;
            background: #344964;
            border: 1px solid #344964;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            -webkit-box-shadow: 1px 3px 6px 0px rgba(0, 0, 0, 0.4);
            -moz-box-shadow: 1px 3px 6px 0px rgba(0, 0, 0, 0.4);
            -ms-box-shadow: 1px 3px 6px 0px rgba(0, 0, 0, 0.4);
            -o-box-shadow: 1px 3px 6px 0px rgba(0, 0, 0, 0.4);
            box-shadow: 1px 3px 6px 0px rgba(0, 0, 0, 0.4);
            -webkit-transition: all 100ms linear;
            -moz-transition: all 100ms linear;
            -o-transition: all 100ms linear;
            transition: all 100ms linear;
        }

        .view-btn_selected .grid-icon .grid-icon-block,
        .view-btn_selected .list-icon .list-icon-block_min,
        .view-btn_selected .list-icon .list-icon-block_mid {
            background: #fff;
        }

        .view-btn .grid-icon .grid-icon-block,
        .view-btn .list-icon .list-icon-block_min,
        .view-btn .list-icon .list-icon-block_mid {
            background: #344964;
        }

        .dark-blue {
            background: #344964;
            color: #fff;
        }

        /*.tabs-links {
          -webkit-transition: all 100ms linear;
             -moz-transition: all 100ms linear;
               -o-transition: all 100ms linear;
                  transition: all 100ms linear;
              }*/
        .table th {
            vertical-align: top;
            padding: 5px 1px 5px;
            font-weight: bold;
            background: rgba(220, 225, 231, 0.26);
            border-right: 1px solid #bdcbd4;
            border-bottom: 1px solid #bdcbd4;
            text-align: left;
        }

        .table th, .table td {
            padding: 7px 1px 7px;
        }

        #payment-ct-holder1 .dq-checkbox,
        #payment-ct-holder2 .dq-checkbox {
            display: none;
        }

        #show-withdraw-cards,
        #show-withdraw {
            display: block !important;
        }</style>
    <style type="text/css">
        @import url("/css/font-awesome.min.css");</style>
    <h1>
        支付系统</h1>
    <div class="terminals_head">
        <img class="terminals_banner" src="/images/operations/deposit-withdraw-main.jpg"/>
        <div class="link-holder">
            {{--<div class="terminal-link">--}}
                {{--<img src="/images/operations//e2512aec44.png"/>--}}
                {{--<a href="/operations/bonuses-promotions/"--}}
                   {{--style="text-decoration: none;" target="_blank">奖金和推广--}}
                {{--</a>--}}
            {{--</div>--}}
            <div class="terminal-link">
                <img src="/images/operations/e2512aec44.png"/>
                <a href="/operations/commission-free/"
                   style="text-decoration: none;" target="_blank">存款到交易账户没有手续费
                </a>
            </div>
            <div class="terminal-link">
                <img src="/images/operations/e2512aec44.png"/>
                <a href="/operations/deposit-withdraw/auto-withdrawal/"
                   style="text-decoration: none;" target="_blank">自动提款系统
                </a>
            </div>
            <div class="terminal-link">
                <img src="/images/operations/e2512aec44.png"/>
                <a href="/operations/security/"
                   style="text-decoration: none;" target="_blank">资金安全</a>
            </div>
            <div class="terminal-link">
                <img src="/images/operations/e2512aec44.png"/>
                <a href="/operations/deposit-withdraw/exchange-rate/"
                   style="text-decoration: none;" target="_blank">汇率</a>
            </div>
            <div class="terminal-link">
                <img src="/images/operations/e2512aec44.png"/>
                <a href="/operations/deposit-withdraw/transfers/"
                   style="text-decoration: none;" target="_blank">内部转账</a>
            </div>
            <div class="terminal-link" style="border: none;">
                <img src="/images/operations/e2512aec44.png"/>
                <a href="/operations/deposit-withdraw/payoneer/"
                   style="text-decoration: none;" target="_blank">
                    GoldMany Payoneer万事达卡
                </a>
            </div>
        </div>
    </div>
    <div class="container" id="sidebar">
        <ul class="tabs" style="position: static; top: auto; width: 261px; margin-top: 0px;">
            <li class="first active" rel="tab1">
                <i class="fa fa-star" style="margin-right: 5px; color: #FF9B04;">&nbsp;</i>&nbsp;常用支付方式
            </li>
        </ul>
        <div class="tabs-links"
             style="margin-top: 180px; display: block; position: absolute; max-width: 250px; padding: 10px 5px; top: auto; text-decoration: none; color: rgb(74, 82, 86); width: 260px;"
             target="_blank">
            <p style="font-weight: bold;font-size: 12px; text-align: center; text-transform: uppercase;">
                存款赠金活动永久有效：</p>
            <p style=" width: 78px; display: inline-block; vertical-align: top; text-align: center; box-sizing: border-box; padding: 0 2px; font-size: 12px;">
                <a href="/operations/forex-bonus-deposit/" style="  color: #4A5256; text-decoration: none;"
                   target="_blank"><span
                            style="color: #344964;font-size: 25px;border-bottom: 1px solid #e3e3e3;margin-bottom: 8px;display: block;">50%</span>从0
                    USD</a></p>
            <p style=" width: 78px; display: inline-block; vertical-align: top; text-align: center; box-sizing: border-box; padding: 0 2px; font-size: 12px;">
                <a href="/operations/bonuses-promotions/115-deposit-bonus/"
                   style="  color: #4A5256; text-decoration: none;" target="_blank"><span
                            style="color: #344964;font-size: 25px;border-bottom: 1px solid #e3e3e3;margin-bottom: 8px;display: block;">100%</span>从300
                    USD</a></p>
            <p style=" width: 78px;display: inline-block;vertical-align: top;text-align: center; box-sizing: border-box; padding: 0 3px; font-size: 12px;">
                <a href="/operations/bonuses-promotions/115-deposit-bonus/"
                   style="  color: #4A5256; text-decoration: none;" target="_blank"><span
                            style="color: #344964; font-size: 25px; border-bottom: 1px solid #e3e3e3; margin-bottom: 8px; display: block;">115%</span>从500
                    USD</a></p>
            <p style="font-weight: bold;text-align: center;margin-top: 20px;border: 1px solid #e3e3e3;padding: 5px;color: #344964;">
                每月两次无手续费出金!
            </p>
        </div>
    </div>
    <div class="tab_container" id="payment-content">
        <p class="button_holder" style="position: absolute; margin-top: 18px; right: 30px;">

        </p>
        <p class="button_holder" style="position: absolute; margin-top: 18px; left: 15px;">

        </p>
        <div class="ct-changer show" id="payment-ct-holder1" style="margin-top: 80px; display: block">

            <div class="tab_content" id="tab1" style="display: block;">
                <h3 style="font-size: 20px; margin-left: 10px; margin-top: 40px; color: #344964;">
                    常用支付方式</h3>
                <ul class="payment-grid">

                    <li class="payment-item cy-systems" style="display: inline-block;">
                        <h3>
                            VISA / MasterCard</h3>
                        <img alt=""
                             src="/images/operations/23.png"/>
                        <ul class="item-title payment-grid">
                            <li>
                                <strong>货币:</strong> USD / EUR
                            </li>
                            <li>
                                <strong>存款费用:</strong> 0%
                            </li>
                            <li>
                                <strong>取款费用:</strong> 5 EUR
                            </li>
                            <li>
                                <strong>存款金额:</strong> 从 10 USD
                            </li>
                            <li>
                                <strong>取款金额:</strong> 从 10 USD
                            </li>
                        </ul>

                        <p class="button_holder">
                            <a class="view-btn_link dark-blue"
                                       @if(empty(Auth::user()))
                                            href="/login"
                                       @else
                                            href="/pay"
                                       @endif
                               style="text-decoration: none; color: #fff;" target="_blank"><span>存款</span>
                            </a>
                            <a class="view-btn_link"
                                    style="text-decoration: none; color: #344964;" target="_blank">
                                <span>取款</span>
                            </a>
                        </p>
                    </li>

                    <li class="payment-item bz-systems cy-systems system-on" style="display: inline-block;">
                        <h3>
                            宝付</h3>
                        <img alt="" src="/images/operations/baofu.png"/>
                        <ul class="item-title payment-grid">
                            <br/><br/><br/>
                            <li>
                                <strong>货币:</strong> CNY
                            </li>
                            <li>
                                <strong>存款费用:</strong> 0%
                            </li>
                            <li>
                                <strong>取款费用:</strong> 1%
                            </li>
                            <li>
                                <strong>存款金额:</strong> 从100 USD &nbsp;
                                <i class="fa fa-question-circle" style="color: #344964; font-size: 12px"
                                   title="支付系统限制是可能的, 如果您的电子钱包未经授权.">&nbsp;
                                </i>
                            </li>
                            <li>
                                <strong>取款金额:</strong> 从100 USD
                            </li>
                        </ul>
                        <br/><br/><br/><br/>

                        <p class="button_holder">
                            <a class="view-btn_link dark-blue"
                               @if(empty(Auth::user()))
                               href="/login"
                               @else
                               href="/pay"
                               @endif
                               style="text-decoration: none; color: #fff;" target="_blank">
                                <span>存款</span></a>
                            <a class="view-btn_link"
                                    style="text-decoration: none; color: #344964;" target="_blank"><span>取款</span>
                            </a>
                        </p>
                    </li>



                </ul>
                <p style="font-size: 11px;color: #a9a9a9; text-align: center; margin-top: 30px;">
                    交易账户不能通过不属于交易账户所有者的电子钱包, 银行账户, 和银行卡进行存款.</p>
            </div>
            <div class="tab_content" id="tab3" style="display: none;">
                <h3 style="font-size: 20px; margin-left: 10px; margin-top: 40px; color: #344964;">
                    银行支付</h3>
                <ul class="payment-grid">
                    <li class="payment-item bz-systems system-on" style="display: inline-block;">
                        <h3>
                            银行转账</h3>
                        <img alt="" src="/images/operations/logos/27.png"/>
                        <ul class="item-title payment-grid">
                            <li>
                                <strong>货币:</strong> USD / EUR / CNY
                            </li>
                            <li>
                                <strong>存款费用:</strong> 0% &nbsp;
                                <i class="fa fa-question-circle" style="color: #344964; font-size: 12px"
                                   title="以美元资金转账的手续费补偿的最高金额是 40 EUR 以欧元资金转账的是45 EUR. 请注意,
                                   您的银行或代理银行可能会收取附加费用.">
                                    &nbsp;
                                </i>
                            </li>
                            <li>
                                <strong>取款费用:</strong> 到 45 EUR &nbsp;
                                <i class="fa fa-question-circle" style="color: #344964; font-size: 12px"
                                   title="请注意,上述的金额是通过银行转账取款的发送银行收取的手续费.
                                   代理银行和您的银行可能会收取额外的手续费.">
                                    &nbsp;
                                </i>
                            </li>
                            <li>
                                <strong>存款金额:</strong> 从500 EUR
                            </li>
                            <li>
                                <strong>取款金额:</strong> 从300 EUR
                            </li>
                        </ul>
                        <p class="more-link_holder">
                            <a class="more-link" href="/operations/deposit-withdraw/bank-transfer/"
                               target="_blank"><span>了解更多</span></a></p>
                        <p class="button_holder">
                            <a class="view-btn_link dark-blue"
                               href="https://my.cn.roboforex.com/cs/operations/deposit-funds/"
                               style="text-decoration: none; color: #fff;" target="_blank"><span>存款</span></a><a
                                    class="view-btn_link"
                                    href="https://my.cn.roboforex.com/cs/operations/withdraw-funds/"
                                    style="text-decoration: none; color: #344964;" target="_blank"><span>取款</span></a>
                        </p>
                    </li>
                    <li class="payment-item cy-systems" style="display: inline-block;">
                        <h3>
                            Bank Transfer (Barclays Bank PLC)</h3>
                        <img alt="" src="/images/operations/47.png"/>
                        <ul class="item-title payment-grid">
                            <li>
                                <strong>货币:</strong> USD / EUR / GBP
                            </li>
                            <li>
                                <strong>存款费用:</strong> 0% &nbsp;
                                <i class="fa fa-question-circle" style="color: #344964; font-size: 12px"
                                   title="以美元资金转账的手续费补偿的最高金额是 40 EUR 以欧元资金转账的是45 EUR.
                                   请注意,您的银行或代理银行可能会收取附加费用.">
                                    &nbsp;
                                </i>
                            </li>
                            <li>
                                <strong>取款费用:</strong> 到 40 GBP&nbsp;
                                <i class="fa fa-question-circle" style="color: #344964; font-size: 12px"
                                   title="Please note that for clients from the SEPA countries the commission
                                   for transfer is 15 GBP, for clients from other countries – 40 GBP.">
                                    &nbsp;
                                </i>
                            </li>
                            <li>
                                <strong>存款金额:</strong> 从 500 EUR
                            </li>
                            <li>
                                <strong>取款金额:</strong> 从 300 EUR
                            </li>
                        </ul>
                        <p class="more-link_holder">
                            <a class="more-link" href="/operations/deposit-withdraw/bank-transfer-cy/"
                               target="_blank"><span>了解更多</span></a></p>
                        <p class="button_holder">
                            <a class="view-btn_link dark-blue"
                               href="https://my.cn.roboforex.com/cs/operations/deposit-funds/"
                               style="text-decoration: none; color: #fff;" target="_blank"><span>存款</span></a><a
                                    class="view-btn_link"
                                    href="https://my.cn.roboforex.com/cs/operations/withdraw-funds/"
                                    style="text-decoration: none; color: #344964;" target="_blank"><span>取款</span></a>
                        </p>
                    </li>
                    <li class="payment-item cy-systems deposit-system-card" style="display: inline-block;">
                        <h3>
                            Fast Bank Transfer &nbsp;
                            <i class="fa fa-question-circle" style="color: #344964; font-size: 12px"
                               title="'Fast Bank Transfer' payment system is available for
                            the clients 从 the following countries: Australia, Austria, Belgium, Bulgaria,
                            Cyprus, Czech republic, Denmark, Estonia, Finland, France, Germany, Greece, Hungary,
                            Iceland,Ireland, Italy, Latvia, Lithuania, Malta, New Zealand, Philippines, Poland,
                            Portugal, Romania, Singapore, Slovakia, South Africa, Spain, Sweden, Switzerland,
                            United Kingdom.">
                                &nbsp;
                            </i>
                        </h3>
                        <img alt="" src="/images/operations/39.png"/>
                        <ul class="item-title payment-grid">
                            <li>
                                <strong>货币:</strong> EUR
                            </li>
                            <li>
                                <strong>存款费用:</strong> 0%
                            </li>
                            <li>
                                <strong>存款金额:</strong> 从 10 EUR 到 10,000 EUR
                            </li>
                        </ul>
                        <p class="more-link_holder">
                            <a class="more-link" href="/operations/deposit-withdraw/fast-bank-transfer/"
                               target="_blank"><span>了解更多</span></a></p>
                        <p class="button_holder">
                            <a class="view-btn_link dark-blue"
                               href="https://my.cn.roboforex.com/cs/operations/deposit-funds/"
                               style="text-decoration: none; color: #fff;" target="_blank"><span>存款</span>
                            </a>
                        </p>
                    </li>
                    <li class="payment-item cy-systems deposit-system-card" style="display: inline-block;">
                        <h3>
                            Neosurf (意大利, 比利时, 法国, 西班牙)</h3>
                        <img alt="" src="/images/operations/43.png"/>
                        <ul class="item-title payment-grid">
                            <li>
                                <strong>货币:</strong> EUR
                            </li>
                            <li>
                                <strong>存款费用:</strong> 0%
                            </li>
                            <li>
                                <strong>存款金额:</strong> 从 10 EUR 到 10,000 EUR
                            </li>
                        </ul>
                        <p class="more-link_holder">
                            <a class="more-link" href="/operations/deposit-withdraw/neosurf/"
                               target="_blank"><span>了解更多</span></a></p>
                        <p class="button_holder">
                            <a class="view-btn_link dark-blue"
                               href="https://my.cn.roboforex.com/cs/operations/deposit-funds/"
                               style="text-decoration: none; color: #fff;" target="_blank"><span>存款</span></a></p>
                    </li>
                    <li class="payment-item cy-systems deposit-system-card" style="display: inline-block;">
                        <h3>
                            iDEAL (荷兰)</h3>
                        <img alt="" src="/images/operations/41.png"/>
                        <ul class="item-title payment-grid">
                            <li>
                                <strong>货币:</strong> EUR
                            </li>
                            <li>
                                <strong>存款费用:</strong> 0%
                            </li>
                            <li>
                                <strong>存款金额:</strong> 从 10 EUR 到 10,000 EUR
                            </li>
                        </ul>
                        <p class="more-link_holder">
                            <a class="more-link" href="/operations/deposit-withdraw/ideal/"
                               target="_blank"><span>了解更多</span></a></p>
                        <p class="button_holder">
                            <a class="view-btn_link dark-blue"
                               href="https://my.cn.roboforex.com/cs/operations/deposit-funds/"
                               style="text-decoration: none; color: #fff;" target="_blank"><span>存款</span></a></p>
                    </li>
                    <li class="payment-item cy-systems deposit-system-card" style="display: inline-block;">
                        <h3>
                            Multibanco (葡萄牙)</h3>
                        <img alt="" src="/images/operations/42.png"/>
                        <ul class="item-title payment-grid">
                            <li>
                                <strong>货币:</strong> EUR
                            </li>
                            <li>
                                <strong>存款费用:</strong> 0%
                            </li>
                            <li>
                                <strong>存款金额:</strong> 从 10 EUR 到 10,000 EUR
                            </li>
                        </ul>
                        <p class="more-link_holder">
                            <a class="more-link" href="/operations/deposit-withdraw/multibanco/" target="_blank">
                                <span>了解更多</span>
                            </a>
                        </p>
                        <p class="button_holder">
                            <a class="view-btn_link dark-blue"
                               href="https://my.cn.roboforex.com/cs/operations/deposit-funds/"
                               style="text-decoration: none; color: #fff;" target="_blank"><span>存款</span></a></p>
                    </li>
                    <li class="payment-item cy-systems deposit-system-card" style="display: inline-block;">
                        <h3>
                            Teleingreso (西班牙)</h3>
                        <img alt="" src="/images/operations/45.png"/>
                        <ul class="item-title payment-grid">
                            <li>
                                <strong>货币:</strong> EUR
                            </li>
                            <li>
                                <strong>存款费用:</strong> 0%
                            </li>
                            <li>
                                <strong>存款金额:</strong> 从 10 EUR 到 10,000 EUR
                            </li>
                        </ul>
                        <p class="more-link_holder">
                            <a class="more-link" href="/operations/deposit-withdraw/teleingreso/" target="_blank">
                                <span>了解更多</span></a>
                        </p>
                        <p class="button_holder">
                            <a class="view-btn_link dark-blue"
                               href="https://my.cn.roboforex.com/cs/operations/deposit-funds/"
                               style="text-decoration: none; color: #fff;" target="_blank"><span>存款</span></a></p>
                    </li>
                    <li class="payment-item cy-systems deposit-system-card" style="display: inline-block;">
                        <h3>
                            Giropay (德国)</h3>
                        <img alt="" src="/images/operations/40.png"/>
                        <ul class="item-title payment-grid">
                            <li>
                                <strong>货币:</strong> EUR
                            </li>
                            <li>
                                <strong>存款费用:</strong> 0%
                            </li>
                            <li>
                                <strong>存款金额:</strong> 从 10 EUR 到 10,000 EUR
                            </li>
                        </ul>
                        <p class="more-link_holder">
                            <a class="more-link" href="/operations/deposit-withdraw/giropay/"
                               target="_blank"><span>了解更多</span></a></p>
                        <p class="button_holder">
                            <a class="view-btn_link dark-blue"
                               href="https://my.cn.roboforex.com/cs/operations/deposit-funds/"
                               style="text-decoration: none; color: #fff;" target="_blank"><span>存款</span></a></p>
                    </li>
                    <li class="payment-item cy-systems deposit-system-card" style="display: inline-block;">
                        <h3>
                            Sofort (德国, 奥地利, 法国)</h3>
                        <img alt="" src="/images/operations/44.png"/>
                        <ul class="item-title payment-grid">
                            <li>
                                <strong>货币:</strong> EUR
                            </li>
                            <li>
                                <strong>存款费用:</strong> 0%
                            </li>
                            <li>
                                <strong>存款金额:</strong> 从 10 EUR 到 10,000 EUR
                            </li>
                        </ul>
                        <p class="more-link_holder">
                            <a class="more-link" href="/operations/deposit-withdraw/sofort/"
                               target="_blank"><span>了解更多</span></a></p>
                        <p class="button_holder">
                            <a class="view-btn_link dark-blue"
                               href="https://my.cn.roboforex.com/cs/operations/deposit-funds/"
                               style="text-decoration: none; color: #fff;" target="_blank"><span>存款</span></a></p>
                    </li>
                </ul>
                <p style="font-size: 11px;color: #a9a9a9; text-align: center; margin-top: 30px;">
                    交易账户不能通过不属于交易账户所有者的电子钱包, 银行账户, 和银行卡进行存款.</p>
            </div>
           </div>

    </div>
    <script type="text/javascript">
        jQuery(".tab_content").hide();
        jQuery(".tab_content:first").show();

        /* if in tab mode */
        jQuery("ul.tabs li").click(function () {
            jQuery('#show-withdraw-cards').attr('checked', false);
            jQuery(".tab_content").hide();
            var activeTab = $(this).attr("rel");
            jQuery("#" + activeTab).fadeIn(100);

            jQuery("ul.tabs li").removeClass("active");
            jQuery(this).addClass("active");

            jQuery(".tab_drawer_heading").removeClass("d_active");
            jQuery(".tab_drawer_heading[rel^='" + activeTab + "']").addClass("d_active");

        });
        /* if in drawer mode */
        jQuery(".tab_drawer_heading").click(function () {

            jQuery(".tab_content").hide();
            var d_activeTab = $(this).attr("rel");
            jQuery("#" + d_activeTab).fadeIn(100);

            jQuery(".tab_drawer_heading").removeClass("d_active");
            jQuery(this).addClass("d_active");

            jQuery("ul.tabs li").removeClass("active");
            jQuery("ul.tabs li[rel^='" + d_activeTab + "']").addClass("active");
        });


        /* Extra class "tab_last"
         to add border to right side
         of last tab */
        jQuery('ul.tabs li').last().addClass("tab_last");

        (function ($, undefined) {
            $.extend({
                "lockfixed": function (el, config) {
                    if (config && config.offset) {
                        config.offset.bottom = parseInt(config.offset.bottom, 10);
                        config.offset.top = parseInt(config.offset.top, 10);
                    } else {
                        config.offset = {bottom: 100, top: 0};
                    }
                    var el = $(el);
                    if (el && el.offset()) {
                        var el_position = el.css("position"),
                                el_margin_top = parseInt(el.css("marginTop"), 10),
                                el_position_top = el.css("top"),
                                el_top = el.offset().top,
                                pos_not_fixed = false;

                        if (config.forcemargin === true || navigator.userAgent.match(/\bMSIE (4|5|6)\./) || navigator.userAgent.match(/\bOS ([0-9])_/) || navigator.userAgent.match(/\bAndroid ([0-9])\./i)) {
                            pos_not_fixed = true;
                        }

                        $(window).bind('scroll resize orientationchange load lockfixed:pageupdate', el, function (e) {
                            if (pos_not_fixed && document.activeElement && document.activeElement.nodeName === "INPUT") {
                                return;
                            }

                            var top = 0,
                                    el_height = el.outerHeight(),
                                    el_width = el.outerWidth(),
                                    max_height = $(document).height() - config.offset.bottom,
                                    scroll_top = $(window).scrollTop();

                            if (el.css("position") !== "fixed" && !pos_not_fixed) {
                                el_top = el.offset().top;
                                el_position_top = el.css("top");
                            }

                            if (scroll_top >= (el_top - (el_margin_top ? el_margin_top : 0) - config.offset.top)) {

                                if (max_height < (scroll_top + el_height + el_margin_top + config.offset.top)) {
                                    top = (scroll_top + el_height + el_margin_top + config.offset.top) - max_height;
                                } else {
                                    top = 0;
                                }

                                if (pos_not_fixed) {
                                    el.css({'marginTop': (parseInt(scroll_top - el_top - top, 10) + (2 * config.offset.top)) + 'px'});
                                } else {
                                    el.css({
                                        'position': 'fixed',
                                        'top': (config.offset.top - top) + 'px',
                                        'width': el_width + "px"
                                    });
                                }
                            } else {
                                el.css({
                                    'position': el_position,
                                    'top': el_position_top,
                                    'width': el_width + "px",
                                    'marginTop': (el_margin_top && !pos_not_fixed ? el_margin_top : 0) + "px"
                                });
                            }
                        });
                    }
                }
            });
        })(jQuery);

        (function ($) {
            $.lockfixed("#sidebar .tabs", {offset: {top: 10, bottom: 1200}});
            $.lockfixed("#sidebar .tabs-links", {offset: {top: 10, bottom: 470}});
        })(jQuery);

        jQuery(".bz-systems").addClass('system-on');

        //$('.show-systems').on('click',function(e) {
        jQuery('.show-systems').click(function (e) {
            if (jQuery(this).hasClass('show-bz-systems')) {
                jQuery('.tabs-links').css("margin-top", "175px");
                jQuery('.show-cy-systems').removeClass('view-btn_selected');
                jQuery('.show-bz-systems').addClass('view-btn_selected');
                jQuery('.cy-systems').hide().removeClass('system-on');
                jQuery('.tab-bz-systems').fadeIn(100);
                jQuery('.bz-systems').fadeIn(200).css("display", "inline-block").addClass('system-on');
                $('#show-withdraw-cards').attr('checked', false);

            }
            else if ($(this).hasClass('show-cy-systems')) {
                jQuery('.show-bz-systems').removeClass('view-btn_selected');
                jQuery('.show-cy-systems').addClass('view-btn_selected');
                jQuery('.bz-systems').hide().removeClass('system-on');
                ;
                jQuery('.tab-bz-systems').hide();
                jQuery('.tabs-links').css("margin-top", "175px");
                jQuery('.cy-systems').fadeIn(200).css("display", "inline-block").addClass('system-on');
                $('#show-withdraw-cards').attr('checked', false);

            }
        });

        //$('.payment-view').on('click',function(e) {
        jQuery('.payment-view').click(function (e) {
            if ($(this).hasClass('grid')) {
                jQuery('.tab_content ul').removeClass('payment-list').addClass('payment-grid');
                jQuery('.list').removeClass('view-btn_selected').addClass('view-btn');
                jQuery('.grid').removeClass('view-btn').addClass('view-btn_selected');
                // jQuery('.payment-item').hide();
                // jQuery('.payment-item').fadeIn(200).css( "display", "inline-block" );
            }
            else if (jQuery(this).hasClass('list')) {
                jQuery('.tab_content ul').removeClass('payment-grid').addClass('payment-list');
                jQuery('.list').removeClass('view-btn').addClass('view-btn_selected');
                jQuery('.grid').removeClass('view-btn_selected').addClass('view-btn');
                // jQuery('.payment-item').hide();
                // jQuery('.payment-item').fadeIn(200);
            }
        });

        //$('.show-table').on('click',function(e) {
        jQuery('.show-table').click(function (e) {
            if (jQuery('.ct-changer').hasClass('show')) {
                jQuery('.tabs-links').css("margin-top", "175px");

            }
            else if ($(this).hasClass('show-cy-systems')) {
                jQuery('.show-bz-systems').removeClass('view-btn_selected');
                jQuery('.show-cy-systems').addClass('view-btn_selected');
                jQuery('.bz-systems').hide();
                jQuery('.tab-bz-systems').hide();
                jQuery('.tabs-links').css("margin-top", "175px");
                // jQuery('.cy-systems').fadeIn(200).css( "display", "inline-block" );

            }
        });
        function showTable(id) {
            var show = jQuery('#payment-ct-holder2').css('display') == 'none' ? true : false;
            if (show) {
                jQuery('#payment-ct-holder1').hide();
                jQuery('#payment-ct-holder2').fadeIn(100);
                jQuery('#show-table' + id).addClass('dark-blue');
                jQuery('.table-toggle').html("返回");
                jQuery('#sidebar').css('opacity', '0.4');
            } else {
                jQuery('#payment-ct-holder2').hide();
                jQuery('#payment-ct-holder1').fadeIn(100);
                jQuery('#show-table' + id).removeClass('dark-blue');
                jQuery('.table-toggle').html("对比");
                jQuery('#sidebar').css('opacity', '1');
            }

        }

        $('#show-withdraw').change(function () {
            if (this.checked) {
                $('.deposit-system').fadeOut(300);
            }
            else {
                $('.deposit-system').fadeIn(300);
            }
        });
        $('#show-withdraw-cards').change(function () {
            if (this.checked) {
                $('.deposit-system-card').fadeOut(300);
            }
            else {
                $('.system-on').fadeIn(300);
            }
        });

        if ($('.dq-checkbox').hasClass('checked')) {
            $('.deposit-system-card').fadeOut(300);
        } else {
            $('.deposit-system-card').fadeIn(300);
        }

        $(document).ready(function () {
            if (jQuery('.show-bz-systems').hasClass('view-btn_selected')) {
                $('.cy-systems').hide();
                $('.bz-systems').show();
            }
            else if ($('.show-cy-systems').hasClass('view-btn_selected')) {
                $('.bz-systems').hide();
                $('.cy-systems').show();
            }
        });
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