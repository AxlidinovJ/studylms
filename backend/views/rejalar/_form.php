<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->params['title'] = 'reja';

use kartik\datetime\DateTimePicker;


?>

<div class="rejalar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subtitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img')->fileInput() ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?php  $model->hour = date('d-m-Y H:i',$model->hour);?>
    <?= $form->field($model, 'hour')->widget(DateTimePicker::className(),[
         'name' => 'datetime_10',
         'options' => ['placeholder' => 'Select operating time ...'],
         // 'convertFormat' => true,
         'pluginOptions' => [
             'format' => 'dd-mm-yyyy hh:ii',
             'startDate' => '01-01-2022 12:00',
             'todayHighlight' => true
         ]
    ])
                         
        ?>

    <?= $form->field($model, 'location')->textarea(['rows' => 6,'placeholder' => "https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24306.81804205967!2d71.7859604!3d40.401046599999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1suz!2s!4v1645591413807!5m2!1suz!2s"]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
