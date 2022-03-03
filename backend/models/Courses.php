<?php

namespace backend\models;

use app\models\Coursescategory;
use common\models\User;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\helpers\ArrayHelper;
use yii\behaviors\TimestampBehavior;

    


class Courses extends \yii\db\ActiveRecord
{
   

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
            [['content','duration','hours'], 'string'],
            [['category_id','duration','price', 'title', 'img','content','instruktor'], 'required'],
        ];
    }

    const CREATED_COURSES = 'created';
    const UPDATED_COURSES = 'updated';
    
    public function scenarios()
    {
        return [
            self::CREATED_COURSES =>['category_id','price','content','duration','hours','img','instruktor','title'],
            self::UPDATED_COURSES =>['category_id','price','content','duration','hours','instruktor','title'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'category_id' => 'Category ID',
            'instruktor' => 'Instruktor',
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
    public function getInstruktor2(){
        return $this->hasOne(User::class,['id'=>'instruktor']);
    }



}
