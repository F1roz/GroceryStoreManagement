<?php
    require_once('db.php');

    function insertPurchaseHistory($p_id,$c_id){


		$conn = getConnection();
		$sql = "insert into purchase values('','{$p_id}', '{$c_id}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

    function getPurchaseHistory($c_id){

		$conn = getConnection();

		$sql = "select * from purchase where c_id='{$c_id}'";

        $result = mysqli_query($conn, $sql);
        $products = [];
        while($row = mysqli_fetch_assoc($result)){
            $products[] = $row;
        }
        return $products;
	}

	function getTransactionList($trans,$username){
		$conn = getConnection();
		$sql = "select * from transaction";
		$result = mysqli_query($conn, $sql);
		
		$trans =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($trans, $row); 
			global $trans;
		}

		return $trans;

	}

?>