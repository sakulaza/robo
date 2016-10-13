<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
</head>
<body>
<div id="header">
    <div class="logo">
        <a href="">
            <img src="/images/logo.png" height="60" />
        </a>
        <h3>会员中心</h3>
    </div>
    <div class="link">你好 ({{Auth::user()->name}})<span> | </span>
        <a href="/logout">退出</a>
        <span> | </span>
        <a href="/">首页</a>
    </div>
    <div class="nav-bar">

    </div>
</div><div id="memberArea">
    <div class="col-left col-1 left-memu">
        <h6 class="title">财务管理</h6>
        <ul>
            <li>
                <a href="/pay">
                    <img src="/images/m_4.png" width="15" height="16" />
                    在线入金
                </a>
            </li>
        </ul>
        <span class="o1"></span>
        <span class="o2"></span>
        <span class="o3"></span>
        <span class="o4"></span>
    </div><div class="col-auto">
        <div class="col-1 ">
            <h5 class="title">支付确认</h5>
            <div class="content">
                <table width="100%" cellspacing="0" class="table-list nHover">
                    <tr>
                        <td  width="120">交易账号：</td>
                        <td>{{$info['account'] or  ''}}</td>
                    </tr>
                    <tr>
                        <td  width="120">实际支付费用：</td>
                        <td>
                            <font style="color:#F00; font-size:22px;font-family:Georgia,Arial; font-weight:700">
                                {{$info['price']}}
                            </font>  元
                        </td>
                    </tr>

                    <tr>
                        <td  width="120">支付方式：</td>
                        <td>宝付</td>
                    </tr>
                </table>
                <div class="bk10"></div>
                <form action="https://pay.asiaswift.com/payindex" method="POST" target="_blank">
                    <input type="hidden" name="InterfaceVersion" value="{{$v['InterfaceVersion']}}" />
                    <input type="hidden" name="KeyType" value="{{$v['KeyType']}}" />
                    <input type="hidden" name="MemberID" value="{{$v['MemberID']}}" />
                    <input type="hidden" name="NoticeType" value="{{$v['NoticeType']}}" />
                    <input type="hidden" name="OrderMoney" value="{{$v['OrderMoney']}}" />
                    <input type="hidden" name="PageUrl" value="{{$v['PageUrl']}}" />
                    <input type="hidden" name="PayID" value="{{$v['PayID']}}" />
                    <input type="hidden" name="ProductName" value="{{$v['ProductName']}}" />
                    <input type="hidden" name="ReturnUrl" value="{{$v['ReturnUrl']}}" />
                    <input type="hidden" name="TerminalID" value="{{$v['TerminalID']}}" />
                    <input type="hidden" name="TradeDate" value="{{$v['TradeDate']}}" />
                    <input type="hidden" name="TransID" value="{{$v['TransID']}}" />
                    <input type="hidden" name="_input_charset" value="utf-8" />
                    <input type="hidden" name="body" value="{{$v['body']}}" />
                    <input type="hidden" name="buyer_email" value="{{$v['buyer_email']}}" />
                    <input type="hidden" name="logistics_fee" value="{{$v['logistics_fee']}}" />
                    <input type="hidden" name="logistics_payment" value="{{$v['logistics_payment']}}" />
                    <input type="hidden" name="logistics_type" value="{{$v['logistics_type']}}" />
                    <input type="hidden" name="out_trade_no" value="{{$v['out_trade_no']}}" />
                    <input type="hidden" name="payment_type" value="{{$v['payment_type']}}" />
                    <input type="hidden" name="quantity" value="{{$v['quantity']}}" />
                    <input type="hidden" name="service" value="{{$v['service']}}" />
                    <input type="hidden" name="subject" value="{{$v['subject']}}" />
                    <input type="hidden" name="Signature" value="{{$v['Signature']}}" />
                    <input type="submit" value="确认并支付" class="button" />
                </form>
            </div>
        </div>
    </div>
</div>
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