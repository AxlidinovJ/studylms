<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->params['title'] = 'user';

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

   <?="<h2>".$model->name." -  ".$model->username."</h2>";?>

    <?= $form->field($model, 'type')->dropDownList([ 1 => 'Admin', 2 => 'O\'qituvchi', 3 => 'O\'quvchi', ], ['prompt' => 'Birini tanlang']) ?>

    <?= $form->field($model, 'status')->dropDownList([ 9 => 'Aktiv emas', 10 => 'Aktiv', ], ['prompt' => 'Birini tanlang'])  ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
