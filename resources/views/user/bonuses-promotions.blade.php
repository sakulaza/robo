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


    <title>奖金和推广</title>
    <meta property="og:title" content="奖金和推广"/>
    <meta property="og:description" content=""/>
    <meta property="og:url" content="/operations/bonuses-promotions/"/>
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
        <a href="/">首页</a>/<a href="/operations/">交易服务</a>/赠金,计划和活动
    </div>

    <div id="left">
        <h1>奖金和推广</h1>
        <div>
            <script src="/js/jquery.carousel.min.js" type="text/javascript"
                    charset="utf-8"></script>
            <style type="text/css">
                .carousel-container {
                    position: relative;
                    width: 648px;
                }

                #carousel {
                    height: 360px;
                    width: 648px;
                    position: relative;
                    margin-bottom: 0.5em;
                    font-size: 12px;
                    font-family: Arial;
                }

                .carousel-image {
                    border: 0;
                    display: block;
                }

                .carousel-feature {
                    position: absolute;
                    top: -1000px;
                    left: -1000px;
                    border: 1px solid #a9a9a9;
                    cursor: pointer;
                    -webkit-box-shadow: 0px 12px 12px -12px rgba(0, 0, 0, 0.74902);
                    -moz-box-shadow: 0px 12px 12px -12px rgba(0, 0, 0, 0.74902);
                    -ms-box-shadow: 0px 12px 12px -12px rgba(0, 0, 0, 0.74902);
                    -o-box-shadow: 0px 12px 12px -12px rgba(0, 0, 0, 0.74902);
                    box-shadow: 0px 12px 12px -12px rgba(0, 0, 0, 0.74902);
                }

                .carousel-feature .carousel-caption {
                    position: absolute;
                    background-color: rgba(0, 0, 0, 0.6);
                    width: 230px;
                    height: 270px;
                    left: 0;
                    bottom: 0;
                }

                .carousel-feature .carousel-caption p {
                    margin: 0;
                    font-size: 13px;
                    color: #fff;
                    text-align: center;
                }

                .carousel-caption-text {
                    height: 195px;
                    padding: 13px;
                }

                .carousel-caption-title {
                    font-size: 16px;
                    font-weight: bold;
                    text-transform: uppercase;
                    text-align: center;
                    display: block;
                    margin-bottom: 13px;
                }

                .tracker-summation-container {
                    position: absolute;
                    color: white;
                    right: 48px;
                    top: 230px;
                    padding: 3px;
                    margin: 3px;
                    background-color: #000;
                    display: none;
                }

                .tracker-individual-container {
                    position: absolute;
                    color: white;
                    right: 48px;
                    top: 210px;
                    padding: 0;
                    margin: 0;
                    display: none;
                }

                .tracker-individual-container li {
                    list-style: none;
                }

                .tracker-individual-container .tracker-individual-blip {
                    margin: 0 3px;
                    padding: 0 3px;
                    color: white;
                    text-align: center;
                    background-color: #DDD;
                }

                .tracker-individual-container .tracker-individual-blip-selected {
                    color: white;
                    font-weight: bold;
                    background-color: #000;
                }

                #carousel-left {
                    position: absolute;
                    bottom: 30px;
                    left: 100px;
                    cursor: pointer;
                }

                #carousel-right {
                    position: absolute;
                    bottom: 30px;
                    right: 100px;
                    cursor: pointer;
                }

                .btn_link {
                    white-space: nowrap;
                    text-align: center;
                    overflow: hidden;
                    display: inline-block;
                    padding: 4px 10px;
                    font-size: 13px;
                    line-height: 20px;
                    margin: 3px;
                    text-align: center;
                    color: #fff !important;
                    text-shadow: none;
                    vertical-align: middle;
                    cursor: pointer;
                    border-color: #a9a9a9;
                    background: #286a95;
                    min-width: 93px;
                    -webkit-border-radius: 4px;
                    -moz-border-radius: 4px;
                    -ms-border-radius: 4px;
                    -o-border-radius: 4px;
                    border-radius: 4px;
                    -webkit-box-shadow: 1px 3px 6px 0px rgba(0, 0, 0, 0.4);
                    -moz-box-shadow: 1px 3px 6px 0px rgba(0, 0, 0, 0.4);
                    -ms-box-shadow: 1px 3px 6px 0px rgba(0, 0, 0, 0.4);
                    -o-box-shadow: 1px 3px 6px 0px rgba(0, 0, 0, 0.4);
                    box-shadow: 1px 2px 6px 0px rgba(0, 0, 0, 0.4);
                }

                .btn_link:hover, .js-faq-btn5:hover {
                    opacity: 0.8;
                }

                .js-faq-btn {
                    -webkit-transition: all 100ms linear;
                    -moz-transition: all 100ms linear;
                    -ms-transition: all 100ms linear;
                    -o-transition: all 100ms linear;
                    transition: all 100ms linear;
                }

                .btn.js-faq-btn:hover,
                .btn.js-faq-btn.btn_selected,
                .btn.js-faq-btn.btn_selected:hover {
                    white-space: nowrap;
                    text-align: center;
                    overflow: hidden;
                    display: inline-block;
                    padding: 4px 15px;
                    font-size: 14px;
                    line-height: 20px;
                    margin: 0 10px;
                    text-align: center;
                    color: #fff !important;
                    text-shadow: none;
                    vertical-align: middle;
                    cursor: pointer;
                    border-color: #a9a9a9;
                    background: #286a95;
                    -webkit-border-radius: 4px;
                    -moz-border-radius: 4px;
                    border-radius: 4px;
                    -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, .2), 0 1px 2px rgba(0, 0, 0, .05);
                    -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, .2), 0 1px 2px rgba(0, 0, 0, .05);
                    -ms-box-shadow: 0 1px 0 rgba(255, 255, 255, .2), 0 1px 2px rgba(0, 0, 0, .05);
                    -o-box-shadow: 0 1px 0 rgba(255, 255, 255, .2), 0 1px 2px rgba(0, 0, 0, .05);
                    box-shadow: 0 1px 0 rgba(255, 255, 255, .2), 0 1px 2px rgba(0, 0, 0, .05);
                }

                .text_block {
                    display: inline-block;
                    width: 280px;
                    height: 450px;
                    -webkit-box-shadow: 0px 12px 12px -12px rgba(0, 0, 0, 0.74902);
                    -moz-box-shadow: 0px 12px 12px -12px rgba(0, 0, 0, 0.74902);
                    -ms-box-shadow: 0px 12px 12px -12px rgba(0, 0, 0, 0.74902);
                    -o-box-shadow: 0px 12px 12px -12px rgba(0, 0, 0, 0.74902);
                    box-shadow: 0px 12px 12px -12px rgba(0, 0, 0, 0.74902);
                    margin: 19px;
                    background-size: cover;
                    overflow: hidden;
                    border: 1px solid #e3e3e3;
                }

                .text_block-inner {
                    padding: 15px;
                    background: rgba(255, 255, 255, 0.87);
                    width: 250px;
                    height: 270px;
                    margin: 150px 0px 0px 0px;
                }

                .text_block-content {
                    height: 230px;
                    text-align: justify;
                }

                .date-block {
                    position: absolute;
                    width: 0px;
                    height: 0px;
                    border-style: solid;
                    border-width: 100px 100px 0 0;
                    border-color: rgba(40, 106, 149, 0.85) transparent transparent transparent;
                }

                .date-block-text {
                    position: absolute;
                    color: #fff;
                    font-size: 16px;
                    text-align: center;
                    margin-top: 11px;
                    margin-left: -10px;
                    -webkit-transform: rotate(-45deg);
                    -moz-transform: rotate(-45deg);
                    -ms-transform: rotate(-45deg);
                    -o-transform: rotate(-45deg);
                    transform: rotate(-45deg);
                }

                .terms > li {
                    margin-bottom: 10px;
                }

                .button_holder {
                    margin-bottom: 0px;
                    text-align: center;
                }</style>
            <div class="carousel-container">
                <div id="carousel">
                    <div class="carousel-feature">
                        <a href="#">
                            <img alt="Image Caption" class="carousel-image" src="/images/operations/free-withdrawal_slide.png"
                                         style="width: 570px; height: 270px;"/></a>
                        <div class="carousel-caption" style="display: block; opacity: 1;">
                            <div class="carousel-caption-text">
                                <p>
                                    <span class="carousel-caption-title"
                                          style="color: #87C5E1; font-size: 14px;">无手续费出金</span></p>
                                <p>
                                    每月两次无手续费出金! 每月的第一和第三个周二,GoldMany给予客户出金补偿.</p>
                            </div>
                            <p class="button_holder">
                                <a class="btn_link"
                                   href="/operations/bonuses-promotions/free-withdrawal/"
                                   style="text-decoration: none;" target="_blank"><span>阅读更多...</span></a></p>
                        </div>
                    </div>
                    <div class="carousel-feature">
                        <a href="#">
                            <img alt="图片说明" class="carousel-image"
                                         src="/images/operations/tradable_slide.png"/></a>
                        <div class="carousel-caption">
                            <div class="carousel-caption-text">
                                <p>
                                    <span class="carousel-caption-title" style="color: #87C5E1; font-size: 14px;">可交易赠金至50%</span>
                                </p>
                                <p>
                                    可在&quot;浮亏&quot;时抗亏损的赠金. 入金最多至300美金获得25%赠金,入金由300美金起跳获得50%赠金. 现在就获得赠金!</p>
                            </div>
                            <p class="button_holder">
                                <a class="btn_link"
                                   href="/operations/bonuses-promotions/tradable-bonus/"
                                   style="text-decoration: none;" target="_blank"><span>更多阅读</span></a></p>
                        </div>
                    </div>
                    <div class="carousel-feature">
                        <a href="#">
                            <img alt="Image Caption" class="carousel-image"
                                         src="/images/operations/wb-30-usd-slide.png"/></a>
                        <div class="carousel-caption">
                            <div class="carousel-caption-text">
                                <p>
                                    <span class="carousel-caption-title" style="color: #87C5E1;">迎新赠金30 USD</span></p>
                                <p>
                                    GoldMany完全验证客户可获得&quot;30美元迎新赠金&quot;。参加此赠金活动可以最低成本开始外汇交易之旅。</p>
                            </div>
                            <p class="button_holder">
                                <a class="btn_link" href="/operations/bonuses-promotions/30-usd-welcome-bonus/"
                                   style="background: #3980B6;text-decoration: none;" target="_blank"><span>阅读更多</span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div id="carousel-left">
                    <img src="/images/operations/arrow-left_blue.png"
                         style="width: 20px; height: 20px;"/></div>
                <div id="carousel-right">
                    <img src="/images/operations/arrow-right_blue.png"
                         style="width: 20px; height: 20px;"/></div>
            </div>
            <p style="text-align: left; margin-bottom: 40px;">
                <a class="btn js-faq-btn btn_selected js-faq-btn1" onclick="showAllBlock(1);"
                   style="margin: 0 18px; height: 20px; line-height: 20px; font-size: 14px; border-color: #a9a9a9;text-decoration: none; color: #000"><span>所有</span></a>
                <a class="btn js-faq-btn js-faq-btn2" onclick="showVerBlock(2);"
                   style="margin: 0 5px; height: 20px; line-height: 20px; font-size: 14px; border-color: #a9a9a9;text-decoration: none; color: #000"><span>存款</span></a>
                <a class="btn js-faq-btn js-faq-btn3" onclick="showVerBlock(3);"
                   style="margin: 0 5px; height: 20px; line-height: 20px; font-size: 14px; border-color: #a9a9a9;text-decoration: none; color: #000"><span>无存款</span></a>
                <a class="btn js-faq-btn js-faq-btn4" onclick="showVerBlock(4);"
                   style="margin: 0 5px; height: 20px; line-height: 20px; font-size: 14px; border-color: #a9a9a9;text-decoration: none; color: #000"><span>交易</span></a>
            </p>
            <div class="text_block contentall content3"
                 style="background: url(/images/operations/dakar_block.png); ">
                <div class="text_block-inner">
                    <div class="text_block-content">
                        <h2 style="text-align: center;">
                            2017达喀尔之路</h2>
                        <p>
                            成为赢家获得世界上最大的越野拉力竞标赛-2017达喀尔拉力赛门票的拥有者! 获取返点或代理佣金收集奖金券. 达喀尔之路正在等您!</p>
                        <p>
                            GoldMany是即将参加2017达喀尔拉力赛的塞浦路斯越野车队Autolife的官方赞助商.</p>
                    </div>
                    <p class="button_holder">
                        <a class="btn_link" href="/operations/bonuses-promotions/road-to-dakar-2017/"
                           style="text-decoration: none;" target="_blank"><span>阅读更多</span>
                        </a>
                        <a class="btn_link" href="https://my.cn.roboforex.com/cs/"
                           style="text-decoration: none;" target="_blank"><span>开始交易</span>
                        </a>
                    </p>
                </div>
            </div>
            <div class="text_block contentall content3"
                 style="background: url(/images/operations/wb-30-usd.png);">
                <div class="text_block-inner">
                    <div class="text_block-content">
                        <h2 style="text-align: center;">
                            迎新赠金30 USD</h2>
                        <p>
                            通过完整验证的GoldMany客户可以获得一个特别的迎新赠金-&quot;迎新赠金30 USD&quot;. 计入这个 赠金计划获取额外的初始交易资金.</p>
                    </div>
                    <p class="button_holder">
                        <a class="btn_link" href="https://my.cn.roboforex.com/cs/operations/deposit-funds/"
                           style="text-decoration: none;" target="_blank"><span>获得奖励</span>
                        </a>
                        <a class="btn_link" href="/operations/bonuses-promotions/30-usd-welcome-bonus/"
                           style="text-decoration: none;" target="_blank"><span>阅读更多</span>
                        </a>
                    </p>
                </div>
            </div>
            <div class="text_block contentall content2"
                 style="background: url(/images/operations/tradable_card.png); ">
                <div class="text_block-inner">
                    <div class="text_block-content">
                        <h2 style="text-align: center;">
                            可交易的奖金 50％</h2>
                        <p>
                            GoldMany可交易赠金在您账户净值低于赠金额时不会被取消，即是可杠亏损的赠金。
                            参加此活动可获得最多50%的可交易赠金，最高可达6,000美元，该赠金在外汇交易中可自由使用不受限制。
                        </p>
                    </div>
                    <p class="button_holder">
                        <a class="btn_link" href="https://my.cn.roboforex.com/cs/operations/deposit-funds/"
                           style="text-decoration: none;" target="_blank"><span>获得奖励</span>
                        </a>
                        <a class="btn_link" href="/operations/bonuses-promotions/tradable-bonus/"
                           style="text-decoration: none;"
                           target="_blank"><span>阅读更多</span>
                        </a>
                    </p>
                </div>
            </div>
            <div class="text_block contentall content2"
                 style="background: url(/images/operations/bonuses-115.png); ">
                <div class="text_block-inner">
                    <div class="text_block-content">
                        <h2 style="text-align: center; font-weight: bold; font-size: 16px;">
                            存款赠金最高至115%</h2>
                        <p>
                            入金获取<a href="/operations/forex-bonus-deposit/" target="_blank">
                                存款</a>赠金:
                            50%, 100%, 甚至115%的存款赠金. 入金越多,赠金越多. 您总共可以获得 高至30,000 USD的赠金!
                        </p>
                    </div>
                    <p class="button_holder">
                        <a class="btn_link" href="https://my.cn.roboforex.com/cs/operations/deposit-funds/"
                           style="text-decoration: none;" target="_blank"><span>获得奖励</span>
                        </a>
                        <a class="btn_link" href="/operations/bonuses-promotions/115-deposit-bonus/"
                           style="text-decoration: none;" target="_blank"><span>阅读更多</span>
                        </a>
                    </p>
                </div>
            </div>
            <div class="text_block contentall content4"
                 style="background: url(/images/operations/leverage-1000-block.png); ">
                <div class="text_block-inner">
                    <div class="text_block-content">
                        <h2 style="text-align: center; font-weight: bold; font-size: 16px;">
                            杠杆高达 1:1000</h2>
                        <p>
                            GoldMany的客户（MT4美分和标准账户以及CopyFX账户）可选择更高的杠杆比例：1:700，1:800，和1:1000。
                            您可以在有持仓的情况下更改您的账户杠杆至更大的数值.</p>
                    </div>
                    <p class="button_holder">
                        <a class="btn_link" href="https://my.cn.roboforex.com/cs/trading-account/change-leverage/"
                           style="text-decoration: none;" target="_blank"><span>更改杠杆</span>
                        </a>
                        <a class="btn_link" href="/operations/bonuses-promotions/1000-up-leverage/"
                           style="text-decoration: none;" target="_blank"><span>阅读更多</span>
                        </a>
                    </p>
                </div>
            </div>
            <div class="text_block contentall content3"
                 style="background: url(/images/operations/comission-0-block.jpg);">
                <div class="text_block-inner">
                    <div class="text_block-content">
                        <h2 style="text-align: center; font-weight: bold; font-size: 16px;">
                            账户入金免手续费</h2>
                        <p>
                            客户对交易账户入金完全免手续费。入金时请优先考虑支付方式的便利而无需担心转账手续费用。</p>
                    </div>
                    <p class="button_holder">
                        <a class="btn_link" href="https://my.cn.roboforex.com/cs/operations/deposit-funds/"
                           style="text-decoration: none;" target="_blank"><span>存款</span>
                        </a>
                        <a class="btn_link" href="/operations/bonuses-promotions/commission-free/"
                           style="text-decoration: none;" target="_blank"><span>阅读更多</span>
                        </a>
                    </p>
                </div>
            </div>
            <div class="text_block contentall content3"
                 style="background: url(/images/operations/free-withdrawal_card.png);">
                <div class="text_block-inner">
                    <div class="text_block-content">
                        <h2 style="text-align: center;">
                            无手续费出金</h2>
                        <p>
                            每月两次无手续费出金! 每月的第一和第三个周二,GoldMany给予客户出金补偿.</p>
                    </div>
                    <p class="button_holder">
                        <a class="btn_link"
                           href="/operations/bonuses-promotions/free-withdrawal/"
                           style="text-decoration: none;" target="_blank"><span>阅读更多...</span>
                        </a>
                    </p>
                </div>
            </div>
            <div class="text_block contentall content4"
                 style="background: url(/images/operations/percents.png); ">
                <div class="text_block-inner">
                    <div class="text_block-content">
                        <h2 style="text-align: center;">
                            最高至账户结余的10%返息</h2>
                        <p>
                            您真实交易账号资金可为您带来额外的收益帮助您在通货膨胀时保证资金安全.在加入&quot;最高至账户结余10%&quot;的计划后,您将以账户结余年率的形式获得月付的收益.</p>
                    </div>
                    <p class="button_holder">
                        <a class="btn_link rw-tip_holder" href="https://my.cn.roboforex.com/cs/register/"
                           style="text-decoration: none; margin: 3px 1px;" target="_blank"
                           title=""><span>加入计划</span>
                        </a>
                        <a class="btn_link" href="/operations/bonuses-promotions/up-to-10-percents-on-account-balance/"
                           style="text-decoration: none; margin: 3px 1px;"
                           target="_blank"><span>阅读更多</span>
                        </a>
                    </p>
                </div>
            </div>
            <div class="text_block contentall content4"
                 style="background: url(/images/operations/rebates-block.jpg); ">
                <div class="text_block-inner">
                    <div class="text_block-content">
                        <h2 style="text-align: center; font-weight: bold; font-size: 16px;">
                            外汇返点 (Cashback)服务</h2>
                        <p>
                            外汇&quot;返点 (Cashback)服务&quot;为MetaTrader4
                            cTrader类型账户的客户降低交易成本提供了最为直接的机会!
                            &quot;返点&quot;服务所得到的奖励资金,客户可以任意使用,没有任何限制.
                        </p>
                    </div>
                    <p class="button_holder">
                        <a class="btn_link rw-tip_holder" href="https://my.cn.roboforex.com/cs/register/"
                           style="text-decoration: none; margin: 3px 1px;" target="_blank"><span>加入计划</span></a> <a
                                class="btn_link" href="/operations/rebate/"
                                style="text-decoration: none; margin: 3px 1px;" target="_blank">
                            <span>阅读更多</span>
                        </a>
                    </p>
                </div>
            </div>
            <div class="text_block contentall"
                 style="background: url(/images/operations/vip_bonuses-promotions.png); ">
                <div class="text_block-inner">
                    <div class="text_block-content">
                        <h2 style="text-align: center; font-weight: bold; font-size: 16px;">
                            &quot;VIP 客户&quot;计划</h2>
                        <p>
                            成为GoldManyVIP客户独享尊贵服务：入金/出金免手续费，更优惠的&quot;返点 (Cashback)&quot;服务，
                            个性化的客服服务，注册代理账户便有机会成为&quot;专家&quot;级代理。
                        </p>
                    </div>
                    <p class="button_holder">
                        <a class="btn_link" href="/operations/bonuses-promotions/vip-client/"
                           style="text-decoration: none;" target="_blank"><span>了解更多</span></a>
                    </p>
                </div>
            </div>
            <div class="text_block contentall content4"
                 style="background: url(/images/operations/vps.png); ">
                <div class="text_block-inner">
                    <div class="text_block-content">
                        <h2 style="text-align: center;">
                            免费的VPS服务器</h2>
                        <p>
                            远程交易服务器可让您的智能软件交易不间断运行，并能全天候通过移动设备连接您的交易终端。
                            如您的账户净值多于300美元，便可申请免费VPS服务器。
                        </p>
                    </div>
                    <p class="button_holder">
                        <a class="btn_link" href="https://my.cn.roboforex.com/cs/profile/vps2/"
                           style="text-decoration: none;" target="_blank"><span>VPS服务器申请</span>
                        </a>
                        <a class="btn_link" href="/operations/forex-vps/"
                           style="text-decoration: none;" target="_blank"><span>阅读更多</span>
                        </a>
                    </p>
                </div>
            </div>
            <div class="text_block contentall content4"
                 style="background: url(/images/operations/auto_withdrawal.png); ">
                <div class="text_block-inner">
                    <div class="text_block-content">
                        <h2 style="text-align: center;">
                            自动出金</h2>
                        <p>
                            分分钟就可以出金？GoldMany非常考虑到客户宝贵的时间, 所以70%的出金申请都请 自动审核.
                            您的出金申请既可以在工作时间审核, 也可以在工作时间外如夜晚, 周末,
                            节假日审核.
                        </p>
                    </div>
                    <p class="button_holder">
                        <a class="btn_link"
                           href="/operations/deposit-withdraw/auto-withdrawal/"
                           style="background: #E9504B;text-decoration: none;" target="_blank">
                            <span>阅读更多</span>
                        </a>
                    </p>
                </div>
            </div>
            <script type="text/javascript">
                function showVerBlock(id) {
                    $('.text_block').css("display", "none");
                    var show = $('.contentall').css('display') == 'none' ? true : false;
                    $('.js-faq-btn').removeClass('btn_selected');
                    if (show) {
                        $('.content' + id).fadeIn(400);
                        $('.content' + id).css("display", "inline-block");
                        $('.js-faq-btn' + id).addClass('btn_selected');
                    }
                }
                function showAllBlock(id) {
                    $('.text_block').css("display", "none");
                    // var show = $('.contentall').css('display') == 'none' ? true : false;
                    // $('.text_block').hide();
                    $('.js-faq-btn').removeClass('btn_selected');
                    $('.text_block').fadeIn(400);
                    $('.content' + id).css("display", "inline-block");
                    $('.js-faq-btn' + id).addClass('btn_selected');
                }
                $(document).ready(function () {
                    var carousel = $("#carousel").featureCarousel({
                        carouselSpeed: 500,
                        trackerIndividual: false,
                        sidePadding: 0,
                        autoPlay: 4000,
                    });

                    $("#but_prev").click(function () {
                        carousel.prev();
                    });
                    $("#but_pause").click(function () {
                        carousel.pause();
                    });
                    $("#but_start").click(function () {
                        carousel.start();
                    });
                    $("#but_next").click(function () {
                        carousel.next();
                    });
                });

                $(document).ready(function () {
                    $('.rw-tip_holder, .infobanner_container, #h-offer, #tu-registration').mouseenter(
                            function () {
                                var rw_title = '外汇交易涉及高风险, 可能导致失去您的整个投资.';
                                $(this).attr('title', rw_title);
                            })
                            .hover(
                                    function () {
                                        var title = $(this).attr('title');
                                        $(this).data('rw-tip_text', title).removeAttr('title');
                                        $('<p class="rw-tip"></p>').text(title).appendTo('body').fadeIn('slow');
                                    },
                                    function () {
                                        $(this).attr('title', $(this).data('rw-tip_text'));
                                        $('.rw-tip').remove();
                                    })
                            .mousemove(
                                    function (e) {
                                        var mousex = e.pageX + 20;
                                        var mousey = e.pageY + 20;
                                        $('.rw-tip').css({top: mousey, left: mousex})
                                    });
                });
            </script>
        </div>
    </div>

    <div id="right">
        <ul id="r-menu">
            <li class="selected">
                <a>赠金,计划和活动</a>


                <ul>
                    <li>
                        <a href="/operations/bonuses-promotions/road-to-dakar-2017/">"达喀尔之路"活动</a>
                    </li>
                    <li>
                        <a href="/operations/bonuses-promotions/30-usd-welcome-bonus/">迎新赠金 30 USD</a>
                    </li>
                    <li>
                        <a href="/operations/bonuses-promotions/tradable-bonus/">可交易的奖金 50％</a>
                    </li>
                    <li>
                        <a href="/operations/bonuses-promotions/forex-bonus-deposit/">经典存款赠金最高至115%</a>
                    </li>
                    <li>
                        <a href="/operations/bonuses-promotions/commission-free/">出入金无手续费</a>
                    </li>
                    <li>
                        <a href="/operations/bonuses-promotions/free-withdrawal/">免费出金</a>
                    </li>
                    <li>
                        <a href="/operations/bonuses-promotions/up-to-10-percents-on-account-balance/">最高至账户结余的10%</a>
                    </li>
                    <li>
                        <a href="/operations/bonuses-promotions/vip-client/">"VIP"客户计划</a>
                    </li>
                    <li>
                        <a href="/operations/bonuses-promotions/tesla-goldmany/">GoldMany超级跑车</a>
                    </li>
                </ul>
            </li>
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