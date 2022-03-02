    <?php
    $session = Yii::$app->session;

    if(empty($session['card'])){
        echo "<h3>Korzinka bosh</h3>";
    }else{
    ?>

<table class="table table-bordered table-striped">
    <tr>
        <th>$</th>
        <th>Photos</th>
        <th>Name</th>
        <th>Narxi</th>
        <th>Soni</th>
        <th>Sum</th>
        <th></th>
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
        echo "<td><span onclick='delteproduct(".$id.")' class='fas fa-trash-alt btn ochirish' ></span></td>";
        echo "</tr>";
    }

    echo "<tr>";
        echo "<td colspan='6'>Maxsulotlar soni</td>";
        echo "<td>".$session['card.soni']."</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td colspan='6'>Umumiy summa</td>";
        echo "<td>".$session['card.sum']."</td>";
    echo "</tr>";

    ?>
</table>
<?php
    }
?>

