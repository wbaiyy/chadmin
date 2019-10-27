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
                <a class="navbar-brand" href="#">科室</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#">诊别</a>
                    </li>
                    <li>
                        <a href="#">挂号方式</a>
                    </li>
                </ul>


                <form class="navbar-form navbar-left" role="search">
                    请选择时间：
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="开始时间"/> -
                        <input type="text" class="form-control" placeholder="结束时间"/>
                    </div>
                    <button type="submit" class="btn btn-default">搜索</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">导出</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">病人资料<strong class="caret"></strong></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">性别</a>
                            </li>
                            <li>
                                <a href="#">病人来源</a>
                            </li>
                            <li>
                                <a href="#">年龄段</a>
                            </li>
                            <li class="号别">
                            </li>
                            <li>
                                <a href="#">费别</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </nav>
    </div>
</div>
<div style="font-size:15px;">
    <p style="margin-left: 10px;margin-bottom: -10px;"><b>2018年各行业增长率排名</b></p>
    <div id="chartdiv1" style="width: 600px; height: 400px;"></div>

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

 <p style="margin-left: 10px;margin-top: 50px;margin-bottom: 10px;"><b>近2年各季度经济增长排行图（%）</b></p>
    <div id="chartdiv3" style="width: 100%; height: 400px;"></div>

</div>


<?php $this->beginBlock('footer');  ?>
<script>
     
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
</script>
<?php $this->endBlock();?>