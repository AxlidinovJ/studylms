<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Rejalar */
$this->params['title'] = 'reja';

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Rejalars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="box box-success box-body">

<div class="rejalar-view">

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
            'title',
            'subtitle',
            'img',
            'content:ntext',
            // 'hour',
            [
                'attribute'=>'hour',
                'label'=>'Bo\'lish vaqti',
                'value'=>function($model){
                    return date('d-m-Y H:i',$model->hour);
                }
            ],
            'location:ntext',
            'user_id',
            // 'created_at',
            [
                'attribute'=>'created_at',
                'label'=>'Yaratilish vaqti',
                'value'=>function($model){
                    return date('d-m-Y H:i',$model->created_at);
                }
            ],
            [
                'attribute'=>'updated_at',
                'label'=>'Taxrirlanish vaqti',
                'value'=>function($model){
                    return date('d-m-Y H:i',$model->updated_at);
                }
            ],
        ],
    ]) ?>

</div>
</div>