<?php

namespace app\controllers;

use yii\data\ArrayDataProvider;

class ChartController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionGraph1() {
        return $this->render('graph1');
    }

    public function actionGraph2() {
        return $this->render('graph2');
    }

    public function actionGraph3() {
        $sql = "
select t.companyid, c.company, count(t.companyid) as cnt, sum(t.qty) as qty
from sale t join company c on t.companyid = c.id
group by t.companyid
";
        $data = \Yii::$app->db->createCommand($sql)->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $data,
        ]);
        return $this->render('graph3',[
            'dataProvider'=>$dataProvider,
        ]);
    }

    
}
