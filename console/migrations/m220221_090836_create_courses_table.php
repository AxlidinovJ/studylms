<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%courses}}`.
 */
class m220221_090836_create_courses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%courses}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'category_id' => $this->integer(),
            'instruktor' => $this->string(),
            'star' => $this->integer(),
            'view' => $this->integer(),
            'img' => $this->string(),
            'content' => $this->text(),
            'price' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%courses}}');
    }
}
