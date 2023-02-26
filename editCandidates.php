<?php
include './components/header.php';
include_once './businessLogic/candidateMapper.php';
include_once 'firstnameSession.php';
if (isset($_GET['id'])) {
    $candidateId = $_GET['id'];
    $mapper = new CandidateMapper();
    $candidate = $mapper->getCandidateByID($candidateId);
}



?>
</div>
</div>


  <style>
    .big_container, form {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      margin: auto;
    }
    form{
      width:100%;
    }

    .glass {
      background: lightblue;
      box-shadow: 0px 4px 24px -1px rgba(0, 0, 0, 0.2);
      border-radius: 2.5rem;
    }
    .big_container {
      width: 80%;
      margin-top: 3em;
      flex-wrap: wrap;
      padding: 10px;
      padding-bottom:2em;
    }
    .addPropertyInfo{
      width:100%;
      display:flex;
      flex-direction: row;
      justify-content: space-evenly;
      align-items: center;
      flex-wrap: wrap;
    }

    .item {
      padding: 0.3em;
      display: flex;
      align-items: center;
    }

    .countryitem input {
      width: 8rem;
      margin-right: 10px;
    }
    input {
      border-radius: 5px;
      background: #DCD7C9;
      border: 2px solid #3F4E4F;
      height: 2rem;
    }
    
    .remove_user_container {
      width: 321.35px;
      height: 343px;
      background: #EAE7DC;
      border-radius: 25px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      margin: 20px;
    }

    .remove_user_container h3 {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 400;
      font-size: 26px;
      line-height: 31px;
      text-align: center;
      color: #646FD4;
    }

    .remove_user_container img {
      width: 199px;
      height: 199px;
      border-radius: 50%;
    }

    .remove_user_container button {
      width: 161.11px;
      height: 46.77px;
      background: #2C3639;
      border: none;
      border-radius: 25px;
      font-family: 'Inter';
      font-style: normal;
      font-weight: 400;
      font-size: 24px;
      line-height: 29px;
      text-align: center;
      color: #E3E2DF;
    }

    .submitbutton input {
      width: 161.11px;
      height: 46.77px;
      background: #2C3639;
      border: none;
      border-radius: 5px;
      font-family: 'Inter';
      font-style: normal;
      font-weight: 400;
      font-size: 24px;
      line-height: 29px;
      text-align: center;
      color: #E3E2DF;
    }

    #edit_image {
      width: 161.11px;
      height: 36.77px;
      background: #2C3639;
      border: none;
      border-radius: 5px;
      font-family: 'Inter';
      font-style: normal;
      font-weight: 400;
      font-size: 24px;
      line-height: 29px;
      text-align: center;
      color: #E3E2DF;
    }
    

    #file {
      width: 6em;
    }
    
    #submit:hover{
      cursor: pointer;
    }
  </style>

  <div class="big_container glass">

    
<form action="editCandidateProcess.php" enctype="multipart/form-data" method="POST">
  <div class="addPropertyInfo">
    <div class="section">
  <div class="item">
    
    <div class="countryitem">
    <input type="text" id="id" style="display:none" name="id" placeholder="id" value="<?php echo $candidate['id'] ?>">
      <input type="text" id="firstname" name="firstname" placeholder="First Name" value="<?php echo $candidate['firstname'] ?>">
      <input type="text" style="display:none" id="firstname" name="admin" placeholder="First Name" value="<?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname'] ?>">
    </div>
    <div class="countryitem">
      <input type="text" id="lastname" name="lastname" placeholder="Last Name"  value="<?php echo $candidate['lastname'] ?>">
    </div>

  </div>

  
</div>


<div class="remove_user_container">
  <img id="display_image" src="<?php echo $candidate['profile_pic'] ?>" alt="candidate-pic">
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