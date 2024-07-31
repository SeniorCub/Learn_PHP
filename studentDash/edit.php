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
          $password = $_POST["password"];

          if(empty($fname) && empty($lname)){
               // Echo error if input is empty
               echo("All fields are required");
          } else {
               $update = mysqli_query($conn, "UPDATE `studentdash` SET `fname`='$fname',`lname`='$lname'  WHERE `marticNo` = '$sessionMarticNo'");
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
                         form{
                              padding: 3rem;
                              display: grid;
                              grid-template-columns: repeat(3, 1fr);
                         }
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
     
</body>
</html>