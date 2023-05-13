<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" />
    <link rel="stylesheet" href="./assets/CSS/shopcart.css">
    <link rel="stylesheet" href="./assets/CSS/responsive.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-2 col-3">
                    <img src="./assets/images/Logo/Logo1-removebg.png" alt="Rose" class="img-fluid rounded-5"
                    style="max-width: 80%; height: auto;">
                </div>
                <div class="col-lg-8 col-md-6 col-sm-8 col-6 d-flex justify-content-center align-items-center ">
                    <h1 class="text-center">My Shopping Cart</h1>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-2 col-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="./assets/images/Logo/Logo1-removebg.png" alt="Rose" class="img-fluid rounded-5">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Logout</a>
                      </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="body-cart">
        <section class="main-cart">
            <div class="container">
                <div class="row display-center">
                    <div class="col-12">
                        <div class="card card-item card-register mb-5">
                            <div class="card-body ">
                                <div class="row ">
                                    <div class="col-lg-8 list-item">
                                        <div class="head-item">
                                            <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                                            <h6 class="mb-0 text-muted">3 items</h6>
                                        </div>
                                        <hr class="my-4">
                                        <div class="row">
                                            <div class="col-md-2 col-lg-2 col-xl-2">
                                                <img src="./assets/images/Content/Product/product1.webp" alt="Rose"
                                                    class="img-fluid rounded-5">
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-3">
                                                <h6 class="text-muted">Flower</h6>
                                                <h6 class="text-black mb-0">Rose</h6>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-3 d-flex align-items-center">
                                                <button class="btn "
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <input id="form" min="0" name="quantity" value="1" type="number"
                                                    class="form-control form-control-sm" />

                                                <button class="btn"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                            <div
                                                class="col-md-3 col-lg-2 col-xl-2 offset-lg-1 d-flex align-items-center">
                                                <h6 class="mb-0">200k</h6>
                                            </div>
                                            <div class="col-md-1 col-lg-1 col-xl-1 d-flex align-items-center">
                                                <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <div class="row">
                                            <div class="col-md-2 col-lg-2 col-xl-2">
                                                <img src="./assets/images/Content/Product/product1.webp" alt="Rose"
                                                    class="img-fluid rounded-5">
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-3">
                                                <h6 class="text-muted">Flower</h6>
                                                <h6 class="text-black mb-0">Rose</h6>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-3 d-flex align-items-center">
                                                <button class="btn "
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <input id="form" min="0" name="quantity" value="1" type="number"
                                                    class="form-control form-control-sm" />

                                                <button class="btn"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                            <div
                                                class="col-md-3 col-lg-2 col-xl-2 offset-lg-1 d-flex align-items-center">
                                                <h6 class="mb-0">200k</h6>
                                            </div>
                                            <div class="col-md-1 col-lg-1 col-xl-1 d-flex align-items-center">
                                                <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <div class="row">
                                            <div class="col-md-2 col-lg-2 col-xl-2">
                                                <img src="./assets/images/Content/Product/product1.webp" alt="Rose"
                                                    class="img-fluid rounded-5">
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-3">
                                                <h6 class="text-muted">Flower</h6>
                                                <h6 class="text-black mb-0">Rose</h6>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-3 d-flex align-items-center">
                                                <button class="btn "
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <input id="form" min="0" name="quantity" value="1" type="number"
                                                    class="form-control form-control-sm" />

                                                <button class="btn"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                            <div
                                                class="col-md-3 col-lg-2 col-xl-2 offset-lg-1 d-flex align-items-center">
                                                <h6 class="mb-0">200k</h6>
                                            </div>
                                            <div class="col-md-1 col-lg-1 col-xl-1 d-flex align-items-center">
                                                <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                            </div>
                                            <hr class="my-4">
                                            <div class="pt-5">
                                                <h6 class="mb-0"><a href="home.php" class="text-body"><i
                                                            class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 cart-pay">
                                        <h3 class="fw-bold mb-4.5 mt-2 pt-1">Summary</h3>
                                        <hr class="my-4">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="text-uppercase">items 3</h5>
                                            <h5>600k</h5>
                                        </div>
                                        <h5 class="text-uppercase mb-3 mt-3">Give code</h5>
                                        <div class="mb-5">
                                            <div class="form-outline">
                                                <input type="text" id="form3Examplea2"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplea2">Enter your
                                                    code</label>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <h5 class="text-uppercase mb-3 mt-3">Address</h5>
                                        <div class="mb-5">
                                            <div class="form-outline">
                                                <input type="text" id="form3Examplea2"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplea2">Enter your
                                                    Address</label>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="text-uppercase">Total price</h5>
                                            <h5>600k</h5>
                                        </div>

                                        <button type="button" class="btn btn-dark btn-block btn-lg"
                                            data-mdb-ripple-color="dark">Register</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</body>

</html>