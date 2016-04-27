<?php
use yii\grid\GridView;
$this->title = 'KPI';
$this->params['breadcrumbs'][] = [
    'label' => 'Graph',
    'url' => [
        '/data/index',
        ]
    ];
$this->params['breadcrumbs'][] = $this->title;

?>
<?= GridView::widget([
    'dataProvider'=>$dataProvider,
    'tableOptions' => [
        'class' => 'table table-striped table-bordered table-responsive table-hover'
    ],
    'headerRowOptions'=> ['class' => 'success'],
    
]);
?>

