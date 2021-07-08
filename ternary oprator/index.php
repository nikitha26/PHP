<?php

  //Ternary operator
   $age = 30;
   //echo $age > 18 ? 'eligible' : 'not eligible';


   //Super Globals
   $x = 6;
   function fun(){
       //echo $GLOBALS['x'];
       //echo $_SERVER['SCRIPT_NAME'];
       //echo $_SERVER['HTTP_HOST'];
        //echo $_SERVER['SERVER_NAME'];
   }
   //fun()
   if($_SERVER['REQUEST_METHOD'] == 'POST')
     $name = htmlspecialchars($_REQUEST['fname']);
     if(empty($name)){
         echo 'Name empty';
     }
     else{
         echo $name;
     }
?>
<!DOCTYPE html>
<html>
<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
    </form>
</body>
</html>    
