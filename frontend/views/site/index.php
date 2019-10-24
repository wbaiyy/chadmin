<link href='http://fonts.googleapis.com/css?family=Covered+By+Your+Grace' rel='stylesheet' type='text/css'>
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
    <div style="width:100%;display: inline-block">
        <div id="chartdiv1" style="width: 500px; height: 400px;position: relative;display: inline-block;vertical-align: top;"></div>
        <div id="chartdiv2" style="width: 500px; height: 400px;position: relative;display: inline-block;vertical-align: top;margin-left: 30px;"></div>
    </div>

    <div id="chartdiv3" style="width:100%; height:400px;">
    </div>
    <p style="margin-left: 20px;margin-bottom: 20px;margin-top: 20px;">各年份病人数分布</p>


    <div id="chartdiv4" style="width:100%; height:600px;"></div>
</div>


<?php $this->beginBlock('footer');  ?>
<script>
    // in order to set theme for a chart, all you need to include theme file
    // located in amcharts/themes folder and set theme property for the chart.

    var chart1;
    var chart2;

    makeCharts("light", "#FFFFFF");

    // Theme can only be applied when creating chart instance - this means
    // that if you need to change theme at run time, youhave to create whole
    // chart object once again.

    function makeCharts(theme, bgColor, bgImage) {

        if (chart1) {
            chart1.clear();
        }
        if (chart2) {
            chart2.clear();
        }

        // background
        if (document.body) {
            document.body.style.backgroundColor = bgColor;
            document.body.style.backgroundImage = "url(" + bgImage + ")";
        }

        // column chart
        chart1 = AmCharts.makeChart("chartdiv1", {
            type: "serial",
            theme: theme,
            dataProvider: [{
                "year": 2005,
                "医院收入": 23.5,
                "医院支出": 18.1
            }, {
                "year": 2006,
                "医院收入": 26.2,
                "医院支出": 22.8
            }, {
                "year": 2007,
                "医院收入": 30.1,
                "医院支出": 23.9
            }, {
                "year": 2008,
                "医院收入": 29.5,
                "医院支出": 25.1
            }, {
                "year": 2009,
                "医院收入": 24.6,
                "医院支出": 25
            }],
            categoryField: "year",
            startDuration: 1,

            categoryAxis: {
                gridPosition: "start"
            },
            valueAxes: [{
                title: "医院收支统计"
            }],
            graphs: [{
                type: "column",
                title: "医院收入",
                valueField: "医院收入",
                lineAlpha: 0,
                fillAlphas: 0.8,
                balloonText: "[[title]] in [[category]]:<b>[[value]]</b>"
            }, {
                type: "line",
                title: "医院支出",
                valueField: "医院支出",
                lineThickness: 2,
                fillAlphas: 0,
                bullet: "round",
                balloonText: "[[title]] in [[category]]:<b>[[value]]</b>"
            }],
            legend: {
                useGraphSettings: true
            }
        });

        // pie chart
        chart2 = AmCharts.makeChart("chartdiv2", {
            type: "pie",
            theme: theme,
            dataProvider: [{
                "country": "韦果华医生",
                "litres": 156.9
            }, {
                "country": "赵小锅医生",
                "litres": 131.1
            }, {
                "country": "金大洋医生",
                "litres": 115.8
            }, {
                "country": "易大彪医生",
                "litres": 109.9
            }, {
                "country": "丁丁医生",
                "litres": 108.3
            }, {
                "country": "其他医生",
                "litres": 265
            }, {
                "country": "咸鱼医生",
                "litres": 50
            }],
            titleField: "country",
            valueField: "litres",
            balloonText: "[[title]]<br><b>[[value]]</b> ([[percents]]%)",
            legend: {
                align: "center",
                markerType: "circle"
            }
        });

    }


    var graph;
    // months in JS are zero-based, 0 means January
    var chartData = [
        {
            "year": "1995",
            "value": 16002
        },
        {
            "year": "1996",
            "value": 17012
        },
        {
            "year": "1997",
            "value": 17902
        },
        {
            "year": "1998",
            "value": 18002
        },
        {
            "year": "1999",
            "value": 20000
        },
        {
            "year": "2000",
            "value": 20389
        },
        {
            "year": "2001",
            "value": 20689
        },
        {
            "year": "2002",
            "value": 21810
        },
        {
            "year": "2003",
            "value": 22968
        },
        {
            "year": "2004",
            "value": 24968
        },
        {
            "year": "2005",
            "value": 21968
        },
        {
            "year": "2006",
            "value": 18689
        },
        {
            "year": "2007",
            "value": 23123
        },
        {
            "year": "2008",
            "value": 18968
        },
        {
            "year": "2009",
            "value": 19001
        },
        {
            "year": "2010",
            "value": 29001
        }
    ];


    AmCharts.ready(function () {
        // SERIAL CHART
        chart = new AmCharts.AmSerialChart();

        chart.marginRight = 20;
        chart.marginLeft = 20;
        chart.autoMargins = false;
        chart.dataProvider = chartData;
        chart.categoryField = "year";
        chart.dataDateFormat = "YYYY";

        // AXES
        // Category
        var categoryAxis = chart.categoryAxis;
        categoryAxis.parseDates = true; // as our data is date-based, we set parseDates to true
        categoryAxis.minPeriod = "YYYY"; // our data is yearly, so we set minPeriod to YYYY
        categoryAxis.minorGridEnabled = true;
        categoryAxis.minorGridAlpha = 0.15;

        // VALUE
        var valueAxis = new AmCharts.ValueAxis();
        valueAxis.gridAlpha = 0;
        valueAxis.axisAlpha = 0;
        valueAxis.fillColor = "#000000";
        valueAxis.fillAlpha = 0.05;
        valueAxis.inside = true;
        chart.addValueAxis(valueAxis);

        // GRAPH
        graph = new AmCharts.AmGraph();
        graph.type = "step"; // this line makes step graph
        graph.valueField = "value";
        graph.lineColor = "#000000";
        graph.balloonText = "[[category]]<br><b><span style='font-size:14px;'>[[value]] 个</span></b>";
        chart.addGraph(graph);

        // CURSOR
        var chartCursor = new AmCharts.ChartCursor();
        chartCursor.cursorAlpha = 0;
        chartCursor.cursorPosition = "mouse";
        chartCursor.categoryBalloonDateFormat = "YYYY";
        chart.addChartCursor(chartCursor);

        // SCROLLBAR
        var chartScrollbar = new AmCharts.ChartScrollbar();
        chart.addChartScrollbar(chartScrollbar);

        chart.creditsPosition = "bottom-right";

        // WRITE
        chart.write("chartdiv3");
    });

    var chart;

    var chartData1 = [
        {
            "year": 2005,
            "income": 23.5
        },
        {
            "year": 2006,
            "income": 26.2
        },
        {
            "year": 2007,
            "income": 30.1
        },
        {
            "year": 2008,
            "income": 29.5
        },
        {
            "year": 2009,
            "income": 34.6
        }
    ];


    AmCharts.ready(function () {
        // SERIAL CHART
        chart = new AmCharts.AmSerialChart();
        chart.dataProvider = chartData1;
        chart.categoryField = "year";
        // this single line makes the chart a bar chart,
        // try to set it to false - your bars will turn to columns
        chart.rotate = true;
        // the following two lines makes chart 3D
        chart.depth3D = 20;
        chart.angle = 30;

        // AXES
        // Category
        var categoryAxis = chart.categoryAxis;
        categoryAxis.gridPosition = "start";
        categoryAxis.axisColor = "#DADADA";
        categoryAxis.fillAlpha = 1;
        categoryAxis.gridAlpha = 0;
        categoryAxis.fillColor = "#FAFAFA";

        // value
        var valueAxis = new AmCharts.ValueAxis();
        valueAxis.axisColor = "#DADADA";
        valueAxis.title = "医用设备使用次数统计";
        valueAxis.gridAlpha = 0.1;
        chart.addValueAxis(valueAxis);

        // GRAPH
        var graph = new AmCharts.AmGraph();
        graph.title = "Income";
        graph.valueField = "income";
        graph.type = "column";
        graph.balloonText = "使用次数 [[category]]:[[value]]";
        graph.lineAlpha = 0;
        graph.fillColors = "#bf1c25";
        graph.fillAlphas = 1;
        chart.addGraph(graph);

        chart.creditsPosition = "top-right";

        // WRITE
        chart.write("chartdiv4");
    });
</script>
<?php $this->endBlock();?>