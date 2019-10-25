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
                <a class="navbar-brand" href="#">经济概览</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <form class="navbar-form navbar-left" role="search">
                    请选择时间：
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="开始时间"/> -
                        <input type="text" class="form-control" placeholder="结束时间"/>
                    </div>
                    <button type="submit" class="btn btn-default">搜索</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">区域选择<strong class="caret"></strong></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">福田区</a>
                            </li>
                            <li>
                                <a href="#">南山区</a>
                            </li>
                            <li>
                                <a href="#">罗湖区</a>
                            </li>
                            <li>
                                <a href="#">宝安区</a>
                            </li>
                            <li>
                                <a href="#">龙华区</a>
                            </li>
                            <li>
                                <a href="#">龙岗区</a>
                            </li>
                            <li>
                                <a href="#">坪山区</a>
                            </li>
                            <li>
                                <a href="#">盐田区</a>
                            </li>
                        </ul>
                    <li>
                        <a href="#">导出数据</a>
                    </li>
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
    <p style="margin-left: 20px;margin-bottom: 20px;margin-top: 20px;"> 2014-2018年建筑业增加值（亿元）</p>


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
                "year": 2014,
                "地区生产总值(千亿)": 16.64948,
                "比上年增长(%)": 8.1
            }, {
                "year": 2015,
                "地区生产总值(千亿)":18.04137 ,
                "比上年增长(%)": 8.8
            }, {
                "year": 2016,
                "地区生产总值(千亿)":20.07970,
                "比上年增长(%)": 9.2
            }, {
                "year": 2017,
                "地区生产总值(千亿)": 22.49007,
                "比上年增长(%)": 8.2
            }, {
                "year": 2018,
                "地区生产总值(千亿)": 24.41936,
                "比上年增长(%)": 7.6
            },
            ],
            categoryField: "year",
            startDuration: 1,

            categoryAxis: {
                gridPosition: "start"
            },
            valueAxes: [{
                title: " 2014-2018年地区生产总值及增长速度"
            }],
            graphs: [{
                type: "column",
                title: "地区生产总值(千亿)",
                valueField: "地区生产总值(千亿)",
                lineAlpha: 0,
                fillAlphas: 0.8,
                balloonText: "[[title]] in [[category]]:<b>[[value]]</b>"
            }, {
                type: "line",
                title: "比上年增长(%)",
                valueField: "比上年增长(%)",
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
                "country": "福田区",
                "litres": 4018.26
            }, {
                "country": "南山区",
                "litres": 5018.36
            }, {
                "country": "宝安区",
                "litres": 3612.18
            }, {
                "country": "罗湖区",
                "litres": 2253.69
            }, {
                "country": "龙岗区",
                "litres": 4287.86
            }, {
                "country": "龙华区",
                "litres": 2401.82
            }, {
                "country": "坪山区",
                "litres": 701.66
            }, {
                "country": "盐田区",
                "litres": 612.76
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
            "year": "2014",
            "value": 468.58
        },
        {
            "year": "2015",
            "value": 479.72
        },
        {
            "year": "2016",
            "value": 526.67
        },
        {
            "year": "2017",
            "value": 594.07
        },
        {
            "year": "2018",
            "value": 724.48
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
        graph.balloonText = "[[category]]<br><b><span style='font-size:14px;'>[[value]] 亿元</span></b>";
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
            "year": "2月",
            "income": 8.1
        },
        {
            "year": "3月",
            "income": 8.9
        },
        {
            "year": "4月",
            "income": 9.9
        },
        {
            "year": "5月",
            "income": 8.7
        },
        {
            "year": "6月",
            "income": 7.4
        },
        {
            "year": "7月",
            "income": 6.9
        },
        {
            "year": "8月",
            "income": 7.5
        },
        {
            "year": "9月",
            "income": 8.3
        },
        {
            "year": "10月",
            "income": 9.0
        },
        {
            "year": "11月",
            "income": 9.2
        },
        {
            "year": "12月",
            "income": 9.5
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
        valueAxis.title = "2018年规模以上工业增加值累计同比增长速度（%）";
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