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
								<?php 
									$SERVER_NAME = $_SERVER['SERVER_NAME'];
									$REQUEST_URI = $_SERVER['REQUEST_URI'];
									// $url = "https://".$SERVER_NAME."".$REQUEST_URI;
                                    $url = url::to(['/index/instructorsingle','id'=>$user->id]);
									$telegram = "https://telegram.me/share/url?url=".$url;
									$twitter = "https://twitter.com/intent/tweet?url=$url&text=".$this->title;
									$facebook = "https://www.facebook.com/sharer.php?s=100&p[title]=".$this->title."&p[summary]=$SERVER_NAME&p[url]=$url";
								?>
									<li><a href="<?=$facebook?>" target="_blank" class="facebook"><span class="fab fa-facebook-f"></span></a></li>
									<li><a href="<?=$twitter?>"  target="_blank" class="twitter"><span class="fab fa-twitter"></span></a></li>
									<li><a href="<?=$telegram?>" target="_blank" class="telegram"><span class="fab fa-telegram"></span></a></li>
								</ul>
                    </div>
                </div>
                <h3 class="fw-normal text-capitalize"><a href="<?=url::to(['index/instructorsingle','id'=>$user->id])?>"><?=$user->name?></a></h3>
                <!-- <h4 class="fw-normal text-capitalize">Designer</h4> -->
                <p><?=$user->silk?>.</p>
            </article>
        </div>
<?php endforeach;?>
     
    </div>
</section>