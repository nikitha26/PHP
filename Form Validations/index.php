<!DOCTYPE HTML>
<html>
    <head>
        <style>
             .error {color: #FF0000;}
        </style>
    </head>  
<body>
<?php
   $nameErr = $emailErr = $genderErr ="";
   $name = $email = $gender = "";
   
   if($_SERVER["REQUEST_METHOD"] == "POST"){
       if(empty($_POST["name"])){
           $nameErr = "Name is required";
       }
       else{
           $name = test_input($_POST["name"]);
       }
        if(empty($_POST["email"])){
          $nameErr = "Email is required";
        }
        else{
          $name = test_input($_POST["email"]);
        }
        if(empty($_POST["gender"])){
            $nameErr = "Gender is required";
        }
        else{
            $name = test_input($_POST["gender"]);
        }
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
Name: <input type="text" name="name">
<span class="error">* <?php echo $nameErr;?></span><br><br>

E-mail: <input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span><br><br>
Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span><br><br>
<input type="submit" name="submit" value="Submit">
</form>
<?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
 ?>

</body>
</html>