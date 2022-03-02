<?php

use yii\helpers\Url;
use yii\bootstrap4\LinkPager;
use yii\widgets\ListView;

$this->title  = "Instructors";
$this->params['title'] = $this->title; 
$this->params['breadscrumb'] = $this->title;

?>


<div id="two-columns" class="container">
    <div class="row">
        <!-- content -->
        <section id="content" class="col-xs-12 col-md-9">

        <?php
        echo ListView::widget([
            'dataProvider' => $blogss,
            'itemView' => 'blog_item',
            'layout' => "<div>{items}</div>\n",
            'itemOptions' => [
                'tag' => false
            ]
        ]);
        ?>

        
            <?php
            echo LinkPager::widget([
                'pagination' => $blogss->pagination,
                'options' => [
                        'class' => 'page-numbers'
                ],
                'disableCurrentPageButton' => true
            ]);
            ?>

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