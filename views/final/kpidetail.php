<?php
$kpidata = $dataProvider->getModels();

$this->title = 'Final Report1';
$this->params['breadcrumbs'][] = [
    'label' => 'The Final',
    'url' => [
        '/final/index',
        ]
    ];
$this->params['breadcrumbs'][] = [
    'label' => 'KPI',
    'url' => [
        '/final/kpi',
        ]
    ];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="panel panel-primary">
    <div class="panel-heading">ตัวชี้วัด</div>
    <div class="panel-body">
        <table class="table table-responsive table-striped">
            <thead>
                <tr class="success">
                    <th style="width: 10%">ชื่อตัวชี้วัด</th>
                    <th><?= $kpidata[0]['kpiname'] ?> </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>คำอธิบาย</td>
                    <td><?= $kpidata[0]['kpidesc'] ?></td>
                </tr>
                <tr>
                    <td>ตัวตั้ง</td>
                    <td><?= $kpidata[0]['acol'] ?></td>
                </tr>
                <tr>
                    <td>ตัวหาร</td>
                    <td><?= $kpidata[0]['bcol'] ?></td>
                </tr>
            </tbody>            
        </table>
    </div>    
</div>


