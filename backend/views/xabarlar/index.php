<?php

use common\models\Xabarlar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
$this->params['title'] = 'xabarlar';


/* @var $this yii\web\View */
/* @var $searchModel common\models\XabarlarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Xabarlars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-success box-body">

<div class="xabarlar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Xabarlar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'text',
            // 'created_at',
            // 'updated_at',
            // 'created_by',
            //'updated_by',
            [
                'attribute'=>'created_at',
                'value'=>function($data){
                    return date('d-M Y H:i:s',$data->created_at);
                }
            ], 
            [
                'attribute'=>'updated_by',
                'value'=>function($data){
                    return date('d-M Y H:i:s',$data->updated_at);
                }
            ], 
            [
                'attribute'=>'created_by',
                'format'=>'html',
                'value'=>function($data){
                    return html::a($data->userxabar->username,Url::to(['user/view','id'=>$data->userxabar->id]));
                }
            ],
            [
                'attribute'=>'updated_by',
                'format'=>'html',
                'value'=>function($data){
                    return html::a($data->userxabar->username,Url::to(['user/view','id'=>$data->userxabar->id]));
                }
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Xabarlar $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
</div>