<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "themes".
 *
 * @property integer $id
 * @property string $themes
 * @property string $remark
 * @property string $work
 * @property string $createat
 */
class Themes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'themes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['themes'], 'required'],
            [['remark', 'work'], 'string'],
            [['createat'], 'safe'],
            [['themes'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัส',
            'themes' => 'ชื่อ Themes',
            'remark' => 'หมายเหตุ',
            'work' => 'เลือกทำงาน',
            'createat' => 'วันที่สร้าง',
        ];
    }
}
