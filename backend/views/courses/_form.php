<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\ArrayHelper;
use app\models\Coursescategory;

$category = Coursescategory::find()->all();
$categorys = ArrayHelper::map($category,'id','title');
$this->params['title'] = 'courses';


?>

<div class="courses-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->textInput()->dropDownList($categorys,['prompt'=>'Kategoriyani tanlang']) ?>

    <?= $form->field($model, 'img')->fileInput() ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'duration')->textInput() ?>
    
    <?= $form->field($model, 'hours')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
