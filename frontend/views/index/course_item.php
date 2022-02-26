<?php

use yii\helpers\Url;

?>
<div class="col-xs-12 col-sm-6 col-lg-4">
    <!-- popular post -->
    <article class="popular-post">
        <div class="aligncenter">
            <img src="<?=Url::to("/backend/web/photos/".$model->img)?>" alt="image description">
        </div>
        <div>
            <strong class="bg-primary text-white font-lato text-uppercase price-tag">$<?=$model->price?></strong>
        </div>
        <h3 class="post-heading"><a href="<?=url::to(['coursesingle','id'=>$model->id])?>"><?=$model->title?></a></h3>
        <div class="post-author">
            <div class="alignleft rounded-circle no-shrink">
                <a href="instructor-single.html"><img src="<?=url::to("/backend/web/images/users/".$model->instruktor2->photo)?>" class="rounded-circle"
                        alt="image description"></a>
            </div>
            <h4 class="author-heading"><a
                    href="<?=url::to(['instructorsingle','id'=>$model->instruktor2->id])?>"><?=$model->instruktor2->name?></a>
            </h4>
        </div>
        <footer class="post-foot gutter-reset">
            <ul class="list-unstyled post-statuses-list">
                <li>
                    <a href="#">
                        <span class="fas icn fa-users no-shrink"><span class="sr-only">users</span></span>
                        <strong class="text fw-normal">98</strong>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="fas icn no-shrink fa-comments"><span class="sr-only">comments</span></span>
                        <strong class="text fw-normal">10</strong>
                    </a>
                </li>
            </ul>
            <ul class="star-rating list-unstyled">
                <li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
                <li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
                <li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
                <li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
                <li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
            </ul>
        </footer>
    </article>
</div>