<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%views}}`.
 */
class m220228_035651_create_views_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%views}}', [
            'id' => $this->primaryKey(),
            'category_id'=>$this->integer(),
            'post_id'=>$this->integer(),
            'viewcount'=>$this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%views}}');
    }
}
