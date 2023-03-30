<?php

include 'conn.php';
?>
<?php
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$user = "user";
$admin = "admin";
$select=$mysqli->query("select * from users where username='$username' and password='$password'") or die(mysqli_error($mysqli));
$row=mysqli_fetch_array($select);
if( $username == $row['username'] and $password == $row['password'] ){
    if( $row['usertype'] == $user ){
        header("location:users/index.php");
    }
    elseif ( $row['usertype'] == $admin ) {
        header("location:admin/index.php");
    }

$_SESSION['login']=$row;
}

else{
  $feedback="<div class='alert alert-danger alert-dismissible fade show role='alert'>
  <strong>Sorry!</strong> Incorect Password.
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
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <div class="card card">
          <div class="card-header text-center">
            Login Here!
            <?php echo $feedback;?>
          </div>
          <div class="card-body">
            <form action="login.php" method="post">
              
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="Username" required="">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="">
              <br>
              <button class="btn btn-primary" name="submit">login</button>

            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4"></div>
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