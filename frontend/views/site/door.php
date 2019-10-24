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
    <p style="margin-left: 20px;margin-bottom: 20px;margin-top: 20px;">各年份门诊数分布</p>

    <div id="chartdiv3" style="width: 100%; height: 400px;"></div>
    <p style="margin-left: 20px;margin-bottom: 20px;margin-top: 20px;">当年门诊年龄数统计分布</p>
</div>


<?php $this->beginBlock('footer');  ?>
<script>
    var chart;
    var graph;

    var chartData = [
        {
            "year": "1950",
            "value": 16000
        },
        {
            "year": "1951",
            "value": 16800
        },
        {
            "year": "1952",
            "value": 17040
        },
        {
            "year": "1953",
            "value": 16000
        },
        {
            "year": "1954",
            "value": 17000
        },
        {
            "year": "1955",
            "value": 19200
        },
        {
            "year": "1956",
            "value": 16800
        },
        {
            "year": "1957",
            "value": 16200
        },
        {
            "year": "1958",
            "value": 15800
        },
        {
            "year": "1959",
            "value": 12800
        },
        {
            "year": "1960",
            "value": 19800
        },
        {
            "year": "1961",
            "value": 15800
        },
        {
            "year": "1962",
            "value": 16800
        },
        {
            "year": "1963",
            "value": 13800
        },
        {
            "year": "1964",
            "value": 23800
        },
        {
            "year": "1965",
            "value": 17800
        },
        {
            "year": "1966",
            "value": 13800
        },
        {
            "year": "1967",
            "value": 15800
        },
        {
            "year": "1968",
            "value": 17800
        },
        {
            "year": "1969",
            "value": 16800
        },
        {
            "year": "1970",
            "value": 19800
        },
        {
            "year": "1971",
            "value": 14800
        },
        {
            "year": "1972",
            "value": 12800
        },
        {
            "year": "1973",
            "value": 18800
        },
        {
            "year": "1974",
            "value": 13800
        },
        {
            "year": "1975",
            "value": 17800
        },
        {
            "year": "1976",
            "value": 16800
        },
        {
            "year": "1977",
            "value": 11800
        },
        {
            "year": "1978",
            "value": 17800
        },
        {
            "year": "1979",
            "value": 13800
        },
        {
            "year": "1980",
            "value": 16800
        },
        {
            "year": "1981",
            "value": 12800
        },
        {
            "year": "1982",
            "value": 16800
        },
        {
            "year": "1983",
            "value": 19800
        },
        {
            "year": "1984",
            "value": 14800
        },
        {
            "year": "1985",
            "value": 11800
        },
        {
            "year": "1986",
            "value": 17800
        },
        {
            "year": "1987",
            "value": 18800
        },
        {
            "year": "1988",
            "value": 15800
        },
        {
            "year": "1989",
            "value": 11800
        },
        {
            "year": "1990",
            "value": 14800
        },
        {
            "year": "1991",
            "value": 18800
        },
        {
            "year": "1992",
            "value": 13800
        },
        {
            "year": "1993",
            "value": 14800
        },
        {
            "year": "1994",
            "value": 18800
        },
        {
            "year": "1995",
            "value": 13800
        },
        {
            "year": "1996",
            "value": 10800
        },
        {
            "year": "1997",
            "value": 11800
        },
        {
            "year": "1998",
            "value": 19800
        }
    ];


    AmCharts.ready(function () {
        // SERIAL CHART
        chart = new AmCharts.AmSerialChart();

        chart.dataProvider = chartData;
        chart.marginLeft = 10;
        chart.categoryField = "year";
        chart.dataDateFormat = "YYYY";

        // listen for "dataUpdated" event (fired when chart is inited) and call zoomChart method when it happens
        chart.addListener("dataUpdated", zoomChart);

        // AXES
        // category
        var categoryAxis = chart.categoryAxis;
        categoryAxis.parseDates = true; // as our data is date-based, we set parseDates to true
        categoryAxis.minPeriod = "YYYY"; // our data is yearly, so we set minPeriod to YYYY
        categoryAxis.dashLength = 3;
        categoryAxis.minorGridEnabled = true;
        categoryAxis.minorGridAlpha = 0.1;

        // value
        var valueAxis = new AmCharts.ValueAxis();
        valueAxis.axisAlpha = 0;
        valueAxis.inside = true;
        valueAxis.dashLength = 3;
        chart.addValueAxis(valueAxis);

        // GRAPH
        graph = new AmCharts.AmGraph();
        graph.type = "smoothedLine"; // this line makes the graph smoothed line.
        graph.lineColor = "#d1655d";
        graph.negativeLineColor = "#637bb6"; // this line makes the graph to change color when it drops below 0
        graph.bullet = "round";
        graph.bulletSize = 8;
        graph.bulletBorderColor = "#FFFFFF";
        graph.bulletBorderAlpha = 1;
        graph.bulletBorderThickness = 2;
        graph.lineThickness = 2;
        graph.valueField = "value";
        graph.balloonText = "[[category]]<br><b><span style='font-size:14px;'>[[value]]</span></b>";
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
        chart.write("chartdiv");
    });

    // this method is called when chart is first inited as we listen for "dataUpdated" event
    function zoomChart() {
        // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
        chart.zoomToDates(new Date(1972, 0), new Date(1984, 0));
    }




    var chartData3 = [
        {
            "country": "10岁-20岁",
            "visits": 4025,
            "pattern": {"url":"patterns/black/pattern21.png", "width":4, "height":4, "color":"#CC0000"}
        },
        {
            "country": "20岁-30岁",
            "visits": 1882,
            "pattern": {"url":"patterns/black/pattern20.png", "width":4, "height":4}
        },
        {
            "country": "10岁以下",
            "visits": 1809,
            "pattern": {"url":"patterns/black/pattern19.png", "width":4, "height":4}
        },
        {
            "country": "30岁-40岁",
            "visits": 1322,
            "pattern": {"url":"patterns/black/pattern18.png", "width":4, "height":4}
        },
        {
            "country": "50岁-60岁",
            "visits": 1122,
            "pattern": {"url":"patterns/black/pattern17.png", "width":4, "height":4}
        },
        {
            "country": "70岁-80岁",
            "visits": 1114,
            "pattern": {"url":"patterns/black/pattern16.png", "width":4, "height":4}
        },
        {
            "country": "40岁-50岁",
            "visits": 984,
            "pattern": {"url":"patterns/black/pattern15.png", "width":4, "height":4}
        },
        {
            "country": "80岁以上",
            "visits": 711,
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