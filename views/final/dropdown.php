<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Changwat;
use app\models\Ampur;
use app\models\Tambon;

$this->title = 'Depened Dropdown';
$this->params['breadcrumbs'][] = [
    'label' => 'The Final',
    'url' => [
        '/final/index',
        ]
    ];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="Final-Dropdown">
<h1><?= Html::encode($this->title) ?></h1>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'chwcode')->dropDownList($model->getChwList(),[
    'prompt'=>'โปรดเลือกจังหวัด ...',   
    'onchange' => '$.post("amplist?chwcode='.'"+$(this).val(),function(data){
        $("select#changwat-ampcode").html(data);
    });'
]); ?>
<?= $form->field($model, 'ampcode')->dropDownList(
 ArrayHelper::map(Ampur::find()->all(), 'ampcode', 'ampname'), [
     'prompt'=>'โปรดเลือกอำเภอ ...',   
 ]); ?>
<?php ActiveForm::end();?>
    
</div>
