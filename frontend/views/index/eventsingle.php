<?php

use yii\helpers\Url;
$this->title =  $reja->title;

$this->params['breadcrumbs'][] = $this->title;
$this->params['title'] = $this->title;
?>

<div id="two-columns" class="container">
	<div class="row">
		<!-- content -->
		<article id="content" class="col-xs-12 col-md-9">
			<!-- visualImageHolder -->
			<div class="aligncenter visualImag	eHolder">
				<img src="<?=Url::to('/backend/web/photos/'.$reja->img)?>" alt="image description">
				<!-- captionAddress -->
				<!-- <address class="captionAddress bg-theme">
					<div class="addressColumn">
						<i class="far fa-clock icn text-white"></i>
						<strong class="title text-uppercase fw-semi element-block">start time :</strong>
						<strong class="fw-normal element-block"><time datetime="2011-01-12">March 01, 2017 AT 8.00
								am</time></strong>
					</div>
					<div class="addressColumn">
						<i class="far fa-flag icn text-white"></i>
						<strong class="title text-uppercase fw-semi element-block">Finish time :</strong>
						<strong class="fw-normal element-block"><time datetime="2011-01-12">March 01, 2017 AT 8.00
								am</time></strong>
					</div>
					<div class="addressColumn">
						<i class="fas fa-map-marker-alt icn text-white"></i>
						<strong class="title text-uppercase fw-semi element-block">Address:</strong>
						<strong class="fw-normal element-block">Peppard Hill, UK</strong>
					</div>
				</address> -->
			</div>
			<h1><?=$reja->title?></h1>
			<h3 class="content-h3">Event Description</h3>
			<p><?=$reja->content?></p>
			<!-- ticketsInfoAside -->
			<aside class="ticketsInfoAside bg-dark">
				<!-- ticketsInfoList -->
				<div id="defaultCountdown" class="comming-timer is-countdown"><span
						class="countdown-row countdown-show3"><span class="countdown-section"><span
								class="countdown-amount">0</span><span class="countdown-period">Hours</span></span><span
							class="countdown-section"><span class="countdown-amount">0</span><span
								class="countdown-period">Minutes</span></span><span class="countdown-section"><span
								class="countdown-amount">0</span><span
								class="countdown-period">Seconds</span></span></span></div>
				<a href="#" class="btn btn-default btn-white text-uppercase fw-bold font-lato">buy tickets</a>
			</aside>
			<h3 class="content-h3">Event Content</h3>
			<!-- eventContentTabsWrap -->
			<!-- <div class="eventContentTabsWrap">
				<ul class="nav nav-tabs no-shrink font-lato" role="tablist">
					<li role="presentation" class="active"><a href="#DiscussAbout" aria-controls="DiscussAbout"
							role="tab" data-toggle="tab">Discuss About</a></li>
					<li role="presentation"><a href="#Participants" aria-controls="Participants" role="tab"
							data-toggle="tab">Participants</a></li>
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade active in" id="DiscussAbout">
						<ul class="list-unstyled listDefault">
							<li>Thomas Edison may have been behind the invention.</li>
							<li>Edison worked alongside partners, both financial and commercial, to get his best
								inventions off the ground,</li>
							<li>Battling challenging cost targets and the need to build.</li>
							<li>Partnership with a supplier or original equipment manufacturer.</li>
						</ul>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="Participants">
						<ul class="list-unstyled listDefault">
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
								incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</li>
							<li>tempor incididunt ut labore et dolore magna aliqua.</li>
							<li>Partnership with a supplier or original equipment manufacturer.</li>
							<li>tempor incididunt ut labore et dolore magna aliqua.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
								incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</li>
						</ul>
					</div>
				</div>
			</div>
			<p>Thomas Edison may have been behind the invention of the electric light bulb, but he did not work Edison
				work along side partners, both financial and commercial, to get his inventions.</p>
			mapHolder -->
			<div class="mapHolder">
				<!-- <span class="mapMarker"><img src="<?=url::to('/images/map-marker.png')?>" alt="marker"></span> -->
				<?=$reja->location?>
			</div>
			<div class="bookmarkFoot">
				<div class="bookmarkCol">
					<p><strong class="title font-lato">Tags:</strong> <a href="#">Online</a>, <a href="#">App
							Developement</a></p>
				</div>
				<div class="bookmarkCol text-right">
					<div class="shareWrap">
						<strong class="title font-lato">Share:</strong>
						<ul class="socail-networks list-unstyled">
								<?php 
									$SERVER_NAME = $_SERVER['SERVER_NAME'];
									$REQUEST_URI = $_SERVER['REQUEST_URI'];
									$url = "https://".$SERVER_NAME."".$REQUEST_URI;
									$telegram = "https://telegram.me/share/url?url=".$url;
									$twitter = "https://twitter.com/intent/tweet?url=$url&text=".$this->title;
									$facebook = "https://www.facebook.com/sharer.php?s=100&p[title]=".$this->title."&p[summary]=$SERVER_NAME&p[url]=$url";
								?>
									<li><a href="<?=$facebook?>" target="_blank" class="facebook"><span class="fab fa-facebook-f"></span></a></li>
									<li><a href="<?=$twitter?>"  target="_blank" class="twitter"><span class="fab fa-twitter"></span></a></li>
									<li><a href="<?=$telegram?>" target="_blank" class="telegram"><span class="fab fa-telegram"></span></a></li>
								</ul>
					</div>
				</div>
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
						<?php
							include_once __DIR__.'/categoryfunc.php';
						?>
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
			<!-- widget archives -->
			<section class="widget widget_archives">
				<h3>Archives</h3>
				<select data-placeholder="Select Month" class="chosen-select-no-single" style="display: none;">
					<option value="0">Select Month</option>
					<option value="0">Select Month</option>
					<option value="0">Select Month</option>
				</select>
				<div class="chosen-container chosen-container-single chosen-container-single-nosearch" title=""
					style="width: 263px;"><a class="chosen-single chosen-default">
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