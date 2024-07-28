<?php
     include "connect.php";

     $selectAll = mysqli_query($conn, "SELECT * FROM `studentdash`");
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <style>
          tr{
               img{
                    width: 50px;
                    height: 50px;
               }
          }
     </style>
</head>
<body>
     <h1>All Students</h1>

     <table border="1" >
          <thead>
               <tr>
                    <th>Picture</th>
                    <th>Full name</th>
                    <th>Email</th>
                    <th>Matric Number</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Level</th>
                    <th>Department</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Country</th>
               </tr>
          </thead>
          <tbody>
          <?php 
               while($details = mysqli_fetch_assoc($selectAll)){
          ?>
          <tr>
               <td class="dp">
                    <img src="Uploads/<?php echo $details["image"] ?>" alt="profile picture">
               </td>
               <td class="name"><?php echo($details['fname'] . " " .  $details['lname']); ?></td>
               <td class="email"><?php echo $details['email']; ?></td>
               <td class="matricNo"><?php echo $details['marticNo']; ?></td>
               <td class="age"><?php echo $details['age']; ?></td>
               <td class="gender"><?php echo $details['gender']; ?></td>
               <td class="level"><?php echo $details['level']; ?></td>
               <td class="department"><?php echo $details['department']; ?></td>
               <td class="city"><?php echo $details['city']; ?></td>
               <td class="state"><?php echo $details['state']; ?></td>
               <td class="country"><?php echo $details['country']; ?></td>
          </tr>
          <?php
               }
          ?>
          </tbody>
     </table>
     
</body>
</html>