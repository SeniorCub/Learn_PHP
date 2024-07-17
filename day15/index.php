<?php
     include "connect.php";

     $selectAll = mysqli_query($conn, "SELECT * FROM day_14");
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
                    <th>S/N</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>email</th>
                    <th>Dp</th>
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
               </tr>
          </tbody>
          <?php
               }
          ?>
     </table>
</body>
</html>