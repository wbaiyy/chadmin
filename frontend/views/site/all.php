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
    <div id="chartdiv1" style="width:100%; height:400px;"></div>
    <div id="chartdiv2" style="width: 100%; height: 400px;"></div>
    <div id="chartdiv3" style="width: 100%; height: 400px;"></div>
</div>


<?php $this->beginBlock('footer');  ?>
<script>
    var chart;
    var chartData = [
        {
            "year": 2009,
            "income": 23.5,
            "expenses": 18.1
        },
        {
            "year": 2010,
            "income": 26.2,
            "expenses": 22.8
        },
        {
            "year": 2011,
            "income": 30.1,
            "expenses": 23.9
        },
        {
            "year": 2012,
            "income": 29.5,
            "expenses": 25.1
        },
        {
            "year": 2013,
            "income": 30.6,
            "expenses": 27.2,
            "dashLengthLine": 5
        },
        {
            "year": 2014,
            "income": 34.1,
            "expenses": 29.9,
            "dashLengthColumn": 5,
            "alpha":0.2,
            "additional":"(projection)"
        }

    ];


    AmCharts.ready(function () {
        // SERIAL CHART
        chart = new AmCharts.AmSerialChart();

        chart.dataProvider = chartData;
        chart.categoryField = "year";
        chart.startDuration = 1;

        chart.handDrawn = true;
        chart.handDrawnScatter = 3;

        // AXES
        // category
        var categoryAxis = chart.categoryAxis;
        categoryAxis.gridPosition = "start";

        // value
        var valueAxis = new AmCharts.ValueAxis();
        valueAxis.axisAlpha = 0;
        chart.addValueAxis(valueAxis);

        // GRAPHS
        // column graph
        var graph1 = new AmCharts.AmGraph();
        graph1.type = "column";
        graph1.title = "Income";
        graph1.lineColor = "#a668d5";
        graph1.valueField = "income";
        graph1.lineAlpha = 1;
        graph1.fillAlphas = 1;
        graph1.dashLengthField = "dashLengthColumn";
        graph1.alphaField = "alpha";
        graph1.balloonText = "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b> [[additional]]</span>";
        chart.addGraph(graph1);

        // line
        var graph2 = new AmCharts.AmGraph();
        graph2.type = "line";
        graph2.title = "Expenses";
        graph2.lineColor = "#fcd202";
        graph2.valueField = "expenses";
        graph2.lineThickness = 3;
        graph2.bullet = "round";
        graph2.bulletBorderThickness = 3;
        graph2.bulletBorderColor = "#fcd202";
        graph2.bulletBorderAlpha = 1;
        graph2.bulletColor = "#ffffff";
        graph2.dashLengthField = "dashLengthLine";
        graph2.balloonText = "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b> [[additional]]</span>";
        chart.addGraph(graph2);

        // LEGEND
        var legend = new AmCharts.AmLegend();
        legend.useGraphSettings = true;
        chart.addLegend(legend);

        // WRITE
        chart.write("chartdiv1");
    });

    var chartData1 = [
        {
            "country": "USA",
            "visits": 3025,
            "color": "#FF0F00"
        },
        {
            "country": "China",
            "visits": 1882,
            "color": "#FF6600"
        },
        {
            "country": "Japan",
            "visits": 1809,
            "color": "#FF9E01"
        },
        {
            "country": "Germany",
            "visits": 1322,
            "color": "#FCD202"
        },
        {
            "country": "UK",
            "visits": 1122,
            "color": "#F8FF01"
        },
        {
            "country": "France",
            "visits": 1114,
            "color": "#B0DE09"
        },
        {
            "country": "India",
            "visits": 984,
            "color": "#04D215"
        },
        {
            "country": "Spain",
            "visits": 711,
            "color": "#0D8ECF"
        },
        {
            "country": "Netherlands",
            "visits": 665,
            "color": "#0D52D1"
        },
        {
            "country": "Russia",
            "visits": 580,
            "color": "#2A0CD0"
        },
        {
            "country": "South Korea",
            "visits": 443,
            "color": "#8A0CCF"
        },
        {
            "country": "Canada",
            "visits": 441,
            "color": "#CD0D74"
        }
    ];


    AmCharts.ready(function () {
        // SERIAL CHART
        chart = new AmCharts.AmSerialChart();
        chart.dataProvider = chartData1;
        chart.categoryField = "country";
        chart.startDuration = 1;
        chart.depth3D = 50;
        chart.angle = 30;
        chart.marginRight = -45;

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
        graph.colorField = "color";
        graph.balloonText = "<b>[[category]]: [[value]]</b>";
        graph.type = "column";
        graph.lineAlpha = 0.5;
        graph.lineColor = "#FFFFFF";
        graph.topRadius = 1;
        graph.fillAlphas = 0.9;
        chart.addGraph(graph);

        // CURSOR
        var chartCursor = new AmCharts.ChartCursor();
        chartCursor.cursorAlpha = 0;
        chartCursor.zoomable = false;
        chartCursor.categoryBalloonEnabled = false;
        chartCursor.valueLineEnabled = true;
        chartCursor.valueLineBalloonEnabled = true;
        chartCursor.valueLineAlpha = 1;
        chart.addChartCursor(chartCursor);

        chart.creditsPosition = "top-right";

        // WRITE
        chart.write("chartdiv2");
    });

</script>
<?php $this->endBlock();?>