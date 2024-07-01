<?php
     // Ararry 
     $arr = array("Reuben", "Boy");
     print_r($arr);
     echo ('<br>');

     print_r($arr[0]);
     echo ('<br>');

     print($arr[1]);
     echo ('<br>');

     var_dump($arr[1]);
     echo ('<br>');

     // Loop
     for ($i = 0; $i < count($arr); $i++) {
          echo $arr[$i];
          echo ('<br>');
     };

     // PUSH
     $secArry = array();
     for ($i=0; $i < 10 ; $i++) { 
          print_r(array_push($secArry, $i));
          echo ('<br>');
     }
     echo ('<br>');

     // POP
    print_r(array_pop($secArry));
    echo ('<br>');
    print_r($secArry);
    echo ('<br>');
    echo ('<br>');

     // Associative Array
     $car = array(
          "brand"=>"Ford", 
          "model"=>"Mustang", 
          "year"=>1964
     );
          print_r($car);
          echo ('<br>');
          print($car["model"]);
          echo ('<br>');
          print($car["year"]);
          echo ('<br>');

               // Update the Key
               $car["year"] = 20024;
               print_r($car);
               echo ('<br>');

               // POP
               print_r(array_pop($car));
               echo ('<br>');
               print_r($car);
               echo ('<br>');
               echo ('<br>');

     // Multi-dimenssional Arrays
     $newcars = array(
          array("Volvo", 22, 18),
          array("BMW", 15, 13),
          array("Saab", 5, 2),
          array("Land Rover", 17, 15)
     );
               print_r($newcars);
               echo ('<br>');
               print_r($newcars[0]);
               echo ('<br>');
               print_r($newcars[1][0]);
               echo ('<br>');
               print_r($newcars[3][2]);
               echo ('<br>');

               $newcarss = array(
                    array("Volvo", array("Ford", 10, 9)),
                    array("BMW", 15, 13),
                    array("Saab", 5, 2),
                    array("Land Rover", 17, 15)
               );
               print_r($newcarss[0][1][0]);
               echo ('<br>');
               echo ('<br>');
               echo ('<br>');

     // Check out more functions to perform with array
          // PHP array_merge() Function     
          $a1=array("red","green");
          $a2=array("blue","yellow");
          print_r(array_merge($a1,$a2));
          echo ('<br>');

          // PHP array_pop() Function
          $a=array("red","green","blue");
          array_pop($a);
          print_r($a);
          echo ('<br>');

          // PHP array_push() Function
          $a=array("red","green");
          array_push($a,"blue","yellow");
          print_r($a);
          echo ('<br>');

          // PHP array_replace() Function
          $a1=array("red","green");
          $a2=array("blue","yellow");
          print_r(array_replace($a1,$a2));
          echo ('<br>');

          // PHP array_search() Function
          $a=array("a"=>"red","b"=>"green","c"=>"blue");
          echo array_search("red",$a);

          // PHP array_slice() Function
          $a=array("red","green","blue","yellow","brown");
          print_r(array_slice($a,2));
          echo ('<br>');

          // PHP array_combine() Function
          $fname=array("Peter","Ben","Joe");
          $age=array("35","37","43");
          $c=array_combine($fname,$age);
          print_r($c);

          // PHP array_diff() Function
          $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
          $a2=array("e"=>"red","f"=>"green","g"=>"blue");
          $result=array_diff($a1,$a2);
          print_r($result);
          
?>