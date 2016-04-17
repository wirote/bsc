<?php

namespace app\controllers;

use Yii;
use app\models\Changwat;
use app\models\Ampur;
use app\models\Tambon;
use yii\data\ArrayDataProvider;

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

    public function actionRpt1() {
        $sql = "
SELECT t.chwcode, t.chwname
, SUM(t.cntm10) as m10, SUM(t.cntm11) as m11, SUM(t.cntm12) as m12, SUM(t.cntm01) as m01
, SUM(t.cntm02) as m02, SUM(t.cntm03) as m03, SUM(t.cntm04) as m04, SUM(t.cntm05) as m05
, SUM(t.cntm06) as m06, SUM(t.cntm07) as m07, SUM(t.cntm08) as m08, SUM(t.cntm09) as m09
, SUM(t.cntm99) as m99
FROM cmidata t
GROUP BY t.chwcode
";
        $data = Yii::$app->db->createCommand($sql)->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $data,
        ]);
        return $this->render('rpt1', [
            'dataProvider' => $dataProvider,
        ]);
    }
}
