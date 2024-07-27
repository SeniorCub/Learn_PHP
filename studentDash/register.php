<?php
    // Linking connect.php
     include "connect.php";

     // Select all users from the tech2cash table
     $selectAll = mysqli_query($conn, "SELECT * FROM `studentDash`");
     // Get the total number of users
     $totalUsers = mysqli_num_rows($selectAll);
     // Increment the total number of users by 1 to get the next user number
     $nextUserNumber = $totalUsers + 1;
     // Format the user number to be 4 digits with leading zeros
     $formattedUserNumber = str_pad($nextUserNumber, 4, "0", STR_PAD_LEFT);
     // Get the current year
     $currentYear = date("Y");
     // Generate the matric number by concatenating the year and the formatted user number
     $matricNoo = $currentYear . $formattedUserNumber;

     $condition ="";

    // To check if the submit button is clicked
    if (isset($_POST["submit"])) {

        // Save all values collected into variables
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $perm_file = $_FILES["image"]["name"];
        $tmp_file = $_FILES["image"]["tmp_name"];
        $email = $_POST["email"];
        $matricNo = $matricNoo;
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        $level = $_POST["level"];
        $department = $_POST["department"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $country = $_POST["country"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        

        if (empty($fname) && empty($lname) && empty($perm_file) && empty($email) && empty($matricNo) && empty($age) && empty($gender) && empty($level) && empty($department) && empty($city) && empty($state) && empty($country) && empty($password) && empty($cpassword)) {
            $condition = "All fields are required!.";
        }else {
               if ($password != $cpassword){
                    $condition ="Password does not patch";
               } else {
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);    
                    $insert = mysqli_query($conn, "INSERT INTO `studentdash`(`fname`, `lname`, `image`, `email`, `marticNo`, `age`, `gender`, `level`, `department`, `city`, `state`, `country`, `password`) VALUES ('$fname','$lname','$perm_file','$email','$matricNo','$age','$gender','$level','$department','$city','$state','$country','$hashedPassword')");
                    move_uploaded_file($tmp_file, "Uploads/$perm_file");
                    $condition = 'User created Sucessfuly';
                    header("location: login.php");
               }
        };
    };

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <style>
     *{
          padding: 0;
          margin: 0;
          box-sizing: border-box;
     }
     .form{
          padding:1rem 2rem;
          box-shadow: 5px 5px 10px #eee,
          -5px -5px 10px #eee;
          width: 50%;
          margin: 0 auto;
          margin-top: 1rem;
          form{
               display: flex;
               flex-direction: column;
               gap: 1rem;
               justify-content: center;
          }
          .forms{
               display: grid;
               grid-template-columns: repeat(2,1fr);
               gap: 2rem;
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
               background-color: #eee;
               outline: none;
               padding: 0.5rem;
               border: none;
               box-shadow: none;
          }
          input::placeholder{
               color: #333;
          }
          .input{
               height: 35px;
               width: 100%;
               background-color: #eee;
               padding: 0.5rem;
               color: #333;
               #image{
                    display: none;
               }
          }
          h2{
               font-weight: 900;
               font-family: sans-serif;
               font-size: 2rem;
               text-align: center;
               margin: 1rem;
          }
          .condition{
               color: #333;
               text-align: center;
               padding: 0;
               margin: 0;
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
          <h2>Application Form</h2>
          <form action="" method="POST" enctype="multipart/form-data">
               <div class="forms">
                    <input type="text" name="fname" id="name" placeholder="Enter your First Name">
                    <input type="text" name="lname" id="name" placeholder="Enter your Last Name">
                    <div class="input">
                         <label for="image" id="imah">Upload your picture</label>
                         <input type="file" name="image" id="image">
                    </div>
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                    <input type="number" name="marticNo" id="maticNo" disabled value="<?php echo($matricNoo); ?>">
                    <input type="number" name="age" id="age" placeholder="Enter your age">
                    <input type="text" name="gender" id="gender" placeholder="Enter your gender">
                    <input type="number" name="level" id="level" placeholder="Enter your level">
                    <input type="text" name="department" id="department" placeholder="Enter your department">
                    <input type="text" name="city" id="city" placeholder="Enter your City">
                    <input type="text" name="state" id="state" placeholder="Enter your state">
                    <input type="text" name="country" id="country" placeholder="Enter your country">
                    <input type="password" name="password" id="password" placeholder="Create a password">
                    <input type="password" name="cpassword" id="cpassword" placeholder="Confirm your password">
               </div>
               <p class="condition"><?php echo($condition); ?></p>
               <button type="submit" class="btn" name="submit">Apply</button>
          </form>
     </div>
</body>
</html