<?php

use common\models\OrderItem;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Order */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
$this->params['title'] = 'order';

$order_item = OrderItem::find()->where(['order_id'=>$model->id])->all();

?>
<div class="order-view box box-success box-body">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'first_name',
            'last_name',
            'email:email',
            'phone',
            // 'status',
            [
                'attribute'=>'status',
                'format'=>'html',
                'value'=>function($model){
                    $message = ($model->status==0)?"<a href='".Url::to(['order/active','id'=>$model->id])."' class='btn btn-danger btn-xs'>Qabul qilish</a>":"<a href='".url::to(['order/active','id'=>$model->id])."' class='btn btn-primary btn-xs'>Qabul qilingan</a>";
                    return $message;
                }
            ],
        ],
    ]) ?>

</div>

<div class="box box-primary box-body">

<table class="table">
        <tr>
            <th>$</th>
            <th>Photo</th>
            <th>Nomi</th>
            <th>Soni</th>
            <th>Puli</th>
            <th>Jami</th>
        </tr>
<?php $n=0; foreach($order_item as $order){ $n++;?>
        <tr>
        <td><?=$n?></td>
        <td><?=\yii\helpers\Html::img(\yii\helpers\Url::to("/backend/web/images/shop/".$order->product->img),['alt'=>"salom",'width'=>'100px'])?></td>
        <td><?=$order->product->title?></td>
        <td><?=$order->count?></td>
        <td><?=$order->price?></td>
        <td><?=$order->sum?></td>
            
        </tr>
<?php }?>


</table>

</div>