<?php
    $xml = simplexml_load_file("exm.xml") or die("Error:Can not create object");
    //   echo $xml->to . "<br>";
    //   echo $xml->from . "<br>";
    //   echo $xml->heading . "<br>";
    //   echo $xml->body . "<br>";
    foreach($xml->children() as $books) {
        echo $books->title . ", ";
        echo $books->author . ", ";
        echo $books->year . ", ";
        echo $books->price . "<br>";
    }
?>