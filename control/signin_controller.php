<?php
$Email=$Password="";
$validationName='';

//php validation
if (isset($_POST["Sign_In"])) {
    
    $Email = $_REQUEST["email"];
    $Password = $_REQUEST["password"];

    if (empty($Email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $Email)) {
        $validationEmail = "Please enter your Email";
    } else {
        $Email = $_REQUEST["email"];;
        $succeed = "Successful";
    }
    if (empty($Password) || (strlen($_REQUEST["password"]) < 8)) {
        $validationPassword = "Please enter your Password";
    } else {
        $Password = $_REQUEST["password"];;
        $succeed = "Successful";
    }
}