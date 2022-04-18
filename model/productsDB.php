<?php
    require_once('db.php');

    function insertProducts($product){

		$conn = getConnection();
		$sql = "insert into products values('','{$product['p_name']}', '{$product['p_description']}', '{$product['p_price']}', '{$product['p_image']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function updateProducts($product){
		$conn=getConnection();
		$sql = "update products set p_name='{$product['p_name']}', p_description='{$product['p_description']}', p_price='{$product['p_price']}', p_image='{$product['p_image']}' where p_id='{$product['p_id']}'";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	

    function getProductByID($p_id){

		$conn = getConnection();
		$sql = "select * from products where p_id='{$p_id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	function getAllProducts(){
		
        $conn = getConnection();
        $sql = "select * from products";
        $result = mysqli_query($conn, $sql);
        $products = [];
        while($row = mysqli_fetch_assoc($result)){
            $products[] = $row;
        }
        return $products;
	}
	function deleteProduct($id){
		$conn = getConnection();
		$sql = "delete from products where p_id='{$id}'";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>