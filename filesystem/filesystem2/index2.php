<?php
    //File System Part-2
    $file = 'quotes.txt';
 
    //Opening file for reading
     $handle = fopen($file,'r');

    //read the file
    //  echo fread($handle,filesize($file));
    //  echo fread($handle,100);

    //read single line
     //echo fgets($handle);

    //read single character
      echo fgetc($handle);

    //writing to a file

    fclose($handle);
?>