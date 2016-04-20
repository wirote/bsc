<?php
$kpidata = $dataProvider->getModels();
$y = $kpidata[0]['byear'] - 543 ;
$this->title = 'Final Report1';
$this->params['breadcrumbs'][] = [
    'label' => 'The Final',
    'url' => [
        '/final/index',
        ]
    ];
$this->params['breadcrumbs'][] = [
    'label' => 'Final Report',
    'url' => [
        '/final/kpidata?year='.$y,
        ]
    ];
$this->params['breadcrumbs'][] = $this->title;

use miloschuman\highcharts\Highcharts;
use miloschuman\highcharts\HighchartsAsset;
HighchartsAsset::register($this)->withScripts([
    'highcharts-more',
    'themes/grid',
]);

$target = $kpidata[0]['target'];
$results = $kpidata[0]['result'];
$title = $kpidata[0]['kpiname'];
?>
<div class="panel panel-success">
    <div class="panel-heading">
        <center>
            <?= $kpidata[0]['kpiname'] ?><br /> ปีงบประมาณ <?= $kpidata[0]['byear'] ?>
        </center>
    </div>
    <div class="panel-body">
        <!-- ส่วนแสดงกราฟ -->
        <div id="guage" style="min-width: 310px; max-width: 400px; height: 300px; margin: 0 auto"></div>
        <br />
        <!-- ส่วนแสดงข้อมูล -->
        <table class="table table-responsive table-hover">
            <tr>
                <td>ตัวตั้ง: <?= $kpidata[0]['acol'] ?></td>
                <td style="text-align: right"><?= number_format($kpidata[0]['divide'],0) ?></td>
                <td>ราย</td>
            </tr>
            <tr>
                <td>ตัวหาร: <?= $kpidata[0]['bcol'] ?></td>
                <td style="text-align: right"><?= number_format($kpidata[0]['denom'],0) ?></td>
                <td>ราย</td>
            </tr>
            <tr>
                <td style="text-align: right">ค่าดัชนี (ร้อยละ):</td>
                <td style="text-align: right"><?= number_format($kpidata[0]['result'],2) ?></td>
                <td> </td>
            </tr>
            <tr>
                <td style="text-align: right">ค่าเป้าหมาย (ร้อยละ): </td>
                <td style="text-align: right"><?= number_format($kpidata[0]['target'],2) ?></td>
                <td> </td>
            </tr>
        </table>
        
    </div>
</div>
<?php
$this->registerJs(" 
$(function () {

    $('#guage').highcharts({

        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        credits: {\"enabled\": false},
        title: {
            text: ' '
        },

        pane: {
            startAngle: -90,
            endAngle: 90,
            background: [{
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#FFF'],
                        [1, '#333']
                    ]
                },
                borderWidth: 0,
                outerRadius: '109%'
            }, {
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#333'],
                        [1, '#FFF']
                    ]
                },
                borderWidth: 1,
                outerRadius: '107%'
            }, {
                // default background
            }, {
                backgroundColor: '#DDD',
                borderWidth: 0,
                outerRadius: '105%',
                innerRadius: '103%'
            }]
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
                to: $target,
                color: '#DF5353' // red
            }, {
                from: $target,
                to: 100,
                color: '#55BF3B' // green
            }]
        },

        series: [{
            name: 'ร้อยละ',
            data: [$results],
            tooltip: {
                valueSuffix: ' '
            }
        }]

    });
});
");
?>