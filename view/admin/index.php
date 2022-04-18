<?php

require_once('../../model/UserRepo.php');

$users = getAllUsers();

?>

<a href="/GroceryStoreManagement/view/admin/addUser.php">Add New</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td><?= $user['c_id']; ?></td>
                <td><?= $user['c_name']; ?></td>
                <td><?= $user['c_add']; ?></td>
                <td><?= $user['c_phone']; ?></td>
                <td><?= $user['c_email']; ?></td>
                <td>
                    <a href="/GroceryStoreManagement/view/admin/editUser.php?id=<?= $user['c_id'] ?>">Edit</a>
                    <a href="/GroceryStoreManagement/control/customers/deleteGet.php?id=<?= $user['c_id'] ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>