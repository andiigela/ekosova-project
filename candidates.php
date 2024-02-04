<?php 

include_once './businessLogic/candidateMapper.php';
    $mapper = new CandidateMapper();
    $usersList = $mapper->getAllCandidates();
 
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="css/candidates.css">
</head>
<body>

<div id="header">
        <label for="toggle">&#9776;</label>
            <input type="checkbox" id="toggle"/>
        <div class="nav"> 
            <div class="logo">
                <a href="index.php"><img src="images/e-Kosova.png" class="logo" alt="Logo" width="125px"></a>
            </div>
            <div class="navigation">
                <ul>
                    <li><a href="story.php">e-Kosova story</a></li>
                    <li><a href="candidates.php">Candidates</a></li>
                    <li><a href="staff.php">Staff</a></li>
                    <li><a href="contactus.php">Contacts</a></li>
                    <li><a href="login.php">Log in</a></li>
                </ul>
            </div>
            <div class="icons">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-linkedin-in"></i>
                
            </div>
        </div>
        <div class="slideshow-container">

        <?php 
        $counter = 1;
        foreach($usersList as $user){
          
          
        ?>
<div class="mySlides fade">
  <div class="numbertext"><?php echo " $counter/" . count($usersList) ?></div>
  <img src="<?php echo $user['profile_pic']?>" >
  <div class="text">Candidate: <?php echo $user['firstname']. " ". $user['lastname']?> <br> Added by: <?php echo $user['admin']?> </div>
  
</div>
  <?php 
  $counter++;
        }
        ?>


<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

</div>


<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 
