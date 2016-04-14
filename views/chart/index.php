<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Graph Menu';
$this->params['breadcrumbs'][] = $this->title;
?>
<table class="table table-responsive table-hover table-striped">
    <tr class="success">
        <th colspan="2"><span class="glyphicon glyphicon-book"></span>&nbsp; ระบบเมนู </th>
        <td><?= Url::to('ไม่มี index.php?r= ') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('Graph1','graph1')?></td>
        <td><?= Url::to('chart/graph1') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('Graph2','graph2')?></td>
        <td><?= Url::to('chart/graph2') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('Graph3','graph3')?></td>
        <td><?= Url::to('chart/graph3') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('Graph4','graph4')?></td>
        <td><?= Url::to('chart/graph4') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('Graph5','graph5')?></td>
        <td><?= Url::to('chart/graph5') ?></td>
    </tr>
    
</table>
