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

            <?php include('search.php'); ?>

        </nav>
    </div>
</div>
<div style="font-size:15px;">
    <p style="margin-bottom: 20px;margin-top: 20px;">2018年经济各行业构成分布图</p>
    <div id="chartdiv" style="width: 700px; height: 500px;"></div>

    <div class="" style="margin-top: 50px;">
        <table class="table table-striped">
            <caption>2018年各类型企业变化情况</caption>
            <thead>
            <tr>
                <th>企业类型</th>
                <th>数量</th>
                <th>数量增长率（%）</th>
                <th>经济占比（%）</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>大型企业</td>
                <td>187</td>
                <td>2.6</td>
                <td>36.5</td>
            </tr>
            <tr>
                <td>中型企业</td>
                <td>1269</td>
                <td>7.1</td>
                <td>40.4</td>
            </tr>
            <tr>
                <td>小型企业</td>
                <td>2415</td>
                <td>10.2</td>
                <td>20.1</td>
            </tr>
            <tr>
                <td>微型企业</td>
                <td>523</td>
                <td>13.6</td>
                <td>3.0</td>
            </tr>

            </tbody>
        </table>
    </div>

    <p style="margin-left: 10px;margin-top: 50px;margin-bottom: 10px;">2018年主要工业产品构成</p>
    <div id="chartdiv1" style="width:100%; height:400px;"></div>

</div>


<?php $this->beginBlock('footer');  ?>
<script>
    var chart;
    var data = [
        {
            "title": "工业",
            "value": 9254.00
        },
        {
            "title": "其他服务业",
            "value": 5411.53
        },
        {
            "title": "金融业",
            "value": 3067.21
        },
        {
            "title": "批发和零售业",
            "value": 2508.70
        },
        {
            "title": "房地产业",
            "value": 2080.42
        },
        {
            "title": "交通运输、仓储和邮政业",
            "value": 733.26
        },
        {
            "title": "建筑业",
            "value": 724.46
        },
        {
            "title": "住宿和餐饮业",
            "value": 419.48
        },
        {
            "title": "农林牧渔业",
            "value": 22.92
        }
    ];

    AmCharts.ready(function () {

        chart = new AmCharts.AmFunnelChart();
        chart.rotate = true;
        chart.titleField = "title";
        chart.balloon.fixedPosition = false;
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

    var chartData1 = [
        {
            "country": "移动通信基站设备",
            "visits": 44427
        },
        {
            "country": "新能源汽车",
            "visits": 999
        },
        {
            "country": "卫星导航定位节手机",
            "visits": 5471
        },
        {
            "country": "移动通信手持机（手机）",
            "visits": 30154
        },
        {
            "country": "民用无人机",
            "visits": 2490
        },
        {
            "country": "工业机器人",
            "visits": 2128
        },
        {
            "country": "电视接收机顶盒",
            "visits": 9842
        },
        {
            "country": "半导体分立器件",
            "visits": 98887
        },
        {
            "country": "集成电路",
            "visits": 185634
        },
        {
            "country": "电子元件",
            "visits": 241023
        }
    ];


    AmCharts.ready(function () {
        // PIE CHART
        chart = new AmCharts.AmPieChart();

        // title of the chart
        chart.addTitle("单位（万件）", 16);

        chart.dataProvider = chartData1;
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
        chart.write("chartdiv1");
    });


</script>
<?php $this->endBlock();?>