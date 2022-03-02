<?php

use common\models\Coment;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\helpers\Url;
use kartik\rating\StarRating;

$this->title = $courses->title;
$this->params['breadcrumbs'][] = $courses->category->title;
$this->params['breadcrumbs'][] = $this->title;
$this->params['title'] = $this->title;


$coments = Coment::find()->where(['category_id'=>1])->andWhere(['coment_id'=>$courses->id])->orderBy('created_at DESC')->limit(10)->all();
$comentsCount2 = Coment::find()->where(['category_id'=>1])->andWhere(['coment_id'=>$courses->id])->all();
$comentsCount = count($comentsCount2);

?>

		<div id="two-columns" class="container">
				<div class="row">
					<!-- content -->
					<article	ticle id="content" class="col-xs-12 col-md-9">
						<!-- content h1 -->
						<h1 class="content-h1 fw-semi"><?=$courses->title?></h1>
						<!-- view header -->
						<header class="view-header row">
							<div class="col-xs-12 col-sm-9 d-flex">
								<div class="d-col">
									<!-- post author -->
									<div class="post-author">
										<div class="alignleft no-shrink rounded-circle">
											<a href="<?=url::to(['index/instructorsingle','id'=>$courses->instruktor2->id])?>"><img src="<?=url::to("/backend/web/images/users/".$courses->instruktor2->photo)?>" class="rounded-circle" alt="image description"></a>
										</div>
										<div class="description-wrap">
											<h2 class="author-heading"><a href="<?=url::to(['index/instructorsingle','id'=>$courses->instruktor2->id])?>">Instructor</a></h2>
											<h3 class="author-heading-subtitle text-uppercase"><?=$courses->instruktor2->name?></h3>
										</div>
									</div>
								</div>
								<div class="d-col">
									<!-- post author -->
									<div class="post-author">
										<div class="alignleft no-shrink icn-wrap">
											<i class="far fa-bookmark"></i>
										</div>
										<div class="description-wrap">
											<h2 class="author-heading"><a href="<?=url::to(['index/courseslist','category'=>$courses->id])?>">Category</a></h2>
											<h3 class="author-heading-subtitle text-uppercase"><?=$courses->category->title?></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="rating-holder">
									<ul class="star-rating list-unstyled justify-end">
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
									</ul>
									<strong class="element-block text-right subtitle fw-normal">(<?=$comentsCount?> Reviews)</strong>
								</div>
							</div>
						</header>
						<div class="aligncenter content-aligncenter">
							<img src="<?=Url::to('/backend/web/photos/'.$courses->img)?>" alt="image description">
						</div>
						<?=$courses->content?>

						<!-- bookmarkFoot -->
						<div class="bookmarkFoot">
							<div class="bookmarkCol">
								<ul class="socail-networks list-unstyled">
									<li><a href="#" class="facebook"><span class="fab fa-facebook-f"></span></a></li>
									<li><a href="#" class="twitter"><span class="fab fa-twitter"></span></a></li>
									<li><a href="#" class="google"><span class="fab fa-google-plus-g"></span></a></li>
									<li><a href="#"><span class="fas fa-plus"></span></a></li>
								</ul>
							</div>
							<div class="bookmarkCol text-right">
								<a href="#" class="btn btn-theme btn-warning text-uppercase fw-bold">Bookmark this course</a>
							</div>
						</div>
						<h2>About Instructor</h2>
						<!-- instructorInfoBox -->
						<div class="instructorInfoBox">
							<div class="alignleft">
								<a href="instructor-single.html"><img src="<?=url::to("/backend/web/images/users/".$courses->instruktor2->photo)?>" alt="Merry Jhonson"></a>
							</div>
							<div class="description-wrap">
								<h3 class="fw-normal"><a href="instructor-single.html"><?=$courses->instruktor2->name?></a></h3>
								<h4 class="fw-normal">Back-end Developer</h4>
								<p><?=$courses->instruktor2->biografiya?></p>
								<a href="<?=url::to(['index/instructorsingle','id'=>$courses->instruktor2->id])?>" class="btn btn-default font-lato fw-semi text-uppercase">View Profile</a>
							</div>
						</div>
						<h2>Reviews</h2>
						<h3 class="h6 fw-semi">There are <?=$comentsCount?> reviews on this course</h3>
						<!-- reviewsList -->
						<ul class="list-unstyled reviewsList">
							
							<?php foreach($coments as $coment)	{?>
							<li>
								<div class="alignleft">
									<a href="instructor-single.html"><img src="https://picsum.photos/50/50" alt="Lavin Duster"></a>
								</div>
								<div class="description-wrap">
									<div class="descrHead">
										<h3><?=Html::encode($coment->name)?>– <time datetime="<?=date('d-m-y',$coment->created_at)?>"><?=date('d-M Y H:i:s',$coment->created_at)?></time></h3>
										<ul class="star-rating list-unstyled justify-end">
											<?php for($i=0; $i<$coment->reyting; $i++){?>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<?php } ?>
										</ul>
									</div>
									<p><?=Html::encode($coment->text)?>.</p>
								</div>
							</li>
							<?php } ?>
							
						</ul>
						<!-- reviesSubmissionForm -->
							<?php

							$form = ActiveForm::begin(['options'=>['class'=>'reviesSubmissionForm']]);

							echo '<h2 class="text-noCase">Add a Review</h2>
							<p>Your email address will not be published. Required fields are marked <span class="required">*</span></p>';

							echo $form->field($comentModel, 'reyting')->widget(StarRating::classname(), [
								'pluginOptions' => ['step' => 1]
							]);

							echo $form->field($comentModel,'text')->textarea();
							echo $form->field($comentModel,'name')->textInput();
							echo $form->field($comentModel,'email')->textInput();

							echo Html::SubmitButton("Jo'natish",['class'=>'btn btn-theme btn-warning text-uppercase font-lato fw-bold']);

							ActiveForm::end();

						
						?>

					</article>
					<!-- sidebar -->
					<aside class="col-xs-12 col-md-3" id="sidebar">
						<!-- widget course select -->
						<section class="widget widget_box widget_course_select">	
							<header class="widgetHead text-center bg-theme">
								<h3 class="text-uppercase">Take This Course</h3>
							</header>
							<strong class="price element-block font-lato" data-label="price:"><?=$courses->price?></strong>
							<ul class="list-unstyled font-lato">
								<li><i class="far fa-user icn no-shrink"></i> 199 Students</li>
								<li><i class="far fa-clock icn no-shrink"></i> Duration: <?=$courses->duration?></li>
								<li><i class="fas fa-bullhorn icn no-shrink"></i> Lectures: 10</li>
								<li><i class="far fa-play-circle icn no-shrink"></i> Video: <?=$courses->hours?> hour</li>
								<li><i class="far fa-address-card icn no-shrink"></i> Certificate of Completion</li>
							</ul>
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
								<img src="https://picsum.photos/260/220" alt="image description">
							</div>
						</section>
						<!-- widget popular posts -->
						<section class="widget widget_popular_posts">
						<?php
							include_once "populacours.php";
						?>
						</section>
						<!-- widget tags -->
						<nav class="widget widget_tags">
							<h3>Tags</h3>
							<!-- tag clouds -->
							<ul class="list-unstyled tag-clouds font-lato">
								<li><a href="#">Future</a></li>
								<li><a href="#">Science</a></li>
								<li><a href="#">Coding</a></li>
								<li><a href="#">Education</a></li>
								<li><a href="#">Technology</a></li>
							</ul>
						</nav>
					</aside>
				</div>
			</div>