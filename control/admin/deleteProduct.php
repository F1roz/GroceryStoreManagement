<?php

require_once("../../model/productsDB.php");

$id = $_REQUEST["p_id"];

if (!$id) return "Invalid ID";

if (deleteProduct($id)) {
    header("Location: ../../view/admin/dashboard.php");
} else {
    echo "Error deleting user";
}