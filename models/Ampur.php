<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ampur".
 *
 * @property string $ampcode
 * @property string $ampname
 */
class Ampur extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'ampur';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['ampcode'], 'required'],
            [['ampcode'], 'string', 'max' => 4],
            [['ampname'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'ampcode' => 'Ampcode',
            'ampname' => 'Ampname',
        ];
    }

}
