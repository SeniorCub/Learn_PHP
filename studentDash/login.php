<?php
     include "connect.php";

     session_start();

     $condition ="";

     if (isset($_POST["submit"])) {
          $marticNo = $_POST["marticNo"];
          $password = $_POST["password"];



          if (empty($marticNo) && empty($password)) {
              $condition = "All Inputs are required";
          } else {
               $select = "SELECT `password` FROM `studentdash` WHERE `marticNo` = '$marticNo'";
               $result = mysqli_query($conn, $select);

               if (mysqli_num_rows($result) == 1) {
                   $row = mysqli_fetch_assoc($result);
                   $hashedPassword = $row['password'];
               
                    // Verify the password
                    if (password_verify($password, $hashedPassword)) {
                        $condition = "Login successful!";
                         $select = mysqli_query($conn, "SELECT * FROM `studentdash` WHERE `marticNo` = '$marticNo'");
                         $user = mysqli_fetch_assoc($select);
                         $_SESSION['marticNo'] = $user['marticNo'];
                         header("location: profile.php");
                    } else {
                        $condition = "Invalid password.";
                    }
               } else {
                  $condition = "Invalid username.";
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
           *{
               padding: 0;
               margin: 0;
               box-sizing: border-box;
          }
          form{
               padding: 2rem;
               box-shadow: 5px 5px 10px #eee, -5px -5px 10px #eee;
               display: flex;
               flex-direction: column;
               gap: 1rem;
               margin: 0 auto;
               width: 40%;
               label{
                    color: #333;
               }
               input:focus, input:active{
                    height: 35px;
                    background-color: #eee!important;
                    outline: none;
                    padding: 0.5rem;
                    border: none;
                    box-shadow: none;
               }
               input{
                    height: 35px;
                    background-color: #eee;
                    outline: none;
                    padding: 0.5rem;
                    border: none;
                    box-shadow: none;
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
               .condition{
                    color: #333;
                    text-align: center;
                    padding: 0;
                    margin: 0;
               }
          }
     </style>
</head>
<body>

     <form action="" method="POST">
          <div>Login</div>
          <label for="marticNo">Matric Number:</label>
          <input type="number" name="marticNo" id="marticNo">
          <label for="password">Password:</label>
          <input type="password" name="password" id="password">
          <p class="condition"><?php echo($condition); ?></p>
          <button type="submit" class="btn" name="submit">Login</button>
     </form>

</body>
</html>