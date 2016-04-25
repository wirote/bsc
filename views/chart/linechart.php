<?php
//use yii\grid\GridView;
use kartik\grid\GridView;

$this->title = 'Line Chart';
$this->params['breadcrumbs'][] = [
    'label' => 'Graph',
    'url' => [
        '/chart/index',
        ]
    ];
$this->params['breadcrumbs'][] = $this->title;

$tbldata = $dataProvider->getModels();
?>
<?php

use miloschuman\highcharts\Highcharts;
use miloschuman\highcharts\HighchartsAsset;
HighchartsAsset::register($this)->withScripts([
    'highcharts-more',
    'themes/grid'
]);

?>
<!-- แสดงกราฟ -->
<div id="container"></div>

<!-- แสดงตาราง -->
<?= GridView::widget([
    'dataProvider'=>$dataProvider,
    'tableOptions' => [
        'class' => 'table table-striped table-bordered table-responsive table-hover'
    ],
    'headerRowOptions'=> ['class' => 'success'],
    
]);
?>
<?php
// ใส่ชื่อ Label
$ylabel = [];
// ใส่ data
$ydata = [];
$yl1 = [];
for ($i = 0; $i < count($tbldata); $i++) {
    $ylabel[] = $tbldata[$i]['hospname'];
    $ydata[] = $tbldata[$i]['cntm10'].','.$tbldata[$i]['cntm11'].','.$tbldata[$i]['cntm12']
            .','.$tbldata[$i]['cntm01'].','.$tbldata[$i]['cntm02'].','.$tbldata[$i]['cntm03']
            .','.$tbldata[$i]['cntm04'].','.$tbldata[$i]['cntm05'].','.$tbldata[$i]['cntm06']
            .','.$tbldata[$i]['cntm07'].','.$tbldata[$i]['cntm08'].','.$tbldata[$i]['cntm09'];
    $yl1[] = [
        'name'=>$tbldata[$i]['hospname'],
        'data'=> [(int) $tbldata[$i]['cntm10'] , (int) $tbldata[$i]['cntm11'] , (int) $tbldata[$i]['cntm12']
            , (int) $tbldata[$i]['cntm01'] , (int) $tbldata[$i]['cntm02'] , (int) $tbldata[$i]['cntm03']
            , (int) $tbldata[$i]['cntm04'] , (int) $tbldata[$i]['cntm05'] , (int) $tbldata[$i]['cntm06']
            , (int) $tbldata[$i]['cntm07'] , (int) $tbldata[$i]['cntm08'] , (int) $tbldata[$i]['cntm09']]
            ];
}
$yseries = json_encode($yl1);
?>
<?php
$this->registerJs("
$(function () {
    $('#container').highcharts({
        title: {
            text: 'Monthly Average Temperature',
            x: -20 //center
        },
        subtitle: {
            text: 'Source: WorldClimate.com',
            x: -20
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Temperature (°C)'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: $yseries
    });
});
");
?>

