<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cmidata */

$this->title = 'Update Cmidata: ' . $model->hospcode;
$this->params['breadcrumbs'][] = ['label' => 'Cmidatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->hospcode, 'url' => ['view', 'id' => $model->hospcode]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cmidata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
