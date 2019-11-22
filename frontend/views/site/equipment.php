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
                <a class="navbar-brand" href="#">关联分析</a>
            </div>

            <?php include('search.php'); ?>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">数据类型<strong class="caret"></strong></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">本地区</a>
                            </li>
                            <li>
                                <a href="#">本行业</a>
                            </li>
                            <li>
                                <a href="#">同制度</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">自变量<strong class="caret"></strong></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">能源指标</a>
                            </li>
                            <li>
                                <a href="#">效率指标</a>
                            </li>
                            <li>
                                <a href="#">潜力指标</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">指标<strong class="caret"></strong></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">用电量</a>
                            </li>
                            <li>
                                <a href="#">能耗</a>
                            </li>
                            <li>
                                <a href="#">运输</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">属性<strong class="caret"></strong></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">数量</a>
                            </li>
                            <li>
                                <a href="#">产量</a>
                            </li>
                            <li>
                                <a href="#">成长率</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <?php include('common.php'); ?>

            </div>

        </nav>
    </div>
</div>
<div style="font-size:15px;">
    <p style="margin-left: 10px;margin-bottom: 10px;margin-top: 10px;"><b>年份月份经济增长关联图（残差分析图）</b></p>
    <div id="chartdiv5" style="width:100%; height:400px;"></div>
    
    <div class="" style="margin-top: 50px;">
        <table class="table table-striped">
            <caption><b>2018年对主要国家及地区货物进出口总额及增长速度</b></caption>
            <thead>
            <tr>
                <th>国家和地区</th>
                <th>出口额（亿元）</th>
                <th>比上年增长（%）</th>
                <th>进口额（亿元）</th>
                <th>比上年增长（%）</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>香港</td>
                <td>6758.33</td>
                <td>4.0</td>
                <td>49.46</td>
                <td>-8.9</td>
            </tr>
            <tr>
               <td>美国</td>
                <td>2383.94</td>
                <td>-5.8</td>
                <td>380.29</td>
                <td>-2.6</td>
            </tr>
            <tr>
                 <td>香港</td>
                <td>6758.33</td>
                <td>4.0</td>
                <td>49.46</td>
                <td>-8.9</td>
            </tr>
            <tr>
                 <td>台湾</td>
                <td>143.86</td>
                <td>8.7</td>
                <td>2596.05</td>
                <td>22</td>
            </tr>  
            <tr>
                 <td>韩国</td>
                <td>260.44</td>
                <td>-10.3</td>
                <td>1374.04</td>
                <td>22.6</td>
            </tr>
            <tr>
                <td>日本</td>
                <td>483.73</td>
                <td>-0.4</td>
                <td>983.72</td>
                <td>8.9</td>
            </tr>
            <tr>
                <td>欧盟</td>
                <td>2064.51</td>
                <td>-3.4</td>
                <td>651.18</td>
                <td>6.3</td>
            </tr>
            </tbody>
        </table>
    </div>

    <p style="margin-bottom: 10px;margin-top: 50px;"><b>经济总量和进出口关系时间图（模型拟合）</b></p>
    <div id="chartdiv6" style="width: 1200px; height: 400px;"></div>
<div style="float:right;margin-right:20px;">
        <input onChange="changeZoomDates()" style="width:100px; text-align:center"
               type="text" id="startDate">-
        <input onChange="changeZoomDates()" style="width:100px; text-align:center"
               type="text" id="endDate"></div>
</div>


