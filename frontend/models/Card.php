<?php
namespace frontend\models;

class Card extends \yii\db\ActiveRecord{

    public  function AddToCard($product,$soni=1){

        if(isset($_SESSION['card'][$product->id])){
            $_SESSION['card'][$product->id]['soni']+=$soni;
        }else{
            $_SESSION['card'][$product->id] = [
                'soni' =>$soni,
                'title'=>$product->title,
                'img'=>$product->img,
                'price'=>$product->price,
            ];
        }
        $_SESSION['card.soni'] = isset($_SESSION['card.soni'])?$_SESSION['card.soni']+$soni:$soni;
        $_SESSION['card.sum'] = isset($_SESSION['card.sum'])?$_SESSION['card.sum']+$soni*$product->price:$product->price;
    }


    public function delitem($id){
        if(!isset($_SESSION['card'][$id])) return false;

        $soniAyir = $_SESSION['card'][$id]['soni'] ;
        $sumAyir = $_SESSION['card'][$id]['soni']*$_SESSION['card'][$id]['price'];

        $_SESSION['card.soni'] -=$soniAyir;
        $_SESSION['card.sum'] -=$sumAyir;

        unset($_SESSION['card'][$id]);
    }

}

?>