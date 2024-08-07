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
     <title>Profile Update</title>
     <style>
          * {
               margin: 0;
               padding: 0;
               box-sizing: border-box;
          }
          body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100vw;
        }
        .container {
            width: 100%;
            height: 100%;
            display: grid;
            grid-template-columns: 0.7fr 3fr;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }
        .sidebar {
          height: 100vh;
            background-color: #333;
            color: #fff;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }
        .logo img {
            width: 150px;
            margin-bottom: 20px;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            margin: 10px 0;
            width: 100%;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .sidebar a:hover, .sidebar a.active {
            background-color: #575757;
        }
        .logout {
            margin-top: auto;
        }
        .logout button {
            background-color: #f44336;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .logout button:hover {
            background-color: #d32f2f;
        }
        .content {
          height: 100vh;
          overflow-y: auto;
            padding: 40px;
        }
          .profile-pic {
               display: flex;
               justify-content: center;
               align-items: center;
               margin-bottom: 40px;
          }
          .profile-pic label img {
               width: 150px;
               height: 150px;
               border-radius: 50%;
               object-fit: cover;
               cursor: pointer;
               border: 3px solid #333;
               transition: transform 0.3s ease;
          }
          .profile-pic label img:hover {
               transform: scale(1.1);
          }
          .profile-pic input {
               display: none;
          }
          .form {
               display: grid;
               grid-template-columns: repeat(2, 1fr);
               gap: 20px;
          }
          .form label {
               font-weight: bold;
               margin-bottom: 10px;
               display: block;
          }
          .form input {
               width: 100%;
               padding: 10px;
               border: 1px solid #ccc;
               border-radius: 5px;
               margin-bottom: 20px;
               transition: border-color 0.3s ease;
          }
          .form input:focus {
               border-color: #333;
          }
          .form button {
               grid-column: span 2;
               background-color: #333;
               color: #fff;
               border: none;
               padding: 15px;
               border-radius: 5px;
               cursor: pointer;
               transition: background-color 0.3s ease;
          }
          .form button:hover {
               background-color: #555;
          }
     </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<body>
     <div class="container">
     <div class="sidebar">
            <div class="logo"><img src="logo.png" alt="logo"></div>
            <a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <a href="profile.php"><i class="fas fa-user"></i> Profile</a>
            <a href="edit.php"  class="active"><i class="fas fa-edit"></i> Edit</a>
            <div class="logout">
                <form action="" method="post">
                    <button type="submit" name="logout"><i class="fas fa-sign-out-alt"></i> Logout</button>
                </form>
            </div>
        </div>
          <div class="content">
               <form action="" method="POST" enctype="multipart/form-data">
                    <div class="profile-pic">
                         <label for="image"><img src="Uploads/<?php echo $details['image'] ?>" alt="profile picture"></label>
                         <input type="file" name="image" id="image">
                    </div>
                    <div class="form">
                         <div>
                              <label for="fname">First Name</label>
                              <input type="text" name="fname" id="fname" value="<?php echo $details['fname']; ?>" placeholder="First Name">
                         </div>
                         <div>
                              <label for="lname">Last Name</label>
                              <input type="text" name="lname" id="lname" value="<?php echo $details['lname']; ?>" placeholder="Last Name">
                         </div>
                         <div>
                              <label for="email">Email</label>
                              <input type="email" name="email" id="email" disabled value="<?php echo $details['email']; ?>" placeholder="Email">
                         </div>
                         <div>
                              <label for="password">Password</label>
                              <input type="password" name="password" id="password" placeholder="Password">
                         </div>
                         <div>
                              <label for="level">Level</label>
                              <input type="text" name="level" id="level" value="<?php echo $details['level']; ?>" placeholder="Level">
                         </div>
                         <button type="submit" name="update">Update</button>
                    </div>
               </form>
          </div>
     </div>
</body>
</html>