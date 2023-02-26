<?php 
require_once('databaseConfig.php');
class UserMapper extends DatabasePDOConfig{

    private $conn;
    private $query;
    public function __construct(){
        $this->conn=$this->getConnection();
    }

    public function getUserByID($id){
        $this->query = 'select * from user where id=:id';
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(':id',$id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
    public function getUserByEmail($email){
        $this->query = 'select * from user where email=:email';
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(':email',$email);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function insertUser(\SimpleAdmin $user){
        $this->query = 'insert into user(firstname,lastname,email,password,gender,admin_check,profile_pic,birth_date) values(:firstname,:lastname,:email,:password,:gender,:admin_check,:profile_pic,:birth_date)';

        $firstname = $user->getFirstName();
        $lastname = $user->getLastName();
        $email = $user->getEmail();
        $password =$user->getPassword();
        $gender = $user->getGender();
        $birth_date = $user->getDate();
        $profile_pic = $user->getProfilePic();
        $admin_check = $user->getAdminCheck();
        $passwordEncryption = password_hash($password,PASSWORD_BCRYPT);

        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":firstname",$firstname);
        $statement->bindParam(":lastname",$lastname);
        $statement->bindParam(":email",$email);
        $statement->bindParam(":password",$passwordEncryption);
        $statement->bindParam(":gender",$gender);
        $statement->bindParam(":admin_check",$admin_check);
        $statement->bindParam(":profile_pic",$profile_pic);
        $statement->bindParam(":birth_date",$birth_date);

        $statement->execute();
    }
    public function getAllUsers(){
        $this->query = 'select * from user';
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        return $statement->fetchAll();
    }
    public function edit(\SimpleAdmin $user, $id){
        $this->query = "update user set firstname=:firstname, lastname=:lastname, email=:email, profile_pic=:profile_pic where id=:id";
        var_dump($user);
        $statement = $this->conn->prepare($this->query);
        
        $firstname = $user->getFirstName();
        $lastname = $user->getLastName();
        $email = $user->getEmail();
        $profile_pic = $user->getProfilePic();
                        
                    $statement->bindParam(":firstname", $firstname);
                    $statement->bindParam(":lastname", $lastname);
                    $statement->bindParam(":email", $email);
                    $statement->bindParam(":id", $id);
                    $statement->bindParam(":profile_pic", $profile_pic);
                    $statement->execute();
                    
                     
    }
    public function editAdminDetails(\SimpleAdmin $user, $id){
        $this->query = "update user set firstname=:firstname, lastname=:lastname where id=:id";
        var_dump($user);
        $statement = $this->conn->prepare($this->query);
        
        $firstname = $user->getFirstName();
        $lastname = $user->getLastName();
                        
                    $statement->bindParam(":firstname", $firstname);
                    $statement->bindParam(":lastname", $lastname);
                    $statement->bindParam(":id", $id);
                    $statement->execute();
                    
                     
        }

        public function edit2(\SimpleAdmin $user, $id){
            $this->query = "update user set firstname=:firstname, lastname=:lastname, email=:email where id=:id";
            var_dump($user);
            $statement = $this->conn->prepare($this->query);
            
            $firstname = $user->getFirstName();
            $lastname = $user->getLastName();
            $email = $user->getEmail();
            
                            
                        $statement->bindParam(":firstname", $firstname);
                        $statement->bindParam(":lastname", $lastname);
                        $statement->bindParam(":email", $email);
                        $statement->bindParam(":id", $id);
                
                        $statement->execute();
                        
                         
            }
            
          
    
            


    public function deleteUser($userId){
        $this->query = "delete from user where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
    }

    

}











?>