<?php
namespace frontend\controllers;

use common\models\Order;
use common\models\OrderItem;
use common\models\Shop;
use frontend\models\Card;
use yii\web\Controller;
use yii;
class CardController extends Controller{
    public function actionAdd($id,$soni=1)
    {
        $product = Shop::findOne($id);
        if(empty($product)) return false;
        $session = Yii::$app->session;
        $session->open();
        $card = new Card();
        $card->AddToCard($product,$soni);
        return $this->renderAjax('add');
    }

    public function  actionClear(){
        $session = Yii::$app->session;
        $session->open();
        $session->remove('card');
        $session->remove('card.soni');
        $session->remove('card.sum');
        $this->layout = 'false';
        return $this->renderAjax('add');


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


    public function actionCheckout()
    {
        $this->layout = "main2";
        $session = Yii::$app->session;
        $session->open();
        $order = new Order();
        if($order->load(Yii::$app->request->post()) and isset($session['card'])){
            $order->save();
            foreach($session['card'] as $id => $product){
                $orderItems = new OrderItem();
                $orderItems->order_id = $order->id;
                $orderItems->product_id = $id;
                $orderItems->count = $product['soni'];
                $orderItems->price = $product['price'] ;
                $orderItems->sum =  $orderItems->count*$orderItems->price;
                $orderItems->save();
            }
            unset($session['card']);
            Yii::$app->session->setFlash('success','Buyutmangiz qabul qilindi');
            return $this->redirect(['index/shop']);
        }elseif(!isset($session['card']) and $order->load(Yii::$app->request->post())){
            Yii::$app->session->setFlash('danger','Nimadur xato ketdi');
            return $this->redirect(['card/checkout']);
        }

        if(isset($session['card'])){
            return $this->render('checkout',['model'=>$order]);
        }else{
            Yii::$app->session->setFlash('warning','Iltimos biror nima tanlang');
            return $this->redirect(['index/shop']);

        }
    }




}



?>