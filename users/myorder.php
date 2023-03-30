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

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
  .rounded-4 { border-radius: .5rem; }
.rounded-5 { border-radius: 1rem; }
.text-shadow-1 { text-shadow: 0 .125rem .25rem rgba(0, 0, 0, .25); }
.text-shadow-2 { text-shadow: 0 .25rem .5rem rgba(0, 0, 0, .25); }
.text-shadow-3 { text-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .25); }


  .card-cover {
  background-repeat: no-repeat;
  background-color:#fff;
  background-blend-mode:multiply;
  background-position: center center;
  background-size: cover;
}
</style>
  </head>
</head>
<body>
	<main>
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#home"/></svg><h4>CLASSIC CAR</h4>
      </a>
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php#Home" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="index.php#Features" class="nav-link px-2 link-dark">Features</a></li>
        <li><a href="index.php#Pricing" class="nav-link px-2 link-dark">Pricing</a></li>
        <li><a href="index.php#About" class="nav-link px-2 link-dark">About</a></li>
      </ul>

      <div class="col-md-3">
      <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>Profile/orders</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-light text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="myorder.php">Orders</a></li>
        <li><a class="dropdown-item" href="mypurch.php">Purchase</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
      </ul>
    </div> 
    </div>
     


    </header>
    <div class="row">
      <h2 class="text-dark bg-light btn"><span class=" icon_profile"></span>Welcome  <?php echo $_SESSION['login']['username']?>   |   <?php echo $_SESSION['login']['names']?></h2> 

      <div class="col-md-8">
      <div class="row py-5 px-5" style="width:100%;">
    <div class="card">
     <div class="card-header text-center">Orderd Cars</div>
     <div class="card-body table-responsive">
     <table class="table table-striped">
      <tr>
        <th>No</th>
        <th>Car Name</th>
        <th>Plate</th>
        <th>Category</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Avatar</th>
        <th>Action</th>
      </tr>
      <?php 
        $myid = $_SESSION['login']['user_id'];
              $no = 1;
              $sel=$mysqli->query("select * from cars,users,orders where users.user_id = $myid and orders.car_id = cars.car_id and orders.user_id = users.user_id") or die(mysqli_error($mysqli)) ;
              while ($row=mysqli_fetch_array($sel)) {
                ?>
                <tr>
                  <td><?php echo $no ; ?></td>
                  <td><?php echo $row['name'] ; ?></td>
                  <td><?php echo $row['plate'] ; ?></td>
                  <td><?php echo $row['category'] ; ?></td>
                  <td><?php echo $row['price'] ; ?></td>
                  <td><?php echo $row['quantity'] ; ?></td>
                  <td><img src="../img/<?php echo $row['avatar'] ; ?>" width=50 height=50 alt=""></td>
                  <td><div class="btn-group btn-default">
                    <a href="../includes/delete.php?order_id=<?php echo $row['order_id'];?>" class="btn btn-danger">Delete</a>
                  </div></td>
                                  
                </tr>
                <?php
                $no++;
              }
              ?>
     </table>
     </div>
    </div>
  </div>




  <div class="row py-5 px-5" style="width:100%;">
    <div class="card">
     <div class="card-header text-center">Ready to Pay</div>
     <div class="card-body table-responsive">
     <table class="table table-striped table-responsive">
      <tr>
        <th>No</th>
        <th>Car Name</th>
        <th>Plate</th>
        <th>Category</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Avatar</th>
        <th>Action</th>
      </tr>
      <?php 
        $myid = $_SESSION['login']['user_id'];
              $no = 1;
              $sel=$mysqli->query("select * from confirmed_orders,cars,users where users.user_id = $myid and confirmed_orders.car_id = cars.car_id and confirmed_orders.user_id = users.user_id") or die(mysqli_error($mysqli)) ;
              while ($row=mysqli_fetch_array($sel)) {
                ?>
                <tr>
                  <td><?php echo $no ; ?></td>
                  <td><?php echo $row['name'] ; ?></td>
                  <td><?php echo $row['plate'] ; ?></td>
                  <td><?php echo $row['category'] ; ?></td>
                  <td><?php echo $row['price'] ; ?></td>
                  <td><?php echo 1; ?></td>
                  <td><img src="../img/<?php echo $row['avatar'] ; ?>" width=50 height=50 alt=""></td>
                  <td><div class="btn-group btn-default">
                    <a href="xmyorder.php?car_id=<?php echo $row['car_id'];?>" class="btn btn-primary" onclick="showform()" name="submit">Pay</a>
                  </div></td>
                                  
                </tr>
                <?php
                $no++;
              }
              ?>
     </table>
     </div>
    </div>
  </div>
      </div>
      <div class="col-md-4 py-5 px-5">

      <div class="card card" id="myform">
          <div class="card-header text-center">
            Payment
            <?php echo $feedback;?>
          </div>
          <div class="card-body">
          <?php 
        $myid = $_SESSION['login']['user_id'];
              $sel=$mysqli->query("select * from confirmed_orders,cars,users where users.user_id = $myid and confirmed_orders.car_id = cars.car_id and confirmed_orders.user_id = users.user_id") or die(mysqli_error($mysqli)) ;
           ?>
                 <form action="addcars.php" method="post">
               
                <p class="strong text-center">You can Pay Using bank Account BK:0039-4732-9933 or MOMO Pay: *182*7*2*00928# after Paying you Take Screenshot of your receipt then upload id on field below.thank you</p>
              <label for="phone">Upload Receipt</label>
              <input type="file" class="form-control form-control-sm" required name="image" aria-label="Small file input example">
              <label for="email">Description</label>
              <div class="input-group">
              <span class="input-group-text">With textarea</span>
              <textarea class="form-control" name="description" aria-label="With textarea"></textarea>
              </div><br>
              <button class="btn btn-primary" name="submit">Send</button>
              <button class="btn btn-primary" name="cancel">Cancel</button>

            </form>
          </div>
        </div>

      </div>
     
    </div>


  </div>
  </main>
</body>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script>
  function showform() {
    document.getElementById("myform").style.display ='block';
  }
</script>
</html>