<?php $this->beginBlock('footer');  ?>
<script>
 




   var chart5;
    var chartData5 = [
        {
            "x": 1,
            "y": 2012,
            "value": 59
        },
        {
            "x": 3,
            "y": 2013,
            "value": 50
        },
        {
            "x": 5,
            "y": 2014,
            "value": 19
        },
        {
            "x": 7,
            "y": 2015,
            "value": 65
        },
        {
            "x": 9,
            "y": 2016,
            "value": 92
        },
        {
            "x": 11,
            "y": 2017,
            "value": 8
        },
        {
            "x": 12,
            "y": 2018,
            "value": 35
        }
    ];

    AmCharts.ready(function () {
        // XY Chart
        chart5 = new AmCharts.AmXYChart();
        chart5.dataProvider = chartData5;
        chart5.startDuration = 1.5;

        // AXES
        // X
        var xAxis = new AmCharts.ValueAxis();
        xAxis.title = "月份";
        xAxis.position = "bottom";
        xAxis.autoGridCount = true;
        chart5.addValueAxis(xAxis);

        // Y
        var yAxis = new AmCharts.ValueAxis();
        yAxis.title = "年份";
        yAxis.position = "left";
        yAxis.autoGridCount = true;
        chart5.addValueAxis(yAxis);

        // GRAPH
        var graph = new AmCharts.AmGraph();
        graph.valueField = "value"; // valueField responsible for the size of a bullet
        graph.xField = "x";
        graph.yField = "y";
        graph.lineAlpha = 0;
        graph.bullet = "bubble";
        graph.balloonText = "x:<b>[[x]]</b> y:<b>[[y]]</b><br>value:<b>[[value]]</b>"
        chart5.addGraph(graph);

        // WRITE
        chart5.write("chartdiv5");
    });




    var chart6;
    var graph;
    var graphType = "candlestick";
    var maxCandlesticks = 100;

    var dataString = "2008-05-02,180.19,181.92,178.55,180.94\n2008-05-01,174.96,180.00,174.86,180.00\n2008-04-30,176.19,180.00,172.92,173.95\n2008-04-29,171.11,175.66,170.25,175.05\n2008-04-28,169.75,173.75,169.13,172.24\n2008-04-27,166.75,180.175,169.13,172.24\n2008-04-26,169.75,173.75,149.13,172.24\n2008-04-25,170.70,171.10,166.42,169.73\n2008-04-24,165.34,169.98,159.19,168.94\n2008-04-23,164.05,164.84,161.08,162.89\n2008-04-22,167.40,168.00,158.09,160.20\n2008-04-21,162.21,168.50,161.76,168.16\n2008-04-18,159.12,162.26,158.38,161.04\n2008-04-17,154.17,156.00,153.35,154.49\n2008-04-16,151.72,154.10,150.62,153.70\n2008-04-15,149.40,149.72,145.72,148.38\n2008-04-14,146.77,149.25,144.54,147.78\n2008-04-11,152.72,153.30,146.40,147.14\n2008-04-10,151.13,155.42,150.60,154.55\n2008-04-09,153.31,153.89,150.46,151.44\n2008-04-08,153.55,156.45,152.32,152.84\n2008-04-07,156.13,159.69,155.11,155.89\n2008-04-04,152.19,154.71,150.75,153.08\n2008-04-03,147.06,153.63,147.00,151.61\n2008-04-02,148.78,151.20,145.85,147.49\n2008-04-01,146.30,149.66,143.61,149.53\n2008-03-31,143.27,145.71,142.52,143.50\n2008-03-28,141.80,144.65,141.60,143.01\n2008-03-27,144.95,145.31,139.99,140.25\n2008-03-26,140.87,145.74,140.64,145.06\n2008-03-25,139.96,143.10,137.33,140.98\n2008-03-24,134.01,140.85,133.64,139.53\n2008-03-20,131.12,133.29,129.18,133.27\n2008-03-19,133.12,134.29,129.67,129.67\n2008-03-18,129.18,133.00,128.67,132.82\n2008-03-17,122.55,128.59,122.55,126.73\n2008-03-14,129.88,130.30,124.20,126.61\n2008-03-13,124.10,129.50,123.00,127.94\n2008-03-12,127.04,128.68,125.17,126.03\n2008-03-11,124.10,127.48,122.00,127.35\n2008-03-10,121.98,123.46,119.37,119.69\n2008-03-07,120.41,122.98,119.05,122.25\n2008-03-06,124.61,127.50,120.81,120.93\n2008-03-05,123.58,125.14,122.25,124.49\n2008-03-04,121.99,124.88,120.40,124.62\n2008-03-03,124.44,125.98,118.00,121.73\n2008-02-29,129.29,130.21,124.80,125.02\n2008-02-28,127.20,132.20,125.77,129.91\n2008-02-27,118.23,123.05,118.09,122.96\n2008-02-26,117.64,121.09,115.44,119.15\n2008-02-25,118.59,120.17,116.66,119.74\n2008-02-22,122.48,122.51,115.87,119.46\n2008-02-21,126.05,126.47,120.86,121.54\n2008-02-20,122.20,124.60,121.68,123.82\n2008-02-19,125.99,126.75,121.44,122.18\n2008-02-15,126.27,127.08,124.06,124.63\n2008-02-14,129.40,130.80,127.01,127.46\n2008-02-13,126.68,129.78,125.63,129.40\n2008-02-12,130.70,131.00,123.62,124.86\n2008-02-11,128.01,129.98,127.20,129.45\n2008-02-08,122.08,125.70,121.60,125.48\n2008-02-07,119.97,124.78,117.27,121.24\n2008-02-06,130.83,131.92,121.77,122.00\n2008-02-05,130.43,134.00,128.90,129.36\n2008-02-04,134.21,135.90,131.42,131.65\n2008-02-01,136.24,136.59,132.18,133.75\n2008-01-31,129.45,136.65,129.40,135.36\n2008-01-30,131.37,135.45,130.00,132.18\n2008-01-29,131.15,132.79,129.05,131.54\n2008-01-28,128.16,133.20,126.45,130.01\n2008-01-25,138.99,139.09,129.61,130.01\n2008-01-24,139.99,140.70,132.01,135.60\n2008-01-23,136.19,140.00,126.14,139.07\n2008-01-22,148.06,159.98,146.00,155.64\n2008-01-18,161.71,165.75,159.61,161.36\n2008-01-17,161.51,165.36,158.42,160.89\n2008-01-16,165.23,169.01,156.70,159.64\n2008-01-15,177.72,179.22,164.66,169.04\n2008-01-14,177.52,179.42,175.17,178.78\n2008-01-11,176.00,177.85,170.00,172.69\n2008-01-10,177.58,181.00,175.41,178.02\n2008-01-09,171.30,179.50,168.30,179.40\n2008-01-08,180.14,182.46,170.80,171.25\n2008-01-07,181.25,183.60,170.23,177.64\n2008-01-04,191.45,193.00,178.89,180.05\n2008-01-03,195.41,197.39,192.69,194.93\n2008-01-02,199.27,200.26,192.55,194.84\n2007-12-31,199.50,200.50,197.75,198.08\n2007-12-28,200.59,201.56,196.88,199.83\n2007-12-27,198.95,202.96,197.80,198.57\n2007-12-26,199.01,200.96,196.82,198.95\n2007-12-24,195.03,199.33,194.79,198.80\n2007-12-21,190.12,193.91,189.89,193.91\n2007-12-20,185.43,187.83,183.33,187.21\n2007-12-19,182.98,184.64,180.90,183.12\n2007-12-18,186.52,187.33,178.60,182.98\n2007-12-17,190.72,192.65,182.98,184.40\n2007-12-14,190.37,193.20,189.54,190.39\n2007-12-13,190.19,192.12,187.82,191.83\n2007-12-12,193.44,194.48,185.76,190.86\n2007-12-11,194.75,196.83,187.39,188.54\n2007-12-10,193.59,195.66,192.69,194.21\n2007-12-07,190.54,194.99,188.04,194.30\n2007-12-06,186.19,190.10,186.12,189.95\n2007-12-05,182.89,186.00,182.41,185.50\n2007-12-04,177.15,180.90,176.99,179.81\n2007-12-03,181.86,184.14,177.70,178.86\n2007-11-30,187.34,187.70,179.70,182.22\n2007-11-29,179.43,185.17,179.15,184.29\n2007-11-28,176.82,180.60,175.35,180.22\n2007-11-27,175.22,175.79,170.01,174.81\n2007-11-26,173.59,177.27,172.35,172.54\n2007-11-23,172.00,172.05,169.75,171.54\n2007-11-21,165.84,172.35,164.67,168.46\n2007-11-20,165.67,171.79,163.53,168.85\n2007-11-19,166.10,168.20,162.10,163.95\n2007-11-16,165.30,167.02,159.33,166.39\n2007-11-15,166.39,169.59,160.30,164.30\n2007-11-14,177.16,177.57,163.74,166.11\n2007-11-13,160.85,170.98,153.76,169.96\n2007-11-12,165.28,167.70,150.63,153.76\n2007-11-09,171.15,175.12,165.21,165.37\n2007-11-08,186.67,186.90,167.77,175.47\n2007-11-07,190.61,192.68,186.13,186.30\n2007-11-06,187.05,192.00,185.27,191.79\n2007-11-05,185.29,188.96,184.24,186.18\n2007-11-02,189.21,189.44,183.49,187.87\n2007-11-01,188.60,190.10,180.00,187.44\n2007-10-31,187.63,190.12,184.95,189.95\n2007-10-30,186.18,189.37,184.73,187.00\n2007-10-29,185.45,186.59,184.70,185.09\n2007-10-26,185.29,185.37,182.88,184.70\n2007-10-25,184.87,185.90,181.66,182.78\n2007-10-24,185.81,187.21,179.24,185.93\n2007-10-23,188.56,188.60,182.76,186.16\n2007-10-22,170.35,174.90,169.96,174.36\n2007-10-19,174.24,174.63,170.00,170.42\n2007-10-18,171.50,174.19,171.05,173.50\n2007-10-17,172.69,173.04,169.18,172.75\n2007-10-16,165.54,170.18,165.15,169.58\n2007-10-15,167.98,169.57,163.50,166.98\n2007-10-12,163.01,167.28,161.80,167.25\n2007-10-11,169.49,171.88,153.21,162.23\n2007-10-10,167.55,167.88,165.60,166.79\n2007-10-09,170.20,171.11,166.68,167.86\n2007-10-08,163.49,167.91,162.97,167.91\n2007-10-05,158.37,161.58,157.70,161.45\n2007-10-04,158.00,158.08,153.50,156.24\n2007-10-03,157.78,159.18,157.01,157.92\n2007-10-02,156.55,158.59,155.89,158.45\n2007-10-01,154.63,157.41,152.93,156.34\n2007-09-28,153.44,154.60,152.75,153.47\n2007-09-27,153.77,154.52,152.32,154.50\n2007-09-26,154.47,155.00,151.25,152.77\n2007-09-25,146.84,153.22,146.82,153.18\n2007-09-24,146.73,149.85,146.65,148.28\n2007-09-21,141.14,144.65,140.31,144.15\n2007-09-20,140.15,141.79,139.32,140.31\n2007-09-19,143.02,143.16,139.40,140.77\n2007-09-18,139.06,142.85,137.83,140.92\n2007-09-17,138.99,140.59,137.60,138.41\n2007-09-14,136.57,138.98,136.20,138.81\n2007-09-13,138.83,139.00,136.65,137.20\n2007-09-12,135.99,139.40,135.75,136.85\n2007-09-11,137.90,138.30,133.75,135.49\n2007-09-10,136.99,138.04,133.95,136.71\n2007-09-07,132.01,132.30,130.00,131.77\n2007-09-06,135.56,137.57,132.71,135.01\n2007-09-05,144.97,145.84,136.10,136.76\n2007-09-04,139.94,145.73,139.84,144.16\n2007-08-31,139.49,139.65,137.41,138.48\n2007-08-30,132.67,138.25,132.30,136.25\n2007-08-29,129.88,134.18,129.54,134.08\n2007-08-28,130.99,132.41,126.63,126.82\n2007-08-27,133.39,134.66,132.10,132.25\n2007-08-24,130.53,135.37,129.81,135.30\n2007-08-23,133.09,133.34,129.76,131.07\n2007-08-22,131.22,132.75,130.33,132.51\n2007-08-21,122.21,128.96,121.00,127.57\n2007-08-20,123.96,124.50,120.50,122.22\n2007-08-17,122.01,123.50,119.82,122.06\n2007-08-16,117.01,118.50,111.62,117.05\n2007-08-15,122.74,124.86,119.65,119.90\n2007-08-14,128.29,128.30,123.71,124.03\n2007-08-13,128.32,129.35,126.50,127.79\n2007-08-10,123.12,127.75,120.30,125.00\n2007-08-09,131.11,133.00,125.09,126.39\n2007-08-08,136.76,136.86,132.00,134.01\n2007-08-07,134.94,137.24,132.63,135.03\n2007-08-06,132.90,135.27,128.30,135.25\n2007-08-03,135.26,135.95,131.50,131.85\n2007-08-02,136.65,136.96,134.15,136.49";
    var chartData6 = [];

    AmCharts.ready(function () {
        // first parse data string
        parseData();

        // SERIAL CHART
        chart6 = new AmCharts.AmSerialChart();

        chart6.dataProvider = chartData6;
        chart6.categoryField = "date";
        // listen for dataUpdated event ad call "zoom" method then it happens
        chart6.addListener('dataUpdated', zoomChart);
        // listen for zoomed event andcall "handleZoom" method then it happens
        chart6.addListener('zoomed', handleZoom);

        // AXES
        // category
        var categoryAxis = chart6.categoryAxis;
        categoryAxis.parseDates = true; // as our data is date-based, we set this to true
        categoryAxis.minPeriod = "DD"; // our data is daily, so we set minPeriod to "DD"
        categoryAxis.dashLength = 1;
        categoryAxis.inside = true;

        // value
        var valueAxis = new AmCharts.ValueAxis();
        valueAxis.dashLength = 1;
        valueAxis.axisAlpha = 0;
        chart6.addValueAxis(valueAxis);

        // GRAPH
        graph = new AmCharts.AmGraph();
        graph.title = "Price:";
        // as candlestick graph looks bad when there are a lot of candlesticks, we set initial type to "line"
        graph.type = "line";
        // graph colors
        graph.lineColor = "#7f8da9";
        graph.fillColors = "#7f8da9";
        graph.negativeLineColor = "#db4c3c";
        graph.negativeFillColors = "#db4c3c";
        graph.fillAlphas = 1;
        // candlestick graph has 4 fields - open, low, high, close
        graph.openField = "open";
        graph.highField = "high";
        graph.lowField = "low";
        graph.closeField = "close";
        graph.balloonText = "进口总量:<b>[[open]]</b><br>出口总量:<b>[[low]]</b><br>进口增长率:<b>[[high]]</b><br>出口增长率:<b>[[close]]</b><br>";
        // this one is for "line" graph type
        graph.valueField = "close";

        chart6.addGraph(graph);

        // CURSOR
        var chartCursor = new AmCharts.ChartCursor();
        chart6.addChartCursor(chartCursor);

        // SCROLLBAR
        var chartScrollbar = new AmCharts.ChartScrollbar();
        chartScrollbar.scrollbarHeight = 30;
        chartScrollbar.graph = graph; // as we want graph to be displayed in the scrollbar, we set graph here
        chartScrollbar.graphType = "line"; // we don't want candlesticks to be displayed in the scrollbar
        chartScrollbar.gridCount = 4;
        chartScrollbar.color = "#FFFFFF";
        chart6.addChartScrollbar(chartScrollbar);

        // WRITE
        chart6.write("chartdiv6");
    });


    // this method is called when chart is first inited as we listen for "dataUpdated" event
    function zoomChart() {
        // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
        chart6.zoomToIndexes(chartData6.length - 7, chartData6.length - 1);
    }

    // this methid is called each time the selected period of the chart is changed
    function handleZoom(event) {
        var startDate = event.startDate;
        var endDate = event.endDate;
        document.getElementById("startDate").value = AmCharts.formatDate(startDate, "DD/MM/YYYY");
        document.getElementById("endDate").value = AmCharts.formatDate(endDate, "DD/MM/YYYY");

        // as we also want to change graph type depending on the selected period, we call this method
        changeGraphType(event);
    }

    // changes graph type to line/candlestick, depending on the selected range
    function changeGraphType(event) {
        var startIndex = event.startIndex;
        var endIndex = event.endIndex;

        if (endIndex - startIndex > maxCandlesticks) {
            // change graph type
            if (graph.type != "line") {
                graph.type = "line";
                graph.fillAlphas = 0;
                chart6.validateNow();
            }
        } else {
            // change graph type
            if (graph.type != graphType) {
                graph.type = graphType;
                graph.fillAlphas = 1;
                chart6.validateNow();
            }
        }
    }

    // Parse data
    function parseData() {
        // split data string into array
        var rowArray = dataString.split("\n");
        // loop through this array and create data items
        for (var i = rowArray.length - 1; i > -1; i--) {
            var row = rowArray[i].split(",");
            var dateArray = row[0].split("-");
            // we have to subtract 1 from month, as months in javascript are zero-based
            var date = new Date(Number(dateArray[0]), Number(dateArray[1]) - 1, Number(dateArray[2]));
            var open = row[1];
            var high = row[2];
            var low = row[3];
            var close = row[4];

            chartData6.push({
                date: date,
                open: open,
                high: high,
                low: low,
                close: close
            });
        }
    }

    // this method converts string from input fields to date object
    function stringToDate(str) {
        var dArr = str.split("/");
        var date = new Date(Number(dArr[2]), Number(dArr[1]) - 1, dArr[0]);
        return date;
    }

    // this method is called when user changes dates in the input field
    function changeZoomDates() {
        var startDateString = document.getElementById("startDate").value;
        var endDateString = document.getElementById("endDate").value;
        var startDate = stringToDate(startDateString);
        var endDate = stringToDate(endDateString);
        chart6.zoomToDates(startDate, endDate);
    }
</script>
<?php $this->endBlock();?>