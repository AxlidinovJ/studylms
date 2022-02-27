<?php

use common\models\Coment;
use yii\helpers\Url;
$comentsCount2 = Coment::find()->where(['category_id'=>2])->andWhere(['coment_id'=>$model->id])->all();
$comentsCount = count($comentsCount2);
?>

<article class="blogPost">
    <time datetime="2011-01-12" class="timeStamp font-lato text-center text-uppercase">
        <strong class="date fw-normal element-block"><?=date('d',$model->created_at)?></strong>
        <span class="element-block"><?=date('M',$model->created_at)?></span>
        <span class="element-block"><?=date('Y',$model->created_at)?></span>
    </time>
    <div class="aligncenter">
        <img src="<?=Url::to("/backend/web/images/blogs/".$model->img)?>" alt="image description">
    </div>
    <h1><?=$model->title?></h1>
    <!-- postActionsInfo -->
    <ul class="list-unstyled postActionsInfo text-uppercase">
        <li><a href="#"><i class="far fa-user icn"></i> by <?=$model->username->name?></a></li>
        <li><a href="#"><i class="far fa-folder icn"></i> <?=$model->category->blog_name?></a></li>
        <li><a href="#"><i class="far fa-comment icn"></i> <?=$comentsCount?> Comments</a></li>
    </ul>
    <p><?=substr($model->content,0,500)?>…</p>
    <a href="<?=Url::to(['/index/blogsingle','id'=>$model->id])?>" class="btn btn-default text-uppercase">Read More</a>
</article>