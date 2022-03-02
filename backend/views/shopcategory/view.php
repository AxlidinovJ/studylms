<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ShopCategory */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Shop Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
$this->params['title'] = 'shopcategory';

?>
<div class="box box-success box-body">

<div class="shop-category-view">

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
            'category_name',
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
        ],
    ]) ?>

</div>
</div>