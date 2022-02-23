<?php

use yii\helpers\Url;

$this->title = $name;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="error-page">
    <h2 class="headline text-yellow"> 404</h2>
    <div class="error-content">
        <h3><i class="fa fa-warning text-yellow"></i>Sahifa topilmadi</h3>
        <p>
        Siz qidirgan sahifani topa olmadik.
        Ayni paytda siz <a href="<?=Url::home()?>">boshqaruv paneliga qaytishingiz mumkin</a>
        </p>
        <!-- <form class="search-form">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search">
                <div class="input-group-btn">
                    <button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form> -->
    </div>

</div>