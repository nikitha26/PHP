<?php
//    $target_dir = 'uploads/';          //Inside uploads/.. path the file will be saved
//    $target_file = $target_dir.basename($_FILES["uploadfile"]["name"]);
//    $uploadOk = 1;
//    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//    //echo $imageFileType;
//    if(isset($_POST["submit"])){
//        $check = getimagesize($_FILES["uploadfile"]["tmp_name"]);
//        if($check !== false){
//           echo "File is valid.";
//           $uploadOk = 1;
//        }
//        else{
//            echo "File not valid";
//            $uploadOk = 0;
//        }
//    }

    //Set a cookie
    $cookiename = "User";
    $cookievalue = "Rock";
    setcookie($cookiename,$cookievalue,time() + (86400 * 30), "/");
    //echo $cookiename,$cookievalue;
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <?php
     if(isset($_COOKIE["$cookiename"])){
         echo $cookiename."</br>";
         echo $cookievalue;
     }
     else{
         echo "No values";
     }
    ?>    
</body>
</html>