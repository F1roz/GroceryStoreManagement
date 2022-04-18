<?php

require_once('db.php');

function getAllUsers()
{
    return queryToAssocArray("select * from customers");
}

function getUserById($id)
{
    return getSingleRowIfExistsOnPreparedQuery("select * from customers where c_id=?", "i", $id);
}

function addUser($name, $address, $phone, $email, $password)
{
    return isPreparedStatementExecuted("insert into customers(c_name,c_add,c_phone,c_email,c_passoword) values(?, ?, ?, ?, ?)", "sssss", $name, $address, $phone, $email, $password);
}

function updateUser($id, $name, $address, $phone, $email, $password)
{
    return isPreparedStatementExecuted("update customers set c_name=?, c_add=?, c_phone=?, c_email=?, c_passoword=? where c_id=?", "sssssi", $name, $address, $phone, $email, $password, $id);
}

function deleteUser($id)
{
    return isPreparedStatementExecuted("delete from customers where c_id=?", "i", $id);
}
