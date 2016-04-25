<?php
use kartik\grid\GridView;

$hdcdata = $dataProvider->getModels();

$this->title = 'Final HDC Report';
$this->params['breadcrumbs'][] = [
    'label' => 'The Final',
    'url' => [
        '/final/index',
        ]
    ];
$this->params['breadcrumbs'][] = $this->title;

$yearshow = isset($hdcdata[0]['byear']) ? $hdcdata[0]['byear'] : "";

?>
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
]); ?>

