<?php
include './components/header.php';
include_once './businessLogic/userMapper.php';
include_once 'firstnameSession.php';
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $mapper = new UserMapper();
    $user = $mapper->getUserByID($userId);
}
?>
</div>
</div>
<div class='container'>
    <h1>Modifiko perdoruesin</h1>
    <form class="mainForm" action="./businessLogic/editUser.php" method="get">
        <div class="login forms form-style">
            <input type="text" style="display:none;" value=<?php echo $userId; ?> name="id" />
            <label for="">Name:</label>
            <input type="text" name='firstname' class="input" placeholder="username..." value=<?php echo $user['firstname']; ?> />
            <label for="">Last Name:</label>
            <input type="text" name='lastname' class="input" placeholder="password..." value=<?php echo $user['lastname']; ?> />
            <input id="submit" type="submit" name='login-btn' class="input submit" value="Edit" />
            
        </div>
    </form>
</div>


</body>