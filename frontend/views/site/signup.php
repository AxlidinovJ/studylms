<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
$this->params['title'] = $this->title;

?>
<!-- <div class="container">
    <div class="row col-md-10">
        <div class="site-signup">
            <h1><?= Html::encode($this->title) ?></h1>

            <p>Please fill out the following fields to signup:</p>

            <div class="row">
                <div class="col-lg-5">
                    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <div class="form-group">
                        <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div> -->


<section class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <?php  $form = ActiveForm::begin([
                            'options'=>[
                                'class'=>'user-log-form',
                            ],
                            'fieldConfig' => [
                                'template' => "\n{beginWrapper}\n{input}\n{error}\n{endWrapper}",
                               
                            ],
                        ]);  ?>
            <h2>Register  Form</h2>
            <div class="form-group">
                <?=$form->field($model,'username', ['options' => ['class' => 'element-block']])->textInput(['placeholder'=>"username *"]);?>
            </div>
            <div class="form-group">
                <?=$form->field($model,'email', ['options' => ['class' => 'element-block']])->textInput(['placeholder'=>"email *"]);?>
            </div>
            <div class="form-group">
                <?=$form->field($model,'password', ['options' => ['class' => 'element-block']])->passwordInput(['placeholder'=>"password *"]);?>
            </div>


            <div class="form-group">
                <?= Html::submitButton('Sign up', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</section>