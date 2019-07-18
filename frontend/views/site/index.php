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

    <div id="chartdiv3" style="width:100%; height:400px;"></div>
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
                "收入": 23.5,
                "支出": 18.1
            }, {
                "year": 2006,
                "收入": 26.2,
                "支出": 22.8
            }, {
                "year": 2007,
                "收入": 30.1,
                "支出": 23.9
            }, {
                "year": 2008,
                "收入": 29.5,
                "支出": 25.1
            }, {
                "year": 2009,
                "收入": 24.6,
                "支出": 25
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
                title: "收入",
                valueField: "收入",
                lineAlpha: 0,
                fillAlphas: 0.8,
                balloonText: "[[title]] in [[category]]:<b>[[value]]</b>"
            }, {
                type: "line",
                title: "支出",
                valueField: "支出",
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
                "country": "韦国华医生",
                "litres": 156.9
            }, {
                "country": "赵小锅医生",
                "litres": 131.1
            }, {
                "country": "老金医生",
                "litres": 115.8
            }, {
                "country": "大彪医生",
                "litres": 109.9
            }, {
                "country": "杨小瓜护士",
                "litres": 108.3
            }, {
                "country": "丁大姐医生",
                "litres": 65
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
            "year": "1950",
            "value": -0.307
        },
        {
            "year": "1951",
            "value": -0.168
        },
        {
            "year": "1952",
            "value": -0.073
        },
        {
            "year": "1953",
            "value": -0.027
        },
        {
            "year": "1954",
            "value": -0.251
        },
        {
            "year": "1955",
            "value": -0.281
        },
        {
            "year": "1956",
            "value": -0.348
        },
        {
            "year": "1957",
            "value": -0.074
        },
        {
            "year": "1958",
            "value": -0.011
        },
        {
            "year": "1959",
            "value": -0.074
        },
        {
            "year": "1960",
            "value": -0.124
        },
        {
            "year": "1961",
            "value": -0.024
        },
        {
            "year": "1962",
            "value": -0.022
        },
        {
            "year": "1963",
            "value": 0
        },
        {
            "year": "1964",
            "value": -0.296
        },
        {
            "year": "1965",
            "value": -0.217
        },
        {
            "year": "1966",
            "value": -0.147
        },
        {
            "year": "1967",
            "value": -0.15
        },
        {
            "year": "1968",
            "value": -0.16
        },
        {
            "year": "1969",
            "value": -0.011
        },
        {
            "year": "1970",
            "value": -0.068
        },
        {
            "year": "1971",
            "value": -0.19
        },
        {
            "year": "1972",
            "value": -0.056
        },
        {
            "year": "1973",
            "value": 0.077
        },
        {
            "year": "1974",
            "value": -0.213
        },
        {
            "year": "1975",
            "value": -0.17
        },
        {
            "year": "1976",
            "value": -0.254
        },
        {
            "year": "1977",
            "value": 0.019
        },
        {
            "year": "1978",
            "value": -0.063
        },
        {
            "year": "1979",
            "value": 0.05
        },
        {
            "year": "1980",
            "value": 0.077
        },
        {
            "year": "1981",
            "value": 0.12
        },
        {
            "year": "1982",
            "value": 0.011
        },
        {
            "year": "1983",
            "value": 0.177
        },
        {
            "year": "1984",
            "value": -0.021
        },
        {
            "year": "1985",
            "value": -0.037
        },
        {
            "year": "1986",
            "value": 0.03
        },
        {
            "year": "1987",
            "value": 0.179
        },
        {
            "year": "1988",
            "value": 0.18
        },
        {
            "year": "1989",
            "value": 0.104
        },
        {
            "year": "1990",
            "value": 0.255
        },
        {
            "year": "1991",
            "value": 0.21
        },
        {
            "year": "1992",
            "value": 0.065
        },
        {
            "year": "1993",
            "value": 0.11
        },
        {
            "year": "1994",
            "value": 0.172
        },
        {
            "year": "1995",
            "value": 0.269
        },
        {
            "year": "1996",
            "value": 0.141
        },
        {
            "year": "1997",
            "value": 0.353
        },
        {
            "year": "1998",
            "value": 0.548
        },
        {
            "year": "1999",
            "value": 0.298
        },
        {
            "year": "2000",
            "value": 0.267
        },
        {
            "year": "2001",
            "value": 0.411
        },
        {
            "year": "2002",
            "value": 0.462
        },
        {
            "year": "2003",
            "value": 0.47
        },
        {
            "year": "2004",
            "value": 0.445
        },
        {
            "year": "2005",
            "value": 0.47
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
        graph.balloonText = "[[category]]<br><b><span style='font-size:14px;'>[[value]] C</span></b>";
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
            "income": 24.6
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
        valueAxis.title = "Income in millions, USD";
        valueAxis.gridAlpha = 0.1;
        chart.addValueAxis(valueAxis);

        // GRAPH
        var graph = new AmCharts.AmGraph();
        graph.title = "Income";
        graph.valueField = "income";
        graph.type = "column";
        graph.balloonText = "Income in [[category]]:[[value]]";
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