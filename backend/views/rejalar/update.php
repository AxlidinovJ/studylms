<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Rejalar */

$this->title = 'Update Rejalar: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Rejalars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="box box-success box-body">

<div class="rejalar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
