<link href='http://fonts.googleapis.com/css?family=Covered+By+Your+Grace' rel='stylesheet' type='text/css'>
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
                    选择诊别：
                    <select class="form-control">
                        <option>全部</option>
                        <option>复苏急救</option>
                        <option>危急</option>
                        <option>紧急</option>
                        <option>次紧急</option>
                        <option>非紧急</option>
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
                    选择挂号方式：
                    <select class="form-control">
                        <option>全部</option>
                        <option>在线</option>
                        <option>人工</option>
                        <option>电话</option>

                    </select>
                    &nbsp;&nbsp;&nbsp;
                    <div style="margin-top: 10px;">


                        <button type="submit" class="btn btn-default">搜索</button>
                        <button type="submit" class="btn btn-default">重置</button>
                    </div>

                </form>
            </div>

        </nav>
    </div>
</div>

<div style="font-size:15px;margin-top: 120px">
    <div class="" style="">
        <table class="table table-striped">
            <caption><b>各年份医院总收入及支出（单位万元）</b></caption>
            <thead>
            <tr>
                <th>年份</th>
                <th>收入</th>
                <th>支出</th>
                <th>收支增幅比</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>2009</td>
                <td>2300.5</td>
                <td>1800.1</td>
                <td>10.3%</td>
            </tr>
            <tr>
                <td>2010</td>
                <td>2601.2</td>
                <td> 2265.8</td>
                <td>12.8%</td>
            </tr>
            <tr>
                <td>2011</td>
                <td>3023.1</td>
                <td>2389.9</td>
                <td>11.8%</td>
            </tr>
            <tr>
                <td>2012</td>
                <td>2949.5</td>
                <td>2556.1</td>
                <td>11.5%</td>
            <tr>
                <td>2013</td>
                <td>3556.6</td>
                <td>3269.9</td>
                <td>16.2%</td>
            </tr>
            <tr>
                <td>2014</td>
                <td>4009.6</td>
                <td>3811.2</td>
                <td>13.1%</td>
            </tr>
            <tr>
                <td>2015</td>
                <td>4308</td>
                <td>4021.8</td>
                <td>9.1%</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div style="width:100%;display: inline-block">
        <div id="chartdiv1" style="width: 500px; height: 400px;position: relative;display: inline-block;vertical-align: top;"></div>
        <div id="chartdiv2" style="width: 500px; height: 400px;position: relative;display: inline-block;vertical-align: top;margin-left: 30px;"></div>
    </div>



    <div class="" style="margin-top: 120px">
        <table class="table table-striped">
            <caption><b>各年份病人数统计（单位人次）</b></caption>
            <thead>
            <tr>
                <th>年份</th>
                <th>人次</th>
                <th>职工数</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>2005</td>
                <td>26002</td>
                <td>320</td>
            </tr>
            <tr>
                <td>2006</td>
                <td>27012</td>
                <td>365</td>
            </tr>
            <tr>
                <td>2007</td>
                <td>27902</td>
                <td>378</td>
            </tr>
              <tr>
                <td>2008</td>
                <td>28002</td>
                  <td>401</td>
            </tr>
              <tr>
                <td>2009</td>
                <td>32200</td>
                  <td>426</td>
            </tr>
              <tr>
                <td>2010</td>
                <td>36389</td>
                  <td>439</td>
            </tr>
              <tr>
                <td>2011</td>
                <td>30689</td>
                  <td>469</td>
            </tr>
              <tr>
                <td>2012</td>

                <td>31810</td>
                  <td>479</td>
            </tr>
              <tr>
                <td>2013</td>
                <td>32968</td>
                  <td>491</td>
            </tr>
              <tr>
                <td>2014</td>
                <td>34968</td>
                  <td>506</td>
            </tr>

            </tbody>
        </table>
    </div>
    <div id="chartdiv3" style="width:100%; height:400px;">
    </div>


    <div class="" style="margin-top: 120px">
    <table class="table table-striped">
        <caption><b>医用设备使用次数统计</b></caption>
        <thead>
        <tr>
            <th>年份</th>
            <th>使用次数</th>
            <th>维修次数</th>
            <th>新增数</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>2007</td>
            <td> 30.1千次</td>
            <td>43</td>
            <td>20</td>
        </tr>
        <tr>
            <td>2008</td>
            <td>29.5千次</td>
            <td>46</td>
            <td>12</td>
        </tr>
        <tr>
            <td>2009</td>
            <td>34.6千次</td>
            <td>52</td>
            <td>22</td>
        </tr>
        <tr>
            <td>2010</td>

            <td>38.6千次</td>
            <td>56</td>
            <td>19</td>
        </tr>
        <tr>
            <td>2011</td>
            <td>40.3千次</td>
            <td>70</td>
            <td>10</td>
        </tr>
        <tr>
            <td>2012</td>
            <td>41.4千次</td>
            <td>72</td>
            <td>16</td>
        </tr>
        <tr>
            <td>2013</td>
            <td>44.7千次</td>
            <td>86</td>
            <td>19</td>
        </tr>
        <tr>
            <td>2014</td>
            <td>46千次</td>
            <td>76</td>
            <td>23</td>
        </tr>
        <tr>
            <td>2015</td>
            <td>48.3千次</td>
            <td>95</td>
            <td>19</td>
        </tr>
        </tbody>
    </table>
    </div>
    <div id="chartdiv4" style="width:100%; height:600px;"></div>
