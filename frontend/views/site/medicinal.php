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
                <a class="navbar-brand" href="#">对比分析</a>
            </div>

            <?php include('search.php'); ?>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">对比对象<strong class="caret"></strong></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">行业类型</a>
                            </li>
                            <li>
                                <a href="#">企业制度</a>
                            </li>
                            <li>
                                <a href="#">企业规模</a>
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
    <div class="" style="margin-top: 50px;">
        <table class="table table-striped">
            <caption>2018年前十大行业工业增加值数据</caption>
            <thead>
            <tr>
                <th>行业类型</th>
                <th>增长率（%）</th>
                <th>经济占比（%）</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>计算机、通信和其他电子设备</td>
                <td>14</td>
                <td>19</td>
            </tr>
            <tr>
                <td>电气机械和器材</td>
                <td>-2.6</td>
                <td>7.8</td>
            </tr>
            <tr>
                <td>专用设备</td>
                <td>10.0</td>
                <td>7</td>
            </tr>
            <tr>
                <td>电力、热力生产和供应业</td>
                <td>3.0</td>
                <td>6.3</td>
            </tr> 
            <tr>
                <td>石油和天然气开采业</td>
                <td>-12.5</td>
                <td>5.2</td>
            </tr>
                <tr>
                <td>橡胶和塑料制品业</td>
                <td>15.6</td>
                <td>5</td>
            </tr>
            <tr>
                <td>通用设备制造业</td>
                <td>2.2</td>
                <td>4.8</td>
            </tr>
            <tr>
                <td>金属制品业</td>
                <td>0.5</td>
                <td>4</td>
            </tr>
            <tr>
                <td>汽车制造业</td>
                <td>12.4</td>
                <td>3.6</td>
            </tr> 
            <tr>
                <td>医药制造业</td>
                <td>25</td>
                <td>2.6</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div id="chartdiv" style="width:100%; height:400px;"></div>

    <p style="margin-left: 40px;margin-bottom: 10px;margin-top: 50px;">2018不同所有制类型经济情况</p>
    <div id="chartdiv1" style="width: 100%; height: 600px;"></div>

</div>


<?php $this->beginBlock('footer');  ?>
<script>
    var chart;
    var chartData = [
        {
            "country": "计算机、通信和其他电子设备",
            "visits": 14
        },
        {
            "country": "电气机械和器材",
            "visits": -2.6
        },
        {
            "country": "专用设备",
            "visits": 10
        },
        {
            "country": "电力、热力生产和供应业",
            "visits": 3.0
        },
        {
            "country": "石油和天然气开采业",
            "visits": -12.5
        },
        {
            "country": "橡胶和塑料制品业",
            "visits": 15.5
        },
        {
            "country": "通用设备制造业",
            "visits": 2.2
        },
        {
            "country": "金属制品业",
            "visits": 0.5
        }
,
        {
            "country": "汽车制造业",
            "visits": 12.4
        },
        {
            "country": "医药制造业",
            "visits": 25
        }
    ];


    AmCharts.ready(function () {
        // PIE CHART
        chart = new AmCharts.AmPieChart();

        // title of the chart
        chart.addTitle("2018年前十大行业工业增加率对比图", 16);

        chart.dataProvider = chartData;
        chart.titleField = "country";
        chart.valueField = "visits";
        chart.sequencedAnimation = true;
        chart.startEffect = "elastic";
        chart.innerRadius = "30%";
        chart.startDuration = 2;
        chart.labelRadius = 15;
        chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>";
        // the following two lines makes the chart 3D
        chart.depth3D = 10;
        chart.angle = 15;

        // WRITE
        chart.write("chartdiv");
    });



    var chartData1 = [
        {
            "year": "国有企业",
            "income": 30.1,
            "expenses": 5.6
        },
        {
            "year": "集体企业",
            "income": 35.5,
            "expenses": 7.5
        },
        {
            "year": "股份制企业",
            "income": 26.9,
            "expenses": 12.8
        },
        {
            "year": "外商及港澳台商投资企业",
            "income": 8.8,
            "expenses": 7.6
        },
        {
            "year": "其他企业",
            "income": 4.8,
            "expenses": 8.6
        },
     
    ];


    AmCharts.ready(function () {
        // SERIAL CHART
        chart = new AmCharts.AmSerialChart();
        chart.dataProvider = chartData1;
        chart.categoryField = "year";
        chart.startDuration = 1;
        chart.rotate = true;

        // AXES
        // category
        var categoryAxis = chart.categoryAxis;
        categoryAxis.gridPosition = "start";
        categoryAxis.axisColor = "#DADADA";
        categoryAxis.dashLength = 3;

        // value
        var valueAxis = new AmCharts.ValueAxis();
        valueAxis.dashLength = 3;
        valueAxis.axisAlpha = 0.2;
        valueAxis.position = "top";
        valueAxis.title = "比例/%";
        valueAxis.minorGridEnabled = true;
        valueAxis.minorGridAlpha = 0.08;
        valueAxis.gridAlpha = 0.15;
        chart.addValueAxis(valueAxis);

        // GRAPHS
        // column graph
        var graph1 = new AmCharts.AmGraph();
        graph1.type = "column";
        graph1.title = "2018年增长率";
        graph1.valueField = "income";
        graph1.lineAlpha = 0;
        graph1.fillColors = "#ADD981";
        graph1.fillAlphas = 0.8;
        graph1.balloonText = "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b></span>";
        chart.addGraph(graph1);

        // line graph
        var graph2 = new AmCharts.AmGraph();
        graph2.type = "line";
        graph2.lineColor = "#27c5ff";
        graph2.bulletColor = "#FFFFFF";
        graph2.bulletBorderColor = "#27c5ff";
        graph2.bulletBorderThickness = 2;
        graph2.bulletBorderAlpha = 1;
        graph2.title = "2018年经济占比";
        graph2.valueField = "expenses";
        graph2.lineThickness = 2;
        graph2.bullet = "round";
        graph2.fillAlphas = 0;
        graph2.balloonText = "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b></span>";
        chart.addGraph(graph2);

        // LEGEND
        var legend = new AmCharts.AmLegend();
        legend.useGraphSettings = true;
        chart.addLegend(legend);

        chart.creditsPosition = "top-right";

        // WRITE
        chart.write("chartdiv1");
    });
</script>
<?php $this->endBlock();?>