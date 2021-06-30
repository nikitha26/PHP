<?php
  //Create Variables
 $name = "John";             //PHP variable
 //  echo $name;
 define('Name','Rock')       //PHP Constants

 //Strings
//  $stringOne = "Jo";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP file</title>
</head>
<body>
    <h1><?php echo 'This is my first PHP file';?></h1>
    <h2>PHP Variables</h2>
    <h4>Hello <?php echo $name;?></h4>
    <h4>Hello <?php echo Name;?></h4>
    <h2>PHP Strings</h2>
    
</body>
</html>