<?php

include '../connect.php';
?>
<?php
if (isset($_POST['submit'])) {
    $carid = $_SESSION['car_id'];
$name = $_POST['name'];
$address = $_POST['address'];
$plate = $_POST['plate'];
$category = $_POST['category'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
//$image = $_POST['image'];
$date = $_POST['date'];
$description = $_POST['description'];
$filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $target_dir = "./../img/";
    $folder = $target_dir . $filename;
$sql=mysqli_query($mysqli,"UPDATE `cars` SET `name`='$name',`address`='$address',`plate`='$plate',`category`='$category',`price`='$price',`quantity`='$quantity',`avatar`='$filename',`description`='$description',`date`='$date' WHERE car_id = $carid")or die(mysqli_error($mysqli));
//$sql=mysqli_query($mysqli,"INSERT INTO `cars`(`car_id`, `name`, `address`, `plate`, `category`, `price`, `quantity`, `avatar`, `description`, `date`) VALUES (NULL,'$name','$address','$plate','$category',$price,$quantity,'$filename','$date','$description')");
//$sql=mysqli_query($mysqli,"INSERT INTO cars VALUES(NULL,'$name','$address','$plate','$category',$price,$quantity,'$image','$date','$description')") or die(mysqli_error($mysqli));
if (move_uploaded_file($tempname, $folder)) {
    header("location:viewcars.php");
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
  <div class="row py-5 px-5" style="width:100%;">
    <div class="col-md-12">
     <div class="card card">
          <div class="card-header text-center">
            Update
            <?php echo $feedback;?>
          </div>
          <div class="card-body">
            <?php
            $myid=$_GET['car_id'];
            $_SESSION['car_id']=$myid;
            $sel=$mysqli->query("select * from cars where car_id = $myid");
            while ($row=mysqli_fetch_array($sel)) {
              ?>
            <form action="update.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                    <label for="name">Names</label>
                    <input type="text" class="form-control" name="name" value="<?php echo  $row['name'];?>" required="">
                    </div>
                    <div class="col-md-6">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="address" value="<?php echo  $row['address'];?>" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <label for="plate">plate Number</label>
                    <input type="text" class="form-control" name="plate" value="<?php echo  $row['plate'];?>" required="">
                    </div>
                    <div class="col-md-6">
                    <label for="address">Category</label>
                    <select name="category" class="form-control">
                        <option value="truck">Truck</option>
                        <option value="pickup">Pickup</option>
                        <option value="bus">Bus</option>
                    </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <label for="plate">Price</label>
                    <input type="number" class="form-control" name="price" value="<?php echo  $row['price'];?>" required="">
                    </div>
                    <div class="col-md-6">
                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control" name="quantity" value="<?php echo  $row['quantity'];?>" required="">
                    </div>
                </div>
              <label for="phone">Select Avatar</label>
              <div class="mb-3 input-group">
              <input type="file" class="form-control form-control-sm" value="<?php echo  $row['avatar'];?>" name="uploadfile" aria-label="Small file input example">
              <span class="input-group-text">Date</span>
              <input type="date" name="date" value="<?php echo  $row['date'];?>" class="form-control" id="">
              </div>
              <label for="email">Description</label>
              <div class="input-group">
              <span class="input-group-text">With textarea</span>
              <textarea class="form-control"  name="description" aria-label="With textarea"></textarea>
              </div><br>
              <button class="btn btn-primary" name="submit">Submit</button>
              <button class="btn btn-primary" name="cancel">Cancel</button>
              <?php
            }
            ?>
            </form>
          </div>
        </div>


        
    </div>
    
  </div>
  
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="sidebars.js"></script>
  </body>
</html>
