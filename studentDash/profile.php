<?php
include "connect.php";
session_start();
$sessionMarticNo = $_SESSION['marticNo'];
$select = mysqli_query($conn, "SELECT * FROM `studentdash` WHERE `marticNo` = '$sessionMarticNo'");
$details = mysqli_fetch_assoc($select);

// Logout
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            height: 100vh;
            width: 100vw;
        }
        .container {
            width: 100%;
            height: 100%;
            display: grid;
            grid-template-columns: 0.7fr 3fr;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }
        .sidebar {
          height: 100vh;
            background-color: #333;
            color: #fff;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }
        .logo img {
            width: 150px;
            margin-bottom: 20px;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            margin: 10px 0;
            width: 100%;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .sidebar a:hover, .sidebar a.active {
            background-color: #575757;
        }
        .logout {
            margin-top: auto;
        }
        .logout button {
            background-color: #f44336;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .logout button:hover {
            background-color: #d32f2f;
        }
        .content {
          height: 100vh;
          overflow-y: auto;
            padding: 40px;
        }
        .profile-pic {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 40px;
        }
        .profile-pic img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #333;
        }
        .details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .details div {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .details div span {
            font-weight: bold;
        }
        .details .section-title {
            grid-column: span 2;
            font-size: 1.5rem;
            margin-bottom: 10px;
            background-color: #575757;
            color: #f4f4f4;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<body>
    <div class="container">
    <div class="sidebar">
            <div class="logo"><img src="logo.png" alt="logo"></div>
            <a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <a href="profile.php" class="active"><i class="fas fa-user"></i> Profile</a>
            <a href="edit.php"><i class="fas fa-edit"></i> Edit</a>
            <div class="logout">
                <form action="" method="post">
                    <button type="submit" name="logout"><i class="fas fa-sign-out-alt"></i> Logout</button>
                </form>
            </div>
        </div>
        <div class="content">
            <div class="profile-pic">
                <img src="Uploads/<?php echo $details['image']; ?>" alt="Profile Picture">
            </div>
            <div class="details">
                <div class="section-title">Personal Details</div>
                <div>
                    <span>Name:</span> <?php echo $details['fname'] . ' ' . $details['lname']; ?>
                </div>
                <div>
                    <span>Email:</span> <?php echo $details['email']; ?>
                </div>
                <div>
                    <span>Matric No:</span> <?php echo $details['marticNo']; ?>
                </div>
                <div>
                    <span>Age:</span> <?php echo $details['age']; ?>
                </div>
                <div>
                    <span>Gender:</span> <?php echo $details['gender']; ?>
                </div>
                <div>
                    <span>City:</span> <?php echo $details['city']; ?>
                </div>
                <div>
                    <span>State:</span> <?php echo $details['state']; ?>
                </div>
                <div>
                    <span>Country:</span> <?php echo $details['country']; ?>
                </div>
                <div>
                    <span>Password:</span> <?php echo $details['password']; ?>
                </div>
                <div class="section-title">Academic Details</div>
                <div>
                    <span>Level:</span> <?php echo $details['level']; ?>
                </div>
                <div>
                    <span>Department:</span> <?php echo $details['department']; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>