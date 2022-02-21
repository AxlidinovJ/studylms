<?php

use app\models\Coursescategory;
use yii\helpers\Url;
$this->title = "Cours list";
$this->params['breadcrumbs'][] = $this->title;
$categorys = Coursescategory::find()->all();
$this->params['title'] = $this->title;
?>

<div id="two-columns" class="container">
				<div class="row">
					<!-- content -->
					<article id="content" class="col-xs-12 col-md-9">
						<!-- show head -->
						<header class="show-head">
							<p> Showing 1–9 of 15 results</p>
							<select  class="chosen-select-no-single">
								<?php foreach($categorys as $categry){ ?>
								<option value="<?=$categry->id?>"><?=$categry->title?></option>
								<?php } ?>
							</select>
						</header>
						<div class="row flex-wrap">
							<?php foreach($courses as $cours){?>
							<div class="col-xs-12 col-sm-6 col-lg-4">
								<!-- popular post -->
								<article class="popular-post">
									<div class="aligncenter">
										<img src="<?=Url::to("/backend/web/photos/".$cours->img)?>" alt="image description">
									</div>
									<div>
										<strong class="bg-primary text-white font-lato text-uppercase price-tag">$<?=$cours->price?></strong>
									</div>
									<h3 class="post-heading"><a href="<?=url::to(['/index/coursesingle','id'=>$cours->id])?>"><?=$cours->title?></a></h3>
									<div class="post-author">
										<div class="alignleft rounded-circle no-shrink">
											<a href="instructor-single.html"><img src="http://placehold.it/35x35" class="rounded-circle" alt="image description"></a>
										</div>
										<h4 class="author-heading"><a href="instructor-single.html"><?=$cours->instruktor?></a></h4>
									</div>
									<footer class="post-foot gutter-reset">
										<ul class="list-unstyled post-statuses-list">
											<li>
												<a href="#">
													<span class="fas icn fa-users no-shrink"><span class="sr-only">users</span></span>
													<strong class="text fw-normal">98</strong>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="fas icn no-shrink fa-comments"><span class="sr-only">comments</span></span>
													<strong class="text fw-normal">10</strong>
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
							<?php } ?>
						</div>
						<nav aria-label="Page navigation">
							<!-- pagination -->
							<ul class="pagination">
								<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
								<li><a href="#">2</a></li>
								<li>
									<a href="#" aria-label="Next">
										<span aria-hidden="true">&rsaquo;</span>
									</a>
								</li>
							</ul>
						</nav>
					</article>
					<!-- sidebar -->
					<aside class="col-xs-12 col-md-3" id="sidebar">
						<!-- widget search -->
						<section class="widget widget_search">
							<h3>Course Search</h3>
							<!-- search form -->
							<form action="#" class="search-form">
								<fieldset>
									<input placeholder=" Search&hellip;" class="form-control" name="s" type="search">
									<button type="button" class="fas fa-search"><span class="sr-only">search</span></button>
								</fieldset>
							</form>
						</section>
						<!-- widget categories -->
						<?php
							include_once __DIR__.'/categoryfunc.php';
						?>
						<!-- widget intro -->
						<section class="widget widget_intro">
							<h3>Course Intro</h3>
							<div class="aligncenter overlay">
								<a href="http://www.youtube.com/embed/9bZkp7q19f0?autoplay=1" class="btn-play far fa-play-circle lightbox fancybox.iframe"></a>
								<img src="http://placehold.it/262x220" alt="image description">
							</div>
						</section>
						<!-- widget popular posts -->
						<section class="widget widget_popular_posts">
							<h3>Popular Courses</h3>
							<!-- widget cources list -->
							<ul class="widget-cources-list list-unstyled">
								<li>
									<a href="course-single.html">
										<div class="alignleft large">
											<img src="http://placehold.it/80x70" alt="image description">
										</div>
										<div class="description-wrap">
											<h4>Introduction to Mobile Apps Development</h4>
											<strong class="price text-primary element-block font-lato text-uppercase">$99.00</strong>
										</div>
									</a>
								</li>
								<li>
									<a href="course-single.html">
										<div class="alignleft large">
											<img src="http://placehold.it/80x70" alt="image description">
										</div>
										<div class="description-wrap">
											<h4>Become a Professional Film Maker</h4>
											<strong class="price text-success element-block font-lato text-uppercase">Free</strong>
										</div>
									</a>
								</li>
								<li>
									<a href="course-single.html">
										<div class="alignleft large">
											<img src="http://placehold.it/80x70" alt="image description">
										</div>
										<div class="description-wrap">
											<h4>Swift Programming For Beginners</h4>
											<strong class="price text-primary element-block font-lato text-uppercase">$75.00</strong>
										</div>
									</a>
								</li>
							</ul>
						</section>
					</aside>
				</div>
			</div>