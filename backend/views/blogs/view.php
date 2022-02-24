<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Blogs */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Blogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="blogs-view">

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
            'content:ntext',
            // 'created_at',
            [
                'attribute'=>'created_at',
                'value'=>function($data){
                    return date('d-M Y h:i:s',$data->created_at);
                }
            ],
            // 'updated_at',
            [
                'attribute'=>'updated_at',
                'value'=>function($data){
                    return date('d-M Y H:i:s',$data->updated_at);
                }
            ],
            //'created_by',
            [
                'attribute'=>'created_by',
                'value'=>function($data){
                    return $data->username->username;
                }
            ],
            // 'updated_by',
            [
                'attribute'=>'updated_by',
                'value'=>function($data){
                    return $data->username2->username;
                }
            ],
        ],
    ]) ?>

</div>
