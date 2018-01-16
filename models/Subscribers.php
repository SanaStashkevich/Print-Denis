<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subscribers".
 *
 * @property int $id
 * @property string $email
 * @property int $status
 * @property string $hash
 */
class Subscribers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subscribers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'hash'], 'required'],
            [['status'], 'integer'],
            [['email'], 'string', 'max' => 160],
            [['hash'], 'string', 'max' => 250],
            [['email'], 'unique'],
            [['hash'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'status' => 'Status',
            'hash' => 'Hash',
        ];
    }
}
