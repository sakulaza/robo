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


    <title>会员中心</title>
    <meta property="og:title" content="会员中心"/>
    <meta property="og:description" content=""/>
    <meta property="og:url" content="/trading-accounts/account-management/"/>
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
        <a href="/">首页</a>/<a href="/trading-accounts/standard/">账户</a>/会员中心
    </div>


    <link rel="stylesheet" href="/themes/rbforex/css/page.css" type="text/css"/>

    <style>

        .section-title {
            /*  position: relative;*/
            color: #4c7dbb;
            display: inline-block;
            margin-top: 0;
            margin-bottom: 15px;
            padding-bottom: 13px;
            border-bottom: 1px solid #4c7dbb;
        }

        /*.section-title:after {
          position: absolute;
          bottom: 0px;
          left: 0;
          content: "";
          width: 230px;
          height: 1px;
          background: #4c7dbb;
        }*/

        .features-title {
            color: #4c7dbb;
            text-align: center;
            margin-bottom: 40px;
        }

        .banner {
            position: relative;
            margin-bottom: 50px;
        }

        .banner img {
            width: 100%;
        }

        .banner .register {
            position: absolute;
            bottom: 32px;
            left: 20px;
            width: 370px;
            padding: 20px;
            background: #fff;
            box-sizing: border-box;
            text-align: justify;
            box-shadow: 0px 10px 24px 0px rgba(50, 50, 50, 0.3);
        }

        .banner .register p {
            margin-bottom: 30px;
        }

        .banner .register p span {
            color: #4c7dbb;
            font-weight: bold;
        }

        .banner .register a.results-btn {
            display: block;
            margin: 0 auto;
            margin-bottom: 10px;
            width: 240px;
            padding: 6px 0px;
            text-decoration: none;
            cursor: pointer;
            font-size: 13px;
            text-align: center;
            vertical-align: middle;
            background: #215682;
            border: 1px solid #215682;
            color: #fff;
            border-radius: 15px;
            box-shadow: 0px 12px 9px -13px rgba(0, 0, 0, 0.74902);
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .features {
            margin-bottom: 80px;
        }

        .features .features__content {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-justify-content: space-around;
            -ms-flex-pack: distribute;
            justify-content: space-around;
            margin-bottom: 30px;
        }

        .features .features__content:last-child {
            margin-bottom: 0;
        }

        .features .features__content .features__content-item {
            width: 30%;
            text-align: center;
        }

        .features .features__content img {
            padding-bottom: 10px;
            border-bottom: 1px solid #c3c3c3;
        }

        .features .features__content h3 {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .features .features__content a {
            text-transform: uppercase;
            text-decoration: none;
        }

        .features .features__content a:hover {
            text-decoration: underline;
        }

        .for-trade {
            border: 2px solid #f4f4f4;
            margin-bottom: 100px;
        }

        .for-trade .for-trade__left,
        .for-trade .for-trade__right {
            display: inline-block;
            vertical-align: top;
            position: relative;
            height: 211px;
        }

        .for-trade .for-trade__left {
            width: 360px;
        }

        .for-trade .for-trade__left img {
            vertical-align: bottom;
            height: 257px;
            position: absolute;
        }

        .for-trade .for-trade__right {
            width: 550px;
            box-sizing: border-box;
            padding: 25px 30px 0 40px;
        }

        .for-trade .for-trade__right h3 {
            color: #4c7dbb;
            display: inline-block;
            margin-bottom: 15px;
            padding-bottom: 13px;
        }

        .for-trade .for-trade__right p {
            text-align: justify;
            margin-bottom: 15px;
        }

        .for-trade .for-trade__right p:last-child {
            margin-bottom: 0;
        }

        .education {
            padding-bottom: 80px;
            position: relative;
        }

        .education > p {
            padding-bottom: 35px;
        }

        .education .education__content {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .education .education__content:before {
            position: absolute;
            content: "";
            width: 530px;
            height: 52px;
            top: 67px;
            left: 240px;
            background: url(/images/education-line.png) 0 0 no-repeat;
        }

        .education .education__content .education__content-item {
            width: 290px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
            border: 1px solid #f7f7f7;
            box-shadow: 0px 30px 124px rgba(0, 0, 0, 0.1);
        }

        .education .education__content .education__content-item img {
            margin-right: 15px;
        }

        .education .education__content .education__content-item p {
            margin-bottom: 0;
        }

        .features-bottom .features-bottom__row {
            margin-bottom: 40px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .features-bottom .features-bottom__row .features-bottom__item {
            width: 31%;
            padding: 0 10px;
            box-sizing: border-box;
            position: relative;
        }

        .features-bottom .features-bottom__row .features-bottom__item .features-bottom__item-number {
            position: absolute;
            top: -18px;
            opacity: 0.12;
            font-size: 50px;
            letter-spacing: 3px;
        }

        .features-bottom .features-bottom__row .features-bottom__item h4 {
            color: #4c7dbb;
            /*position: relative;*/
            padding-bottom: 10px;
            font-size: 0.9em;
            border-bottom: 1px solid #4c7dbb;
        }

        /*
        .features-bottom .features-bottom__row .features-bottom__item h4:after {
          position: absolute;
          content: "";
          bottom: 0;
          left: 0;
          width: 240px;
          height: 1px;
          background: #4c7dbb;
        }
        */

        .features-bottom .features-bottom__row .features-bottom__item p {
            text-align: justify;
            margin-bottom: 0;
        }

        .footer-register {
            margin-bottom: 30px;
        }

        .footer-register a {
            color: #4c7dbb;
        }

        .footer-register a.results-btn {
            display: block;
            margin: 0 auto;
            margin-bottom: 10px;
            width: 240px;
            padding: 6px 0px;
            text-decoration: none;
            cursor: pointer;
            font-size: 13px;
            text-align: center;
            vertical-align: middle;
            background: #215682;
            border: 1px solid #215682;
            color: #fff;
            border-radius: 15px;
            box-shadow: 0px 12px 9px -13px rgba(0, 0, 0, 0.74902);
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }
    </style>

    <h1> 会员中心</h1>
    <div class="page-wrapper">

        <div class="features">
            <h2 class="features-title"> GoldMany会员中心特性:</h2>
            <div class="features__content">
                <div class="features__content-item">
                    <img alt=""
                         src="http://www.roboforex.com/files/filemanager/image3/structure/account-management/features-1.png">
                    <h3> 结余操作</h3>
                    <p> GoldMany为客户的入金进行补偿. 除此之外,您可以无须支付手续费即在您任意类型的账号间进行资金内转.</p>
                    <a href="/operations/deposit-withdraw/" target="_blank">阅读更多</a>
                </div>
                <div class="features__content-item">
                    <img alt=""
                         src="http://www.roboforex.com/files/filemanager/image3/structure/account-management/features-2.png">
                    <h3> 个人信息</h3>
                    <p> 在&quot;个人信息&quot;版块,您可以查看并且更改一些在注册时所提供的信息. 我们通过短信和备用码的方式让您的会员中心
                        更加安全地来保障您信息和资金的安全.
                    </p>
                    <a href="/operations/security/2-step-authentication/"
                       target="_blank">阅读更多</a>
                </div>
                <div class="features__content-item"><img alt=""
                                                         src="http://www.roboforex.com/files/filemanager/image3/structure/account-management/features-3.png">
                    <h3> 账号管理</h3>
                    <p> 对您会员中心里交易账号的完全控制:查看交易历史以及建仓, 开设新的账号,更改您的密码和杠杆.</p> <a
                            href="/trade-conditions/account-types/" target="_blank">阅读更多</a>
                </div>
            </div>
            <div class="features__content">
                <div class="features__content-item">
                    <img alt=""
                         src="http://www.roboforex.com/files/filemanager/image3/structure/account-management/features-4.png">
                    <h3> 赠金计划和活动</h3>
                    <p> 您可以在&quot;您的赠金&quot;,&quot;您的返点&quot;,以及&quot;最高至账户结余10%&quot;版块找到关于您获得的赠金,返点以及账户结余年息的完整信息.</p>
                    <a href="/operations/bonuses-promotions/" target="_blank">阅读更多</a></div>
                <div class="features__content-item">
                    <img alt="" src="http://www.roboforex.com/files/filemanager/image3/structure/account-management/features-5.png">
                    <h3> 代理市场推广材料</h3>
                    <p> 如果您已经是GoldMany的代理或正在考虑成为一名代理,您可以确信GoldMany会员中心将为您提供代理活动所需的多种工具.</p> <a
                            href="/forex-affiliate/help-partner/" target="_blank">阅读更多</a></div>
                <div class="features__content-item">
                    <img alt="" src="http://www.roboforex.com/files/filemanager/image3/structure/account-management/features-6.png">
                    <h3> 教学材料</h3>
                    <p> 教学视频可在&quot;您的外汇教学&quot;版块找到,除此之外,还有&quot;在线研讨会&quot;版块,您可以注册且参与公司所举办的这些在线研讨会.</p>
                    <a
                            {{--href="https://my.cn.roboforex.com/cs/profile/forex-education/" --}}
                       target="_blank">阅读更多</a>
                </div>
            </div>
        </div>

        <div class="features-bottom">
            <h2 class="features-title"> 9个最常被问的问题:</h2>
            <div class="features-bottom__row">
                <div class="features-bottom__item">
                    <div class="features-bottom__item-number"> 01</div>
                    <h4> 我如果更改会员中心密码?</h4>
                    <p> 您可以在会员中心&quot;
                        <a
                                {{--href="https://my.cn.roboforex.com/cs/profile/change-password/" --}}
                                target="_blank">更改密码</a>&quot;或&quot;<a
                                {{--href="https://my.cn.roboforex.com/cs/remind/" --}}
                                target="_blank">重置密码</a>&quot;版块进行更改.</p>
                </div>
                <div class="features-bottom__item">
                    <div class="features-bottom__item-number"> 02</div>
                    <h4> 我在哪更改我的个人信息?</h4>
                    <p> 您可以在&quot;
                        <a
                                {{--href="https://my.cn.roboforex.com/cs/profile/personal-information/"--}}
                                     target="_blank">个人信息</a>&quot;版块更改您的邮箱. 您需要联系我们的&quot;<a
                                {{--href="https://my.cn.roboforex.com/cs/help/add-a-ticket/" --}}
                                target="_blank">在线技术支持</a>&quot;来更改其它的个人信息.
                    </p>
                </div>
                <div class="features-bottom__item">
                    <div class="features-bottom__item-number"> 03</div>
                    <h4> 我如何添加提问?</h4>
                    <p> 您需在会员中心&quot;
                        <a
                                {{--href="https://my.cn.roboforex.com/cs/help/add-a-ticket/"--}}
                                        target="_blank">在线技术支持</a>&quot;版块填写一张特别的表格来添加提问给我们的在线技术支持.</p>
                </div>
            </div>
            <div class="features-bottom__row">
                <div class="features-bottom__item">
                    <div class="features-bottom__item-number"> 04</div>
                    <h4> 我如何验证我的银行卡？</h4>
                    <p> 验证您的银行卡,您需前往会员中心&quot;
                        <a
                                {{--href="https://my.cn.roboforex.com/cs/operations/bank-cards/" --}}
                                target="_blank">银行卡</a>
                        “版块上传您卡的每一面的照片或扫描图片.
                    </p>
                </div>
                <div class="features-bottom__item">
                    <div class="features-bottom__item-number"> 05</div>
                    <h4> 在哪里可以看见代理佣金?</h4>
                    <p> 代理佣金率可在&quot;
                        <a
                                {{--href="https://my.cn.roboforex.com/cs/partner-account/comission/"--}}
                                        target="_blank">代理佣金率</a>&quot;版块查看. 您所获得佣金的信息可以在&quot;<a
                                {{--href="https://my.cn.roboforex.com/cs/partner-account/commission-archive/"--}}
                                target="_blank">佣金明细</a>&quot;版块找到.</p>
                </div>
                <div class="features-bottom__item">
                    <div class="features-bottom__item-number"> 06</div>
                    <h4> 我可以更改杠杆吗？</h4>
                    <p> 是的,您可以. 您可以在&quot;
                        <a
                                {{--href="https://my.cn.roboforex.com/cs/trading-account/change-leverage/" --}}
                                target="_blank">更改杠杆</a>
                        &quot;版块开进行修改. 但是只有在账户内没有持仓的情况下才能够更改.
                    </p>
                </div>
            </div>
            <div class="features-bottom__row">
                <div class="features-bottom__item">
                    <div class="features-bottom__item-number"> 07</div>
                    <h4> 我如果能找回会员中心密码？</h4>
                    <p> 如果您忘记了会员中心密码,使用&quot;
                        <a
                                {{--href="https://my.cn.roboforex.com/cs/remind/" --}}
                                target="_blank">密码恢复</a>&quot;服务(您需要能够进入您的邮箱).
                        如果您的邮箱不可用,请联系&quot;在<a href="javascript:void(0)" id="hc-support"
                                               onclick="window.open('https://my.cn.roboforex.com/cs/livesupport/',
                                               'support','toolbar=no,resizable=yes,status=no,menubar=no,location=no,' +
                                                'width=600,height=500');">线技术支持</a>.
                    </p>
                </div>
                <div class="features-bottom__item">
                    <div class="features-bottom__item-number"> 08</div>
                    <h4> 我如何更改账号密码?</h4>
                    <p> 如果您忘记了您的账号密码, 前往&quot;
                        <a
                                {{--href="https://my.cn.roboforex.com/cs/trading-account/change-password/"--}}
                                                 target="_blank">更改密码</a>&quot;版块(您需要能够进入您的邮箱).
                        如果您的邮箱不可用,请联系&quot;在<a
                                href="javascript:void(0)" id="hc-support"
                                onclick="window.open('https://my.cn.roboforex.com/cs/livesupport/','support','toolbar=no,resizable=yes,status=no,menubar=no,location=no,width=600,height=500');">线技术支持</a>.
                    </p>
                </div>
                <div class="features-bottom__item">
                    <div class="features-bottom__item-number"> 09</div>
                    <h4> 如何更改我的手机号码？</h4>
                    <p> 如果您的手机号码还没有被验证,请在&quot;
                        <a
                                {{--href="https://my.cn.roboforex.com/cs/profile/sms-verification/"--}}
                                                  target="_blank">SMS短信验证</a>&quot;版块通过验证.
                        如果您的手机号码已经验证了并且现在可以使用,您可以在相同的地方进行更改. 如果有需要,请联系我们的&quot;<a href="javascript:void(0)"
                                                                                  id="hc-support"
                                                                                  onclick="window.open('https://my.cn.roboforex.com/cs/livesupport/','support','toolbar=no,resizable=yes,status=no,menubar=no,location=no,width=600,height=500');">在线技术支持</a>&quot;
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-register">
        <a class="results-btn rw-tip_holder"
           {{--href="https://my.cn.roboforex.com/cs/register/" --}}
           target="_blank">
            注册
        </a>
    </div>
    <br>


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