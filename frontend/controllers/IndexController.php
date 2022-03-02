<?php

namespace frontend\controllers;

use backend\models\Courses;
use backend\models\User;
use common\models\Blogs;
use common\models\Coment;
use common\models\Rejalar;
use common\models\Shop;
use common\models\Views;
use frontend\models\ComentForm;
use Yii;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\web\ErrorAction;
use yii\web\NotFoundHttpException;

const COMENT_CATEGORY_COURS = 1;
const COMENT_CATEGORY_BLOG = 2;
consT COMENT_CATEGORY_SHOP = 3;

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
        if (!$courses) {
            throw new NotFoundHttpException();
        } else {
            $coment = new Coment();
            if ($coment->load(Yii::$app->request->post())) {
                $coment->category_id = COMENT_CATEGORY_COURS;
                $coment->coment_id = $id;
                $coment->save();
                return $this->redirect(['coursesingle', 'id' => $courses->id]);
            }


            $view = Views::findOne([
                'post_id' => $id,
                'category_id' => COMENT_CATEGORY_COURS,
            ]);

            if (isset($view)) {
                $view->viewcount += 1;
                $view->save();
            } else {
                $view2 = new Views();
                $view2->category_id = COMENT_CATEGORY_COURS;
                $view2->post_id = $id;
                $view2->viewcount++;
                $view2->save();
            }


            return $this->render('coursesingle', ['courses' => $courses, 'comentModel' => $coment]);
        }
    }
    

    public function actionProduct($id)
    {
        $this->layout = "main2";
        $model = Shop::findOne($id);
        if(!$model){
            throw new NotFoundHttpException();
        }else{
        $coment = new Coment();
        if($coment->load(Yii::$app->request->post())){
            $coment->category_id = COMENT_CATEGORY_SHOP;
            $coment->coment_id  = $id;
            $coment->save();
            return $this->redirect(['product','id' => $model->id]);
        }
            return $this->render('product',['model'=>$model,'comentModel'=>$coment]);
        }
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
        if(!$instruktor){
            throw new NotFoundHttpException();
        }else {
            $courses = Courses::find()->where('instruktor=' . $instruktor->id)->all();
            return $this->render('instructorsingle', ['instruktor' => $instruktor, 'courses' => $courses]);
        }
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
        if(!$reja){
            throw new NotFoundHttpException();
        }else {
            return $this->render('eventsingle', ['reja' => $reja]);
        }
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
        if(!$blog){
            throw new NotFoundHttpException("xatolik",404);
        }else {
            $coment = new Coment();
            if ($coment->load(Yii::$app->request->post())) {

                $coment->category_id = COMENT_CATEGORY_BLOG;
                $coment->coment_id = $id;
                $coment->save();
                return $this->redirect(['blogsingle', 'id' => $blog->id]);
            }
            return $this->render('blogsingle', ['blog' => $blog, 'comentModel' => $coment]);
        }
    }

    public function actionLoginregister()
    {
        $this->layout = "main2";
        return $this->render('loginregister');
    }


    public function actionShop()
    {
        $this->layout = "main2";
        $data  = new ActiveDataProvider([
            'query'=>Shop::find(),
            'pagination'=>[
                'pageSize'=>6,
            ],
        ]);
        return $this->render('shop',['dataProvider'=>$data]);
    }


    public function actionCartage()
    {
        $this->layout = "main2";
        return $this->renderAjax('cartage');
    }



}
