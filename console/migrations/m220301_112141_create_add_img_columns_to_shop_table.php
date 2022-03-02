<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%add_img_columns_to_shop}}`.
 */
class m220301_112141_create_add_img_columns_to_shop_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
       $this->addColumn('{{%shop}}','img',$this->string()->after('price'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%shop}}','img');
    }
}
