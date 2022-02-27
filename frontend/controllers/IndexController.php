<?php

namespace frontend\controllers;

use backend\models\Courses;
use backend\models\User;
use common\models\Blogs;
use common\models\Coment;
use common\models\Rejalar;
use frontend\models\ComentForm;
use Yii;
use yii\data\ActiveDataProvider;
use yii\helpers\VarDumper;
use yii\web\Controller;

const COMENT_CATEGORY_COURS = 1;
const COMENT_CATEGORY_BLOG = 2;
// consT COMENT_CATEGORY_COURS = 3;

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
        $coment = new Coment();

        if($coment->load(Yii::$app->request->post())){

            $coment->category_id = COMENT_CATEGORY_COURS;
            $coment->coment_id  = $id;
            $coment->save();
            return $this->redirect(['coursesingle','id' => $courses->id]);
        }
        return $this->render('coursesingle',['courses'=>$courses,'comentModel'=>$coment]);
    }
    


    public function actionCourseslist($s = null,$category='all')
    {
        $this->layout = "main2";
        if($category=='all'){
            $courses = Courses::find()->filterWhere(['like','title',$s]);
        }else{
            $courses = Courses::find()->filterWhere(['like','title',$s])->andfilterwhere(['category_id'=>$category]);
        }
        $courses = new ActiveDataProvider([
            'query' => $courses,
            'pagination' => [
                'pageSize' => 6
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ],
        ]);
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
        $events0 = Rejalar::find()->where(['>','hour',time()]);
        
        $events = new ActiveDataProvider([
            'query' => $events0,
            'pagination' => [
                'pageSize' => 6
            ],
            'sort' => [
                'defaultOrder' => [
                    'hour' => SORT_ASC,
                ]
            ],
        ]);

        return $this->render('eventslist',['events'=>$events]);
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
        $users = User::find()->where('type=2')->orderBy('created_at DESC')->all();
        return $this->render('instructorslist',['users'=>$users]);
    }
    

    public function actionBlog()
    {
        $this->layout = "main2";
        $blogs = Blogs::find();
        $blogss = new ActiveDataProvider([
            'query' => $blogs,
            'pagination' => [
                'pageSize' => 4
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ],
        ]);
        return $this->render('blog',['blogss'=>$blogss]);
    }

    public function actionBlogsingle($id)
    {
        $this->layout = "main2";
        $blog = Blogs::findOne($id);
        $coment = new Coment();
        if($coment->load(Yii::$app->request->post())){

            $coment->category_id = COMENT_CATEGORY_BLOG;
            $coment->coment_id  = $id;
            $coment->save();
            return $this->redirect(['blogsingle','id' => $blog->id]);
        }
        return $this->render('blogsingle',['blog'=>$blog,'comentModel'=>$coment]);
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
