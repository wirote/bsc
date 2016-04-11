<?php

namespace app\controllers;

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
}
