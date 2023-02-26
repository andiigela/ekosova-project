<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index - Admin</title>
    <link rel="stylesheet" href="css/indexadmin.css">
    <link rel="stylesheet" href="css/dashboardHamburger.css">
    <link rel="stylesheet" href="css/editProfileForm.css">
    
</head>
<body>
    <div class="header">
        <label for="toggle">&#9776;</label>
                <input type="checkbox" id="toggle"/>
        <div class="nav">
            <div class="left-side">
                <ul>
                    <li><a href="./allCandidates.php">Candidates</a></li>
                    <?php if(isset($_SESSION['role']) && $_SESSION['role'] == "1"){?>
                    <li><a href="./dashboard.php">Dashboard</a></li>
                    <?php
                    }
                    ?>
                    <li><a href="./editProfile.php">Edit Profile</a></li>
                    <li><a href="./allFeedback.php">Feedback</a></li>
                    
                </ul>
            </div>
       