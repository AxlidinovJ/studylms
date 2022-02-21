<?php

use backend\models\Courses;
use common\models\User;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

$this->title = 'Courses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="courses-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Courses', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            // 'category_id',
            [
                'attribute'=>'category_id',
                'value'=>function($data){
                    return $data->category->title;
                }
            ],
            // 'instruktor',
            // 'star',
            //'view',
            'img',
            // 'content:ntext',
            'price',
            // 'created_at',
            [
                'attribute'=>'created_at',
                'value'=>function($data){
                    return date('d-M Y H:i:s',$data->created_at);
                }
            ],
            // 'updated_at',
            [
                'attribute'=>'updated_at',
                'value'=>function($data){
                    return date('d-M Y H:i:s',$data->created_at);
                }
            ],
            // 'created_by',
            [
                'attribute'=>'created_by',
                'value'=>function($data){
                    return User::findOne($data->created_by)->username;
                }
            ],
            // 'updated_by',
            [
                'attribute'=>'updated_by',
                'value'=>function($data){
                    return User::findOne($data->created_by)->username;
                }
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Courses $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
