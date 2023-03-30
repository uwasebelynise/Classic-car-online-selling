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

$sql=mysqli_query($mysqli,"INSERT INTO cars VALUES(NULL,'$name','$address','$plate','$category',$price,$quantity,'$image','$date','$description')") or die(mysqli_error($mysqli));
if ($sql) {
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
      img {
  cursor: pointer;
  width: 900px;
  max-width: 100%;
  aspect-ratio: 1.5/1;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  height: 100%;
  color: white;
  border-radius: 1px;
  transition: all 0.3s ease;

  &:hover {
    transform: scale(1.05);
  }

  &:before {
    border-radius: 15px;
    position: relative;
    background: #ccc;
    z-index: 1;
    height: 100%;
    color: black;
    content: attr(alt);
    display: grid;
    place-items: center;
  }
}

.load-image {
  font-size:13px;
  display: block;
  height: 50px;
  width: 100%;
  border-radius: 15px;
  display: grid;
  align-items: center;
  text-align: center;
  text-decoration: none;
  color: black;
  opacity: 0.7;
  transition: all 0.3s ease;

  &:hover {
    opacity: 1;
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
  <div class="row py-5 px-5" style="width:100%;">
    <?php 
              $sel=$mysqli->query("select * from payment,cars,users where payment.car_id = cars.car_id and payment.user_id = users.user_id") or die(mysqli_error($mysqli)) ;
              while ($row=mysqli_fetch_array($sel)) {
                ?>
            
            <div class="col-sm-6 col-lg-4 mb-4">
      <div class="card">
        <img src="../img/<?php echo $row['receipt'] ; ?>"  alt=""> <a class="load-image bd-placeholder-img card-img-top" width="100%" height="200" href="../img/<?php echo $row['receipt'] ; ?> ">Click here to View Receipt</a>
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['names'] ; ?> Purchase 1 <?php echo $row['name'] ; ?> Car <?php echo $row['price'] ; ?> Frw</h5>
          <p class="card-text"><small class="text-muted">On <?php echo $row['date'] ; ?></small></p>
          <div class="btn-group btn-default">
                    <a href="xcarout.php?payid=<?php echo $row['payment_id'];?>" class="btn btn-primary">Stockout</a>
                  </div>
        </div>
      </div>
    </div>
                <?php
              }
              ?>
  </div>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="sidebars.js"></script>
      <script>
        function kanda(){
          print();
        }
      </script>
  </body>
</html>
