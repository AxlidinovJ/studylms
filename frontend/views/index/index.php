
<?php

use app\models\Coursescategory;
use backend\models\Courses;
use backend\models\User;
use common\models\Blogs;
use common\models\Coment;
use yii\helpers\Url;
use common\models\Rejalar;
use common\models\Slider;
use common\models\Xabarlar;

$sliders = Slider::find()->all();
$events = Rejalar::find()->where(['>','hour',time()])->orderBy('hour ASC')->limit(3)->all();
$blogs = Blogs::find()->orderBy('created_at DESC')->limit(3)->all();

$kurslarSoni = count(Courses::find()->all());
$oqituvchilarSoni = count(User::find()->where('type=2')->all());
$oquvchilarSoni = count(User::find()->where('type=3')->all());



?>
<!-- intro block -->
<section class="intro-block">
			<div class="slider fade-slider">
		<?php foreach ($sliders as $slider) { ?>
				<div>
					<!-- intro block slide -->
					<article class="intro-block-slide overlay bg-cover" style="background-image: url(<?=url::to('/backend/web/images/slider/'.$slider->photo)?>);">
						<div class="align-wrap container">
							<div class="align">
								<div class="anim">
									<h1 class="intro-block-heading"><?=$slider->title?></h1>
								</div>
								<div class="anim delay1">
									<p><?=$slider->subtitle?></p>
								</div>
								<div class="anim delay2">
									<div class="btns-wrap">
										<a href="<?=url::to(['index/courseslist'])?>" class="btn btn-warning btn-theme text-uppercase">Our Courses</a>
										<a href="contact.html" class="btn btn-white text-uppercase">Contact us</a>
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
		<?php } ?>
			</div>
			<div class="container">
				<!-- features aside -->
				<aside class="features-aside">
					<a href="#" class="col">
						<span class="icn-wrap text-center no-shrink">
							<img src="images/icon01.svg" width="44" height="43" alt="trophy">
						</span>
						<div class="description">
							<h2 class="features-aside-heading">World’d Best Instructors</h2>
							<span class="view-more element-block text-uppercase">view more</span>
						</div>
					</a>
					<a href="#" class="col">
						<span class="icn-wrap text-center no-shrink">
							<img src="images/icon02.svg" width="43" height="39" alt="computer">
						</span>
						<div class="description">
							<h2 class="features-aside-heading">Learn Courses Onlines</h2>
							<span class="view-more element-block text-uppercase">view more</span>
						</div>
					</a>
					<a href="#" class="col">
						<span class="icn-wrap text-center no-shrink">
							<img src="images/icon03.svg" width="43" height="39" alt="computer">
						</span>
						<div class="description">
							<h2 class="features-aside-heading">Online Library &amp; Store</h2>
							<span class="view-more element-block text-uppercase">view more</span>
						</div>
					</a>
				</aside>
			</div>
		</section>
		<!-- popular posts block -->
		<section class="popular-posts-block container">
			<header class="popular-posts-head">
				<h2 class="popular-head-heading">Most Popular Courses</h2>
			</header>
			<div class="row">
				<!-- popular posts slider -->
				<div class="slider popular-posts-slider">
                    <?php foreach ($courses as $course) {
					$comentsCount2 = Coment::find()->where(['category_id'=>1])->andWhere(['coment_id'=>$course->id])->all();
					$comentsCount = count($comentsCount2);
						?>
					<div>
						<div class="col-xs-12">
							<!-- popular post -->
							<article class="popular-post">
								<div class="aligncenter">
									<img src="<?=url::to("/backend/web/photos/".$course->img)?>" alt="image description">
								</div>
								<div>
									<strong class="bg-primary text-white font-lato text-uppercase price-tag">$<?=$course->price?></strong>
								</div>
								<h3 class="post-heading"><a href="<?=url::to(['coursesingle','id'=>$course->id])?>"><?=$course->title?></a></h3>
								<div class="post-author">
									<div class="alignleft rounded-circle no-shrink">
										<a href="instructor-single.html"><img src="<?=url::to("/backend/web/images/users/".$course->instruktor2->photo)?>" class="rounded-circle" alt="image description"></a>
									</div>
									<h4 class="author-heading"><a href="<?=url::to(['instructorsingle','id'=>$course->instruktor2->id])?>"><?=$course->instruktor2->name?></a></h4>
								</div>
								<footer class="post-foot gutter-reset">
									<ul class="list-unstyled post-statuses-list">
										<li>
											<a href="#">
												<span class="fas icn fa-users no-shrink"><span class="sr-only">users</span></span>
												<strong class="text fw-normal"><.></strong>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fas icn no-shrink fa-comments"><span class="sr-only">comments</span></span>
												<strong class="text fw-normal"><?=$comentsCount?></strong>
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
					</div>
                    <?php } ?>
				</div>
			</div>
		</section>
		<!-- counter aside -->
		<aside class="bg-cover counter-aside" style="background-image: url(<?=url::to("/backend/web/photos/w7HHK_JIOuAzw-_gaDI6TWfojfdDOGag.jpg")?>);">
			<div class="container align-wrap">
				<div class="align">
					<div class="row">
						<!-- <div class="col-xs-12 col-sm-3 col">
							<h2 class="counter-aside-heading">
								<strong class="countdown element-block">150</strong>
								<strong class="text element-block">COUNTRIES REACHED</strong>
							</h2>
						</div> -->
						<div class="col-xs-12 col-sm-4 col">
							<h2 class="counter-aside-heading">
								<strong class="countdown element-block"><?=$oquvchilarSoni?></strong>
								<strong class="text element-block">O'quvchilar soni</strong>
							</h2>
						</div>
						<div class="col-xs-12 col-sm-4 col">
							<h2 class="counter-aside-heading">
								<strong class="countdown element-block"><?=$oqituvchilarSoni?></strong>
								<strong class="text element-block">O'qituvchilar soni</strong>
							</h2>
						</div>
						<div class="col-xs-12 col-sm-4 col">
							<h2 class="counter-aside-heading">
								<strong class="countdown element-block"><?=$kurslarSoni?></strong>
								<strong class="text element-block">Nash qilinga kurslar</strong>
							</h2>
						</div>
					</div>
				</div>
			</div>
		</aside>
		<!-- upcoming events block -->
		<section class="upcoming-events-block container">
			<header class="block-header">
				<div class="pull-left">
					<h2 class="block-header-heading">Kelgusi voqealar</h2>
					<p>Oxirgi va boʻlajak taʼlim tadbirlari bu yerda keltirilgan</p>
				</div>
				<a href="<?=url::to(["index/eventslist"])?>" class="btn btn-default text-uppercase pull-right">KO'PROQ KO'RISH</a>
			</header>
			<!-- upcoming events list -->
			<ul class="list-unstyled upcoming-events-list">
			<?php 
			foreach($events as $event){ ?>
			<li>
					<div class="alignright">
						<img src="<?=url::to('/backend/web/photos/'.$event->img)?>" alt="image description">
					</div>
					<div class="alignleft">
						<time datetime="2011-01-12" class="time text-uppercase">
							<strong class="date fw-normal"><?=date('d',$event->hour)?></strong>
							<strong class="month fw-light font-lato"><?=date('F',$event->hour)?></strong>
							<strong class="day fw-light font-lato"><?=date('l',$event->hour)?></strong>
						</time>
					</div>
					<div class="description-wrap">
						<h3 class="list-heading"><a href="<?=url::to(["index/eventsingle",'id'=>$event->id])?>"><?=$event->title?></a></h3>
						<address><?=$event->subtitle?></address>
						<a href="<?=url::to(["index/eventsingle",'id'=>$event->id])?>" class="btn btn-default text-uppercase">register</a>
					</div>
				</li>
					<?php  } ?>
			</ul>
		</section>
		<!-- course search aside -->
		<aside class="course-search-aside bg-gray">
			<!-- course search form -->
			<form action="<?=url::to(['index/courseslist'])?>" class="container course-search-form">
				<label class="element-block text-center font-lato">Search For Course</label>
				<div class="form-holder">
					<div class="form-row">
						<div class="form-group">
							<select data-placeholder="Category" class="chosen-select-no-single" name='category'>
								<option value="">Hammasi</option>
								<?php 
								$category = Coursescategory::find()->all();
								foreach ($category as $categ) {?>
									<option value="<?=$categ->id?>"><?=$categ->title?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<input type="search" name="s" class="" placeholder="Qidirish" style="border: 0px">
						</div>
					</div>
					<button type="submit" class="btn btn-theme btn-warning no-shrink text-uppercase">Search</button>
				</div>
			</form>
		</aside>
		<!-- categories aside -->
		<aside class="bg-cover categories-aside text-center" style="background-image: url(https://picsum.photos/1920/365);">
			<div class="container holder">
				<!-- categories list -->
				<ul class="list-unstyled categories-list">
					<li>
						<a href="#">
							<div class="align">
								<span class="icn-wrap">
									<img src="images/icon04.svg" width="43" height="43" alt="image description">
								</span>
								<strong class="h h5 element-block text-uppercase">Business</strong>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="align">
								<span class="icn-wrap">
									<img src="images/icon05.svg" width="44" height="48" alt="image description">
								</span>
								<strong class="h h5 element-block text-uppercase">Language</strong>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="align">
								<span class="icn-wrap">
									<img src="images/icon06.svg" width="51" height="42" alt="image description">
								</span>
								<strong class="h h5 element-block text-uppercase">Programming</strong>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="align">
								<span class="icn-wrap">
									<img src="images/icon07.svg" width="51" height="42" alt="image description">
								</span>
								<strong class="h h5 element-block text-uppercase">Film &amp; Video</strong>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="align">
								<span class="icn-wrap">
									<img src="images/icon08.svg" width="51" height="39" alt="image description">
								</span>
								<strong class="h h5 element-block text-uppercase">Photography</strong>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="align">
								<span class="icn-wrap">
									<img src="images/icon09.svg" width="51" height="51" alt="image description">
								</span>
								<strong class="h h5 element-block text-uppercase">Web Design</strong>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</aside>
		<!-- getstarted block -->
		<article class="container getstarted-block">
			<div class="row">
				<div class="col-xs-12 col-md-8 col">
					<div class="alignleft">
						<img src="https://picsum.photos/255/220" alt="image description">
					</div>
					<div class="description-wrap">
						<h2><span class="element-block">Get the coaching training</span><span class="fw-light ttn element-block">1000s of online courses for free</span></h2>
						<p>German final week mother of god grey viverra no computer unlock impossibru. Pikachu grin venenatis cuteness&hellip;</p>
						<a href="#" class="btn btn-default text-uppercase">view details</a>
					</div>
				</div>
				<div class="col-xs-12 col-md-4 col text-center">
					<div class="limit-counter">
						<strong class="title element-block fw-normal">It’s limited seating! Hurry up</strong>
						<div id="defaultCountdown" class="comming-timer"></div>
					</div>
				</div>
			</div>
			<!-- getstarted bar -->
			<aside class="getstarted-bar bg-gray text-center">
				<strong class="h h4 element-block">CREATE AN ACCOUNT TO GET STARTED</strong>
				<a href="#" class="btn btn-theme btn-warning text-uppercase no-shrink">Signin Now</a>
			</aside>
		</article>
		<!-- testimonials block -->
		<section class="testimonials-block text-center bg-gray" style="background-image: url(images/bg-pattern01.png);">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-10 col-sm-offset-1">
						<h2>What People Say</h2>
						<!-- testimonail slider -->
						<div class="slick-slider slider testimonail-slider">
							<?php foreach(Xabarlar::find()->orderBy('created_at DESC')->all() as $xabar){?>
							<div>
								<!-- testimonial quote -->
								<blockquote class="testimonial-quote font-roboto">
									<p>“ <?=$xabar->text?>.”</p>
									<cite class="element-block font-lato">
										<span class="avatar rounded-circle element-block">
											<img class="rounded-circle" src="<?=url::to('/backend/web/images/users/'.$xabar->userxabar->photo)?>" alt="Nethor Doct -Developer">
										</span>
										<strong class="element-block h5 h"><?=$xabar->userxabar->name?> - <span class="text-gray"><?php
										switch ($xabar->userxabar->type) {
											case '1':
												echo "Admin";
												break;
												case '2':
												echo "Ustoz";
												break;
											default:
											echo "O'qubchi";
												break;
										}
										?></span></strong>
									</cite>
								</blockquote>
							</div>

							<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- news block -->
		<section class="news-block container">
			<header class="seperator-head text-center">
				<h2>Recent News</h2>
				<p>Share your work to collaboratve with our vibrant design element.</p>
			</header>
			<div class="row">
				<?php foreach($blogs as $blog){?>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<!-- news post -->
					<article class="news-post">
						<div class="aligncenter">
							<a href="<?=url::to(['index/blogsingle','id'=>$blog->id])?>"><img src="<?=url::to("/backend/web/images/blogs/".$blog->img)?>" alt="image desciption"></a>
						</div>
						<h3><a href="<?=url::to(['index/blogsingle','id'=>$blog->id])?>"><?=$blog->title?></a></h3>
						<!-- <p><?php //substr($blog->content,0,20)?>...</p> -->
						<time datetime="2011-01-12" class="time text-uppercase text-gray"><?=date('d-M Y',$blog->created_at)?> by <a href="<?=url::to(['index/blogsingle','id'=>$blog->id])?>"><?=$blog->username->name?></a></time>
					</article>
				</div>
				<?php } ?>
			
			</div>
		</section>
		<!-- subscription aside block -->
		<aside class="subscription-aside-block bg-theme text-white">
			<!-- newsletter sub form -->
			<form action="#" class="container newsletter-sub-form">
				<div class="row form-holder">
					<div class="col-xs-12 col-sm-6 col">
						<div class="text-wrap">
							<span class="element-block icn no-shrink rounded-circle"><i class="far fa-envelope-open"><span class="sr-only">icn</span></i></span>
							<div class="inner-wrap">
								<label for="email">Signup for Newsletter</label>
								<p>Subscribe now and receive weekly newsletter with new updates.</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col">
						<div class="input-group">
							<input type="email" id="email" class="form-control" placeholder="Enter your email&hellip;">
							<span class="input-group-btn">
								<button class="btn btn-dark text-uppercase" type="button">Submit</button>
							</span>
						</div>
					</div>
				</div>
			</form>
		</aside>