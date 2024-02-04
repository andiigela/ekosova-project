<?php 
include './components/header.php';
include_once './businessLogic/candidateMapper.php';
include_once 'firstnameSession.php';

if (isset($_SESSION["role"])) {
    $mapper = new CandidateMapper();
    $usersList = $mapper->getAllCandidates();
} else {
    header("Location:./dashboard.php");
}
?>
</div>
</div>
 <div class="manage-users">
        <div class="title-data">
            <div><p>Firstname</p></div>
            <div><p>Lastname</p></div>
            <div><p>Operations</p></div>
        </div>
        <?php 
        foreach($usersList as $user){
        ?>
        <div class="users-data">
            <div><p><?php echo $user['firstname']?></p></div>
            <div><p><?php echo $user['lastname']?></p></div>
            <div><img width = "100px" height = "100px" src ="<?php echo $user['profile_pic']?>"></div>
            <div><p><a href=<?php echo "editCandidates.php?id=" . $user['id'];
                                    ?>>Edit</a>
                    <a href=<?php echo "./businessLogic/deleteCandidates.php?id=" . $user['id'];
                                    ?>>Delete</a></p></div>

        </div>
        <?php 
        }
        ?>
    </div>
    <a href = "addCandidates.php"> Add Candidate </a>


  