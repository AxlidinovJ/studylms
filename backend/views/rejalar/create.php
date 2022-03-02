<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Rejalar */

$this->title = 'Create Rejalar';
$this->params['breadcrumbs'][] = ['label' => 'Rejalars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-success box-body">

<div class="rejalar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div></div>
