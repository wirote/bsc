<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'First Page Menu ';
$this->params['breadcrumbs'][] = $this->title;
?>
<table class="table table-responsive table-hover table-striped">
    <tr class="success">
        <th colspan="2"><span class="glyphicon glyphicon-book"></span>&nbsp; ระบบเมนู </th>
        <td><?= Url::to('index.php?r=') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('Page1','index.php?r=first/page1')?></td>
        <td><?= Url::to('first/page1') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('Page2','index.php?r=first/page2')?></td>
        <td><?= Url::to('first/page2') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('Array1','index.php?r=first/array1')?></td>
        <td><?= Url::to('first/array1') ?></td>
    </tr>
    <tr class="success">
        <th colspan="2"><span class="glyphicon glyphicon-book"></span>&nbsp; ระบบเมนู หลังทำ urlManager</th>
        <td><?= Url::to('index.php?r= หายไป') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('Page1','page1')?></td>
        <td><?= Url::to('first/page1') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('Page2','page2')?></td>
        <td><?= Url::to('first/page2') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: #009587"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('Array1','../first/array1')?></td>
        <td><?= Url::to('first/array1') ?></td>
    </tr>
</table>
