<?php

namespace frontend\controllers;

use backend\models\Courses;
use Yii;
use yii\web\Controller;


class IndexController extends Controller
{

    public function actionIndex()
    {
        $courses = Courses::find()->all();
        return $this->render('index',['courses'=>$courses]);
    }


    public function actionCourseslist()
    {
        $this->layout = "main2";
        $courses = Courses::find()->all();
        return $this->render('courseslist',['courses'=>$courses]);
    }


    public function actionCoursesingle($id)
    {
        $this->layout = "main2";
        $courses = Courses::findOne($id);
        return $this->render('coursesingle',['courses'=>$courses]);
    }

    public function actionEventslist()
    {
        $this->layout = "main2";
        return $this->render('eventslist');
    }
    
    public function actionEventsingle()
    {
        $this->layout = "main2";
        return $this->render('eventsingle');
    }

    public function actionError()
    {
        $this->layout = "main2";
        return $this->render('error');
    }

}
