<?php 
    abstract class Personi{
        protected $id;
        protected $firstname;
        protected $lastname;
        protected $email;
        protected $password;
        protected $gender;
        protected $admin_check;
        protected $profile_pic;
        protected $date;
    
        function __construct($id,$firstname,$lastname,$email,$password,$gender,$admin_check,$profile_pic,$date){
            $this->id=$id;
            $this->firstname=$firstname;
            $this->lastname=$lastname;
            $this->email = $email;
            $this->password = $password;
            $this->gender = $gender;
            $this->admin_check = $admin_check;
            $this->profile_pic=$profile_pic;
            $this->date=$date;
        }
        abstract protected function setSession();
        abstract protected function setCookie();

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