<?php
    // Linking connect.php
         include "connect.php";
     // $conn = mysqli_connect("localhost","root", "","FirstWork");



    // To check if the submit button is clicked
    if (isset($_POST["submit"])) {

        // Save all values collected into variables
        $name = $_POST["name"];
        $perm_file = $_FILES["image"]["name"];
        $tmp_file = $_FILES["image"]["tmp_name"];
        $price = $_POST["price"];
        $description = $_POST["description"];
        

        if (empty($name) && empty($perm_file) && empty($price) && empty($description)) {
            // Echo error if all values are not filled
            echo("All fields are required!.");
        }else {
               $insert = mysqli_query($conn, "INSERT INTO `products`(`name`, `image`, `price`, `description`) VALUES ('$name','$perm_file','$price','$description')");
               move_uploaded_file($tmp_file, "Uploads/$perm_file");
               echo "Product created successfully";
        };
    };

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                font-size: 3rem;
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
            textarea{
               resize: none;
               height: 50px;
            }
        }
    </style>
</head>
<body>

     <div class="form">
          <h2>Create Product</h2>
          <form action="" method="POST" enctype="multipart/form-data">
               <input type="text" name="name" id="name" placeholder="Enter the name">
               <input type="file" name="image" id="image">
               <input type="number" name="price" id="price" placeholder="Enter the price">
               <textarea name="description" id="description" placeholder="Enter the description"></textarea>
               <button type="submit" class="btn" name="submit">Submit</button>
          </form>
     </div>
    
</body>
</html