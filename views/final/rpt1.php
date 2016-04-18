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
<!-- ส่วนแสดงกราฟ -->
<?php

use miloschuman\highcharts\Highcharts;
use miloschuman\highcharts\HighchartsAsset;

HighchartsAsset::register($this)->withScripts([
    'highcharts-more',
    'themes/grid'
]);
$this->registerJsFile("../js/chart_combin.js");
$tbldata = $dataProvider->getModels();
?>
<div id="chart1"></div>
<?php
// ใส่ชื่อแกน X
$xname = [];
// ใส่ data แกน Y
$ydata = [];
$target = [];
for ($i = 0; $i < count($tbldata); $i++) {
    $xname[] = $tbldata[$i]['chwname'];
    $ydata[] = (int) $tbldata[$i]['m99'];
    $target[] = (int) $tbldata[$i]['target'];
}
/*
$xcategories = implode("','", $xname);
$yseries = implode(",", $ydata);
*/
$xsend = json_encode($xname);
$ysend = json_encode($ydata);
$base = json_encode($target);

$this->registerJs("
    var objchart=$('#chart1');
    gen_combin(objchart,$base,$xsend,$ysend);
");
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
            'label' => 'รหัส', 'attribute'=>'chwcode',
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],
        [
            'label' => 'โรงพยาบาล', 'attribute'=>'chwname',
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-left'],
        ],
        [
            'label'=>'ต.ค.', 'attribute'=>'m10','format'=>['decimal',0],
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],
        [
            'label'=>'พ.ย.', 'attribute'=>'m11','format'=>['decimal',0],
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],
        [
            'label'=>'ธ.ค.', 'attribute'=>'m12','format'=>['decimal',0],
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],
        [
            'label'=>'ม.ค.', 'attribute'=>'m01','format'=>['decimal',0],
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],
        [
            'label'=>'ก.พ.', 'attribute'=>'m02','format'=>['decimal',0],
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],
        [
            'label'=>'มี.ค.', 'attribute'=>'m03','format'=>['decimal',0],
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],
        [
            'label'=>'เม.ย.', 'attribute'=>'m04','format'=>['decimal',0],
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],
        [
            'label'=>'พ.ค.', 'attribute'=>'m05','format'=>['decimal',0],
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],
        [
            'label'=>'มิ.ย.', 'attribute'=>'m06','format'=>['decimal',0],
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],
        [
            'label'=>'ก.ค.', 'attribute'=>'m07','format'=>['decimal',0],
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],
        [
            'label'=>'ส.ค.', 'attribute'=>'m08','format'=>['decimal',0],
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],
        [
            'label'=>'ก.ย.', 'attribute'=>'m09','format'=>['decimal',0],
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],
        [
            'label'=>'รวม', 'attribute'=>'m99','format'=>['decimal',0],
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],
        
    ],
]); ?>
