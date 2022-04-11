<?php
 include('header.php');
 require_once('../../model/products.php');
 ?>

<div class="container">
<div class= "row">
<div class="col-4">
<!-- Start of Card Deck Layout -->
<div class="d-flex d-grid gap-3 pt-5">

<?php
$conn = mysqli_connect('localhost', 'root', '', 'groceteria');
  $sql = "select * from products";
  $result = mysqli_query($conn, $sql);
  
  while($pro=mysqli_fetch_array($result))
{
  echo "<div class='card ' style='width: 18rem;'>";
  
  echo '<img src="';echo $pro["p_image"]; echo '"class="card-img-top img-thumbnail" style="height: 200px;"alt="...">';
  echo '<div class="card-body">';
    echo '<h5 class="card-title">';echo $pro["p_name"]; echo '</h5>';
   echo  "<p class='card-text'>";echo $pro["p_description"]; echo"</p>";
  echo  '<ul class="list-group list-group-flush">';
  echo  '  <li class="list-group-item fw-bold pb-5">Price: <span class="fs-6 fw-light">'; echo $pro["p_price"]; echo' </span></li>';
  echo  "</ul>" ;
  echo '<div class="pb-2">';
  echo  '<a href="#" class="btn btn-primary">Buy Now</a>';
  echo  "</div> </div> </div>";
}
  ?>
  </div></div>
  </div>
  </div>
<?php
 include('footer.php');
 ?>