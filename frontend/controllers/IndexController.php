<?php

namespace frontend\controllers;

use backend\models\Courses;
use backend\models\User;
use common\models\Blogs;
use common\models\Coment;
use common\models\Message;
use common\models\Rejalar;
use common\models\Shop;
use common\models\Views;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
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



    public function actionShop($s = null)
    {
        $this->layout = "main2";
       
        $max = Yii::$app->request->get('max');
        $min = Yii::$app->request->get('min');


        if($max>0 and $min>10 and $max>$min and $max<10000){
            $data  = new ActiveDataProvider([
                'query'=>Shop::find()->where("price>=$min")->andWhere("price<=$max"),
                'pagination'=>[
                    'pageSize'=>6,
                ],
            ]);
        }else{
            $data  = new ActiveDataProvider([
                'query'=>Shop::find()->filterWhere(['like','title',$s]),
                'pagination'=>[
                    'pageSize'=>6,
                ],
            ]);

        }
        

        return $this->render('shop',['dataProvider'=>$data]);
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
        $modal = new Message();
        if($modal->load(Yii::$app->request->post())){
            $modal->created_at = time();
            $modal->save();
            // echo "<pre>";
            // print_r($modal);
            // echo "</pre>";
            Yii::$app->session->setFlash('success',"Murojatingiz qabul qilindi! Tez orada ko`rib chiqladi! Va siz bilan bog`lanamiz");
            return $this->redirect(['index/index']);
        }
        return $this->render('contact',['model'=>$modal]);
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
            $model = new User();
            return $this->render('loginregister',['model'=>$model]);
        }

   


    public function actionCartage()
    {
        $this->layout = "main2";
        return $this->renderAjax('cartage');
    }



}
