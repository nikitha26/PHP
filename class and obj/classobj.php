<?php
//   class Fruit {
//       public $name;
//       public $color;
     
//       function set_name($name){
//            $this->name = $name;
//       }
//       function get_name(){
//           return $this->name;
//       }
//   }
//  $apple = new Fruit();
//  $apple->set_name("Apple");
//  //echo $apple->get_name();
//  var_dump($apple instanceof Fruit);
//  $mango = new Fruit();
//  $mango->set_name("Mango");
 //echo $mango->get_name();

 
 //Construct function
//     class Fruit {
//         public $name;
//         public $color;
    
//         function __construct($name){
//             $this->name = $name;
//         }
//         function get_name(){
//             return $this->name;
//         }
//     }
//    $apple = new Fruit("Apple");
//    echo $apple->get_name();

   //Destruct function
//    class Fruit {
//         public $name;
//         public $color;

//         function __construct($name){
//             $this->name = $name;
//         }
//         function __destruct(){
//             echo $this->name;
//         }
//     }
//     $apple = new Fruit("Apple");


    //Access Modifiers
    class Fruit{
        public $name;
        protected $color;
        private $weight;
    }
    $mango = new Fruit();
    $mango ->name = "Mango"; 
    $mango ->color = "Yellow";   //Error
    $mango ->weight = "50";      //Error

?>