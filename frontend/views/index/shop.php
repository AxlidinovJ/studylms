<?php
$this->title  = "Forum";
$this->params['breadcrumbs'][] = $this->title;
$this->params['title'] = $this->title;

use yii\bootstrap4\LinkPager;
use yii\helpers\Url;
use yii\widgets\ListView;

?>
<div id="two-columns" class="container">
    <div class="row">
        <!-- content -->
        <article id="content" class="col-xs-12 col-md-9">
            <!-- show head -->
            <header class="show-head">
                <p>Showing 1–9 of 15 results</p>
                <select class="chosen-select-no-single" style="display: none;">
                    <option value="0">Default Sorting</option>
                    <option value="0">Default Sorting</option>
                    <option value="0">Default Sorting</option>
                    <option value="0">Default Sorting</option>
                </select>
                <div class="chosen-container chosen-container-single chosen-container-single-nosearch" title=""
                    style="width: 190px;"><a class="chosen-single">
                        <span>Default Sorting</span>
                        <div><b></b></div>
                    </a>
                    <div class="chosen-drop">
                        <div class="chosen-search">
                            <input class="chosen-search-input" type="text" autocomplete="off" readonly="">
                        </div>
                        <ul class="chosen-results"></ul>
                    </div>
                </div>
            </header>
            <div class="row flex-wrap">
            <?php
            
            echo ListView::widget([
                'dataProvider'=>$dataProvider,
                'itemView'=>'shop_item',
                'layout' => "<span>{items}</span>\n",
								'itemOptions' => [
									'tag' => false
                                ],
            ]);
            
            ?>                
            </div>
           <?php
           
           echo LinkPager::widget([
               'pagination'=>$dataProvider->pagination,
           ])
           
           ?>
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
                    <div id="slider-range"
                        class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                        <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 2.8%; width: 4.2%;">
                        </div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                            style="left: 2.8%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all"
                            tabindex="0" style="left: 7%;"></span>
                    </div>
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