<?php 
require_once('Personi.php');
class SuperAdmin extends Personi {
    function __construct($id, $firstname,$lastname,$email,$password,$gender,$admin_check,$profile_pic,$date){
        parent::__construct($id, $firstname,$lastname,$email,$password,$gender,$admin_check,$profile_pic,$date);
    }
    
    public function setSession(){
        $_SESSION["role"] = "1";
        $_SESSION["id"] = $this->getId();
        $_SESSION["firstname"] = $this->getFirstName();
        $_SESSION["lastname"] = $this->getLastName();
        $_SESSION["email"] = $this->getEmail();
        $_SESSION["profile_pic"] = $this->getProfilePic();
    }
    public function setCookie(){
        setcookie("email", $this->getEmail(), time() + 2 * 24 * 60 * 60);
    }
    public function getId(){
        return $this->id;
    }
    public function getFirstName(){
        return $this->firstname;
    }
    public function getLastName(){
        return $this->lastname;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getGender(){
        return $this->gender;
    }
    public function getAdminCheck(){
        return $this->admin_check;
    }
    public function getProfilePic(){
        return $this->profile_pic;
    }
    public function getDate(){
        return $this->date;
    }

}





?>