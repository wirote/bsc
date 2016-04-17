<?php
use kartik\grid\GridView ;

$this->title = 'Kartik GridView';
$this->params['breadcrumbs'][] = [
    'label' => 'Frontend',
    'url' => [
        '/frontend/index',
        ]
    ];
$this->params['breadcrumbs'][] = $this->title;

?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'bordered' => true,
    'striped' => TRUE,
    'condensed' => false,
    'responsive' => true,
    'hover' => true,
    //'captionOptions' => ['class' => 'kv-table-caption'],
    'headerRowOptions'=> ['class' => GridView::TYPE_WARNING],
    'floatHeader' => true,
    'panel'=>[
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i> Hospital Data</h3>',
        'type'=>'success',
        'before' => '<h1 style="text-align:center">รายงานแสดงข้อมูลของโรงพยาบาล</h1>',
        'after'=>'ประมวลผลวันที่ '.date('Y-m-d H:i:s'),
        
    ],
    'columns' => [
        [
            'label' => 'รหัส', 'attribute'=>'hospcode',
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],
        [
            'label' => 'โรงพยาบาล', 'attribute'=>'hospname',
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
