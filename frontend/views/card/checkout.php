<?php

use yii\bootstrap4\Html;
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->title  = "Checkout";
$this->params['title'] = $this->title; 
$this->params['breadscrumb'] = $this->title;
$ok = Yii::$app->session->getFlash('success');

?>



<section class="container checkout-block">

    <?php if($ok=='yes'){?>
        <div class="alert bg-primary" role="alert">   
        <strong>Buyurtmangiz qabul qilindi</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php }elseif($ok=='no'){?>
        <div class="alert bg-danger" role="alert">   
        <strong>Nimadur xato</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <?php } ?>

    <?php $form = ActiveForm::begin(); ?>
    <!-- <div class="row">
            <div class="col-xs-12 col-md-6">
                <h2>Billing Details</h2>
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label class="element-block fw-normal font-lato">
                                <span class="element-block">First Name <span class="required">*</span></span>
                                <input type="text" class="element-block form-control" name='firt_name'>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <?=$form->field($model,'first_name')?>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <?=$form->field($model,'last_name')?>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <?=$form->field($model,'phone')?>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <?=$form->field($model,'email')?>
                </div>
            </div>


            <?=Html::submitButton("Buyurtma berish",['class'=>'btn btn-primary btn-block'])?>


        </div>
    </div>
    <?php ActiveForm::end(); ?>


    <h2>Your Order</h2>
    <div class="table-wrap">
        <!-- order data table -->
        <?php
    $session = Yii::$app->session;
    if(empty($session['card'])){
        echo "<h3>Korzinka bosh</h3>";
    }else{
    ?>

        <table class="table table-striped">
            <tr>
                <th>$</th>
                <th>Photos</th>
                <th>Name</th>
                <th>Narxi</th>
                <th>Soni</th>
                <th>Sum</th>
            </tr>

            <?php



    $n = 0;
    foreach ($session['card'] as $id=>$product){
        $n++;
        echo "<tr>";
        echo "<td>".$n."</td>";
        echo "<td>".\yii\helpers\Html::img(\yii\helpers\Url::to("/backend/web/images/shop/".$product['img']),['alt'=>"salom",'width'=>'100px'])."</td>";
        echo "<td>".$product['title']."</td>";
        echo "<td>".$product['price']."</td>";
        echo "<td>".$product['soni']."</td>";
        echo "<td>".$product['soni'] * $product['price']."</td>";
        echo "</tr>";
    }

    echo "<tr>";
        echo "<td colspan='5'>Maxsulotlar soni</td>";
        echo "<td>".$session['card.soni']."</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td colspan='5'>Umumiy summa</td>";
        echo "<td>".$session['card.sum']."</td>";
    echo "</tr>";

    ?>
        </table>
        <?php
    }
?>


    </div>

</section>