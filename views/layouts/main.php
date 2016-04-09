<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
/*
use app\assets\AppAsset;
AppAsset::register($this);
 */
use app\assets\MaterialAsset;
MaterialAsset::register($this);

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
        'brandLabel' => 'สำนักบริหารสาธารณสุข',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-default navbar-fixed-top',
        ],
    ]);
    // Report Menu items
    $rpt_items[] = ['label' => '<span class="glyphicon glyphicon-text-color" aria-hidden="true"></span> First', 'url' => ['/first/index']];
    $rpt_items[] = ['label' => '<span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span> Frontend', 'url' => ['/frontend/index']];
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => '<span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home', 'url' => ['/site/index']],
            ['label' => '<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Reports',
                'items' => $rpt_items],
            ['label' => '<span class="glyphicon glyphicon-road" aria-hidden="true"></span> About', 'url' => ['/site/about']],
            ['label' => '<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => '<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login', 'url' => ['/site/login']]
            ) : (
                ['label'=>'<span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> System ('.Yii::$app->user->identity->username.')',
                    'items' => [
                        ['label' => '<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Setup', 'url' => ['/backend/index']],
                        ['label' => '<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout', 'url' => ['/site/logout'], 'linkOptions' => ['data-method' => 'post']]
                    ]
                ]                
            )
        ],
        'encodeLabels' => false,
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

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
