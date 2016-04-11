<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Systems Menu';
$this->params['breadcrumbs'][] = $this->title;

/*
 Html::a( $text, $url = null, $options = [ ] )
 */
$option = ['target'=>'_blank'];
?>
<table class="table table-responsive table-hover table-striped">
    <tr class="success">
        <th colspan="2"> ระบบเมนู Administrator </th>
        <td><?= Url::to('link') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: green"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('ทดสอบ CRUD (cmidata)','index.php?r=cmidata')?></td>
        <td><?= Url::to('cmidata/index') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: green"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('Yii2 Select Query : SQL Queries','http://www.bsourcecode.com/yiiframework2/select-query-sql-queries/',$option)?></td>
        <td><?= Url::to('http://www.bsourcecode.com/yiiframework2/select-query-sql-queries/') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: green"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('Yii2 Select Query : Model','http://www.bsourcecode.com/yiiframework2/select-query-model/',$option)?></td>
        <td><?= Url::to('http://www.bsourcecode.com/yiiframework2/select-query-model/') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: green"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('Yii 2.0 URL Creation','http://www.bsourcecode.com/yiiframework2/yii2-url-creation/',$option)?></td>
        <td><?= Url::to('http://www.bsourcecode.com/yiiframework2/yii2-url-creation/') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: green"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('Html::a – (yii/helpers/Html)','http://www.learnyii2.com/html-helper-html-a/',$option)?></td>
        <td><?= Url::to('http://www.learnyii2.com/html-helper-html-a/') ?></td>
    </tr>
    <tr>
        <td style="width: 3%; color: green"><span class="glyphicon glyphicon-hand-right"></span></td>
        <td><?= Html::a('Gridview In Yiiframework 2.0','http://www.bsourcecode.com/yiiframework2/gridview-in-yiiframework-2-0/',$option)?></td>
        <td><?= Url::to('http://www.bsourcecode.com/yiiframework2/gridview-in-yiiframework-2-0/') ?></td>
    </tr>
</table>
