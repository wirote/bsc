<?php
$this->title = 'Data Menu';
$this->params['breadcrumbs'][] = $this->title;

$kpi = Yii::$app->urlManager->createUrl([
    'data/kpi',    
    ]);

?>
<table class="table table-responsive table-striped table-hover">
    <thead>
        <tr class="success">
            <th colspan="2">
                <span class="glyphicon glyphicon-oil" aria-hidden="true"></span>
                 ระบบเมนู
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="text-align: center; width: 5%">
                <span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> 
            </td>
            <td> <a href="<?= $kpi ?>"> KPI</a> </td>
        </tr>
    </tbody>
</table>