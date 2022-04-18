<?php
include('header.php');
require_once('../../model/productsDB.php');
$id = $_GET["p_id"];

if (!$id) return "Invalid ID";

$product = getProductByID($id);
?>
<div class="container pt-5 m-5">
    <h1>EDIT Product</h1>
<form action = "../../control/admin/editProduct.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Name</label>
    <input type="text" name=p_name class="form-control"  value=<?php echo $product['p_name'] ?> aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Enter Product name</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Catagory</label>
    <input type="text" name=p_description class="form-control"  value=<?php echo $product['p_description'] ?> aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Enter Product Catagory</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Price</label>
    <input type="text" name=p_price class="form-control"  value=<?php echo $product['p_price'] ?> aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Enter Product Price</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Image link</label>
    <input type="text-area" name=p_image class="form-control"  value=<?php echo $product['p_image'] ?>>
    <div id="emailHelp" class="form-text">Enter Product Image link</div>
  </div>
  <input type="hidden" name=p_id value=<?php echo $product['p_id'] ?>>
  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
</div>
<?php
include('footer.php');
?>