<?php
     // string variable assigning
     $name = "seniorcub";
     echo $name;
     echo "<br>";
     
     // Boolen displays either 0 or 1
     echo TRUE;
     echo "<br>";

     // Integer Number
     $number = 3;
     echo $number;
     echo "<br>";

     // Float number
     $number = 65.10;
     echo $number;
     echo "<br>";

     // Comparisim Operation
     $num1 = 10;
     $num2 = 10;
     if ($num1 == $num2){
          echo "The numbers are equal";
     } else {
          echo "The numbers are not equal";
     };
     echo "<br>";


     // If else statement
     if ($name === "seniorcub"){
          echo "this is true";
     } else {
          print("No name detected");
     };
     echo "<br>";

     // Tenary Statement or Operation
     echo($name === "seniorcub" ? "TRUE" : "FALSE");
     echo "<br>";

     $age = 193;
     $ans = $age >= 100 ? "You should be dead" : "Live Long";
     echo $ans;
     echo "<br>";

     // Switch Case
     $class = "Js1";
     switch ($class) {
          case 'Js1':
               echo "You are in Js1";
               break;
          default:
               echo "You are not in any class";
               break;
     };
     echo "<br>";

     // Switch Case
     switch ($name) {
          case 'reuben':
               echo "This is Reuben";
               break;
          default:
               echo "This is seniorcub";
               break;
     };
     echo "<br>";

     // Functions
     function squareNumber(){
          $num1 = 4;
          $num = $num1 ** 2;
          echo $num;
     };
     squareNumber();
     echo "<br>";

     // Function with params
     function multiply($a,$b){
          $num = $a * $b;
          echo $num;
     };
     multiply(2,3);
     echo "<br>";

     // Function to determine if number is even or odd
     function everodd($num4){
          $result = $num4 /2;
          echo $num4  ;
          if (is_float($result)) {
               echo "    Number is Odd";
          } else {
               echo "   Number is Even";
          };
     };
     everodd(4);
     echo "<br>";

     // Function to determine if number is prime or not
     
?>