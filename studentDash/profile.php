<?php
     include "connect.php";

     session_start();

     $sessionMarticNo = $_SESSION['marticNo'];

     $select = mysqli_query($conn, "SELECT * FROM `studentdash` WHERE `marticNo` = '$sessionMarticNo'");
     $details = mysqli_fetch_assoc($select);

     // Logout
     if (isset($_POST['logout'])) {
          session_unset();
          session_destroy();
          header('location: login.php');
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Student Dashboard</title>
     <style>
          *{
               margin: 0;
               padding: 0;
               box-sizing: border-box;
          }
          body{
               font-family: Arial, sans-serif;
               height: 100vh;
               overflow: hidden;
          }
          .main{
               display: grid;
               grid-template-columns: 1fr 4fr;
               height: 100%;
               .left{
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    padding: 2rem;
                    background-color: antiquewhite;
                    .dp{
                         width: 100px;
                         height: 100px;
                         border-radius: 50%;
                         overflow: hidden;
                         img{
                              width: 100%;
                              height: 100%;
                              object-fit: cover;
                         }
                    }
                    .details{
                         margin-top: 20px;
                         display: flex;
                         flex-direction: column;
                         gap: 1rem;
                         align-items: center;
                         .name{
                              font-size: 1.5rem;
                              font-weight: bold;
                         }
                         .email{
                              font-size: 1rem;
                              color: #777;
                         }
                         .matricNo{
                              font-size: 1rem;
                              color: #777;
                         }
                    }
               }
               .right{
                    display: grid;
                    grid-template-rows: 1fr 1fr 1fr 1fr;
                    gap: 1rem;
                    padding: 2rem;
                    background-color: gray;
                    .someMore, .academics, .personal, .secret{
                         background-color: #f4f4f4;
                         box-shadow: 5px 5px 5px inset aliceblue;
                         padding: 0.5rem;
                         border-radius: 5px;
                         width: 70%;
                         justify-content: space-between;
                         display: flex;
                    }
                    .both{
                         display: flex;
                         flex-direction: column;
                         gap: 1rem;
                         .text{
                              font-weight: bold;
                         }
                    }
               }
          }
          form{
               margin-top: auto;
               button{
                    height: 35px;
                    background-color: #f4f4f4;
                    outline: none;
                    padding: 0.5rem;
                    border: none;
                    box-shadow: 1px 1px 5px #333;
               }
          }
     </style>
</head>
<body>
     
     <!-- Student Profile dashboard -->

     <div class="main">
          <div class="left">
               <div class="dp">
                    <img src="Uploads/<?php echo $details["image"] ?>" alt="profile picture">
               </div>
               <div class="details">
                    <div class="name"><?php echo($details['fname'] . " " .  $details['lname']); ?></div>
                    <div class="email"><?php echo $details['email']; ?></div>
                    <div class="matricNo"><?php echo $details['marticNo']; ?></div>
               </div>
               <div class="links">
                    <div class="link">
                         <a href="edit.php">Edit</a>
                    </div>
               </div>
               <form action="" method="post">
                    <button type="submit" name="logout">-> Logout</button>
               </form>
          </div>
          <div class="right">
               <div class="someMore">
                    <div class="both">
                         <div class="text">Age:</div>
                         <div class="age"><?php echo $details['age']; ?></div>
                    </div>
                    <div class="both">
                         <div class="text">Gender:</div>
                         <div class="gender"><?php echo $details['gender']; ?></div>
                    </div>
               </div>
               <div class="academics">
                    <div class="both">
                         <div class="text">Level:</div>
                         <div class="level"><?php echo $details['level']; ?></div>
                    </div>
                    <div class="both">
                         <div class="text">Department:</div>
                         <div class="department"><?php echo $details['department']; ?></div>
                    </div>
               </div>
               <div class="personal">
                    <div class="both">
                         <div class="text">City: </div>
                         <div class="city"><?php echo $details['city']; ?></div>
                    </div>
                    <div class="both">
                         <div class="text">State:</div>
                         <div class="state"><?php echo $details['state']; ?></div>
                    </div>
                    <div class="both">
                         <div class="text">Country:</div>
                         <div class="country"><?php echo $details['country']; ?></div>
                    </div>
               </div>
               <div class="secret">
                    <div class="both">
                         <div class="text">Password:</div>
                         <div class="password"><?php echo $details['password']; ?></div>
                    </div>
               </div>
          </div>
     </div>

</body>
</html>