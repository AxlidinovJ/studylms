<?php

use backend\models\User;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
$this->params['title'] = 'user';

?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
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
            // 'status',
            [
                'format'=>'html',
                'attribute'=>'status',
                'value'=>function($data){
                    if($data->status==10){
                        return "<a href='".url::to(['site/status','id'=>$data->id])."' title='Aktivsizlantirish' class='text-success bg-primary status'>Aktiv</a>";
                    }else{
                        return "<a href='".url::to(['site/status','id'=>$data->id])."' class='text-success bg-danger status' title='Aktivlashtirish'>Aktiv emas</a>";
                    }
                }
            ],
            // 'created_at',
            [
                'attribute'=>'created_at',
                'value'=>function($data){
                    return date('d-M Y H:i:s',$data->created_at);
                }
            ],
            //'updated_at',
            //'verification_token',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, User $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
<?php
switch ($variable) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}
?>