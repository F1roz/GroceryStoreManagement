<?php

require_once("../../model/UserRepo.php");

$id = $_REQUEST["id"];

if (!$id) return "Invalid ID";

if (deleteUser($id)) {
    header("Location: /GroceryStoreManagement/view/admin");
} else {
    echo "Error deleting user";
}
