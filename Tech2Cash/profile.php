<?php
     $lname = isset($_GET["lname"]) ? $_GET["lname"] : null;
     $fname = isset($_GET["fname"]) ? $_GET["fname"] : null;
     $image = isset($_GET["image"]) ? $_GET["image"] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Profile</title>
     <style>
          *{
               padding: 0;
               margin: 0;
               box-sizing: border-box;
          }
          .cards{
               width: 25vw;
               margin: 0 auto;
               margin-top: 10vh;
               img{
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
               }
               .card{
                    padding: 1rem;
                    position: relative;
                    border-radius: 1rem;
                    background-color: #786fab;
                    .img{
                         position: absolute;
                         right: 1rem;
                         width: 100px;
                    }
                    .head{
                         font-size: 2rem;
                         color: white;
                         font-weight: 800;
                         margin-top: 1rem;
                    }
                    .middle{
                         border-radius: 1rem;
                         position: relative;
                         border: 1px solid black;
                         overflow: hidden;
                         height: 250px;
                         .top{
                              position: absolute;
                              background-color: #999;
                              right: 1px;
                              font-size: 2rem;
                              width: 90px;
                              padding: 0.5rem;
                              height: max-content;
                              color: #fff;
                         }
                         .name{
                              font-size: 2.5rem;
                              color: white;
                              font-weight: 800;
                              position: absolute;
                              left: 5px;
                              bottom: 5px;
                              text-shadow: -3px -1px 0px #e487bc;
                              display: flex;
                              flex-direction: column;
                         }
                    }
                    .txet{
                         margin-top: 30px;
                         margin-bottom: 15px;
                         color: #fff;
                    }
                    button{
                         background-color: #e487bc;
                         border-radius: 1rem;
                         padding: 1rem;
                         margin-top: 5px;
                         border: none;
                         outline: none;
                         a{
                              color: #fff;
                              font-weight: 400;
                              text-decoration: none;
                              font-size: 1rem;
                         }
                    }
               }
          }
     </style>
</head>
<body>

     <div class="cards">
          <div class="card">
               <div class="img"><img src="Asset 121.png" alt="....."></div>
               <h4 class="head">Tech2Cash</h4>
               <div class="middle">
                    <div class="top">I will be there</div>
                    <img src="Uploads/<?php echo $image ?>" alt=".....">
                    <div class="name">
                         <div class="lname"><?php echo $lname?></div>
                         <div class="fname"><?php echo $fname ?></div>
                    </div>
               </div>
               <p class="txet">I just register for "Tech2Cash" event! see you there</p>
               <button type="button" class="btn"><a href="www.buggybillions.com/tech2cash">www.buggybillions.com/tech2cash</a></button>
          </div>
     </div>
     
</body>
</html>