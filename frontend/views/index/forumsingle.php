<?php
$this->title  = "Forum";
$this->params['title'] = $this->title; 
$this->params['breadscrumb'] = $this->title;
?>

<div id="two-columns" class="container">
    <div class="row">
        <!-- content -->
        <section id="content" class="col-xs-12 col-md-9">
            <div class="table-wrap">
                <!-- forum data table -->
                <table class="table forum-data-table tab-full-responsive">
                    <thead class="bg-dark text-uppercase hidden-xs">
                        <tr>
                            <th class="col01">Topic</th>
                            <th class="col02">Voices</th>
                            <th class="col03">posts</th>
                            <th class="col04">freshness</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col01" data-title="Topic">
                                <div>
                                    <h4><a href="#">Introduction to Application</a></h4>
                                    <p>started by: John Merly</p>
                                </div>
                            </td>
                            <td class="col02 text-small" data-title="Voices"><span>4</span></td>
                            <td class="col03 text-small" data-title="posts"><span>10</span></td>
                            <td class="col04 text-small" data-title="posts">
                                <div>
                                    <p><time datetime="2011-01-12">10 days ago</time></p>
                                    <p><a href="#" class="text-capitalize">Maddin Smith</a></p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="col01" data-title="Topic">
                                <div>
                                    <h4><a href="#">Features</a></h4>
                                    <p>started by: Tin Cook</p>
                                </div>
                            </td>
                            <td class="col02 text-small" data-title="Voices"><span>4</span></td>
                            <td class="col03 text-small" data-title="posts"><span>8</span></td>
                            <td class="col04 text-small" data-title="posts">
                                <div>
                                    <p><time datetime="2011-01-12">1 months ago</time></p>
                                    <p><a href="#" class="text-capitalize">Diane Cook</a></p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="col01" data-title="Topic">
                                <div>
                                    <h4><a href="#">Usage</a></h4>
                                    <p>started by: Chrish John</p>
                                </div>
                            </td>
                            <td class="col02 text-small" data-title="Voices"><span>2</span></td>
                            <td class="col03 text-small" data-title="posts"><span>5</span></td>
                            <td class="col04 text-small" data-title="posts">
                                <div>
                                    <p><time datetime="2011-01-12">2 months ago</time></p>
                                    <p><a href="#" class="text-capitalize">Student</a></p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="col01" data-title="Topic">
                                <div>
                                    <h4><a href="#">Anroid Versions</a></h4>
                                    <p>started by: Diane Cook</p>
                                </div>
                            </td>
                            <td class="col02 text-small" data-title="Voices"><span>50</span></td>
                            <td class="col03 text-small" data-title="posts"><span>10</span></td>
                            <td class="col04 text-small" data-title="posts">
                                <div>
                                    <p><time datetime="2011-01-12">2 months ago</time></p>
                                    <p><a href="#" class="text-capitalize">Birlin Jose</a></p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p>Viewing 4 topics - 1 through 4 (of 4 total)</p>
            <div class="alert alert-warning fw-light">You must be logged in to create new topics</div>
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