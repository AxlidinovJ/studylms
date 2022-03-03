<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $email
 * @property int|null $phone
 * @property int|null $status
 *
 * @property OrderItem[] $orderItems
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

     const STATUS_ACTIVE = 1;
     const STATUS_INACTIVE = 0;

    public static function tableName()
    {
        return 'order';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    public function rules()
    {
        return [
            [['phone', 'status','created_at','updated_at'], 'integer'],
            [['first_name', 'last_name', 'email'], 'string', 'max' => 255],
            ['phone', 'string', 'max' => 11,'min'=>7],
            [['first_name','last_name', 'email','phone'],'required'],
            ['email','email'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'status' => 'Status',
            'created_at'=>"Yaratilgam vaqti",
            'updated_at'=>"Taxrirlangan vaqti",
        ];
    }

    /**
     * Gets query for [[OrderItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItems()
    {
        return $this->hasMany(OrderItem::className(), ['order_id' => 'id']);
    }
}
