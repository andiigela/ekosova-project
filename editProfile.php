<?php
include './components/header.php';
include_once './businessLogic/userMapper.php';
include_once 'firstnameSession.php';




?>
</div>
</div>


<div class="big_container glass">

    
  <form action="editself.php" enctype="multipart/form-data" method="POST">
    <div class="addPropertyInfo">
      <div class="section">

    <div class="item">
      
      <div class="countryitem">
      <input type="text" id="id" style="display:none" name="id" placeholder="id" value="<?php echo $_SESSION['id'] ?>">
        <input type="text" id="firstname" name="firstname" placeholder="First Name" value="<?php echo $_SESSION['firstname'] ?>">
      </div>
      <div class="countryitem">
        <input type="text" id="lastname" name="lastname" placeholder="Last Name"  value="<?php echo $_SESSION['lastname'] ?>">
      </div>

    </div>

    <div class="item">
      <input type="text" id="email" name="email" placeholder="email"
        value="<?php echo $_SESSION['email'] ?>">

    </div>
  </div>


  <div class="remove_user_container">
    <img id="display_image" src="<?php echo $_SESSION["profile_pic"] ?>" alt="<?php echo $_SESSION["profile_pic"] ?>">
    <label id="edit_image" for="file">Edit image</label>
    <input type="file" id="file" class="btn-delete" name="file" style="visibility:hidden;" value="edit image">

  </div>


  </div>
  <div class="submitbutton">
  <input type="submit" id="submit" name="submit" value="Confirm">
  </div>


</form>

</div>
  <script>
    const image_input =document.querySelector("#file");
        var uploaded_image = "";

        image_input.addEventListener("change", function(){
          const reader = new FileReader();
          reader.addEventListener("load", ()=> {
            uploaded_image = reader.result;
            document.querySelector("#display_image").src = `${uploaded_image}`;
          });
          reader.readAsDataURL(this.files[0]);
        })
  </script>
 
</body>

</body>