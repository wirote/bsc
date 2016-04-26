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

    public function actionGraph4() {
        return $this->render('graph4');
    }

    public function actionGraph5() {
        return $this->render('graph5');
    }

    public function actionGraph6() {
        $sql = "
select t.companyid, c.company, count(t.companyid) as cnt, sum(t.qty) as qty, 70 as target
from sale t join company c on t.companyid = c.id
group by t.companyid
";
        $data = \Yii::$app->db->createCommand($sql)->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $data,
        ]);
        return $this->render('graph6',[
            'dataProvider'=>$dataProvider,
        ]);
    }

    public function actionLinechart() {
        $sql = "
select t.hospcode, t.hospname
, t.cntm10, t.cntm11, t.cntm12, t.cntm01, t.cntm02, t.cntm03
, t.cntm04, t.cntm05, t.cntm06, t.cntm07, t.cntm08, t.cntm09
from cmidata t
where t.chwcode = 73
";
        $data = \Yii::$app->db->createCommand($sql)->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $data,
        ]);
        return $this->render('linechart',[
            'dataProvider'=>$dataProvider,
        ]);
    }
    
}
