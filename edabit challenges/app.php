<?php
    //Find perimeter of triangle
    function perimeter($a , $b){
    $c = $a + $b;
    $result = 2 * $c;
    echo $result;
    }
    //perimeter(20, 10)
    
   //Find sqrt
   function power($a){
      $c = sqrt($a);
      echo $c;
   }
   //power(25)

   //Cancatinate Operator
   function Cancat($a){
      echo 'Hello '.$a;
   }
   //Cancat("John")

   function Convert($a){
    $result = $a ? 'true' : 'false';
    //echo $result;
    echo var_dump($result);
   }
   //Convert(true)
?>