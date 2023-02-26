<?php 
     include_once './businessLogic/userMapper.php';
     $mapper = new UserMapper();
     $usersList = $mapper->getAllUsers();

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Kosovaa</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/staff.css">

</head>
<body>
    <div id="header">
        <label for="toggle">&#9776;</label>
            <input type="checkbox" id="toggle"/>
        <div class="nav"> 
            <div class="logo">
                <a href="index.php"><img src="images/e-Kosova.png" class="logo" alt="Logo" width="125px"></a>
            </div>
            <div class="navigation">
                <ul>
                    <li><a href="story.php">e-Kosova story</a></li>
                    <li><a href="candidates.php">Candidates</a></li>
                    <li><a href="staff.php">Staff</a></li>
                    <li><a href="contactus.php">Contacts</a></li>
                    <li><a href="login.php">Log in</a></li>
                </ul>
            </div>
            <div class="icons">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>
        </div>
        <div class="staff-section">
            <?php 
            foreach($usersList as $user){
            ?>
                <div class="staff">
                    <div class="staff-img">
                        <img src="<?php echo $user['profile_pic']?>" width="200">
                    </div>
                    <div class="staff-details">
                        <p><?php echo $user['firstname'] ?></p>
                        <p><?php echo $user['email']?></p>
                    </div>

                </div>
            <?php 
            }
            ?>
        </div>
        
    </div>

    
   
    
    
</body>
</html>