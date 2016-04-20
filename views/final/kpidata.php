<?php
use kartik\grid\GridView;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\Yearselect;

$this->title = 'Final Report1';
$this->params['breadcrumbs'][] = [
    'label' => 'The Final',
    'url' => [
        '/final/index',
        ]
    ];
$this->params['breadcrumbs'][] = $this->title;

$y = isset($_REQUEST['year'])?$_REQUEST['year']:"";
$yearshow = !empty($y) ? $y+543 : "";
?>
<!-- ส่วนแสดง dropdown -->
<?= Html::beginForm([''], 'post', ['enctype' => 'multipart/form-data']); ?>
<?= Html::label('ปีงบประมาณ') ?>
<?= Html::dropDownList('year', $y, ArrayHelper::map(
    Yearselect::find()->orderBy('yearvalue desc')->all(),
    'yearvalue', 'yearthai'),
    ['class' => 'form-control', 'prompt' => 'โปรดเลือกปี...', 'required' => true]);
?>
<?= Html::submitButton('ค้นหา',['class'=>'btn btn-primary']); ?>
<?=Html::endForm(); ?>

<!-- ส่วนแสดงตาราง -->
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'bordered' => TRUE,
    'striped' => TRUE,
    'condensed' => false,
    'responsive' => TRUE,
    'hover' => TRUE,
    'headerRowOptions'=> ['class' => GridView::TYPE_SUCCESS],
    //'floatHeader' => true,
    'panel'=>[
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i> The Final Page </h3>',
        'type'=>'success',
        'before' => '<h1 style="text-align:center">รายงานแสดงข้อมูลผู้ป่วยใน '.$yearshow.'</h1>',
        'after'=>'ประมวลผลวันที่ '.date('Y-m-d H:i:s'),
        
    ],
    'columns' => [
        [
            'label' => 'ตัวชี้วัด', 
            'format'=>'raw',
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-left'],
            'value' => function ($data) use ($y) {
                return Html::a($data['kpiname'],'kpidatadetail?kpiid='.$data['kpiid'].'&year='.$y)
                        ."<br /> <strong style='color:blue'>ตัวตั้ง:</strong>"
                        .$data['acol']
                        ."<br /> <strong style='color:green'>ตัวหาร:</strong>"
                        .$data['bcol'];
            }
        ],
        [
            'label'=>'ตัวตั้ง', 'attribute'=>'divide','format'=>['decimal',0],
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],
        [
            'label'=>'ตัวหาร', 'attribute'=>'denom','format'=>['decimal',0],
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],
        [
            'label'=>'ค่าดัชนี',
            'format' => 'raw',
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
            'value' => function ($data) {
        return  ($data['target'] > 0) ? $data['result'] >= $data['target'] ? 
                '<font style="color: green">'.$data['result'].'</font>' :
                '<font style="color: red">'.$data['result'].'</font>' : $data['result'];
            }
        ],
        [
            'label'=>'เป้าหมาย', 'attribute'=>'target','format'=>['decimal',2],
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],
        
    ],
]); ?>
