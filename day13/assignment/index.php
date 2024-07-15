<?php
     include "connect.php";


     if (isset($_POST["submit"])) {
          $fname = $_POST["fname"];
          $lname = $_POST["lname"];
          $age = $_POST["age"];
          $gender = $_POST["gender"];
          $country = $_POST["country"];

          if (empty($fname) && empty($lname) && empty($age) && empty($gender) && empty($country)) {
               $condition = "All fields are required";
          } else {
               if (empty($fname)){
                    $cond1 = "First Name is required";
               } elseif (empty($lname)) {
                    $cond2 = "Last Name is required";
               } elseif (empty($age)) {
                    $cond3 = "Age is required";
               } elseif (empty($gender)) {
                    $cond4 = "Gender is required";
               } elseif (empty($country)) {
                    $cond5 = "Country is required";
               } elseif ($age < 18) {
                    $cond3 = "You are not eligible to register";
               }
               else{
                    $sen = mysqli_query($conn, "INSERT INTO `Customer Details Assignment2`(`fname`, `lname`, `age`, `gender`, `country`) VALUES ('$fname','$lname','$age','$gender','$country')");
                    $condit = "User created Successfuly";
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
               box-shadow: 10px 10px 10px #eee, -10px -10px 10px #eee;
               display: flex;
               flex-direction: column;
               /* gap: 2rem;  */
               margin: 0 auto;
               width: 40%;
               padding-bottom: 10px;
               input{
                    height: 30px;
                    margin: 1rem 0;
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
          <?php echo("<p style='color: red; font-size: 20px; padding: 0px; margin: 0px; text-align:center; '>$cond1</p>"); ?>
          <input type="text" name="lname" id="" placeholder="Last Name">
          <?php echo("<p style='color: red; font-size: 20px; padding: 0px; margin: 0px; text-align:center; '>$cond2</p>"); ?>
          <input type="number" name="age" id="" placeholder="Age">
          <?php echo("<p style='color: red; font-size: 20px; padding: 0px; margin: 0px; text-align:center; '>$cond3</p>"); ?>
          <input type="text" name="gender" id="" placeholder="Gender">
          <?php echo("<p style='color: red; font-size: 20px; padding: 0px; margin: 0px; text-align:center; '>$cond4</p>"); ?>
          <input type="text" name="country" id="" placeholder="Country">
          <?php echo("<p style='color: red; font-size: 20px; padding: 0px; margin: 0px; text-align:center; '>$cond5</p>"); ?>
          <?php echo("<p style='color: red; font-size: 20px; padding: 0px; margin: 0px; text-align:center; '>$condition</p>"); ?>
          <?php echo("<p style='color: green; font-size: 20px; padding: 0px; margin: 0px; text-align:center; '>$condit</p>"); ?>
          <button type="submit" class="btn" name="submit">Submit</button>
     </form>

</body>
</html>