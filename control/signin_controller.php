<?php
session_start();
require_once("../model/customerDB.php");
$Email = $Password = "";
$validationName = '';

//sign in validation
if (isset($_POST["submit"])) {
	$Email = $_REQUEST["email"];
	$Password = $_REQUEST["password"];
	if ($Email== 'admin' && $Password== 'admin') {
		setcookie('flag', 'true', time() + 3600, "/");
		$_SESSION["email"] = $Email;
		$_SESSION["password"] = $Password;
		header("Location: ../view/admin/dashboard.php");
	} else {
		$status = validateCustomer($Email, $Password);

	if ($status) {
		setcookie('flag', 'true', time() + 3600, "/");
		$user = getCustomerByEmail($Email);
		$_SESSION['user'] = $user;
		header("Location: ../view/customer/dashboard.php");
	} else {
		echo "User not found";
	}
		
	}
	


}
