<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model app\models\Courses */
$this->params['title'] = 'courses';

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="courses-view">

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
            // 'category_id',
            [
                'attribute'=>'category_id',
                'value'=>function($data){
                    return $data->category->title;
                }
            ],
            'instruktor',
            'star',
            'view',
            'img',
            'content:ntext',
            'price',
            // 'created_at',
            // 'updated_at',
            // 'created_user_at',
            // 'updated_user_at',
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
        ],
    ]) ?>

</div>
