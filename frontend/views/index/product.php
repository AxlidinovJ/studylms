<?php

use common\models\Coment;
use common\models\Shop;
use kartik\rating\StarRating;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\helpers\Url;

$this->title  = "Forum";
$this->params['breadcrumbs'][] = $this->title;
$this->params['title'] = $this->title;

$coments = Coment::find()->where(['category_id'=>3])->andWhere(['coment_id'=>$model->id])->orderBy('created_at DESC')->limit(10)->all();
$comentsCount2 = Coment::find()->where(['category_id'=>3])->andWhere(['coment_id'=>$model->id])->all();
$comentsCount = count($comentsCount2);


$product3 = Shop::find()->limit(3)->all();

?>

<div id="two-columns" class="container">
				<div class="row">
					<!-- content -->
					<article id="content" class="col-xs-12 col-md-9">
						<!-- product description column -->
						<div class="product-description-column">
							<div class="alignleft">
							<?=Html::img(url::to("/backend/web/images/shop/".$model->img),['alt'=>"salom"])?>
							</div>
							<div class="descr-wrap">
								<h2><?=$model->title?></h2>
								<!-- reviews wrap -->
								<div class="reviews-wrap">
									<ul class="star-rating list-unstyled">
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
									</ul>
									<strong class="fw-normal font-lato element-block text-small">(<?=$comentsCount ?> Customers reviews)</strong>
								</div>
								<!-- price -->
								<strong class="price element-block fw-semi">$<?=$model->price?></strong>
								<p><?=$model->content?></p>
								<strong class="element-block storage-tag text-success fw-normal font-lato">In stock</strong>
								<!-- query wrap -->
								<div class="query-wrap">
									<div class="quantity">
										<input type="number" class="form-control" min="1" value="1">
									</div>
									<a href="<?=Url::to(['index/cartage','id'=>$model->id])?>" class="btn btn-warning btn-theme font-lato text-uppercase card">Add to cart</a>
								</div>
								<div class="categories-wrap font-lato">
									<p>Category: <a href="#"><?=$model->category->category_name?></a></p>
									<!-- <p>Tags: <a href="#">Pencil</a>, <a href="#">Drawing</a></p> -->
								</div>
							</div>
						</div>
						<!-- pro descr tab list -->
						<ul class="nav nav-tabs pro-descr-tab-list font-roboto" role="tablist">
							<li role="presentation" class="active"><a href="#Reviews" aria-controls="Reviews" role="tab" data-toggle="tab">Reviews (<?=$comentsCount ?>)</a></li>
						</ul>
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="Reviews">
								<h4><?=$comentsCount ?> Reviews for Product</h4>
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

							</div>
						</div>
						<h2>Related Products</h2>
						<div class="row flex-wrap">
						<?php foreach($product3 as $product){?>	
						<div class="col-xs-12 col-sm-4">
								<!-- product module -->
								<article class="product-module">
									<div class="aligncenter">
										<a href="<?=url::to(['index/product','id'=>$product->id])?>">
										<?=Html::img(url::to("/backend/web/images/shop/".$product->img),['alt'=>"salom"])?>
										</a>
									</div>
									<h3 class="fw-semi"><a href="<?=url::to(['index/product','id'=>$product->id])?>"><?=$product->title?></a></h3>
									<ul class="star-rating list-unstyled">
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
									</ul>
									<strong class="price element-block fw-semi">$<?=$product->price?></strong>
									<a href="<?=url::to(['index/cartage','id'=>$product->id])?>" class="btn btn-default font-lato text-uppercase card">Add to cart</a>
								</article>
							</div>
							<?php }?>
	
						</div>
					</article>
					<!-- sidebar -->
					<aside class="col-xs-12 col-md-3" id="sidebar">
						<!-- widget search -->
						<section class="widget widget_search">
							<!-- search form -->
							<form action="#" class="search-form">
								<fieldset>
									<input placeholder=" Search…" class="form-control" name="s" type="search">
									<button type="button" class="fas fa-search"><span class="sr-only">search</span></button>
								</fieldset>
							</form>
						</section>
						<!-- widget categories -->
						<section class="widget widget_categories">
							<?php
							include_once __DIR__.'/categoryfunc.php';
						?>
						</section>
						<!-- pricing filter widget -->
						<section class="widget pricing_filter_widget">
							<h3>Pricing Filter</h3>
							<!-- filter ranger form -->
							<form action="#" class="filter-ranger-form">
								<div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 2.8%; width: 4.2%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 2.8%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 7%;"></span></div>
								<input type="hidden" id="amount1" name="amount1" value="14">
								<input type="hidden" id="amount2" name="amount2" value="35">
								<div class="get-results-wrap">
									<button type="button" class="btn btn-default text-uppercase">Filter</button>
									<p id="amount" class="font-lato">Price Range : $14 - $35</p>
								</div>
							</form>
						</section>
						<!-- widget popular posts -->
						<section class="widget widget_popular_posts">
						<?php
							include_once "populacours.php";
						?>
						</section>
					</aside>
				</div>
			</div>