</div>


<?php $this->beginBlock('footer');  ?>
<script>
    // in order to set theme for a chart, all you need to include theme file
    // located in amcharts/themes folder and set theme property for the chart.

    var chart1;
    var chart2;

    makeCharts("light", "#FFFFFF");

    // Theme can only be applied when creating chart instance - this means
    // that if you need to change theme at run time, youhave to create whole
    // chart object once again.

    function makeCharts(theme, bgColor, bgImage) {

        if (chart1) {
            chart1.clear();
        }
        if (chart2) {
            chart2.clear();
        }

        // background
        if (document.body) {
            document.body.style.backgroundColor = bgColor;
            document.body.style.backgroundImage = "url(" + bgImage + ")";
        }

        // column chart
        chart1 = AmCharts.makeChart("chartdiv1", {
            type: "serial",
            theme: theme,
            dataProvider: [{
                "year": 2009,
                "医院收入": 2300.5,
                "医院支出": 1800.1
            }, {
                "year": 2010,
                "医院收入": 2601.2,
                "医院支出": 2265.8
            }, {
                "year": 2011,
                "医院收入": 3023.1,
                "医院支出": 2389.9
            }, {
                "year": 2012,
                "医院收入": 2949.5,
                "医院支出": 2556.1
            }, {
                "year": 2013,
                "医院收入": 3556.6,
                "医院支出": 3269.9
            },
            {
                "year": 2014,
                "医院收入": 4009.6,
                "医院支出": 3811.2
            },
            {
                "year": 2015,
                "医院收入": 4308,
                "医院支出":4021.8
            }
            ],
            categoryField: "year",
            startDuration: 1,

            categoryAxis: {
                gridPosition: "start"
            },
            valueAxes: [{
                title: "医院收支统计(单位W)"
            }],
            graphs: [{
                type: "column",
                title: "医院收入",
                valueField: "医院收入",
                lineAlpha: 0,
                fillAlphas: 0.8,
                balloonText: "[[title]] in [[category]]:<b>[[value]]</b>"
            }, {
                type: "line",
                title: "医院支出",
                valueField: "医院支出",
                lineThickness: 2,
                fillAlphas: 0,
                bullet: "round",
                balloonText: "[[title]] in [[category]]:<b>[[value]]</b>"
            }],
            legend: {
                useGraphSettings: true
            }
        });

        // pie chart
        chart2 = AmCharts.makeChart("chartdiv2", {
            type: "pie",
            theme: theme,
            dataProvider: [{
                "country": "韦果华医生",
                "litres": 156.9
            }, {
                "country": "赵小锅医生",
                "litres": 131.1
            }, {
                "country": "金大洋医生",
                "litres": 115.8
            }, {
                "country": "易大彪医生",
                "litres": 109.9
            }, {
                "country": "丁丁医生",
                "litres": 108.3
            }, {
                "country": "其他医生",
                "litres": 265
            }, {
                "country": "咸鱼医生",
                "litres": 50
            }],
            titleField: "country",
            valueField: "litres",
            balloonText: "[[title]]<br><b>[[value]]</b> ([[percents]]%)",
            legend: {
                align: "center",
                markerType: "circle"
            }
        });

    }


    var graph;
    // months in JS are zero-based, 0 means January
    var chartData = [
        {
            "year": "2005",
            "value": 26002
        },
        {
            "year": "2006",
            "value": 27012
        },
        {
            "year": "2007",
            "value": 27902
        },
        {
            "year": "2008",
            "value": 28002
        },
        {
            "year": "2009",
            "value": 32200
        },
        {
            "year": "2010",
            "value": 36389
        },
        {
            "year": "2011",
            "value": 30689
        },
        {
            "year": "2012",
            "value": 31810
        },
        {
            "year": "2013",
            "value": 32968
        },
        {
            "year": "2014",
            "value": 34968
        },
        {
            "year": "2015",
            "value": 31968
        },
        {
            "year": "2016",
            "value": 38689
        },
    ];


    AmCharts.ready(function () {
        // SERIAL CHART
        chart = new AmCharts.AmSerialChart();

        chart.marginRight = 20;
        chart.marginLeft = 20;
        chart.autoMargins = false;
        chart.dataProvider = chartData;
        chart.categoryField = "year";
        chart.dataDateFormat = "YYYY";

        // AXES
        // Category
        var categoryAxis = chart.categoryAxis;
        categoryAxis.parseDates = true; // as our data is date-based, we set parseDates to true
        categoryAxis.minPeriod = "YYYY"; // our data is yearly, so we set minPeriod to YYYY
        categoryAxis.minorGridEnabled = true;
        categoryAxis.minorGridAlpha = 0.15;

        // VALUE
        var valueAxis = new AmCharts.ValueAxis();
        valueAxis.gridAlpha = 0;
        valueAxis.axisAlpha = 0;
        valueAxis.fillColor = "#000000";
        valueAxis.fillAlpha = 0.05;
        valueAxis.inside = true;
        chart.addValueAxis(valueAxis);

        // GRAPH
        graph = new AmCharts.AmGraph();
        graph.type = "step"; // this line makes step graph
        graph.valueField = "value";
        graph.lineColor = "#000000";
        graph.balloonText = "[[category]]<br><b><span style='font-size:14px;'>[[value]] 个</span></b>";
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
        chart.write("chartdiv3");
    });

    var chart;

    var chartData1 = [
        {
            "year": 2007,
            "income": 30.1
        },
        {
            "year": 2008,
            "income": 29.5
        },
        {
            "year": 2009,
            "income": 34.6
        },
        {
            "year": 2010,
            "income": 37.1
        },
        {
            "year": 2011,
            "income": 40.3
        },
        {
            "year": 2012,
            "income": 41.4
        },
        {
            "year": 2013,
            "income": 44.7
        },
        {
            "year": 2014,
            "income": 46
        },
        {
            "year": 2015,
            "income": 48.3
        },
    ];


    AmCharts.ready(function () {
        // SERIAL CHART
        chart = new AmCharts.AmSerialChart();
        chart.dataProvider = chartData1;
        chart.categoryField = "year";
        // this single line makes the chart a bar chart,
        // try to set it to false - your bars will turn to columns
        chart.rotate = true;
        // the following two lines makes chart 3D
        chart.depth3D = 20;
        chart.angle = 30;

        // AXES
        // Category
        var categoryAxis = chart.categoryAxis;
        categoryAxis.gridPosition = "start";
        categoryAxis.axisColor = "#DADADA";
        categoryAxis.fillAlpha = 1;
        categoryAxis.gridAlpha = 0;
        categoryAxis.fillColor = "#FAFAFA";

        // value
        var valueAxis = new AmCharts.ValueAxis();
        valueAxis.axisColor = "#DADADA";
        valueAxis.title = "医用设备使用次数统计";
        valueAxis.gridAlpha = 0.1;
        chart.addValueAxis(valueAxis);

        // GRAPH
        var graph = new AmCharts.AmGraph();
        graph.title = "Income";
        graph.valueField = "income";
        graph.type = "column";
        graph.balloonText = "使用次数 [[category]]:[[value]]";
        graph.lineAlpha = 0;
        graph.fillColors = "#bf1c25";
        graph.fillAlphas = 1;
        chart.addGraph(graph);

        chart.creditsPosition = "top-right";

        // WRITE
        chart.write("chartdiv4");
    });
</script>
<?php $this->endBlock();?>