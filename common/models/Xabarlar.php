<?php

namespace common\models;

use backend\models\User;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "xabarlar".
 *
 * @property int $id
 * @property string $text
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by
 * @property int $updated_by
 */
class Xabarlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'xabarlar';
    }

   
    public function behaviors()
    {
        return [
          TimestampBehavior::class,
          BlameableBehavior::class
        ];
    }

    public function rules()
    {
        return [
            [['text'], 'required'],
            [['created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['text'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    public function getUserxabar(){
        return $this->hasOne(User::className(),['id'=>'created_by']);
    }

}
