<div class="row clearfix fixed" style="position: fixed; z-index: 1000">
    <div class="col-md-12 column">
        <nav class="navbar navbar-default" role="navigation">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                <form class="navbar-form navbar-left" role="search" style="width: 1100px;">
                    请选择时间：
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="开始时间"/> -
                        <input type="text" class="form-control" placeholder="结束时间"/>
                    </div>
                    &nbsp;&nbsp;&nbsp;
                        请选择住院类型：
                        <select class="form-control">
                            <option>全部</option>
                            <option>感冒住院</option>
                            <option>皮肤科住院</option>
                            <option>外伤住院</option>
                            <option>内科住院</option>
                            <option>五官科住院</option>
                            <option>肿瘤住院</option>
                        </select>
                        &nbsp;&nbsp;&nbsp;

                        <button type="submit" class="btn btn-default">搜索</button>
                        <button type="submit" class="btn btn-default">重置</button>

                </form>
            </div>

        </nav>
    </div>
</div>


<div style="font-size:15px;margin-top: 100px;">
    <div class="" style="">
        <table class="table table-striped">
            <caption><b>当前时间内总住院人数统计</b></caption>
            <thead>
            <tr>
                <th>住院类型</th>
                <th>人次</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>病毒感冒住院</td>
                <td>200</td>

            </tr>
            <tr>
                <td>外伤住院</td>
                <td>123</td>
            </tr>
            <tr>
                <td>产科住院</td>
                <td>98</td>
            </tr>
            <tr>
                <td>内科住院</td>
                <td>72</td>
            <tr>
                <td>五官科住院</td>
                <td>65</td>
            </tr>
            <tr>
                <td>肿瘤住院</td>
                <td>45</td>
            </tr>
            <tr>
                <td>皮肤科住院</td>
                <td>36</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div id="chartdiv" style="width: 700px; height: 500px;"></div>


    <div class="" style="margin-top: 150px;">
        <table class="table table-striped">
            <caption><b>当前时间内住院病人呼叫处理统计</b></caption>
            <thead>
            <tr>
                <th>时间</th>
                <th>呼叫处理数</th>
                <th>值班部门</th>
                <th>值班人</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1：00</td>
                <td>15</td>
                <td>一部二科</td>
                <td>张三</td>
            </tr>
            <tr>
                <td>2：00</td>
                <td>26</td>
                <td>一部二科</td>
                <td>张三</td>
            </tr>
            <tr>
                <td>3：00</td>
                <td>45</td>
                <td>一部二科</td>
                <td>张三</td>
            </tr>
            <tr>
                <td>4：00</td>
                <td>19</td>
                <td>一部二科</td>
                <td>张三</td>
            <tr>
                <td>5：00</td>
                <td>26</td>
                <td>一部二科</td>
                <td>张三</td>
            </tr>
            <tr>
                <td>6：00</td>
                <td>41</td>
                <td>一部二科</td>
                <td>张三</td>
            </tr>
            <tr>
                <td>8：00</td>
                <td>36</td>
                <td>二部二科</td>
                <td>李四</td>
            </tr>
            <tr>
                <td>9：00</td>
                <td>29</td>
                <td>二部二科</td>
                <td>李四</td>
            </tr>
              <tr>
                <td>10：00</td>
                <td>19</td>
              <td>二部二科</td>
              <td>李四</td>
            </tr>
              <tr>
                <td>11：00</td>
                <td>47</td>
                  <td>二部二科</td>
                  <td>李四</td>
            </tr>
              <tr>
                <td>12：00</td>
                <td>34</td>
                  <td>二部二科</td>
                  <td>李四</td>
            </tr>

            </tbody>
        </table>
    </div>
    <div id="chartdiv1" style="width:100%; height:400px;"></div>

</div>


<?php $this->beginBlock('footer');  ?>
<script>
    var chart;
    var data = [
        {
            "title": "病毒感冒住院",
            "value": 200
        },
        {
            "title": "外伤住院",
            "value": 123
        },
        {
            "title": "产科住院",
            "value": 98
        },
        {
            "title": "内科住院",
            "value": 72
        },
        {
            "title": "五官科住院",
            "value": 65
        },
        {
            "title": "肿瘤住院",
            "value": 45
        },
        {
            "title": "皮肤科住院",
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
            newDate.setHours(newDate.getHours() + i);
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