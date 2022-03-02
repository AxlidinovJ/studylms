<?php

use common\models\Rejalar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RejalarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rejalars';
$this->params['breadcrumbs'][] = $this->title;
$this->params['title'] = 'reja';

?>
<div class="box box-success box-body">

<div class="rejalar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rejalar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'title',
            'subtitle',
            'img',
            // 'content:ntext',
            [
                'attribute'=>'content',
                'value'=>function($data){
                    return substr($data->content,0, 100);
                }
            ],
            // 'hour',
            [
                'attribute'=>'hour',
                'format'=>'html',
                'value'=>function($data){
                    $vaqt = $data->hour;
                    if($vaqt>=time()){
                        return '<span class="bg-primary">'.date('d-m-Y H:i:s',$data->hour)."</span>";
                    }else{
                        return '<span class="bg-danger">'.date('d-m-Y H:i:s',$data->hour)."</span>";
                    }
                }
            ],
            //'location:ntext',
            //'user_id',
            //'created_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Rejalar $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
</div>