<?php
include('header.php');
?>
<div class="container pt-5 m-5">
    <h1>Add Product</h1>
<form action = "../../control/admin/addProduct.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Name</label>
    <input type="text" name=p_name class="form-control"  aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Enter Product name</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Catagory</label>
    <input type="text" name=p_description class="form-control"  aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Enter Product Catagory</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Price</label>
    <input type="text" name=p_price class="form-control"   aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Enter Product Price</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Image link</label>
    <input type="text-area" name=p_image class="form-control"  >
    <div id="emailHelp" class="form-text">Enter Product Image link</div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">ADD</button>
</form>
</div>
<?php
include('footer.php');
?>