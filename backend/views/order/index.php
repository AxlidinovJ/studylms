<?php

use common\models\Order;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Buyurtmalar';
$this->params['breadcrumbs'][] = $this->title;
$this->params['title'] = 'order';

?>
<div class="order-index box box-success box-body">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <!-- <?= Html::a('Create Order', ['create'], ['class' => 'btn btn-success']) ?> -->
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'first_name',
            'last_name',
            'email:email',
            'phone',
            // 'status',
            [
                'attribute'=>'status',
                'format'=>'html',
                'value'=>function($model){
                    $message = ($model->status==0)?"<a href='".url::to(['order/active','id'=>$model->id])."' class='btn  btn-danger btn-xs'>Qabul qilish</a>":"<a href='".url::to(['order/active','id'=>$model->id])."' class='btn btn-primary btn-xs'>Qabul qilingan</a>";
                    return $message;
                }
            ],
            [
                'class' => ActionColumn::className(),
                'template'=>'{view}{delete}',
                'urlCreator' => function ($action, Order $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
