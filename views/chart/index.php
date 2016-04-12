<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Graph Menu';
$this->params['breadcrumbs'][] = $this->title;
?>
<table class="table table-responsive table-hover table-striped">
    <tr class="success">
        <th colspan="2"><span class="glyphicon glyphicon-book"></span>&nbsp; ระบบเมนู </th>
        <td><?= Url::to('index.php?r=') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('Graph1','index.php?r=chart/graph1')?></td>
        <td><?= Url::to('chart/graph1') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('Graph2','index.php?r=chart/graph2')?></td>
        <td><?= Url::to('chart/graph2') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('Graph3','index.php?r=chart/graph3')?></td>
        <td><?= Url::to('chart/graph3') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('Graph4','index.php?r=chart/graph4')?></td>
        <td><?= Url::to('chart/graph4') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('Graph5','index.php?r=chart/graph5')?></td>
        <td><?= Url::to('chart/graph5') ?></td>
    </tr>
    
</table>
