<?php
    require_once('db.php');

    function insertProducts($product){

		$conn = getConnection();
		$sql = "insert into products values(''','{$product['p_name']}', '{$product['p_description']}', '{$product['p_price']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

    function getProduct($id){

		$conn = getConnection();

		$sql = "select * from products where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}
	function getAllProducts(){
		$conn = getConnection();
		$sql = "select * from products";
		$result = mysqli_query($conn, $sql);
		
		$product =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($product, $row); 
			global $product;
		}

		return $product;

	}
?>