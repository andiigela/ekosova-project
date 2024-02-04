<?php 
require_once('databaseConfig.php');
class feedbackMapper extends DatabasePDOConfig{

    private $conn;
    private $query;
    public function __construct(){
        $this->conn=$this->getConnection();
    }

    public function getFeedbackByEmail($email){
        $this->query = 'select * from feedback where email=:email';
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(':email',$email);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
    public function getFeedbackByMessage($message){
        $this->query = 'select * from feedback where message=:message';
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(':message',$message);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function insertFeedback(\Feedback $user){
        $this->query = 'insert into feedback(name,email,message) values(:name,:email,:message)';
        $name = $user->getFirstName();
        $email = $user->getEmail();
        $message = $user->getMessage();
                        
        $statement = $this->conn->prepare($this->query);
                    $statement->bindParam(":name", $name);
                    $statement->bindParam(":email", $email);
                    $statement->bindParam(":message", $message);
                    $statement->execute();
       
    }
    public function getAllFeedback(){
        $this->query = 'select * from feedback';
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function deleteFeedback($email){
        $this->query = "delete from feedback where email=:email";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":email", $email);
        $statement->execute();
    }

}

?>