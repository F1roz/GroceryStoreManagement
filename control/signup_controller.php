<?php
   require_once('../model/customerDB.php');
if (isset($_POST["submit"])){
    $customer=[
        "c_name"=>$_POST["name"],
        "c_add"=>$_POST["address"],
        "c_phone"=>$_POST["phone"],
        "c_password"=>$_POST["password"],
        "c_email"=>$_POST["email"]
    ];
    $check = getCustomerByEmail($customer["c_email"]);
    if($check){
        echo "email already exist";
    }else{

        $status=insertCustomers($customer);
        if($status){
            echo "insert success";
            header("Location: ../view/signin.php");
        }else{
            echo "insert fail";
        }
    }
       
    
}
?>
