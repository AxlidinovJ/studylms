<?php

use yii\helpers\Url;

$this->title  = "Instructors";
$this->params['title'] = $this->title; 
$this->params['breadscrumb'] = $this->title;
?>


<div id="two-columns" class="container">
    <div class="row">
        <!-- content -->
        <section id="content" class="col-xs-12 col-md-9">

        <?php foreach($blogs as $blog): ?>
        <article class="blogPost">
                <time datetime="2011-01-12" class="timeStamp font-lato text-center text-uppercase">
                    <strong class="date fw-normal element-block"><?=date('d',$blog->created_at)?></strong>
                    <span class="element-block"><?=date('M',$blog->created_at)?></span>
                    <span class="element-block"><?=date('Y',$blog->created_at)?></span>
                </time>
                <div class="aligncenter">
                    <img src="<?=Url::to("/backend/web/images/blogs/".$blog->img)?>" alt="image description">
                </div>
                <h1><?=$blog->title?></h1>
                <!-- postActionsInfo -->
                <ul class="list-unstyled postActionsInfo text-uppercase">
                <li><a href="#"><i class="far fa-user icn"></i> by <?=$blog->username->name?></a></li>
                    <li><a href="#"><i class="far fa-folder icn"></i> <?=$blog->category->blog_name?></a></li>
                    <li><a href="#"><i class="far fa-comment icn"></i> 3 Comments</a></li>
                </ul>
                <p><?=substr($blog->content,0,500)?>…</p>
                <a href="<?=url::to(['/index/blogsingle','id'=>$blog->id])?>" class="btn btn-default text-uppercase">Read More</a>
            </article>

        <?php endforeach;?>
            
            <nav aria-label="Page navigation">
                <!-- pagination -->
                <ul class="pagination">
                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">2</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">›</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>

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
                <h3>Categories</h3>
                <ul class="list-unstyled text-capitalize font-lato">
                    <li class="cat-item cat-item-1"><a href="#">Business</a></li>
                    <li class="cat-item active cat-item-2"><a href="#">Design</a></li>
                    <li class="cat-item cat-item-3"><a href="#">Programing Language</a></li>
                    <li class="cat-item cat-item-4"><a href="#">Photography</a></li>
                    <li class="cat-item cat-item-5"><a href="#">Language</a></li>
                    <li class="cat-item cat-item-6"><a href="#">Life Style</a></li>
                    <li class="cat-item cat-item-7"><a href="#">IT &amp; Software</a></li>
                </ul>
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
                <h3>Popular Courses</h3>
                <!-- widget cources list -->
                <ul class="widget-cources-list list-unstyled">
                    <li>
                        <a href="course-single.html">
                            <div class="alignleft">
                                <img src="http://placehold.it/60x60" alt="image description">
                            </div>
                            <div class="description-wrap">
                                <h4>Introduction to Mobile Apps Development</h4>
                                <strong
                                    class="price text-primary element-block font-lato text-uppercase">$99.00</strong>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="course-single.html">
                            <div class="alignleft">
                                <img src="http://placehold.it/60x60" alt="image description">
                            </div>
                            <div class="description-wrap">
                                <h4>Become a Professional Film Maker</h4>
                                <strong class="price text-success element-block font-lato text-uppercase">Free</strong>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="course-single.html">
                            <div class="alignleft">
                                <img src="http://placehold.it/80x70" alt="image description">
                            </div>
                            <div class="description-wrap">
                                <h4>Swift Programming For Beginners</h4>
                                <strong
                                    class="price text-primary element-block font-lato text-uppercase">$75.00</strong>
                            </div>
                        </a>
                    </li>
                </ul>
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