<?php
use yii\grid\GridView;

$this->title = 'Graph3';
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

<!-- เตรียมข้อมุลใส่กราฟ -->
<?php
// ใส่ชื่อแกน X
$xname = [];
// ใส่ data แกน Y
$ydata = [];
for ($i = 0; $i < count($tbldata); $i++) {
    $xname[] = $tbldata[$i]['company'];
    $ydata[] = $tbldata[$i]['qty'];
}
$xcategories = implode("','", $xname);
$yseries = implode(",", $ydata);

?>
<?php
// start chart
$this->registerJs("
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Quantity of Products'
        },
        subtitle: {
            text: 'Source: Wirote.com'
        },
        xAxis: {
            categories: ['$xcategories'],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Quantity'
            }
        },
        tooltip: {
            headerFormat: '<span style=\"font-size:10px\">{point.key}</span><table>',
            pointFormat: '<tr><td style=\"color:{series.color};padding:0\">{series.name}: </td>' +
                '<td style=\"padding:0\"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Product',
            data: [$yseries],
            color: '#ea80fc'
        }]
    });
});"
);
//end chart
