<?php
     include "connect.php";

     session_start();

     $sessionEmail = $_SESSION['email'];

     $select = mysqli_query($conn, "SELECT * FROM `customer details` WHERE `email` = '$sessionEmail'");
     $details = mysqli_fetch_assoc($select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>

     <h1 class="fname"><?php echo $details['fname']; ?></h1>
     <h1 class="lname"><?php echo $details['lname']; ?></h1>
     <h3 class="uname"><?php echo $details['uname']; ?></h3>
     <h3 class="email"><?php echo $details['email']; ?></h3>
     <img src="Uploads/<?php echo $details["image"] ?>" alt="....." width="200px">
     <h6 class="password"><?php echo $details['password']; ?></h6>

</body>
</html>