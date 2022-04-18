<?php
	
	require_once('db.php');



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
		$sql = "insert into customers values('{$customer['name']}', '{$customer['email']}','{$customer['gender']}', '{$customer['dob']}')";
		
		
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

	

?>