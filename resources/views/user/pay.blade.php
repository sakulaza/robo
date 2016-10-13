<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />
    <title>GoldMany - 会员管理中心</title>
    <link href="/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="/css/member.css" rel="stylesheet" type="text/css" />
    <link href="/css/table_form.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/member_common.js"></script>
    <script type="text/javascript" src="/js/formvalidator.js" charset="UTF-8">

    </script>
    <script type="text/javascript" src="/js/formvalidatorregex.js" charset="UTF-8">

    </script>
</head>
<body>
<div id="header">
    <div class="logo"><a href="">
            <img src="/images/logo.png" height="60" /></a>
        <h3>会员中心</h3>
    </div>
    <div class="link">你好 ({{Auth::user()->name}})<span> | </span>
        <a href="/logout">退出</a>
        <span> | </span>
        <a href="/">首页</a>
    </div>
    <div class="nav-bar">

    </div>
</div><script type="text/javascript">
    <!--
    $(function(){
        $.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
        $("#price").formValidator({onshow:"请输入要入金的金额",onfocus:"入金金额不能为空"}).
        inputValidator({min:1,max:999,onerror:"入金金额不能为空"}).
        regexValidator({regexp:"^(([1-9]{1}\\d*)|([0]{1}))(\\.(\\d){1,2})?$",
            onerror:"充值金额必须为整数或小数(保留两位小数)"});
        $("#contactname").formValidator({onshow:"请输入姓名",onfocus:"姓名不能为空"}).
        inputValidator({min:1,max:999,onerror:"姓名不能为空"});
        $("#email").formValidator({onshow:"请输入email",oncorrect:"格式正确"}).
        regexValidator({regexp:"email",datatype:"enum",onerror:"错误的emai格式"});
//        $("#code").formValidator({onshow:"请输入验证码",onfocus:"验证码不能为空"}).
//        inputValidator({min:1,max:999,onerror:"验证码不能为空"}).ajaxValidator({
//            type : "get",
//            url : "",
//            data :"m=pay&c=deposit&a=public_checkcode",
//            datatype : "html",
//            async:'false',
//            success : function(data){
//                if(data == 1)
//                {
//                    return true;
//                }
//                else
//                {
//                    return false;
//                }
//            },
//            buttons: $("#dosubmit"),
//            onerror : "验证码错误",
//            onwait : "验证中"
//        });
    })
    //-->
</script>
<div id="memberArea">
    <div class="col-left col-1 left-memu">
        <h6 class="title">财务管理</h6>
        <ul>
            <li class="on">
                <a href="/pay">
                    <img src="/images/m_4.png" width="15" height="16" />
                    在线入金
                </a>
            </li>
        </ul>
        <span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
    </div>
    <div class="col-auto">
        <div class="col-1 ">
            <h6 class="title">在线入金</h6>
            <div class="content">
                <form name="myform" action="/pay_recharge" method="post" id="myform">
                    {{csrf_field()}}
                    <table width="100%" cellspacing="0" class="table_form">

                        <tr>
                            <th width="80">入金金额：</th>
                            <td><input name="info[price]" type="text" id="price" size="8" value="" class="input-text">&nbsp;元<span id="msgid"></span></td>
                        </tr>
                        <tr>
                            <th>充值方式：</th>
                            <td>
                                <label class="payment-show"><input name="pay_type" type="radio" value="8"> <em>宝付</em><span class="payment-desc"></span></label>	   </td>
                        </tr>
                        <th>交易账号：</th>
                        <td><input name="info[account]" type="text" id="account" size="30" value=""  class="input-text"/></td>
                        </tr>
                        <tr>
                            <th>电 话：</th>
                            <td><input name="info[telephone]" type="text" id="telephone" size="30"  class="input-text"/> 格式：010-88888888或13888888888<span id="msgid1" ></span></td>
                        </tr>

                        <tr>
                            <th>备  注：</th>
                            <td><textarea name="info[usernote]"  id="usernote" rows="5" cols="50" value=></textarea></td>
                        </tr>
                        {{--<tr>--}}
                            {{--<th>验证码：</th>--}}
                            {{--<td><input name="code" type="text" id="code" size="10"  class="input-text"/> <img id='code_img' onclick='this.src=this.src+"&"+Math.random()' src='http://www.goldmanyfx.com/api.php?op=checkcode&code_len=4&font_size=14&width=110&height=30&font_color=&background='></td>--}}
                        {{--</tr>--}}
                        <tr>
                            <td></td>
                            <td colspan="2"><label>
                                    <input type="submit" name="dosubmit" id="dosubmit" value="确 定" class="button"/>
                                </label></td>
                        </tr>
                        <tr>
                            <th>入金提示：</th>
                            <td>
                                我们的客服人员将在收到有关入金信息后与您联系，所以您的手机号码必须有效并能及时联系上您。
                                我们在资金到账后两个工作日内完成入金流程。
                            </td>
                        </tr>

                    </table>
                </form>
            </div>
            <span class="o1"></span>
            <span class="o2"></span>
            <span class="o3"></span>
            <span class="o4"></span>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $(".payment-show").each(function(i){
            if(i==0){
                $(this).addClass("payment-show-on");
            }
            $(this).click(
                    function(){
                        $(this).addClass("payment-show-on");
                        $(this).siblings().removeClass("payment-show-on");
                    }
            )
        });

    })

</script>
<div id="footer">
    <a href="http://gmfx.exfund.cn/index.php?m=content&c=index&a=lists&catid=2" target="_blank">公司简介</a> |
    <a href="http://gmfx.exfund.cn/index.php?m=content&c=index&a=lists&catid=4" target="_blank">资质</a> |
    <a href="http://gmfx.exfund.cn/index.php?m=content&c=index&a=lists&catid=5" target="_blank">企业文化</a> |
    <a href="http://gmfx.exfund.cn/index.php?m=content&c=index&a=lists&catid=3" target="_blank">联系我们</a> |
    <a href="http://www.goldmanyfx.com/index.php?m=link" target="_blank">友情链接</a>

    <p class="cp">
    </p>
</div>
</body>
</html>