<?php 
include_once('../businessLogic/simpleAdmin.php');
include_once('../businessLogic/superAdmin.php');
include_once('../businessLogic/userMapper.php');
session_start();

if(isset($_POST['loginBtn'])){
    $login = new Login($_POST);
    $login->verifyData();
}else if(isset($_POST['signUpBtn'])){
    $register = new Registration($_POST);
    $register->registerUser();
} else {
    header("Location:../index.php");
}

class Login {
    private $email = "";
    private $password = "";
    public function __construct($formData){
        $this->email = $formData["emailInput"];
        $this->password = $formData["passwordInput"];
    }
    public function verifyData(){
        if ($this->variablesNotDefinedWell($this->email, $this->password)) {
            header("Location: ../login.php");
        } else if ($this->usernameAndPasswordCorrect($this->email, $this->password)) {
            header('Location:../dashboard.php');
        } else
            header("Location:../login.php");
    }
    private function variablesNotDefinedWell($email, $password){
        if (empty($email) || empty($password)) {
            return true;
        }
        return false;
    }
    private function usernameAndPasswordCorrect($email, $password){
        $mapper = new UserMapper();
        $user = $mapper->getUserByEmail($email);
        if($user == null || count($user) == 0) return false;
        else if(password_verify($password,$user['password'])) {
             if($user['admin_check'] == 1){
                 $obj = new SuperAdmin( $user['id'],$user['firstname'], $user['lastname'], $user['email'],$user['password'],$user['gender'],$user['admin_check'],$user['profile_pic'],$user['birth_date']);
                 $obj->setSession();
             } else {
                 $obj = new SimpleAdmin( $user['id'],$user['firstname'], $user['lastname'], $user['email'],$user['password'],$user['gender'],$user['admin_check'],$user['profile_pic'],$user['birth_date']);
                 $obj->setSession();
             }
             return true;
        }
        return false;
     }
}

class Registration {
    protected $id="";
    protected $firstname="";
    protected $lastname="";
    protected $email="";
    protected $password="";
    protected $gender="";
    protected $date="";
    
    public function __construct($formData){
        $this->firstname = $formData['firstNameInput']; // $formData = $_POST
        $this->lastname = $formData['lastNameInput'];
        $this->email = $formData['emailInput'];
        $this->password = $formData['passwordInput'];
        $this->gender = $formData['genderInput'];
        $this->date = $formData['dateInput'];
    }
    public function registerUser(){
        $user = new SimpleAdmin($id, $this->firstname,$this->lastname,$this->email,$this->password,$this->gender,0,'./uploads/blank-profile-picture-973460__340.webp',$this->date); // i merr tdhanat prej POST
        $mapper = new UserMapper();
        $mapper->insertUser($user);
        header('Location:../login.php');
    }
}





?>