<?php

namespace app\models;

use backend\models\Courses;
use Yii;

/**
 * This is the model class for table "courses_category".
 *
 * @property int $id
 * @property string|null $title
 */
class Coursescategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'courses_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 255],
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
        ];
    }

    public function getCourses(){
        return $this->hasMany(Courses::class,['category_id'=>'id']);
    }


}
