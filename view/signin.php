<?php include "../control/signin_controller.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>

<body>

    <h2>Sign In</h2>
    <form id="myForm" action="../control/signin_controller.php" method="post">
        <input type="text" id="email" name="email" placeholder="Enter your Email"> <br> <br>
        <input type="password" id="password" name="password" placeholder="Enter your password"><br> <br>
        <input name="submit" type="submit" value="SIGN IN" onclick="loginvalidate()">
        <a href="./home.php">Back To Home</a>
    </form>

    <br>
    <h4 slighly>Don't have an account?</h4>
    <h3 id="error">
    </h3>
    <script type="text/javascript" src="../scripts/validation.js"></script>
</body>

</html>