<?php

use common\models\Blogs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BlogsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Blogs';
$this->params['breadcrumbs'][] = $this->title;
$this->params['title'] = 'blog';

?>
<div class="blogs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Blogs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'title',
            // 'category_id',
            [
                'attribute'=>'category_id',
                'value'=>function($data){
                    return $data->category->blog_name;
                }
            ],
            // 'img',
            [
                'attribute'=>'img',
                'format'=>'html',
                'value'=>function($data){
                    return Html::img('/backend/web/images/blogs/'.$data->img,['width'=>'100px']);
                }
            ],
            [
                'value'=>function($data){
                    return html::a("salom", );
                },
                'label'=>"Yuklab olish",
            ],
            // 'content:ntext',
            //'created_at',
            [
                'attribute'=>'created_at',
                'value'=>function($data){
                    return date('d-M Y',$data->created_at);
                }
            ],
            //'updated_at',
            //'created_by',
            [
                'attribute'=>'created_by',
                'value'=>function($data){
                    return $data->username->username;
                }
            ],
            //'updated_by',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Blogs $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
