<?php

use common\models\Views;
use yii\helpers\Url;

const COMENT_CATEGORY_COURS = 1;
const COMENT_CATEGORY_BLOG = 2;

$views = Views::find()->orderBy('viewcount DESC')->limit(3)->all();


?>

<h3>Popular Courses</h3>
<!-- widget cources list -->
<ul class="widget-cources-list list-unstyled">
<?php foreach($views as $view){?>
<li>
        <a href="<?=url::to(['index/coursesingle','id'=>$view->courses->id])?>">
            <div class="alignleft large">
                <img src="<?=Url::to("/backend/web/photos/".$view->courses->img)?>" alt="image description">
            </div>
            <div class="description-wrap">
                <h4><?=$view->courses->title;?></h4>
                <strong class="price text-primary element-block font-lato text-uppercase">$<?=$view->courses->price;?></strong>
            </div>
        </a>
    </li>
    
    <?php  } ?>

</ul>

