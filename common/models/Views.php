<?php

namespace common\models;

use backend\models\Courses;
use Yii;

/**
 * This is the model class for table "views".
 *
 * @property int $id
 * @property int|null $category_id
 * @property int|null $post_id
 * @property int|null $viewcount
 */
class Views extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'views';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'post_id', 'viewcount'], 'integer'],
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
            'post_id' => 'Post ID',
            'viewcount' => 'Viewcount',
        ];
    }


    public function getCourses(){
        return $this->hasOne(Courses::className(),['id'=>'post_id']);
    }

}
