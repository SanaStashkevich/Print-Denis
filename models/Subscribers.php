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
            [['email'], 'required', 'message' => 'Введіть Ваш Email'],
            [['status'], 'integer'],
            [['email'], 'string', 'max' => 160],
            [['hash'], 'string', 'max' => 250],
            [['email'], 'unique'],
            [['hash'], 'unique'],
            [['status'], 'default', 'value' => 1],
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

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert) ) {

            $this->hash = Yii::$app->security->generateRandomString(250);

            return true;
        };

        return false;
    }
}
