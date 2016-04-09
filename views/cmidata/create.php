<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cmidata */

$this->title = 'Create Cmidata';
$this->params['breadcrumbs'][] = ['label' => 'Cmidatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cmidata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
