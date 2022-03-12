<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;


class DashboardController extends DefaultController
{

 

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }


    public function actionIndex()
    {
        
        // if(!Yii::$app->user->can('admin')){
        //     Yii::$app->user->logout();
        //     return $this->goHome();
        // }

        return $this->render('index');
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    
}
