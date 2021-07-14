<?php

  //Callback functions
  function Callback($item){
      $result = strlen($item);
      return $result;
  }

  $colors = ["red","pink","white","yellow"];
  $length = array_map("Callback",$colors);
  //print_r($length);

  //Anonymours function as a callback function
  $colors = ["red","pink","white","yellow"];
  $length = array_map(function($item){return strlen($item);},$colors);
  //print_r($length);

  //Json encode
  $age = ["Roy"=>10,"Smith"=>20,"John"=>30];
  $jsonobj  =  json_encode($age);
  $name = ["Roy","Rock","Smith"];
  //echo var_dump($jsonobj);      //Return string
 
  //Json decode
  $result = json_decode($jsonobj);
  //echo var_dump($result);         //Returns object



  //Exceptions thorws error
  function divide($dividend, $divisor) {
    if($divisor !== 0) {
      throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
  }
  
  try {
    echo divide(5, 1);
  } catch(Exception $e) {
      //echo $e;
    echo "Unable to divide.";
  }finally{
      echo "Process complete";
  }
?>