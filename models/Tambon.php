<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tambon".
 *
 * @property string $tmbcode
 * @property string $tmbname
 */
class Tambon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tambon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tmbcode'], 'required'],
            [['tmbcode'], 'string', 'max' => 8],
            [['tmbname'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tmbcode' => 'Tmbcode',
            'tmbname' => 'Tmbname',
        ];
    }
}
