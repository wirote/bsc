<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CmidataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cmidatas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cmidata-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cmidata', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(['enablePushState'=>FALSE]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'hospcode',
            'hospname',
            'chwcode',
            'chwname',
            'cntm10',
            // 'adjm10',
            // 'cntm11',
            // 'adjm11',
            // 'cntm12',
            // 'adjm12',
            // 'cntm01',
            // 'adjm01',
            // 'cntm02',
            // 'adjm02',
            // 'cntm03',
            // 'adjm03',
            // 'cntm04',
            // 'adjm04',
            // 'cntm05',
            // 'adjm05',
            // 'cntm06',
            // 'adjm06',
            // 'cntm07',
            // 'adjm07',
            // 'cntm08',
            // 'adjm08',
            // 'cntm09',
            // 'adjm09',
            // 'cntm99',
            // 'adjm99',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
