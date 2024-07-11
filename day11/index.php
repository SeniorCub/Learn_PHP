<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <style>
          form{
               padding: 2rem;
               box-shadow: 5px 5px 10px #eee, -5px -5px 10px #eee;
               display: flex;
               flex-direction: column;
               gap: 2rem;
               margin: 0 auto;
               width: 40%;
               input{
                    height: 30px;
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
<?php
     $condition = isset($_GET["msg"]) ? $_GET["msg"] : null;
     // echo $condition;
     echo("<p style='color: red; font-size: 20px;'>$condition</p>")
?>
     <form action="storage.php" method="POST">
          <div>Login</div>
          <input type="email" name="email" id="">
          <input type="password" name="password" id="">
          <button type="submit" class="btn">Submit</button>
     </form>

     <!-- Trnary operation -->
     <!-- 
          x = 5;
          if (x = 5){
               echo "true";
          } else {
               echo "false"; 
          }

          x=5?echo "true" : echo "false;
     -->
</body>
</html>