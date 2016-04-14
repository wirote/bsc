<?php
$this->title = 'Graph4';
$this->params['breadcrumbs'][] = [
    'label' => 'Graph',
    'url' => [
        '/chart',
        ]
    ];
$this->params['breadcrumbs'][] = $this->title;

?>
<?php
use miloschuman\highcharts\Highcharts;
use miloschuman\highcharts\HighchartsAsset;
HighchartsAsset::register($this)->withScripts([
    'highcharts-more',
    'themes/grid',
    'modules/exporting'
]);

?>
<div class="row">
    <div class="col-md-6">
        <div id="guage1" style="min-width: 310px; max-width: 400px; height: 300px; margin: 0 auto"></div> 
    </div>
    <div class="col-md-6">
        <div id="guage2" style="min-width: 310px; max-width: 400px; height: 300px; margin: 0 auto"></div>
    </div>
</div>
 
<!--
-->
<?php 
$chart_title = "กราฟแสดงค่ามากไม่ผ่าน";
$chart_data = 75;
$chart_title2 = "กราฟแสดงค่าน้อยไม่ผ่าน";
$chart_data2 = 15;
?>
<?php
// start chart
$this->registerJs("
$(function () {
    $('#guage1').highcharts({
        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: '$chart_title'
        },
        credits: {\"enabled\": false},
        pane: {
            startAngle: -90,
            endAngle: 90,
            background: null
        },
        // the value axis
        yAxis: {
            min: 0,
            max: 100,
            minorTickInterval: 'auto',
            minorTickWidth: 1,
            minorTickLength: 10,
            minorTickPosition: 'inside',
            minorTickColor: '#666',
            tickPixelInterval: 30,
            tickWidth: 2,
            tickPosition: 'inside',
            tickLength: 10,
            tickColor: '#666',
            labels: {
                step: 2,
                rotation: 'auto'
            },
            title: {
                text: 'ร้อยละ'
            },
            plotBands: [{
                from: 0,
                to: 40,
                color: '#55BF3B' // green
            }, {
                from: 40,
                to: 80,
                color: '#DDDF0D' // yellow
            }, {
                from: 80,
                to: 100,
                color: '#DF5353' // red
            }]
        },
        series: [{
            name: 'ร้อยละ',
            data: [$chart_data],
            tooltip: {
                valueSuffix: '  '
            }
        }]
    });
    
    $('#guage2').highcharts({
        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: '$chart_title'
        },
        credits: {\"enabled\": false},
        pane: {
            startAngle: -90,
            endAngle: 90,
            background: null
        },
        // the value axis
        yAxis: {
            min: 0,
            max: 100,
            minorTickInterval: 'auto',
            minorTickWidth: 1,
            minorTickLength: 10,
            minorTickPosition: 'inside',
            minorTickColor: '#666',
            tickPixelInterval: 30,
            tickWidth: 2,
            tickPosition: 'inside',
            tickLength: 10,
            tickColor: '#666',
            labels: {
                step: 2,
                rotation: 'auto'
            },
            title: {
                text: 'ร้อยละ'
            },
            plotBands: [{
                from: 0,
                to: 20,
                color: '#DF5353' // red
            }, {
                from: 20,
                to: 100,
                color: '#55BF3B' // green
            }]
        },
        series: [{
            name: 'ร้อยละ',
            data: [$chart_data2],
            tooltip: {
                valueSuffix: '  '
            }
        }]
    });

});
");
//end chart
