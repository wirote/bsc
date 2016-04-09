<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CmidataSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cmidata-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'hospcode') ?>

    <?= $form->field($model, 'hospname') ?>

    <?= $form->field($model, 'chwcode') ?>

    <?= $form->field($model, 'chwname') ?>

    <?= $form->field($model, 'cntm10') ?>

    <?php // echo $form->field($model, 'adjm10') ?>

    <?php // echo $form->field($model, 'cntm11') ?>

    <?php // echo $form->field($model, 'adjm11') ?>

    <?php // echo $form->field($model, 'cntm12') ?>

    <?php // echo $form->field($model, 'adjm12') ?>

    <?php // echo $form->field($model, 'cntm01') ?>

    <?php // echo $form->field($model, 'adjm01') ?>

    <?php // echo $form->field($model, 'cntm02') ?>

    <?php // echo $form->field($model, 'adjm02') ?>

    <?php // echo $form->field($model, 'cntm03') ?>

    <?php // echo $form->field($model, 'adjm03') ?>

    <?php // echo $form->field($model, 'cntm04') ?>

    <?php // echo $form->field($model, 'adjm04') ?>

    <?php // echo $form->field($model, 'cntm05') ?>

    <?php // echo $form->field($model, 'adjm05') ?>

    <?php // echo $form->field($model, 'cntm06') ?>

    <?php // echo $form->field($model, 'adjm06') ?>

    <?php // echo $form->field($model, 'cntm07') ?>

    <?php // echo $form->field($model, 'adjm07') ?>

    <?php // echo $form->field($model, 'cntm08') ?>

    <?php // echo $form->field($model, 'adjm08') ?>

    <?php // echo $form->field($model, 'cntm09') ?>

    <?php // echo $form->field($model, 'adjm09') ?>

    <?php // echo $form->field($model, 'cntm99') ?>

    <?php // echo $form->field($model, 'adjm99') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
