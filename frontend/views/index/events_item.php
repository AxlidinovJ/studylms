<?php

use yii\helpers\Url;

?>
<li>
    <div class="alignright">
        <img src="<?=Url::to('/backend/web/photos/'.$model->img)?>" alt="image description">
    </div>
    <div class="alignleft">
        <time datetime="2011-01-12" class="time text-uppercase">
            <strong class="date fw-normal"><?=date('d',$model->hour)?></strong>
            <strong class="month fw-light font-lato"><?=date('F',$model->hour)?></strong>
            <strong class="day fw-light font-lato"><?=date('l',$model->hour)?></strong>
        </time>
    </div>
    <div class="description-wrap">
        <h3 class="list-heading"><a href="<?=url::to(["index/eventsingle",'id'=>$model->id])?>"><?=$model->title?></a>
        </h3>
        <address><?=$model->subtitle?></address>
        <a href="<?=url::to(["index/eventsingle",'id'=>$model->id])?>"
            class="btn btn-default text-uppercase">register</a>
    </div>
    </li>