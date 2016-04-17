<?php

namespace app\controllers;

use yii\db\Query;
use yii\data\ArrayDataProvider;
use yii\data\ActiveDataProvider;
use app\models\Company;

class FrontendController extends \yii\web\Controller {
    

    public function actionIndex() {        
        
        return $this->render('index');
    }

    public function actionArraydata() {
        
        $connection = \Yii::$app->db;        

        $model = $connection->createCommand('SELECT * FROM company');
        $product = $model->queryAll();
        
        /*
        $query->from('product');
        $command = $query->createCommand();
        $product = $model->queryAll();
         */
        
        $dataProvider = new ArrayDataProvider([
            'allModels' => $product,
        ]);
        $param = ['dataProvider'=> $dataProvider];

        return $this->render('findbysql',$param);
    }

    public function actionActivedata1() {
        
        $connection = \Yii::$app->db;
        
        $dataProvider = new ActiveDataProvider([
            'query' => Company::find(),
        ]);
        $param = ['dataProvider'=> $dataProvider];

        return $this->render('findbysql',$param);
    }

    public function actionActivedata2() {
        
        $connection = \Yii::$app->db;

        $query = new Query();
        $query->from('company');
        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $param = ['dataProvider'=> $dataProvider];

        return $this->render('findbysql',$param);
    }

    public function actionKartik1() {
        $sql = " 
SELECT t.hospcode, t.hospname
, SUM(t.cntm10) as m10, SUM(t.cntm11) as m11, SUM(t.cntm12) as m12, SUM(t.cntm01) as m01
, SUM(t.cntm02) as m02, SUM(t.cntm03) as m03, SUM(t.cntm04) as m04, SUM(t.cntm05) as m05
, SUM(t.cntm06) as m06, SUM(t.cntm07) as m07, SUM(t.cntm08) as m08, SUM(t.cntm09) as m09
, SUM(t.cntm99) as m99
FROM cmidata t
WHERE t.chwcode = '70' OR t.chwcode = '71'
GROUP BY t.hospcode
";
        $data = \Yii::$app->db->createCommand($sql)->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $data,
        ]);
        return $this->render('kartik1',[
            'dataProvider'=> $dataProvider
        ]);

    }

}
