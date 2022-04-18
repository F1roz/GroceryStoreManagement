<?php

require_once("../../model/UserRepo.php");

if (addUser($_POST['name'], $_POST['address'], $_POST['phone'], $_POST['email'], $_POST['name'])) {
    header("Location: /GroceryStoreManagement/view/admin");
} else {
    echo "Error updating user";
}
