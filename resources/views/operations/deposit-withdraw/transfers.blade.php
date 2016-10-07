@extends('layouts.app_operations')

@section('meta')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="w1-verification" content="117844634768" />


    <title>内部转账</title>
    <meta property="og:title" content="内部转账" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="/operations/deposit-withdraw/transfers" />

@endsection

@section('path')

    <div id="path">
        <a href="/" >首页</a>
        /                                              <a href="/operations/" >交易服务</a>
        /                                              <a href="/operations/deposit-withdraw/" >存款 / 取款</a>
        /                                              内部转账
    </div>


@endsection

@section('left')
    <div id="left">
        <h1 >内部转账</h1>
        <div ><style type="text/css">
                h2, h3 {
                    text-align: center;
                }
                .desc-text {
                    padding: 20px;
                    background: #FAFBFC;
                    margin-bottom: 20px;
                }
                .desc-text p:last-child {
                    margin-bottom: 0;
                }
                .instructions-content {
                    padding: 15px 0px;
                    margin-bottom: 20px;
                    text-align: justify;
                }
                .instructions-content-item {
                    margin-bottom: 20px;
                }
                .instructions-screen {
                    text-align: center;
                    margin-top: 35px;
                }
                .instructions-screen-item {
                    display: inline-block;
                    margin-right: 15px;
                    vertical-align: top;
                }
                .instructions-screen-item img {
                    width: 100px;
                    height: 80px;
                    border: 1px solid rgba(145, 145, 145, 0.49);
                }
            </style>


            <div class="banner">
                <p>
                    <img alt="" src="http://cn.roboforex.com/files/filemanager/image/trans_int_cn.jpg" style="width: 648px; height: 235px;"></p>
                <p>
                </p></div>

            <div class="desc-text">
                <p>
                    GoldMany 公司的客户有机会在一个会员中心内的所有类型的交易账户之间转移资金. 不同基础货币(USD, EUR)的账户间内部转账是根据公司<a href="https://my.cn.roboforex.com/cs/operations/inner-exchange-rates/" target="_blank">内部汇率</a>转换将客户资金转换成接受账户的货币.
                </p>
            </div>

            <div class="instructions">
                <h2>如何进行交易账户间内部转账说明</h2>

                <div class="instructions-content">

                    <div class="instructions-content-item">
                        <p><strong>1. </strong> 要在GoldMany交易账户之间转移资金, 登录会员中心并选择 "<a href="https://my.cn.roboforex.com/cs/operations/internal-transfers/" target="_blank">内部转账</a>" 部分.</p>
                    </div>
                    <div class="instructions-content-item">
                        <p><strong>2. </strong> 通过指定提出要求: 账户密码, 转账金额, 接受的账户号码. 然后点击 "转移资金".</p>
                    </div>
                    <div class="instructions-content-item">
                        <p><strong>3. </strong> 您将收到一份代码邮件确认您的请求.</p>
                    </div>
                    <div class="instructions-content-item">
                        <p><strong>4. </strong> 若要继续进行, 输入代码并点击 "确认".</p>
                    </div>
                    <div class="instructions-content-item">
                        <p><strong>5. </strong> 在"请求信息" 部分, 请求状态将变更为"执行", 这意味着您的转账已经被执行成功.</p>
                    </div>

                    <div class="instructions-screen">

                        <div class="instructions-screen-item">
                            <a class="fancybox" rel="group" href="http://www.roboforex.com/files/filemanager/image3/structure/operations/deposit-withdraw/transfers/1.png"><img src="http://www.roboforex.com/files/filemanager/image3/structure/operations/deposit-withdraw/transfers/1.png" alt=""></a>
                        </div>

                        <div class="instructions-screen-item">
                            <a class="fancybox" rel="group" href="http://www.roboforex.com/files/filemanager/image3/structure/operations/deposit-withdraw/transfers/2.png"><img src="http://www.roboforex.com/files/filemanager/image3/structure/operations/deposit-withdraw/transfers/2.png" alt=""></a>
                        </div>

                        <div class="instructions-screen-item">
                            <a class="fancybox" rel="group" href="http://www.roboforex.com/files/filemanager/image3/structure/operations/deposit-withdraw/transfers/3.png"><img src="http://www.roboforex.com/files/filemanager/image3/structure/operations/deposit-withdraw/transfers/3.png" alt=""></a>
                        </div>

                        <div class="instructions-screen-item">
                            <a class="fancybox" rel="group" href="http://www.roboforex.com/files/filemanager/image3/structure/operations/deposit-withdraw/transfers/4.png"><img src="http://www.roboforex.com/files/filemanager/image3/structure/operations/deposit-withdraw/transfers/4.png" alt=""></a>
                        </div>

                        <div class="instructions-screen-item">
                            <a class="fancybox" rel="group" href="http://www.roboforex.com/files/filemanager/image3/structure/operations/deposit-withdraw/transfers/5.png"><img src="http://www.roboforex.com/files/filemanager/image3/structure/operations/deposit-withdraw/transfers/5.png" alt=""></a>
                        </div>

                    </div>

                </div>
            </div>



            <div class="restrictions">
                <a href="javascript:void(0)" onclick="showFaqText(1);" style="text-decoration: none">内部转移限制</a>
                <div class="fl-answer" id="faq_text1" style="padding: 0px; border: none; display: none;">
                    <p style="margin-bottom: 1em;">1. 通过银行卡或SMS存款的,您只能在不早于存款日30天后从账户转移资金.</p>
                    <p style="margin-bottom: 1em;">2. 如果您的交易账户有"存款奖励", 您可以转移牵涉奖励资金交易获得的利润. 如果您想提取所有可用资金,您必须首先取消奖励.</p>
                </div>
            </div>

            <script type="text/javascript">
                function showFaqText(id) {
                    var show = $('#faq_text'+id).css('display') == 'none' ? true : false;
                    $('.fl-answer').hide();

                    if (show) {
                        $('#faq_text'+id).fadeIn();
                    } else {
                        $('#faq_text'+id).hide();
                    }
                }
            </script></div>
    </div>


