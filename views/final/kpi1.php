<?php
use kartik\grid\GridView;
use yii\helpers\Html;

$this->title = 'Final Report1';
$this->params['breadcrumbs'][] = [
    'label' => 'The Final',
    'url' => [
        '/final/index',
        ]
    ];
$this->params['breadcrumbs'][] = $this->title;

?>

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
        'before' => '<h1 style="text-align:center">รายงานแสดงข้อมูลผู้ป่วยใน</h1>',
        'after'=>'ประมวลผลวันที่ '.date('Y-m-d H:i:s'),
        
    ],
    'columns' => [
        [
            'label' => 'ชื่อตัวชี้วัด',
            'format'=>'raw',
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-left'],
            'value' => function($data){
                 return Html::a($data['kpiname'], 'kpidetail?id='.$data['id']); 
             }
        ],
        [
            'label'=>'เป้าหมาย', 'attribute'=>'target','format'=>['decimal',2],
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],
        
    ],
]); ?>
