<?php include "../control/signup_controller.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>

    <form action="" method="post">
        <h1>Sign Up</h1>
        <br>Full Name:<input type="text" name="name" placeholder="Enter your name"></br>
        <?php echo   $Name ?>
        <?php echo   $validationName ?>
        <br>Email:<input type="text" name="email" placeholder="Enter your email"></br>
        <?php echo   $validationName ?>
        <br> Phone Number:<input type="text" name="phone" placeholder="Enter your number"></br>
        <?php echo   $validationPhone_Number ?>
        <br>Date of Birth:<input type="date" name="dob" placeholder="Enter your Date of Birth"></br>
        <?php echo   $validationDOB ?>
        <br>Address:<input type="text" name="address" placeholder="Enter your Address"></br>
        <?php echo   $validationAddress ?>
        <br>Password:<input type="password" name="password" placeholder="Type your password"></br>
        <?php echo   $validationPassword ?>
        <br>Confirm Password:<input type="password" name="confirm_password" placeholder="Confirm your password"></br>
        <?php echo   $validationConfirm_Password ?>
        <br><input type="submit" name="Sign_Up" value="Sign Up" id=""><a href="/GroceryStoreManagement">Back To Home</a> </br>
    </form>

</body>

</html>