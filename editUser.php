<?php
include_once 'userMapper.php';
include_once 'simpleAdmin.php';
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $simpleAdmin = new SimpleAdmin($userId,$firstname, $lastname, '','','','','','');
    $mapper = new UserMapper();
    $mapper->editAdminDetails($simpleAdmin, $userId);
    header("Location:../dashboard.php");
}
