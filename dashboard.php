<?php 
    include './components/header.php';
    include_once './businessLogic/userMapper.php';
    include_once 'firstnameSession.php';

    if (isset($_SESSION["role"])) {
        $mapper = new UserMapper();
        $usersList = $mapper->getAllUsers();
    } else {
        header("Location:index.php");
    }

?>


<?php if(isset($_SESSION['role']) && $_SESSION['role'] == "1"){ 
    
    ?>
    
    <div class="manage-users">
        <div class="title-data">
            <div><p>Firstname</p></div>
            <div><p>Lastname</p></div>
            <div><p>Email</p></div>
            <div><p>Operations</p></div>
        </div>
        <?php 
        foreach($usersList as $user){
        ?>
        <div class="users-data">
            <div><p><?php echo $user['firstname']?></p></div>
            <div><p><?php echo $user['lastname']?></p></div>
            <div><p><?php echo $user['email']?></p></div>
            <div><p><a href=<?php echo "edit.php?id=" . $user['id'];
                                    ?>>Edit</a>
                    <a href=<?php echo "./businessLogic/deleteUser.php?id=" . $user['id'];
                                    ?>>Delete</a></p></div>

        </div>
        <?php 
        }
        ?>
    </div>

    <?php
    }
    ?>

</body>