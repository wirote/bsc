<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cmidata */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cmidata-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'hospcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hospname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chwcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chwname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cntm10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adjm10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cntm11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adjm11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cntm12')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adjm12')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cntm01')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adjm01')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cntm02')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adjm02')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cntm03')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adjm03')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cntm04')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adjm04')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cntm05')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adjm05')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cntm06')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adjm06')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cntm07')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adjm07')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cntm08')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adjm08')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cntm09')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adjm09')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cntm99')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adjm99')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
