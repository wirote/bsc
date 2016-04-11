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

}
