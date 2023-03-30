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
      <h2 class="text-dark bg-light btn"><span class=" icon_profile"></span>Welcome  <?php echo $_SESSION['login']['username']?>   |   <?php echo $_SESSION['login']['names']; $myid = $_SESSION['login']['user_id']?></h2> 
    
      <?php 
              $no = 1;
              $sel=$mysqli->query("select * from stockout,cars,users where stockout.car_id = cars.car_id and stockout.user_id = users.user_id and users.user_id = $myid; ") or die(mysqli_error($mysqli)) ;
              while ($row=mysqli_fetch_array($sel)) {
                ?>
            
            <div class="col-sm-6 col-lg-4 mb-4">
      <div class="card">
        <img class="bd-placeholder-img card-img-top" width="100%" height="200" src="../img/<?php echo $row['avatar'] ; ?>" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/></img>

        <div class="card-body">
          <h5 class="card-title">You Purchase <?php echo $row['name'] ; ?> <?php echo $row['price'] ; ?> Frw</h5>
          <p class="card-text">Your can contact us on <br> Email: classiccar@outlook.com <br> Phone: 0788892770 / 0722292770 <br> for more imformation about delivery status.</p>
          <p class="card-text"><small class="text-muted">Delivery takes between 1-2 weeks</small></p>
        </div>
      </div>
    </div>
                <?php
                $no++;
              }
              ?>

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