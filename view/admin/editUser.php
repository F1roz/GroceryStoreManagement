<?php

require_once('../../model/UserRepo.php');

$id = $_REQUEST["id"];

if (!$id) return "Invalid ID";

$customer = getUserById($id);

?>

<form action="/GroceryStoreManagement/control/customers/editPost.php?id=<?= $id ?>" method="post">
    <input type="text" value="<?= $customer["c_name"] ?>" name="name" placeholder="Name">
    <input type="text" value="<?= $customer["c_add"] ?>" name="address" placeholder="Address">
    <input type="text" value="<?= $customer["c_phone"] ?>" name="phone" placeholder="Phone">
    <input type="text" value="<?= $customer["c_email"] ?>" name="email" placeholder="Email">
    <input type="submit" name="submit" value="Update">
</form>