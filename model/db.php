<?php
mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);
//mysqli_report(MYSQLI_REPORT_INDEX);
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


function mutate($sql)
{
	$con = getConnection();
	if ($con->query($sql) === TRUE) {
		return true;
	}
	alertMsg($con->error);
	return false;
}

function query($sql)
{
	try {
		$con = getConnection();
		return $con->query($sql);
	} catch (Exception $error) {
		alertMsg($error->getMessage());
		return null;
	}
}
function queryToAssocArray($sql)
{
	try {
		$con = getConnection();
		return $con->query($sql)->fetch_all(MYSQLI_ASSOC);
	} catch (Exception $error) {
		alertMsg($error->getMessage());
		return null;
	}
}


function dataExistsOnQuery($sql)
{
	$result = query($sql);
	if (!$result) {
		return false;
	}
	if ($result->num_rows > 0) {
		return true;
	} else {
		return false;
	}
}

function execPreparedStatement($sql, $types, ...$args)
{
	try {
		$con = getConnection();
		$stm = $con->prepare($sql);
		$stm->bind_param($types, ...$args);
		$stm->execute();
		return $stm;
	} catch (Exception $error) {
		alertMsg($error->getMessage());
		return null;
	}
}

function isPreparedStatementExecuted($sql, $types, ...$args)
{
	$stm = execPreparedStatement($sql, $types, ...$args);
	if (!$stm) {
		return false;
	}
	if ($stm->affected_rows < 1) {
		return false;
	}
	return true;
}

function execPreparedQuery($sql, $types, ...$args)
{
	try {
		$con = getConnection();
		$stm = $con->prepare($sql);
		$stm->bind_param($types, ...$args);
		$stm->execute();
		return $stm->get_result();
	} catch (Exception $error) {
		alertMsg($error->getMessage());
		return null;
	}
}

function preparedQueryToAssocArray($sql, $types, ...$args)
{
	$result = execPreparedQuery($sql, $types, ...$args);
	if (!$result) {
		return null;
	}
	return $result->fetch_all(MYSQLI_ASSOC);
}

function dataExistsOnPreparedQuery($sql, $types, ...$args)
{
	$res_array = preparedQueryToAssocArray($sql, $types, ...$args);
	if (count($res_array) > 0) {
		return true;
	}
	return false;
}

function getSingleRowIfExistsOnPreparedQuery($sql, $types, ...$args)
{
	$rows = preparedQueryToAssocArray($sql, $types, ...$args);
	if (count($rows) > 0) {
		return $rows[0];
	}
	return null;
}
