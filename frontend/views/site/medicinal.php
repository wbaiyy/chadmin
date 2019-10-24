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
    <div id="chartdiv" style="width:100%; height:400px;"></div>
    <p style="margin-left: 520px;margin-bottom: 20px;margin-top: 10px;">当年药品种类使用分布</p>
    <div id="chartdiv1" style="width: 100%; height: 600px;"></div>
    <p style="margin-left: 40px;margin-bottom: 20px;margin-top: 10px;">各年份药品进货和使用量统计</p>

</div>


<?php $this->beginBlock('footer');  ?>
<script>
    var chart;
    var chartData = [
        {
            "country": "感冒咳嗽",
            "visits": 9252
        },
        {
            "country": "胃痛胃胀",
            "visits": 1882
        },
        {
            "country": "痔疮",
            "visits": 1809
        },
        {
            "country": "消化不良",
            "visits": 1322
        },
        {
            "country": "腹泻便秘",
            "visits": 1122
        },
        {
            "country": "头痛发热",
            "visits": 1114
        },
        {
            "country": "妇科炎症",
            "visits": 984
        },
        {
            "country": "五官眼药水",
            "visits": 711
        }
    ];


    AmCharts.ready(function () {
        // PIE CHART
        chart = new AmCharts.AmPieChart();

        // title of the chart
        chart.addTitle("Visitors countries", 16);

        chart.dataProvider = chartData;
        chart.titleField = "country";
        chart.valueField = "visits";
        chart.sequencedAnimation = true;
        chart.startEffect = "elastic";
        chart.innerRadius = "30%";
        chart.startDuration = 2;
        chart.labelRadius = 15;
        chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>";
        // the following two lines makes the chart 3D
        chart.depth3D = 10;
        chart.angle = 15;

        // WRITE
        chart.write("chartdiv");
    });



    var chartData1 = [
        {
            "year": 2005,
            "income": 123.5,
            "expenses": 118.1
        },
        {
            "year": 2006,
            "income": 126.2,
            "expenses": 122.8
        },
        {
            "year": 2007,
            "income": 130.1,
            "expenses": 123.9
        },
        {
            "year": 2008,
            "income": 129.5,
            "expenses": 125.1
        },
        {
            "year": 2009,
            "income": 124.6,
            "expenses": 125
        }
    ];


    AmCharts.ready(function () {
        // SERIAL CHART
        chart = new AmCharts.AmSerialChart();
        chart.dataProvider = chartData1;
        chart.categoryField = "year";
        chart.startDuration = 1;
        chart.rotate = true;

        // AXES
        // category
        var categoryAxis = chart.categoryAxis;
        categoryAxis.gridPosition = "start";
        categoryAxis.axisColor = "#DADADA";
        categoryAxis.dashLength = 3;

        // value
        var valueAxis = new AmCharts.ValueAxis();
        valueAxis.dashLength = 3;
        valueAxis.axisAlpha = 0.2;
        valueAxis.position = "top";
        valueAxis.title = "人民币/w";
        valueAxis.minorGridEnabled = true;
        valueAxis.minorGridAlpha = 0.08;
        valueAxis.gridAlpha = 0.15;
        chart.addValueAxis(valueAxis);

        // GRAPHS
        // column graph
        var graph1 = new AmCharts.AmGraph();
        graph1.type = "column";
        graph1.title = "药品进货";
        graph1.valueField = "income";
        graph1.lineAlpha = 0;
        graph1.fillColors = "#ADD981";
        graph1.fillAlphas = 0.8;
        graph1.balloonText = "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b></span>";
        chart.addGraph(graph1);

        // line graph
        var graph2 = new AmCharts.AmGraph();
        graph2.type = "line";
        graph2.lineColor = "#27c5ff";
        graph2.bulletColor = "#FFFFFF";
        graph2.bulletBorderColor = "#27c5ff";
        graph2.bulletBorderThickness = 2;
        graph2.bulletBorderAlpha = 1;
        graph2.title = "药品使用";
        graph2.valueField = "expenses";
        graph2.lineThickness = 2;
        graph2.bullet = "round";
        graph2.fillAlphas = 0;
        graph2.balloonText = "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b></span>";
        chart.addGraph(graph2);

        // LEGEND
        var legend = new AmCharts.AmLegend();
        legend.useGraphSettings = true;
        chart.addLegend(legend);

        chart.creditsPosition = "top-right";

        // WRITE
        chart.write("chartdiv1");
    });
</script>
<?php $this->endBlock();?>