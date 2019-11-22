<div class="row clearfix fixed" style="position: fixed; z-index: 1000">
    <div class="col-md-12 column">
        <nav class="navbar navbar-default" role="navigation">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                <form class="navbar-form navbar-left" role="search" style="width: 1100px;">
                    请选择入职时间：
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
                        选择教育背景：
                        <select class="form-control">
                            <option>全部</option>
                            <option>专科</option>
                            <option>本科</option>
                            <option>硕士</option>
                            <option>博士</option>
                            <option>博士后</option>
                        </select>
                        &nbsp;&nbsp;&nbsp;

                        选择科室：
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


<div style="font-size:15px;margin-top: 120px;">

    <div class="" style="">
        <table class="table table-striped">
            <caption><b>职员教育背景分布统计</b></caption>
            <thead>
            <tr>
                <th>文凭</th>
                <th>人数</th>
                <th>平均年龄</th>
                <th>平均入职时间(年)</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>专科</td>
                <td>69</td>
                <td>34.6</td>
                <td>5.3</td>

            </tr>
            <tr>
                <td>本科</td>
                <td>158</td>
                <td>37.6</td>
                <td>4.3</td>
            </tr>
            <tr>
                <td>硕士</td>
                <td>135</td>
                <td>38.6</td>
                <td>6.3</td>
            </tr>
            <tr>
                <td>博士</td>
                <td>50</td>
                <td>45.6</td>
                <td>7.3</td>
            <tr>
                <td>博士后</td>
                <td>10</td>
                <td>54.6</td>
                <td>10.3</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div id="chartdiv1" style="width: 600px; height: 400px;"></div>
    <p style="margin-left: 150px;margin-bottom: 20px;">医职员教育背景分布图</p>



    <div class="" style="margin-top: 100px;">
        <table class="table table-striped">
            <caption><b>职员教育背景分布统计</b></caption>
            <thead>
            <tr>
                <th>文凭</th>
                <th>人数</th>
                <th>平均年龄</th>
                <th>平均入职时间(年)</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>专科</td>
                <td>69</td>
                <td>34.6</td>
                <td>5.3</td>

            </tr>
            <tr>
                <td>本科</td>
                <td>158</td>
                <td>37.6</td>
                <td>4.3</td>
            </tr>
            <tr>
                <td>硕士</td>
                <td>135</td>
                <td>38.6</td>
                <td>6.3</td>
            </tr>
            <tr>
                <td>博士</td>
                <td>50</td>
                <td>45.6</td>
                <td>7.3</td>
            <tr>
                <td>博士后</td>
                <td>10</td>
                <td>54.6</td>
                <td>10.3</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div id="chartdiv" style="width: 1200px; height: 400px;"></div>
    <p style="margin-left: 50px;margin-bottom: 20px;">医职员年龄和入职时间分布图</p>

</div>


<?php $this->beginBlock('footer');  ?>
<script>
    var chart;

    var chartData = [
        {
            "x": 18,
            "y": 1,
            "value": 59
        },
        {
            "x": 24,
            "y": 2,
            "value": 50
        },
        {
            "x": 30,
            "y": 3,
            "value": 19
        },
        {
            "x": 36,
            "y": 4,
            "value": 65
        },
        {
            "x": 42,
            "y": 5,
            "value": 92
        },
        {
            "x": 48,
            "y": 6,
            "value": 8
        },
        {
            "x": 54,
            "y": 7,
            "value": 35
        }
    ];

    AmCharts.ready(function () {
        // XY Chart
        chart = new AmCharts.AmXYChart();
        chart.dataProvider = chartData;
        chart.startDuration = 1.5;

        // AXES
        // X
        var xAxis = new AmCharts.ValueAxis();
        xAxis.title = "年龄";
        xAxis.position = "bottom";
        xAxis.autoGridCount = true;
        chart.addValueAxis(xAxis);

        // Y
        var yAxis = new AmCharts.ValueAxis();
        yAxis.title = "入职时间";
        yAxis.position = "left";
        yAxis.autoGridCount = true;
        chart.addValueAxis(yAxis);

        // GRAPH
        var graph = new AmCharts.AmGraph();
        graph.valueField = "value"; // valueField responsible for the size of a bullet
        graph.xField = "x";
        graph.yField = "y";
        graph.lineAlpha = 0;
        graph.bullet = "bubble";
        graph.balloonText = "x:<b>[[x]]</b> y:<b>[[y]]</b><br>value:<b>[[value]]</b>"
        chart.addGraph(graph);

        // WRITE
        chart.write("chartdiv");
    });

    var chartData1 = [
        {
            "country": "本科",
            "litres": 156.9
        },
        {
            "country": "硕士",
            "litres": 131.1
        },
        {
            "country": "教授",
            "litres": 115.8
        },
        {
            "country": "专科",
            "litres": 109.9
        },
        {
            "country": "博士",
            "litres": 108.3
        },
        {
            "country": "博士后",
            "litres": 70
        }
    ];

    AmCharts.ready(function () {
        // RADAR CHART
        chart = new AmCharts.AmRadarChart();
        chart.dataProvider = chartData1;
        chart.categoryField = "country";
        chart.startDuration = 2;

        // VALUE AXIS
        var valueAxis = new AmCharts.ValueAxis();
        valueAxis.axisAlpha= 0.15;
        valueAxis.minimum = 0;
        valueAxis.dashLength = 3;
        valueAxis.axisTitleOffset = 20;
        valueAxis.gridCount = 5;
        chart.addValueAxis(valueAxis);

        // GRAPH
        var graph = new AmCharts.AmGraph();
        graph.valueField = "litres";
        graph.bullet = "round";
        graph.balloonText = "[[value]] litres of beer per year";
        chart.addGraph(graph);

        // WRITE
        chart.write("chartdiv1");
    });
</script>
<?php $this->endBlock();?>