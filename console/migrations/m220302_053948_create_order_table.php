<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order}}`.
 */
class m220302_053948_create_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order}}', [
            'id' => $this->primaryKey(),
            'first_name'=>$this->string(),
            'last_name'=>$this->string(),
            'email'=>$this->string(),
            'phone'=>$this->integer(),
            'status'=>$this->integer()->defaultValue(0),
        ]);
        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%order}}');
    }
}
