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
                <a class="navbar-brand" href="#">趋势变化分析</a>
            </div>

            <?php include('search.php'); ?>

        </nav>
    </div>
</div>
<div style="font-size:15px;">
    <p style="margin-left: 10px;margin-top: 50px;margin-bottom: 10px;">各年度经济指标总量（亿元）</p>
    <div id="chartdiv" style="width:100%; height:400px;"></div>

    <div class="" style="margin-top: 30px;">
        <table class="table table-striped">
            <caption>2014-2018年全部工业增加值及增长速度</caption>
            <thead>
            <tr>
                <th>年份</th>
                <th>工业增加值（亿元）</th>
                <th>比上年增长（%）</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>2018</td>
                <td>9245.0</td>
                <td>9.0</td>
            </tr>
            <tr>
                <td>2017</td>
                <td>8749.14</td>
                <td>9.4</td>
            </tr>
            <tr>
                <td>2016</td>
                <td>7800.22</td>
                <td>8.1</td>
            </tr>
            <tr>
                <td>2015</td>
                <td>7214.17</td>
                <td>7.6</td>
            </tr>
            <tr>
                <td>2014</td>
                <td>6773.70</td>
                <td>8.2</td>
            </tr>

            </tbody>
        </table>
    </div>

    <p style="margin-left: 10px;margin-top: 50px;margin-bottom: 10px;">近2年各季度经济增长比例（%）</p>
    <div id="chartdiv3" style="width: 100%; height: 400px;"></div>
</div>


<?php $this->beginBlock('footer');  ?>
<script>
    var chart;
    var graph;

    var chartData = [
        {
            "year": "1980",
            "value": 2.7
        },
        {
            "year": "1981",
            "value": 4.6
        },
        {
            "year": "1982",
            "value": 12.5
        },
        {
            "year": "1983",
            "value": 19.9
        },
        {
            "year": "1984",
            "value": 26.6
        },
        {
            "year": "1985",
            "value": 39
        },
        {
            "year": "1986",
            "value": 56.3
        },
        {
            "year": "1987",
            "value": 72.9
        },
        {
            "year": "1988",
            "value": 92.6
        },
        {
            "year": "1989",
            "value": 135.5
        },
        {
            "year": "1990",
            "value": 172
        },
        {
            "year": "1991",
            "value": 236.9
        },
        {
            "year": "1992",
            "value": 335.7
        },
        {
            "year": "1993",
            "value": 506.3
        },
        {
            "year": "1994",
            "value": 667.2
        },
        {
            "year": "1995",
            "value": 842
        },
        {
            "year": "1996",
            "value": 1024.2
        },
        {
            "year": "1997",
            "value": 1265.9
        },
        {
            "year": "1998",
            "value": 1468.8
        },
        {
            "year": "1999",
            "value": 1778.6
        },
        {
            "year": "2000",
            "value": 2187
        },
        {
            "year": "2001",
            "value": 2569.5
        },
        {
            "year": "2002",
            "value": 3005.3
        },
        {
            "year": "2003",
            "value": 3486.9
        },
        {
            "year": "2004",
            "value": 4186.5
        },
        {
            "year": "2005",
            "value": 4951
        },
        {
            "year": "2006",
            "value": 5644.3
        },
        {
            "year": "2007",
            "value": 6855.9
        },
        {
            "year": "2008",
            "value": 7966.2
        },
        {
            "year": "2009",
            "value": 8844.6
        },
        {
            "year": "2010",
            "value": 9511
        },
        {
            "year": "2011",
            "value": 10523.3
        },
        {
            "year": "2012",
            "value": 12586.5
        },
        {
            "year": "2013",
            "value": 14859.7
        },
        {
            "year": "2014",
            "value": 16005.8
        },
        {
            "year": "2015",
            "value": 17896.1
        },
        {
            "year": "2016",
            "value": 19492
        },
        {
            "year": "2017",
            "value": 21813
        },
        {
            "year": "2018",
            "value": 24221.9
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