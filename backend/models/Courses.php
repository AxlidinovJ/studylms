<?php

namespace backend\models;

use app\models\Coursescategory;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\helpers\ArrayHelper;
use yii\behaviors\TimestampBehavior;


class Courses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'courses';
    }

    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            TimestampBehavior::class,
            BlameableBehavior::class
        ]);
    }

    public function rules()
    {
        return [
            [['category_id',  'price'], 'integer'],
            [['content'], 'string'],
            [['category_id', 'price', 'title', 'img','content','instruktor'], 'required'],
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
            'instruktor' => 'Instruktor',
            'star' => 'Star',
            'view' => 'View',
            'img' => 'Img',
            'content' => 'Content',
            'price' => 'Price',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created User ',
            'updated_by' => 'Updated User ',
        ];
    }


    public function getCategory(){
        return $this->hasOne(Coursescategory::class,['id'=>'category_id']);
    }

}
