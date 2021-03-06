 <!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie8 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if IE 9 ]> <html class="no-js ie9 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="GoldMany外汇交易商提供超过200种的金融工具，包括外汇，期货，贵金属，黄金，
    能源等" />
    <meta name="keywords" content="新西兰外汇交易商 在线交易 外汇交易 外汇 免费15美金 保证金交易 美元 欧元" />
    <meta name="w1-verification" content="117844634768" />


    <title>关于GoldMany</title>
    <meta property="og:title" content="关于GoldMany" />
    <meta property="og:description" content="GoldMany外汇交易商提供超过200种的金融工具，包括外汇，期货，贵金属，
    黄金，能源等" />
    <meta property="og:url" content="http://cn.GoldMany.com/about/" />
    <meta property="og:image" content="/themes/rbforex/images/logo-soc-share.png" />

    <link href="/favicon.ico" rel="icon" type="image/x-icon"/>
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon"/>

    <link media="all" rel="stylesheet" href="/css/redmond.css"/>
    <link href="/css/jquery.jgrowl.css" rel="stylesheet" type="text/css"/>

    <link href="/css/jquery.fancybox-1.3.4.css?v=1" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="/css/style.css?v=180" type="text/css" />

    <!-- Raygun -->
    <script type="text/javascript" src="/js/raygun.min.js"></script>
    <script type="text/javascript">

        Raygun.init('SnxLQMCCmsCBWASJpoUn3g==', {ignore3rdPartyErrors: true}).attach();

    </script>
    <!-- /Raygun -->

    <script src="/js/production.min.js"></script>

    <link rel="stylesheet" href="/css/font-awesome.css?v=2" type="text/css" />


    <script type="text/javascript" >
        var is_sent_auth_request = false;

        var dqConfig = {
            'lk_domen' : 'https://my.cn.GoldMany.com/cs',
            'livesupport_url' : 'https://my.cn.GoldMany.com/cs/livesupport/',
            'livesupport_anonymous_url' : 'https://my.cn.GoldMany.com/cs/livesupport/anonymous/',
            'theme' : '/themes/rbforex/',
            'root_path' : '/',
            'callback_domen' : '',
            'lang' : 'cs',
            'ok' : 'Ok',
            'cancel' : 'Cancel',
            'callback_title' : 'Order callback',
            'button_selector': '.form button, .form .button, .likeBigButtonLoader'
        };


        function showFaqText(id)
        {
            var show = $('#faq_text'+id).css('display') == 'none' ? true : false;

            if (show) {
                $('#faq_text'+id).show();
            } else {
                $('#faq_text'+id).hide();
            }
        }

        $(function(){
            (new RBFX.Loader({use_global_button_selector: true})).initEvents();


        });

        $(document).ready(function(){
            $('#tua-submit').click(function(e){
                if (is_sent_auth_request){
                    e.preventDefault();
                    return;
                }

                is_sent_auth_request = true;
            });
        });

    </script>

    <script async src='https://www.google-analytics.com/ga.js'></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-75510320-1', 'auto');
        ga('send', 'pageview');

        var _gaq = _gaq || [];
        _gaq.push(['_setDomainName', 'GoldMany.com']);
        _gaq.push(['_trackPageview']);
        function gaqPush(category, action, opt_label, opt_noninteraction) {}
    </script>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
                document,'script','https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '240223389695091');
        fbq('track', "PageView");</script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=240223389695091&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->

    <script type="text/javascript">

    </script>
    <script type="text/javascript">

        var terminal_settings = {
            labels: {
                link_template: '您可以从 <a href=\"https://my.cn.GoldMany.com/cs/\">会员中心</a>' +
                '<a href=\"https://my.cn.GoldMany.com/cs/help/download-center/\" target=\"_blank\">的下载中心</a> ' +
                '下载交易平台.'
            },
            terminal: {
                mt4: {
                    demo_url: '/register-demo/mt',
                    real_url: '/register/mt',
                    usage: 'MetaTrader4中使用',
                    callback: function() {
                        gaqPush('Downloads 4','EXE');
                        ga('send', 'event', 'Download','click','Metatrader4');
                    }
                },
                mt5: {
                    demo_url: '/register-demo/mt5',
                    real_url: '/register/mt5',
                    usage: 'MetaTrader5中使用',
                    callback: function() {
                        gaqPush('Downloads 5','EXE');
                        ga('send', 'event', 'Download','click','Metatrader5');
                    }
                },
                ctrader: {
                    demo_url: '/register-demo/ct',
                    real_url: '/register/ct',
                    usage: 'cTrader中使用',
                    callback: function() {
                        gaqPush('Downloads cTrader','EXE');
                        ga('send', 'event', 'Download','click','cTrader');
                    }
                },
                viking: {
                    demo_url: '/register-demo/viking',
                    real_url: '/register/viking',
                    usage: 'Viking Trader中使用',
                    callback: function() {
                        gaqPush('Downloads Viking','EXE');
                        ga('send', 'event', 'Download','click','Viking');
                    }
                }
            }
        };
        $(document).ready(function() {
            $('iframe').each(function() {
                var url = $(this).attr('src');
                if (url.indexOf('javascript:') != -1) return;
                if (url.indexOf("?") > 0) {
                    $(this).attr({
                        "src" : url + "&wmode=transparent",
                        "wmode" : "Opaque"
                    });
                }
                else {
                    $(this).attr({
                        "src" : url + "?wmode=transparent",
                        "wmode" : "Opaque"
                    });
                }
            });

            var $body =	$('body'),
            // Modal template
                    $modalOverlay =	$("<div class='modal fade' id='my-modal' tabindex='-1' role='dialog' " +
                            "style='display: none;'> <div class='modal-dialog'> " +
                            "<div class='modal-content'> <div class='modal-content-container'> " +
                            "<div class='modal-header'> <a class='close button-close'>" +
                            "<img src='/images/times-big.png' alt='X' width='14' height='14'/>" +
                            "</a> <p class='modal-header-description' data-id='modal-header-desc'></p> </div> " +
                            "<div class='modal-body'> <div class='modal-body-header'> <h2>开设交易账户</h2> " +
                            "<h3 data-id='modal-body-header-desc-h3'></h3> </div> " +
                            "<form action='' class='modal-form' id='modal_form' method='GET'> " +
                            "<label for='email' class='form-label'>邮箱:</label> <div class='form-input'> " +
                            "<input autocomplete='off' type='text' name='email' id='email' class='focus-it' value='' " +
                            "placeholder=''/> </div> 				" +
                            "<div class=\"account_type_block\"><label for='accountType' class='form-label'>账户类型:" +
                            "</label> <div class='form-input radio'> " +
                            "<label id='real-title' class='radio-title checked'>真实</label> " +
                            "<label id='demo-title' class='radio-title'>模拟</label></div> </div> " +
                            "</form> </div> <div class='modal-footer'> <a class='button-close' data-dismiss='modal'>" +
                            "<img src='/images/times-small.png' alt='x' width='8' height='8'/>" +
                            "<i class='icon'></i><span>感谢,我已经有一个</span></a> " +
                            "<a class='button-open' id='modal_form_register' href='#'> <span>开设账户</span> </a> " +
                            "</div> </div> </div> </div> </div>");
            // Append overlayed modal to body of document
            $body.append($modalOverlay);
            $('#modal_form_register').click(function(e) {
                e.preventDefault();
                $('#modal_form').submit();
            });

            $('a.modal-trigger').bind('click', function(e){
                var $body = $('body'),
                        trigger = $(this),
                        $my_modal = $('#my-modal'),
                        type = trigger.attr('data-terminal');
                if (!type || terminal_settings.terminal[type] === undefined) {
                    return;
                }
                var terminal_data = terminal_settings.terminal[type];
                e.preventDefault();
                if (terminal_data.callback && (terminal_data.callback instanceof Function)) {
                    terminal_data.callback();
                }
                // Data to add to the modal
                $('[data-id="modal-header-desc"]').html(terminal_settings.labels['link_template'].replace('<url>', trigger.attr('href')));
                $('[data-id="modal-body-header-desc-h3"]').html(terminal_data.usage);
                $('#modal_form').attr('action', dqConfig.lk_domen + (terminal_data.real_url ? terminal_data.real_url : terminal_data.demo_url));
                $('#real-title').attr('data-register-form', dqConfig.lk_domen + terminal_data.real_url);
                $('#demo-title').attr('data-register-form', dqConfig.lk_domen + terminal_data.demo_url);
                // Trigger modal
                $my_modal.show();
                // Append overlayed modal to body of document
                $body.append($modalOverlay);
                // Global attributes
                var $buttonClose = $('.button-close');
                //var $manualDownload  = $('.manual-download');
                // Set a file downloading timeout of 3s
                /* var timeout = setTimeout(function () {
                 var href = trigger.attr('href');
                 window.location.href = href;
                 }, 0); */
                // Cancel timeout if modal were closed by buttons
                $buttonClose.bind('click', function(){
                    $my_modal.hide();
                    // clearTimeout(timeout);
                });
                // Cancel timeout if download were triggered manually
                /* $manualDownload.bind('click', function(){
                 clearTimeout(timeout);
                 }); */
                // Cancel timeout if modal were closed by ESC
                $(document).bind('keyup', function(e){
                    if (e.keyCode == 27) {
                        $my_modal.hide();
                        clearTimeout(timeout);
                    }
                });
                // Add/remove a ckecked class to the radio labels (for CSS styling)
                var $modalCheckboxes = $(".form-input.radio label");
                $modalCheckboxes.click(function() {
                    $modalCheckboxes.removeClass('checked');
                    $(this).addClass('checked');
                    $('#modal_form').attr('action', $(this).attr('data-register-form'));
                });

                $(document).click(function(event) {
                    if (!$(event.target).closest(".modal-trigger, .modal-dialog").length) {
                        $("#my-modal").hide();
                    }
                });
            });

        });

    </script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('.rw-tip_holder, .infobanner_container, #h-offer, #tu-registration').mouseenter(
                    function() {
                        var rw_title = '外汇交易涉及高风险, 可能导致失去您的整个投资.';
                        $(this).attr('title', rw_title);
                    })
                    .hover(
                            function(){
                                var title = $(this).attr('title');
                                $(this).data('rw-tip_text', title).removeAttr('title');
                                $('<p class="rw-tip"></p>').text(title).appendTo('body').fadeIn('slow');
                            },
                            function() {
                                $(this).attr('title', $(this).data('rw-tip_text'));
                                $('.rw-tip').remove();
                            })
                    .mousemove(
                            function(e) {
                                var mousex = e.pageX + 20;
                                var mousey = e.pageY + 20;
                                $('.rw-tip').css({ top: mousey, left: mousex })
                            });
        });
    </script>


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
        <a href="/" >首页</a>/ 关于GoldMany
    </div>

    <div id="left">
        <h1 >关于GoldMany</h1>
        <div ><style type="text/css">
                .carousel_wrapper {
                    width: 100%;
                    overflow: hidden;
                }
                .carousel-holder {
                    border: 1px solid #E0E9EB;
                    background: #fff;
                    width: 100%;
                    height: 210px;
                    margin: 0 0px 20px;
                    padding: 0px;
                    overflow: hidden;
                }
                .list_carousel {
                    width: 632px;
                    height: 190px;
                    margin: 10px 5px;
                }
                .list_carousel ul {
                    margin: 0;
                    padding: 0;
                    list-style: none;
                    display: block;
                }
                .list_carousel li {
                    text-align: center;
                    width: 118px;
                    height: 185px;
                    padding: 0;
                    margin: 4px;
                    display: block;
                    float: left;
                }
                .list_carousel li .carousel-item-capture {
                    text-align: center;
                    padding: 5px;
                    font-size: 11px;
                    width: 100%;
                    box-sizing: border-box;
                }
                .list_carousel li .carousel-item-img {
                    height: 110px;
                    position: relative;
                    margin-bottom: 5px;
                }
                .list_carousel li .carousel-item-img img {
                    display: inline-block;
                    vertical-align: bottom;
                    margin: 0 auto;
                }
                .clearfix {
                    float: none;
                    clear: both;
                }
                .timer {
                    background-color: #999;
                    height: 6px;
                    width: 0px;
                }</style>
            <div class="about-robo">
                <p style="text-align: justify;">
                    Gold  Many 是一家总部位于英国伦敦的国际外汇交易商。
                    通过目前最先进的在线外汇交易技术，
                    向交易者提供只有投资银行和高净值投资者才能使用到的低廉价格以及超高的流动性服务。</p>
                <p style="text-align: justify;">
                    公司秉承依法、合规、真诚、务实的服务宗旨，本着以真心换真情、以服务赢得用户的信条，诚信经营、
                    规范运作、创新发展的经营理念，为投资者提供最具竞争力的专业交易平台。提供包括外汇货币对、差价合约、
                    商品和欧美股指等近百种交易产品。我们承诺：将以最优秀的团队和最专业的技术，为您提供创造更多财富的机遇！
                </p>
                <p style="text-align: justify;">
                    公司的经营活动受到英国、澳大利亚等其他多国金融监管机构的监督，
                    公司通过多种平台为客户提供5天24小时规范化操作的全方位金融服务，
                    实时提供全球逾10家顶尖银行及流通量提供商的实时报价入口，
                    以极具竞争力的价格及速度执行所有交易。
                </p>
                <p style="text-align: justify;">
                    “求真务实，追求卓越”是我们价值的体现，“汇聚财智 ，共享成长”是我们的责任，
                    我们为成为一流的金融企业而努力，为您提供全面便捷的投资服务，并将一路与您同行。
                </p>
                <h3 class="styled-h first">
                    <i class="icon">&nbsp;</i><span class="styled-h-text">监管</span>
                </h3><br/><br/><br/><br/>
                <ul class="regulation" style="list-style: none;padding-left: 0px;">
                    <li>
                        <img alt="" src="/images/about/belize.png" style="float: left; width: 80px;
                        height: 40px; display: block; margin: -15px 10px 14px 0px;" />
                        <div class="description">
                            Gold Many Global Ltd受到Vanuatu监管, 执照号14668.
                        </div>
                        <div class="clear">
                            &nbsp;</div>
                    </li>
                </ul>
                {{--<p>--}}
                    {{--阅读更多在&quot;<a href="/about/regulation/" target="_blank">合法</a>&quot;部分.</p>--}}
                <div class="left">
                    <h3 class="styled-h first">
                        <span class="styled-h-text">公司的企业使命</span></h3>
                    <ul class="mission">
                        <li style="background:url('/images/list_bullet.png') no-repeat 0px 3px;">
                            可达性- GoldMany 专家的专业援助在您需要的任何时候可供使用.</li>
                        <li style="background:url('/images/list_bullet.png') no-repeat 0px 3px;">
                            透明性 &ndash; 公司的工作流程符合所有法律要求, 对于所有客户和合作伙伴是简单, 便捷和易于理解.</li>
                        <li style="background:url('/images/list_bullet.png') no-repeat 0px 3px;">
                            机密性 &ndash; 关于我们合作伙伴和客户的所有信息是绝对安全, 排除任何未经授权的访问.</li>
                    </ul>
                    <div class="clearfix">
                        &nbsp;</div>
                    <p>
                        阅读更多在 &quot;<a href="/about/mission" target="_blank">企业使命</a>&quot; 部分.</p>
                </div>
                <div class="right">
                    <h3 class="styled-h first">
                        <span class="styled-h-text">公司的商业模式</span></h3>
                    <p>
                        有两种典型的外汇经纪人模式. 第一个是直通式处理(STP), 经纪公司是客户和流动性提供商之间的中介机构. 第二个是Market Maker (MM), 在那儿客户通过外汇经纪人买入和卖出.</p>
                    <p>
                        对所有交易账户, GoldMany (CY)有限公司通过桥运用STP技术, 它提供了直接访问流动性提供商. 对于所有的美分账户, GoldMany Ltd 是交易商, 也就是说是第二种交易模式. 这是因为总经纪商的交易条件不允许低于一定的水平 .</p>
                    <p>
                        阅读更多在 &quot;<a href="/about/business-model/" target="_blank">商业模式</a>&quot; 部分.</p>
                </div>
                <div class="clearfix">
                    &nbsp;</div>
                <h3 class="styled-h first">
                    <span class="styled-h-text">我们的奖项</span></h3>
                <p>
                    我们竞争对手的尊重和客户的赞誉给予我们依据乐观地展望未来. 激发这种乐观情绪最好的方法是由GoldMany公司接收的奖项.</p>
                <div class="carousel-holder">
                    <div class="list_carousel">
                        <ul id="foo0">
                            <li>
                                <div class="carousel-item-img">
                                    <img class="icon" src="/images/awards/mena_2015_premia_110.png" style="width: 83px; height: 110px;" /></div>
                                <div class="carousel-item-capture">
                                    2015年最佳外汇零售经济商</div>
                            </li>
                            <li>
                                <div class="carousel-item-img">
                                    <img alt="Best Retail Forex Broker" src="/images/awards/Forex-Brand-Asia.png" /></div>
                                <div class="carousel-item-capture">
                                    亚洲增长最快的外汇品牌 2014年</div>
                            </li>
                            <li>
                                <div class="carousel-item-img">
                                    <img alt="Best Retail Forex Broker" src="/images/awards/Standard-Forex-Broker.png" /></div>
                                <div class="carousel-item-capture">
                                    2014 最佳标准外汇经纪商</div>
                            </li>
                            <li>
                                <div class="carousel-item-img">
                                    <img class="icon" src="/images/awards/News-Analysis-Provider.png" /></div>
                                <div class="carousel-item-capture">
                                    2013 最佳外汇新闻 &amp; 分析提供者</div>
                            </li>
                            <li>
                                <div class="carousel-item-img">
                                    <img class="icon" src="/images/awards/Brand-Russia-CIS.png" /></div>
                                <div class="carousel-item-capture">
                                    2013 俄罗斯和独联体最佳零售外汇品牌奖</div>
                            </li>
                            <li>
                                <div class="carousel-item-img">
                                    <img class="icon" src="/images/awards/Best-retail-Forex-Broker.png" /></div>
                                <div class="carousel-item-capture">
                                    2013 最佳零售外汇经纪人</div>
                            </li>
                            <li>
                                <div class="carousel-item-img">
                                    <img alt="Best Retail Forex Broker" src="/images/awards/Best-Execution-Broker.png" /></div>
                                <div class="carousel-item-capture">
                                    2013 交易商及经纪商奖项 - 东欧最佳价格执行经纪商</div>
                            </li>
                            <li>
                                <div class="carousel-item-img">
                                    <img class="icon" src="/images/awards/Faster-Grouning-Europe.png" /></div>
                                <div class="carousel-item-capture">
                                    2012 东欧增长最快的ECN经纪商</div>
                            </li>
                        </ul>
                        <div class="clearfix">
                            &nbsp;</div>
                    </div>
                </div>


                <div class="clearfix">
                    &nbsp;</div>

                <h3 class="styled-h first">
                    <span class="styled-h-text">联系我们</span></h3>
                <p style="font-size:16px;">
                    Gold Many Global Ltd</p>
                <p>
                    <strong>商业地址</strong>: 9 Pantygraigwen Road  Pontypridd Mid   Glamorgan  United 	Kingdom CF37 2RR<br />
                    <strong>电话</strong>: 400-800-0654<br />
                    <strong>邮箱</strong>:&nbsp;<a href="mailto:support@goldmanyfx.com">support@goldmanyfx.com</a></p>
            </div>
            <p>
                阅读更多在&quot;<a href="/about/contacts/" target="_blank">联系我们</a>&quot; 部分.</p>
            <script src="/files/filemanager/image3/misc/jquery.carouFredSel-6.2.1-packed.js"></script>
            <script type="text/javascript" language="javascript">
                $(function() {

                    //  Basic carousel, no options
                    $('#foo0').carouFredSel({
                        auto: {
                            pauseOnHover: 'resume',
                            progress: '#timer1'
                        }
                    }, {
                        transition: true
                    });

                });
            </script></div>
    </div>

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
            <li >
                <a href="/about/feedback/"  >反馈建议</a>
            </li>
            <li >
                <a href="/about/faq/"  >常见问题</a>
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