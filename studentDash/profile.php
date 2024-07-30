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
               grid-template-columns: 1fr 5fr;
               height: 100%;
               .left{
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    padding: 2rem;
                    padding-top: 1rem;
                    border-right: 3px solid antiquewhite;
                    background-color: #333;
                    .logo{
                         overflow: hidden;
                         width: 150px;
                         height: 50px;
                         img{
                              width: 100%;
                              height: 100%;
                              object-fit: cover;
                         }
                    }
                    .links{
                         margin-top: auto;
                         display: flex;
                         flex-direction: column;
                         gap: 1rem;
                         justify-content: center;
                         text-align: center;
                         a{
                             color: antiquewhite;
                              padding: 0.5rem 2rem;
                              text-decoration: none;
                              position: relative;
                         }
                         
                         .active, a:hover{
                              background-color: antiquewhite;
                              color: #333;
                              box-shadow: 1px 1px 5px #f4f4f4;
                              ::after{
                                   content: "Click Me";
                                   position: absolute;
                                   top: -20%;
                                   right: -10%;
                              }
                         }
                         a:hover{
                              background-color: #333;
                              color: antiquewhite;
                              span::after{
                                   content: "👍";
                                   position: absolute;
                                   top: -80%;
                                   right: -10%;
                                   color: red;
                                   font-size: 2rem;
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
                              cursor: pointer;
                              box-shadow: 1px 1px 5px #333;
                              background-color: #333;
                              color: antiquewhite;
                         }
                         button:hover{
                              background-color: #333;
                              color: antiquewhite;
                         }
                    }
               }
               .right{
                    background-color: gray;
                    .top{
                         height: 15vh;
                         background-color: #333;
                         padding: 1rem;
                         display: flex;
                         flex-direction: row-reverse;
                         gap: 1rem;
                         border-bottom: 3px solid antiquewhite;
                         justify-content: center;
                         .dp{
                              margin-top: 1rem;
                              border: 3px solid antiquewhite;
                              width: 150px;
                              height: 150px;
                              border-radius: 50%;
                              overflow: hidden;
                              img{
                                   width: 100%;
                                   height: 100%;
                                   object-fit: cover;
                              }
                         }
                    }
                    .others{
                         padding-top: 5rem;
                         .details{
                              display: flex;
                              justify-content: center;
                              align-items: center;
                              flex-direction: column;
                              gap: 0.5rem;
                              .name{
                                   font-size: 2rem;
                                   font-weight: bold;
                              }
                              .email{
                                   font-size: 1rem;
                              }
                              .matricNo{
                                   font-size: 1rem;
                              }
                         }
                    }
                    .more{
                         display: grid;
                         grid-template-columns: repeat(2, 1fr);
                         justify-content: center;
                         padding: 2rem;
                         gap: 2rem;
                    }
                    .someMore, .academics, .personal, .secret{
                         background-color: #f4f4f4;
                         box-shadow: 5px 5px 5px inset aliceblue;
                         padding: 0.5rem;
                         border-radius: 5px;
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
          
     </style>
</head>
<body>

     <div class="main">
          <div class="left">
               <div class="logo"><img src="logo.png" alt="logo"></div>
               <div class="links">
                    <a href="#">Dashboard</a>
                    <a href="#" class="active">Profile</a>
                    <a href="edit.php"><span>Edit</span></a>
               </div>
               <form action="" method="post">
                    <button type="submit" name="logout">-> Logout</button>
               </form>
          </div>
          <div class="right">
               <div class="top">
                    <div class="dp">
                         <img src="Uploads/<?php echo $details["image"] ?>" alt="profile picture">
                    </div>
               </div>
               <div class="others">
                    <div class="details">
                         <div class="name"><?php echo($details['fname'] . " " .  $details['lname']); ?></div>
                         <div class="email"><?php echo $details['email']; ?></div>
                         <div class="matricNo"><?php echo $details['marticNo']; ?></div>
                    </div>
                    <div class="more">
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
          </div>
     </div>
</body>
</html>