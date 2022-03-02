<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
$this->params['title'] = 'xabarlar';

/* @var $this yii\web\View */
/* @var $model common\models\Xabarlar */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Xabarlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="box box-success box-body">

<div class="xabarlar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'text',
            // 'created_at',
            // 'updated_at',
            // 'created_by',
            // 'updated_by',
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
        ],
    ]) ?>

</div>
</div>