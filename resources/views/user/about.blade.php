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
        <table class="soc-2 share">
            <tr>
                <td class="soc-3">
                    <div class="fb-like" data-href="http://cn.GoldMany.com/about/" data-send="false"
                         data-layout="button_count" data-width="82" data-show-faces="true">
                    </div>
                    <div id="fb-root"></div>
                    <script>

                        (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id))
                                return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&status=0";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));

                    </script>
                </td>
                <td class="soc-3 linkedin">
                    <script src="//platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
                    <script type="IN/Share" data-counter="right"></script>
                </td>
                <td>
                    <a href="https://twitter.com/share" class="twitter-share-button"
                       data-url="http://cn.GoldMany.com/about/">
                    </a>
                    <script>!function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "//platform.twitter.com/widgets.js";
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, "script", "twitter-wjs");</script>
                </td>
                <td>
                    <!-- Place this tag where you want the +1 button to render. -->
                    <div class="g-plusone" data-size="medium" data-annotation="bubble" data-width="300"
                         data-href="http://cn.GoldMany.com/about/">
                    </div>

                    <!-- Place this tag after the last +1 button tag. -->
                    <script type="text/javascript">

                        (function() {
                            var po = document.createElement('script');
                            po.type = 'text/javascript';
                            po.async = true;
                            po.src = 'https://apis.google.com/js/plusone.js';
                            var s = document.getElementsByTagName('script')[0];
                            s.parentNode.insertBefore(po, s);
                        })();

                    </script>
                </td>
            </tr>
        </table>
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
                    國家外匯經紀商GoldMany是一個金融集團, 在短時間內即成為金融市場領先的外匯經紀商並且獲取了
                    數以萬計客戶的信心. GoldMany金融集團由GoldMany(CY)Ltd, RoboTrade和GoldMany LP組成.</p>
                <p style="text-align: justify;">
                    自创立时刻, GoldMany一直专注于创造舒适的交易条件和提供高质量的服务给客户,
                    公司的主要优势是完美的声誉, 客户服务以及技术创新. 今天, 我们在积极成功的运营于全球一些国家
                    和尽力扩展我们的活动领域, 涵盖新的地区. 我们对提供给我们客户和合作伙伴的服务感到非常自豪,
                    无论他们的经验和投资的金额, 所有服务品质是相同的.
                </p>
                <h3 class="styled-h first">
                    <i class="icon">&nbsp;</i><span class="styled-h-text">监管</span></h3>
                <ul class="regulation" style="list-style: none;padding-left: 0px;">
                    <li>
                        <img alt="" src="/images/about/cysec.png" style="float: left;
                        width: 120px; display: block; height: 55px; margin: -3px 10px 14px 0px;" />
                        <div class="description">
                            GoldMany (CY) Ltd受到CySEC监管, 执照号191/13并且还在英国FCA注册. 编号为608962.</div>
                        <div class="clear">
                            &nbsp;</div>
                    </li>
                    <li>
                        <img alt="" src="/images/about/icf.png"
                             style="float: left; width: 120px; display: block;
                             margin: -3px 10px 14px 0px; height: 55px;" />
                        <div class="description">
                            并且GoldMany (CY) Ltd 是塞浦路斯
                            <a href="https://my.robofx.com/files/document/
                            information_on_investor_compensation_scheme.pdf" target="_blank">
                                投资者赔偿基金会
                            </a>的一名正式会员, 可为投资者提供高达20,000欧元存款的保险.
                        </div>
                        <div class="clear">
                            &nbsp;</div>
                    </li>
                    <li>
                        <img alt="" src="/images/about/belize.png" style="float: left; width: 120px; height: 55px; display: block; margin: -3px 10px 14px 0px;" />
                        <div class="description">
                            GoldMany Ltd受到IFSC的监管, 执照号为 IFSC/60/271/TS/16.</div>
                        <div class="clear">
                            &nbsp;</div>
                    </li>
                    <li>
                        <img alt="" src="/images/about/FC.png" style="float: left; width: 120px; display: block; height: 55px; margin: -3px 10px 14px 0px;" />
                        <div class="description">
                            此外, GoldMany Ltd是国际金融委员会的一名正式成员, 此独立组织致力于调解投资者与经纪商的纠结已有超过50年的历史.</div>
                        <div class="clear">
                            &nbsp;</div>
                    </li>
                </ul>
                <p>
                    阅读更多在&quot;<a href="/about/regulation/" target="_blank">合法</a>&quot;部分.</p>
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
                <p>
                    阅读更多在&quot;<a href="/about/awards/" target="_blank">奖项</a>&quot; 部分.</p>
                <div class="left">
                    <h3 class="styled-h first">
                        <span class="styled-h-text">公司在媒体上</span></h3>
                    <p>
                        信息的透明度和为我们客户提供尽可能好的交易条件一直是我们从事GoldMany最主要的原则之一. 我们非常高兴我们的业绩得到媒体的注意, 因为这表示公司正在朝着正确的方向前进.</p>
                    <ul class="gallery">
                        <li>
                            <img alt="" src="/images/about/world_finance_media.png" style="height: 174px; width: 129px;" /></li>
                        <li>
                            <img alt="" src="/images/about/world_finance_2.jpg" /></li>
                    </ul>
                    <div class="clearfix">
                        &nbsp;</div>
                    <p style="margin-top:10px;">
                        阅读更多在&quot;<a href="/about/media/" target="_blank">GoldMany媒体</a>&quot; 部分.</p>
                </div>
                <div class="right">
                    <h3 class="styled-h first">
                        <span class="styled-h-text">展览会</span></h3>
                    <p>
                        参与国际和俄罗斯外汇展览会是一个极好的机会来介绍公司最新的方案和面对面从客户那里接收反馈, 这对于任何现代化和发展中公司是非常重要的.</p>
                    <ul class="gallery">
                        <li>
                            <img alt="" src="/images/about/logo_money_fair.jpg" /></li>
                        <li>
                            <img alt="" src="/images/about/barcelona.png" style="width: 128px; height: 128px;" /></li>
                    </ul>
                    <div class="clearfix">
                        &nbsp;</div>
                    <p style="margin-top:28px;">
                        阅读更多在&quot;<a href="/about/exhibition/" target="_blank">GoldMany 展览会</a>&quot; 部分.</p>
                </div>
                <div class="clearfix">
                    &nbsp;</div>
                <h3 class="styled-h first">
                    <span class="styled-h-text">赞助</span></h3>
                <p>
                    除了经纪服务的自身发展, GoldMany公司还积极参与许多创新项目, 这并不总是跟外汇市场有密切关系. 我们公司正努力定期地成为不同活动的赞助者, 在未来我们致力于追随这个方向.</p>
                <!--ul class="sponsors">
                <li>
                  <a class="adress-title" href="/about/sponsorship/" target="_blank">2012第6届年度自动交易锦标赛银质赞助商</a>
                  <div class="logo">
                    <img alt="" src="/files/filemanager/image/logo_certificate.jpg" /></div>
                  <div class="description">
                    在经历3个月时间, 最佳交易机器人争夺80,000美元大型奖项. GoldMany是这个锦标赛的赞助商之一, 提供比赛的铜牌获得者15,000美元的奖项.</div>
                </li>
              </ul-->
                <ul class="sponsors">
                    <li>
                        <a class="adress-title" href="/about/sponsorship/starikovich-heskes-dakar-2017/" style="width: 100%;" target="_blank">2017年达喀尔拉力赛&quot;Starikovich-Heskes队伍&quot;赞助</a>
                        <div class="logo" style="margin-top: -10px;">
                            <img alt="" src="http://www.GoldMany.ru/files/filemanager/image3/structure/about/sponsorship/dakar_logo.PNG" style="width:80px;" /></div>
                        <div class="description">
                            GoldMany集团成为2017年达喀尔拉力竞标赛塞浦路斯&quot;Starikovich-Heskes队伍&quot;的官方赞助商. 队伍的驾驶员,Roman Starikovich,是一位在欧洲,非洲,以及澳洲有超过60,000公里越野里程经验丰富的越野选手.</div>
                    </li>
                    <li>
                        <a class="adress-title" href="/about/sponsorship/ipa-limassol-football-team-2016/" style="width: 100%;" target="_blank">利马索尔足球队赞助商</a>
                        <div class="logo" style="margin-top: -5px;">
                            <img src="http://www.GoldMany.ru/files/filemanager/image3/structure/about/sponsorship/football.png" style="width: 90px;margin-top: -10px;" /></div>
                        <div class="description">
                            GoldMany金融集团是利马索尔警察局足球队的官方赞助商. 与警察局的合作是公司活动透明度的又一体现,GoldMany致力于在现代社会的各个领域中都合法诚实的进行运作.</div>
                    </li>
                </ul>
                <p>
                    阅读更多在&quot;<a href="/about/sponsorship/" target="_blank">赞助</a>&quot; 部分.</p>
                <h3 class="styled-h first">
                    <span class="styled-h-text">联系我们</span></h3>
                <p style="font-size:16px;">
                    GoldMany (CY) Ltd, Limassol, Cyprus</p>
                <p>
                    <strong>商业地址</strong>: Soboh House 377, 28th October Street, office #1, CY-3107 Limassol, Cyprus<br />
                    <strong>电话</strong>: +357 25 262660<br />
                    <strong>邮箱</strong>:&nbsp;<a href="mailto:info@robofx.com">info@robofx.com</a></p>
                <p style="text-align: center;">
                    <a href="/images/about/cy_office_1.JPG" rel="image_group" style="margin-right: 20px;">
                        <img src="/images/about/cy_office_1_s.jpg"
                             style="height: 100px;box-shadow: 0 0 10px #344964;" /></a>
                    <a href="/images/about/cy_office_2.JPG" rel="image_group"
                       style="margin-right: 20px;">
                        <img src="/images/about/cy_office_2_s.jpg"
                             style="height: 100px;box-shadow: 0 0 10px #344964;" /></a>
                    <a href="/images/about/cy_office_3.JPG" rel="image_group">
                        <img src="/images/about/cy_office_3_s.jpg"
                             style="height: 100px;box-shadow: 0 0 10px #344964;" /></a></p>
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
                <a href="/about/sponsorship/"  >锦标赛</a>
            </li>
            <li >
                <a href="/about/results-2014/"  >2014 年成绩</a>
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



        <ul id="r-icons">
            <li><a href="https://my.cn.GoldMany.com/cs/register/" class="rw-tip_holder" id="fdi1">开设<br />
                    真实账户</a></li>
            <li><a href="/trading-accounts/demo/" id="fdi2">开设<br />模拟账户</a></li>
            <li>
                <a href="https://my.cn.GoldMany.com/cs/help/download-center/" class="modal-trigger"
                   data-terminal="mt4" id="fdi3r">下载<br />METATRADER4</a>
            </li>
            <li class="last"><a href="https://my.cn.GoldMany.com/cs/help/download-center/" id="fdi4"
                                class="modal-trigger" data-terminal="mt4"
                                onclick="gaqPush('Downloads Multiterminal','EXE'); ga('send', 'event', 'Download','click','Multiterminal');" target="_blank">下载MultiTerminal</a>
            </li>
        </ul>
        <div class="risk-warning">风险警示: 外汇交易意味着您是自愿承担失去资金的可能风险.</div>


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