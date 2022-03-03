<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
$this->params['title'] = $this->title;
?>
<!-- <div class="container">
    <div class="row col-md-10">
            <div class="site-login">
                <h1><?= Html::encode($this->title) ?></h1>

                <p>Please fill out the following fields to login:</p>

                <div class="row">
                    <div class="col-lg-5">
                        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'password')->passwordInput() ?>

                        <?= $form->field($model, 'rememberMe')->checkbox() ?>

                        <div style="color:#999;margin:1em 0">
                            If you forgot your password you can
                            <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                            <br>
                            Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                        </div>

                        <div class="form-group">
                            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
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
                            // 'fieldConfig' => [
                            //     'template' => "\n{beginWrapper}\n{input}\n{error}\n{endWrapper}",
                               
                            // ],
                        ]);  ?>
            <h2>Login Form</h2>
            <div class="form-group">
                <?=$form->field($model,'username', ['options' => ['class' => 'element-block']])->textInput(['placeholder'=>"username *"]);?>
            </div>
            <div class="form-group">
                <?=$form->field($model,'password', ['options' => ['class' => 'element-block']])->passwordInput(['placeholder'=>"password *"]);?>
            </div>

            <div class="form-group">
                <?=$form->field($model,'rememberMe', ['options' => ['class' => 'element-block']])->checkbox();?>
            </div>

            <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</section>