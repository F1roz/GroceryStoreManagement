<?php
require_once('../model/purchaseHistoryDB.php');
    session_start();
    if($_GET["p_id"]!=null){
        //echo   $_GET["p_id"];
        //echo $_SESSION["user"]["c_id"];
        $buy=insertPurchaseHistory($_GET["p_id"],$_SESSION["user"]["c_id"]);
        if($buy==true){
            echo '<script>alert("Buy success")</script>';

    }
    else{
       echo '<script>alert("Buy fail")</script>';
    }
}

?>