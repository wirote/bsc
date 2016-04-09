<?php
use yii\helpers\Html;

$this->title = 'Systems Menu';
$this->params['breadcrumbs'][] = $this->title;

/*
 Html::a( $text, $url = null, $options = [ ] )
 */

?>
<table class="table table-responsive table-hover table-striped">
    <tr class="success">
        <th colspan="2"> ระบบเมนู Administrator </th>
    </tr>
    <tr>
        <td style="width: 3%; color: green"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('ทดสอบ CRUD (cmidata)','index.php?r=cmidata')?></td>
    </tr>
</table>