<?php
$Email = $Password = "";
$validationName = '';

//sign in validation
if (isset($_POST["submit"])) {
	$Email = $_REQUEST["email"];
	$Password = $_REQUEST["password"];

	if (!empty($Email) && !empty($Password) && $_COOKIE['Email'] == $Email && $_COOKIE['Password'] == $Password) {
		header("Location: /GroceryStoreManagement/view/dashboard.php");
	} else {
		header("Location: /GroceryStoreManagement/view/signin.php");
	}
}

