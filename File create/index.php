<?php
   $myfile = fopen("newfile.txt","w") or die("Unable to open file!");
   $txt = "John";
   fwrite($myfile,$txt);
   $txt = "Rock";
   fwrite($myfile,$txt);
   fclose($myfile);
?>