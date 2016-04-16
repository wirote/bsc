<?php
$this->title = 'Graph6';
$this->params['breadcrumbs'][] = [
    'label' => 'Graph',
    'url' => [
        '/chart/index',
    ]
];
$this->params['breadcrumbs'][] = $this->title;
?>
<?php

use miloschuman\highcharts\Highcharts;
use miloschuman\highcharts\HighchartsAsset;

HighchartsAsset::register($this)->withScripts([
    'highcharts-more',
    'themes/grid'
]);
$this->registerJsFile("../js/chart_combin.js");
$tbldata = $dataProvider->getModels();
?>
<div id="chart1"></div>

<?php
// ใส่ชื่อแกน X
$xname = [];
// ใส่ data แกน Y
$ydata = [];
$target = [];
for ($i = 0; $i < count($tbldata); $i++) {
    $xname[] = $tbldata[$i]['company'];
    $ydata[] = (int) $tbldata[$i]['qty'];
    $target[] = (int) $tbldata[$i]['target'];
}
/*
$xcategories = implode("','", $xname);
$yseries = implode(",", $ydata);
*/
$xsend = json_encode($xname);
$ysend = json_encode($ydata);
$base = json_encode($target);

$this->registerJs("
    var objchart=$('#chart1');
    gen_combin(objchart,$base,$xsend,$ysend);
");
?>

