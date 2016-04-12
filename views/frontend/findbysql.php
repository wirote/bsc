<?php
use yii\grid\GridView ;

$this->title = 'Data Manipulation';
$this->params['breadcrumbs'][] = [
    'label' => 'Frontend',
    'url' => [
        '/frontend/index',
        ]
    ];
$this->params['breadcrumbs'][] = $this->title;

?>

<?php 
$gridcolumns = [
    ['class' => 'yii\grid\SerialColumn'],
    [
        'header' => 'Training <br> Score',
        'attribute' => 'id',
        'format' => ['decimal',0],
    ],
    [
        'header' => 'Exam <br> Score',
        'attribute' => 'company',
        'format' => ['raw'],
    ],
];
?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'tableOptions' => [
        'class' => 'table table-striped table-bordered table-responsive table-hover'
    ],
    'headerRowOptions'=> ['class' => 'success'],
    'columns' => $gridcolumns,
]); ?>

<!--
'column'=>[
        
    ],
    
-->
<table class="table table-striped table-bordered table-responsive table-hover table-condensed">
    <tr>
        <th>x</th>
    </tr>
    <tr>
        <td>.</td>
    </tr>
    <tr>
        <td>.</td>
    </tr>
    <tr>
        <td>.</td>
    </tr>
    <tr>
        <td>.</td>
    </tr>
    <tr>
        <td>.</td>
    </tr>
</table>
