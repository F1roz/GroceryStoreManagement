<?php

function alertMsg($msg)
{
	echo '<script>alert("' . $msg . '")</script>';
}
$dbuser = 'root';
$dbpass = '';
$host 	= 'localhost';
$dbname	= 'groceteria';


function getConnection()
{

	global $dbname, $dbpass, $dbuser, $host;
	$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
	return $conn;
}
