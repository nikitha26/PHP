<?php
    //For Loop
    $names = ['John','Jo','Mushii','Rock'];
    //  for($i = 0;$i < count($names);$i++){
    //      echo $names[$i] . '<br/>';
    //  }
    // foreach($names as $name){
    //     echo $name. '<br/>';
    // }
   $products = [
    ['name'=>'Product1','price'=>10],
    ['name'=>'Product2','price'=>5],
    ['name'=>'Product3','price'=>3],
    ['name'=>'Product4','price'=>70],
   ];
    // foreach($products as $product){
    //     echo $product['name'].' - '.$product['price'];
    //     echo '<br/>';
    // }

    // While loop
    // $i = 0;
    // while($i < count($products)){
    //     echo $products[$i]['name'];
    //     echo '<br/>';
    //     $i++;
    // }

    //do while
     $x = 1;
     do{
         echo "The number is $x </br>";
         $x++;
     }while($x < 5);

    // foreach($products as $product){
    //     if($product['price']  < 20){
    //         echo $product['name'].' - '.$product['price'].' if block';
    //         echo '<br/>';
    //     }
    //     else{
    //         echo $product['name'].' - '.$product['price'];
    //         echo '<br/>';

    //     }
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        <?php foreach($products as $product){ ?>
            <h3><?php echo $product['name'];?></h3>
            <h3><?php echo $product['price'];?></h3>
        <?php } ?>
    </ul>
    <ul>
        <?php foreach($products as $product){ ?>
            <?php if($product['price'] >5){ ?>
                <li><?php echo $product['name'];?></li>
            <?php } ?>
        <?php } ?>    
    </ul>
</body>
</html>