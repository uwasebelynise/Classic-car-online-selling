

<style>
    .main-content{
      padding:10px;
    height: 94vh;
    border-radius: 10px;
    overflow-y: auto;
    
  }

  .main-content::-webkit-scrollbar-thumb {
    border-radius: 0px;
    background: gray;
  }
  
  .main-content::-moz-scrollbar-thumb {
    border-radius: 0px;
    background: gray;
    
  }
</style>

<h1 class="visually-hidden">Sidebars examples</h1>

  



  

  <div class="flex-shrink-0 p-3 bg-white" style="width: 260px;">
    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
      <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-5 fw-semibold">Classic Car</span>
    </a>
    <h2 class="text-dark bg-light btn"><span class=" icon_profile"></span>Welcome  <?php echo $_SESSION['login']['username']?>   |   <?php echo $_SESSION['login']['names']?></h2>
    <ul class="list-unstyled ps-0">
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
          Home
        </button>
        <div class="collapse" id="home-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="index.php" class="link-dark rounded">Overview</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#cars-collapse" aria-expanded="true">
          Cars
        </button>
        <div class="collapse" id="cars-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="addcars.php" class="link-dark rounded">Add Cars</a></li>
            <li><a href="viewcars.php" class="link-dark rounded">View Cars</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
          Orders
        </button>
        <div class="collapse" id="orders-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="orders.php" class="link-dark rounded">New orders</a></li>
            <li><a href="inprocess.php" class="link-dark rounded">Payed Orders</a></li>
            <li><a href="carout.php" class="link-dark rounded">Shipped</a></li>
          </ul>
        </div>
      </li>
      <li class="border-top my-3"></li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
          Account
        </button>
        <div class="collapse" id="account-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded">Profile</a></li>
            <li><a href="../logout.php" class="link-dark rounded">Sign out</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>