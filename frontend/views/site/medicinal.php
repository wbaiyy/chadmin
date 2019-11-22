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
                    &nbsp;&nbsp;&nbsp;&nbsp;

                    选择药品类型：
                    <select class="form-control">
                        <option>全部</option>
                        <option>进口</option>
                        <option>国产</option>
                        <option>其他</option>
                    </select>
                    &nbsp;&nbsp;&nbsp;&nbsp;

                    选择使用的科室：
                    <select class="form-control">
                        <option>全部</option>
                        <option>外科</option>
                        <option>内科</option>
                        <option>五官科</option>
                    </select>
                    &nbsp;&nbsp;&nbsp;&nbsp;

                    <button type="submit" class="btn btn-default">搜索</button>
                    <button type="submit" class="btn btn-default">重置</button>

                </form>
            </div>

        </nav>
    </div>
</div>


<div style="font-size:15px;">
    <div class="" style="margin-top: 120px;">
        <table class="table table-striped">
            <caption><b>当前时间各类型药品使用分布统计</b></caption>
            <thead>
            <tr>
                <th>药品类型</th>
                <th>使用数量</th>
                <th>使用占例</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>感冒咳嗽型</td>
                <td>9252</td>
                <td>47.68%</td>

            </tr>
            <tr>
                <td>胃药型</td>
                <td>1882</td>
                <td>9.70%</td>
            </tr>
            <tr>
                <td>消化不良型</td>
                <td>1322</td>
                <td>9.32%</td>
            </tr>
            <tr>
                <td>腹泻便秘型</td>
                <td>1122</td>
                <td>5.78%</td>
            <tr>
                <td>头痛发热型</td>
                <td>1114</td>
                <td>5.74%</td>
            </tr>
            <tr>
                <td>妇科炎症型</td>
                <td>984</td>
                <td>5.07%</td>
            </tr>
            <tr>
                <td>五官眼药水型</td>
                <td>711</td>
                <td>3.66%</td>
            </tr>
            <tr>
                <td>保健型</td>
                <td>655</td>
                <td>3.38%</td>
            </tr>
            <tr>
                <td>痔疮</td>
                <td>555</td>
                <td>9.32%</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div id="chartdiv" style="width:100%; height:400px;"></div>


    <div style="font-size:15px;">
        <div class="" style="margin-top: 120px;">
            <table class="table table-striped">
                <caption><b>药品库存和进货分布统计(单位K)</b></caption>
                <thead>
                <tr>
                    <th>月份</th>
                    <th>进货数量</th>
                    <th>使用数量</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>一月</td>
                    <td>123.5</td>
                    <td>120.1</td>

                </tr>
                <tr>
                    <td>二月</td>
                    <td>126.2</td>
                    <td>122.8</td>
                </tr>
                <tr>
                    <td>三月</td>
                    <td>130.1</td>
                    <td>123.9</td>
                </tr>
                <tr>
                    <td>四月</td>
                    <td>135.5</td>
                    <td>129.9</td>
                <tr>
                    <td>五月</td>
                    <td>136.6</td>
                    <td>131</td>
                </tr>
                <tr>
                    <td>六月</td>
                    <td>139.6</td>
                    <td>135</td>
                </tr>
                </tbody>
            </table>
        </div>
    <div id="chartdiv1" style="width: 100%; height: 600px;"></div>

</div>


<?php $this->beginBlock('footer');  ?>
<script>
    var chart;
    var chartData = [
        {
            "country": "感冒咳嗽",
            "visits": 9252
        },
        {
            "country": "胃痛胃胀",
            "visits": 1882
        },
        {
            "country": "痔疮",
            "visits": 1809
        },
        {
            "country": "消化不良",
            "visits": 1322
        },
        {
            "country": "腹泻便秘",
            "visits": 1122
        },
        {
            "country": "头痛发热",
            "visits": 1114
        },
        {
            "country": "妇科炎症",
            "visits": 984
        },
        {
            "country": "五官眼药水",
            "visits": 711
        },
        {
            "country": "保健型",
            "visits": 655
        },
        {
            "country": "口腔型",
            "visits": 555
        }
    ];


    AmCharts.ready(function () {
        // PIE CHART
        chart = new AmCharts.AmPieChart();

        // title of the chart
        chart.addTitle("Visitors countries", 16);

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
            "year": "一月",
            "income": 123.5,
            "expenses": 120.1
        },
        {
            "year": "二月",
            "income": 126.2,
            "expenses": 122.8
        },
        {
            "year":  "三月",
            "income": 130.1,
            "expenses": 123.9
        },
        {
            "year":  "四月",
            "income": 135.5,
            "expenses": 129.9
        },
        {
            "year":  "五月",
            "income": 136.6,
            "expenses": 131
        },
        {
            "year":  "六月",
            "income": 139.6,
            "expenses": 135
        }
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
        valueAxis.title = "单位/K";
        valueAxis.minorGridEnabled = true;
        valueAxis.minorGridAlpha = 0.08;
        valueAxis.gridAlpha = 0.15;
        chart.addValueAxis(valueAxis);

        // GRAPHS
        // column graph
        var graph1 = new AmCharts.AmGraph();
        graph1.type = "column";
        graph1.title = "药品进货";
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
        graph2.title = "药品使用";
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