<div class="row clearfix fixed" style="position: fixed; z-index: 1000">
    <div class="col-md-12 column">
        <nav class="navbar navbar-default" role="navigation">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                <form class="navbar-form navbar-left" role="search" style="width: 1100px;">
                    请选择年份：
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="开始时间"/> -
                        <input type="text" class="form-control" placeholder="结束时间"/>
                    </div>
                    &nbsp;&nbsp;&nbsp;
                    请选择年龄：
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="最小年龄"/> -
                        <input type="text" class="form-control" placeholder="最大年龄"/>
                    </div>

                    <div style="margin-top: 10px;">
                    选择门诊名称：
                    <select class="form-control">
                        <option>全部</option>
                        <option>外科</option>
                        <option>内科</option>
                        <option>放射科</option>
                        <option>妇科</option>
                        <option>儿科</option>
                    </select>
                    &nbsp;&nbsp;&nbsp;

                    <button type="submit" class="btn btn-default">搜索</button>
                    <button type="submit" class="btn btn-default">重置</button>
                    </div>

                </form>
            </div>

        </nav>
    </div>
</div>


<div style="font-size:15px; margin-top: 120px;">
    <div class="" style="">
        <table class="table table-striped">
            <caption><b>各年份门诊数分布统计人次</b></caption>
            <thead>
            <tr>
                <th>年份</th>
                <th>人次</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>2010</td>
                <td>19800</td>

            </tr>
            <tr>
                <td>2011</td>
                <td>15800</td>
            </tr>
            <tr>
                <td>2012</td>
                <td>16800</td>
            </tr>
            <tr>
                <td>2013</td>
                <td>13800</td>
            <tr>
                <td>2014</td>
                <td>23800</td>
            </tr>
            <tr>
                <td>2015</td>
                <td>17800</td>
            </tr>
            <tr>
                <td>2016</td>
                <td>13800</td>
            </tr>
            <tr>
                <td>2017</td>
                <td>15800</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div id="chartdiv" style="width:100%; height:400px;"></div>


    <div class="" style="">
        <table class="table table-striped">
            <caption><b>每年各门诊病人年龄数分布统计（单位人次）</b></caption>
            <thead>
            <tr>
                <th>年龄范围</th>
                <th>人次</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>10岁-20岁</td>
                <td>4025</td>

            </tr>
            <tr>
                <td>20岁-30岁</td>
                <td>1882</td>
            </tr>
            <tr>
                <td>10岁以下</td>
                <td>1809</td>
            </tr>
            <tr>
                <td>30岁-40岁</td>
                <td>1322</td>
            <tr>
                <td>50岁-60岁</td>
                <td>1122</td>
            </tr>
            <tr>
                <td>70岁-80岁</td>
                <td>1114</td>
            </tr>
            <tr>
                <td>40岁-50岁</td>
                <td>998</td>
            </tr>
            <tr>
                <td>80岁以上</td>
                <td>711</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div id="chartdiv3" style="width: 100%; height: 400px;"></div>
</div>


<?php $this->beginBlock('footer');  ?>
<script>
    var chart;
    var graph;

    var chartData = [
        {
            "year": "2000",
            "value": 16000
        },
        {
            "year": "2001",
            "value": 16800
        },
        {
            "year": "2002",
            "value": 17040
        },
        {
            "year": "2003",
            "value": 16000
        },
        {
            "year": "2004",
            "value": 17000
        },
        {
            "year": "2005",
            "value": 19200
        },
        {
            "year": "2006",
            "value": 16800
        },
        {
            "year": "2007",
            "value": 16200
        },
        {
            "year": "2008",
            "value": 15800
        },
        {
            "year": "2009",
            "value": 12800
        },
        {
            "year": "2010",
            "value": 19800
        },
        {
            "year": "2011",
            "value": 15800
        },
        {
            "year": "2012",
            "value": 16800
        },
        {
            "year": "2013",
            "value": 13800
        },
        {
            "year": "2014",
            "value": 23800
        },
        {
            "year": "2015",
            "value": 17800
        },
        {
            "year": "2016",
            "value": 13800
        },
        {
            "year": "2017",
            "value": 15800
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