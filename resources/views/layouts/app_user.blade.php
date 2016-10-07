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
                <a href="/analytics/economic-calendar/"  >外汇日历</a>


            </li>
            <li  class="selected" >
                <a>外汇分析 外汇预测</a>


            </li>
            <li >
                <a
                        {{--href="https://my.cn.roboforex.com/cs/analytics"  --}}
                        target="_blank"  >GoldMany分析中心</a>


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

</body>
</html>