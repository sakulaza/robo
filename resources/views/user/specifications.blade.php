 <!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie8 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if IE 9 ]> <html class="no-js ie9 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="通过合约细则，您可以了解到外汇 股票 指数 期货 贵金属 黄金 白银 能源 石油等交易品种" />
    <meta name="keywords" content="外汇 外汇交易 保证金交易 股票 指数 期货 CFD 能源 贵金属 点差 欧元 美元 澳元 英镑" />
    <meta name="w1-verification" content="117844634768" />


    <title>合约细则</title>
    <meta property="og:title" content="合约细则" />
    <meta property="og:description" content="通过合约细则，您可以了解到外汇 股票 指数 期货 贵金属 黄金 白银 能源 石油等交易品种" />
    <meta property="og:url" content="/trade-conditions/specifications/" />
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
        <a href="/" >首页</a>/<a href="/trade-conditions/account-types/" >条件</a>/合约细则
    </div>

    <h1>合约细则</h1>
    <div></div>

    <div class="specs">

        <div class="ss-caption">
            <a href="#fix-cent" class="active ss-fix-cent" rel="ss-fix-cent">
                <span class="ss-switch-sub"><span class="ss-switch-text">Fix</span></span>
            </a>
            <a href="#fix-stan" class="ss-fix-stan" rel="ss-fix-stan">
                <span class="ss-switch-sub"><span class="ss-switch-text">ECN</span></span>
            </a>
            <a href="#pro-cent" class="ss-pro-cent" rel="ss-pro-cent">
                <span class="ss-switch-sub"><span class="ss-switch-text">STP</span></span>
            </a>
        </div>

        <div id="ss-fix-cent" class="ss-content active">
            <div class="specs2">
                <div class="ss-caption2">
                    <a href="#" class="ss-fix-cent active" rel="ss-fix-cent-currency">
                        <span class="ss-switch-sub"><span class="ss-switch-text">货币</span></span>
                    </a>
                    <a href="#" class="ss-fix-cent" rel="ss-fix-cent-metals">
                        <span class="ss-switch-sub"><span class="ss-switch-text">金属</span></span>
                    </a>
                    <a href="#" class="ss-fix-cent" rel="ss-fix-cent-zerospread">
                        <span class="ss-switch-sub"><span class="ss-switch-text">Zero Spread</span></span>
                    </a>
                </div>
            </div>
        </div>
        <div id="ss-fix-stan" class="ss-content">
            <div class="specs2">
                <div class="ss-caption2">
                    <a href="#" class="ss-fix-stan active" rel="ss-fix-stan-currency">
                        <span class="ss-switch-sub"><span class="ss-switch-text">货币</span></span>
                    </a>
                    <a href="#" class="ss-fix-stan" rel="ss-fix-stan-metals">
                        <span class="ss-switch-sub"><span class="ss-switch-text">金属</span></span>
                    </a>
                    <a href="#" class="ss-fix-stan" rel="ss-fix-stan-zerospread">
                        <span class="ss-switch-sub"><span class="ss-switch-text">Zero Spread</span></span>
                    </a>
                </div>
            </div>
        </div>
        <div id="ss-pro-cent" class="ss-content">
            <div class="specs2">
                <div class="ss-caption2">
                    <a href="#" class="ss-pro-cent active" rel="ss-pro-cent-currency">
                        <span class="ss-switch-sub"><span class="ss-switch-text">货币</span></span>
                    </a>
                    <a href="#" class="ss-pro-cent" rel="ss-pro-cent-metals">
                        <span class="ss-switch-sub"><span class="ss-switch-text">金属</span></span>
                    </a>
                    <a href="#" class="ss-pro-cent" rel="ss-pro-cent-zerospread">
                        <span class="ss-switch-sub"><span class="ss-switch-text">Zero Spread</span></span>
                    </a>
                </div>
            </div>
        </div>


        <div id="ss-fix-cent-currency" class="ss-content2 ss-fix-cent active">
            <table class="table specifications_table top-square">
                <tr>
                    <th class="top-border tc-tlc">符号</th>
                    <th class="top-border">交易工具名称 </th>
                    <th class="top-border">基点数量</th>
                    <th class="top-border">点差(点)</th>
                    <th class="top-border">限价&止损点</th>
                    <th class="top-border">空单隔夜利息(点)</th>
                    <th class="top-border">多单隔夜利息(点)</th>
                </tr>

                <tr>
                    <td class="symbol">AUDCAD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/AUDCAD/" target="_blank">Australian Dollar vs Canadian Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">-0.710</td>
                    <td style="max-width: 100px;">0.150</td>
                </tr>
                <tr>
                    <td class="symbol">AUDCHF</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/AUDCHF/" target="_blank">Australian Dollar vs Swiss Franc</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">-0.860</td>
                    <td style="max-width: 100px;">0.250</td>
                </tr>
                <tr>
                    <td class="symbol">AUDJPY</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/AUDJPY/" target="_blank">Australian Dollar vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">6</td>
                    <td style="max-width: 100px;">6</td>
                    <td style="max-width: 100px;">-0.950</td>
                    <td style="max-width: 100px;">0.340</td>
                </tr>
                <tr>
                    <td class="symbol">AUDNZD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/AUDNZD/" target="_blank">Australian Dollar vs New Zealand Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">-0.313</td>
                    <td style="max-width: 100px;">-0.150</td>
                </tr>
                <tr>
                    <td class="symbol">AUDUSD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/AUDUSD/" target="_blank">Australian Dollar vs US Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">4</td>
                    <td style="max-width: 100px;">4</td>
                    <td style="max-width: 100px;">-0.40</td>
                    <td style="max-width: 100px;">0.120</td>
                </tr>
                <tr>
                    <td class="symbol">CADCHF</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/CADCHF/" target="_blank">Canadian Dollar vs Swiss Franc</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">-0.353</td>
                    <td style="max-width: 100px;">-0.05</td>
                </tr>
                <tr>
                    <td class="symbol">CADJPY</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/CADJPY/" target="_blank">Canadian Dollar vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">6</td>
                    <td style="max-width: 100px;">6</td>
                    <td style="max-width: 100px;">-0.320</td>
                    <td style="max-width: 100px;">0.04</td>
                </tr>
                <tr>
                    <td class="symbol">CHFJPY</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/CHFJPY/" target="_blank">Swiss Franc vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">-0.210</td>
                    <td style="max-width: 100px;">-0.100</td>
                </tr>
                <tr>
                    <td class="symbol">GBPAUD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/GBPAUD/" target="_blank">Great Britain Pound vs Australian Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">0.430</td>
                    <td style="max-width: 100px;">-1.550</td>
                </tr>
                <tr>
                    <td class="symbol">GBPCAD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/GBPCAD/" target="_blank">Great Britain Pound vs Canadian Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">-0.090</td>
                    <td style="max-width: 100px;">-0.490</td>
                </tr>
                <tr>
                    <td class="symbol">GBPCHF</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/GBPCHF/" target="_blank">Great Britain Pound vs Swiss Franc</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">-0.360</td>
                    <td style="max-width: 100px;">-0.180</td>
                </tr>
                <tr>
                    <td class="symbol">GBPJPY</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/GBPJPY/" target="_blank">Great Britain Pound vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">-0.340</td>
                    <td style="max-width: 100px;">-0.070</td>
                </tr>
                <tr>
                    <td class="symbol">GBPNZD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/GBPNZD/" target="_blank">Great Britain Pound vs New Zealand Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">18</td>
                    <td style="max-width: 100px;">18</td>
                    <td style="max-width: 100px;">0.700</td>
                    <td style="max-width: 100px;">-2.500</td>
                </tr>
                <tr>
                    <td class="symbol">GBPUSD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/GBPUSD/" target="_blank">Great Britain Pound vs US Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">3</td>
                    <td style="max-width: 100px;">3</td>
                    <td style="max-width: 100px;">-0.05</td>
                    <td style="max-width: 100px;">-0.210</td>
                </tr>
                <tr>
                    <td class="symbol">EURAUD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/EURAUD/" target="_blank">Euro vs Australian Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">0.500</td>
                    <td style="max-width: 100px;">-1.500</td>
                </tr>
                <tr>
                    <td class="symbol">EURCAD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/EURCAD/" target="_blank">Euro vs Canadian Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">-0.220</td>
                    <td style="max-width: 100px;">-0.350</td>
                </tr>
                <tr>
                    <td class="symbol">EURCHF</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/EURCHF/" target="_blank">Euro vs Swiss Franc</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">6</td>
                    <td style="max-width: 100px;">6</td>
                    <td style="max-width: 100px;">-0.244</td>
                    <td style="max-width: 100px;">-0.3</td>
                </tr>
                <tr>
                    <td class="symbol">EURGBP</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/EURGBP/" target="_blank">Euro vs Great Britain Pound</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">3</td>
                    <td style="max-width: 100px;">3</td>
                    <td style="max-width: 100px;">-0.252</td>
                    <td style="max-width: 100px;">-0.28</td>
                </tr>
                <tr>
                    <td class="symbol">EURJPY</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/EURJPY/" target="_blank">Euro vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">4</td>
                    <td style="max-width: 100px;">4</td>
                    <td style="max-width: 100px;">-0.232</td>
                    <td style="max-width: 100px;">-0.104</td>
                </tr>
                <tr>
                    <td class="symbol">EURNZD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/EURNZD/" target="_blank">Euro vs New Zealand Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">12</td>
                    <td style="max-width: 100px;">12</td>
                    <td style="max-width: 100px;">0.600</td>
                    <td style="max-width: 100px;">-2.350</td>
                </tr>
                <tr>
                    <td class="symbol">EURPLN</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/EURPLN/" target="_blank">Euro vs Poland Zloty</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">100</td>
                    <td style="max-width: 100px;">100</td>
                    <td style="max-width: 100px;">0.80</td>
                    <td style="max-width: 100px;">-4.23</td>
                </tr>
                <tr>
                    <td class="symbol">EURUSD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/EURUSD/" target="_blank">Euro vs US Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">2</td>
                    <td style="max-width: 100px;">2</td>
                    <td style="max-width: 100px;">-0.052</td>
                    <td style="max-width: 100px;">-0.15</td>
                </tr>
                <tr>
                    <td class="symbol">NZDCAD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/NZDCAD/" target="_blank">New Zealand Dollar vs Canadian Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">-1.060</td>
                    <td style="max-width: 100px;">0.320</td>
                </tr>
                <tr>
                    <td class="symbol">NZDCHF</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/NZDCHF/" target="_blank">New Zealand Dollar vs Swiss Franc</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">12</td>
                    <td style="max-width: 100px;">12</td>
                    <td style="max-width: 100px;">-1.230</td>
                    <td style="max-width: 100px;">0.540</td>
                </tr>
                <tr>
                    <td class="symbol">NZDJPY</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/NZDJPY/" target="_blank">New Zealand Dollar vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">-1.450</td>
                    <td style="max-width: 100px;">0.450</td>
                </tr>
                <tr>
                    <td class="symbol">NZDUSD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/NZDUSD/" target="_blank">New Zealand Dollar vs US Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">5</td>
                    <td style="max-width: 100px;">5</td>
                    <td style="max-width: 100px;">-0.450</td>
                    <td style="max-width: 100px;">0.150</td>
                </tr>
                <tr>
                    <td class="symbol">USDCAD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/USDCAD/" target="_blank">US Dollar vs Canadian Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">4</td>
                    <td style="max-width: 100px;">4</td>
                    <td style="max-width: 100px;">-0.090</td>
                    <td style="max-width: 100px;">-0.330</td>
                </tr>
                <tr>
                    <td class="symbol">USDCHF</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/USDCHF/" target="_blank">US Dollar vs Swiss Franc</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">4</td>
                    <td style="max-width: 100px;">4</td>
                    <td style="max-width: 100px;">-0.250</td>
                    <td style="max-width: 100px;">-0.140</td>
                </tr>
                <tr>
                    <td class="symbol">USDJPY</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/USDJPY/" target="_blank">US Dollar vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">3</td>
                    <td style="max-width: 100px;">3</td>
                    <td style="max-width: 100px;">-0.25</td>
                    <td style="max-width: 100px;">-0.25</td>
                </tr>
                <tr>
                    <td class="symbol">USDMXN</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/USDMXN/" target="_blank">US Dollar vs Mexican Peso</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">120</td>
                    <td style="max-width: 100px;">120</td>
                    <td style="max-width: 100px;">7.900</td>
                    <td style="max-width: 100px;">-21.000</td>
                </tr>
                <tr>
                    <td class="symbol">USDRUB</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/USDRUB/" target="_blank">US Dollar vs Russian Ruble</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">40</td>
                    <td style="max-width: 100px;">20</td>
                    <td style="max-width: 100px;">0.750</td>
                    <td style="max-width: 100px;">-3.640</td>
                </tr>
                <tr class="last">
                    <td class="symbol tc-bl">USDZAR</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/USDZAR/" target="_blank">US Dollar vs South African Rand</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">250</td>
                    <td style="max-width: 100px;">250</td>
                    <td style="max-width: 100px;">9.476</td>
                    <td style="max-width: 100px;">-25.000</td>
                </tr>
            </table>
        </div>
        <div id="ss-fix-cent-metals" class="ss-content2 ss-fix-cent ">
            <table class="table specifications_table top-square">
                <tr>
                    <th class="top-border tc-tlc">符号</th>
                    <th class="top-border">交易工具名称 </th>
                    <th class="top-border">基点数量</th>
                    <th class="top-border">一标准手合约数量</th>
                    <th class="top-border">点差(点)</th>
                    <th class="top-border">限价&止损点</th>
                    <th class="top-border">空单隔夜利息(点)</th>
                    <th class="top-border">多单隔夜利息(点)</th>
                </tr>

                <tr>
                    <td class="symbol">XAGUSD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/XAGUSD/" target="_blank">Silver vs US Dollar (Spot)</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">5000 oz.</td>
                    <td style="max-width: 100px;">3</td>
                    <td style="max-width: 100px;">3</td>
                    <td style="max-width: 100px;">-0.01</td>
                    <td style="max-width: 100px;">-0.04</td>
                </tr>
                <tr class="last">
                    <td class="symbol tc-bl">XAUUSD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/XAUUSD/" target="_blank">Gold vs US Dollar (Spot)</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">100 oz.</td>
                    <td style="max-width: 100px;">100</td>
                    <td style="max-width: 100px;">100</td>
                    <td style="max-width: 100px;">-0.700</td>
                    <td style="max-width: 100px;">-2.500</td>
                </tr>
            </table>
        </div>
        <div id="ss-fix-cent-zerospread" class="ss-content2 ss-fix-cent ">
            <table class="table specifications_table top-square">
                <tr>
                    <th class="top-border tc-tlc">符号</th>
                    <th class="top-border">交易工具名称 </th>
                    <th class="top-border">基点数量</th>
                    <th class="top-border">一标准手合约数量</th>
                </tr>

                <tr>
                    <td class="symbol">EURUSD.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/EURUSD.z/" target="_blank">Euro vs US Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">100000 EUR</td>
                </tr>
                <tr>
                    <td class="symbol">USDCAD.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/USDCAD.z/" target="_blank">US Dollar vs Canadian Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">100000 USD</td>
                </tr>
                <tr>
                    <td class="symbol">EURJPY.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/EURJPY.z/" target="_blank">Euro vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">100000 EUR</td>
                </tr>
                <tr>
                    <td class="symbol">USDJPY.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/USDJPY.z/" target="_blank">US Dollar vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">100000 USD</td>
                </tr>
                <tr>
                    <td class="symbol">GBPUSD.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/GBPUSD.z/" target="_blank">Great Britain Pound vs US Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">100000 GBP</td>
                </tr>
                <tr>
                    <td class="symbol">AUDUSD.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/AUDUSD.z/" target="_blank">Australian Dollar vs US Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">100000 AUD</td>
                </tr>
                <tr>
                    <td class="symbol">NZDUSD.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/NZDUSD.z/" target="_blank">New Zealand Dollar vs US Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">100000 NZD</td>
                </tr>
                <tr>
                    <td class="symbol">EURGBP.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/EURGBP.z/" target="_blank">Euro vs Great Britain Pound</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">100000 EUR</td>
                </tr>
                <tr>
                    <td class="symbol">EURCHF.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/EURCHF.z/" target="_blank">Euro vs Swiss Franc</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">100000 EUR</td>
                </tr>
                <tr>
                    <td class="symbol">USDCHF.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/USDCHF.z/" target="_blank">US Dollar vs Swiss Franc</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">100000 USD</td>
                </tr>
                <tr>
                    <td class="symbol">GBPJPY.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/GBPJPY.z/" target="_blank">Great Britain Pound vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">100000 GBP</td>
                </tr>
                <tr>
                    <td class="symbol">XAGUSD.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/XAGUSD.z/" target="_blank">Silver vs US Dollar (Spot)</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">5000 oz.</td>
                </tr>
                <tr class="last">
                    <td class="symbol tc-bl">XAUUSD.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-cent/XAUUSD.z/" target="_blank">Gold vs US Dollar (Spot)</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">100 oz.</td>
                </tr>
            </table>
        </div>
        <div id="ss-fix-stan-currency" class="ss-content2 ss-fix-stan ">
            <table class="table specifications_table top-square">
                <tr>
                    <th class="top-border tc-tlc">符号</th>
                    <th class="top-border">交易工具名称 </th>
                    <th class="top-border">基点数量</th>
                    <th class="top-border">点差(点)</th>
                    <th class="top-border">限价&止损点</th>
                    <th class="top-border">空单隔夜利息(点)</th>
                    <th class="top-border">多单隔夜利息(点)</th>
                </tr>

                <tr>
                    <td class="symbol">AUDCAD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/AUDCAD/" target="_blank">Australian Dollar vs Canadian Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">-0.710</td>
                    <td style="max-width: 100px;">0.150</td>
                </tr>
                <tr>
                    <td class="symbol">AUDCHF</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/AUDCHF/" target="_blank">Australian Dollar vs Swiss Franc</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">-0.860</td>
                    <td style="max-width: 100px;">0.250</td>
                </tr>
                <tr>
                    <td class="symbol">AUDJPY</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/AUDJPY/" target="_blank">Australian Dollar vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">6</td>
                    <td style="max-width: 100px;">6</td>
                    <td style="max-width: 100px;">-0.950</td>
                    <td style="max-width: 100px;">0.340</td>
                </tr>
                <tr>
                    <td class="symbol">AUDNZD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/AUDNZD/" target="_blank">Australian Dollar vs New Zealand Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">-0.313</td>
                    <td style="max-width: 100px;">-0.150</td>
                </tr>
                <tr>
                    <td class="symbol">AUDUSD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/AUDUSD/" target="_blank">Australian Dollar vs US Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">4</td>
                    <td style="max-width: 100px;">4</td>
                    <td style="max-width: 100px;">-0.40</td>
                    <td style="max-width: 100px;">0.120</td>
                </tr>
                <tr>
                    <td class="symbol">CADCHF</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/CADCHF/" target="_blank">Canadian Dollar vs Swiss Franc</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">-0.353</td>
                    <td style="max-width: 100px;">-0.05</td>
                </tr>
                <tr>
                    <td class="symbol">CADJPY</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/CADJPY/" target="_blank">Canadian Dollar vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">6</td>
                    <td style="max-width: 100px;">6</td>
                    <td style="max-width: 100px;">-0.320</td>
                    <td style="max-width: 100px;">0.04</td>
                </tr>
                <tr>
                    <td class="symbol">CHFJPY</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/CHFJPY/" target="_blank">Swiss Franc vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">-0.210</td>
                    <td style="max-width: 100px;">-0.100</td>
                </tr>
                <tr>
                    <td class="symbol">GBPAUD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/GBPAUD/" target="_blank">Great Britain Pound vs Australian Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">0.430</td>
                    <td style="max-width: 100px;">-1.550</td>
                </tr>
                <tr>
                    <td class="symbol">GBPCAD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/GBPCAD/" target="_blank">Great Britain Pound vs Canadian Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">-0.090</td>
                    <td style="max-width: 100px;">-0.490</td>
                </tr>
                <tr>
                    <td class="symbol">GBPCHF</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/GBPCHF/" target="_blank">Great Britain Pound vs Swiss Franc</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">-0.360</td>
                    <td style="max-width: 100px;">-0.180</td>
                </tr>
                <tr>
                    <td class="symbol">GBPJPY</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/GBPJPY/" target="_blank">Great Britain Pound vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">-0.340</td>
                    <td style="max-width: 100px;">-0.070</td>
                </tr>
                <tr>
                    <td class="symbol">GBPNZD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/GBPNZD/" target="_blank">Great Britain Pound vs New Zealand Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">18</td>
                    <td style="max-width: 100px;">18</td>
                    <td style="max-width: 100px;">0.700</td>
                    <td style="max-width: 100px;">-2.500</td>
                </tr>
                <tr>
                    <td class="symbol">GBPUSD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/GBPUSD/" target="_blank">Great Britain Pound vs US Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">3</td>
                    <td style="max-width: 100px;">3</td>
                    <td style="max-width: 100px;">-0.05</td>
                    <td style="max-width: 100px;">-0.210</td>
                </tr>
                <tr>
                    <td class="symbol">EURAUD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/EURAUD/" target="_blank">Euro vs Australian Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">0.500</td>
                    <td style="max-width: 100px;">-1.500</td>
                </tr>
                <tr>
                    <td class="symbol">EURCAD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/EURCAD/" target="_blank">Euro vs Canadian Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">-0.220</td>
                    <td style="max-width: 100px;">-0.350</td>
                </tr>
                <tr>
                    <td class="symbol">EURCHF</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/EURCHF/" target="_blank">Euro vs Swiss Franc</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">6</td>
                    <td style="max-width: 100px;">6</td>
                    <td style="max-width: 100px;">-0.244</td>
                    <td style="max-width: 100px;">-0.3</td>
                </tr>
                <tr>
                    <td class="symbol">EURGBP</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/EURGBP/" target="_blank">Euro vs Great Britain Pound</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">3</td>
                    <td style="max-width: 100px;">3</td>
                    <td style="max-width: 100px;">-0.252</td>
                    <td style="max-width: 100px;">-0.28</td>
                </tr>
                <tr>
                    <td class="symbol">EURJPY</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/EURJPY/" target="_blank">Euro vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">4</td>
                    <td style="max-width: 100px;">4</td>
                    <td style="max-width: 100px;">-0.232</td>
                    <td style="max-width: 100px;">-0.104</td>
                </tr>
                <tr>
                    <td class="symbol">EURNZD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/EURNZD/" target="_blank">Euro vs New Zealand Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">12</td>
                    <td style="max-width: 100px;">12</td>
                    <td style="max-width: 100px;">0.600</td>
                    <td style="max-width: 100px;">-2.350</td>
                </tr>
                <tr>
                    <td class="symbol">EURPLN</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/EURPLN/" target="_blank">Euro vs Poland Zloty</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">100</td>
                    <td style="max-width: 100px;">100</td>
                    <td style="max-width: 100px;">0.80</td>
                    <td style="max-width: 100px;">-4.23</td>
                </tr>
                <tr>
                    <td class="symbol">EURUSD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/EURUSD/" target="_blank">Euro vs US Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">2</td>
                    <td style="max-width: 100px;">2</td>
                    <td style="max-width: 100px;">-0.052</td>
                    <td style="max-width: 100px;">-0.15</td>
                </tr>
                <tr>
                    <td class="symbol">NZDCAD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/NZDCAD/" target="_blank">New Zealand Dollar vs Canadian Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">-1.060</td>
                    <td style="max-width: 100px;">0.320</td>
                </tr>
                <tr>
                    <td class="symbol">NZDCHF</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/NZDCHF/" target="_blank">New Zealand Dollar vs Swiss Franc</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">12</td>
                    <td style="max-width: 100px;">12</td>
                    <td style="max-width: 100px;">-1.230</td>
                    <td style="max-width: 100px;">0.540</td>
                </tr>
                <tr>
                    <td class="symbol">NZDJPY</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/NZDJPY/" target="_blank">New Zealand Dollar vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">-1.450</td>
                    <td style="max-width: 100px;">0.450</td>
                </tr>
                <tr>
                    <td class="symbol">NZDUSD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/NZDUSD/" target="_blank">New Zealand Dollar vs US Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">5</td>
                    <td style="max-width: 100px;">5</td>
                    <td style="max-width: 100px;">-0.450</td>
                    <td style="max-width: 100px;">0.150</td>
                </tr>
                <tr>
                    <td class="symbol">USDCAD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/USDCAD/" target="_blank">US Dollar vs Canadian Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">4</td>
                    <td style="max-width: 100px;">4</td>
                    <td style="max-width: 100px;">-0.090</td>
                    <td style="max-width: 100px;">-0.330</td>
                </tr>
                <tr>
                    <td class="symbol">USDCHF</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/USDCHF/" target="_blank">US Dollar vs Swiss Franc</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">4</td>
                    <td style="max-width: 100px;">4</td>
                    <td style="max-width: 100px;">-0.250</td>
                    <td style="max-width: 100px;">-0.140</td>
                </tr>
                <tr>
                    <td class="symbol">USDJPY</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/USDJPY/" target="_blank">US Dollar vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">3</td>
                    <td style="max-width: 100px;">3</td>
                    <td style="max-width: 100px;">-0.25</td>
                    <td style="max-width: 100px;">-0.25</td>
                </tr>
                <tr>
                    <td class="symbol">USDMXN</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/USDMXN/" target="_blank">US Dollar vs Mexican Peso</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">120</td>
                    <td style="max-width: 100px;">120</td>
                    <td style="max-width: 100px;">7.900</td>
                    <td style="max-width: 100px;">-21.000</td>
                </tr>
                <tr>
                    <td class="symbol">USDRUB</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/USDRUB/" target="_blank">US Dollar vs Russian Ruble</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">40</td>
                    <td style="max-width: 100px;">20</td>
                    <td style="max-width: 100px;">0.750</td>
                    <td style="max-width: 100px;">-3.640</td>
                </tr>
                <tr class="last">
                    <td class="symbol tc-bl">USDZAR</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/USDZAR/" target="_blank">US Dollar vs South African Rand</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">250</td>
                    <td style="max-width: 100px;">250</td>
                    <td style="max-width: 100px;">9.476</td>
                    <td style="max-width: 100px;">-25.000</td>
                </tr>
            </table>
        </div>
        <div id="ss-fix-stan-metals" class="ss-content2 ss-fix-stan ">
            <table class="table specifications_table top-square">
                <tr>
                    <th class="top-border tc-tlc">符号</th>
                    <th class="top-border">交易工具名称 </th>
                    <th class="top-border">基点数量</th>
                    <th class="top-border">一标准手合约数量</th>
                    <th class="top-border">点差(点)</th>
                    <th class="top-border">限价&止损点</th>
                    <th class="top-border">空单隔夜利息(点)</th>
                    <th class="top-border">多单隔夜利息(点)</th>
                </tr>

                <tr>
                    <td class="symbol">XAGUSD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/XAGUSD/" target="_blank">Silver vs US Dollar (Spot)</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">5000 oz.</td>
                    <td style="max-width: 100px;">3</td>
                    <td style="max-width: 100px;">3</td>
                    <td style="max-width: 100px;">-0.01</td>
                    <td style="max-width: 100px;">-0.04</td>
                </tr>
                <tr class="last">
                    <td class="symbol tc-bl">XAUUSD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/XAUUSD/" target="_blank">Gold vs US Dollar (Spot)</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">100 oz.</td>
                    <td style="max-width: 100px;">100</td>
                    <td style="max-width: 100px;">100</td>
                    <td style="max-width: 100px;">-0.700</td>
                    <td style="max-width: 100px;">-2.500</td>
                </tr>
            </table>
        </div>
        <div id="ss-fix-stan-zerospread" class="ss-content2 ss-fix-stan ">
            <table class="table specifications_table top-square">
                <tr>
                    <th class="top-border tc-tlc">符号</th>
                    <th class="top-border">交易工具名称 </th>
                    <th class="top-border">基点数量</th>
                    <th class="top-border">一标准手合约数量</th>
                </tr>

                <tr>
                    <td class="symbol">EURUSD.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/EURUSD.z/" target="_blank">Euro vs US Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">100000 EUR</td>
                </tr>
                <tr>
                    <td class="symbol">USDCAD.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/USDCAD.z/" target="_blank">US Dollar vs Canadian Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">100000 USD</td>
                </tr>
                <tr>
                    <td class="symbol">EURJPY.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/EURJPY.z/" target="_blank">Euro vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">100000 EUR</td>
                </tr>
                <tr>
                    <td class="symbol">USDJPY.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/USDJPY.z/" target="_blank">US Dollar vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">100000 USD</td>
                </tr>
                <tr>
                    <td class="symbol">GBPUSD.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/GBPUSD.z/" target="_blank">Great Britain Pound vs US Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">100000 GBP</td>
                </tr>
                <tr>
                    <td class="symbol">AUDUSD.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/AUDUSD.z/" target="_blank">Australian Dollar vs US Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">100000 AUD</td>
                </tr>
                <tr>
                    <td class="symbol">NZDUSD.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/NZDUSD.z/" target="_blank">New Zealand Dollar vs US Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">100000 NZD</td>
                </tr>
                <tr>
                    <td class="symbol">EURGBP.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/EURGBP.z/" target="_blank">Euro vs Great Britain Pound</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">100000 EUR</td>
                </tr>
                <tr>
                    <td class="symbol">EURCHF.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/EURCHF.z/" target="_blank">Euro vs Swiss Franc</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">100000 EUR</td>
                </tr>
                <tr>
                    <td class="symbol">USDCHF.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/USDCHF.z/" target="_blank">US Dollar vs Swiss Franc</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">100000 USD</td>
                </tr>
                <tr>
                    <td class="symbol">GBPJPY.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/GBPJPY.z/" target="_blank">Great Britain Pound vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">100000 GBP</td>
                </tr>
                <tr>
                    <td class="symbol">XAGUSD.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/XAGUSD.z/" target="_blank">Silver vs US Dollar (Spot)</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">5000 oz.</td>
                </tr>
                <tr class="last">
                    <td class="symbol tc-bl">XAUUSD.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/fix-stan/XAUUSD.z/" target="_blank">Gold vs US Dollar (Spot)</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">100 oz.</td>
                </tr>
            </table>
        </div>
        <div id="ss-pro-cent-currency" class="ss-content2 ss-pro-cent ">
            <table class="table specifications_table top-square">
                <tr>
                    <th class="top-border tc-tlc">符号</th>
                    <th class="top-border">交易工具名称 </th>
                    <th class="top-border">基点数量</th>
                    <th class="top-border">最小点差 (点)</th>
                    <th class="top-border">平均点差 (点)</th>
                    <th class="top-border">限价&止损点</th>
                    <th class="top-border">空单隔夜利息(点)</th>
                    <th class="top-border">多单隔夜利息(点)</th>
                </tr>

                <tr>
                    <td class="symbol">AUDCAD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/AUDCAD/" target="_blank">Australian Dollar vs Canadian Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">2.6</td>
                    <td style="max-width: 100px;">3.28</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">-0.710</td>
                    <td style="max-width: 100px;">0.150</td>
                </tr>
                <tr>
                    <td class="symbol">AUDCHF</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/AUDCHF/" target="_blank">Australian Dollar vs Swiss Franc</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">4.3</td>
                    <td style="max-width: 100px;">5.42</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">-0.860</td>
                    <td style="max-width: 100px;">0.250</td>
                </tr>
                <tr>
                    <td class="symbol">AUDJPY</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/AUDJPY/" target="_blank">Australian Dollar vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">2.2</td>
                    <td style="max-width: 100px;">2.64</td>
                    <td style="max-width: 100px;">6</td>
                    <td style="max-width: 100px;">-0.950</td>
                    <td style="max-width: 100px;">0.340</td>
                </tr>
                <tr>
                    <td class="symbol">AUDNZD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/AUDNZD/" target="_blank">Australian Dollar vs New Zealand Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">2.6</td>
                    <td style="max-width: 100px;">3.48</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">-0.313</td>
                    <td style="max-width: 100px;">-0.150</td>
                </tr>
                <tr>
                    <td class="symbol">AUDUSD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/AUDUSD/" target="_blank">Australian Dollar vs US Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">2.0</td>
                    <td style="max-width: 100px;">2.22</td>
                    <td style="max-width: 100px;">4</td>
                    <td style="max-width: 100px;">-0.40</td>
                    <td style="max-width: 100px;">0.120</td>
                </tr>
                <tr>
                    <td class="symbol">CADCHF</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/CADCHF/" target="_blank">Canadian Dollar vs Swiss Franc</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">4.8</td>
                    <td style="max-width: 100px;">5.50</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">-0.353</td>
                    <td style="max-width: 100px;">-0.05</td>
                </tr>
                <tr>
                    <td class="symbol">CADJPY</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/CADJPY/" target="_blank">Canadian Dollar vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">2.2</td>
                    <td style="max-width: 100px;">2.76</td>
                    <td style="max-width: 100px;">6</td>
                    <td style="max-width: 100px;">-0.320</td>
                    <td style="max-width: 100px;">0.04</td>
                </tr>
                <tr>
                    <td class="symbol">CHFJPY</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/CHFJPY/" target="_blank">Swiss Franc vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">4.8</td>
                    <td style="max-width: 100px;">5.56</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">-0.210</td>
                    <td style="max-width: 100px;">-0.100</td>
                </tr>
                <tr>
                    <td class="symbol">GBPAUD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/GBPAUD/" target="_blank">Great Britain Pound vs Australian Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">2.8</td>
                    <td style="max-width: 100px;">4.10</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">0.430</td>
                    <td style="max-width: 100px;">-1.550</td>
                </tr>
                <tr>
                    <td class="symbol">GBPCAD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/GBPCAD/" target="_blank">Great Britain Pound vs Canadian Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">2.8</td>
                    <td style="max-width: 100px;">4.11</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">-0.090</td>
                    <td style="max-width: 100px;">-0.490</td>
                </tr>
                <tr>
                    <td class="symbol">GBPCHF</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/GBPCHF/" target="_blank">Great Britain Pound vs Swiss Franc</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">5.8</td>
                    <td style="max-width: 100px;">6.88</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">-0.360</td>
                    <td style="max-width: 100px;">-0.180</td>
                </tr>
                <tr>
                    <td class="symbol">GBPJPY</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/GBPJPY/" target="_blank">Great Britain Pound vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">2.1</td>
                    <td style="max-width: 100px;">3.06</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">-0.340</td>
                    <td style="max-width: 100px;">-0.070</td>
                </tr>
                <tr>
                    <td class="symbol">GBPNZD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/GBPNZD/" target="_blank">Great Britain Pound vs New Zealand Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">3.4</td>
                    <td style="max-width: 100px;">5.76</td>
                    <td style="max-width: 100px;">18</td>
                    <td style="max-width: 100px;">0.700</td>
                    <td style="max-width: 100px;">-2.500</td>
                </tr>
                <tr>
                    <td class="symbol">GBPUSD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/GBPUSD/" target="_blank">Great Britain Pound vs US Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">1.5</td>
                    <td style="max-width: 100px;">1.75</td>
                    <td style="max-width: 100px;">3</td>
                    <td style="max-width: 100px;">-0.05</td>
                    <td style="max-width: 100px;">-0.210</td>
                </tr>
                <tr>
                    <td class="symbol">EURAUD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/EURAUD/" target="_blank">Euro vs Australian Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">3.0</td>
                    <td style="max-width: 100px;">3.66</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">0.500</td>
                    <td style="max-width: 100px;">-1.500</td>
                </tr>
                <tr>
                    <td class="symbol">EURCAD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/EURCAD/" target="_blank">Euro vs Canadian Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">2.6</td>
                    <td style="max-width: 100px;">3.43</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">-0.220</td>
                    <td style="max-width: 100px;">-0.350</td>
                </tr>
                <tr>
                    <td class="symbol">EURCHF</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/EURCHF/" target="_blank">Euro vs Swiss Franc</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">3.4</td>
                    <td style="max-width: 100px;">3.87</td>
                    <td style="max-width: 100px;">6</td>
                    <td style="max-width: 100px;">-0.244</td>
                    <td style="max-width: 100px;">-0.3</td>
                </tr>
                <tr>
                    <td class="symbol">EURGBP</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/EURGBP/" target="_blank">Euro vs Great Britain Pound</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">1.8</td>
                    <td style="max-width: 100px;">2.06</td>
                    <td style="max-width: 100px;">3</td>
                    <td style="max-width: 100px;">-0.252</td>
                    <td style="max-width: 100px;">-0.28</td>
                </tr>
                <tr>
                    <td class="symbol">EURJPY</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/EURJPY/" target="_blank">Euro vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">1.6</td>
                    <td style="max-width: 100px;">1.98</td>
                    <td style="max-width: 100px;">4</td>
                    <td style="max-width: 100px;">-0.232</td>
                    <td style="max-width: 100px;">-0.104</td>
                </tr>
                <tr>
                    <td class="symbol">EURNZD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/EURNZD/" target="_blank">Euro vs New Zealand Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">2.6</td>
                    <td style="max-width: 100px;">4.05</td>
                    <td style="max-width: 100px;">12</td>
                    <td style="max-width: 100px;">0.600</td>
                    <td style="max-width: 100px;">-2.350</td>
                </tr>
                <tr>
                    <td class="symbol">EURPLN</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/EURPLN/" target="_blank">Euro vs Poland Zloty</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">20</td>
                    <td style="max-width: 100px;">32</td>
                    <td style="max-width: 100px;">100</td>
                    <td style="max-width: 100px;">0.80</td>
                    <td style="max-width: 100px;">-4.23</td>
                </tr>
                <tr>
                    <td class="symbol">EURTRY</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/EURTRY/" target="_blank">Euro vs New Turkish Lira</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">23</td>
                    <td style="max-width: 100px;">30</td>
                    <td style="max-width: 100px;">30</td>
                    <td style="max-width: 100px;">1.110</td>
                    <td style="max-width: 100px;">-9.900</td>
                </tr>
                <tr>
                    <td class="symbol">EURUSD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/EURUSD/" target="_blank">Euro vs US Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">1.1</td>
                    <td style="max-width: 100px;">1.43</td>
                    <td style="max-width: 100px;">2</td>
                    <td style="max-width: 100px;">-0.052</td>
                    <td style="max-width: 100px;">-0.15</td>
                </tr>
                <tr>
                    <td class="symbol">NZDCAD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/NZDCAD/" target="_blank">New Zealand Dollar vs Canadian Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">4.2</td>
                    <td style="max-width: 100px;">5.21</td>
                    <td style="max-width: 100px;">10</td>
                    <td style="max-width: 100px;">-1.060</td>
                    <td style="max-width: 100px;">0.320</td>
                </tr>
                <tr>
                    <td class="symbol">NZDCHF</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/NZDCHF/" target="_blank">New Zealand Dollar vs Swiss Franc</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">6.4</td>
                    <td style="max-width: 100px;">7.61</td>
                    <td style="max-width: 100px;">12</td>
                    <td style="max-width: 100px;">-1.230</td>
                    <td style="max-width: 100px;">0.540</td>
                </tr>
                <tr>
                    <td class="symbol">NZDJPY</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/NZDJPY/" target="_blank">New Zealand Dollar vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">2.2</td>
                    <td style="max-width: 100px;">2.82</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">-1.450</td>
                    <td style="max-width: 100px;">0.450</td>
                </tr>
                <tr>
                    <td class="symbol">NZDUSD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/NZDUSD/" target="_blank">New Zealand Dollar vs US Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">1.7</td>
                    <td style="max-width: 100px;">2.15</td>
                    <td style="max-width: 100px;">5</td>
                    <td style="max-width: 100px;">-0.450</td>
                    <td style="max-width: 100px;">0.150</td>
                </tr>
                <tr>
                    <td class="symbol">USDCAD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/USDCAD/" target="_blank">US Dollar vs Canadian Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">2.3</td>
                    <td style="max-width: 100px;">2.66</td>
                    <td style="max-width: 100px;">4</td>
                    <td style="max-width: 100px;">-0.090</td>
                    <td style="max-width: 100px;">-0.330</td>
                </tr>
                <tr>
                    <td class="symbol">USDCHF</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/USDCHF/" target="_blank">US Dollar vs Swiss Franc</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">2.4</td>
                    <td style="max-width: 100px;">2.85</td>
                    <td style="max-width: 100px;">4</td>
                    <td style="max-width: 100px;">-0.250</td>
                    <td style="max-width: 100px;">-0.140</td>
                </tr>
                <tr>
                    <td class="symbol">USDCNH</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/USDCNH/" target="_blank">US Dollar vs Chinese Yuan</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">8.0</td>
                    <td style="max-width: 100px;">10.0</td>
                    <td style="max-width: 100px;">8</td>
                    <td style="max-width: 100px;">-5.100</td>
                    <td style="max-width: 100px;">-17.000</td>
                </tr>
                <tr>
                    <td class="symbol">USDJPY</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/USDJPY/" target="_blank">US Dollar vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">1.6</td>
                    <td style="max-width: 100px;">1.78</td>
                    <td style="max-width: 100px;">3</td>
                    <td style="max-width: 100px;">-0.25</td>
                    <td style="max-width: 100px;">-0.25</td>
                </tr>
                <tr>
                    <td class="symbol">USDMXN</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/USDMXN/" target="_blank">US Dollar vs Mexican Peso</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">48</td>
                    <td style="max-width: 100px;">65.4</td>
                    <td style="max-width: 100px;">120</td>
                    <td style="max-width: 100px;">7.900</td>
                    <td style="max-width: 100px;">-21.000</td>
                </tr>
                <tr>
                    <td class="symbol">USDPLN</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/USDPLN/" target="_blank">US Dollar vs Poland Zloty</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">19</td>
                    <td style="max-width: 100px;">26.0</td>
                    <td style="max-width: 100px;">70</td>
                    <td style="max-width: 100px;">0.750</td>
                    <td style="max-width: 100px;">-4.875</td>
                </tr>
                <tr>
                    <td class="symbol">USDRUB</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/USDRUB/" target="_blank">US Dollar vs Russian Ruble</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">7.0</td>
                    <td style="max-width: 100px;">8.88</td>
                    <td style="max-width: 100px;">20</td>
                    <td style="max-width: 100px;">0.750</td>
                    <td style="max-width: 100px;">-3.640</td>
                </tr>
                <tr>
                    <td class="symbol">USDTRY</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/USDTRY/" target="_blank">US Dollar vs Turkish Lira</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">20</td>
                    <td style="max-width: 100px;">25.8</td>
                    <td style="max-width: 100px;">100</td>
                    <td style="max-width: 100px;">2.000</td>
                    <td style="max-width: 100px;">-7.500</td>
                </tr>
                <tr class="last">
                    <td class="symbol tc-bl">USDZAR</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/USDZAR/" target="_blank">US Dollar vs South African Rand</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">20</td>
                    <td style="max-width: 100px;">76.0</td>
                    <td style="max-width: 100px;">250</td>
                    <td style="max-width: 100px;">9.476</td>
                    <td style="max-width: 100px;">-25.000</td>
                </tr>
            </table>
        </div>
        <div id="ss-pro-cent-metals" class="ss-content2 ss-pro-cent ">
            <table class="table specifications_table top-square">
                <tr>
                    <th class="top-border tc-tlc">符号</th>
                    <th class="top-border">交易工具名称 </th>
                    <th class="top-border">基点数量</th>
                    <th class="top-border">一标准手合约数量</th>
                    <th class="top-border">最小点差 (点)</th>
                    <th class="top-border">平均点差 (点)</th>
                    <th class="top-border">限价&止损点</th>
                    <th class="top-border">空单隔夜利息(点)</th>
                    <th class="top-border">多单隔夜利息(点)</th>
                </tr>

                <tr>
                    <td class="symbol">XAGUSD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/XAGUSD/" target="_blank">Silver vs US Dollar (Spot)</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">5000 oz.</td>
                    <td style="max-width: 100px;">1.2</td>
                    <td style="max-width: 100px;">2.06</td>
                    <td style="max-width: 100px;">3</td>
                    <td style="max-width: 100px;">-0.01</td>
                    <td style="max-width: 100px;">-0.04</td>
                </tr>
                <tr>
                    <td class="symbol">XAUUSD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/XAUUSD/" target="_blank">Gold vs US Dollar (Spot)</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">100 oz.</td>
                    <td style="max-width: 100px;">14</td>
                    <td style="max-width: 100px;">24.13</td>
                    <td style="max-width: 100px;">100</td>
                    <td style="max-width: 100px;">-0.700</td>
                    <td style="max-width: 100px;">-2.500</td>
                </tr>
                <tr>
                    <td class="symbol">XAUEUR</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/XAUEUR/" target="_blank">Gold vs Euro</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">100 oz.</td>
                    <td style="max-width: 100px;">14</td>
                    <td style="max-width: 100px;">27.86</td>
                    <td style="max-width: 100px;">100</td>
                    <td style="max-width: 100px;">-5.77</td>
                    <td style="max-width: 100px;">-0.82</td>
                </tr>
                <tr>
                    <td class="symbol">XPDUSD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/XPDUSD/" target="_blank">Palladium vs US Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">100 oz.</td>
                    <td style="max-width: 100px;">17.7</td>
                    <td style="max-width: 100px;">122.2</td>
                    <td style="max-width: 100px;">100</td>
                    <td style="max-width: 100px;">-1.92</td>
                    <td style="max-width: 100px;">-2.73</td>
                </tr>
                <tr>
                    <td class="symbol">XPTUSD</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/XPTUSD/" target="_blank">Platinum vs US Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">100 oz.</td>
                    <td style="max-width: 100px;">9</td>
                    <td style="max-width: 100px;">101.9</td>
                    <td style="max-width: 100px;">100</td>
                    <td style="max-width: 100px;">-1.22</td>
                    <td style="max-width: 100px;">-5.04</td>
                </tr>
                <tr class="last">
                    <td class="symbol tc-bl">XAGEUR</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/XAGEUR/" target="_blank">Silver vs Euro</a>
                    </td>
                    <td style="max-width: 100px;">0.001</td>
                    <td style="max-width: 100px;">5000 oz.</td>
                    <td style="max-width: 100px;">13</td>
                    <td style="max-width: 100px;">25.4</td>
                    <td style="max-width: 100px;">30</td>
                    <td style="max-width: 100px;">-0.54</td>
                    <td style="max-width: 100px;">-0.11</td>
                </tr>
            </table>
        </div>
        <div id="ss-pro-cent-zerospread" class="ss-content2 ss-pro-cent ">
            <table class="table specifications_table top-square">
                <tr>
                    <th class="top-border tc-tlc">符号</th>
                    <th class="top-border">交易工具名称 </th>
                    <th class="top-border">基点数量</th>
                    <th class="top-border">一标准手合约数量</th>
                </tr>

                <tr>
                    <td class="symbol">EURUSD.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/EURUSD.z/" target="_blank">Euro vs US Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">100000 EUR</td>
                </tr>
                <tr>
                    <td class="symbol">USDCAD.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/USDCAD.z/" target="_blank">US Dollar vs Canadian Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">100000 USD</td>
                </tr>
                <tr>
                    <td class="symbol">EURJPY.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/EURJPY.z/" target="_blank">Euro vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">100000 EUR</td>
                </tr>
                <tr>
                    <td class="symbol">USDJPY.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/USDJPY.z/" target="_blank">US Dollar vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">100000 USD</td>
                </tr>
                <tr>
                    <td class="symbol">GBPUSD.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/GBPUSD.z/" target="_blank">Great Britain Pound vs US Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">100000 GBP</td>
                </tr>
                <tr>
                    <td class="symbol">AUDUSD.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/AUDUSD.z/" target="_blank">Australian Dollar vs US Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">100000 AUD</td>
                </tr>
                <tr>
                    <td class="symbol">NZDUSD.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/NZDUSD.z/" target="_blank">New Zealand Dollar vs US Dollar</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">100000 NZD</td>
                </tr>
                <tr>
                    <td class="symbol">EURGBP.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/EURGBP.z/" target="_blank">Euro vs Great Britain Pound</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">100000 EUR</td>
                </tr>
                <tr>
                    <td class="symbol">EURCHF.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/EURCHF.z/" target="_blank">Euro vs Swiss Franc</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">100000 EUR</td>
                </tr>
                <tr>
                    <td class="symbol">USDCHF.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/USDCHF.z/" target="_blank">US Dollar vs Swiss Franc</a>
                    </td>
                    <td style="max-width: 100px;">0.0001</td>
                    <td style="max-width: 100px;">100000 USD</td>
                </tr>
                <tr>
                    <td class="symbol">GBPJPY.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/GBPJPY.z/" target="_blank">Great Britain Pound vs Japanese Yen</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">100000 GBP</td>
                </tr>
                <tr>
                    <td class="symbol">XAGUSD.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/XAGUSD.z/" target="_blank">Silver vs US Dollar (Spot)</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">5000 oz.</td>
                </tr>
                <tr class="last">
                    <td class="symbol tc-bl">XAUUSD.z</td>
                    <td class="description">
                        <a href="/trade-conditions/specifications/card/pro-cent/XAUUSD.z/" target="_blank">Gold vs US Dollar (Spot)</a>
                    </td>
                    <td style="max-width: 100px;">0.01</td>
                    <td style="max-width: 100px;">100 oz.</td>
                </tr>
            </table>
        </div>

    </div>


    <script type="text/javascript">
        $(document).ready(function(){
            var hash = window.location.hash.substring(1);

            $('.ss-caption a.ss-'+hash).click(function(e){});

            $('.ss-caption a').click(function(e){
                var obj = $(this);

                $('.ss-caption a.active').removeClass('active');
                obj.addClass('active');
                $('.ss-content').removeClass('active');
                $('#' + obj.attr('rel')).addClass('active');
                $('.ss-content2').removeClass('active');
                var active_tab = $('.ss-caption2 .' + obj.attr('rel') + '.active').attr('rel');
                if(!active_tab) active_tab = $('.ss-caption2 .' + obj.attr('rel') + ':first').attr('rel');
                $('#'+active_tab).addClass('active');

                e.preventDefault();
            });

            $('.ss-caption a.ss-'+hash).click();

            $('.ss-caption2 a').click(function(e){
                var obj = $(this);

                $('a.active', obj.parents('.specs2')).removeClass('active');
                'ss-'+obj.addClass('active');

                $('.ss-content2').removeClass('active');
                $('#' + obj.attr('rel')).addClass('active');

                e.preventDefault();
            });
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