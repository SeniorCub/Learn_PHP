<?php
    // Linking connect.php
     include "connect.php";

    // To check if the submit button is clicked
    if (isset($_POST["submit"])) {

        // Save all values collected into variables
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $perm_file = $_FILES["image"]["name"];
        $tmp_file = $_FILES["image"]["tmp_name"];
        $email = $_POST["email"];
        

        if (empty($fname) && empty($lname) && empty($perm_file) && empty($emial)) {
            echo("All fields are required!.");
        }else {
               $insert = mysqli_query($conn, "INSERT INTO `tech2cash`(`fname`, `lname`, `image`, `email`) VALUES  ('$fname', '$lname','$perm_file','$email')");
               move_uploaded_file($tmp_file, "Uploads/$perm_file");
               echo "Post created successfully";
               header("location: profile.php?lname=$lname&fname=$fname&image=$perm_file");
        };
    };

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for Tech2Cash</title>
    <style>
        .form{
            padding: 2rem;
            padding-top: 5px;
            box-shadow: 5px 5px 10px #eee,
            -5px -5px 10px #eee;
            width: 40%;
            margin: 2rem auto;
            form{
                display: flex;
                flex-direction: column;
                gap: 1rem;

            }
            input{
                height: 30px;
            }
            h2{
                font-weight: 900;
                font-family: sans-serif;
                font-size: 2rem;
                text-align: center;
            }
            button{
                width: 25%;
                margin: 0 auto;
                background: #000;
                color: #fff;
                height: 40px;
                border: none;
                border-radius: 5px;
            }
        }
    </style>
</head>
<body>

     <div class="form">
          <h2>Register for Tech2Cash</h2>
          <form action="" method="POST" enctype="multipart/form-data">
               <input type="text" name="fname" id="name" placeholder="Enter your First Name">
               <input type="text" name="lname" id="name" placeholder="Enter your Last Name">
               <input type="file" name="image" id="image">
               <input type="email" name="email" id="email" placeholder="Enter your email">
               <button type="submit" class="btn" name="submit">Submit</button>
          </form>
     </div>
    
</body>
</html