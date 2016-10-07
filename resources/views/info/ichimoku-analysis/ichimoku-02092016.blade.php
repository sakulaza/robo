@extends('layouts.app_user')

@section('meta')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="一目云图分析 02.09.2016 (GBP/USD, GOLD)" />
    <meta name="keywords" content="一目云图分析 02.09.2016 (GBP/USD, GOLD)" />

    <title>一目云图分析 02.09.2016 (GBP/USD, GOLD)</title>
    <meta property="og:title" content="一目云图分析 02.09.2016 (GBP/USD, GOLD)" />
    <meta property="og:description" content="一目云图分析 02.09.2016 (GBP/USD, GOLD)" />
    <meta property="og:url" content="/analytics/forex-forecast/ichimoku-analysis/ichimoku-02092016/" />
@endsection

@section('path')
    <div id="path">
        <a href="/" >首页</a>
        /                                              <a href="/analytics/" >分析</a>
        /                                              <a href="/analytics/forex-forecast/" >外汇分析 外汇预测</a>
        /                                              <a href="/analytics/forex-forecast/ichimoku-analysis" > 外汇一目均衡图分析和预测</a>
        /                                              一目云图分析 02.09.2016 (GBP/USD, GOLD)
    </div>
@endsection

@section('left')
    <div id="left">
        <div class="news-item">
            <h1>一目云图分析 02.09.2016 (GBP/USD, GOLD)</h1>
            <div class="nli-date">
                02.09.2016

            </div>
            <div class="unregistered-for-analytics unregistered">
                <h2>
                    分析 September 2<sup>nd</sup>, 2016<br />
                    <br />
                    GBP USD, &ldquo;英镑/美元&rdquo;</h2>
                英镑美元，时间框架H4。指示灯：Tenkan Sen和Kijun Sen在云与云相交形成&ldquo;黄金交叉&rdquo;（1）。Ichimoku Cloud很窄（2），但继续向上走，Chinkou Lagging Span是非常接近的图，而且价格上面的线，在D云。短期预测：我们预计得到Tenkan Sen的支持，以及价格增长。<br />
                <br />
                <img alt="" src="http://www.roboforex.ru/files/analitics/07072016/0209gbpusdh4.png" style="width: 643px; height: 392px;" /><br />
                <br />
                英镑美元，时间框架H1。指示灯：Tenkan Sen和Kijun Sen碰见了一个又一个以上云云（1）。Ichimoku云上升（2）和扩大，chinkou滞后跨度图上，且价格在Tenkan Sen和kijun-sen之上.短期预测：我们预计支持来自Senkou Span A，和价格增长。<br />
                <br />
                <img alt="" src="http://www.roboforex.ru/files/analitics/07072016/0209gbpusdh1.png" style="width: 645px; height: 391px;" /><br />
                <br />
                <br />
                <h2>
                    XAU USD, &ldquo;黄金/美元&rdquo;</h2>
                现货黄金美元，时间框架H4。指示灯：Tenkan Sen和Kijun-sen仍然受到&ldquo;死亡交叉&rdquo;（1）。Ichimoku云继续向下（2），Chinkou Lagging Span在下面的图表中，价格是Tenkan Sen和kijun-sen.短‑预测之间：我们可以期待Tenkan Sen和Senkou Span B的支持，然后修正到Senkou Span A和D tenkan-sen.<br />
                <br />
                <img alt="" src="http://www.roboforex.ru/files/analitics/07072016/0209xauusdh4.png" style="width: 645px; height: 394px;" /><br />
                <br />
                &nbsp;<br />
                <strong>RoboForex Analytical Department</strong><br />
                <br />

                <div class="notification">
                    <h3>尊敬的读者!</h3>
                    <p>
                        没有授权,您一天能查看不超过2条评论和每月不超过10条.注册或登录您的会员中心来继续阅读分析评测.
                    </p>
                    {{--<ul class="buttons">--}}
                        {{--<li>--}}
                            {{--<a href="https://my.cn.roboforex.com/cs/register/" class="likeBigButton register">--}}
                                {{--<span>注册</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="https://my.cn.roboforex.com/cs/" class="likeBigButton">--}}
                                {{--<span>登录会员中心</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                </div>
            </div>


            <div id="news-back" class="forecast_back">
                <a href="/analytics/forex-forecast/" class="likeButton"><span><< 返回列表</span></a>
            </div>

            <div class="analitic-warning">
                <b> 注意! </b> <br />
                <p> 金融市场的预测仅代表作者个人观点,不能被视为交易指南.  RoboForex 对从以下推荐提出的预测可能造成的损失不承担责任.</p>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="/themes/rbforex/js/rbfx/ajax.js?v=1"></script>
    <script type="text/javascript" src="/themes/rbforex/js/forecasts/rbfx/cookie_synchronizer.js?v=1"></script>
    <script type="application/javascript">

        $(function(){
            (new RBFX.ForecastsCookieSynchronizer(
                    [
                        {
                            cookie_name   : 'IsRegisteredUser',
                            cookie_expire : 365,
                            cookie_path   : '/',
                            source_url    : 'https://my.cn.roboforex.com/cs/cookie/get/',
                            cross_domain   : true
                        }
                    ]
            )).initEvents();
        });

    </script>
@endsection
