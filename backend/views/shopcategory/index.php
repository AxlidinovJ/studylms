<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ShopCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shop Categories';
$this->params['breadcrumbs'][] = $this->title;
$this->params['title'] = 'shopcategory';

?>
<div class="box box-success box-body">

<div class="shop-category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Shop Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'category_name',
//            'created_at',
//            'updated_at',
//            'created_by',
//            'updated_by',
                [
                    'attribute'=>'created_at',
                    'value'=>function($data){
                        return date('d-M Y H:i',$data->created_at);
                    }
                ],
            [
                'attribute'=>'updated_at',
                'value'=>function($data){
                    return date('d-M Y H:i',$data->updated_at);
                }
            ],
            [
                'attribute'=>'created_by',
                'value'=>function(\common\models\ShopCategory $data){
                    return $data->createdBy->username;
                }
            ],
            [
                'attribute'=>'updated_by',
                'value'=>function( \common\models\ShopCategory $data){
                    return $data->updatedBy->username;
                }
            ],

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \common\models\ShopCategory $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>
</div>
</div>
