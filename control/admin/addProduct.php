<?php
   require_once('../../model/productsDB.php');
   
   if (isset($_POST['submit'])){
       if ($_POST['p_name']=='' || $_POST['p_description']=='' || $_POST['p_price']=='' || $_POST['p_image']==''){
           echo '<script>alert("Please fill all the fields")</script>';
           header('refresh:1;url= ../../view/admin/addProduct.php');}
           else{
                $product = [
                    'p_name' => $_POST['p_name'],
                    'p_description' => $_POST['p_description'],
                    'p_price' => $_POST['p_price'],
                    'p_image' => $_POST['p_image']
                ];
         $add=insertProducts($product);
         if ($add==true){
            echo '<script>alert("Product added")</script>';
            header('refresh:1;url= ../../view/admin/dashboard.php');
            }else{
                echo '<script>alert("Product not added")</script>';
            }
        }
    }
?>