<?php 

include './components/header.php';
include './firstnameSession.php';
include_once './businessLogic/feedbackMapper.php';

if (isset($_SESSION["role"])) {
    $mapper = new FeedbackMapper();
    $usersList = $mapper->getAllFeedback();
} else {
    header("Location:dashboard.php");
}
?>
</div>
</div>
 <div class="manage-users">
        <div class="title-data">
            <div><p>Fullname</p></div>
            <div><p>email</p></div>
            <div><p>Operation</p></div>
</div>
        <?php 
        foreach($usersList as $user){
        ?>
        <div class="users-data">
            <div><p><?php echo $user['name']?></p></div>
            <div><p><?php echo $user['email']?></p></div>
            <div><p><a href="<?php echo "viewFeedback.php?message=" .$user['message'];
                                    ?> ">View</a></div>
                    

        </div>
        <?php 
        }
        ?>
    </div>
    </div>
</div>

