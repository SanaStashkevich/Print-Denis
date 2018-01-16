<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "callbacks".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property int $status
 */
class Callbacks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'callbacks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'phone'], 'required'],
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 160],
            [['phone'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'status' => 'Status',
        ];
    }
}
