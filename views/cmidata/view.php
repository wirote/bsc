<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cmidata */

$this->title = $model->hospcode;
$this->params['breadcrumbs'][] = ['label' => 'Cmidatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cmidata-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->hospcode], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->hospcode], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'hospcode',
            'hospname',
            'chwcode',
            'chwname',
            'cntm10',
            'adjm10',
            'cntm11',
            'adjm11',
            'cntm12',
            'adjm12',
            'cntm01',
            'adjm01',
            'cntm02',
            'adjm02',
            'cntm03',
            'adjm03',
            'cntm04',
            'adjm04',
            'cntm05',
            'adjm05',
            'cntm06',
            'adjm06',
            'cntm07',
            'adjm07',
            'cntm08',
            'adjm08',
            'cntm09',
            'adjm09',
            'cntm99',
            'adjm99',
        ],
    ]) ?>

</div>
