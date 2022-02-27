<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "coment".
 *
 * @property int $id
 * @property int|null $category_id
 * @property int|null $coment_id
 * @property string|null $text
 * @property string|null $name
 * @property string|null $email
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Coment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'coment';
    }

    public function behaviors()
    {
        return [
          TimestampBehavior::class,
        ];
    }

    public function rules()
    {
        return [
            [['name','text','reyting'],'required'],
            [['category_id', 'coment_id', 'created_at', 'updated_at'], 'integer'],
            ['text', 'string','message'=>"salom"],
            [['name'], 'string', 'max' => 32],
            [['email'], 'email'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'coment_id' => 'Coment ID',
            'text' => 'Text*',
            'name' => 'Name*',
            'email' => 'Email',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
