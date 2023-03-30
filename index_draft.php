<?php
include 'conn.php';
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

.conta {
  position: relative;
}

.image {
  display: block;
  width: 100%;
  height:300px;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  width:100%;
  background-color: #090b0dc4;
  overflow: hidden;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}

.conta:hover .overlay {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
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
        <li><a href="#Home" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="#Features" class="nav-link px-2 link-dark">Features</a></li>
        <li><a href="#Pricing" class="nav-link px-2 link-dark">Pricing</a></li>
        <li><a href="#About" class="nav-link px-2 link-dark">About</a></li>
      </ul>

      <div class="col-md-3">
         <a href="login.php"><button type="button" class="btn btn-outline-primary me-2">Login</button></a>
        <a href="signup.php"><button type="button" class="btn btn-primary">Sign-up</button></a>
      </div>
    </div>
     


    </header>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
      <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1200" height="600" src="img/b3.jpg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#555" dy=".3em"></text></svg>

              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1200" height="600" src="img/t4.jpg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"/><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>

              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1200" height="600" src="img/c1.jpg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"/><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg>

              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
    

    <div class="row align-items-md-stretch py-5 px-5" id="Features">
      <h2>Features</h2>
      <hr>
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h2>Shop</h2>
          <p>Find the best car fr you, local dealers. our price-budgingand price-drop notification keep you informed of potential deals.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Research</h2>
          <p>View side-by-side comparisons, payment calculators and customer reviews. there let you hear the good and the bad from current car owners</p>
        </div>
      </div>
    </div>
    <div class="row align-items-md-stretch py-5 px-5" id="Features">
    <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>News</h2>
          <p>We provide news about our cars like details about our cars, the best car you can buy, new new technology and new car which are available. </p>
          
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h2>Service & Repair</h2>
          <p>We provide srvices like car repair and other service about the car repairation.</p>
          
        </div>
      </div>
      
    </div>
  

    <div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Bus cars</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-3">
    <?php 
              $show = "";
              $dis = "";
              $no = 1;
              $sel=$mysqli->query("select * from cars where category='pickup'");
              $sell=$mysqli->query("select * from cars where category='pickup'");
              $roww=mysqli_fetch_array($sell);
                /////////////////////////////////////
	            $sel2 = $mysqli->query("select * from cars where car_id = $roww[car_id]");
              $row2=mysqli_fetch_array($sel2);
              $q = $row2['quantity'];
              if($q < 1){
                 $show = "ALL SOLD OUT";
                 $dis = "disabled";
                }
              else {
                 $show = "";
                 $dis = "";
                }
               ////////////////////////////////////
              while ($row=mysqli_fetch_array($sel)) {

                ?>

      <div class="col conta">
      <img src="img/<?php echo $row['avatar'] ; ?>" alt="Avatar" class="image shadow">
         <div class=" overlay d-flex h-100 px-3 pb-3 flex-column shadow text-white text-shadow-1">
          <h2 class="text-danger display-5  fw-bold"><?php echo $show ; ?></h2>
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><?php echo $row['name'] ; ?></h2>
            <a href="xorder.php?car_id=<?php echo $row['car_id'];?>" class="btn btn-outline-light <?php echo $dis ; ?>" name="submit">Order</a>
             <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
              <small>USD <?php echo $row['price'] ; ?></small>
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                <small>Origin: <?php echo $row['address'] ; ?></small>
              </li>
            </ul>
          </div>
      </div>
      <?php }?>

     

      
    </div>
  </div>


  <div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Bus cars</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-3">
    <?php 
              $show2 = "";
              $dis = "";
              $no = 1;
              $sel=$mysqli->query("select * from cars where category='bus'");
              while ($row=mysqli_fetch_array($sel)) {
              $q = $row['quantity'];
              if($q < 1){
                 $show2 = "ALL SOLD OUT";
                 $dis = "disabled";
                }
              else {
                 $show2 = "";
                 $dis = "";
                }
                ?>

      <div class="col conta">
      <img src="img/<?php echo $row['avatar'] ; ?>" alt="Avatar" class="image shadow">
         <div class=" overlay d-flex h-100 px-3 pb-3 flex-column shadow text-white text-shadow-1">
          <h2 class="text-danger display-5  fw-bold"><?php echo $show2 ; ?></h2>
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><?php echo $row['name'] ; ?></h2>
            <a href="xorder.php?car_id=<?php echo $row['car_id'];?>" class="btn btn-outline-light <?php echo $dis ; ?>" name="submit">Order</a>
             <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
              <small>USD <?php echo $row['price'] ; ?></small>
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                <small>Origin: <?php echo $row['address'] ; ?></small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
              </li>
            </ul>
          </div>
      </div>
      <?php }?>

     

      
    </div>
  </div>



  <div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Bus cars</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-3">
    <?php 
              $show2 = "";
              $dis = "";
              $no = 1;
              $sel=$mysqli->query("select * from cars where category='track'");
              while ($row=mysqli_fetch_array($sel)) {
              $q = $row['quantity'];
              if($q < 1){
                 $show3 = "ALL SOLD OUT";
                 $dis = "disabled";
                }
              else {
                 $show3 = "";
                 $dis = "";
                }
                ?>

      <div class="col conta">
      <img src="img/<?php echo $row['avatar'] ; ?>" alt="Avatar" class="image shadow">
         <div class=" overlay d-flex h-100 px-3 pb-3 flex-column shadow text-white text-shadow-1">
          <h2 class="text-danger display-5  fw-bold"><?php echo $show3 ; ?></h2>
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><?php echo $row['name'] ; ?></h2>
            <a href="xorder.php?car_id=<?php echo $row['car_id'];?>" class="btn btn-outline-light <?php echo $dis ; ?>" name="submit">Order</a>
             <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
              <small>USD <?php echo $row['price'] ; ?></small>
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                <small>Origin: <?php echo $row['address'] ; ?></small>
              </li>
            </ul>
          </div>
      </div>
      <?php }?>

     

      
    </div>
  </div>


  </div>
  

<div class="container" id="About">
  <footer class="py-5">
    <div class="row">
      <div class="col-2">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
        </ul>
      </div>

      <div class="col-4">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
        </ul>
      </div>

      

      <div class="col-4 offset-1">
        <form>
          <h5>Contuct us</h5>
          <p>Email: classiccar@outlook.com <br> Phone: 0788892770 / 0722292770</p>
          <textarea name="message" class="form-control" id="" cols="10" rows="4"></textarea>
          <div class="d-flex w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-primary" type="button">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex justify-content-between py-4 my-4 border-top">
      <p>&copy; 2021 Company, Inc. All rights reserved.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
      </ul>
    </div>
  </footer>
</div>
  </main>
</body>
<script src=" assets/dist/js/bootstrap.bundle.min.js"></script>
</html>