<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order_item}}`.
 */
class m220302_053956_create_order_item_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order_item}}', [
            'id' => $this->primaryKey(),
            'order_id'=>$this->integer(),
            'product_id'=>$this->integer(),
            'count'=>$this->integer(),
            'price'=>$this->integer(),
            'sum'=>$this->integer(),
        ]);

        $this->addForeignKey('fk_order_item_order_id_relction','{{%order_item}}','order_id','{{%order}}','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_order_item_order_id_relction',"{{%order_item}}");

        $this->dropTable('{{%order_item}}');
    }
}
