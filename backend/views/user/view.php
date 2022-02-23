<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view">

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
            'username',
            // 'type',
            [
                'format'=>'html',
                'attribute'=>'type',
                'value'=>function($data){
                    switch($data->type){
                        case 1:$user = "<span class='text-info bg-primary'>Admin</span>"; break;
                        case 2:$user = "<span class='text-success bg-warning'>Ustoz</span>";break;
                        case 3:$user = "<span class='text-success bg-info'>bola</span>";break;
                        default: "<span class='text-success bg-dark'>Gost</span>";break;
                    }
                    return $user;
                }
            ],
            // 'auth_key',
            // 'password_hash',
            // 'password_reset_token',
            'email:email',
            [
                'format'=>'html',
                'attribute'=>'status',
                'value'=>function($data){
                    return $data->status==10?"<span class='text-success bg-primary'>Aktiv</span>":"<span class='text-success bg-danger'>Aktiv emas<span>";
                }
            ],
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
            // 'verification_token',
        ],
    ]) ?>

</div>
