<?php $top_categories = \App\Category::where('father_id',0)->where('is_active',1)->get();?>
<ul class="nav nav-pills nav-justified">
    @foreach($top_categories as $c)
        <li class=" @if ($loop->last) last @endif ">
            <div class="nav-wrapper">
                <a href="/{{$c->cname}}">{{$c->title}}</a>
                <div class="sm-helper"></div>
                <?php $categories = \App\Category::where('father_id',$c->id)->where('is_active',1)->get();?>
                <ul class="dropdown-menu" role="menu">
                    @foreach($categories as $cs)
                        <li><a href="/{{$cs->cname}}">{{$cs->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </li>
    @endforeach
    {{--<li class="">--}}
        {{--<div class="nav-wrapper">--}}
            {{--<a href="http://cn.roboforex.com/about/">关于RoboForex</a>--}}
            {{--<div class="sm-helper"></div>--}}
            {{--<ul class="dropdown-menu" role="menu">--}}
                {{--<li><a href="http://cn.roboforex.com/about/why-roboforex/">为什么选择RoboForex</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/about/mission/">公司宗旨</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/about/business-model/">商业模式</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/about/liquidity-providers/">流动性</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/about/regulation/">公司监管</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/about/news/">公司新闻</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/about/feedback/">反馈建议</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/about/faq/">常见问题</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/about/sponsorship/">锦标赛</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/about/results-2014/">2014 年成绩</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/about/exhibition/">RoboForex 展览会</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/about/awards/">授予奖项</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/about/media/">RoboForex 媒体</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/about/contacts/">联系我们</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</li>--}}
    {{--<li class=" ">--}}
        {{--<div class="nav-wrapper">--}}
            {{--<a href="http://cn.roboforex.com/trade-conditions/account-types/">条件</a>--}}
            {{--<div class="sm-helper"></div>--}}
            {{--<ul class="dropdown-menu" role="menu">--}}
                {{--<li><a href="http://cn.roboforex.com/trade-conditions/account-types/">账户类型</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/trade-conditions/specifications/">合约细则</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/trade-conditions/ecn/">专业ECN 账户</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/trade-conditions/cfd-trading-roboforex/">CFD(差价合约）</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/trade-conditions/forex-order-types/">订单类型</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/trade-conditions/terminals/">交易终端</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/trade-conditions/webtrader/">WebTrader RoboForex</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/operations/mobile-forex/iphonetrader/">iPhone/iPad Trader</a>--}}
                {{--</li>--}}
                {{--<li><a href="http://cn.roboforex.com/operations/mobile-forex/androidtrader/">Android Trader</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/trade-conditions/metatrader4-mt4/">MetaTrader 4 (MT4)</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/trade-conditions/metatrader5-mt5/">MetaTrader 5 (MT5)</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/trade-conditions/ctrader/">cTrader平台</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/trade-conditions/mobile-forex/">«移动外汇» 服务</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</li>--}}
    {{--<li class=" ">--}}
        {{--<div class="nav-wrapper">--}}
            {{--<a href="http://cn.roboforex.com/trading-accounts/standard/">账户</a>--}}
            {{--<div class="sm-helper"></div>--}}
            {{--<ul class="dropdown-menu" role="menu">--}}
                {{--<li><a href="http://cn.roboforex.com/trading-accounts/standard/">开设账户</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/trading-accounts/demo/">模拟账户</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/trading-accounts/documents/">RoboForex文档</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/trading-accounts/download-metatrader4-mt4/">下载MT4交易平台</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/trading-accounts/mam-multiterminal/">MetaTrader4--}}
                        {{--MultiTerminal</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/trading-accounts/one-click-trading/">"一键交易" 服务</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/trading-accounts/account-management/">会员中心</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</li>--}}
    {{--<li class=" ">--}}
        {{--<div class="nav-wrapper">--}}
            {{--<a href="http://cn.roboforex.com/investment/investors/">投资</a>--}}
            {{--<div class="sm-helper"></div>--}}
            {{--<ul class="dropdown-menu" role="menu">--}}
                {{--<li><a href="http://cn.roboforex.com/investment/investors/">外汇投资者</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/investment/copyfx-service/">CopyFX</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/investment/ramm/">RAMM-帐户</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</li>--}}
    {{--<li class=" ">--}}
        {{--<div class="nav-wrapper">--}}
            {{--<a href="http://cn.roboforex.com/operations/">交易服务</a>--}}
            {{--<div class="sm-helper"></div>--}}
            {{--<ul class="dropdown-menu" role="menu">--}}
                {{--<li><a href="http://cn.roboforex.com/operations/bonuses-promotions/">赠金,计划和活动</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/operations/security/">资金安全</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/operations/negative-balance-protection/">账户负值保护机制</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/operations/deposit-withdraw/">存款 / 取款</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/operations/1000-up-leverage/">杠杆最大值1:1000</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/operations/rebate/">"返点 (Cashback)"服务</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/operations/fixed-zero-spread/">0点差工具</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/operations/cent-account/">RoboForex cent账户</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/operations/swap-free/">伊斯兰账户</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/operations/forex-contest/">外汇模拟账户比赛</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/operations/forex-vps/">VPS外汇服务器</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</li>--}}
    {{--<li class=" ">--}}
        {{--<div class="nav-wrapper">--}}
            {{--<a href="http://cn.roboforex.com/forex-affiliate/">合作伙伴</a>--}}
            {{--<div class="sm-helper"></div>--}}
            {{--<ul class="dropdown-menu" role="menu">--}}
                {{--<li><a href="http://cn.roboforex.com/forex-affiliate/forex-agent-program/">"Agent"伙伴计划 (IB)</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/forex-affiliate/webmaster-affiliate-program/">"Webmaster" 伙伴计划--}}
                        {{--(IB)</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/forex-affiliate/introducing-broker-ib/">区域代表</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/forex-affiliate/whitelabel/">白标签伙伴计划</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/forex-affiliate/partner-commission-all/">合作伙伴佣金表</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/forex-affiliate/affiliate-accounts/">点差增加的交易账户</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/forex-affiliate/loyalty-program/">"忠诚计划"</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/forex-affiliate/help-partner/">代理援助</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/forex-affiliate/informers/">外汇资讯</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/files/docs/attractcustomers_cn.pdf">如何吸引客户到RoboForex建议</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</li>--}}
    {{--<li class=" ">--}}
        {{--<div class="nav-wrapper">--}}
            {{--<a href="http://cn.roboforex.com/beginner/">学习资源</a>--}}
            {{--<div class="sm-helper"></div>--}}
            {{--<ul class="dropdown-menu" role="menu">--}}
                {{--<li><a href="http://cn.roboforex.com/beginner/forex-education/">外汇视频教程</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/beginner/how-to-trade-forex/">如何进行外汇交易</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/beginner/what-is-forex-trading/">什么是外汇交易</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/beginner/order-type/">常见定单类型</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/beginner/metatrader-4-demo-account/">MetaTrader 4模拟帐户</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/beginner/expert-advisors/">外汇专家顾问(EA)</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/beginner/risk/">风险控制</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/beginner/glossary/">常用术语</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/beginner/webinars/">RoboForex在线研讨会</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/beginner/start/">开始外汇交易</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</li>--}}
    {{--<li class=" ">--}}
        {{--<div class="nav-wrapper">--}}
            {{--<a href="http://forum.roboforex.com/forum.php?language=zh-CN" target="_blank">论坛支持</a>--}}
        {{--</div>--}}
    {{--</li>--}}
    {{--<li class=" last">--}}
        {{--<div class="nav-wrapper">--}}
            {{--<a href="http://cn.roboforex.com/analytics/">分析</a>--}}
            {{--<div class="sm-helper"></div>--}}
            {{--<ul class="dropdown-menu" role="menu">--}}
                {{--<li><a href="http://cn.roboforex.com/analytics/economic-calendar/">外汇日历</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/analytics/forex-forecast/">外汇分析 外汇预测</a></li>--}}
                {{--<li><a href="https://my.cn.roboforex.com/cs/analytics" target="_blank">RoboForex分析中心</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/analytics/charts/">免费外汇图表</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/analytics/forex-calculator/">外汇保证金计算器</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/analytics/interest-rates/">外汇利率</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/analytics/national-holidays/">银行假日</a></li>--}}
                {{--<li><a href="http://cn.roboforex.com/analytics/tradingcentral/">Trading Central的预测和分析</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</li>--}}
</ul>