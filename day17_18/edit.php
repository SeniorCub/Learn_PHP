<?php
     // initalize connect.php
     include "connect.php";
     
     session_start();

     $sessionEmail = $_SESSION['email'];

     $select = mysqli_query($conn, "SELECT * FROM `customer details` WHERE `email` = '$sessionEmail'");
     $details = mysqli_fetch_assoc($select);

     if (isset($_POST["update"])){
          $fname = $_POST["fname"];
          $lname = $_POST["lname"];
          $password = $_POST["password"];

          if(empty($fname) && empty($lname) && empty($password)){
               // Echo error if input is empty
               echo("All fields are required");
          } else {
               $update = mysqli_query($conn, "UPDATE `customer details` SET `fname`='$fname',`lname`='$lname',`password`='$password'");
               if ($update){
                    echo('User created Sucessfuly');
                    header("location: index.php");
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
          <!-- <div>Register</div> -->
          <input type="text" name="fname" id="" value="<?php echo($details['fname']); ?>" placeholder="First Name">
          <input type="text" name="lname" id="" value="<?php echo($details['lname']); ?>" placeholder="Last Name">
          <input type="text" name="uname" id="" disabled value="<?php echo($details['uname']); ?>" placeholder="Username">
          <input type="email" name="email" id="" disabled value="<?php echo($details['email']); ?>" placeholder="email">
          <input type="password" name="password" id="" value="<?php echo($details['password']); ?>" placeholder="Password">
          <button type="submit" class="btn" name="update">Update</button>
     </form>

</body>
</html>