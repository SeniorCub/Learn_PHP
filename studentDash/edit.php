<?php
     // initalize connect.php
     include "connect.php";
     
     session_start();

     $sessionMarticNo = $_SESSION['marticNo'];

     $select = mysqli_query($conn, "SELECT * FROM `studentdash` WHERE `marticNo` = '$sessionMarticNo'");
     $details = mysqli_fetch_assoc($select);

     if (isset($_POST["update"])){
          $fname = $_POST["fname"];
          $lname = $_POST["lname"];
          $level = $_POST["level"];
          $perm_file = $_FILES["image"]["name"];
          $tmp_file = $_FILES["image"]["tmp_name"];
          $password = $_POST["password"];

          if(empty($fname) && empty($lname)){
               // Echo error if input is empty
               echo("All fields are required");
          } else {
               if (empty($perm_file)) {
                    $perm_file = $details["image"];
               } 
               $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
               $update = mysqli_query($conn, "UPDATE `studentdash` SET `fname`='$fname',`lname`='$lname',`image`='$perm_file',`level`='$level',`password`='$hashedPassword'  WHERE `marticNo` = '$sessionMarticNo'");
               move_uploaded_file($tmp_file, "Uploads/$perm_file");
               if ($update){
                    echo('User created Sucessfuly');
                    header("location: profile.php");
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
                         .form{
                              padding: 3rem;
                              display: grid;
                              grid-template-columns: repeat(3, 1fr);
                              gap: 1rem;
                         }
                    }
                    .both{
                         display: flex;
                         flex-direction: column;
                         gap: 1rem;
                         padding: 1rem;
                         .text{
                              font-weight: bold;
                         }
                         input:focus{
                              height: 35px;
                              background-color: #eee;
                              outline: none;
                              padding: 0.5rem;
                              border: none;
                              box-shadow: none;
                         }
                         input{
                              height: 35px;
                              background-color: transparent;
                              border: none;
                              border-bottom: 2px solid antiquewhite;
                              outline: none;
                              padding: 0.5rem;
                              box-shadow: none;
                         }
                         input::placeholder{
                              color: #333;
                         }
                    }
                    button{
                         width: 25%;
                         margin: 0 auto;
                         margin-top: auto;
                         background: #000;
                         color: #fff;
                         height: 40px;
                         border: none;
                         border-radius: 5px;
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
                    <a href="#"><span>Dashboard</span></a>
                    <a href="profile.php"><span>Profile</span></a>
                    <a href=""  class="active"><span>Edit</span></a>
               </div>
               <form action="" method="post">
                    <button type="submit" name="logout">-> Logout</button>
               </form>
          </div>
          <div class="right">
               <form action="" method="POST"  enctype="multipart/form-data">
                    <div class="top">
                         <div class="dp">
                              <label for="image" id="imah"><img src="Uploads/<?php echo $details["image"] ?>" alt="profile picture"></label>
                              <input type="file" name="image" id="image" style="display: none;">
                         </div>
                    </div>
                    <div class="others">
                         <div class="form">
                              <div class="both">
                                   <label for="fname">First Name</label>
                                   <input type="text" name="fname" id="" value="<?php echo($details['fname']); ?>" placeholder="First Name">
                              </div>
                              <div class="both">
                                   <label for="lname">Last Name</label>
                                   <input type="text" name="lname" id="" value="<?php echo($details['lname']); ?>" placeholder="Last Name">
                              </div>
                              <div class="both">
                                   <label for="lname">Email</label>
                                   <input type="email" name="email" id="" disabled value="<?php echo($details['email']); ?>" placeholder="email">
                              </div>
                              <div class="both">
                                   <label for="lname">Password</label>
                                   <input type="password" name="password" id="" value="" placeholder="Password">
                              </div>
                              <button type="submit" class="btn" name="update">Update</button>
                              <div class="both">
                                   <label for="lname">Level</label>
                                   <input type="level" name="level" id="" value="<?php echo($details['level']); ?>" placeholder="level">
                              </div>
                         </div>
                    </div>
               </form>
          </div>
     </div>
</body>
</html>