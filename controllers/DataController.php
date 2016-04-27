<?php

namespace app\controllers;

use yii\data\ArrayDataProvider;

class DataController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionKpi() {
        $sql = " 
SELECT t.kpiname, t.kpidesc, t.acol, t.bcol, t.target
FROM kpi t
";
        $data = \Yii::$app->db->createCommand($sql)->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $data,
        ]);
        
        return $this->render('kpi',[
            'dataProvider'=> $dataProvider
        ]);
    }
}
