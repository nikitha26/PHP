<?php
  
  $file = 'readme.txt';
  if(file_exists($file)){
      //File exists
      echo readfile($file) .'</br>';

      //Copy the file
      copy($file,'file2.txt');

      //Real path
      echo realpath($file).'</br>';

      //File size
      echo filesize($file).'</br>';

      //Rename the file
      echo rename($file,'test.txt');

    }
  else{
      echo 'File not exists';
  }
    //Make directory (Created directory)
    //mkdir('quotes');
?>