<?php
  //Two makes ten
  function check($a , $b){
     if($a == 10 || $b == 10 || $a+$b == 10){
         echo 'Found';
     }
     else{
         echo 'Not Found';
     }
  }
  //check(9,10)

  //Absolute sum
  function Sum($elements){
      $ans = 0;
      foreach($elements as $elem){
          $ab = abs($elem);
          //echo $ab;
        $ans = $ans + $ab;
      }
      echo $ans;
  }
  //Sum([-3, -4, -10, -2, -3])

  //Capture the Rock
  function capture($arr){
      $x = $arr[0][0];
      $y = $arr[0][1];

      //echo $x . $y;
      if($arr[0][0] == $arr[1][0] || $arr[0][1] == $arr[1][1]){
         echo 'true';
      }
      else{
          echo "false";
      }

  }
  capture(["H4", "H3"])

?>