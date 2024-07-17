<?php
     include "connect.php";

     $selectAll = mysqli_query($conn, "SELECT * FROM `products`");
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
                    display: grid;
                    grid-template-rows: 2fr 1fr 2fr 1fr;
                    padding: 1rem;
                    box-shadow: 5px 5px 10px #eee, -5px -5px 10px #eee;
                    border: 3px dashed #01234567;
                    border-radius: 10px;
                    img{
                         height: 100px;
                         width: 100%;
                         object-fit: contain;
                    }
                    .two{
                         display: flex;
                         align-items: center;
                         justify-content: space-between;
                         .name{
                              width: 100px;
                              font-weight: 700;
                              font-size: 1.5rem;
                              overflow-x: hidden;
                         }
                         .price{
                              font-weight: 500;
                              font-size: 1rem;
                         }
                    }
                    button{
                         background: black;
                         width: 50%;
                         color: white;
                         float: right;
                         height: 40px;
                         border: none;
                         border-radius: 5px;
                    }
               }
          }
     </style>
</head>
<body>

     <h1>All Products</h1>
     <div class="products">
          <?php 
               while($detail = mysqli_fetch_assoc($selectAll)){
          ?>
          <div class="product">
               <div class="one"><img src="Uploads/<?php echo $detail["image"] ?>" alt="..."></div>
               <div class="two">
                    <div class="name"><?php echo $detail["name"] ?></div>
                    <div class="price">$<span><?php echo $detail["price"] ?></span></div>
               </div>
               <div class="three"><?php echo $detail["description"] ?></div>
               <div class="four">
                    <button>Add to Cart</button>
               </div>
          </div>
          <?php
          }
          ?>
     </div>

</body>
</html>