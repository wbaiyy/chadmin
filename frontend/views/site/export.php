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
	<span style="color: #CC0000;">
			<p>Warning! Exporting to image works only if you view this file from web server. Exporting works with all modern browsers except IE9 (works fine with IE10).</p>
            <p>Since version 3.14 chart export is done using dedicated plugin, located in amCharts/plugins/export folder. Please refer to bundled examples and README.md file for more information.</p>
		</span>
    <div id="chartdiv" style="width: 100%; height: 400px;"></div>
</div>


<?php $this->beginBlock('footer');  ?>
<script>
    var chart;

    var chartData = [{
        "country": "USA",
        "visits": 4025,
        "color": "#FF0F00"
    }, {
        "country": "China",
        "visits": 1882,
        "color": "#FF6600"
    }, {
        "country": "Japan",
        "visits": 1809,
        "color": "#FF9E01"
    }, {
        "country": "Germany",
        "visits": 1322,
        "color": "#FCD202"
    }, {
        "country": "UK",
        "visits": 1122,
        "color": "#F8FF01"
    }, {
        "country": "France",
        "visits": 1114,
        "color": "#B0DE09"
    }, {
        "country": "India",
        "visits": 984,
        "color": "#04D215"
    }, {
        "country": "Spain",
        "visits": 711,
        "color": "#0D8ECF"
    }, {
        "country": "Netherlands",
        "visits": 665,
        "color": "#0D52D1"
    }, {
        "country": "Russia",
        "visits": 580,
        "color": "#2A0CD0"
    }, {
        "country": "South Korea",
        "visits": 443,
        "color": "#8A0CCF"
    }, {
        "country": "Canada",
        "visits": 441,
        "color": "#CD0D74"
    }, {
        "country": "Brazil",
        "visits": 395,
        "color": "#754DEB"
    }, {
        "country": "Italy",
        "visits": 386,
        "color": "#DDDDDD"
    }, {
        "country": "Australia",
        "visits": 384,
        "color": "#999999"
    }, {
        "country": "Taiwan",
        "visits": 338,
        "color": "#333333"
    }, {
        "country": "Poland",
        "visits": 328,
        "color": "#000000"
    }];


    var chart = AmCharts.makeChart("chartdiv", {
        type: "serial",
        dataProvider: chartData,
        categoryField: "country",
        depth3D: 20,
        angle: 30,

        categoryAxis: {
            labelRotation: 90,
            gridPosition: "start"
        },

        valueAxes: [{
            title: "Visitors"
        }],

        graphs: [{

            valueField: "visits",
            colorField: "color",
            type: "column",
            lineAlpha: 0,
            fillAlphas: 1
        }],

        chartCursor: {
            cursorAlpha: 0,
            zoomable: false,
            categoryBalloonEnabled: false
        },
        "export": {
            "enabled": true
        }

    });
</script>
<?php $this->endBlock();?>