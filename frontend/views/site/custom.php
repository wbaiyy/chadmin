<div class="row clearfix">
    <div class="col-md-12 column">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">排名分析</a>
            </div>

            <?php include('search.php'); ?>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">排名维度<strong class="caret"></strong></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">经济类型</a>
                            </li>
                            <li>
                                <a href="#">增长率</a>
                            </li>
                            <li>
                                <a href="#">产量</a>
                            </li>
                            <li>
                                <a href="#">潜力</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">自变量<strong class="caret"></strong></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">消费排名</a>
                            </li>
                            <li>
                                <a href="#">工业排名</a>
                            </li>
                            <li>
                                <a href="#">农业排名</a>
                            </li>
                            <li>
                                <a href="#">金融排名</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <?php include('common.php'); ?>
            </div>
        </nav>
    </div>
</div>
<div style="font-size:15px;">
    <p style="margin-left: 10px;margin-top: 50px;margin-bottom: 10px;"><b>近2年各季度经济增长排行图（%）</b></p>
    <div id="chartdiv3" style="width: 100%; height: 400px;"></div>

    <div class="" style="margin-top: 50px;">
        <table class="table table-striped">
            <caption><b>2018年各行业产值及增量数据</b></caption>
            <thead>
            <tr>
                <th>行业类型</th>
                <th>产量/产值</th>
                <th>增长率（%）</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>农业</td>
                <td>18.93万亩</td>
                <td>5.6</td>
            </tr>
            <tr>
                <td>工业和建筑业</td>
                <td>9254.00亿元</td>
                <td>9.0</td>
            </tr>
            <tr>
                <td>国内贸易</td>
                <td>6168.87亿元</td>
                <td>7.6</td>
            </tr>
            <tr>
                <td>对外经济</td>
                <td>29983.74亿元</td>
                <td>7.0</td>
            </tr>
            <tr>
                <td>交通、邮电与旅游</td>
                <td>32763.63万吨</td>
                <td>1.5</td>
            </tr>
            <tr>
                <td>金融、证券和保险</td>
                <td>72550.36亿元</td>
                <td>4.1</td>
            </tr>

            </tbody>
        </table>
    </div>

    <p style="margin-left: 10px;margin-bottom: -10px;"><b>2018年各行业增长率排名</b></p>
    <div id="chartdiv1" style="width: 600px; height: 400px;"></div>

    <div class="" style="margin-top: 50px;">
        <table class="table table-striped">
            <caption><b>2018年全市居民人均消费支出及构成排行图</b></caption>
            <thead>
            <tr>
                <th>消费类型</th>
                <th>消费金额（元）</th>
                <th>消费占比（%）</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>居住消费</td>
                <td>12160.3</td>
                <td>30</td>
            </tr>
            <tr>
                <td>食品烟酒</td>
                <td>11836.23</td>
                <td>29.3</td>
            </tr>
            <tr>
                <td>交通和通讯</td>
                <td>5694.22</td>
                <td>14</td>
            </tr>
            <tr>
                <td>教育文化娱乐</td>
                <td>3934.54</td>
                <td>9.7</td>
            </tr>
            <tr>
                <td>生活用品及服务</td>
                <td>2268.22</td>
                <td>5.6</td>
            </tr>
            <tr>
                <td>衣着</td>
                <td>2177.51</td>
                <td>5.4</td>
            </tr>
            <tr>
                <td>医疗保健</td>
                <td>1278.48</td>
                <td>3.2</td>
            </tr>
            <tr>
                <td>其他消费</td>
                <td>1185.80</td>
                <td>2.9</td>
            </tr>

            </tbody>
        </table>
    </div>

    <p style="margin-left: 10px;margin-bottom: -10px;"><b>2018年居民消费排行图（单位元）</b></p>
    <div id="chartdiv2" style="width: 1000px; height: 400px;"></div>
</div>


