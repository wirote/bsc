<?php
$this->title = 'Final';
$this->params['breadcrumbs'][] = $this->title;

use yii\helpers\Html;
use yii\helpers\Url;

?>
<table class="table table-responsive table-hover table-striped">
    <tr class="success">
        <th colspan="2"><span class="glyphicon glyphicon-book"></span>&nbsp; ระบบเมนู </th>
        <td><?= Url::to('ไม่มี index.php?r= ') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('แสดงข้อมูล 12 เดือน','rpt1')?></td>
        <td><?= Url::to('final/rpt1') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('Dropdown List','depdropdown')?></td>
        <td><?= Url::to('final/depdropdown') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('','#')?></td>
        <td><?= Url::to('') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('','#')?></td>
        <td><?= Url::to('') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('','#')?></td>
        <td><?= Url::to('') ?></td>
    </tr>
    
</table>
