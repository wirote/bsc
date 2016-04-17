<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "changwat".
 *
 * @property string $chwcode
 * @property string $chwname
 * @property string $ampcode
 * @property string $tmbcode
 */
class Changwat extends \yii\db\ActiveRecord {
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'changwat';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['chwcode'], 'required'],
            [['chwcode', 'ampcode'], 'string'],
            [['chwname'], 'string', 'max' => 50],
            [['tmbcode'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'chwcode' => 'รหัสจังหวัด',
            'chwname' => 'จังหวัด',
            'ampcode' => 'อำเภอ',
            'tmbcode' => 'ตำบล',
        ];
    }

    public function getChwList() {
        $list = Changwat::find()->orderBy('chwname')->all();
        return ArrayHelper::map($list, 'chwcode', 'chwname');
    }

}
