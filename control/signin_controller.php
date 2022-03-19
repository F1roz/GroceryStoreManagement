<?php
$Email=$Password="";
$validationName='';

//php validation
if (isset($_POST["submit"])) {
    $Email = $_REQUEST["email"];
    $Password = $_REQUEST["password"];

    if ((empty($Email) && $_COOKIE['Email'] ) || (empty($Password) && $_COOKIE['Password'])) {
        header("Location: /GroceryStoreManagement/view/dashboard.php");
    } else {
        header("Location: /GroceryStoreManagement/view/signin.php");
    }
}