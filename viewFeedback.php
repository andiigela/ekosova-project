<?php


include_once './businessLogic/feedbackMapper.php';
include_once './businessLogic/feedback.php';
include 'components/header.php';
include 'firstnameSession.php';

if (isset($_GET['message'])) {
    $message = $_GET['message'];
    $mapper = new FeedbackMapper();
    $user = $mapper->getFeedbackByMessage($message);
  
}
else {
    echo "spo bon";
}
?>
</div>
</div>

 <div class="manage-users">
        <div class="title-data">
        <div><p><?php echo $user['name']?></p></div>
            <div><p><?php echo $user['email']?></p></div>
            <div><p><?php echo $user['message']?></p></div>
        </div>
        
    </div>
        
  
  