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
     <style>
          *{
               padding: 0;
               margin: 0;
               box-sizing: border-box;
          }
          .head{
               text-align: center;
               margin-top: 2rem;
               font-size: 5rem;
               letter-spacing: 10px;
               text-shadow: -5px -3px 10px grey;
          }
          .min{
               display: grid;
               grid-template-columns: 1fr 2fr;
               width: 50vw;
               margin: 0 auto;
               background-color: grey;
               margin-top: 10vh;
               border: 2px solid black;
               padding: 1rem;
               .one{
                    width: 90%;
                    height: 100%;
                    margin: auto;
                    img{
                         width: 100%;
                         height: 100%;
                         object-fit: cover;
                    }
               }
               .two{
                    border-left: 2px solid black;
                    padding: 1rem;
                    background-color: blue;
                    .header{
                         padding: 1rem 0;
                         .onee{
                              display: flex;
                              gap: 1rem;
                              font-size: 1.5rem;
                         }
                         .uname{
                              letter-spacing: 4px;
                              font-size: 1rem;
                         }
                    }
                    hr{
                         border: 1px solid black;
                         margin: 1rem 0;
                    }
                    .down{
                         .up{
                              font-size: 1rem;
                              text-align: center;
                              letter-spacing: 8px;
                         }
                         .butt{
                              display: flex;
                              justify-content: space-around;
                              padding: 1rem 0;
                              width: 100%;
                              font-size: 0.7rem;
                         }
                    }
               }
          }
     </style>
</head>
<body>

     <h1 class="head">Welcome</h1>

     <div class="min">
          <div class="one">
               <img src="Uploads/<?php echo $details["image"] ?>" alt=".....">
          </div>
          <div class="two">
               <div class="header">
                    <div class="onee">
                         <h1 class="fname"><?php echo $details['fname']; ?></h1>
                         <h1 class="lname"><?php echo $details['lname']; ?></h1>
                    </div>
                    <h3 class="uname"><?php echo $details['uname']; ?></h3>
               </div>
               <hr>
               <div class="down">
                    <div class="up"><h3 class="email"><?php echo $details['email']; ?></h3></div>
                    <div class="butt">
                         <h6 class="password">Password: <?php echo $details['password']; ?></h6>
                         <h6 class="password">Confirm Password: <?php echo $details['cpassword']; ?></h6>
                    </div>
               </div>
          </div>
     </div>

</body>
</html>