<?php

namespace common\models;

use backend\models\User;
use Yii;

use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;


class Blogs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blogs';
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
            [['title', 'category_id', 'img', 'content'], 'required'],
            [['category_id', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['content'], 'string'],
            [['title', 'img'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => BlogCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'category_id' => 'Category ID',
            'img' => 'Img',
            'content' => 'Content',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(BlogCategory::className(), ['id' => 'category_id']);
    }

    public function getUsername()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }
    public function getUsername2()
    {
        return $this->hasOne(User::className(), ['id' => 'updated_by']);
    }
}
