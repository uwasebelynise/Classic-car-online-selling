<?php

include 'conn.php';
?>
<?php
if (isset($_POST['submit'])) {
$names = $_POST['names'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$username = $_POST['username'];
$password = $_POST['password'];
$usertype = "user";

$sql=mysqli_query($mysqli,"INSERT INTO users VALUES(NULL,'$names','$address','$phone','$email','$gender','$username','$password','$usertype')") or die(mysqli_error($mysqli));
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
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
</head>
<body>
	<main>
<div class="row">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg><h4>CLASSIC CAR</h4>
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php#Home" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="index.php#Features" class="nav-link px-2 link-dark">Features</a></li>
        <li><a href="index.php#Pricing" class="nav-link px-2 link-dark">Pricing</a></li>
        <li><a href="index.php#About" class="nav-link px-2 link-dark">About</a></li>
      </ul>

      <div class="col-md-3">
       <a href="login.php"><button type="button" class="btn btn-outline-primary me-2">Login</button></a>
        <a href="signup.php"><button type="button" class="btn btn-primary">Sign-up</button></a>
      </div>
    </header>
  </div>
    

    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="card card">
          <div class="card-header text-center">
            Signup
            <?php echo $feedback;?>
          </div>
          <div class="card-body">
            <form action="signup.php" method="post">
              <label for="names">Names</label>
              <input type="text" class="form-control" name="names" placeholder="Names" required="">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address" id="address" placeholder="Address" required="">
              <label for="phone">PhoneNumber</label>
              <input type="text" class="form-control" name="phone" id="phone" placeholder="PhoneNumber" required="">
              <label for="email">E-mail</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required="">
              <label for="gender">Gender</label><br>
              <input type="radio" name="gender" value="Male"><label>Male</label>
              <input type="radio" name="gender" value="Female"><label>Female</label>
              <hr>
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="Username" required="">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="">
              <br>
              <button class="btn btn-primary" name="submit">Submit</button>
              <button class="btn btn-primary" name="cancel">Cancel</button>

            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>


  </main>
</body>
</html>

<script type="text/javascript" src="assets/dist/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="assets/dist/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="assets/dist/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="assets/dist/js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>