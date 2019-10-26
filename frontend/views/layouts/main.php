<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '某地区经济运行分析预测系统',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top ',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            //['label' => '首页', 'url' => ['/site/index']],
            ['label' => '首页', 'url' => ['/site/index']],
            ['label' => '趋势分析', 'url' => ['/site/door']],
            ['label' => '构成分析', 'url' => ['/site/live']],
            ['label' => '对比分析', 'url' => ['/site/medicinal']],
            ['label' => '关联分析', 'url' => ['/site/equipment']],
            ['label' => '排名分析', 'url' => ['/site/custom']],
            ['label' => '下载数据', 'url' => ['/site/export']],
            Yii::$app->user->isGuest ? (
            ['label' => '登录', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Logout (' . "你好， admin". ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right">广元第一人民医院</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
<?php if(isset($this->blocks['footer']) == true):?>
    <?= $this->blocks['footer'] ?>
<?php endif;?>
</html>
<?php $this->endPage() ?>