<?php $this->beginBlock('footer');  ?>
<script>

    var chart
    var chartData1 = [
        {
            "country": "农业",
            "litres": 5.6
        },
        {
            "country": "工业和建筑业",
            "litres": 9.0
        },
        {
            "country": "国内贸易",
            "litres": 7.6
        },
        {
            "country": "对外经济",
            "litres": 7.0
        },
        {
            "country": "交通、邮电与旅游",
            "litres": 1.5
        },
        {
            "country": "金融、证券和保险",
            "litres": 4.5
        }
    ];

    AmCharts.ready(function () {
        // RADAR CHART
        chart = new AmCharts.AmRadarChart();
        chart.dataProvider = chartData1;
        chart.categoryField = "country";
        chart.startDuration = 2;

        // VALUE AXIS
        var valueAxis = new AmCharts.ValueAxis();
        valueAxis.axisAlpha= 0.15;
        valueAxis.minimum = 0;
        valueAxis.dashLength = 3;
        valueAxis.axisTitleOffset = 20;
        valueAxis.gridCount = 5;
        chart.addValueAxis(valueAxis);

        // GRAPH
        var graph = new AmCharts.AmGraph();
        graph.valueField = "litres";
        graph.bullet = "round";
        graph.balloonText = "[[value]] litres of beer per year";
        chart.addGraph(graph);

        // WRITE
        chart.write("chartdiv1");
    });





 var chartData3 = [
        {
            "country": "2017年第一季度",
            "visits": 6.2,
            "pattern": {"url":"patterns/black/pattern21.png", "width":4, "height":4, "color":"#CC0000"}
        },
        {
            "country": "2017年第二季度",
            "visits": 6.8,
            "pattern": {"url":"patterns/black/pattern20.png", "width":4, "height":4}
        },
        {
            "country": "2017年第三季度",
            "visits": 7.1,
            "pattern": {"url":"patterns/black/pattern19.png", "width":4, "height":4}
        },
        {
            "country": "2017年第四季度",
            "visits": 7.8,
            "pattern": {"url":"patterns/black/pattern18.png", "width":4, "height":4}
        },
        {
            "country": "2018年第一季度",
            "visits": 5.9,
            "pattern": {"url":"patterns/black/pattern17.png", "width":4, "height":4}
        },
        {
            "country": "2018年第二季度",
            "visits": 7.2,
            "pattern": {"url":"patterns/black/pattern16.png", "width":4, "height":4}
        },
        {
            "country": "2018年第三季度",
            "visits": 6.3,
            "pattern": {"url":"patterns/black/pattern15.png", "width":4, "height":4}
        },
        {
            "country": "2018年第四季度",
            "visits": 6.8,
            "pattern": {"url":"patterns/black/pattern14.png", "width":4, "height":4}
        }
    ];

    AmCharts.ready(function () {
        // SERIAL CHART
        chart = new AmCharts.AmSerialChart();

        chart.dataProvider = chartData3;
        chart.categoryField = "country";

        // AXES
        // category
        var categoryAxis = chart.categoryAxis;
        categoryAxis.gridAlpha = 0;
        categoryAxis.axisAlpha = 0;
        categoryAxis.gridPosition = "start";

        // value
        var valueAxis = new AmCharts.ValueAxis();
        valueAxis.axisAlpha = 0;
        valueAxis.gridAlpha = 0;
        chart.addValueAxis(valueAxis);

        // GRAPH
        var graph = new AmCharts.AmGraph();
        graph.valueField = "visits";
        graph.balloonText = "[[category]]: <b>[[value]]</b>";
        graph.type = "column";
        graph.lineAlpha = 0;
        graph.lineColor = "#000000";
        graph.fillAlphas = 0.8;
        graph.patternField = "pattern";
        chart.addGraph(graph);

        // CURSOR
        var chartCursor = new AmCharts.ChartCursor();
        chartCursor.cursorAlpha = 0;
        chartCursor.zoomable = false;
        chartCursor.categoryBalloonEnabled = false;
        chart.addChartCursor(chartCursor);

        chart.creditsPosition = "top-right";

        chart.write("chartdiv3");
    });




    var chart2;

    var chartData2 = [
        {
            "country": "居住消费",
            "visits": 12160.3,
            "color": "#FF0F00"
        },
        {
            "country": "食品烟酒",
            "visits": 11836.23,
            "color": "#FF6600"
        },
        {
            "country": "交通和通讯",
            "visits": 5694.22,
            "color": "#FF9E01"
        },
        {
            "country": "教育文化娱乐",
            "visits": 3934.54,
            "color": "#FCD202"
        },
        {
            "country": "生活用品及服务",
            "visits": 2268.22,
            "color": "#F8FF01"
        },
        {
            "country": "衣着",
            "visits": 2177.51,
            "color": "#B0DE09"
        },
        {
            "country": "医疗保健",
            "visits": 1278.48,
            "color": "#04D215"
        },
        {
            "country": "其他消费",
            "visits": 1185.80,
            "color": "#0D8ECF"
        }
    ];


    AmCharts.ready(function () {
        // SERIAL CHART
        chart2 = new AmCharts.AmSerialChart();
        chart2.dataProvider = chartData2;
        chart2.categoryField = "country";
        chart2.startDuration = 1;
        chart2.depth3D = 50;
        chart2.angle = 30;
        chart2.marginRight = -45;

        // AXES
        // category
        var categoryAxis = chart.categoryAxis;
        categoryAxis.gridAlpha = 0;
        categoryAxis.axisAlpha = 0;
        categoryAxis.gridPosition = "start";

        // value
        var valueAxis = new AmCharts.ValueAxis();
        valueAxis.axisAlpha = 0;
        valueAxis.gridAlpha = 0;
        chart2.addValueAxis(valueAxis);

        // GRAPH
        var graph = new AmCharts.AmGraph();
        graph.valueField = "visits";
        graph.colorField = "color";
        graph.balloonText = "<b>[[category]]: [[value]]</b>";
        graph.type = "column";
        graph.lineAlpha = 0.5;
        graph.lineColor = "#FFFFFF";
        graph.topRadius = 1;
        graph.fillAlphas = 0.9;
        chart2.addGraph(graph);

        // CURSOR
        var chartCursor = new AmCharts.ChartCursor();
        chartCursor.cursorAlpha = 0;
        chartCursor.zoomable = false;
        chartCursor.categoryBalloonEnabled = false;
        chartCursor.valueLineEnabled = true;
        chartCursor.valueLineBalloonEnabled = true;
        chartCursor.valueLineAlpha = 1;
        chart2.addChartCursor(chartCursor);

        chart2.creditsPosition = "top-right";

        // WRITE
        chart2.write("chartdiv2");
    });
</script>
<?php $this->endBlock();?>