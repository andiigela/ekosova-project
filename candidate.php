<?php 

class Candidate  {
    protected $id;
    protected $firstname;
    protected $lastname;
    protected $profile_pic;
    protected $adminName;

    function __construct($id,$firstname,$lastname,$profile_pic,$adminName){
        $this->id=$id;
        $this->firstname=$firstname;
        $this->lastname=$lastname;
        $this->profile_pic=$profile_pic;
        $this->adminName=$adminName;
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
    public function getProfilePic(){
        return $this->profile_pic;
    }
    public function getAdminName(){
        return $this->adminName;
    }

}


?>