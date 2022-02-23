<?php

use yii\helpers\Url;

$this->title =  $instruktor->name." - ".$instruktor->username;
$this->params['breadcrumbs'][] = $this->title;
$this->params['title'] = $this->title;
?>

<section class="container instructor-profile-block">
    <div class="row">
        <!-- profiler aside -->
        <aside class="col-xs-12 col-sm-4 col-lg-3 profiler-aside">
            <!-- profile info -->
            <div class="profile-info bg-dark">
                <div class="aligncenter">
                    <img src="<?=Url::to('/backend/web/images/users/'.$instruktor->photo)?>" alt="Lospher Cook">
                </div>
                <dl>
                <dt><i class="fas fa-mobile-alt"></i></dt>
                    
                    <?php
                        $data = explode("\n",$instruktor->telefon);
                        foreach ($data as $dat){
                    ?>
                    <dd><a href="tel:<?=$dat?>"><?=$dat?></a></dd>
                    <?php }?>
                    <dt><i class="far fa-envelope"></i></dt>
                    <dd><a href="mailto:<?=$instruktor->email?>"><?=$instruktor->email?></a></dd>
                </dl>
                <!-- <hr class="sep">
                <ul class="socail-networks list-unstyled">
                    <li><a href="#" class="facebook"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="#" class="twitter"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#" class="google"><span class="fab fa-google-plus-g"></span></a></li>
                    <li><a href="#" class="linkedin"><span class="fab fa-linkedin-in"></span></a></li>
                </ul> -->
            </div>
            <!-- text form -->
            <form action="#" class="text-form">
                <h3 class="text-uppercase">Send Message</h3>
                <div class="form-group">
                    <input type="text" class="form-control element-block" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control element-block" placeholder="Email">
                </div>
                <div class="form-group">
                    <textarea class="form-control element-block" placeholder="Message"></textarea>
                </div>
                <button type="submit" class="btn btn-warning btn-theme font-lato fw-bold text-uppercase">Send
                    Now</button>
            </form>
        </aside>
        <!-- profile desription content -->
        <article class="col-xs-12 col-sm-8 col-lg-9 profile-desription-content">
            <!-- list feature box -->
            <div class="list-feature-box">
                <h3>Qobilyatlari</h3>
                <ul class="list-unstyled listDefault">
                    <?php
                        $data = explode("\n",$instruktor->silk);
                        foreach ($data as $dat){
                    ?>
                    <li><?=$dat?></li>
                    <?php } ?>
                </ul>
            </div>
            <h3>Biografiya</h3>
            <p><?=$instruktor->biografiya?></p>
            <h3 class="content-h3">Yuklagan kurslari</h3>
            <div class="table-wrap">
                <!-- topics data table -->
                <table class="table topics-data-table tab-full-responsive">
                    <thead class="bg-theme text-uppercase hidden-xs">
                        <tr>
                            <th>Kurs nomi</th>
                            <th>Dars nomi</th>
                            <th>MURAKBAKLIK</th>
                            <th>Uzunligi</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                       <?php foreach($courses as $cours){ ?> 
                        <tr>
                            <td data-title="Course Name"><span><?=$cours->category->title?></span></td>
                            <td data-title="Lesson Name"><span><?=$cours->title?></span></td>
                            <td data-title="complexity"><span>standard</span></td>
                            <td data-title="Length"><span><?=$cours->hours?></span></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </article>
    </div>
</section>