<?php
   // $myfile = fopen("newfile.txt","w") or die("Unable to open file!");
   // $txt = "John";
   // fwrite($myfile,$txt);
   // $txt = "Rock";
   // fwrite($myfile,$txt);
   // fclose($myfile);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
   <title>Document</title>
</head>
<body>
  <form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="uploadfile" vlaue="Choose">
      <input type="submit" name="submit" id="submit">
  </form>
</body>
</html>