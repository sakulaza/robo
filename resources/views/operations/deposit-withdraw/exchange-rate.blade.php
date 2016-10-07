@extends('layouts.app_operations')

@section('meta')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="w1-verification" content="117844634768" />


    <title>汇率</title>
    <meta property="og:title" content="汇率" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="/operations/deposit-withdraw/exchange-rate" />

@endsection

@section('path')

    <div id="path">
        <a href="/" >首页</a>
        /                                              <a href="/operations/" >交易服务</a>
        /                                              <a href="/operations/deposit-withdraw/" >存款 / 取款</a>
        /                                              汇率
    </div>


@endsection

@section('left')
    <div id="left">
        <h1>汇率</h1>
        <div></div>


        <div class="exchanges">
            <div class="exchanges-info">
                <table class="table">
                    <tr>
                        <th  class="tc-tl center"  >&nbsp;</th>

                        <th colspan="2" class="center " >存入资金</th>

                        <th colspan="2" class="tc-tr center" >取款</th>
                    </tr>
                    <tr>
                        <td width="20%" >账户货币</td>

                        <td width="20%" >转账货币</td>
                        <td width="20%" >比率</td>

                        <td width="20%" >转账货币</td>
                        <td width="20%" class="last" >比率</td>
                    </tr>
                    <tr>
                        <td class="big center tc-bl" rowspan="2" >USD</td>

                        <td>EUR</td>
                        <td>1.1001</td>

                        <td>EUR</td>
                        <td class=" last ">1.1447</td>
                    </tr>
                    <tr >

                        <td>CNY</td>
                        <td>6.6713</td>

                        <td>CNY</td>
                        <td class=" last ">6.5045</td>
                    </tr>
                    <tr >
                        <td class="big center tc-bl" rowspan="2" >EUR</td>

                        <td>USD</td>
                        <td>1.1336</td>

                        <td>USD</td>
                        <td class=" last ">1.0889</td>
                    </tr>
                    <tr >

                        <td>CNY</td>
                        <td>7.4506</td>

                        <td>CNY</td>
                        <td class=" last ">7.2644</td>
                    </tr>
                    <tr                                              class="last">
                        <td class="big center tc-bl" rowspan="3" >PLN</td>

                        <td>CNY</td>
                        <td>0.5751</td>

                        <td>CNY</td>
                        <td class=" last last-lcor">0.5923</td>
                    </tr>
                    <tr >

                        <td>EUR</td>
                        <td>0.2380</td>

                        <td>EUR</td>
                        <td class=" last ">0.2264</td>
                    </tr>
                    <tr                                              class="last">

                        <td>USD</td>
                        <td>0.2646</td>

                        <td>USD</td>
                        <td class="tc-br last ">0.2541</td>
                    </tr>
                    <tr >
                    </tr>
                </table>
                <div>最后更新: 07.10.2016</div>
            </div>

        </div>

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
                        <a href="/operations/deposit-withdraw/payoneer/"  >RoboForex预付Payoneer万事达卡</a>
                    </li>
                    <li  href="/operations/deposit-withdraw/auto-withdrawal/">
                        <a>自动提款系统</a>
                    </li>
                    <li >
                        <a href="/operations/deposit-withdraw/transfers/"  >内部转账</a>
                    </li>
                    <li class="selected">
                        <a  >汇率</a>
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
