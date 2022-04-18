<?php include "../control/signup_controller.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Sign Up</title>
</head>

<body>

    <form name="signupForm" action="" method="post">
        <h1>Sign Up</h1>
        <br>Full Name:<input type="text" id="name" name="name" placeholder="Enter your name"></br>
        <br>Email:<input type="text" id="email" name="email" placeholder="Enter your email"></br>
        <br> Phone Number:<input type="text" id="phone" name="phone" placeholder="Enter your number"></br>
        <br>Address:<input type="text" id="address" name="address" placeholder="Enter your Address"></br>
        <br>Password:<input type="password" id="password" name="password" placeholder="Type your password"></br>
        <br>Confirm Password:<input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password"></br></br>
        <input name="submit" type="submit" value="SIGN UP" onclick="signupValidate()">
    </form>
    <script type="text/javascript" src="../scripts/validation.js"></script>
</body>

</html>