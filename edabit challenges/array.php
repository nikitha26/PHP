<?php
  //Invert an array
  function Invertarray($array){
      //echo abs($array)."</br>";
      if($array == -$array){
          return abs($array);
      }
      else{
          return -$array;
      }
  }
  $a = [1, -2, 3, -4, 5];
  $arr = array_map("Invertarray",$a);
  //print_r($arr)."</br>";
  //echo $a[0];
  //var_dump($arr);

  //Sum of numbers in an array
    function arraySum($arrays){
        $ans = 0;
        foreach($arrays as $array){
           //If Even number the number should be double and add.
            if($array % 2 == 0){
                $result1 = $array * $array;
                $ans = $ans + $result1;
            
            }
           //If odd number the number should be sqrt of the given number and add.
            else{
                $result2 = sqrt($array);
                $ans = $ans + $result2;
                
            }  
        }
        //echo $ans;   //Print total answer here.
    }
  arraySum([1, 3, 3, 1, 10]);


  //Find max value and acending order in an array
    function Maxnum($numlists){
      sort($numlists);
      //Max number in list
      echo "Max number :".max($numlists)."</br>";
      echo "Min number :".min($numlists)."</br>";

      echo "Acending order:";
      foreach($numlists as $num){
          echo $num."</br>";
      }
  }
  //Maxnum([4,-2,200,202,-20,0])

    //Array Indexing
    function Indexing($list,$index){
         $result = $list[$index];
         echo $result;
    }
    //Indexing([1, 2, 3, 4], 6.535355314 / 2);

    //Reverse Array
    function reverse($arr){
      $result = array_reverse($arr);
      print_r($result);
    }
    //reverse([1, 2, 3, 4])

    //Cancate two arrays
    function cancat($a,$b){
      print_r(array_merge($a,$b));
    }
    //cancat([1, 2, 3, 4],[2, 6, 8])


    //Capitalizing the first letter
    function Capitalize($a){
      $first = ucfirst($a);
      return $first;
    }
    $a = ["mavis", "senaida", "letty"];
    $result = array_map("Capitalize",$a);
    //print_r($result);
    

    //Remove duplicate from an array
    function Duplicate($a){
      $result = array_unique($a);    //Remove duplicate numbers from an array
      print_r($result);
    }
   //Duplicate([10,20,30,44,20,11,30])

    
   //Multiply length to array items
   function MultiplyByLength($arr){
       $len = count($arr);
       foreach($arr as $a){
           echo $len * $a;
       }
   }
   //MultiplyByLength([1,2,3])


   //Is string odd or even
   function oddorEven($a){
     $count = strlen($a);
     //echo $count;
     if($count%2 == 0){
          echo "true";
     }
     else{
         echo "false";
     }
   }
   oddorEven("apple")
?>