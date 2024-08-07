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
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .profile-summary {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .profile-summary img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #333;
            margin-right: 20px;
        }
        .profile-summary .info {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .profile-summary .info span {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .nav-sections {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            width: 100%;
        }
        .nav-sections .section {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }
        .nav-sections .section:hover {
            background-color: #ddd;
        }
        .nav-sections .section i {
            font-size: 2rem;
            margin-bottom: 10px;
            color: #333;
        }
        .nav-sections .section span {
            font-weight: bold;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="logo"><img src="logo.png" alt="logo"></div>
            <a href="#" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <a href="profile.php"><i class="fas fa-user"></i> Profile</a>
            <a href="edit.php"><i class="fas fa-edit"></i> Edit</a>
            <div class="logout">
                <form action="" method="post">
                    <button type="submit" name="logout"><i class="fas fa-sign-out-alt"></i> Logout</button>
                </form>
            </div>
        </div>
        <div class="content">
            <div class="profile-summary">
                <img src="Uploads/<?php echo $details['image']; ?>" alt="Profile Picture">
                <div class="info">
                    <span>Name: <?php echo $details['fname'] . ' ' . $details['lname']; ?></span>
                    <span>Email: <?php echo $details['email']; ?></span>
                    <span>Matric No: <?php echo $details['marticNo']; ?></span>
                </div>
            </div>
            <div class="nav-sections">
                <div class="section">
                    <i class="fas fa-book"></i>
                    <span>Courses</span>
                </div>
                <div class="section">
                    <i class="fas fa-chart-line"></i>
                    <span>Grades</span>
                </div>
                <div class="section">
                    <i class="fas fa-calendar"></i>
                    <span>Schedule</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>