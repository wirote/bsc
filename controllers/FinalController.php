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
                ->where(['chwcode' => $chwcode])
                ->count();
        $amps = Ampur::find()
                ->where(['chwcode' => $chwcode])
                ->all();
        if ($countAmp > 0) {
            foreach ($amps as $amp) {
                echo "<option value='" . $amp->ampcode . "'>" . $amp->ampname . "</option>";
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
, SUM(t.cntm99) as m99, 0 as target
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

    public function actionKpi() {
        $sql = "
SELECT k.id, k.kpiname, k.kpidesc, k.acol, k.bcol, k.target
FROM kpi k
";
        $data = Yii::$app->db->createCommand($sql)->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $data,
        ]);
        return $this->render('kpi1', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    public function actionKpidetail($id = NULL) {
        $sql = "
SELECT k.id, k.kpiname, k.kpidesc, k.acol, k.bcol, k.target
FROM kpi k
WHERE k.id = $id
";
        
        $data = Yii::$app->db->createCommand($sql)->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $data,
        ]);
        return $this->render('kpidetail', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    public function actionKpidata() {
        if (isset($_REQUEST['year'])) {
            $byear = $_REQUEST['year']+543;
        } else {
            $byear = 0;
        }
        $sql = "
SELECT t.kpiid, t.byear, t.divide, t.denom, t.result
, k.kpiname, k.acol, k.bcol, k.target
FROM kpidata t JOIN kpi k on t.kpiid = k.id
WHERE t.byear = '$byear'
ORDER BY t.kpiid
";
        $data = Yii::$app->db->createCommand($sql)->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $data,
        ]);
        return $this->render('kpidata', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    public function actionKpidatadetail($kpiid, $year) {
        $year = $year+543;
        $sql = "
SELECT t.kpiid, t.byear, t.divide, t.denom, t.result
, k.kpiname, k.acol, k.bcol, k.target
FROM kpidata t JOIN kpi k on t.kpiid = k.id
WHERE t.byear = '$year' and t.kpiid = '$kpiid'
";
        $data = Yii::$app->db->createCommand($sql)->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $data,
        ]);
        return $this->render('kpidatadetail', [
                    'dataProvider' => $dataProvider,
            'sql'=>$sql
        ]);
    }

}
