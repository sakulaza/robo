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


    <title>资金安全</title>
    <meta property="og:title" content="资金安全"/>
    <meta property="og:description" content=""/>
    <meta property="og:url" content="http://cn.roboforex.com/operations/security/"/>
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
        <a href="/">首页</a>/<a href="/operations/">交易服务</a>/资金安全
    </div>

    <link rel="stylesheet" href="/css/page.css" type="text/css"/>

    <div>
        <style type="text/css">
            .ad-steps {
                display: inline-block;
                vertical-align: top;
                width: 290px;
                padding: 20px;
                box-sizing: border-box;
                border-radius: 5px;
            }

            .results-btn {
                height: 30px;
                line-height: 30px;
                font-size: 14px;
                text-decoration: none;
                cursor: pointer;
                display: inline-block;
                font-size: 15px;
                margin-bottom: 0;
                padding: 2px 15px;
                text-align: center;
                vertical-align: middle;
                background: #215682;
                border: 1px solid #215682;
                color: #fff;
                width: 236px;
                border-radius: 20px;
                margin-top: 20px;
                box-shadow: 0px 12px 9px -13px rgba(0, 0, 0, 0.74902);
                -webkit-transition: all 200ms linear;
                -moz-transition: all 200ms linear;
                -o-transition: all 200ms linear;
                transition: all 200ms linear;
            }

            .results-btn:hover {
                opacity: 0.8;
            }

            .col-2_sm {
                text-align: left;
                width: 263px;
                display: inline-block;
                vertical-align: top;
                margin: 0 15px;
            }

            #card_wrapper {
                position: relative;
                background-image: url(http://www.roboforex.com/files/filemanager/image3/structure/operations/security/90105e2bda.png);
                background-repeat: no-repeat;
                background-position: 100% 100%;
            }

            .card {
                margin: 20px 10px;
                width: 270px;
                display: inline-block;
                vertical-align: top;
            }

            .card-num {
                text-shadow: 0 1px 3px rgb(0, 0, 0);
                width: 30px;
                height: 30px;
                font-size: 17px;
                line-height: 30px;
                text-align: center;
                display: inline-block;
                vertical-align: top;
                background: #005799;
                border-radius: 50%;
                color: #fff;
                margin-right: 10px;
                margin-bottom: 0;
            }

            .card-title {
                display: inline-block;
                width: 220px;
                font-size: 12px;
            }

            .card-title span {
                font-weight: bold;
                display: block;
                font-size: 13px;
            }

            .card .fa {
                -webkit-transition: all 200ms linear;
                -moz-transition: all 200ms linear;
                -o-transition: all 200ms linear;
                transition: all 200ms linear;
            }

            .card-sep {
                width: 100%;
                opacity: 0.5;
                margin-left: -10px;
                margin-bottom: 20px;
            }

            .contacts_holder {
                text-align: justify;
                background: #F5F4F4;
                padding: 20px;
                margin-bottom: 30px;
                margin-top: -20px;
                position: relative;
            } </style>
        <style type="text/css">
            @import url("/css/font-awesome.min.css");
        </style>
        <h1>
            资金安全</h1>
        <div style="position: relative; margin-bottom: 30px;">
            <img src="http://www.roboforex.com/files/filemanager/image3/structure/operations/security/security-banner.png"
                 style="width: 930px;"/>
            <div style="text-align: justify;position: absolute;width: 330px;bottom: 10px;
            left: 20px;padding: 20px;background: rgb(255, 255, 255);border: 1px solid #e3e3e3;
            box-shadow: 0px 15px 60px -20px rgba(0, 0, 0, 0.43);">
                <p>
                    <span style="color: #005799; font-weight: bold;">GoldMany (CY) Ltd</span>,
                    为GoldMany集团一员, 注册于塞浦路斯.
                    公司收到塞浦路斯证券交易委员会的监管
                    (<strong style="border-bottom: 1px dotted;cursor: help;" target="_blank"
                                                title="CySEC为塞浦路斯的金融监管机构,
                                                根据欧盟金融工具法规其为欧洲监管的一部分.
                                                塞浦路斯证券交易委员会有权向公司颁发在欧盟进行金融活动的执照,.">
                        CySEC</strong>),
                    执照号191/13, 并且同时注册于
                    <strong style="border-bottom: 1px dotted;cursor: help;" target="_blank"
                                               title="英国FCA是英国金融服务领域的独立监管机构, 其
                                               致力于稳定金融市场保护客户权益.">
                        英国FCA</strong>,
                    编号608962.</p>
                <p style="text-align: center;margin-bottom: 10px;margin-top: 30px;">
                    <a class="results-btn rw-tip_holder" href="https://my.cn.roboforex.com/cs/register/eu/"
                       style="text-decoration: none;color: #fff;margin-top: 0;width: 200px;
                       height: 26px;line-height: 26px;"
                       target="_blank" title="外汇交易涉及高风险, 可能导致失去您的整个投资"><span>注册</span></a>
                </p>
            </div>
        </div>
        <h3 style="text-align: center;color: #005799;">
            GoldMany如何保证您的资金安全？</h3>
        <p style="text-align: center; margin-bottom: 5px;">
            <img src="http://my.roboforex.com/files/filemanager/image3/letters/separator-eq.png"
                 style="width: 90%; height: 35px;margin: 25px auto 30px; margin-bottom: 0px;opacity: 0.3;"/>
        </p>
        <div id="card_wrapper">
            <div class="card">
                <p class="card-num" style="background: #DBF1FF;">
                    1</p>
                <div class="card-title">
                    <p style="margin-bottom: 10px;">
                        <span>分离账户</span></p>
                    <div>
                        <p style="margin-bottom: 0;">
                            GoldMany客户资金与公司资金分开存储于不同的账户中. 这保证了资金免受非法欺诈骗行为的影响.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <p class="card-num" style="background: #C0E6FE;">
                    2</p>
                <div class="card-title">
                    <p style="margin-bottom: 10px;">
                        <span>与大银行合作</span></p>
                    <div>
                        <p style="margin-bottom: 0;">
                            我们其中之一的合作伙伴巴克莱银行PLC为英国历史最悠久最著名的银行之一. 这项合作让
                            <nobr>GoldMany (CY) Ltd</nobr>
                            的客户能放心安全的进行低信誉风险的投资.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <p class="card-num" style="background: #99D0F3;">
                    3</p>
                <div class="card-title">
                    <p style="margin-bottom: 10px;">
                        <span>STP&mdash;订单执行</span></p>
                    <div>
                        <p style="margin-bottom: 0;">
                            公司所有的账户都使用基于STP技术的桥接算法, 这使得客户订单都是以无柜台交易的模式执行的.
                            所有交易都在经纪商没有任何干预的情况下自动发送给流动性提供商,
                            从而让交易者和公司避免利益冲突.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <p class="card-num" style="background: #5AA4D3;">
                    4</p>
                <div class="card-title">
                    <p style="margin-bottom: 10px;">
                        <span>投资者赔偿基金会员</span></p>
                    <div>
                        <p style="margin-bottom: 0;">
                            GoldMany (CY) Ltd为塞浦路斯投资者赔偿基金的一名会员.
                            此基金在公司无法自行支付赔偿时能为客户提供了资金赔偿. 每位客户最高可获得2万欧元的赔偿.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <p class="card-num" style="background: #1270B3;">
                    5</p>
                <div class="card-title">
                    <p style="margin-bottom: 10px;">
                        <span>监管</span></p>
                    <div>
                        <p style="margin-bottom: 0;">
                            GoldMany(CY)Ltd是一家欧洲外汇经纪商, 受到CySEC的监管, 执照号.191/13.
                            此执照使得GoldMany需遵循高标准的服务并且保持透明度以及公司所有活动的公开化.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <p class="card-num" style="background: #005799;">
                    6</p>
                <div class="card-title">
                    <p style="margin-bottom: 10px;">
                        <span>账户负值保护机制</span></p>
                    <div>
                        <p>
                            受益于GoldMany的赔偿机制，客户在账户出现负值时公司将会对账户进行清零处理，多一层保障.</p>
                        <a href="http://cn.roboforex.com/operations/negative-balance-protection/"
                           target="_blank">阅读更多...
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <p style="text-align: center;margin-bottom: 60px;margin-top: 40px;">
            <a class="results-btn rw-tip_holder" href="https://my.cn.roboforex.com/cs/register/eu/"
               style="text-decoration: none;color: #fff;margin-top: 0;" target="_blank"
               title="">
                <span>注册</span></a></p>
        <h3 style="text-align: center;color: #005799;">
            GoldMany (CY) Ltd, Limassol, Cyprus</h3>
        <iframe frameborder="0" height="200" marginheight="0" marginwidth="0" scrolling="no"
                src="http://www.openstreetmap.org/export/embed.html?bbox=33.066197633743286%2C34.687013314812425%2C33.0732786655426%2C34.69083316687489&amp;layer=mapnik&amp;marker=34.68892326287691%2C33.069738149642944&amp;wmode=transparent&amp;wmode=transparent&amp;wmode=transparent&amp;wmode=transparent&amp;wmode=transparent"
                style="opacity: 0.6;" width="930" wmode="Opaque">

        </iframe>
        <div class="contacts_holder">
            <p style="text-align: center;position: absolute;bottom: 10px;right: 10px;background: #fff;
            padding: 7px;margin-bottom: 0;">
                <a href="http://www.roboforex.com/files/filemanager/image3/structure/about/contacts/cy_office_1.JPG"
                   rel="image_group" style="margin-right: 2px;">
                    <img src="http://www.roboforex.com/files/filemanager/image3/structure/about/contacts/cy_office_1_s.jpg"
                            style="height: 100px;"/>
                </a>
                <a href="http://www.roboforex.com/files/filemanager/image3/structure/about/contacts/cy_office_2.JPG"
                        rel="image_group" style="margin-right: 2px;">
                    <img src="http://www.roboforex.com/files/filemanager/image3/structure/about/contacts/cy_office_2_s.jpg"
                            style="height: 100px;"/>
                </a>
                <a href="http://www.roboforex.com/files/filemanager/image3/structure/about/contacts/cy_office_3.JPG"
                        rel="image_group">
                    <img src="http://www.roboforex.com/files/filemanager/image3/structure/about/contacts/cy_office_3_s.jpg"
                            style="height: 100px;"/>
                </a>
            </p>
            <strong>商业地址</strong>: Soboh House 377, 28th October Street, office #1, CY-3107 Limassol, Cyprus<br/>
            <strong>注册地址</strong>: 4 Modestou Panteli, office 005, Mesa Geitonia, PC 4003, Limassol, Cyprus<br/>
            <strong>邮政信箱</strong>: 54176, CY-3721 Limassol, Cyprus<br/>
            <strong>电话</strong>: +357 25 262660<br/>
            <strong>邮箱</strong>:&nbsp;<a href="mailto:info@goldmany.com">info@goldmany.com</a><br/>
            <br/>
            <strong>开放时间</strong>: 从上午 9点到下午6点 (UTC+2)<br/>
            <br/>
            <strong>注册号</strong>: HE310464<br/>
            <strong>纳税人识别号</strong>: 12310464I
        </div>
        <div style="border: 1px solid #F5F4F4;padding: 30px;margin-bottom: 20px;">
            <h3 style="margin-top: 0;">
                有用链接:</h3>
            <ul style="list-style-type: none; padding-left: 5px; margin-bottom: 0;">
                <li style="margin-bottom: 10px;">
                    <i class="fa fa-angle-double-right" style="width: 15px;">&nbsp;</i> <a
                            href="http://cn.roboforex.com/operations/security/mobile-verification/"
                            target="_blank">通过手机验证</a>
                </li>
                <li style="margin-bottom: 10px;">
                    <i class="fa fa-angle-double-right" style="width: 15px;">&nbsp;</i> <a
                            href="http://cn.roboforex.com/operations/security/webcam-verification/"
                            target="_blank">用摄像头拍照</a>
                </li>
                <li>
                    <i class="fa fa-angle-double-right" style="width: 15px;">&nbsp;</i> <a
                            href="http://cn.roboforex.com/operations/security/2-step-authentication/"
                            target="_blank">两步验证</a>
                </li>
            </ul>
        </div>
        <script type="text/javascript">
            $(function () {
                $('a[href*=#]:not([href=#])').click(function () {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                            location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });
            });
        </script>
        <script type="text/javascript">
            function showFaqSText(id) {
                var show = $('#faq-s_text' + id).css('display') == 'none' ? true : false;
                $('.fl-answer').hide();

                if (show) {
                    $('#faq-s_text' + id).fadeIn();
                } else {
                    $('#faq-s_text' + id).hide();
                }
            }
        </script>
    </div>
    <br/>


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