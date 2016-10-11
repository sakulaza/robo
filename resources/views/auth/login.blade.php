
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />
    <title> GoldMany - 会员管理中心</title>
    <link href="http://www.goldmanyfx.com/statics/css/reset.css"
          rel="stylesheet" type="text/css" />
    <link href="http://www.goldmanyfx.com/statics/css/table_form.css"
          rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/cookie.js"></script>
    <script type="text/javascript" src="/js/member_common.js"></script>
    <script type="text/javascript" src="/js/dialog.js"></script>
    <script type="text/javascript" src="/js/formvalidator.js" charset="UTF-8">

    </script>
    <script type="text/javascript" src="/js/formvalidatorregex.js" charset="UTF-8">

    </script>
    <script language="JavaScript">
        <!--
        $(function(){
            $.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
            $("#username").formValidator({onshow:"请输入用户名",onfocus:"应该为2-20位之间"}).
            inputValidator({min:2,max:20,onerror:"应该为2-20位之间"}).
            regexValidator({regexp:"ps_username",datatype:"enum",onerror:"用户名格式错误"});
            $("#password").formValidator({onshow:"请输入密码",onfocus:"密码应该为6-20位之间"}).
            inputValidator({min:6,max:20,onerror:"密码应该为6-20位之间"});

        });
        //-->
    </script>

    <link href="/css/dialog_simp.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .submit,.pass-logo a,.form-login .input label,.item span{display:inline-block;zoom:1;*display:inline;}
        .blue,.blue a{color:#377abe}
        .log{line-height:24px; height:24px;float:right; font-size:12px}
        .log span{color:#ced9e7}
        .log a{color:#049;text-decoration: none;}
        .log a:hover{text-decoration: underline;}
        #header{ height:94px; background:url(/images/h.png) repeat-x}
        #header .logo{ padding-right:100px;float:left;background:url(/images/login-logo.png)
        no-repeat right 2px;}
        #header .content{width:920px; margin:auto; height:60px;padding:10px 0 0 0}
        #content{width:920px; margin:auto; padding:36px 0 0 0}
        .form-login{ width:440px; padding-left:40px}
        .form-login h2{font-size:25px;color:#494949;border-bottom: 1px dashed #CCC;padding-bottom:3px; margin-bottom:10px}
        .form-login .input{ padding:7px 0}
        .form-login .input label{ width:84px;font-size:14px; color:#888; text-align:right}
        .take,.reg{padding:0 0 0 84px}
        .take .submit{ margin-top:10px}
        .form-login .hr{background: url(/images/line.png)
        no-repeat left center; height:50px;}
        .form-login .hr hr{ display:none}

        .submit{padding-left:3px}
        .submit,.submit input{ background: url(/images/but.png)
        no-repeat; height:29px;cursor:hand;}
        .submit input{background-position: right top; border:none; padding:0 10px 0 7px; font-size:14px}
        .reg{ color:#666; line-height:24px}
        .reg .submit{background-position: left -35px; height:35px}
        .reg .submit input{background-position: right -35px; font-weight:700; color:#fff; height:35px}

        .col-1{position:relative; float:right; border:1px solid #c4d5df; zoom:1;
            background: url(/images/member_title.png)
            repeat-x; width:310px; margin: auto; height:304px}
        .col-1 span.o1,
        .col-1 span.o2,
        .col-1 span.o3,
        .col-1 span.o4{position:absolute;width:3px;height:3px; overflow:hidden;
            background: url(/images/fillet.png) no-repeat}
        .col-1 span.o1{background-position: left -6px; top:-1px; left:-1px}
        .col-1 span.o2{background-position: right -6px; top:-1px; right:-1px}
        .col-1 span.o3{background-position: left -9px; bottom:-1px; left:-1px}
        .col-1 span.o4{background-position: right -9px; bottom:-1px; right:-1px;}
        .col-1 .title{color:#386ea8; padding:5px 10px 3px}
        .col-1 div.content{padding:0px 10px 10px}
        .col-1 div.content h5{background: url(/images/ext-title.png)
        no-repeat 2px 10px; height:34px}
        .col-1 div.content h5 strong{ visibility: hidden}
        .pass-logo{ margin:auto; width:261px; padding-top:15px}
        .pass-logo p{border-top: 1px solid #e1e4e8; padding-top:15px}
        .item{padding:10px 0; vertical-align:middle; margin-bottom:10px}
        .item span{ color:#8c8686}
        .login-list li{ float:left;height:26px; margin-bottom:14px;width:123px;
            background:url(/images/mbg.png) no-repeat}
        .login-list li a{ display:block;background-repeat:no-repeat; background-position:6px 5px;height:26px;
            padding-left:36px; line-height:26px}
        .login-list li a:hover{text-decoration: none;}
        #footer{color:#666; line-height:24px;width:920px; margin:auto; text-align:center; padding:12px 0; margin-top:52px;
            border-top:1px solid #e5e5e5}
        #footer a{color:#666;}

    </style>
</head>
<body>
<div id="header">
    <div class="content">
        <div class="logo"><a href="http://www.goldmanyfx.com/">
                <img src="/images/member_logo.png"/></a></div>
        <span class="rt log"></span>
    </div>
</div>
<div id="content">
    <div class="form-login" id="logindiv">
        <form method="post" action="" onsubmit="save_username();" id="myform" name="myform">
            {{csrf_field()}}
            <input type="hidden" name="forward" id="forward" value="">
            <h2>会员登录</h2>
            <div class="input">
                <label>用户名：</label>
                <input type="text" id="username" name="username" size="22" class="input-text" value="{{old('username')}}">
            </div>
            <div class="input">
                <label>密码：</label>
                <input type="password" id="password" name="password" size="22" class="input-text" >
            </div>
            <div class="input">
                <label>验证码：</label><input type="text" id="code" name="code" size="8" class="input-text">
                <img id='code_img' onclick='this.src=this.src+"&"+Math.random()'
                     src='http://www.goldmanyfx.com/api.php?op=checkcode&code_len=5&font_size=14&width=120&height=26&font_color=&background='>
            </div>
            <div class="take">
                <input type="checkbox" name="cookietime" value="2592000" id="cookietime"> 记住用户名
                <a href="index.php?m=member&c=index&a=public_get_password_type&siteid=1" class="blue">密码找回</a><br />
                <p>{{$errors->all()}}</p>
                <div class="submit"><input type="submit" name="dosubmit" id="dosubmit" value="登录"></div></div>
        </form>
    </div>

</div>

<script language="JavaScript">
    <!--

    $(function(){
        $('#username').focus();
    })

    function save_username() {
        if($('#cookietime').attr('checked')==true) {
            var username = $('#username').val();
            setcookie('username', username, 3);
        } else {
            delcookie('username');
        }
    }
    var username = getcookie('username');
    if(username != '' && username != null) {
        $('#username').val(username);
        $('#cookietime').attr('checked',true);
    }

//    function show_login(site) {
//        if(site == 'sina') {
//            art.dialog({lock:false,title:'用新浪账号登录',id:'protocoliframe', iframe:'index.php?m=member&c=index&a=public_sina_login',width:'500',height:'310',yesText:'关闭'}, function(){
//            });
//        } else if(site == 'snda') {
//            art.dialog({lock:false,title:'用盛大连接登录',id:'protocoliframe', iframe:'index.php?m=member&c=index&a=public_snda_login',width:'500',height:'310',yesText:'关闭'}, function(){
//            });
//        } else if(site == 'qq') {
//            art.dialog({lock:false,title:'用腾讯微博帐号登录',id:'protocoliframe', iframe:'index.php?m=member&c=index&a=public_qq_login',width:'500',height:'310',yesText:'关闭'}, function(){
//            });
//        }
//    }
    //-->
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