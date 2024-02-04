<?php

include_once './businessLogic/candidateMapper.php';
include_once './businessLogic/candidate.php';
if (isset($_POST['firstname'])) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $adminName = $_POST['admin'];

    if (isset($_FILES['file'])) {
        
        

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];



        $fileExt = explode('.', $fileName);
        // explode same as split in java

        $fileActualExt = strtolower(end($fileExt));
        // end() gets last piece of data from an array

        $allowed = array('jpg', 'jpeg', 'png', 'pdf');
    

    if (in_array($fileActualExt, $allowed)) {

        if ($fileError === 0) {
            
            

                $fileDestination = 'uploads/' . $fileName;
                move_uploaded_file($fileTmpName, $fileDestination);
                $candidate = new Candidate($id,$firstname, $lastname, $fileDestination,$adminName);
                    $mapper = new CandidateMapper();
                    $mapper->edit($candidate, $id);
                    header("Location:dashboard.php");
        }
    }
    else{
        $candidate = new Candidate($id,$firstname, $lastname, '',$adminName);
                    $mapper = new CandidateMapper();
                    $mapper->edit2($candidate, $id);
                    header("Location:dashboard.php");
    }
    
}

    
}
else{
    header("Location:../dashboard.php");
}