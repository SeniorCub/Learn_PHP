<?php
     $break = "<br>";

     // Create a function to calculate the factorial of a number
     echo("<h4>Create a function to calculate the factorial of a number</h4>");
     function factorial($number) {
          $factorial = 1;
          for ($i = $number; $i >= 1; $i--) {
               $factorial = $factorial * $i;
          }
          echo "Factorial of ". $number . " is " . $factorial;
     }
     factorial(5);
     echo($break);
     factorial(4);
     echo($break);
     echo($break);


     // Global variables are variables that can be accessed from any scope.
     // Variables of the outer most scope are automatically global variables, and can be used by any scope, e.g. inside a function.
     // To use a global variable inside a function you have to either define them as global with the global keyword, or refer to them by using the $GLOBALS syntax.
     echo("<h4>Global variables</h4>");
     echo $break;
     $x = 5;
     $y = 3;

     function multiNumber() {
          $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
     }
     multiNumber();
     echo($z);
     echo $break;

     function sumNum() {
          $GLOBALS['sum'] = 5 + 3;
     }
     sumNum();
     echo($sum);
     echo $break;

     // $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
     // The example below shows how to use some of the elements in $_SERVER:
     echo("<h4>SERVER</h4>");
     echo $break;
     echo $_SERVER['PHP_SELF'];
     echo $break;
     echo $_SERVER['SERVER_NAME'];
     echo $break;
     echo $_SERVER['HTTP_HOST'];
     echo $break;
     echo $_SERVER['HTTP_USER_AGENT'];
     echo $break;
     echo $_SERVER['SCRIPT_NAME'];
     echo $break;
     echo $break;

     // PHP Regular Expressions
     echo("<h4>PHP Regular Expressions</h4>");
     echo $break;

     // Regular Expression Functions
     echo("<h4>Regular Expression Functions</h4>");
     
     // Using preg_match()
     // The preg_match() function will tell you whether a string contains matches of a pattern // && // Returns 1 if the pattern was found in the string and 0 if not
     echo("<h4>Using preg_match()</h4>");
     $str = "Visit W3Schools";
     $pattern = "/w3schools/i";
     echo preg_match($pattern, $str);
     echo $break;
     
     // Using preg_match_all()
     // The preg_match_all() function will tell you whether a string contains matches of a pattern // && // Returns the number of full pattern matches
     echo("<h4>Using preg_match_all()</h4>");
     $str = "Visit W3Schools";
     $pattern = "/o/i";
     echo preg_match_all($pattern, $str, $matches);
     echo $break;

     // Using preg_replace()
     // The preg_replace() function will replace all matches of a pattern with a string
     echo("<h4>Using preg_replace()</h4>");
     $str = "Visit W3Schools";
     $pattern = "/w3schools/i";
     $replacement = "W3Schools.com";
     echo preg_replace($pattern, $replacement, $str);
     echo $break;
?>