<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie8 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if IE 9 ]> <html class="no-js ie9 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <!--<![endif]-->

<head>
    @yield('meta')

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


    @yield('path')

    @yield('left')

    <div id="right">
        <ul id="r-menu">
            <li >
                <a href="/about/why-roboforex/"  >为什么选择RoboForex</a>


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
            <li  class="selected" >
                <a>公司新闻</a>


            </li>
            <li >
                <a href="/about/feedback/"  >反馈建议</a>


            </li>
            <li >
                <a href="/about/faq/"  >常见问题</a>


            </li>
        </ul>



        <ul id="r-icons">
            <li><a href="https://my.cn.roboforex.com/cs/register/" class="rw-tip_holder" id="fdi1">开设<br />真实账户</a></li>
            <li><a href="/trading-accounts/demo/" id="fdi2">开设<br />模拟账户</a></li>
            <li>
                <a href="https://my.cn.roboforex.com/cs/help/download-center/" class="modal-trigger" data-terminal="mt4" id="fdi3r">下载<br />METATRADER4</a>
            </li>
            <li class="last"><a href="https://my.cn.roboforex.com/cs/help/download-center/" id="fdi4" class="modal-trigger" data-terminal="mt4" onclick="gaqPush('Downloads Multiterminal','EXE'); ga('send', 'event', 'Download','click','Multiterminal');" target="_blank">下载MultiTerminal</a></li>
        </ul>
        <div class="risk-warning">风险警示: 外汇交易意味着您是自愿承担失去资金的可能风险.</div>


    </div>


    @include('user.partials.footer')

</div>



<script src="/js/linktracker.js?v=2"></script>


<script type="text/javascript" src="/js/ajax.js?v=1"></script>
<script type="text/javascript" src="/js/referral.js?v=1"></script>

</body>
</html>