<?php

use yii\bootstrap4\Html;
use yii\helpers\Url;

?>

<div class="col-xs-12 col-sm-6 col-lg-4 col-md-6">
    <!-- product module -->
    <article class="product-module">
        <div class="aligncenter">
            <a href="<?=Url::to(['index/product','id'=>$model->id])?>"><?=Html::img(url::to("/backend/web/images/shop/".$model->img),['alt'=>"salom"])?></a>
        </div>
        <h3 class="fw-semi"><a href="<?=url::to(['index/product','id'=>$model->id])?>"><?=$model->title?></a></h3>
        <ul class="star-rating list-unstyled">
            <li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
            <li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
            <li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
            <li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
            <li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
        </ul>
        <strong class="price element-block fw-semi">$<?=$model->price?></strong>
        <a href="<?=url::to(['card/add','id'=>$model->id])?>"  data-id="<?=$model->id?>" class="btn btn-default font-lato text-uppercase card">Add to cart</a>
    </article>
</div>