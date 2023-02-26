<?php 

class Feedback  {
    protected $firstname;
    protected $email;
    protected $message;

    function __construct($firstname,$email,$message){
        $this->firstname=$firstname;
        $this->email=$email;
        $this->message=$message;
    }
    

    public function getFirstName(){
        return $this->firstname;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getMessage(){
        return $this->message;
    }

}


?>