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
    <div id="chartdiv1" style="width: 600px; height: 400px;"></div>
    <p style="margin-left: 150px;margin-bottom: 20px;">医职员教育背景分布图</p>

    <div id="chartdiv" style="width: 1200px; height: 400px;"></div>
    <p style="margin-left: 50px;margin-bottom: 20px;">医职员年龄和入职时间分布图</p>

</div>


<?php $this->beginBlock('footer');  ?>
<script>
    var chart;

    var chartData = [
        {
            "x": 18,
            "y": 1,
            "value": 59
        },
        {
            "x": 24,
            "y": 2,
            "value": 50
        },
        {
            "x": 30,
            "y": 3,
            "value": 19
        },
        {
            "x": 36,
            "y": 4,
            "value": 65
        },
        {
            "x": 42,
            "y": 5,
            "value": 92
        },
        {
            "x": 48,
            "y": 6,
            "value": 8
        },
        {
            "x": 54,
            "y": 7,
            "value": 35
        }
    ];

    AmCharts.ready(function () {
        // XY Chart
        chart = new AmCharts.AmXYChart();
        chart.dataProvider = chartData;
        chart.startDuration = 1.5;

        // AXES
        // X
        var xAxis = new AmCharts.ValueAxis();
        xAxis.title = "年龄";
        xAxis.position = "bottom";
        xAxis.autoGridCount = true;
        chart.addValueAxis(xAxis);

        // Y
        var yAxis = new AmCharts.ValueAxis();
        yAxis.title = "入职时间";
        yAxis.position = "left";
        yAxis.autoGridCount = true;
        chart.addValueAxis(yAxis);

        // GRAPH
        var graph = new AmCharts.AmGraph();
        graph.valueField = "value"; // valueField responsible for the size of a bullet
        graph.xField = "x";
        graph.yField = "y";
        graph.lineAlpha = 0;
        graph.bullet = "bubble";
        graph.balloonText = "x:<b>[[x]]</b> y:<b>[[y]]</b><br>value:<b>[[value]]</b>"
        chart.addGraph(graph);

        // WRITE
        chart.write("chartdiv");
    });

    var chartData1 = [
        {
            "country": "本科",
            "litres": 156.9
        },
        {
            "country": "硕士",
            "litres": 131.1
        },
        {
            "country": "教授",
            "litres": 115.8
        },
        {
            "country": "专科",
            "litres": 109.9
        },
        {
            "country": "博士",
            "litres": 108.3
        },
        {
            "country": "博士后",
            "litres": 70
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
</script>
<?php $this->endBlock();?>