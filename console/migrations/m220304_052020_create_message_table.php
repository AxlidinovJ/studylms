<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%message}}`.
 */
class m220304_052020_create_message_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%message}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(),
            'email'=>$this->string(),
            'message'=>$this->text(500),
            'created_at'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%message}}');
    }
}
