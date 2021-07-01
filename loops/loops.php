<?php
    //Loops
    //For Loops
    $names = ['John','Jo','Mushii','Rock'];
    //  for($i = 0;$i < count($names);$i++){
    //      echo $names[$i] . '<br/>';
    //  }
    // foreach($names as $name){
    //     echo $name. '<br/>';
    // }
   $products = [
    ['name'=>'Product1','price'=>10],
    ['name'=>'Product2','price'=>20],
    ['name'=>'Product3','price'=>30],
    ['name'=>'Product4','price'=>40],
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
</body>
</html>