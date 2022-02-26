<?php

use app\models\Coursescategory;
use yii\helpers\Url;

$categorys = Coursescategory::find()->all();
?>

<section class="widget widget_categories">
    <h3>Course Categories</h3>
    <ul class="list-unstyled text-capitalize font-lato">
        <?php foreach($categorys as $category) {?>
        <li class="cat-item cat-item-1"><a href="<?=Url::to(['index/courseslist','category'=>$category->id])?>"><?=$category->title?></a></li>
        <?}?>
    </ul>
</section>