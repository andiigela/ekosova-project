<?php 
require_once('databaseConfig.php');
class CandidateMapper extends DatabasePDOConfig{

    private $conn;
    private $query;
    public function __construct(){
        $this->conn=$this->getConnection();
    }

    public function getCandidateByID($id){
        $this->query = 'select * from candidate where id=:id';
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(':id',$id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function insertCandidate(\Candidate $user){
        $this->query = 'insert into candidate(firstname,lastname,profile_pic,admin) values(:firstname,:lastname,:profile_pic,:adminName)';
        $firstname = $user->getFirstName();
        $lastname = $user->getLastName();
        $profile_pic = $user->getProfilePic();
        $adminName = $user->getAdminName();
                        
        $statement = $this->conn->prepare($this->query);
                    $statement->bindParam(":firstname", $firstname);
                    $statement->bindParam(":lastname", $lastname);
                    $statement->bindParam(":profile_pic", $profile_pic);
                    $statement->bindParam(":adminName", $adminName);
                    $statement->execute();
       
    }
    public function getAllCandidates(){
        $this->query = 'select * from candidate';
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        return $statement->fetchAll();
    }
    
    public function edit(\Candidate $user, $id){
        $this->query = "update candidate set firstname=:firstname, lastname=:lastname, profile_pic=:profile_pic,admin=:adminName where id=:id";
        var_dump($user);
        $statement = $this->conn->prepare($this->query);
        
        $firstname = $user->getFirstName();
        $lastname = $user->getLastName();
        $profile_pic = $user->getProfilePic();
        $adminName = $user->getAdminName();
                    $statement->bindParam(":firstname", $firstname);
                    $statement->bindParam(":lastname", $lastname);
                    $statement->bindParam(":id", $id);
                    $statement->bindParam(":profile_pic", $profile_pic);
                    $statement->bindParam(":adminName", $adminName);
                    $statement->execute();
                    
                     
        }

        public function edit2(\Candidate $user, $id){
            $this->query = "update candidate set firstname=:firstname, lastname=:lastname,admin=:adminName where id=:id";
            var_dump($user);
            $statement = $this->conn->prepare($this->query);
            
            $firstname = $user->getFirstName();
            $lastname = $user->getLastName();
            $adminName = $user->getAdminName();
                        $statement->bindParam(":firstname", $firstname);
                        $statement->bindParam(":lastname", $lastname);
                        $statement->bindParam(":id", $id);
                        $statement->bindParam(":adminName", $adminName);
                        $statement->execute();
                        
                         
            }
          
       
            


    public function deleteCandidate($userId){
        $this->query = "delete from candidate where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
    }

}











?>