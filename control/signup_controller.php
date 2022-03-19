<?php
$Name = $Email = $Phone_Number = $DOB = $Address = $Password = $Confirm_Password = "";
$validationName = '';
$validationEmail = '';
$validationPhone_Number = '';
$validationDOB = '';
$validationAddress = '';
$validationPassword = '';
$validationConfirm_Password = '';

//php validation
if (isset($_POST["Sign_Up"])) {
    $Name = $_REQUEST["name"];
    $Email = $_REQUEST["email"];
    $Phone_Number = $_REQUEST["phone"];
    $DOB = $_REQUEST["dob"];
    $Address = $_REQUEST["address"];
    $Password = $_REQUEST["password"];
    $Confirm_Password = $_REQUEST["confirm_password"];

    if (empty($Name) || (strlen($_REQUEST["name"]) < 5)) {
        $validationName = "Please enter your Name";
    } else {
        $Name = $_REQUEST["name"];
        setcookie("Name", $Name, time() + 3600);
    }

    if (empty($Email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $Email)) {
        $validationEmail = "Please enter your Email";
    } else {
        $Email = $_REQUEST["email"];;
        setcookie("Email", $Email, time() + 3600);
    }

    if (empty($Phone_Number) || (strlen($_REQUEST["phone"]) < 11)) {
        $validationPhone_Number = "Please enter your Phone Number";
    } else {
        $Phone_Number = $_REQUEST["phone"];;
        setcookie("phone", $Phone_Number, time() + 3600);
    }

    if (empty($DOB) || (strlen($_REQUEST["dob"]) < 11)) {
        $validationDOB = "Please enter your DOB";
    } else {
        $DOB = $_REQUEST["dob"];;
        setcookie("DOB", $DOB, time() + 3600);
    }
    if (empty($Address) || (strlen($_REQUEST["address"]) < 5)) {
        $validationAddress = "Please enter your Address";
    } else {
        $Address = $_REQUEST["address"];
        setcookie("Address", $Address, time() + 3600);
    }

    if (empty($Password) && (strlen($_REQUEST["password"]) < 3)) {
        $validationPassword = "Please enter your Password";
    } else {
        $Password = $_REQUEST["password"];
        setcookie("Password", $Password, time() + 3600);
    }
    if ($_POST["confirm_password"] == $_POST["password"]) {
        setcookie("Confirm_Password", $Confirm_Password, time() + 3600);
    } else {
        $validationConfirm_Password = "Password does not match";
    }
    header("Location: /GroceryStoreManagement/view/signin.php");
}
