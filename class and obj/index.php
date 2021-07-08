<?php
  //Class
  class User{
      public $email;
      public $name;

      public function __construct($email,$name){
        $this->email = $email;
        $this->name = $name;
      }
      public function login(){
          //echo 'the user loggin in';
      }
      public function getName(){
          return $this->name;
      }
  }
  $userone = new User('jo@gamil.com','jo');
  
//   $userone->login();
//   $userone->name = 'rock';
//   echo $userone->name;

   echo $userone->getName();
?>