<?php
$this->title = 'Graph5';
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
?>
<div id="chart1"></div>

<?php
$target = 503;
$result = 102;
$persent = 0.00;
if ($target > 0) {
    $persent = $result / $target * 100;
    $persent = number_format($persent, 2);
}
$base = 90;
$this->registerJs("
                        var obj_div=$('#chart1');
                        gen_combin(obj_div,$base,$persent);
                    ");
?>

