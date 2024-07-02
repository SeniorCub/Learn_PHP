<?php
     echo("Hello World");
     echo("<br>");

     $name = "Roheemah";
     echo($name);
     echo("<br>");
     var_dump($name);
     echo("<br>");

     $sum = 1 + 4;
     echo($sum);
     echo("<br>");

     $age = 13;
     echo($age);
     echo("<br>");
     print($age);
     echo("<br>");
     var_dump($age);
     echo("<br>");
     print_r($age);
     echo("<br>");

     // Data Types
     // String, Number, Arry, Boolen, Null

     $string = "Roheemah Adegoke";
     echo($string);
     echo("<br>");
     echo(strlen($string));
     echo("<br>");
     echo(str_word_count($string));
     echo("<br>");
     echo(strrev($string));
     echo("<br>");
     echo(strpos($string, "Adegoke"));
     echo("<br>");

     // Assignment
     echo(str_replace("Roheemah", "Seniorcub", $string));
     echo("<br>");
     echo(str_repeat($string, 3));
     echo("<br>");
     echo(strtoupper($string));
     echo("<br>");
     echo(strtolower($string));
     echo("<br>");
     echo(strrev($string));
     echo("<br>");
     // read about array
?>