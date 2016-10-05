 <!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie8 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if IE 9 ]> <html class="no-js ie9 oldie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <title>常用术语</title>
    <meta property="og:title" content="常用术语" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="/beginner/glossary/" />

    @include('user.partials.script')
</head>

<body class="ltr">
<div id="jGrowl" class="top-right jGrowl"></div>
<link rel="stylesheet" href="/css/uikit.min.css?v=1">
<script type="text/javascript" src="/js/uikit.min.js?v=1"></script>


<div id="wrapper" class="cs">
    @include('user.partials.top')

    @include('user.partials.header')

    @include('user.partials.nav')

    <script type="text/javascript">
        $(document).ready(function () {
            var md = new MobileDetect(window.navigator.userAgent);
            if (md.mobile() === null) {
                return;
            }

            $('.nav.nav-pills > li').each(function(){
                var $this = $(this);
                if (($this).find('.dropdown-menu li').length > 0) {
                    $this.find('.nav-wrapper>a').removeAttr('href')
                }
            });
        });
    </script>


    <div id="path">
        <a href="/" >首页</a>
        /                                              <a href="/beginner/" >学习资源</a>
        /                                              常用术语
    </div>



    <div id="left">
        <h1 >常用术语</h1>
        <div ><b><font class="lf_a">A</font></b>
            <p>
                累积 - 在每一次交易期间内，远期外汇交易所分配的升水或折扣直接关系至利益套汇交易。</p>
            <p align="justify">
                调整 - 官方行动，用于调整内部经济政策来修正国际收支或货币利率。</p>
            <p align="justify">
                套汇 - 利用不同市场的对冲价格，通过买入或卖出信用工具，同时在相应市场中买入相同金额但方向相反的头寸，以便从细微价格差额中获利。</p>
            <p align="justify">
                卖出( 买入)价 - 在一外汇交易合同或交叉货币交易合同中一指定货币的卖出价格。以此价格， 交易者可以买进基础货币。在报价中，它通常为报价的右部价格。例: USD/CHF 1.4527/32，卖出价为1.4532，意为您可以1.4532 瑞士法郎买入1 美元。</p>
            <p align="justify">
                最佳价格 - 一指示告诉交易者最好的买进/ 卖出价格。</p>
            <p align="justify">
                现价或更好 - 一交易以一特定或更理想汇率执行。</p>
            <b><font class="lf_a">B</font></b>
            <p>
                国际收支 - 指一国承认的，在一定时期内对外交易的记录，包括商品、服务和资本流动。</p>
            <p align="justify">
                棒形图表 - 一种由4 个突点组成的图表: 最高和最低价格组成垂直棒状，被一小水平线标志于棒形的左端为开市价格， 右端的小水平线则为关市价格。</p>
            <p align="justify">
                熊市 - 以长时期下跌的价格为特徵的市场。</p>
            <p align="justify">
                买入价 - 该价格是市场在一外汇交易合同或交叉货币交易合同中准备买入一货币的价格。以此价格，交易者可卖出基础货币。它为报价中的左部，例: USD/CHF 1.4527/32， 买入价为1.4527; 意为您能卖出1 美元买进1.4527 瑞士法郎。</p>
            <p align="justify">
                差价 - 买入与卖出价格的差额。</p>
            <p align="justify">
                大数 - 交易员术语，指汇率的头几位数字。这些数字在正常的市场波动中很少发生变化，因此通常在交易员的报价中被省略，特别是在市场活动频繁的时候。比如，美元/日元汇率是 107.30/107.35，但是在被口头报价时没有前三位数字，只报&quot;30/35&quot;。</p>
            <p align="justify">
                帐本 - 在专业交易环境中，帐本是交易商或者交易柜台全部头寸的总览。</p>
            <p align="justify">
                经纪人 - 充当中介的个人或者公司，出於收取手续费或佣金目的，为买方和卖方牵线搭桥。与此相比，&ldquo;交易员&rdquo;经营资本并且购入头寸的一边，希望在接下来的交易中通过向另一方抛售头寸赚取差价（利润）。</p>
            <p align="justify">
                牛市 - 以长时期上涨价格为特徵的市场。</p>
            <b><font class="lf_a">C</font></b>
            <p>
                电缆 - 交易商针对英国英磅的行话，指英磅对美元的汇率。从 18 世纪中期起，汇率信息开始通过跨大西洋电缆传递，此术语因此流传开来。</p>
            <p align="justify">
                烛台图表 - 表示当日成交价格幅度以及开盘及收盘价格的图表。如果收盘价格低於开盘价格，此矩形会被变暗或填满。如果开盘价高於收盘价，此矩形将不被填充。</p>
            <p align="justify">
                现金市场 - 是以期货或期权为实际操作的金融工具的市场。</p>
            <p align="justify">
                中央银行 - 管理一国货币政策并印制一国货币的政府或准政府机构，比如美国中央银行是联邦储备署， 德国中央银行是联邦银行。</p>
            <p align="justify">
                清算资金 - 能立即使用的现金，被用于支付一交易。</p>
            <p align="justify">
                关单价位 - 外汇的交易已不再存在。一关单过程为卖出或买进一货币来抵消同等数量的现有交易。此为持平帐目。</p>
            <p align="justify">
                佣金 - 由经纪人收取的交易费用。</p>
            <p align="justify">
                确认书 - 由交易双方交换、确认交易的各项条款的的交易文件。</p>
            <p align="justify">
                合约或单位 - 外汇交易的标准单位。</p>
            <p align="justify">
                相对货币 - 成对货币中的第二个货币。</p>
            <p align="justify">
                交易对方 - 外汇交易中的其一参与者。</p>
            <p align="justify">
                国家风险 - 与政府干预相关的风险（不包括中央银行干预）。典型事例包括法律和政治事件，如战争，或者国内骚乱。</p>
            <p align="justify">
                交叉配对货币/ 交叉货率 - 在外汇交易中一外汇与另一外汇之交易。例: EUR/GBP。</p>
            <p align="justify">
                外汇符号 AUD - 澳元 CAD - 加拿大元 EUR - 欧元 JPY - 日元 GBP - 英镑 CHF - 瑞士法郎</p>
            <p align="justify">
                货币 - 由一国政府或中央银行发行的该国交易单位，作为法定货币及交易之基本使用。</p>
            <p align="justify">
                货币对 - 由两种货币组成的外汇交易汇率。 例: EUR/USD。</p>
            <p align="justify">
                货币风险 - 由於汇率的反向变化而导致蒙受损失的风险。</p>
            <b><font class="lf_a">D</font></b>
            <p>
                日间交易员 - 投机者在商品交易中的同一交易日内先于最后交易时限清算价位。</p>
            <p align="justify">
                赤字 - 贸易(或者收支）的负结余，支出大於收入/收益。</p>
            <p align="justify">
                交割 - 交易双方过户交易货币的所有权的实际交付行为。</p>
            <p align="justify">
                贬值 - 由於市场供需作用，货币价值下跌。</p>
            <p align="justify">
                衍生工具 - 由另一种证券( 股票, 债券, 货币或者商品) 构成或衍生而来的交易。 期权是一最典型的衍生具。</p>
            <p align="justify">
                贬值 - 通常因官方公告引起的一种货币币值对另一种货币币值的刻意下调。</p>
            <b><font class="lf_a">E</font></b>
            <p>
                经济指标 - 由政府或者非政府机构发布的，显示当前经济增长率以及稳定性的统计数字。 一般的指标包括: 国内生产总值（GDP）、就业率、贸易逆差、工业产值、以及商业目录等等。</p>
            <p align="justify">
                结束日定单 - 以一个指定的价格买入或卖出定单。这定单将持续有效直至当日交易结束，一般而言是下午五点。</p>
            <p align="justify">
                欧洲货币联盟 - 欧洲货币联盟的主要目标是要建立名为欧元的单一欧洲货币。欧元於2002年正式取代欧洲联盟成员国的国家货币。 于1999 年1 月1 日, 欧 元 的 初 步使 用 过 渡 阶 段 开 始.目前，欧元仅以银行业务货币的形式存在，用於帐面金融交易和外汇交易。 这 个过 渡 阶 段 为 期3 年, 之 后 欧 元 将 以 纸 币 与 硬 币 形 式 全 面 流 通.欧洲货币联盟的成员国目前包括：德国、法国、比利时、卢森堡、奥地利、芬兰、爱尔兰、荷兰、意大利、西班牙，以及葡萄牙。</p>
            <p align="justify">
                欧元 - 欧洲货币联盟（EMU）的货币，其取代了欧洲货币单位（ECU 埃居）的地位。</p>
            <b><font class="lf_a">F</font></b>
            <p>
                持平/ 或者轧平 - 如既没有多头也没有空头，即相当於持平或者轧平。如果交易商没有任何头寸，或者其所持全部头寸都互相抵销了，那么他的帐目持平。</p>
            <p align="justify">
                外汇 - (Forex, FX) 在 外汇交易场中同时买入一种货币并卖出另一种货币。</p>
            <p align="justify">
                远期交易 - 将在未来约定日期开始的交易。外汇市场中的远期交易通常被表达为高於（升水）或低於（贴水）即期汇率的差价。如要获得实际远期外汇价格，只需将差价与即期汇率相加即可。</p>
            <p align="justify">
                远期点数 -为计算远期价格，加入当前汇率或从当前汇率中减去的点数。</p>
            <p align="justify">
                基本面分析 - 以判断金融市场未来走势为目标，对经济和政治数据的透彻分析。</p>
            <p align="justify">
                期货 - 一 种在将来某个日期以特定价格交易金融工具、货币或者商品的方式。 与 远 期 交 易 最 主 要 的 不 同 处 是 期 货 在 柜 台 市 场 上 交 易。 一 柜 台 式 交 易 为 任 一 不 在 交 易 所 交 易 的 合 同。</p>
            <p align="justify">
                FX - 外汇交易。</p>
            <b><font class="lf_a">G</font></b>
            <p>
                买涨 - 对股票, 商品和货币作为投资或投机的购买。</p>
            <p align="justify">
                卖空 - 卖出不属于卖方的货币或金融工具。</p>
            <p align="justify">
                撤销前有效定单 - 撤销前有效。委托交易员决定，以固定价格买入或卖出的定单。在被执行或撤销前，GTC 一直有效。</p>
            <p align="justify">
                外汇缺口 - 在这个范围里没有报价。</p>
            <b><font class="lf_a">H</font></b>
            <p>
                对冲 - 用於减少投资组合价 值 易变性的投资头寸或者头寸组合。可在相关证券中购入一 份 抵销头寸。</p>
            <p align="justify">
                达到买价 - 在 一 买价价位上交易被执行。</p>
            <b><font class="lf_a">I</font></b>
            <p>
                通货膨胀 - 一种经济状态，其中消费品物价上涨，进而导致货币购买力下降。</p>
            <p align="justify">
                原始保证金 - 为进入头寸所需的期初抵押存款，用於担保将来业绩。</p>
            <p align="justify">
                银行同业买卖汇率 - 大型国际银行向其它大型国际银行报价时所按照的外汇汇率。</p>
            <b><font class="lf_a">L</font></b>
            <p>
                领先指标 - 被认为可预测未来经济活动的经济变量。</p>
            <p align="justify">
                杠杆 - 也称为保证金，为实际交易的金额与要求保证金的比例。</p>
            <p align="justify">
                伦敦银行间拆放款利率 - 表示伦敦银行间拆放款利率。最大型国际银行间互相借贷的利率。</p>
            <p align="justify">
                限价定单 - 以指定价格或低於指定价格买入，或者以指定价格或高於指定价格卖出的定单。 例 如, USD/YEN 为 117.00/05。</p>
            <p align="justify">
                清算 - 通过执行一笔抵销交易，以结清一份未结头寸。</p>
            <p align="justify">
                流动性与非流动性市场 - 市场能够轻松买入或卖出而不会影响价格稳定的能力。在买卖差价较小的情况下，此市场被描述为具有流动性。另一种测量流动性的方法是卖方和买方的存在数量，越多的参与者能产生越小的价差。非流动性市场的参与者较少，交易价差较大。</p>
            <p align="justify">
                多头 - 购入的工具数量多於卖出数量的头寸。依此，如果市场价格上涨，那么头寸增值。</p>
            <p align="justify">
                单 - 用来衡量外汇交易数量的单位。交易的价值总是相对于一整数&ldquo;单&rdquo;而言。</p>
            <b><font class="lf_a">M</font></b>
            <p>
                保证金 - 客户必须存入 的抵押资金，以便承担由反向价格运动引起的任何可能损失。</p>
            <p align="justify">
                追加保证 - 经纪人或者交易员发出的，对额外资金或者其它抵押的要求，使保证金额到达必要数量，以便能保证向不利於客户方向移动的头寸的业绩。</p>
            <p align="justify">
                运营者 - 提供价格，并准备以这些所述的买卖价格买入或者卖出的交易员。</p>
            <p align="justify">
                市场风险 - 与整体市场相关的风险，并且不能以对冲或者持有多种证券等方式加以分散。</p>
            <p align="justify">
                调至市价 - 交易商以下列两种方式计算各自持有头寸：自然增长或者调至市价。自然增长系只计算已出现的资金流，因此它只表示已经实现的利得或者损失。调至市价方法在每个交易日结束之际利用收盘汇率或者再估价汇率，测算交易商的帐面资产价 值. 所 有 利 润 或损失都被记录在帐，交易商将持有净头寸开始第二天交易。</p>
            <p align="justify">
                到期日 - 一金融工具的交易日或到期日。</p>
            <b><font class="lf_a">O</font></b>
            <p>
                卖出价 - 在卖出时，卖方愿意依照的价格或汇率。 参看买入价。</p>
            <p align="justify">
                抵销交易 - 用於撤销或者抵销未结头寸的部分或全部市场风险的交易。</p>
            <p align="justify">
                选择性委托单 - 一 种 突 发 性定单，执行定单的一部分将自动撤销定单的另一部分。</p>
            <p align="justify">
                开放定单 - 在市场价格向指定价位移动时买入或卖出的定单。通常与撤销前有效 定单相关。</p>
            <p align="justify">
                未结头寸 - 尚未撤销或者清算的交易，此时投资者利益将受外汇汇率走势的影响。</p>
            <p align="justify">
                柜台市场 - 用於描述任何不在交易所进行的交易。</p>
            <p align="justify">
                隔夜交易 - 直到第二个交易日仍保持开放的交易。</p>
            <p align="justify">
                指令 - 一给以交易在特定日期执行的指示。</p>
            <b><font class="lf_a">P</font></b>
            <p>
                点 - 在货币市场中运用的术语，表示汇率可进行的最小增幅移动。根据市场环境，正常情况下是一个基点。每 一 基点由小数点的第4 位开始计算。例， 0.0001。</p>
            <p align="justify">
                头寸 - T头寸是一 种 以买入或卖出表达的交易意向。头寸可指投资者拥有或借用的资金数量。</p>
            <p align="justify">
                升水 - 在货币市场中，升水指为判断远期或期货价格而向即期价格中添加的点数。</p>
            <p align="justify">
                利 润/ 损 失 - 实际操作时，完结交易的兑现利润或损失，再加上被调至市价的理论&ldquo;未兑现&rdquo;利润或损失。</p>
            <b><font class="lf_a">Q</font></b>
            <p>
                报价 - 一种指示性市场价格，显示在任何特定时间，某一证券最高买入和/或最低卖出的有效价格。</p>
            <p>
                <b><font class="lf_a">R</font></b></p>
            <p align="justify">
                波动范围 - 在将来的交易纪录中， 一指定阶段的最高价与最低价的差别。</p>
            <p align="justify">
                汇率 - 以别种货币计的一种货币价格。</p>
            <p align="justify">
                阻力位 - 技术分析术语，表示货币无力超越的某一具体价位。货币价格多次冲击此价格点失败会产生一个通常可由一条直线构成的图案。</p>
            <p align="justify">
                再估价汇率 - 再估价汇率是交易商在进行 每 日结算时，为确定当日利润和亏损而使用的市场汇率。 与贬 值 相 反。</p>
            <p align="justify">
                风险 - 风险暴露在不 确 定变化中，收益的多变性；更重要的是，少於预期收益的可能性。</p>
            <p align="justify">
                风险管理 - 利用金融分析与交易技术来减少和/ 或控制不同种类的风险。</p>
            <p align="justify">
                回购 - 一交易日期放至另一远期交易日期。这 一过程的成本为两种不同货币之间的利率差。</p>
            <p align="justify">
                双向交易 - 买和卖一指定数量之货币。</p>
            <b><font class="lf_a">S</font></b>
            <p align="justify">
                空头头寸 - 由卖出空头而产生的投资头寸。由於此头寸尚未被冲销，因此可从市场价格下跌中获利。</p>
            <p align="justify">
                即期价格 - 当前市场价格。即期交易结算通常在两个交易日内发生。</p>
            <p align="justify">
                价差 - 买卖价格之间的差价。</p>
            <p align="justify">
                轧平 - 没有多头也没有空头，即相当於持平或者轧平。</p>
            <p align="justify">
                停止损失定单 - 以协议价格买入/卖出的定单。交易商还可以预设一 份 停 止损失定单，并可凭此在到达或超过指定价格时，自动清算未结头寸。 例: 如 一 投 资 者 以156.27买 入USD，他会希望下一停止损失定单为155.49，以止损于当美元跌穿155.49。</p>
            <p align="justify">
                支撑位 - 一技术性分析中的术语，表示一货率在指定最高与最低价位间能自动调整自身走势，与阻力位相反。</p>
            <p align="justify">
                掉期 - 一货币掉期为同时以远期货币汇率卖/ 买一相同数量货币。</p>
            <b><font class="lf_a">T</font></b>
            <p>
                技术分析 - 通过分析诸如图表、价格趋势、和交易量等市场数据，试图预报未来市场活动的作法。</p>
            <p align="justify">
                替克 - 货币价格的最小单位变化。</p>
            <p align="justify">
                明日次日 - 为下一日交割同时买入和卖出一种货币。</p>
            <p align="justify">
                交易成本 - 与买入或卖出一款金融工具相关的成本。</p>
            <p align="justify">
                交易日 - 交易发生的日期。</p>
            <p align="justify">
                交易额 - 指定时期内的交易量或交易规模。</p>
            <p align="justify">
                双向报价 - 同时提供一项外汇交易的买入和卖出报价。</p>
            <b><font class="lf_a">U</font></b>
            <p>
                未兑现盈利/ 损失 - 现价的为开市价位的理论上的盈利/ 损失，由经纪人单独对其做决定。未兑现盈 利/ 损失在关仓时变为实际盈利/ 损失。</p>
            <p align="justify">
                证券提价交易 - 高於同种货币较前报价的最新报价。</p>
            <p align="justify">
                证券提价交易规则 - 美国法律规定证券不能被卖空，除非在卖空交易前的交易价格低於卖空交易被执行的价格。</p>
            <p align="justify">
                美国基本利率 - 美国银行向其主要企业客户贷款所依照的利率。</p>
            <b><font class="lf_a">V</font></b>
            <p>
                交割日 - 交割日 -交易双方同意交换款项的日期。</p>
            <p align="justify">
                变动保证金 - 由於市场波动，经纪人向客户提出的附加保证金要求。</p>
            <p align="justify">
                易变性 - 在特定时期内市场价格变动的统计计量。</p>
            <b><font class="lf_a">W</font></b>
            <p>
                锯齿 - 此词条用於说明一 种高速变动的市场状态，即在剧烈价格变动周期之后又紧接著出现一个反向的剧烈价格变动周期。</p>
            <p>
                <b><font class="lf_a">Y</font> </b></p>
        </div>
    </div>


    <div id="right">
        <ul id="r-menu">
            <li >
                <a href="/beginner/how-to-trade-forex/"  >如何进行外汇交易</a>


            </li>
            <li >
                <a href="/beginner/what-is-forex-trading/"  >什么是外汇交易</a>


            </li>
            <li >
                <a href="/beginner/order-type/"  >常见定单类型</a>


            </li>
            <li >
                <a href="/beginner/metatrader-4-demo-account/"  >MetaTrader 4模拟帐户</a>


            </li>
            <li >
                <a href="/beginner/expert-advisors/"  >外汇专家顾问(EA)</a>


            </li>
            <li  class="selected" >
                <a>风险控制</a>


            </li>
            <li >
                <a href="/beginner/glossary/"  >常用术语</a>
            </li>
        </ul>



        @include('user.partials.right_bar')


    </div>



    @include('user.partials.footer')

</div>



<script src="/js/linktracker.js?v=2"></script>


<script type="text/javascript" src="/js/ajax.js?v=1"></script>
<script type="text/javascript" src="/js/referral.js?v=1"></script>
<script type="text/javascript">

    $(function () {
        (new RBFX.ReferralsReferral({
            referrer_info_url: '/referrals/getReferrerInfo/',
            set_referrer_agent_id_cookie_url: '/referrals/setAgentIdCookieByReferrer/',
            remove_referrer_agent_id_cookie_url: '/referrals/removeAgentIdCookieByReferrer/'
        })).getReferrerInfo();
    });

</script><div id="external-link-notification" class="external-link-notification__container">
    <div class="external-link-notification__popup">
        <div class="external-link-notification__message">
            <div class="external-link-notification__info-intro">
                <h2>请注意！</h2><p>您将访问GoldMany(CY) Ltd (由CySEC监管, 执照编号. 191/13)的网站.</p>
            </div>
            <div class="external-link-notification__checkbox">
                <input id="external-link-state" type="checkbox" />
                <label for="external-link-state">无需任何确认即可随时访问此网站</label>
            </div>
        </div>
        <div class="clear"></div>
        <div class="external-link-notification__buttons">
            <a id="external-link-accept-button" class="external-link-notification__accept" href="#" data-disable-notification>前往</a>
            <a id="external-link-cancel-button" class="external-link-notification__cancel" href="#" data-disable-notification>取消</a>
        </div>
        <div class="clear"></div>
    </div>
</div>

<script src="/js/notification.js"></script>
<script>

    $(document).ready(function() {
        var link_tracker = new RBFX.MainLinkTracker();
        (new RBFX.ExternalLinkNotification({
            popup_selector: '#external-link-notification',
            notification_state_selector: '#external-link-state',
            cancel_button_selector: '#external-link-cancel-button',
            accept_button_selector: '#external-link-accept-button',
            accept_callback_map: {
                'a[data-banner-info]': link_tracker.handleBannerLinkClick
            },
            notification_domain_list: ["robofx.com","robofx.ru","robooption.com","GoldMany.pl","GoldMany.pt","it.GoldMany.com","rbfx.es"],
            trigger_selector: 'a:not([data-disable-notification])',
            cookie_name: 'disable_external_link_notification'
        })).initEventHandlers();
    });

</script>
<script>

    $(function() {
        (new RBFX.MainLinkTracker()).initEventHandlers();
    });

</script>
<script type="text/javascript">(function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter = new Ya.Metrika({
                    id: 23465704,
                    webvisor: true,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true
                });
            } catch (e) { }
        });
        var n = d.getElementsByTagName('script')[0], s = d.createElement('script'), f = function () { n.parentNode.insertBefore(s, n); };
        s.type = 'text/javascript';
        s.async = true;
        s.src = (d.location.protocol == 'https:' ? 'https:' : 'http:') + '//mc.yandex.ru/metrika/watch.js';
        if (w.opera == '[object Opera]') { d.addEventListener('DOMContentLoaded', f, false); } else { f(); }
    })(document, window, 'yandex_metrika_callbacks');</script>
<noscript><div><img src="//mc.yandex.ru/watch/23465704" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
</body>
</html>