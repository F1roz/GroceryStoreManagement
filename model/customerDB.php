<?php
	
	require_once('db.php');

	//login validation

	function validateCustomer($email,$password){
		$conn = getConnection();
		$sql = "select * from customers where c_email='{$email}' and c_password='{$password}'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)>0){
			return true;
		}else{
			return false;
		}
	}
	function getCustomerByEmail($email){
		$conn = getConnection();
		$sql = "select * from customers where c_email='{$email}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	function getCustomerByID($c_id){
		$conn = getConnection();
		$sql = "select * from customers where c_id='{$c_id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from customers";
		$result = mysqli_query($conn, $sql);
		
		$user =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($user, $row); 
			global $user;
		}

		return $user;

	}

	function insertCustomers($customer){

		$conn = getConnection();
		$sql = "insert into customers values
				('','{$customer['c_name']}', '{$customer['c_add']}',
				'{$customer['c_phone']}', '{$customer['c_password']}',
				'{$customer['c_email']}')";
		
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function deleteUser($customer){
		print_r($customer);
		
		$conn = getConnection();
		$sql = "delete from user where name='$customer'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
