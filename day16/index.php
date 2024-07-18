<?php
     include "connect.php";

     $selectAll = mysqli_query($conn, "SELECT * FROM `post`");
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <style>   
          .products{
               display: grid;
               grid-template-columns: repeat(4, 1fr);
               padding: 2rem;
               gap: 20px;
               .product{
                    box-shadow: 5px 5px 10px #eee, -5px -5px 10px #eee;
                    border: 3px dashed #01234567;
                    border-radius: 10px;
                    .one{
                         height: 290px;
                    }
                    img{
                         width: 100%;
                         height: 100%;
                         object-fit: cover;
                    }
                    .two, .three{
                         font-size: 1.5rem;
                         font-weight: 700;
                         text-align: center;
                    }
                    .three{
                         font-size: 1rem;
                         font-weight: 400;
                    }
               }
          }
     </style>
</head>
<body>

     <div class="products">
          <?php 
               while($detail = mysqli_fetch_assoc($selectAll)){
          ?>
          <div class="product">
               <div class="one"><img src="Uploads/<?php echo $detail["image"] ?>" alt="..."></div>
               <div class="two"><?php echo $detail["name"] ?></div>
               <div class="three"><?php echo $detail["description"] ?></div>
          </div>
          <?php
          }
          ?>
     </div>

</body>
</html>