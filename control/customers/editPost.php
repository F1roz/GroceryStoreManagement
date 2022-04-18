<?php

require_once("../../model/UserRepo.php");

$id = $_REQUEST["id"];

if (!$id) return "Invalid ID";

if (updateUser($id, $_POST['name'], $_POST['address'], $_POST['phone'], $_POST['email'], $_POST['name'])) {
    header("Location: /GroceryStoreManagement/view/admin");
} else {
    echo "Error updating user";
}
