<?php
     if (empty($_POST["first_name"])){
          header("location: index.php?msg=Please enter your first name");
     } elseif (empty($_POST["last_name"])) {
          header("location: index.php?msg=Please enter your last name");
     } elseif (empty($_POST["username"])) {
          header("location: index.php?msg=Please enter your username");
     } elseif (empty($_POST["gender"])) {
          header("location: index.php?msg=Please enter your gender");
     }
     elseif (empty($_POST["password"])){
          header("location: index.php?msg=Please enter your password");
     } elseif (empty($_POST["conPassword"])){
          header("location: index.php?msg=Please confirm your password");
     }
     elseif ($_POST["password"] != $_POST["conPassword"]){
          header("location: index.php?msg=Password does not match");
     } else {
          foreach($_POST as $key => $value){
               echo("$key is $value <br>");
          }
     }
?>