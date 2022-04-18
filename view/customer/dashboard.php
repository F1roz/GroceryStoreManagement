<?php
 include('header.php');
 require_once('../../model/productsDB.php');
 ?>

<div class="container">
<div class= "row">
<div class="">
<!-- Start of Card Deck Layout -->
<div class="d-flex d-grid gap-3 pt-5">

<?php
$numOfCols = 4;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
$result1=getAllProducts();
foreach($result1 as $pro){
  ?>
  <div class="col-md-<?php echo $bootstrapColWidth; ?> pt-3">
  <div class='card ' style='width: 18rem;'>
  
<img src='<?php echo $pro["p_image"]?>' class="card-img-top img-thumbnail" style="height: 200px;"alt="...">
<div class="card-body">
<h5 class="card-title"> <?php echo $pro["p_name"]?></h5>
  <p class='card-text'> <?php echo $pro["p_description"] ?> </p>
  <ul class="list-group list-group-flush">
    <li class="list-group-item fw-bold pb-5">Price: <span class="fs-6 fw-light"> <?php echo $pro["p_price"] ?> </span></li>
  </ul>
<div class="pb-2">
  <a href='../../control/buyNow.php?b=<?=$pro["p_id"]?>' class="btn btn-primary">Buy Now</a>
  </div> </div> </div> </div>

<?php
  $rowCount++;
  if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
}
  ?>
  </div></div>
  </div>
  </div>
<?php
 include('footer.php');
 ?>