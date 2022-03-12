<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;

class DefaultController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                // 'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'allow'=>true,
                        'roles'=>['admin'],
                    ],
                    [
                        'actions'=>['login'],
                        'allow'=>true,
                        'roles'=>["?"],
                    ],
                ],
            ],
        ];
    }

    // public function behaviors()
    // {
    //     return [
    //         'access' => [
    //             'class' => AccessControl::className(),
    //             'only' => ['logout', 'signup'],
    //             'rules' => [
    //                 [
    //                     'actions'=>['index','error'],
    //                     'allow'=>true,
    //                     'roles'=>['admin'],
    //                 ],
    //                 [
    //                     'actions'=>['logout','error'],
    //                     'allow'=>true,
    //                     'roles'=>['@'],
    //                 ],
    //                 [
    //                     'actions'=>['login'],
    //                     'allow'=>true,
    //                     'roles'=>["?"],
    //                 ],
    //             ],
    //         ],
    //         'verbs' => [
    //             'class' => VerbFilter::className(),
    //             'actions' => [
    //                 'logout' => ['post','GET'],
    //                 'delete' => ['POST','GET'],
    //             ],
    //         ],
    //     ];
    // }
    // public function beforeAction($action){            
    //     // if ($action->id == 'delete') {
    //     //     $this->enableCsrfValidation = false;
    //     // }
    //     // return true;

    //     if(Yii::$app->user->can('admin')){
    //         return $this->redirect(['index']);
    //     }else{

    //         return Yii::$app->user->logout();
    //     }

    // }


}