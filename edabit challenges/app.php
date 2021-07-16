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
        echo $result;
        echo var_dump($result);
    }
    //Convert(true)

   //Acending Number in an array
    function fun($number){
        sort($number);

        $arrlength = count($number);
        for($x = 0;$x < $arrlength; $x++){
            echo $number[$x] .'</br>'; 
        }
    }
   //fun([5,6,7,4,1,8,2,3])

   //Factorial
    function factorial($a){
        $ans = 1;

        for($i = 1;$i <= $a; $i++){
            $ans = $ans * $i;
        }
        echo $ans;
    }
   //factorial(4)

   //Return the four letters string
    function four($arr){
        for($i = 0;$i < count($arr);$i++){
            $x = $arr[$i];
            $checklet = strlen($x);
            if($checklet == 4){
                //var_dump($x);
                echo 'The Four Letters Word: '. $x .'</br>';
            }
            else{
                echo $x .'</br>';
            }          
       }
    }
   //four(["Tomato", "Potato", "Pair"])


?>