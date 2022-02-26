<?php

use common\models\BlogCategory;
use phpDocumentor\Reflection\Types\Array_;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->params['title'] = 'blog';


$category = ArrayHelper::map(BlogCategory::find()->all(),'id','blog_name');
?>

<div class="blogs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->label("Categoriya nomi")->dropDownList($category,['prompt'=>"Tanlang"]) ?>

    <?= $form->field($model, 'img')->fileInput() ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
