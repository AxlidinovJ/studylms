<?php

use common\models\Rejalar;
use yii\helpers\Url;

$events = Rejalar::find()->all();

?>
<section class="upcoming-events-block container">
	<!-- upcoming events list -->
	<ul class="list-unstyled upcoming-events-list">
		<?php foreach($events as $event){ ?>
		<li>
			<div class="alignright">
				<img src="<?=Url::to('/backend/web/photos/'.$event->img)?>" alt="image description">
			</div>
			<div class="alignleft">
				<time datetime="2011-01-12" class="time text-uppercase">
					<strong class="date fw-normal"><?=date('d',$event->hour)?></strong>
					<strong class="month fw-light font-lato"><?=date('F',$event->hour)?></strong>
					<strong class="day fw-light font-lato"><?=date('l',$event->hour)?></strong>
				</time>
			</div>
			<div class="description-wrap">
				<h3 class="list-heading"><a
						href="<?=url::to(["index/eventsingle",'id'=>$event->id])?>"><?=$event->title?></a></h3>
				<address><?=$event->subtitle?></address>
				<a href="<?=url::to(["index/eventsingle",'id'=>$event->id])?>"
					class="btn btn-default text-uppercase">register</a>
			</div>
		</li>
		<?php  } ?>
	</ul>
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