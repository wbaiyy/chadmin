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
                        选择医生：
                        <select class="form-control">
                            <option>全部</option>
                            <option>张三</option>
                            <option>李四</option>
                            <option>王五</option>

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

                </form>
            </div>

        </nav>
    </div>
</div>


<div style="font-size:15px; margin-top: 100px;">
    <div class="" style="">
        <table class="table table-striped">
            <caption><b>各年份病人数分布</b></caption>
            <thead>
            <tr>
                <th>年份</th>
                <th>人数</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>2017</td>
                <td>192510</td>


            </tr>
            <tr>
                <td>2016</td>
                <td>188211</td>
            </tr>
            <tr>
                <td>2015</td>
                <td>180921</td>
            </tr>
            <tr>
                <td>2014</td>
                <td>132222</td>
            <tr>
                <td>2013</td>
                <td>112298</td>
            </tr>
            <tr>
                <td>2012</td>
                <td>111423</td>
            </tr>
            <tr>
                <td>2011</td>
                <td>98421</td>
            </tr>
            <tr>
                <td>2010</td>
                <td>71112</td>
            </tr>
            <tr>
                <td>2009</td>
                <td>66532</td>
            </tr>
            <tr>
                <td>2008</td>
                <td>58085</td>
            </tr>
            <tr>
                <td>2007</td>
                <td>44323</td>
            </tr>
            </tbody>
        </table>
    </div>


	<span style="color: #CC0000;">
			<p>支持各种类型文件下载，包括图片（PDF，PNG，SVG），文件（CSV，JSON，XLSX）</p>
		</span>
    <div id="chartdiv" style="width: 100%; height: 400px;"></div>


</div>


<?php $this->beginBlock('footer');  ?>
<script>
    var chart;

    var chartData = [{
        "country": "2017",
        "visits": 192510,
        "color": "#FF0F00"
    }, {
        "country": "2016",
        "visits": 188211,
        "color": "#FF6600"
    }, {
        "country": "2015",
        "visits": 180921,
        "color": "#FF9E01"
    }, {
        "country": "2014",
        "visits": 132222,
        "color": "#FCD202"
    }, {
        "country": "2013",
        "visits": 112298,
        "color": "#F8FF01"
    }, {
        "country": "2012",
        "visits": 111423,
        "color": "#B0DE09"
    }, {
        "country": "2011",
        "visits": 98421,
        "color": "#04D215"
    }, {
        "country": "2010",
        "visits": 71112,
        "color": "#0D8ECF"
    }, {
        "country": "2009",
        "visits": 66532,
        "color": "#0D52D1"
    }, {
        "country": "2008",
        "visits": 58085,
        "color": "#2A0CD0"
    }, {
        "country": "2007",
        "visits": 44323,
        "color": "#8A0CCF"
    }, {
        "country": "2006",
        "visits": 44181,
        "color": "#CD0D74"
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
            title: "人数"
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