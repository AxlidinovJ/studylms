<?php
$this->title  = "Blog singls";
$this->params['title'] = $this->title; 
$this->params['breadscrumb'] = $this->title;
use yii\helpers\Url;
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
                    <li><a href="#"><i class="far fa-comment icn"></i> 3 Comments</a></li>
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
                <aside class="writerAsideInfo bg-gray">
                    <div class="alignleft text-center">
                        <i class="fas fa-user imagePlaceholder text-white"></i>
                    </div>
                    <div class="description-wrap">
                        <h3 class="fw-normal">Written by Swedon Smith</h3>
                        <p>Edison may have been behind the invention of the electric light bulb, but he did not work
                            alone. models and companies have been forged through.</p>
                    </div>
                </aside>
                <h2>2 Comments</h2>
                <!-- commentsList -->
                <ul class="list-unstyled commentsList">
                    <li>
                        <div class="alignleft">
                            <img src="http://placehold.it/80x80" alt="Merry Jhonson">
                        </div>
                        <div class="description-wrap">
                            <h3 class="fw-normal">Merry Jhonson</h3>
                            <time datetime="2011-01-12" class="element-block">December 3, 2015 at 11:08 am </time>
                            <p>Advanced Manufacturing is creating disruption — as well as opportunities — for workers.
                                This infographic explores the implications for the jobs of the future.</p>
                            <a href="#" class="btn btn-default font-lato">Reply</a>
                        </div>
                        <ul class="list-unstyled">
                            <li>
                                <div class="alignleft">
                                    <img src="http://placehold.it/80x80" alt="Swedon Smith">
                                </div>
                                <div class="description-wrap">
                                    <h3 class="fw-normal">Swedon Smith</h3>
                                    <time datetime="2011-01-12" class="element-block">December 3, 2015 at 11:08 am
                                    </time>
                                    <p>Yet innovation doesn’t just bring disruption, but also opportunity.</p>
                                    <a href="#" class="btn btn-default font-lato">Reply</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                <h2>Leave a Comment</h2>
                <!-- commentForm -->
                <form action="#" class="commentForm">
                    <div class="form-group">
                        <label for="YourComment" class="element-block fw-normal font-lato">Your Comment</label>
                        <textarea id="YourComment" class="form-control element-block"></textarea>
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-12 col-sm-4">
                            <label for="n" class="element-block fw-normal font-lato">Name <span
                                    class="required">*</span></label>
                            <input id="n" type="text" class="form-control element-block">
                        </div>
                        <div class="form-group col-xs-12 col-sm-4">
                            <label for="e" class="element-block fw-normal font-lato">Email <span
                                    class="required">*</span></label>
                            <input type="email" id="e" class="form-control element-block">
                        </div>
                        <div class="form-group col-xs-12 col-sm-4">
                            <label for="Website" class="element-block fw-normal font-lato">Website</label>
                            <input type="text" id="Website" class="form-control element-block">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-theme btn-warning text-capitalize font-lato fw-bold">Post
                        Comment</button>
                </form>
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