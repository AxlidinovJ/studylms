<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%shop_category}}`.
 */
class m220228_065419_create_shop_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%shop_category}}', [
            'id' => $this->primaryKey(),
            'category_name'=>$this->string(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),
            'created_by'=>$this->integer(),
            'updated_by'=>$this->integer(),
        ]);
        $this->createIndex('fk_shop_category_created_by_index','{{%shop_category}}','created_by');
        $this->createIndex('fk_shop_category_updated_by_index','{{%shop_category}}','updated_by');

        $this->addForeignKey('fk_shop_category_created_by','{{%shop_category}}','created_by',"{{%user}}",'id','CASCADE','CASCADE');
        $this->addForeignKey('fk_shop_category_updated_by','{{%shop_category}}','updated_by',"{{%user}}",'id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_shop_category_created_by','{{%shop_category}}');
        $this->dropForeignKey('fk_shop_category_updated_by','{{%shop_category}}');
        $this->dropTable('{{%shop_category}}');
    }
}
