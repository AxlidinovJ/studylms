<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%coment}}`.
 */
class m220226_061315_create_coment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%coment}}', [
            'id' => $this->primaryKey(),
            'category_id'=>$this->integer(),
            'coment_id'=>$this->integer(),
            'reyting'=>$this->integer(),
            'text'=>$this->text(),
            'name'=>$this->string(32),
            'email'=>$this->string(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%coment}}');
    }
}
