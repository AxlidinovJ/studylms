<?php

use app\models\Coursescategory;

$categorys = Coursescategory::find()->all();
?>

<section class="widget widget_categories">
    <h3>Course Categories</h3>
    <ul class="list-unstyled text-capitalize font-lato">
        <?php foreach($categorys as $category) {?>
        <li class="cat-item cat-item-1"><a href="#"><?=$category->title?></a></li>
        <?}?>
    </ul>
</section>