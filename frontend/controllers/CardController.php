<?php
namespace frontend\controllers;

use common\models\Shop;
use frontend\models\Card;
use yii\web\Controller;
use yii;
class CardController extends Controller{

    public function actionAdd($id)
    {
        $product = Shop::findOne($id);
        if(empty($product)) return false;
        $session = Yii::$app->session;
        $session->open();
        $card = new Card();
        $card->AddToCard($product);
        return $this->renderAjax('add');
    }

    public function  actionClear(){
        $session = Yii::$app->session;
        $session->open();
        $session->remove('card');
        $session->remove('card.soni');
        $session->remove('card.sum');
        $this->layout = 'false';

    }

    public  function actionDelitem($id){
        $product = Shop::findOne($id);
        if(empty($product)) return false;
        $session = Yii::$app->session;
        $session->open();
        $card = new Card();
        $card->delitem($id);
        return $this->renderAjax('add');
    }

    public  function actionShow(){
        return $this->renderAjax('add');
    }

}



?>