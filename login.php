<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - eKosova</title>
    <link rel="stylesheet" type="text/css" href="css/login.css"/>
    <script src="js/validation.js"></script>
    

</head>
<body>
    <form class="loginForm" action="businessLogic/loginVerify.php" method="post" onsubmit="return logIn()">
        <div class="userPass" >
            <div name="form">
                <input id="LoginEmailInput" name="emailInput" class="emailInput" type="email" placeholder="Email"/>
                <input id="LoginPasswordInput" class="passwordInput" type="password" placeholder="Password" name="passwordInput"/>
            </div>
        </div>
        
        <div class="paragraphBtns">
            <p class="f1"><a href="index.php">Go Back</a></p>
            <p class="f2"><a href="#">Forgot Password?</a></p>
            
        </div>
        <div class="button">
            <a href="#" id="redirectLogin"><button type="submit" name="loginBtn">Sign in</button></a>
        </div>
        <div class="signUp">
            <p><a href="signup.php">Don't have an account?</a></p>
        </div>
        
    </form>
    
</body>
</html>