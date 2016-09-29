<div id="header">
    <div id="h-logo" class="winter">
        <a href="/">
            {{--<div class="quote-wrapper">--}}
            {{--<div class="quote"><span style="letter-spacing: 6px;">使用自动智能交易 - 赢取利润</span></div>--}}
            {{--</div>--}}
            <img src="/images/logo.png" alt="GoldMany: 使用机器人获利!" width="300" height="58">
        </a>
    </div>

    <div id="h-offer">
        <div>
            <div class="infobanner_container">
                <div class="infobanner_img">
                    <a href="http://cn.GoldMany.com/operations/bonuses-promotions/free-withdrawal/?utm_source=site&amp;utm_medium=banners&amp;utm_campaign=no_commission_withdrawal" target="_blank">
                        <img alt="" src="/images/free-withdrawal_info.png" style="width: 55px; height: 55px;"> </a>
                </div>
                <div class="infobanner_inner">
                    <a href="http://cn.GoldMany.com/operations/bonuses-promotions/free-withdrawal/?utm_source=site&amp;utm_medium=banners&amp;utm_campaign=no_commission_withdrawal"
                       target="_blank"><span class="infobanner_title" style="color: #317ca3; text-decoration: none;">无手续费出金</span><br>
                        <span class="infobanner_text" style="color: #4A5256; font-size: 12px; text-decoration: none;">GoldMany客户每月两次无手续费出金</span>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div id="h-contacts" class="top-header-contact-help">
        <div id="hc-phone" dir="ltr"><span>+862029194643</span></div>
        <div class="clear"></div>
        <div class="hc-links">
            <a href="javascript:void(0)" id="hc-support"
               onclick="window.open(&#39;https://my.cn.GoldMany.com/cs/livesupport/&#39;,&#39;support&#39;,&#39;toolbar=no,resizable=yes,status=no,menubar=no,location=no,width=600,height=500&#39;);">
                <i class="fa fa-clock-o"></i>
                <span>24小时在线<br>客服</span>
            </a>
            <a href="javascript:void(0)" id="hc-contacts" data-target="hc-contactus-menu">
                <i class="fa fa-phone"></i>
                <span>联系我们<br>反馈</span>
            </a>
        </div>
    </div>

</div>

<!-- I'm here! -->
<div class="hc-contactus-menu" id="hc-contactus-menu" style="display: none">
    <div>
        <span class="fSubmit button"><span>联系方式</span></span>
        <button class="fSubmit button" onclick="window.location.assign(&#39;/about/contacts/&#39;);"
                style="display: none;">联系方式
        </button>
    </div>

</div>

<script type="text/javascript">

    $("#hc-contacts").click(function () {
        $('#' + $(this).attr('data-target')).slideToggle();
    })
    $(document).click(function (e) {
        if ($(e.target).filter('#hc-contactus-menu:visible, #hc-contacts, #hc-contacts span').length != 1) {
            $('#hc-contactus-menu').fadeOut();
        }
    });


</script>
<!-- &#010; -->

<script type="text/javascript" src="/js/mobile-detect.min.js"></script>