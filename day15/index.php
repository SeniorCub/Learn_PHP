<?php
     include "connect.php";

     $selectAll = mysqli_query($conn, "SELECT * FROM day_14");

     if (isset($_GET['delete'])) {
          $email = $_GET["delete"];

          $delete = mysqli_query($conn, "DELETE FROM `day_14` WHERE `email` = '$email'");
          if ($delete) {
               header("location: index.php");
          }
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <table border="1">
          <thead>
               <tr>
                    <th>S/N <span>&#128516</span></th>
                    <th>First Name <span>&#128515</span></th>
                    <th>Last Name <span>&#128517</span></th>
                    <th>email <span>&#128513</span></th>
                    <th>Dp <span>&#128512</span></th>
                    <th> <span>&#128514</span></th>
               </tr>
          </thead>
          <?php
               while($details = mysqli_fetch_assoc($selectAll)){
          ?>
          <tbody>
               <tr>
                    <td>
                         <?php
                              echo $details["id"];
                         ?>
                    </td>
                    <td>
                         <?php
                              echo $details["fname"];
                         ?>
                    </td>
                    <td>
                         <?php
                              echo $details["lname"];
                         ?>
                    </td>
                    <td>
                         <?php
                              echo $details["email"];
                         ?>
                    </td>
                    <td>
                         <img src="Uploads/<?php echo $details["file"]?>" width="50px" alt="...">
                    </td>
                    <td>
                         <a href="index.php?delete=<?php echo $details["email"];?>"><button type="submit" name="delete">Delete User</button></a>
                    </td>
               </tr>
          </tbody>
          <?php
               }
          ?>
     </table>
</body>
</html>