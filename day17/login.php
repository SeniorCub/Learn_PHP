<?php
     include "connect.php";

     session_start();

     if (isset($_POST["submit"])) {
          $email = $_POST["email"];
          $password = $_POST["password"];

          if (empty($email) && empty($password)) {
               echo "All Inputs are required";
          } else {
               $select = mysqli_query($conn, "SELECT * FROM `customer details` WHERE `email` = '$email' AND `password` = '$password'");
              $result = mysqli_num_rows($select);
               if ($result > 0) {
                    $user = mysqli_fetch_assoc($select);
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['password'] = $user['password'];

                    header("location: index.php");
               } else {
                    echo"invalid credentials";
                    header("location: register.php");
               }
          }
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <style>
          form{
               padding: 2rem;
               box-shadow: 5px 5px 10px #eee, -5px -5px 10px #eee;
               display: flex;
               flex-direction: column;
               gap: 2rem;
               margin: 0 auto;
               width: 40%;
               input{
                    height: 30px;
               }
               .btn{
                    background: black;
                    width: 25%;
                    color: white;
                    margin: 0 auto;
                    height: 40px;
                    border: none;
                    border-radius: 5px;
               }
               div{
                    margin: 0 auto;
                    font-size: 2.5rem;
                    font-weight: 600;
                    letter-spacing: 5px;
                    font: optional;
               }
          }
     </style>
</head>
<body>

     <form action="" method="POST">
          <div>Login</div>
          <input type="email" name="email" id="email">
          <input type="password" name="password" id="password">
          <button type="submit" class="btn" name="submit">Submit</button>
     </form>

</body>
</html>