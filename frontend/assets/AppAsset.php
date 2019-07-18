<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'amcharts/plugins/export/export.css',
    ];
    public $js = [
        //'js/bootstrap.min.js',
        'amcharts/amcharts.js',
        'amcharts/serial.js',
        'amcharts/pie.js',
        'amcharts/radar.js',

        'amcharts/themes/light.js',
        'amcharts/themes/dark.js',
        'amcharts/themes/chalk.js',
        'amcharts/themes/patterns.js',

        "amcharts/plugins/export/export.js",

        "amcharts/xy.js",
        "amcharts/funnel.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
