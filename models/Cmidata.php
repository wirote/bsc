<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cmidata".
 *
 * @property string $hospcode
 * @property string $hospname
 * @property string $chwcode
 * @property string $chwname
 * @property string $cntm10
 * @property string $adjm10
 * @property string $cntm11
 * @property string $adjm11
 * @property string $cntm12
 * @property string $adjm12
 * @property string $cntm01
 * @property string $adjm01
 * @property string $cntm02
 * @property string $adjm02
 * @property string $cntm03
 * @property string $adjm03
 * @property string $cntm04
 * @property string $adjm04
 * @property string $cntm05
 * @property string $adjm05
 * @property string $cntm06
 * @property string $adjm06
 * @property string $cntm07
 * @property string $adjm07
 * @property string $cntm08
 * @property string $adjm08
 * @property string $cntm09
 * @property string $adjm09
 * @property string $cntm99
 * @property string $adjm99
 */
class Cmidata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cmidata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hospcode'], 'required'],
            [['cntm10', 'adjm10', 'cntm11', 'adjm11', 'cntm12', 'adjm12', 'cntm01', 'adjm01', 'cntm02', 'adjm02', 'cntm03', 'adjm03', 'cntm04', 'adjm04', 'cntm05', 'adjm05', 'cntm06', 'adjm06', 'cntm07', 'adjm07', 'cntm08', 'adjm08', 'cntm09', 'adjm09', 'cntm99', 'adjm99'], 'number'],
            [['hospcode'], 'string', 'max' => 10],
            [['hospname', 'chwname'], 'string', 'max' => 255],
            [['chwcode'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hospcode' => 'Hospcode',
            'hospname' => 'Hospname',
            'chwcode' => 'Chwcode',
            'chwname' => 'Chwname',
            'cntm10' => 'Cntm10',
            'adjm10' => 'Adjm10',
            'cntm11' => 'Cntm11',
            'adjm11' => 'Adjm11',
            'cntm12' => 'Cntm12',
            'adjm12' => 'Adjm12',
            'cntm01' => 'Cntm01',
            'adjm01' => 'Adjm01',
            'cntm02' => 'Cntm02',
            'adjm02' => 'Adjm02',
            'cntm03' => 'Cntm03',
            'adjm03' => 'Adjm03',
            'cntm04' => 'Cntm04',
            'adjm04' => 'Adjm04',
            'cntm05' => 'Cntm05',
            'adjm05' => 'Adjm05',
            'cntm06' => 'Cntm06',
            'adjm06' => 'Adjm06',
            'cntm07' => 'Cntm07',
            'adjm07' => 'Adjm07',
            'cntm08' => 'Cntm08',
            'adjm08' => 'Adjm08',
            'cntm09' => 'Cntm09',
            'adjm09' => 'Adjm09',
            'cntm99' => 'Cntm99',
            'adjm99' => 'Adjm99',
        ];
    }
}
