<?php
use kartik\grid\GridView;

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
            'label' => 'ตัวชี้วัด', 
            'format'=>'raw',
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-left'],
            'value' => function ($data) {
                return $data['kpiname']
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
            'label'=>'ค่าดัชนี', 'attribute'=>'result','format'=>['decimal',2],
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],
        [
            'label'=>'เป้าหมาย', 'attribute'=>'target','format'=>['decimal',2],
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],
        
    ],
]); ?>
