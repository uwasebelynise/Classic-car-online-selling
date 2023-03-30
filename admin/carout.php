<?php

include '../connect.php';
?>
<?php
if (isset($_POST['submit'])) {
$name = $_POST['name'];
$address = $_POST['address'];
$plate = $_POST['plate'];
$category = $_POST['category'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$image = $_POST['image'];
$date = $_POST['date'];
$description = $_POST['description'];
$car_id = $_SESSION['car_id'];

//$sql=mysqli_query($mysqli,"INSERT INTO cars VALUES(NULL,'$name','$address','$plate','$category',$price,$quantity,'$image','$date','$description')") or die(mysqli_error($mysqli));
$upd = $mysqli->query("update car set quantity = quantity -1 where quantity > o and car = $car_id")or die(mysqli_error($mysqli));
if ($upd) {
 $feedback="<div class='alert alert-success alert-dismissible fade show role='alert'>
  <strong>Well Done!</strong> Thank you Now you have an account.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
}
else
{
  $feedback="<div class='alert alert-warning alert-dismissible fade show role='alert'>
  <strong>Sorry!</strong> Failed.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Classic Car</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="sidebars.css" rel="stylesheet">
  </head>
  <body>
<main>
  
<?php include '../includes/leftnav.php'; ?>
  <div class="b-example-divider"></div>
  <div class="row py-5 px-5" style="width:80%;">
    <div class="card main-content">
     <div class="card-header text-center">Cars</div>
     <div class="card-body">
     <table class="table table-responsive">
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>address</th>
        <th>Plate</th>
        <th>Category</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Avatar</th>
        <th>Date</th>
      </tr>
      <?php 
              $no = 1;
              $sel=$mysqli->query("select * from stockout,cars,users where stockout.car_id = cars.car_id and stockout.user_id = users.user_id") or die(mysqli_error($mysqli)) ;
              while ($row=mysqli_fetch_array($sel)) {
                ?>
                <tr>
                  <td><?php echo $no ; ?></td>
                  <td><?php echo $row['names'] ; ?></td>
                  <td><?php echo $row['address'] ; ?></td>
                  <td><?php echo $row['name'] ; ?></td>
                  <td><?php echo $row['category'] ; ?></td>
                  <td><?php echo $row['price'] ; ?></td>
                  <td><?php echo 1 ; ?></td>
                  <td><img src="../img/<?php echo $row['avatar'] ; ?>" width=50 height=50 alt=""></td>
                  <td><?php echo $row['date'] ; ?></td>               
                </tr>
                <?php
                $no++;
              }
              ?>
     </table>
     </div>
    </div>
  </div>
  
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="sidebars.js"></script>
  </body>
</html>
