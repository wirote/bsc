<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Data Manipulation';
$this->params['breadcrumbs'][] = $this->title;
?>
<table class="table table-responsive table-hover table-striped">
    <tr class="success">
        <th colspan="2"><span class="glyphicon glyphicon-book"></span>&nbsp; ระบบเมนู </th>
        <td><?= Url::to('index.php?r=') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('ActiveDataProvider','index.php?r=frontend/activedata1')?></td>
        <td><?= Url::to('frontend/activedata1') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('ActiveDataProvider','index.php?r=frontend/activedata2')?></td>
        <td><?= Url::to('frontend/activedata2') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('ArrayDataProvider','index.php?r=frontend/arraydata')?></td>
        <td><?= Url::to('frontend/arraydata') ?></td>
    </tr>
    <tr class="success">
        <th colspan="2"><span class="glyphicon glyphicon-book"></span>&nbsp; ระบบเมนู หลังทำ urlManager</th>
        <td><?= Url::to('index.php?r= หายไป') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('ActiveDataProvider','activedata1')?></td>
        <td><?= Url::to('frontend/activedata1') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('ActiveDataProvider','activedata2')?></td>
        <td><?= Url::to('frontend/activedata2') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('ArrayDataProvider','arraydata')?></td>
        <td><?= Url::to('frontend/arraydata') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('GridView1','kartik1')?></td>
        <td><?= Url::to('frontend/kartik1') ?></td>
    </tr>
    
</table>
