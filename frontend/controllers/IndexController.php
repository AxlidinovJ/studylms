<?php

namespace frontend\controllers;

use backend\models\Courses;
use backend\models\User;
use common\models\Rejalar;
use Yii;
use yii\web\Controller;


class IndexController extends Controller
{

    public function actionIndex()
    {
        $courses = Courses::find()->limit(4)->all();
        return $this->render('index',['courses'=>$courses]);
    }


    public function actionCoursesingle($id)
    {
        $this->layout = "main2";
        $courses = Courses::findOne($id);
        return $this->render('coursesingle',['courses'=>$courses]);
    }
    


    public function actionCourseslist()
    {
        $this->layout = "main2";
        $courses = Courses::find()->all();
        return $this->render('courseslist',['courses'=>$courses]);
    }




    public function actionInstructorsingle($id)
    {
        $this->layout = "main2";
        $instruktor = User::findOne($id);
        $courses = Courses::find()->where('instruktor='.$instruktor->id)->all();
        return $this->render('instructorsingle',['instruktor'=>$instruktor,'courses'=>$courses]);
    }


    public function actionEventslist()
    {
        $this->layout = "main2";
        return $this->render('eventslist');
    }

    

    public function actionEventsingle($id)
    {
        $this->layout = "main2";
        $reja = Rejalar::findOne($id);
        return $this->render('eventsingle',['reja'=>$reja]);
    }

    public function actionError()
    {
        $this->layout = "main2";
        return $this->render('error');
    }

    public function actionContact()
    {
        $this->layout = "main2";
        return $this->render('contact');
    }

    public function actionAboutus()
    {
        $this->layout = "main2";
        return $this->render('aboutus');
    }

    public function actionForum()
    {
        $this->layout = "main2";
        return $this->render('forum');
    }

    public function actionForumsingle()
    {
        $this->layout = "main2";
        return $this->render('forumsingle');
    }

    public function actionInstructorslist()
    {
        $this->layout = "main2";
        return $this->render('instructorslist');
    }
    

    public function actionBlog()
    {
        $this->layout = "main2";
        return $this->render('blog');
    }
    public function actionBlogsingle()
    {
        $this->layout = "main2";
        return $this->render('blogsingle');
    }

    public function actionLoginregister()
    {
        $this->layout = "main2";
        return $this->render('loginregister');
    }


    public function actionShop()
    {
        $this->layout = "main2";
        return $this->render('shop');
    }

    public function actionProduct()
    {
        $this->layout = "main2";
        return $this->render('product');
    }

    public function actionCartage()
    {
        $this->layout = "main2";
        return $this->render('cartage');
    }

    public function actionCheckout()
    {
        $this->layout = "main2";
        return $this->render('checkout');
    }

}
