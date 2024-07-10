<?php
     // print_r($_POST);
     // if (empty($_POST["email"])){
     //      header("location: index.php");
     // } elseif (empty($_POST["password"])){
     //      header("location: index.php");
     // } else {
     //      print_r($_POST);
     // }

     // if (empty($_POST["email"] && $_POST["password"])){
     //      header("location: index.php");
     // } else {
     //      print_r($_POST);
     // }

     if (empty($_POST['name'] && $_POST["email"] && $_POST["subject"] && $_POST["message"])) {
          header("location: index.php");
     } else {
          print_r($_POST);
          echo("<br>");
          echo("<br>");
          foreach($_POST as $key => $value) {
               echo "$key: $value <br>";
          }
     }
?>