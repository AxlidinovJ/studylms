    <?php

use yii\helpers\Url;

    $this->title  = "Instructors";
    $this->params['title'] = $this->title; 
    $this->params['breadscrumb'] = $this->title;
    ?>

<section class="container professionals-block">
    <div class="row">
<?php foreach($users as $user):?>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <!-- pro column -->
            <article class="pro-column over text-center">
                <div class="aligncenter">
                    <a href="<?=url::to(['/index/instructorsingle','id'=>$user->id])?>"><img src="<?=Url::to('/backend/web/images/users/'.$user->photo)?>" alt="Steaven Maseri Designer"></a>
                    <div class="caption">
                        <ul class="socail-networks list-unstyled">
                            <li><a href="#" class="facebook"><span class="fab fa-facebook-f"></span></a></li>
                            <li><a href="#" class="twitter"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#" class="google"><span class="fab fa-google-plus-g"></span></a></li>
                        </ul>
                    </div>
                </div>
                <h3 class="fw-normal text-capitalize"><a href="#"><?=$user->name?></a></h3>
                <h4 class="fw-normal text-capitalize">Designer</h4>
                <p>Fundamental parts of medi cal research include cellular and mol lecular biology.</p>
            </article>
        </div>
<?php endforeach;?>
     
    </div>
</section>