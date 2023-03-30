<?php
include '../connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Car</title>
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Bizaza Alain">
    <title>Headers · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">

    
<link href="sidebars.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
</head>
<body>
<main>
 
    <?php include '../includes/leftnav.php'; ?>
  <div class="b-example-divider"></div>

  <div class="row py-5 px-5" style="width:100%;">
     <h3 class="text-center">OVERVIEW</h3>
     <div class="col-md-4">
     <div class="card bg-dark text-white">
        <div class="card-body">
          <h5 class="card-title h2">CARS IN STOCK</h5>
          <p class="card-text">
          <?php 
              $sel=$mysqli->query("select * from cars") or die(mysqli_error($mysqli)) ;
             $row=mysqli_num_rows($sel);
                ?>
                 <p class="h4"><?php echo $row;?> Cars</p>
                <?php ?>
          </p>
          
        </div>
      </div>
     </div>
     
     <div class="col-md-4">
     <div class="card bg-dark text-white">
        <div class="card-body">
          <h5 class="card-title h2">CARS ORDERD</h5>
          <p class="card-text">
          <?php 
              $sel=$mysqli->query("select * from orders") or die(mysqli_error($mysqli)) ;
             $row=mysqli_num_rows($sel);
                ?>
                 <p class="h4"><?php echo $row;?> Orders</p>
                <?php ?>
          </p>
          
        </div>
     </div>
     </div>
     
     <div class="col-md-4">
     <div class="card bg-dark text-white">
        <div class="card-body">
          <h5 class="card-title h2">CARS OUT</h5>
          <p class="card-text">
          <?php 
              $sel=$mysqli->query("select * from stockout") or die(mysqli_error($mysqli)) ;
             $row=mysqli_num_rows($sel);
                ?>
                 <p class="h4"><?php echo $row;?> Sold</p>
                <?php ?>
          </p>
          
         </div>
      </div>
   </div>

   <div class="col-md-4">
     <div class="card bg-dark text-white">
        <div class="card-body">
          <h5 class="card-title h2">TRACK</h5>
          <p class="card-text">
          <?php 
              $sel=$mysqli->query("select * from cars where category='track'") or die(mysqli_error($mysqli)) ;
             $row=mysqli_num_rows($sel);
                ?>
                 <p class="h4"><?php echo $row;?> Track</p>
                <?php ?>
          </p>
          
         </div>
      </div>
   </div>

   <div class="col-md-4">
     <div class="card bg-dark text-white">
        <div class="card-body">
          <h5 class="card-title h2">BUS</h5>
          <p class="card-text">
          <?php 
              $sel=$mysqli->query("select * from cars where category='bus'") or die(mysqli_error($mysqli)) ;
             $row=mysqli_num_rows($sel);
                ?>
                 <p class="h4"><?php echo $row;?> Bus</p>
                <?php ?>
          </p>
          
         </div>
      </div>
   </div>

   <div class="col-md-4">
     <div class="card bg-dark text-white">
        <div class="card-body">
          <h5 class="card-title h2">PICKUP</h5>
          <p class="card-text">
          <?php 
              $sel=$mysqli->query("select * from cars where category='pickup'") or die(mysqli_error($mysqli)) ;
             $row=mysqli_num_rows($sel);
                ?>
                 <p class="h4"><?php echo $row;?> Pickup</p>
                <?php ?>
          </p>
          
         </div>
      </div>
   </div>


 </div>
</main>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="sidebars.js"></script>
</body>
</html>