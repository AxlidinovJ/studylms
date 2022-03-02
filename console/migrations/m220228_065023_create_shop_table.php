<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%shop}}`.
 */
class m220228_065023_create_shop_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%shop}}', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(),
            'price'=>$this->string(),
            'content'=>$this->text(),
            'category_id'=>$this->integer(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),
            'created_by'=>$this->integer(),
            'updated_by'=>$this->integer(),
        ]);
        $this->createIndex('fk_shop_category_id_index','{{%shop}}','category_id');        
        $this->createIndex('fk_user_name_id_1_index','{{%shop}}','created_by');
        $this->createIndex('fk_user_name_id_2_index','{{%shop}}','updated_by');
        
        $this->addForeignKey('fk_shop_category_id','{{%shop}}','category_id','{{%shop_category}}','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_user_name_id_1_id','{{%shop}}','created_by',"{{%user}}",'id','CASCADE','CASCADE');
        $this->addForeignKey('fk_user_name_id_2_id','{{%shop}}','updated_by',"{{%user}}",'id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_shop_category_id','{{%shop}}');
        $this->dropForeignKey('fk_user_name_id_1_id','{{%shop}}');
        $this->dropForeignKey('fk_user_name_id_2_id','{{%shop}}');
        $this->dropTable('{{%shop}}');
    }
}
