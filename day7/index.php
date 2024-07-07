<?php
     $break = "<br>";

     // If - elseIf - else
     $good = 30;
     // $good = 10;
     if ($good < 30) {
          echo("Good is less 30");
     } elseif ($good == 30) {
          echo("Good is equal to 30");
     } else {
          echo("Good is Greater thank 30");
     }
     echo($break);
     echo($break);

     // Loop
     // For , while, do - while , for each Loops

     // For Loop
     echo("<h3>For Loop</h3>");
     echo("<h6>Increment with For Loop </h6>");
     for ($val=0; $val <= 15; $val++) { 
          echo("The value of val is " . $val . $break);
     }
     echo($break);
     echo($break);

     echo("<h6>Decrement with For Loop </h6>");
     for ($val=15; $val >= 0; $val--) { 
          echo("The value of val is " . $val . $break);
     }
     echo($break);
     echo($break);

     // While Loop
     echo("<h3>While Loop</h3>");
     $val2 = 12;
     while ($val2 < 15) {
          // Either display the value before the increment or increase then print
          echo($val2.$break);
          $val2++;
     }
     echo($break);

     $val3 = 15;
     while ($val3 > 12) {
          echo($val3-- . $break);
     }
     echo($break);

     // do While Loop
     echo("<h3>Do While Loop</h3>");
     $val4 = 2;
     do {
          echo $val4;
          echo $break;
          $val4++;
     } while ($val4 <= 15);
     echo($break);

     // For Each
     echo("<h3>For Each Loop</h3>");
     $fruit = array("Orange","Banana", "Tomatoes", "Mango", "Grape", "Avocado", "Apple");
     foreach ($fruit as $value) {
          echo $value . $break;
     };
     echo($break);
     echo($break);
     echo($break);

     // Assignment
     echo "<h1>Assignment</h1>";
     // Read about nested if statement and use it to wrie a program
     echo "<h3>Write a program using nested if statement</h3>";
     $age = 20;
     $gender = "F";

     if ($age < 18) {
          if ($gender == "M") {
               echo "You are a Male Child";
               echo $break;
          } else {
               echo "You are a Female Child";
               echo $break;
          }
     } elseif ($age <= 30) {
          if ($age <= 19) {
               echo "You are a Teenager";
               echo $break;
          } else {
               echo "You are a Youth";
               echo $break;
          }
     } elseif ($age <= 50) {
          echo "You are an Adult";
          echo $break;
     } else {
          echo "You are an Old";
          echo $break;
     };
     echo $break;
     echo $break;
     
     // For each loop with associative array
     echo "<h3>For each loop with associative array</h3>";
     $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
     foreach ($age as $x => $val) {
          echo "$x = $val" . $break;
     }
     echo $break;
     echo $break;
     $student_grades = [
          "Alice" => "A",
          "Bob" => "B",
          "Charlie" => "C",
          "Diana" => "A",
     ];
     foreach ($student_grades as $student => $grade) {
          echo "$student got a $grade" . $break;
     }
?>