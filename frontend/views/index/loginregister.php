<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title  = "Instructors";
$this->params['title'] = $this->title; 
$this->params['breadscrumb'] = $this->title;
?>

<section class="container user-log-block">
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <!-- user log form -->
            <?php 
                $form = ActiveForm::begin([
                            'options'=>[
                                'class'=>'user-log-form',
                            ],
                            'fieldConfig' => [
                                'template' => "\n{beginWrapper}\n{input}\n{error}\n{endWrapper}",
                               
                            ],
                ]);
                ?>
                <h2>Login Form</h2>
                <div class="form-group">
                    <?=$form->field($model,'username', ['options' => ['class' => 'element-block']])->textInput(['placeholder'=>"username *"]);?>
                </div>
                <div class="form-group">
                    <?=$form->field($model,'password_hash', ['options' => ['class' => 'element-block']])->passwordInput(['placeholder'=>"Password *"]);?>
                </div>
                <div class="btns-wrap">
                    <div class="wrap">
                       <?=Html::submitButton('Login',['class'=>'btn btn-theme btn-warning fw-bold font-lato text-uppercase','name'=>"login",'value'=>'login'])?>
                    </div>
                </div>
            <?php ActiveForm::end();?>
        

        </div>
        <div class="col-xs-12 col-md-6">
            <!-- user log form -->
            <?php 
                $form = ActiveForm::begin([
                            'options'=>[
                                'class'=>'user-log-form',
                            ],
                            'fieldConfig' => [
                                'template' => "\n{beginWrapper}\n{input}\n{error}\n{endWrapper}",
                               
                            ],
                ]);
                ?>
                <h2>Register Form</h2>
                <div class="form-group">
                    <?=$form->field($model,'username', ['options' => ['class' => 'element-block']])->textInput(['placeholder'=>"username *"]);?>
                </div>
                <div class="form-group">
                    <?=$form->field($model,'email', ['options' => ['class' => 'element-block']])->textInput(['placeholder'=>"email *"]);?>
                </div>
                <div class="form-group">
                    <?=$form->field($model,'password_hash', ['options' => ['class' => 'element-block']])->passwordInput(['placeholder'=>"Password *"]);?>
                </div>
                <div class="btns-wrap">
                    <div class="wrap">
                       <?=Html::submitButton('Register',['class'=>'btn btn-theme btn-warning fw-bold font-lato text-uppercase','name'=>"regster",'value'=>'regster'])?>
                    </div>
                </div>
            <?php ActiveForm::end();?>
        </div>

      

    </div>
</section>