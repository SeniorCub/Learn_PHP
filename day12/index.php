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
               box-shadow: 5px 5px 10px #eee, -5px -5px 10px #eee;
               display: flex;
               flex-direction: column;
               gap: 2rem; 
               margin: 0 auto;
               width: 40%;
               padding-bottom: 10px;
               input{
                    height: 30px;
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

     <!-- Create a form and style it having first name, last name, username, gender, password and confirm password... -->
     <form action="storage.php" method="POST">
          <div>Register</div>
          <input type="text" name="first_name" id="" placeholder="First Name">
          <input type="text" name="last_name" id="" placeholder="Last Name">
          <input type="text" name="username" id="" placeholder="Username">
          <input type="text" name="gender" id="" placeholder="Gender">
          <input type="password" name="password" id="" placeholder="Password">
          <input type="password" name="conPassword" id="" placeholder="Confirm Password">
          <?php
               $condition = isset($_GET["msg"]) ? $_GET["msg"] : null;
               echo("<p style='color: red; font-size: 20px; padding: 0px; margin: 0px; text-align:center; line-height:0px;'>$condition</p>")
          ?>
          <button type="submit" class="btn">Submit</button>
     </form>

</body>
</html>