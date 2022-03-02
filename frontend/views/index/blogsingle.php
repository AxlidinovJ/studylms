<?php
$this->title  = "Blog singls";
$this->params['title'] = $this->title; 
$this->params['breadscrumb'] = $this->title;

use common\models\Coment;
use kartik\rating\StarRating;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\helpers\Url;
$coments = Coment::find()->where(['category_id'=>2])->andWhere(['coment_id'=>$blog->id])->orderBy('created_at DESC')->limit(10)->all();
$comentsCount2 = Coment::find()->where(['category_id'=>2])->andWhere(['coment_id'=>$blog->id])->all();
$comentsCount = count($comentsCount2);
?>

<div id="two-columns" class="container">
    <div class="row">
        <!-- content -->
        <section id="content" class="col-xs-12 col-md-9">
            <!-- blogPost -->
            <article class="blogPost single">
                <div class="aligncenter">
                    <img src="<?=url::to("/backend/web/images/blogs/".$blog->img)?>" alt="image description">
                </div>
                <h1><?=$blog->title?></h1>
                <!-- postActionsInfo -->
                <ul class="list-unstyled postActionsInfo text-uppercase">
                    <li><a href="#"><i class="far fa-clock icn"></i> <time><?=date('d-M Y',$blog->created_at)?></time></a></li>
                    <li><a href="#"><i class="far fa-user icn"></i> by <?=$blog->username->name?></a></li>
                    <li><a href="#"><i class="far fa-folder icn"></i> <?=$blog->category->blog_name?></a></li>
                    <li><a href="#"><i class="far fa-comment icn"></i> <?=$comentsCount?> Comments</a></li>
                </ul>
                <p><?=$blog->content?></p>

                <div class="bookmarkFoot">
                    <div class="bookmarkCol">
                        <p><strong class="title font-lato">Tags:</strong> <a href="#">Education</a>, <a
                                href="#">Learning Management</a></p>
                    </div>
                    <div class="bookmarkCol text-right">
                        <div class="shareWrap">
                            <strong class="title font-lato">Share:</strong>
                            <ul class="socail-networks list-unstyled">
                                <li><a href="#" class="facebook"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#" class="twitter"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#" class="google"><span class="fab fa-google-plus-g"></span></a></li>
                                <li><a href="#"><span class="fas fa-plus"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- writerAsideInfo -->
                <!-- <aside class="writerAsideInfo bg-gray">
                    <div class="alignleft text-center">
                        <i class="fas fa-user imagePlaceholder text-white"></i>
                    </div>
                    <div class="description-wrap">
                        <h3 class="fw-normal">Written by Swedon Smith</h3>
                        <p>Edison may have been behind the invention of the electric light bulb, but he did not work
                            alone. models and companies have been forged through.</p>
                    </div>
                </aside> -->
                <h2><?=$comentsCount?> Comments</h2>
                <!-- commentsList -->
                <ul class="list-unstyled commentsList">
                    					
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
                <h2>Leave a Comment</h2>
                <!-- commentForm -->
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
        </section>
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
            <!-- widget popular posts -->
            <section class="widget widget_popular_posts">
                <h3>Latest Posts</h3>
                <!-- widget cources list -->
                <ul class="widget-cources-list list-unstyled">
                    <li>
                        <a href="blog-single.html">
                            <div class="alignleft">
                                <img src="http://placehold.it/80x70" alt="image description">
                            </div>
                            <div class="description-wrap">
                                <h4>11 Times Old Furniture Gained New Life</h4>
                                <time datetime="2011-01-12" class="text-gray element-block">Mar 05,2017</time>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="blog-single.html">
                            <div class="alignleft">
                                <img src="http://placehold.it/80x70" alt="image description">
                            </div>
                            <div class="description-wrap">
                                <h4>How To Decorate With Modern Kitchen</h4>
                                <time datetime="2011-01-12" class="text-gray element-block">Mar 05,2017</time>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="blog-single.html">
                            <div class="alignleft">
                                <img src="http://placehold.it/80x70" alt="image description">
                            </div>
                            <div class="description-wrap">
                                <h4>New Quality Modern House Renovation Trend</h4>
                                <time datetime="2011-01-12" class="text-gray element-block">Mar 05,2017</time>
                            </div>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- widget categories -->
            <section class="widget widget_categories">
                     <?php
							include_once "categoryfunc.php";
						?>
            </section>
            <!-- widget intro -->
            <section class="widget widget_intro">
                <h3>Course Intro</h3>
                <div class="aligncenter overlay">
                    <a href="http://www.youtube.com/embed/9bZkp7q19f0?autoplay=1"
                        class="btn-play far fa-play-circle lightbox fancybox.iframe"></a>
                    <img src="http://placehold.it/262x220" alt="image description">
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
            <!-- widget archives -->
            <section class="widget widget_archives">
                <h3>Archives</h3>
                <select data-placeholder="Select Month" class="chosen-select-no-single" style="display: none;">
                    <option value="0">Select Month</option>
                    <option value="0">Select Month</option>
                    <option value="0">Select Month</option>
                </select>
                <div class="chosen-container chosen-container-single chosen-container-single-nosearch" title=""
                    style="width: 720px;"><a class="chosen-single chosen-default">
                        <span>Select Month</span>
                        <div><b></b></div>
                    </a>
                    <div class="chosen-drop">
                        <div class="chosen-search">
                            <input class="chosen-search-input" type="text" autocomplete="off" readonly="">
                        </div>
                        <ul class="chosen-results"></ul>
                    </div>
                </div>
            </section>
        </aside>
    </div>
</div>