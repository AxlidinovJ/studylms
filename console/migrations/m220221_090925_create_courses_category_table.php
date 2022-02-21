<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%courses_category}}`.
 */
class m220221_090925_create_courses_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%courses_category}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%courses_category}}');
    }
}
