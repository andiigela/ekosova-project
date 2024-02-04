<?php

include_once './businessLogic/userMapper.php';
include_once './businessLogic/simpleAdmin.php';
include_once './businessLogic/superAdmin.php';
if (isset($_POST['firstname'])) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    

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
                
                $simpleAdmin = new SimpleAdmin($id,$firstname, $lastname, $email,'','','',$fileDestination,'');
                    $mapper = new UserMapper();
                    $mapper->edit($simpleAdmin, $id);
                    header("Location:dashboard.php");
        }
    }
    else{
        $simpleAdmin = new SimpleAdmin($id,$firstname, $lastname, $email,'','','','','');
                        $mapper = new UserMapper();
                        $mapper->edit2($simpleAdmin, $id);
                        header("Location:dashboard.php");
    }
    
}

    
}
else{
    header("Location:../dashboard.php");
}