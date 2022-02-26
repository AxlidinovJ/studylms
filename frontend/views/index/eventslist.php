<?php

use common\models\Rejalar;
use yii\bootstrap4\LinkPager;
use yii\helpers\Url;
use yii\widgets\ListView;

$this->title  = "Event List";
$this->params['breadcrumbs'][] = $this->title;
$this->params['title'] = $this->title;

?>
<section class="upcoming-events-block container">
	<!-- upcoming events list -->
	

	<?php
		echo ListView::widget([
			'dataProvider' => $events,
			'itemView' => 'events_item',
			'layout' => "<ul class=\"list-unstyled upcoming-events-list\">{items}</ul>\n'",
			'itemOptions' => [
				'tag' => false
			]
		]);
		?>


	</ul>

		
			<?php
			echo LinkPager::widget([
				'pagination' => $events->pagination,
				'options' => [
						'class' => 'page-numbers'
				],
				'disableCurrentPageButton' => true
			]);
			?>
	
</section>