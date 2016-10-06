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


    <title>反馈建议</title>
    <meta property="og:title" content="反馈建议" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="/about/feedback/" />
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
        <a href="/" >首页</a>/<a href="/about/" >关于GoldMany</a>/反馈建议
    </div>

    <div id="left">
        <h1>反馈建议</h1>
        <div></div>

        <div id="new_post">
            <div id="faq-form-notes">
                <p>任何问题，请联系我们!</p>
            </div>

            <div class="dq-validate-errors"></div>
            <form method="post" id="form_post" class="form faq-form" enctype="multipart/form-data" action="" target="_self">
                <table>
                    <tr>
                        <th><label class="required">姓名 <span>*</span></label></th>
                        <td><input class="fText" name="send[name]" size="25" type="text" value=""></td>
                    </tr>
                    <tr>
                        <th><label class="required">电子邮件 <span>*</span></label></th>
                        <td><input class="fText" name="send[email]" size="25" type="text" value=""></td>
                    </tr>
                    <tr>
                        <th><label class="required">问题 <span>*</span></label></th>
                        <td><textarea warp=soft rows=7 cols=50 name=send[title]></textarea></td>
                    </tr>
                    {{--<tr id="faq-code">--}}
                        {{--<th><img src="/kcaptcha.php?temp=572" style="cursor:pointer;" onclick="var time = new Date(); this.src = '/kcaptcha.php?temp='+time.getMilliseconds();" /></th>--}}
                        {{--<td>--}}
                            {{--<input id="ff-code" class="fText" name="send[captcha]" value="" />--}}
                            {{--<label for="ff-code">键入字符<br/>您看到下面的图片</label>--}}
                        {{--</td>--}}
                    {{--</tr>--}}

                    <tr>
                        <th>&nbsp;</th>
                        <td class="c-center">
                            <input type="button" class="b_send fSubmit" value="发送" onclick="form_validate();">
                        </td>
                    </tr>
                </table>
            </form>
        </div>

    </div>

    <script type="text/javascript">
        var registration_form_state = 1;
        var err_request = '数据上传时发生一个错误';

        function form_validate()
        {
            var selector = '#form_post';
            var form = $(selector);
            var validate_path = '/feedback/validate/';

            if (registration_form_state == 0) return;

            registration_form_state = 0;
            JsHttpRequest.query(validate_path, form.serialize(),
                    function(result, errors){
                        if (result && result.res == 0){
                            registration_form_state = 1;
                            $.dqValidate('#form_post', result);
                        } else if (result && result.res == 1){
                            $('#new_post').html(result.text);
                        } else {
                            registration_form_state = 1;
                        }
                    }, true
            );
        }
    </script>


    <div id="right">
        <ul id="r-menu">
            <li >
                <a href="/about/why-GoldMany/"  >为什么选择GoldMany</a>
            </li>
            <li >
                <a href="/about/mission/"  >公司宗旨</a>
            </li>
            <li >
                <a href="/about/business-model/"  >商业模式</a>
            </li>
            <li >
                <a href="/about/liquidity-providers/"  >流动性</a>
            </li>
            <li >
                <a href="/about/regulation/"  >公司监管</a>
            </li>
            <li >
                <a href="/about/news/"  >公司新闻</a>
            </li>
            <li class="selected">
                <a   >反馈建议</a>
            </li>
            <li >
                <a href="/about/faq/"  >常见问题</a>
            </li>
            <li >
                <a href="/about/sponsorship/"  >锦标赛</a>
            </li>
            <li >
                <a href="/about/exhibition/"  >GoldMany 展览会</a>
            </li>
            <li >
                <a href="/about/awards/"  >授予奖项</a>
            </li>
            <li >
                <a href="/about/media/"  >GoldMany 媒体</a>
            </li>
            <li >
                <a href="/about/contacts/"  >联系我们</a>
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