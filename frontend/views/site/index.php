<link href='http://fonts.googleapis.com/css?family=Covered+By+Your+Grace' rel='stylesheet' type='text/css'>
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
                <a class="navbar-brand" href="#">经济概览</a>
            </div>

            <?php include('search.php'); ?>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">

                <?php include('common.php'); ?>
            </div>

        </nav>
    </div>
</div>

<div style="font-size:15px;">
    <div style="width:100%;display: inline-block">
        <div id="chartdiv1" style="width: 500px; height: 400px;position: relative;display: inline-block;vertical-align: top;"></div>
        <div id="chartdiv2" style="width: 500px; height: 400px;position: relative;display: inline-block;vertical-align: top;margin-left: 30px;"></div>
    </div>
    <div class="" style="margin-top: 30px;">
        <table class="table table-striped">
            <caption>2018年分区地区生产总值</caption>
            <thead>
            <tr>
                <th>区域</th>
                <th>地区生产总值</th>
                <th>地区生产年增长率</th>
                <th>第一产业总值</th>
                <th>第一产业增长率</th>
                <th>第二产业总值</th>
                <th>第二产业增长率</th>
                <th>第三产业总值</th>
                <th>第三产业增长率</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>全市</td>
                <td>24221.98</td>
                <td>7.6%</td>
                <td>22.09</td>
                <td>3.9%</td>
                <td>9961.95</td>
                <td>9.3%</td>
                <td>14237.4</td>
                <td>6.4%</td>
            </tr>
            <tr>
                <td>福田区</td>
                <td>4018.26</td>
                <td>7.4%</td>
                <td>1.63</td>
                <td>-0.8%</td>
                <td>238.56</td>
                <td>10.8</td>
                <td>3378.08</td>
                <td>7.1%</td>
            </tr>
             <tr>
                <td>罗湖区</td>
                <td>2253.69</td>
                <td>7.3%</td>
                <td>1.31</td>
                <td>-27.3%</td>
                <td>81.65</td>
                <td>2.2%</td>
                <td>2170.74</td>
                <td>7.5%</td>
            </tr>
             <tr>
                <td>盐田区</td>
                <td>612.76</td>
                <td>7.1%</td>
                <td>0.14</td>
                <td>-19.4%</td>
                <td>85.83</td>
                <td>1.7</td>
                <td>526.78</td>
                <td>8.0</td>
            </tr>
             <tr>
                 <td>南山区</td>
                 <td>5018.36</td>
                 <td>4.5%</td>
                <td>1.07</td>
                <td>8.7%</td>
                <td>2045.70</td>
                <td>0.2%</td>
                <td>2971.45</td>
                <td>9.1%</td>
            </tr>
             <tr>
                <td>宝安区</td>
                <td>3612.52</td>
                <td>8.7%</td>
                <td>1.36</td>
                <td>30.9%</td>
                <td>1840.87</td>
                <td>8.3%</td>
                <td>1769.4</td>
                <td>9.0%</td>
            </tr>
             <tr>
                <td>龙岗区</td>
                <td>4287.86</td>
                <td>11%</td>
                <td>0.54</td>
                <td>-2.7%</td>
                <td>2974.56</td>
                <td>15.9%</td>
                <td>1312.32</td>
                <td>0.8%</td>
            </tr>
             <tr>
                <td>龙华区</td>
                <td>2401.78</td>
                <td>10.3%</td>
                <td>2.09</td>
                <td>4.9%</td>
                <td>1201.95</td>
                <td>11.3%</td>
                <td>1137.4</td>
                <td>9.6%</td>
            </tr>
             <tr>
                <td>坪山区</td>
                <td>701.66</td>
                <td>10.1%</td>
                <td>0.29</td>
                <td>5.9%</td>
                <td>201.15</td>
                <td>9.3</td>
                <td>496.89</td>
                <td>11.23%</td>
            </tr>

            </tbody>
        </table>
    </div>

    <div id="chartdiv3" style="width:100%; height:400px;">
    </div>
    <p style="margin-left: 20px;margin-bottom: 20px;margin-top: 20px;"> 2014-2018年建筑业增加值（亿元）</p>


    <div id="chartdiv4" style="width:100%; height:600px;"></div>

    <div class="" style="margin-top: 30px;">
        <table class="table table-striped">
            <caption>2018年分区固定资产投资增长速度</caption>
            <thead>
            <tr>
                <th>区域</th>
                <th>固定资产投资比上年增长（%）</th>
                <th>房地产开发投资比上年增长（%）</th>
                <th>非房地产开发投资比上年增长（%）</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>全市</td>
                <td>20.6</td>
                <td>23.6</td>
                <td>18.4</td>
            </tr>
            <tr>
                <td>福田区</td>
                <td>24.1</td>
                <td>11.1</td>
                <td>47.2</td>
            </tr>
            <tr>
                <td>罗湖区</td>
                <td>22.9</td>
                <td>25.3</td>
                <td>20.1</td>
            </tr>
            <tr>
                <td>盐田区</td>
                <td>3.1</td>
                <td>-13.4</td>
                <td>11.6</td>
            </tr>
            <tr>
                <td>南山区</td>
                <td>21.6</td>
                <td>26.6</td>
                <td>18.9</td>
            </tr>
            <tr>
                <td>宝安区</td>
                <td>30.2</td>
                <td>35.7</td>
                <td>27.3</td>
            </tr>
            <tr>
                <td>龙岗区</td>
                <td>28.8</td>
                <td>26.6</td>
                <td>30.5</td>
            </tr>
            <tr>
                <td>龙华区</td>
                <td>20.9</td>
                <td>21.1</td>
                <td>20.6</td>
            </tr>
            <tr>
                <td>坪山区</td>
                <td>18,9</td>
                <td>29.2</td>
                <td>10</td>
            </tr>

            </tbody>
        </table>
    </div>
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
                "year": 2014,
                "地区生产总值(千亿)": 16.64948,
                "比上年增长(%)": 8.1
            }, {
                "year": 2015,
                "地区生产总值(千亿)":18.04137 ,
                "比上年增长(%)": 8.8
            }, {
                "year": 2016,
                "地区生产总值(千亿)":20.07970,
                "比上年增长(%)": 9.2
            }, {
                "year": 2017,
                "地区生产总值(千亿)": 22.49007,
                "比上年增长(%)": 8.2
            }, {
                "year": 2018,
                "地区生产总值(千亿)": 24.41936,
                "比上年增长(%)": 7.6
            },
            ],
            categoryField: "year",
            startDuration: 1,

            categoryAxis: {
                gridPosition: "start"
            },
            valueAxes: [{
                title: " 2014-2018年地区生产总值及增长速度"
            }],
            graphs: [{
                type: "column",
                title: "地区生产总值(千亿)",
                valueField: "地区生产总值(千亿)",
                lineAlpha: 0,
                fillAlphas: 0.8,
                balloonText: "[[title]] in [[category]]:<b>[[value]]</b>"
            }, {
                type: "line",
                title: "比上年增长(%)",
                valueField: "比上年增长(%)",
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
                "country": "福田区",
                "litres": 4018.26
            }, {
                "country": "南山区",
                "litres": 5018.36
            }, {
                "country": "宝安区",
                "litres": 3612.18
            }, {
                "country": "罗湖区",
                "litres": 2253.69
            }, {
                "country": "龙岗区",
                "litres": 4287.86
            }, {
                "country": "龙华区",
                "litres": 2401.82
            }, {
                "country": "坪山区",
                "litres": 701.66
            }, {
                "country": "盐田区",
                "litres": 612.76
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
            "year": "2014",
            "value": 468.58
        },
        {
            "year": "2015",
            "value": 479.72
        },
        {
            "year": "2016",
            "value": 526.67
        },
        {
            "year": "2017",
            "value": 594.07
        },
        {
            "year": "2018",
            "value": 724.48
        }
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
        graph.balloonText = "[[category]]<br><b><span style='font-size:14px;'>[[value]] 亿元</span></b>";
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
            "year": "2月",
            "income": 8.1
        },
        {
            "year": "3月",
            "income": 8.9
        },
        {
            "year": "4月",
            "income": 9.9
        },
        {
            "year": "5月",
            "income": 8.7
        },
        {
            "year": "6月",
            "income": 7.4
        },
        {
            "year": "7月",
            "income": 6.9
        },
        {
            "year": "8月",
            "income": 7.5
        },
        {
            "year": "9月",
            "income": 8.3
        },
        {
            "year": "10月",
            "income": 9.0
        },
        {
            "year": "11月",
            "income": 9.2
        },
        {
            "year": "12月",
            "income": 9.5
        }
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
        valueAxis.title = "2018年规模以上工业增加值累计同比增长速度（%）";
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