<?php

use backend\models\Courses;
use backend\models\User;
use common\models\Message;
use common\models\Order;
use common\models\OrderItem;
use common\models\Rejalar;
use common\models\Shop;
use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'Dashboard';
$this->params['title'] = 'dashboard';
$order_item = Order::find()->orderBy('created_at DESC')->limit(10)->all();
$products10 = Shop::find()->orderBy('created_at DESC')->limit(10)->all();

$users = User::find()->all();
$usersCount =count($users);

$product = Shop::find()->all();
$productsCount =count($product);

$Courses = Courses::find()->all();
$CoursesCount =count($Courses);

$events0 = Rejalar::find()->where(['>','hour',time()])->all();
$rejalarCount  = count($events0);


$messages = Message::find()->orderBy('created_at DESC')->limit(10)->all();

?>
<div class="row">

    <div class="clearfix visible-sm-block"></div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
            <div class="info-box-content">
                <a href="<?=url::to(['shop/index'])?>" class="info-box-text">Maxsulotlar</a>
                <span class="info-box-number"><?=$productsCount?></span>
            </div>

        </div>

    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
            <div class="info-box-content">
                <a href="<?=url::to(['user/index'])?>" class="info-box-text">Azolar</a>
                <span class="info-box-number"><?=$usersCount?></span>
            </div>
        </div>
    </div>


    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-window-restore"></i></span>
            <div class="info-box-content">
                <a href="<?=url::to(['courses/index'])?>" class="info-box-text">Kurslar</a>
                <span class="info-box-number"><?=$CoursesCount?></span>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-gray"><i class="fa fa-bullhorn"></i></span>
            <div class="info-box-content">
                <a href="<?=url::to(['rejalar/index'])?>" class="info-box-text">Yangi rejalar</a>
                <span class="info-box-number"><?=$rejalarCount?></span>
            </div>
        </div>
    </div>

</div>


<div class="row">

    <div class="col-md-8">


        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Eng so'nggi buyurtmalar</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                            class="fa fa-times"></i></button>
                </div>
            </div>

            <div class="box-body">
                <div class="table-responsive">
                    <table class="table no-margin">

                        <tr>
                            <th>Order ID</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Buyutma vaqti</th>
                        </tr>
                        <?php 
    foreach($order_item as $order){ 
    // $sum +=$order->sum* $order->count;
    // $count +=$order->count;

    ?>
                        <tr>
                            <td><?=Html::a($order->id,url::to(['order/view','id'=>$order->id]))?></td>
                            <td><?=Html::a($order->first_name,url::to(['order/view','id'=>$order->id]))?></td>
                            <td><?=($order->status==1)?"<span class='label label-success'>Success<span>":"<span class='label label-danger'>expected<span>";?>
                            </td>
                            <td><?=date('d-M Y H:i',$order->created_at)?></td>
                        </tr>
                        <?php }?>


                    </table>

                </div>

            </div>

            <div class="box-footer clearfix">
                <a href="<?=url::to(['order/index'])?>" class="btn btn-sm btn-default btn-flat pull-right">View All
                    Orders</a>
            </div>

        </div>

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Kelgan buyurtmalar</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                            class="fa fa-times"></i></button>
                </div>
            </div>

            <div class="box-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Name
                            </th>
                            <th>Email</th>
                        </tr>

                        <?php $i=0; foreach ($messages as $mess){ $i++?>
                            <tr>
                                <td><?=$i?></td>
                                <td><?=html::a($mess->name,url::to(['message/view','id'=>$mess->id]))?></td>
                                <td><?=$mess->email?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <div class="col-md-4">




        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Yaqinda qo'shilgan mahsulotlar</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                            class="fa fa-times"></i></button>
                </div>
            </div>

            <div class="box-body">
                <ul class="products-list product-list-in-box">
                    <?php foreach($products10 as $pro){?>
                    <li class="item">
                        <div class="product-img">
                            <img src="<?=url::to('@web/images/shop/'.$pro->img)?>" alt="Product Image">
                        </div>
                        <div class="product-info">
                            <a href="<?=url::to(['shop/view','id'=>$pro->id])?>" class="product-title"><?=$pro->title?>
                                <span class="label label-warning pull-right">$<?=$pro->price?></span></a>
                            <span class="product-description">
                                <?=substr($pro->content,0,30)?>
                            </span>
                        </div>
                    </li>
                    <?php } ?>

                </ul>
            </div>

            <div class="box-footer text-center">
                <a href="<?=url::to(['shop/index'])?>" class="uppercase">View All Products</a>
            </div>

        </div>

    </div>

</div>