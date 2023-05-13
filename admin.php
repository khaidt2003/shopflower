<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" />
  <link rel="stylesheet" href="./assets/CSS/admin.css">
  <link rel="stylesheet" href="./assets/CSS/responsive.css">
  <script src="./assets/js/admin.js"></script>
</head>

<body>
  <div class="tab_nav tab">
    <nav class="navbar ">
        <ul class="navbar-nav mr-auto">
          <a class="navbar-brand" href="#"><i class="fa-brands fa-google"></i></a>
          <li class="nav-item active">
            <a class="nav-link tablinks" onclick="openTab(event, 'tab1')">
              <i class="fa-solid fa-house"></i> Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link tablinks" onclick="openTab(event, 'tab2')">
              <i class="fa-solid fa-envelope"></i> Oders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link tablinks" onclick="openTab(event, 'tab3')">
              <i class="fa fa-tags" aria-hidden="true"></i> Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link tablinks" onclick="openTab(event, 'tab4')">
              <i class="fa-solid fa-user"></i> Customers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link tablinks" href="home.php">
              <i class="fa-solid fa-shop"></i> Channels</a>
          </li>
        </ul>
    </nav>
  </div>
  <div class="contentpage">
    <!-- home -->
    <div id="tab1" class="tabcontent" style="display:block;">
      <div class="head-tab">
        <div class="input-group  search-box">
          <input type="text" class="form-control search" placeholder="Search" aria-label="Search"
            aria-describedby="button-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                class="fa fa-search"></i></button>
          </div>
        </div>
        <div class="dropdown ms-sm-3 header-item topbar-user topbar-head-dropdown dropdown-hover-end">
          <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="d-flex align-items-center">
              <img class="rounded-circle header-profile-user1" src="./assets/images/Logo/Logo1.jpg" alt="Header Avatar">
              <span class="text-start ms-xl-2">
                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Nguyễn Minh Khải</span>
                <span class="d-none d-xl-block ms-1 fs-13 user-name-sub-text">Founder</span>
              </span>
            </span>
          </button>
        </div>
      </div>
      <div class="content_tab1">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <div class="vr rounded bg-secondary opacity-50" style="width: 4px;"></div>
                  <p class="text-uppercase fw-medium text-muted fs-14 text-truncate">Total Earnings</p>
                  <h4 class="mb-3">$<span class="counter-value" data-target="98851.35">98,851.35</span></h4>
                  <div class="d-flex align-items-center gap-2">
                    <h5 class="badge badge-soft-success mb-0" style="color: #28a745;">
                      <i class="ri-arrow-right-up-line align-bottom"></i> +18.30 %
                    </h5>
                    <p class="text-muted mb-0">than last week</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <p class="text-uppercase fw-medium text-muted fs-14 text-truncate">Total Earnings</p>
                  <h4 class="mb-3">$<span class="counter-value" data-target="98851.35">98,851.35</span></h4>
                  <div class="d-flex align-items-center gap-2">
                    <h5 class="badge badge-soft-success mb-0" style="color: #28a745;">
                      <i class="ri-arrow-right-up-line align-bottom"></i> +18.30 %
                    </h5>
                    <p class="text-muted mb-0">than last week</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <p class="text-uppercase fw-medium text-muted fs-14 text-truncate">Total Earnings</p>
                  <h4 class=" mb-3">$<span class="counter-value" data-target="98851.35">98,851.35</span></h4>
                  <div class="d-flex align-items-center gap-2">
                    <h5 class="badge badge-soft-success mb-0" style="color: #28a745;">
                      <i class="ri-arrow-right-up-line align-bottom"></i> +18.30 %
                    </h5>
                    <p class="text-muted mb-0">than last week</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="recent-product">
              <h5>Popular Product</h5>
              <div class="contain-table table-responsive">
                <table class="table table-striped bg-light">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Avatar</th>
                      <th scope="col">Amount</th>
                      <th scope="col">Price</th>
                      <th scope="col">Details</th>
                      <th scope="col">Status</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Rose Flower</td>
                      <td><img src="./assets/images/Logo/Logo1-removebg.png" alt="Rose Flower" class="product_image">
                      </td>
                      <td>10</td>
                      <td>$100</td>
                      <td>Rose Flower</td>
                      <td><span class="badge badge-success">In stock</span></td>
                      <td><button type="button" class="btn btn-primary btn-sm">Edit</button></td>
                      <td><button type="button" class="btn btn-primary btn-sm">Delete</button></td>
                    </tr>
                    <tr>
                      <td>Rose Flower</td>
                      <td><img src="./assets/images/Logo/Logo1-removebg.png" alt="Rose Flower" class="product_image">
                      </td>
                      <td>5</td>
                      <td>$50</td>
                      <td></td>
                      <td><span class="badge badge-warning">Low stock</span></td>
                      <td><button type="button" class="btn btn-primary btn-sm">Edit</button></td>
                      <td><button type="button" class="btn btn-primary btn-sm">Delete</button></td>
                    </tr>
                    <tr>
                      <td>Rose Flower</td>
                      <td><img src="./assets/images/Logo/Logo1-removebg.png" alt="Rose Flower" class="product_image">
                      </td>
                      <td>2</td>
                      <td>$200</td>
                      <td>Sed do eiusmod tempor incididunt ut labore</td>
                      <td><span class="badge badge-danger">Out of stock</span></td>
                      <td><button type="button" class="btn btn-primary btn-sm">Edit</button></td>
                      <td><button type="button" class="btn btn-primary btn-sm">Delete</button></td>
                    </tr>
                    <tr>
                      <td>Rose Flower</td>
                      <td><img src="./assets/images/Logo/Logo1-removebg.png" alt="Rose Flower" class="product_image">
                      </td>
                      <td>2</td>
                      <td>$200</td>
                      <td>Sed do eiusmod tempor incididunt ut labore</td>
                      <td><span class="badge badge-danger">Out of stock</span></td>
                      <td><button type="button" class="btn btn-primary btn-sm">Edit</button></td>
                      <td><button type="button" class="btn btn-primary btn-sm">Delete</button></td>
                    </tr>
                    <tr>
                      <td>Rose Flower</td>
                      <td><img src="./assets/images/Logo/Logo1-removebg.png" alt="Rose Flower" class="product_image">
                      </td>
                      <td>2</td>
                      <td>$200</td>
                      <td>Sed do eiusmod tempor incididunt ut labore</td>
                      <td><span class="badge badge-danger">Out of stock</span></td>
                      <td><button type="button" class="btn btn-primary btn-sm">Edit</button></td>
                      <td><button type="button" class="btn btn-primary btn-sm">Delete</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Order -->
    <div id="tab2" class="tabcontent ">
      <div class="head-tab1">
        <div class="input-group  search-box">
          <input type="text" class="form-control search" placeholder="Search Order" aria-label="Search Order"
            aria-describedby="button-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                class="fa fa-search"></i></button>
          </div>
        </div>
        <div class="dropdown ms-sm-3 header-item topbar-user topbar-head-dropdown dropdown-hover-end">
          <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="d-flex align-items-center">
              <img class="rounded-circle header-profile-user" src="./assets/images/Logo/Logo1.jpg" alt="Header Avatar">
              <span class="text-start ms-xl-2">
                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Nguyễn Minh Khải</span>
                <span class="d-none d-xl-block ms-1 fs-13 user-name-sub-text">Founder</span>
              </span>
            </span>
          </button>
        </div>
      </div>
      <div class="content_tab2">
        <div class="container">
          <div class="row ">
            <div class="col-sm-4 mb-5  d-flex flex-column">
              <div class="card">
                <div class="card-body ">
                  <div class="rounded " style="width: 50%; background-color: red; height: 4px;"></div>
                  <div class="maincard">
                    <p class="text-uppercase fw-medium text-muted fs-14 text-truncate">Total Earnings</p>
                    <h4 class="mb-3">$<span class="counter-value" data-target="98851.35">98,851.35</span></h4>
                    <div class="d-flex align-items-center gap-2">
                      <h5 class="badge badge-soft-success mb-0" style="color: #28a745;">
                        <i class="ri-arrow-right-up-line align-bottom"></i> +18.30 %
                      </h5>
                      <p class="text-muted mb-0">than last week</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mb-5 ">
              <div class="card">
                <div class="card-body">
                  <div class="rounded " style="width: 50%; background-color: red; height: 4px;"></div>
                  <p class="text-uppercase fw-medium text-muted fs-14 text-truncate">Total Earnings</p>
                  <h4 class="mb-3">$<span class="counter-value" data-target="98851.35">98,851.35</span></h4>
                  <div class="d-flex align-items-center gap-2">
                    <h5 class="badge badge-soft-success mb-0" style="color: #28a745;">
                      <i class="ri-arrow-right-up-line align-bottom"></i> +18.30 %
                    </h5>
                    <p class="text-muted mb-0">than last week</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mb-5 ">
              <div class="card">
                <div class="card-body">
                  <div class="rounded " style="width: 50%; background-color: red; height: 4px;"></div>
                  <p class="text-uppercase fw-medium text-muted fs-14 text-truncate">Total Earnings</p>
                  <h4 class=" mb-3">$<span class="counter-value" data-target="98851.35">98,851.35</span></h4>
                  <div class="d-flex align-items-center gap-2">
                    <h5 class="badge badge-soft-success mb-0" style="color: #28a745;">
                      <i class="ri-arrow-right-up-line align-bottom"></i> +18.30 %
                    </h5>
                    <p class="text-muted mb-0">than last week</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mb-5 ">
              <div class="card">
                <div class="card-body">
                  <div class="rounded " style="width: 50%; background-color: red; height: 4px;"></div>
                  <div class="vr rounded bg-secondary opacity-50" style="width: 4px;"></div>
                  <p class="text-uppercase fw-medium text-muted fs-14 text-truncate">Total Earnings</p>
                  <h4 class="mb-3">$<span class="counter-value" data-target="98851.35">98,851.35</span></h4>
                  <div class="d-flex align-items-center gap-2">
                    <h5 class="badge badge-soft-success mb-0" style="color: #28a745;">
                      <i class="ri-arrow-right-up-line align-bottom"></i> +18.30 %
                    </h5>
                    <p class="text-muted mb-0">than last week</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mb-5 ">
              <div class="card">
                <div class="card-body">
                  <div class="rounded " style="width: 50%; background-color: red; height: 4px;"></div>
                  <div class="vr rounded bg-secondary opacity-50" style="width: 4px;"></div>
                  <p class="text-uppercase fw-medium text-muted fs-14 text-truncate">Total Earnings</p>
                  <h4 class="mb-3">$<span class="counter-value" data-target="98851.35">98,851.35</span></h4>
                  <div class="d-flex align-items-center gap-2">
                    <h5 class="badge badge-soft-success mb-0" style="color: #28a745;">
                      <i class="ri-arrow-right-up-line align-bottom"></i> +18.30 %
                    </h5>
                    <p class="text-muted mb-0">than last week</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- product -->
    <div id="tab3" class="tabcontent">
      <div class="head-tab1">
        <div class="input-group  search-box">
          <input type="text" class="form-control search" placeholder="Search Product" aria-label="Search Product"
            aria-describedby="button-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                class="fa fa-search"></i></button>
          </div>
        </div>
        <div class="add-product">
          <button class="btn btn-primary mb-15" onclick="window.location.href='./add_product.html'">
            <i class="fas fa-plus"></i> Add Product
          </button>
        </div>
        <div class="dropdown ms-sm-3 header-item topbar-user topbar-head-dropdown dropdown-hover-end">
          <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="d-flex align-items-center">
              <img class="rounded-circle header-profile-user" src="./assets/images/Logo/Logo1.jpg" alt="Header Avatar">
              <span class="text-start ms-xl-2">
                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Nguyễn Minh Khải</span>
                <span class="d-none d-xl-block ms-1 fs-13 user-name-sub-text">Founder</span>
              </span>
            </span>
          </button>
        </div>
      </div>
      <div class="content_tab2">
        <div class="container1">
          <div class="row filter-nav">
            <div class="col-2 mb-3 filter-item text-center">
              <h6>filter</h6>
            </div>
            <div class="col-2 mb-3 filter-item">
              <select class="form-select w-100 rounded-pill">
                <option selected>Type of flower</option>
                <option value="1">Rose</option>
                <option value="2">Chrysanthemum</option>
                <option value="3">Orchid</option>
              </select>
            </div>
            <div class="col-md-2 mb-3 filter-item">
              <select class="form-select w-100 rounded-pill">
                <option selected>Price</option>
                <option value="1">Under 100k</option>
                <option value="2">From 100k - 200k VND</option>
                <option value="3">From 200k - 500k VND</option>
                <option value="4">Over 500k</option>
              </select>
            </div>
            <div class="col-2 mb-3 filter-item ">
              <select class="form-select w-100 rounded-pill">
                <option selected>Event</option>
                <option value="1">Valentine Day</option>
                <option value="2">Birthday</option>
                <option value="3">Khác</option>
              </select>
            </div>
            <div class="col-2 mb-3 filter-item w-70 text-center">
              <button class="btn btn-success"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="recent-product col-12">
            <h5>Product</h5>
            <div class="contain-table ">
              <table class="table table-striped bg-light">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Avatar</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Price</th>
                    <th scope="col">Details</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    require_once("./connect.php");

                    $sql = "SELECT name, avatar, amount, price, note FROM product";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                      ?>
                      <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><img src="./assets/images/product/<?php echo $row['avatar']; ?>" class="product_image"></td>
                        <td><?php echo $row['amount']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['note']; ?></td>
                        <?php 
                        if($row['amount'] >= 10){
                          ?><td><span class="badge badge-success">In stock</span></td><?php
                        }
                        else if($row['amount'] > 0){
                          ?><td><span class="badge badge-warning">Low stock</span></td><?php
                        }
                        else
                          ?><td><span class="badge badge-danger">Out of stock</span></td>
                      </tr>
                      <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="tab4" class="tabcontent">
      <div class="head-tab1">
        <div class="input-group  search-box">
          <input type="text" class="form-control search" placeholder="Search Customers" aria-label="Search Customers"
            aria-describedby="button-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                class="fa fa-search"></i></button>
          </div>
        </div>
        <div class="add-Customers">
          <button class="btn btn-primary mb-15">
            <i class="fas fa-plus"></i> Add Customers
          </button>
        </div>
        <div class="dropdown ms-sm-3 header-item topbar-user topbar-head-dropdown dropdown-hover-end">
          <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="d-flex align-items-center">
              <img class="rounded-circle header-profile-user" src="./assets/images/Logo/Logo1.jpg" alt="Header Avatar">
              <span class="text-start ms-xl-2">
                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Nguyễn Minh Khải</span>
                <span class="d-none d-xl-block ms-1 fs-13 user-name-sub-text">Founder</span>
              </span>
            </span>
          </button>
        </div>
      </div>
      <div class="content_tab2">
        <div class="container1">
          <div class="row contain-card">
            <div class="col-xxl-3 col-md-6" style="margin-top: 30px;">
              <div class="card card-height-100 bg-warning-subtle border-0 overflow-hidden">
                <div class="card-body p-4 z-1 position-relative colorCard">
                  <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="7845102">7,845,102</span>
                  </h4>
                  <p class="mb-0 fw-medium text-uppercase fs-14">Total Customers</p>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-md-6" style="margin-top: 30px;">
              <div class="card card-height-100 bg-success-subtle border-0 overflow-hidden">
                <div class="card-body p-4 z-1 position-relative colorCard">
                  <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="559.25">559.25</span>k
                  </h4>
                  <p class="mb-0 fw-medium text-uppercase fs-14">Active Customers</p>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-md-6" style="margin-top: 30px;">
              <div class="card card-height-100 bg-info-subtle border-0 overflow-hidden">
                <div class="card-body p-4 z-1 position-relative colorCard">
                  <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="559.25">559.25</span>k
                  </h4>
                  <p class="mb-0 fw-medium text-uppercase fs-14">Unactive Customers</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="recent-product col-12" style="margin-top: 30px;">
            <h5>Product</h5>
            <div class="contain-table">
              <table class="table table-striped bg-light">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Avatar</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Price</th>
                    <th scope="col">Details</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    require_once("./connect.php");

                    $sql = "SELECT name, avatar, amount, price, note FROM product";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                      ?>
                      <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><img src="./assets/images/product/<?php echo $row['avatar']; ?>" class="product_image"></td>
                        <td><?php echo $row['amount']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['note']; ?></td>
                        <?php 
                        if($row['amount'] >= 10){
                          ?><td><span class="badge badge-success">In stock</span></td><?php
                        }
                        else if($row['amount'] > 0){
                          ?><td><span class="badge badge-warning">Low stock</span></td><?php
                        }
                        else
                          ?><td><span class="badge badge-danger">Out of stock</span></td>
                      </tr>
                      <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>