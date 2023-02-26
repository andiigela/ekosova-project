<!DOCTYPE html>
<html lang="en">
    <!--Andi-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="css/contactus.css"/>

    
</head>
<body>

    <form action="addFeedbackProcess.php" method="POST" class="contactus">
        <div class="Title">
            <p>Contact us</p>
        </div>
        <div class="name">
          <input type="text" name="name" class="emriInput" id="emriInput" placeholder="Name">
        </div>
        <div class="Email">
            <input type="text" name="email" class="email" id="email" placeholder="Email">
        </div>
        <div class="Message">
            <textarea type="text" class="Mesazh" name="message" id="Mesazh" placeholder="Message"></textarea>
        </div>
        <div class="goBack">
            <p><a href="index.php">Go Back</a></p>
        </div>
        <div class="SendButton">
            <button type="submit">SEND</button>
        </div>
</form>
</body>
    
</html>
