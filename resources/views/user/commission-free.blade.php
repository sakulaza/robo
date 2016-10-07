@extends('layouts.app_operations')

@section('meta')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />


    <title>出入金无手续费</title>
    <meta property="og:title" content="出入金无手续费" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="/operations/bonuses-promotions/commission-free" />

@endsection

@section('path')

    <div id="path">
        <a href="/" >首页</a>
        /                                              <a href="/operations/" >交易服务</a>
        /                                              出入金无手续费
    </div>


@endsection

@section('left')
    <div id="left">
        <h1 >出入金无手续费</h1>
        <div ><style type="text/css">
                .btn_link {
                    white-space: nowrap;
                    text-align: center;
                    overflow: hidden;
                    display: inline-block;
                    padding: 6px 8px;
                    font-size: 14px;
                    line-height: 19px;
                    margin: 0px;
                    text-align: center;
                    color: #fff !important;
                    text-shadow: none;
                    vertical-align: middle;
                    cursor: pointer;
                    text-decoration: none;
                    border-color: #a9a9a9;
                    background: #286a95;
                    position: relative;
                    width: 228px;
                    -webkit-border-radius: 4px;
                    -moz-border-radius: 4px;
                    border-radius: 4px;
                    -webkit-box-shadow: 1px 3px 6px 0px rgba(0, 0, 0, 0.4);
                    -moz-box-shadow: 1px 3px 6px 0px rgba(0, 0, 0, 0.4);
                    -ms-box-shadow: 1px 3px 6px 0px rgba(0, 0, 0, 0.4);
                    -o-box-shadow: 1px 3px 6px 0px rgba(0, 0, 0, 0.4);
                    box-shadow: 1px 2px 6px 0px rgba(0, 0, 0, 0.4);
                }</style>
            <div class="page-banner no-commission">
                <div class="title" style="margin-top: 20px;">
                    免手续费入金</div>
                <img src="http://cn.roboforex.com/files/filemanager/images2/operations/no-commission.jpg" style="width: 648px; height: 212px;" /></div>
            <h2>
                存款到交易账户没有手续费</h2>
            <p>
                RoboForex承担所有入金相关费用，客户入金时手续费永远为0。因而客户入金时应考虑支付方式便利性而非成本优势。</p>
            <p style="text-align:center;">
                <a class="btn_link rw-tip_holder" href="https://my.cn.roboforex.com/cs/register/?utm_source=site&utm_medium=button&utm_campaign=commission_free" style="text-decoration: none;/* background: #D8452A; */width: 250px;" target="_blank"><span>开始和存款交易帐户</span></a>
            </p>
            <p>
                RoboForex公司实现以下方案补偿您的手续费:</p>
            <p>
                在交易账户入金时有一部分金额做为手续费由支付系统收取。公司在处理入金时会将此手续费返还至客户账户，虽然在存取款纪录里会显示转账资金与手续费返还两笔入账，但此操作不会给入金带来任何延迟或不便：您的转账和回赠手续费将同步入账。RoboForex对此回赠手续费无任何使用限制。</p>
            <p>
                <img alt="" src="http://cn.roboforex.com/files/filemanager/image/infografika_china.jpg" style="width: 648px; height: 183px;" /></p>
            <p>
                <strong>例子:</strong> 您通过WebMoney系统存入 $500. 这个系统的手续费是支付的0.8%, 即$4. 当您的交易被处理, 这个手续费由我们公司补偿,总资金是$500存入到您的交易账户. 要了解更多详细的信息关于存入资金到交易账户的方法和处理应用时间, 请访问我们的网站, &ldquo;存款/取款&rdquo; 部分.</p>
        </div>
    </div>


@endsection

@section('right')

    <div id="right">
        <ul id="r-menu">
            <li >
                <a href="/operations/security/"  >资金安全</a>


            </li>
            <li >
                <a href="/operations/deposit-withdraw/"  >存款 / 取款</a>

            </li>
            <li class="selected">
                <a  >出入金无手续费</a>


            </li>

        </ul>



        @include('user.partials.right_bar')


    </div>


@endsection
