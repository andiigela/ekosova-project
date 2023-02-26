<?php

include_once './businessLogic/feedbackMapper.php';
include_once './businessLogic/feedback.php';

if (isset($_POST['name'])) {
    $firstname = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
                
                $simpleAdmin = new Feedback($firstname,$email,$message);
                    $mapper = new FeedbackMapper();
                    $mapper->insertFeedback($simpleAdmin);
                    header("Location:allFeedback.php");
        }
   
else{
    header("Location:dashboard.php");
}