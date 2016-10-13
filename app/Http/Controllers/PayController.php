<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.pay');
    }

    public function recharge(Request $request)
    {
        $info = $request->info;
        $v['InterfaceVersion'] = '4.0';
        $v['KeyType'] = 1;
        $v['MemberID'] = 300414;
        $v['NoticeType'] = 1;
        $v['OrderMoney'] = $info['price']*100;
        $v['PageUrl'] = '';
        $v['PayID'] = '';
        $v['ProductName'] = '';
        $v['ReturnUrl'] = '/bfopay_repond';
        $v['TerminalID'] = 19766;
        $v['TradeDate'] = date('YmdHis');
        $v['TransID'] = substr($v['TradeDate'],0,10).mt_rand(1000000000,9999999999);
        $v['body'] = '['.$v['TransID'].']';
        $v['buyer_email'] = '';
        $v['logistics_fee'] = '0.00';
        $v['logistics_payment'] = "SELLER_PAY";
        $v['logistics_type'] = "EXPRESS";
        $v['out_trade_no'] = $v['TransID'];
        $v['payment_type'] = 1;
        $v['quantity'] = 1;
        $v['service'] = "create_partner_trade_by_buyer";
        $v['subject'] = "doney在线充值";
        $Md5key="abcdefg";//md5密钥（KEY）
        $MARK = "|";
        $v['payUrl']="https://pay.asiaswift.com/payindex";//借贷混合
        $v['Signature'] = md5($v['MemberID'].$MARK.$v['PayID'].$MARK.$v['TradeDate'].$MARK.$v['TransID'].
            $MARK.$v['OrderMoney'].$MARK.$v['payUrl'].$MARK.$v['ReturnUrl'].$MARK.$v['NoticeType'].
            $MARK.$Md5key);
        return view('user.pay_recharge',compact('info','v'));
    }
}
