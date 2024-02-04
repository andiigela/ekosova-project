<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css"/>
    <!-- <script src="js/signUpValidation.js"></script> -->
    <script src="js/validation.js"></script>
    
</head>
<body>
    <div class="signupForm" action="businessLogic/loginVerify.php" method="post" onsubmit="return signUp()">  
        <form class="userDetails">
            <div class="signUpErrors">
                <p id="error"></p>
            </div>
            <div class="emriMbiemriContainer">
                <input id="emriInput" name="firstNameInput" class="emriInput" type="text" placeholder="Firstname"/>   
                <input id="mbiemriInput" name="lastNameInput" class="mbiemriInput" type="text" placeholder="Lastname"/>
            </div>
            
            <div class="emailContainer">
                <input id="emailInput" name="emailInput" class="emailInput" type="email" placeholder="Email"/>
                <input id="emailConfirmationInput" class="emailConfirmationInput" type="email" placeholder="Email Confirmation"/>
            </div>
            
            <div class="passwordContainer">
                <input id="passwordInput" name="passwordInput" class="passwordInput" type="password" placeholder="Password"/>
                <input id="passwordConfirmationInput" class="passwordConfirmationInput" type="password" placeholder="Password Confirmation"/>
            </div>

            <div class="moshaGjiniaContainer">
                <input id="moshaInput" name="dateInput" class="moshaInput" type="date" min="1910-01-01" max="2005-12-31" placeholder="Age"/>
                <div class="gjiniaContainer">
                    <Label id="male" class="male">Male</Label>
                    <input id="gender1" name="genderInput" value="male" class="radio1" type="radio" name="gender"/>
                    <Label id="female" class="female">Female</Label>
                    <input id="gender2" name="genderInput" value="female" class="radio2" type="radio" name="gender"/>
                </div>
            </div>
        <div class="signupButton">
            <a href="#" id="redirectSignUp"><button name="signUpBtn" type="submit">Sign up</button></a>
        </div><br>
        <div class="orDiv">
            <div class="break1"><hr></div>
            <div><p>or</p></div>
            <div class="break2"><hr></div>
        </div>
        
        </form>
        <div class="loginButton">
            <a href="login.php"><button>Sign in</button></a>
        </div><br>

    </div>

</body>
</html>