@endsection

@section('right')

    <div id="right">
        <ul id="r-menu">
            <li >
                <a href="/operations/security/"  >资金安全</a>


            </li>
            <li  class="selected" >
                <a href="/operations/deposit-withdraw/"  >存款 / 取款</a>


                <ul>
                    <li >
                        <a href="/operations/deposit-withdraw/payoneer/"  >GoldMany预付Payoneer万事达卡</a>
                    </li>
                    <li  href="/operations/deposit-withdraw/auto-withdrawal/">
                        <a>自动提款系统</a>
                    </li>
                    <li class="selected">
                        <a  >内部转账</a>
                    </li>
                    <li >
                        <a  href="/operations/deposit-withdraw/exchange-rate/">汇率</a>
                    </li>
                    <li >
                        <a href="/operations/deposit-withdraw/bank-transfer/"  >Bank Transfer</a>
                    </li>
                    <li >
                        <a href="/operations/deposit-withdraw/bank-transfer-cy/"  >Bank Transfer (Barclays Bank PLC)</a>
                    </li>
                    <li >
                        <a href="/operations/deposit-withdraw/fast-bank-transfer/"  >Fast Bank Transfer</a>
                    </li>
                    <li >
                        <a href="/operations/deposit-withdraw/neosurf/"  >Neosurf (意大利, 比利时, 法国, 西班牙)</a>
                    </li>
                    <li >
                        <a href="/operations/deposit-withdraw/ideal/"  >iDEAL (荷兰)</a>
                    </li>
                    <li >
                        <a href="/operations/deposit-withdraw/multibanco/"  >Multibanco (葡萄牙)</a>
                    </li>
                    <li >
                        <a href="/operations/deposit-withdraw/teleingreso/"  >Teleingreso (西班牙)</a>
                    </li>
                    <li >
                        <a href="/operations/deposit-withdraw/giropay/"  >Giropay (德国)</a>
                    </li>
                    <li >
                        <a href="/operations/deposit-withdraw/sofort/"  >Sofort (德国, 奥地利, 法国)</a>
                    </li>
                    <li >
                        <a href="/operations/deposit-withdraw/webmoney/"  >WebMoney</a>
                    </li>
                    <li >
                        <a href="/operations/deposit-withdraw/skrill-moneybookers/"  >Skrill (Moneybookers)</a>
                    </li>
                    <li >
                        <a href="/operations/deposit-withdraw/neteller/"  >NETELLER</a>
                    </li>
                    <li >
                        <a href="/operations/deposit-withdraw/cashu/"  >CashU</a>
                    </li>
                    <li >
                        <a href="/operations/deposit-withdraw/euteller/"  >Euteller (芬兰)</a>
                    </li>
                    <li >
                        <a href="/operations/deposit-withdraw/visa-mastercard/"  >VISA/MasterCard</a>
                    </li>
                    <li >
                        <a href="/operations/deposit-withdraw/payoneer-mastercard/"  >Payoneer MasterCard</a>
                    </li>
                    <li >
                        <a href="/operations/deposit-withdraw/china-unionpay/"  >China UnionPay</a>
                    </li>
                    <li >
                        <a href="/operations/deposit-withdraw/fasapay/"  >FasaPay</a>
                    </li>
                    <li >
                        <a href="/operations/deposit-withdraw/epayments/"  >ePayments</a>
                    </li>
                </ul>
            </li>
            <li href="/operations/commission-free" >
                <a  >出入金无手续费</a>


            </li>

        </ul>



        @include('user.partials.right_bar')


    </div>


@endsection
