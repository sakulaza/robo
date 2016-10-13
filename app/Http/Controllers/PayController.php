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
        $v['PayID'] = '';
        $v['ProductName'] = '';
        $v['Amount'] = '';
        $v['Username'] = '';
        $v['AdditionalInfo'] = '';
        $v['ReturnUrl'] = 'http://www3.goldmanyfx.com/bfopay_repond';
        $v['TerminalID'] = 19766;
        $v['TradeDate'] = date('YmdHis');
        $v['TransID'] = substr($v['TradeDate'],0,10).mt_rand(1000000000,9999999999);
        $Md5key="me6txh9l9ljec2mc";//md5密钥（KEY）
        $MARK = "|";
        $v['PageUrl']="http://www3.goldmanyfx.com/pay_recharge";//借贷混合
        $v['or'] = $v['MemberID'].$MARK.$v['PayID'].$MARK.$v['TradeDate'].$MARK.$v['TransID'].
            $MARK.$v['OrderMoney'].$MARK.$v['PageUrl'].$MARK.$v['ReturnUrl'].$MARK.$v['NoticeType'].
            $MARK.$Md5key;
        $v['Signature'] = md5($v['MemberID'].$MARK.$v['PayID'].$MARK.$v['TradeDate'].$MARK.$v['TransID'].
            $MARK.$v['OrderMoney'].$MARK.$v['PageUrl'].$MARK.$v['ReturnUrl'].$MARK.$v['NoticeType'].
            $MARK.$Md5key);

        return view('user.pay_recharge',compact('info','v'));
    }

    public function repond(){

    }
}
