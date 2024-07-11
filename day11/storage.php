<?php
     // print_r($_POST);
     // if (empty($_POST["email"])){
     //      header("location: index.php?msg=Please enter your email address");
     // } elseif (empty($_POST["password"])){
     //      header("location: index.php");
     // } else {
     //      print_r($_POST);
     // }

     if (empty($_POST["email"] && $_POST["password"])){
          header("location: index.php?msg=All fields are required");
     } else {
          print_r($_POST);
     }
?>