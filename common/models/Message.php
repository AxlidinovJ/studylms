<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $message
 * @property int|null $created_at
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['message'], 'string'],
            [['created_at'], 'integer'],
            [['name'], 'string', 'max' => 255],
            ['email','email'],
            [['email','message','name'],'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'message' => 'Message',
            'created_at' => 'Created At',
        ];
    }
}
