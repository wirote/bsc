<?php

namespace app\controllers;
use app\models\Changwat;
use app\models\Ampur;
use app\models\Tambon;

class FinalController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionDepdropdown() {
        $model = new Changwat();
        return $this->render('dropdown', [
                'model' => $model,
            ]);
    }

    public function actionAmplist($chwcode) {
        $countAmp = Ampur::find()
                ->where(['chwcode'=>$chwcode])
                ->count();
        $amps = Ampur::find()
                ->where(['chwcode'=>$chwcode])
                ->all();
        if ($countAmp > 0) {
            foreach ($amps as $amp) {
                echo "<option value='".$amp->ampcode."'>".$amp->ampname."</option>" ;
            }
        } else {
            echo "<option> - </option>";
        }
    }
}
