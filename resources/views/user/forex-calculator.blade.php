 <!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie8 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if IE 9 ]> <html class="no-js ie9 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <title>外汇保证金计算器</title>
    <meta property="og:title" content="外汇保证金计算器" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="/analytics/forex-calculator/" />

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
        <a href="/" >首页</a>
        /                                              <a href="/analytics/" >分析</a>
        /                                              外汇保证金计算器
    </div>

    <div id="left">
        <h1>外汇保证金计算器</h1>
        <div class="dq-validate-errors"></div>
        <form method="post" id="form_calculator" name="form_calculator" enctype="multipart/form-data" action="" target="">
            <div id="calculate_table">
                <table  class="table calculator_table">
                    <tr class="center">
                        <th class="tc-tl width_150">产品代码</th>
                        <th >手</th>
                        <th >杠杆</th>
                        <th >账户币种</th>
                        <th class="tc-tr" >&nbsp;</th>
                    </tr>

                    <tr class="last">
                        <td class="tc-bl">
                            <select tabindex="0" name="calc[symbol]" onchange="changeSymbol(this)">
                                <option value="AUDCAD" id="currency"  >AUDCAD</option>
                                <option value="AUDCHF" id="currency"  >AUDCHF</option>
                                <option value="AUDJPY" id="currency"  >AUDJPY</option>
                                <option value="AUDNZD" id="currency"  >AUDNZD</option>
                                <option value="AUDUSD" id="currency"  >AUDUSD</option>
                                <option value="CADCHF" id="currency"  >CADCHF</option>
                                <option value="CADJPY" id="currency"  >CADJPY</option>
                                <option value="CHFJPY" id="currency"  >CHFJPY</option>
                                <option value="GBPAUD" id="currency"  >GBPAUD</option>
                                <option value="GBPCAD" id="currency"  >GBPCAD</option>
                                <option value="GBPCHF" id="currency"  >GBPCHF</option>
                                <option value="GBPJPY" id="currency"  >GBPJPY</option>
                                <option value="GBPNZD" id="currency"  >GBPNZD</option>
                                <option value="GBPUSD" id="currency"  >GBPUSD</option>
                                <option value="EURAUD" id="currency"  >EURAUD</option>
                                <option value="EURCAD" id="currency"  >EURCAD</option>
                                <option value="EURCHF" id="currency"  >EURCHF</option>
                                <option value="EURGBP" id="currency"  >EURGBP</option>
                                <option value="EURJPY" id="currency"  >EURJPY</option>
                                <option value="EURNZD" id="currency"  >EURNZD</option>
                                <option value="EURPLN" id="currency"  >EURPLN</option>
                                <option value="EURTRY" id="currency"  >EURTRY</option>
                                <option value="EURUSD" id="currency"  >EURUSD</option>
                                <option value="NZDCAD" id="currency"  >NZDCAD</option>
                                <option value="NZDCHF" id="currency"  >NZDCHF</option>
                                <option value="NZDJPY" id="currency"  >NZDJPY</option>
                                <option value="NZDUSD" id="currency"  >NZDUSD</option>
                                <option value="USDCAD" id="currency"  >USDCAD</option>
                                <option value="USDCHF" id="currency"  >USDCHF</option>
                                <option value="USDCNH" id="currency"  >USDCNH</option>
                                <option value="USDJPY" id="currency"  >USDJPY</option>
                                <option value="USDMXN" id="currency"  >USDMXN</option>
                                <option value="USDPLN" id="currency"  >USDPLN</option>
                                <option value="USDRUB" id="currency"  >USDRUB</option>
                                <option value="USDTRY" id="currency"  >USDTRY</option>
                                <option value="USDZAR" id="currency"  >USDZAR</option>
                                <option value="AUDCAD.a" id="currency"  >AUDCAD.a</option>
                                <option value="AUDCHF.a" id="currency"  >AUDCHF.a</option>
                                <option value="AUDJPY.a" id="currency"  >AUDJPY.a</option>
                                <option value="AUDUSD.a" id="currency"  >AUDUSD.a</option>
                                <option value="CADCHF.a" id="currency"  >CADCHF.a</option>
                                <option value="CADJPY.a" id="currency"  >CADJPY.a</option>
                                <option value="CHFJPY.a" id="currency"  >CHFJPY.a</option>
                                <option value="EURAUD.a" id="currency"  >EURAUD.a</option>
                                <option value="EURCAD.a" id="currency"  >EURCAD.a</option>
                                <option value="EURCHF.a" id="currency"  >EURCHF.a</option>
                                <option value="EURGBP.a" id="currency"  >EURGBP.a</option>
                                <option value="EURJPY.a" id="currency"  >EURJPY.a</option>
                                <option value="EURNZD.a" id="currency"  >EURNZD.a</option>
                                <option value="EURUSD.a" id="currency"  >EURUSD.a</option>
                                <option value="GBPAUD.a" id="currency"  >GBPAUD.a</option>
                                <option value="GBPCAD.a" id="currency"  >GBPCAD.a</option>
                                <option value="GBPCHF.a" id="currency"  >GBPCHF.a</option>
                                <option value="GBPJPY.a" id="currency"  >GBPJPY.a</option>
                                <option value="GBPNZD.a" id="currency"  >GBPNZD.a</option>
                                <option value="GBPUSD.a" id="currency"  >GBPUSD.a</option>
                                <option value="NZDCAD.a" id="currency"  >NZDCAD.a</option>
                                <option value="NZDCHF.a" id="currency"  >NZDCHF.a</option>
                                <option value="NZDJPY.a" id="currency"  >NZDJPY.a</option>
                                <option value="NZDUSD.a" id="currency"  >NZDUSD.a</option>
                                <option value="USDCAD.a" id="currency"  >USDCAD.a</option>
                                <option value="USDCHF.a" id="currency"  >USDCHF.a</option>
                                <option value="USDJPY.a" id="currency"  >USDJPY.a</option>
                                <option value="XAGUSD" id="metals"  >XAGUSD</option>
                                <option value="XAUUSD" id="metals"  >XAUUSD</option>
                                <option value="XAGUSD.a" id="metals"  >XAGUSD.a</option>
                                <option value="XAUUSD.a" id="metals"  >XAUUSD.a</option>
                                <option value="XAUEUR" id="metals"  >XAUEUR</option>
                                <option value="XPDUSD" id="metals"  >XPDUSD</option>
                                <option value="XPTUSD" id="metals"  >XPTUSD</option>
                                <option value="XAGEUR" id="metals"  >XAGEUR</option>
                            </select>
                        </td>
                        <td class="center">
                            <input id="calc_lot" tabindex="1" type="text" name="calc[lot]" class="fText lot_input" value="0.1" />
                        </td>
                        <td>
                            <select tabindex="2" name="calc[leverage]">
                                <option value="1"  >1 : 1</option>
                                <option value="5"  >1 : 5</option>
                                <option value="10"  >1 : 10</option>
                                <option value="15"  >1 : 15</option>
                                <option value="25"  >1 : 25</option>
                                <option value="50"  >1 : 50</option>
                                <option value="75"  >1 : 75</option>
                                <option value="100"  >1 : 100</option>
                                <option value="200"  >1 : 200</option>
                                <option value="300"  >1 : 300</option>
                                <option value="400"  >1 : 400</option>
                                <option value="500"  >1 : 500</option>
                                <option value="700"  >1 : 700</option>
                                <option value="888"  >1 : 888</option>
                                <option value="1000"  >1 : 1000</option>
                            </select>
                        </td>
                        <td>
                            <select tabindex="3" name="calc[currency]" class="first-selected">
                                <option value="USD"  >USD</option>
                                <option value="EUR"  >EUR</option>
                            </select>
                        </td>
                        <td class="last tc-br center">
                            <button tabindex="4" type="button" class="fSubmit" onclick="calculateForm();" >计算</button>
                        </td>
                    </tr>
                </table>        </div>
        </form>
        <div id="calcute_rez"></div>
        <div>外汇计算器是非常方便和有效的工具. 您可以快速计算点值,点差,和掉期. 计算器已经程序化计算的所以参数, 因此您不必手动计算它们每个.<br />
            <br />
            使用计算器非常简单. 所有您要做的是选择交易工具, 手数大小, 水平值和货币对. 选择参数完成后点击计算按钮. 通过这样做, 您会看到这样的结果: 合约大小, 点值, 点差, 多头和空头掉期. 该工具适合新手和有经验的交易员.<br />
            <br />
            交易者的计算器对于那些交易多币种的特别有用. 不需要跟踪每个货币, 因为所有数据是在几秒内精确无误的自动计算. 交易工具的点值是根据它们的当前汇率计算.</div>
    </div>


    <script type="text/javascript" >
        var calculate_form_state = 1;

        function calculateForm(){
            if (calculate_form_state == 0) return;
            calculate_form_state = 0;

            var lot = $('#calc_lot').val();
            if (lot < 0.01) {
                $('#calc_lot').val('0.01');
            }
            if (lot > 100) {
                $('#calc_lot').val('100');
            }

            $('.dq-validate-errors').text('');

            calculate_form_state = 0;
            JsHttpRequest.query('/calculator/calculate/',
                    $('#form_calculator').serialize(),
                    function(result, errors){
                        calculate_form_state = 1;

                        if (result && result.res == 0){
                            $.dqValidate('#form_calculator', result);
                        } else if (result && result.res == 1){
                            $('#calcute_rez').html(result.data);
                        } else {
                            console.log(errors);
                        }
                    }, true
            );
        }

        function changeSymbol(obj) {
            if (calculate_form_state == 0) return;
            var symbol = obj.options[obj.selectedIndex].value;
            var alias = obj.options[obj.selectedIndex].id;

            $('.dq-validate-errors').text('');

            calculate_form_state = 0;
            JsHttpRequest.query('/calculator/',
                    $('#form_calculator').serialize() + '&symbol='+ symbol +'&alias='+ alias,
                    function(result, errors){
                        calculate_form_state = 1;
                        $('.dq-validate-errors').html();

                        if (result && result.res == 0){
                            $.dqValidate('#form_calculator', result);
                        } else if (result && result.res == 1){
                            $('#calculate_table').html(result.data);
                            $('#calcute_rez').html('');
                            $('select').styledSelect();
                        } else {
                            console.log(errors);
                        }
                    }, true
            );
        }

    </script>


    <div id="right">
        <ul id="r-menu">
            <li >
                <a href="/analytics/economic-calendar/"  >外汇日历</a>


            </li>
            <li >
                <a href="/analytics/forex-forecast/"  >外汇分析 外汇预测</a>


            </li>
            <li >
                <a href="https://my.cn.roboforex.com/cs/analytics"  target="_blank"  >GoldMany分析中心</a>


            </li>
            <li >
                <a href="/analytics/charts/"  >免费外汇图表</a>


            </li>
            <li  class="selected" >
                <a>外汇保证金计算器</a>


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