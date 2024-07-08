<?php
     $break = "<br>";
     // Function
     // Function is a block of code that only runs when it is called
     // You can pass data, known as parameters, into a function

     echo("<h1>Functions</h1>");

     // Function without parameters
     echo("<h4>Functions without parameters</h4>");
     function sayHello(){
          echo("Hello User");
          echo $break;
     };
     sayHello();
     echo $break;
     echo $break;


     // Function with parameters
     echo("<h4>Functions with parameters</h4>");
     function greetUser($name) {
          echo("Hello " . $name);
          echo $break;
     };
     greetUser("SeniorCub");
     echo $break;
     greetUser("Roheemah");
     echo $break;
     echo $break;


     // Function to add two numbers
     echo("<h4>Function to add two numbers</h4>");
     function addNum($a, $b){
          return($a + $b);
     }
     echo(addNum(3,5));
     echo $break;
     echo $break;

     // Function with default parameter
     echo("<h4>Function with default parameter</h4>");
     $x = 5;
     $y = 13;
     function add($x, $y){
          return($x + $y);
     }
     echo(add($x, $y));
     echo $break;
     function adds($v = 3, $g = 2){
          return($v + $g);
     }
     echo(adds());
     echo $break;
     echo(adds(4, 6));
     echo $break;
     echo $break;

     // Function to multiple two numbers
     echo("<h4>Function to multiple two numbers</h4>");
     function multiply($a = 3, $b = 5){
          return($a * $b);
     }
     echo(multiply());
     echo $break;

     // Create a program to determine which number is small within two numbers
     echo("<h4>Function to determine which number is small within two numbers</h4>");
     function smallNum($a, $b){
          if ($a < $b){
               return($a . " is less than " . $b);
          } else {
               return($b . " is less than " . $a);
          }
     }
     echo(smallNum(3, 5));
     echo $break;
     echo(smallNum(25, 13));
     echo $break;
     echo $break;

     // Function with variable length arguments
     echo("<h4>Function with variable length arguments</h4>");
     // "..." means splat. used to declare continous variable
     function sumAll(...$numbers){
          $sum = 0;
          foreach ($numbers as $number) {
               $sum += $number;
          }
          return($sum);
     };
     echo(sumAll(2 , 3, 1, 6, 9));
     echo $break;
     echo $break;

     // Check if a number is even or odd
     echo("<h4>Check if a number is even or odd</h4>");
     function checker($num1){
          if ($num1 % 2 == 0){
               return($num1 . " is an even number");
          } else {
               return($num1 . " is an odd number");
          }
     }
     echo(checker(5));
     echo $break;
     echo(checker(8));
     echo $break;
     echo $break;

     // calculate the sum of numbers from 1 to 10
     echo("<h4>Calculate the sum of numbers from 1 to 10</h4>");
     function total($start, $stop){
          $sum = 0;
          for ($i = $start; $i <= $stop; $i++){
               echo $i;
               echo $break;
               $sum += $i;
          }
          return($sum);
     }
     echo(total(1, 10));
     echo $break;
     echo $break;
?>