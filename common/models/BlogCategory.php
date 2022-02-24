<?php

namespace common\models;

use Yii;


/**
 * This is the model class for table "blog_category".
 *
 * @property int $id
 * @property string $blog_name
 *
 * @property Blogs[] $blogs
 */
class BlogCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog_category';
    }



    public function rules()
    {
        return [
            [['blog_name'], 'required'],
            [['blog_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'blog_name' => 'Blog Name',
        ];
    }

    /**
     * Gets query for [[Blogs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBlogs()
    {
        return $this->hasMany(Blogs::className(), ['category_id' => 'id']);
    }
}
