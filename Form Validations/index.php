<!DOCTYPE HTML>
<html>  
<body>
<?php
   $name = $email = $gender = "";
   
   if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $gender = test_input($_POST["gender"]);
   }
   function test_input($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
   }
?>
<h3>Form Validation Basic</h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
Name: <input type="text" name="name"><br><br>
E-mail: <input type="text" name="email"><br><br>
Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other<br><br>
<input type="submit">
</form>
 <?php
   echo $name ."</br>";
   echo $email ."</br>";
   echo $gender ."</br>";

 ?>

</body>
</html>