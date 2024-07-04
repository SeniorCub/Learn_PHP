<?php
     $break = "<br>";
     // Arithmetic Operation
     $a = 5;
     $b = 2;

     // Addition
     $sum = $a + $b;
     var_dump($sum);
     echo($break);

     // Subtraction
     $sub = $a - $b;
     var_dump($sub);
     echo($break);

     // Multiplication
     $mul = $a - $b;
     var_dump($mul);
     echo($break);

     // Division
     $div = $a / $b;
     var_dump($div);
     echo($break);

     // Exponential
     $exp = $b ** $a;
     var_dump($exp);
     echo($break);

     // Modulo
     $mod = $a % $b;
     var_dump($mod);
     echo($break);

     // Decrement
     $dec = $a--;
     var_dump($dec);
     echo($break);

     // Increment
     $inc = $b++;
     var_dump($inc);
     echo($break);


     // Comparision Operation
     $c = 10;
     $d = 20;

     var_dump($c == $d);
     echo($break);
     var_dump($c > $d);
     echo($break);
     var_dump($c < $d);
     echo($break);
     var_dump($c >= $d);
     echo($break);
     var_dump($c <= $d);
     echo($break);

     // compare the values
     var_dump(3 == "3");
     // To check if they are of the same data type
     var_dump(3 === "3");
     echo($break);
     echo($break);


     // Logical Operation
     $true = true;
     $false = false;

     // AND
     var_dump($true && $false);
     var_dump($false and $false);
     var_dump($true && $true);
     echo($break);
     // OR
     var_dump($true || $false);
     var_dump($false or $false);
     var_dump($true || $true);
     echo($break);
     // NOT
     var_dump(!$true);
     var_dump(!$false);
     echo($break);


     // Assignment Operation
     $ass = 5;
     echo($ass += 2);
     echo($break);
     echo($ass -= 2);
     echo($break);
     echo($ass *= 2);
     echo($break);
     echo($ass /= 2);
     echo($break);

     // Find out operation we can perform on array and string


     // Operations on Array
     echo($break);
     echo("OPerations On Array");
     echo($break);
     $array = array(1, 2, 3);
     // Adding Elements
     echo("Adding Elements");
     echo($break);
     echo($array[] = 4);
     echo($break);
     echo($array[] = 5);
     echo($break);
     var_dump($array = array_merge($array, [6 ,7]));
     echo($break);


     // // Removing Elements
     echo($break);
     echo("Removing Elements");
     echo($break);
     echo(array_pop($array));
     echo($break);
     var_dump(array_shift($array));
     echo($break);
     var_dump($array = array_splice($array, 0, 2));
     echo($break);

     // Iterating, Searching, Sorting, Filtering & Mapping, Spliting & Combining, Union
     // Union
     echo($break);
     echo("Union");
     echo($break);
     $array1 = array(1, 2, 3);
     $array2 = array(4, 5, 6);
     $array3 = $array1 + $array2;
     print_r($array3);
     echo($break);

     //  Equality
     echo($break);
     echo("Equality");
     echo($break);
     $array1 = array(1, 2, 3);
     $array2 = array(1, 2, 3);
     $array3 = array(1, 2, 3, 4);
     $array4 = array(1, 2, 3, 4, 5);
     echo($array1 == $array2);
     echo($break);
     var_dump($array4 == $array3);
     echo($break);
     

     // String OPerations
     $str = "Hello World";
     // Concatination, Accessing Characters, Length, Substrings, SEarching, Replacing, Case Conversion, Trimming, Spliting & Joining, Formatting, Encoding & Decoding

     // Tomorrow Control Structure
?>