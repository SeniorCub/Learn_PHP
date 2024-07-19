<?php
     // initalize connect.php
     include "connect.php";


     if (isset($_POST["submit"])){
          $fname = $_POST["fname"];
          $lname = $_POST["lname"];
          $uname = $_POST["uname"];
          $email = $_POST["email"];
          $password = $_POST["password"];
          $cpassword = $_POST["cpassword"];

          if(empty($fname) && empty($lname) && empty($uname) && empty($email) && empty($password) && empty($cpassword)){
               // Echo error if input is empty
               echo("All fields are required");
          } else {
               if ( $password !=  $cpassword){
                    echo("Password does not match");
               } else{
                    // save data into the database
                    $insert = mysqli_query($conn, "INSERT INTO `Customer Details`(`fname`, `lname`, `uname`, `email`, `password`, `cpassword`) VALUES ('$fname','$lname','$uname','$email','$password','$cpassword')");
                    // Echo success messgae
                    echo('User created Sucessfuly');
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
          /* style the form */
          form{
               padding: 2rem;
               box-shadow: 5px 5px 10px #eee, -5px -5px 10px #eee;
               display: flex;
               flex-direction: column;
               gap: 2rem; 
               margin: 0 auto;
               width: 40%;
               padding-bottom: 10px;
               input{
                    height: 30px;
               }
               input::placeholder{
                    color: #333;
                    font-size: 15px;
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
          <div>Register</div>
          <input type="text" name="fname" id="" placeholder="First Name">
          <input type="text" name="lname" id="" placeholder="Last Name">
          <input type="text" name="uname" id="" placeholder="Username">
          <input type="email" name="email" id="" placeholder="email">
          <input type="password" name="password" id="" placeholder="Password">
          <input type="password" name="cpassword" id="" placeholder="Confirm Password">
          <button type="submit" class="btn" name="submit">Submit</button>
     </form>

     <!-- different password confirm -->
     <!-- New form with full name, age, gender and country -->
</body>
</html>