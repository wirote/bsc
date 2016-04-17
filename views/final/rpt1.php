<?php
use yii\grid\GridView;

$this->title = 'Final Report1';
$this->params['breadcrumbs'][] = [
    'label' => 'The Final',
    'url' => [
        '/final/index',
        ]
    ];
$this->params['breadcrumbs'][] = $this->title;

?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'summary' =>"",
    'tableOptions' => [
        'class' => 'table table-bordered  table-striped table-hover table-bordered',
    ],
]);
?>
