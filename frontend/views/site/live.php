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
    <div id="chartdiv" style="width: 700px; height: 500px;"></div>
    <div id="chartdiv1" style="width:100%; height:400px;"></div>
</div>


<?php $this->beginBlock('footer');  ?>
<script>
    var chart;
    var data = [
        {
            "title": "Website visits",
            "value": 200
        },
        {
            "title": "Downloads",
            "value": 123
        },
        {
            "title": "Requested price list",
            "value": 98
        },
        {
            "title": "Contaced for more info",
            "value": 72
        },
        {
            "title": "Purchased",
            "value": 65
        },
        {
            "title": "Contacted for support",
            "value": 45
        },
        {
            "title": "Purchased additional products",
            "value": 36
        }
    ];

    AmCharts.ready(function () {

        chart = new AmCharts.AmFunnelChart();
        chart.rotate = true;
        chart.titleField = "title";
        chart.balloon.fixedPosition = true;
        chart.marginRight = 210;
        chart.marginLeft = 15;
        chart.labelPosition = "right";
        chart.funnelAlpha = 0.9;
        chart.valueField = "value";
        chart.startX = -500;
        chart.dataProvider = data;
        chart.startAlpha = 0;
        chart.depth3D = 100;
        chart.angle = 30;
        chart.outlineAlpha = 1;
        chart.outlineThickness = 2;
        chart.outlineColor = "#FFFFFF";
        chart.write("chartdiv");
    });


    var chartData = [];

    AmCharts.ready(function () {
        // first we generate some random data
        generateChartData();

        // SERIAL CHART
        chart = new AmCharts.AmSerialChart();

        chart.dataProvider = chartData;
        chart.categoryField = "date";

        // data updated event will be fired when chart is first displayed,
        // also when data will be updated. We'll use it to set some
        // initial zoom
        chart.addListener("dataUpdated", zoomChart);

        // AXES
        // Category
        var categoryAxis = chart.categoryAxis;
        categoryAxis.parseDates = true; // in order char to understand dates, we should set parseDates to true
        categoryAxis.minPeriod = "mm"; // as we have data with minute interval, we have to set "mm" here.
        categoryAxis.gridAlpha = 0.07;
        categoryAxis.axisColor = "#DADADA";

        // Value
        var valueAxis = new AmCharts.ValueAxis();
        valueAxis.gridAlpha = 0.07;
        valueAxis.title = "Unique visitors";
        chart.addValueAxis(valueAxis);

        // GRAPH
        var graph = new AmCharts.AmGraph();
        graph.type = "line"; // try to change it to "column"
        graph.title = "red line";
        graph.valueField = "visits";
        graph.lineAlpha = 1;
        graph.lineColor = "#d1cf2a";
        graph.fillAlphas = 0.3; // setting fillAlphas to > 0 value makes it area graph
        chart.addGraph(graph);

        // CURSOR
        var chartCursor = new AmCharts.ChartCursor();
        chartCursor.cursorPosition = "mouse";
        chartCursor.categoryBalloonDateFormat = "JJ:NN, DD MMMM";
        chart.addChartCursor(chartCursor);

        // SCROLLBAR
        var chartScrollbar = new AmCharts.ChartScrollbar();

        chart.addChartScrollbar(chartScrollbar);

        // WRITE
        chart.write("chartdiv1");
    });

    // generate some random data, quite different range
    function generateChartData() {
        // current date
        var firstDate = new Date();
        // now set 1000 minutes back
        firstDate.setMinutes(firstDate.getDate() - 1000);

        // and generate 1000 data items
        for (var i = 0; i < 1000; i++) {
            var newDate = new Date(firstDate);
            // each time we add one minute
            newDate.setMinutes(newDate.getMinutes() + i);
            // some random number
            var visits = Math.round(Math.random() * 40) + 10;
            // add data item to the array
            chartData.push({
                date: newDate,
                visits: visits
            });
        }
    }

    // this method is called when chart is first inited as we listen for "dataUpdated" event
    function zoomChart() {
        // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
        chart.zoomToIndexes(chartData.length - 40, chartData.length - 1);
    }
</script>
<?php $this->endBlock();?>