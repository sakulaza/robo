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


    <title>公司监管</title>
    <meta property="og:title" content="公司监管" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="/about/regulation/" />
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
        <a href="/" >首页</a>/<a href="/about/" >关于GoldMany</a>/公司监管
    </div>

    <div id="left">
        <h1 >公司监管</h1>
        <table class="soc-2 share">
            <tr>
                <td class="soc-3">
                    <div class="fb-like" data-href="http://cn.GoldMany.com/about/regulation/" data-send="false" data-layout="button_count" data-width="82" data-show-faces="true"></div>
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
                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://cn.GoldMany.com/about/regulation/"></a>
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
                    <div class="g-plusone" data-size="medium" data-annotation="bubble" data-width="300" data-href="http://cn.GoldMany.com/about/regulation/"></div>

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
        <div ><p>
                GoldMany (CY) Ltd 为欧洲外汇经济商, 受到CySEC监管, 执照号191/13, 并且在英国金融行为局(FCA)注册, 编号为608962.</p>
            <p>
                并且GoldMany (CY) Ltd 是塞浦路斯投资者赔偿基金会的一名正式会员, 可为投资者提供高达20,000欧元存款的保险.</p>
            <p>
                GoldMany Ltd为受到国家监管的外汇经纪商IFSC执照号/60/271/TS/16.</p>
            <p>
                此外, GoldMany Ltd是国际金融委员会的一名正式成员, 此独立组织致力于调解投资者与经纪商的纠结已有超过50年的历史.</p>
            <div>
                <div class="note_block" style="width: 310px; float:left; text-align: justify;height: 495px;">
                    <a href="https://my.robofx.com/files/document/GoldMany_cy_ltd_cysec_licence.pdf" target="_blank"><img alt="CySEC" src="/files/filemanager/images2/about/regulation/CySEC-License.png" style="margin: 20px 15px 20px 0px; width: 310px; height: 143px;" /></a>
                    <p>
                        <strong>CySEC </strong>(塞浦路斯证券交易委员会)是2001年&ldquo;塞浦路斯证券交易委员会&rdquo;法律框架下在塞浦路斯成立的一个金融监管机构. 2004年, 塞浦路斯加入了欧洲联盟 (EU) , 获得权利颁发许可证给在欧盟境内进行金融活动的公司. CySEC 许可证确认金融监管者的所有过程都被观察和所有的要求都满足, 允许公司在169个国家提供有关接受和传输客户的订单以及代表客户执行订单的服务.</p>
                    <p>
                        CySEC<strong>目的</strong>是提供许可, 监管, 和经纪人,经纪公司, 交易中心的管控, 股票和外汇交易的操作实施以及条例和规章的管理与实施, 使得塞浦路斯金融市场更加可靠和透明.</p>
                    <p>
                        <strong>GoldMany (CY) Ltd</strong> 有限公司, 隶属于GoldMany集团, 获得塞浦路斯证券交易委员会(CySEC)<a href="https://my.robofx.com/files/document/GoldMany_cy_ltd_cysec_licence.pdf" target="_blank">许可证, No. 191/13</a>.</p>
                    <p style="margin-bottom: 0px;">
                        <strong>监管网站</strong> - <a href="http://www.cysec.gov.cy/en-GB/entities/investment-firms/cypriot/37606/" target="_blank">塞浦路斯证券交易委员会</a></p>
                </div>
                <div class="note_block" style="width: 310px; margin-left: 345px; text-align: justify;height: 495px;">
                    <img alt="ICF" src="/files/filemanager/images2/about/regulation/ICF.png" style="margin: 0px 15px 20px 0px; height: 163px;" />
                    <p>
                        <strong><a href="https://my.robofx.com/files/document/information_on_investor_compensation_scheme.pdf" target="_blank">塞浦路斯投资者赔偿基金会</a> (ICF)</strong> 是一个组织, 如果公司无法提供补偿, 它提供在CySEC注册公司的投保客户补偿金. 在这种情况下, 一个客户赔偿可能高达20,000欧元, 不论客户有多少交易账户, 基础货币, 和提供投资服务的地方. 如果索赔人不同意赔偿金额, 在接到相关通知10天内, 他有权上诉至 CySEC 解释证明赔偿的金额.</p>
                    <p>
                        一旦 CySEC 指定赔偿金额, 如果金额被认为是合理的, 这个资金有义务在3个月内赔偿给每个索赔人.</p>
                    <p>
                        这个基金的<strong>目的</strong>是提供客户补偿金, 以防基金会组织成员无法履行他们的义务.</p>
                    <p style="">
                        <strong>GoldMany (CY) 有限公司</strong>, 隶属于GoldMany集团, 是塞浦路斯投资者赔偿基金会的正式成员.</p>
                </div>
                <div class="clear">
                    &nbsp;</div>
                <div class="note_block" style="width: 310px; float: left; text-align: justify;height: 520px;">
                    <img alt="Financial Service Providers Register " src="/files/filemanager/images2/about/regulation/belize.png" style="margin: 0px 15px 20px 0px; width: 310px; height: 163px;" />
                    <p>
                        <strong>伯利兹IFSC</strong> (伯利兹国际金融服务委员会) 是伯利兹的具有国际水平的金融服务，市场的监管机构.</p>
                    <p>
                        IFSC的工作通过伯利兹证券部被管理的, 以及遵循国际金融服务委员会的法案 (IFSC 法案).作为金融服务市场的监管机构, IFSC发放许可证还对市场参与者的操作进行监控,以及做最有效, 透明和可靠的许可证持有者的担保单位进行运作。监管机构确保只有最可靠的和有社会责任的平台能获得这个许可证在伯利兹境内外操作.</p>
                    <p>
                        IFSC伯利兹遵循国际原则政策 AML (Anti-Money Laundering) 洗黑钱的防止机构。</p>
                    <p>
                        <strong>GoldMany Ltd 公司</strong>拥有伯利兹IFSC特殊的经纪执照 &quot;基于金融和商品的金融衍生工具和其他证券交易&quot;, 执照号 IFSC/60/271/TS/16.</p>
                    <p style="margin-bottom: 0px;">
                        <strong>监管网站</strong> - <a href="http://www.ifsc.gov.bz/" target="_blank">伯利兹国际金融服务委员会</a></p>
                </div>
                <div class="note_block" style="width: 310px; margin-left: 345px; text-align: justify;height: 520px;">
                    <img alt="The Financial Commission" src="/files/filemanager/images2/about/regulation/finance.png" style="margin: 0px 15px 20px 0px; width: 310px;" />
                    <p>
                        <strong>国际金融委员会是</strong> 一直从事于解决交易者和经纪公司之间争议问题超过50年的一个独立组织. 该委员会有令人印象深刻的赔偿基金, 由来自世界各地的经纪活动专家组成. 他们在外汇上的丰富经验, 职业信誉, 和法律素养使他们能够找到双方都能接受的涉及任何争端的解决方案. 委员会的决定是有约束力的决定,即. 所有事情的参与者应该遵循它们.</p>
                    <p>
                        委员会的<strong>目的</strong> 是参与者和他们的客户之间审理前另一种冲突解决方案. 您可以用俄语, 英语, 西班牙语, 和中文向金融委员会提交申请. 申请受理时间为7天.</p>
                    <p>
                        <strong>GoldMany</strong>&nbsp;是金融委员会<a href="http://financialcommission.org/2014/01/14/the-financial-commission-is-pleased-to-announce-its-newest-member-GoldMany-2/" target="_blank">的正式成员</a>.</p>
                    <p style="margin-bottom: 0px;">
                        <strong>监管网站</strong>&nbsp;- <a href="http://financialcommission.org/" target="_blank">金融委员会</a></p>
                </div>
                <div class="clear">
                    &nbsp;</div>
            </div>
            <p>
                GoldMany(CY) Ltd 在欧洲29个国家注册为合法投资公司, 国家如下:</p>
            <div class="note_block">
                <table border="0" cellpadding="1" cellspacing="1" style="width: 647px;">
                    <tbody>
                    <tr>
                        <td>
                            <table class="ps-table">
                                <tbody>
                                <tr>
                                    <td>
                                        <img alt="" src="/files/filemanager/image3/structure/about/regulation/at.png" style="width: 18px; height: 12px;" /></td>
                                    <td style="text-align: left">
                                        奥地利</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <a href="https://www.fma.gv.at/en/" target="_blank">FMA (Financial Market Authority)</a></td>
                    </tr>
                    <tr>
                        <td>
                            <table class="ps-table">
                                <tbody>
                                <tr>
                                    <td>
                                        <img alt="" src="/files/filemanager/image3/structure/about/regulation/cy.png" style="width: 18px; height: 12px;" /></td>
                                    <td style="text-align: left">
                                        塞浦路斯</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <a href="http://www.cysec.gov.cy/en-GB/entities/investment-firms/cypriot/37606/" target="_blank">CySEC (Cyprus Securities and Exchange Commission)</a></td>
                    </tr>
                    <tr>
                        <td>
                            <table class="ps-table">
                                <tbody>
                                <tr>
                                    <td>
                                        <img alt="" src="/files/filemanager/image3/structure/about/regulation/cz.png" style="width: 18px; height: 12px;" /></td>
                                    <td style="text-align: left">
                                        捷克</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <a href="https://apl.cnb.cz/apljerrsdad/JERRS.WEB10.VIZITKA?p_lang=en&amp;p_SEQ_ID=10020010&amp;p_VER_ID=1000&amp;p_DATUM=18.12.2013&amp;p_ROL_KOD=" target="_blank">CNB (Czech National Bank)</a></td>
                    </tr>
                    <tr>
                        <td>
                            <table class="ps-table">
                                <tbody>
                                <tr>
                                    <td>
                                        <img alt="" src="/files/filemanager/image3/structure/about/regulation/dk.png" style="width: 18px; height: 12px;" /></td>
                                    <td style="text-align: left">
                                        丹麦</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <a href="https://www.finanstilsynet.dk/" target="_blank">Danish FSA (Financial Supervisory Authority)</a></td>
                    </tr>
                    <tr>
                        <td>
                            <table class="ps-table">
                                <tbody>
                                <tr>
                                    <td>
                                        <img alt="" src="/files/filemanager/image3/structure/about/regulation/ee.png" style="width: 18px; height: 12px;" /></td>
                                    <td style="text-align: left">
                                        爱沙尼亚</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <a href="http://www.fi.ee/index.php?id=1975&amp;action=showentity&amp;eid=86251" target="_blank">EFSA (Estonian Financial Supervision Authority)</a></td>
                    </tr>
                    <tr>
                        <td>
                            <table class="ps-table">
                                <tbody>
                                <tr>
                                    <td>
                                        <img alt="" src="/files/filemanager/image3/structure/about/regulation/fi.png" style="width: 18px; height: 12px;" /></td>
                                    <td style="text-align: left">
                                        芬兰</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <a href="http://www.finanssivalvonta.fi/en/Pages/default.aspx" target="_blank">FIN-FSA (Financial Supervisory Authority)</a></td>
                    </tr>
                    <tr>
                        <td>
                            <table class="ps-table">
                                <tbody>
                                <tr>
                                    <td>
                                        <img alt="" src="/files/filemanager/image3/structure/about/regulation/fr.png" style="width: 18px; height: 12px;" /></td>
                                    <td style="text-align: left">
                                        法国</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <a href="https://www.regafi.fr/spip.php?type=simple&amp;id_secteur=3&amp;lang=en&amp;denomination=GoldMany&amp;page=af&amp;id=3135" target="_blank">ACPR &ndash; Banque de France</a></td>
                    </tr>
                    <tr>
                        <td>
                            <table class="ps-table">
                                <tbody>
                                <tr>
                                    <td>
                                        <img alt="" src="/files/filemanager/image3/structure/about/regulation/de.png" style="width: 18px; height: 12px;" /></td>
                                    <td style="text-align: left">
                                        德国</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <a href="https://portal.mvp.bafin.de/database/InstInfo/institutDetails.do?cmd=loadInstitutAction&amp;institutId=134922" target="_blank">BaFin (Bundesanstalt f&uuml;r Finanzdienstleistungsaufsicht)</a></td>
                    </tr>
                    <tr>
                        <td>
                            <table class="ps-table">
                                <tbody>
                                <tr>
                                    <td>
                                        <img alt="" src="/files/filemanager/image3/structure/about/regulation/gb.png" style="width: 18px; height: 12px;" /></td>
                                    <td style="text-align: left">
                                        英国</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <a href="https://register.fca.org.uk/ShPo_FirmDetailsPage?id=001b000000NMgs4AAD" target="_blank">FCA (Financial Services Authority)</a></td>
                    </tr>
                    <tr>
                        <td>
                            <table class="ps-table">
                                <tbody>
                                <tr>
                                    <td>
                                        <img alt="" src="/files/filemanager/image3/structure/about/regulation/hu.png" style="width: 18px; height: 12px;" /></td>
                                    <td style="text-align: left">
                                        匈牙利</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <a href="http://www.mnb.hu/en" target="_blank">The Central Bank of Hungary</a></td>
                    </tr>
                    <tr>
                        <td>
                            <table class="ps-table">
                                <tbody>
                                <tr>
                                    <td>
                                        <img alt="" src="/files/filemanager/image3/structure/about/regulation/lv.png" style="width: 18px; height: 12px;" /></td>
                                    <td style="text-align: left">
                                        拉脱维亚</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <a href="http://www.fktk.lv/en/" target="_blank">FINANCIAL AND CAPITAL MARKET COMISSION</a></td>
                    </tr>
                    <tr>
                        <td>
                            <table class="ps-table">
                                <tbody>
                                <tr>
                                    <td>
                                        <img alt="" src="/files/filemanager/image3/structure/about/regulation/li.png" style="width: 18px; height: 12px;" /></td>
                                    <td style="text-align: left">
                                        立陶宛</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <a href="http://www.lb.lt/financial_brokerage_companies?pg=crossborder_financial_brokerage_companies_without_a_branch" target="_blank">Bank of Lithuania (Lietuvos bankas)</a></td>
                    </tr>
                    <tr>
                        <td>
                            <table class="ps-table">
                                <tbody>
                                <tr>
                                    <td>
                                        <img alt="" src="/files/filemanager/image3/structure/about/regulation/ml.png" style="width: 18px; height: 12px;" /></td>
                                    <td style="text-align: left">
                                        马尔他</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <a href="http://www.mfsa.com.mt/pages/licenceholder.aspx?id=5544" target="_blank">MFSA (Malta Financial Services Authority)</a></td>
                    </tr>
                    <tr>
                        <td>
                            <table class="ps-table">
                                <tbody>
                                <tr>
                                    <td>
                                        <img alt="" src="/files/filemanager/image3/structure/about/regulation/nl.png" style="width: 18px; height: 12px;" /></td>
                                    <td style="text-align: left">
                                        荷兰</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <a href="https://www.afm.nl/en/professionals/registers/alle-huidige-registers/beleggingsonderneming.aspx?id=DBC4842A-2F42-E311-894A-005056BE011D&amp;q=GoldMany" target="_blank">AFM (The Netherlands Authority for the Financial Markets)</a></td>
                    </tr>
                    <tr>
                        <td>
                            <table class="ps-table">
                                <tbody>
                                <tr>
                                    <td>
                                        <img alt="" src="/files/filemanager/image3/structure/about/regulation/no.png" style="width: 18px; height: 12px;" /></td>
                                    <td style="text-align: left">
                                        挪威</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <a href="http://www.finanstilsynet.no/no/" target="_blank">FINANSTILSYNET (The Financial Supervisory Authority of Norway)</a></td>
                    </tr>
                    <tr>
                        <td>
                            <table class="ps-table">
                                <tbody>
                                <tr>
                                    <td>
                                        <img alt="" src="/files/filemanager/image3/structure/about/regulation/sk.png" style="width: 18px; height: 12px;" /></td>
                                    <td style="text-align: left">
                                        斯洛伐克</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <a href="http://www.nbs.sk/_img/Documents/_Dohlad/Mifid.pdf" target="_blank">NBS (National Bank of Slovakia)</a></td>
                    </tr>
                    <tr>
                        <td>
                            <table class="ps-table">
                                <tbody>
                                <tr>
                                    <td>
                                        <img alt="" src="/files/filemanager/image3/structure/about/regulation/si.png" style="width: 18px; height: 12px;" /></td>
                                    <td style="text-align: left">
                                        斯洛文尼亚</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <a href="http://www.a-tvp.si/Eng/Default.aspx?id=145" target="_blank">ATVP (Agencija za trg vrednostnih papirjev)</a></td>
                    </tr>
                    <tr>
                        <td>
                            <table class="ps-table">
                                <tbody>
                                <tr>
                                    <td>
                                        <img alt="" src="/files/filemanager/image3/structure/about/regulation/es.png" style="width: 18px; height: 12px;" /></td>
                                    <td style="text-align: left">
                                        西班牙</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <a href="http://cnmv.es/Portal/Consultas/ESI/ESISExtranjerasLP.aspx?numero=3576&amp;tipo=CLP" target="_blank">CNMV (La Comisi&oacute;n Nacional del Mercado de Valores)</a></td>
                    </tr>
                    <tr>
                        <td>
                            <table class="ps-table">
                                <tbody>
                                <tr>
                                    <td>
                                        <img alt="" src="/files/filemanager/image3/structure/about/regulation/se.png" style="width: 18px; height: 12px;" /></td>
                                    <td style="text-align: left">
                                        瑞典</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <a href="http://www.fi.se/Folder-EN/Startpage/Register/Company-register/Company-register-Details/?idx=121832" target="_blank">FI (Finansinspektionen)</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <br />
        </div>
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