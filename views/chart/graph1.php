<?php
$this->title = 'Graph1';
$this->params['breadcrumbs'][] = [
    'label' => 'Graph',
    'url' => [
        '/chart',
        ]
    ];
$this->params['breadcrumbs'][] = $this->title;


use miloschuman\highcharts\Highcharts;

echo Highcharts::widget([
   'options' => [
      'title' => ['text' => 'Fruit Consumption'],
      'xAxis' => [
         'categories' => ['Apples', 'Bananas', 'Oranges']
      ],
      'yAxis' => [
         'title' => ['text' => 'Fruit eaten']
      ],
      'series' => [
         ['name' => 'Jane', 'data' => [1, 0, 4]],
         ['name' => 'John', 'data' => [5, 7, 3]]
      ]
   ]
]);
