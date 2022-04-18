<?php
   require_once('../../model/productsDB.php');
   
   if (isset($_POST['submit'])){
         $product = [
                'p_id' => $_POST['p_id'],
              'p_name' => $_POST['p_name'],
              'p_description' => $_POST['p_description'],
              'p_price' => $_POST['p_price'],
              'p_image' => $_POST['p_image']
         ];
         $add=updateProducts($product);
         if ($add){
            echo '<script>alert("Product Updated")</script>';
            header('refresh:1;url= ../../view/admin/dashboard.php');
            }else{
                echo '<script>alert("Product not Updated")</script>';
            }
        }
?>