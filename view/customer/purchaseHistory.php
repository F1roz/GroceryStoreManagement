<?php
 include('header.php');
 require_once('../../model/productsDB.php');
 require_once('../../model/purchaseHistoryDB.php');
 ?>
 <div class="container">
<div class="d-flex d-grid gap-3 pt-5">
<table class="table">
  <thead>
     
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Catagory</th>
      <th scope="col">Purchase Date</th>
    </tr>
  </thead>
  <tbody>
    
    <?php
    session_start();
      $c_id=$_SESSION['user']['c_id'];
        $result=getPurchaseHistory($c_id);
        $i=1;
        foreach($result as $row){
          $p_id=$row['p_id'];

          $p=getProduct($p_id);
          $p_date=$row['ph_date'];
          ?>
          <tr>
          <th scope="row"><?php echo $i; ?></th>
          <td><?php echo $p['p_name']; ?></td>
          <td><?php echo $p['p_price']; ?></td>
          <td><?php echo $p['p_description']; ?></td>
          <td><?php echo $p_date; ?></td>
          </tr>
          <?php
          $i++;
        }
        
      ?>
   
  </tbody>
</table>
</div>
</div>
<?php
 include('footer.php');
 ?>