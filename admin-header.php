<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <meta name="your-age-is" content="Your Age Is">

    <!-- Poppins Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css" integrity="sha512-gRH0EcIcYBFkQTnbpO8k0WlsD20x5VzjhOA1Og8+ZUAhcMUCvd+APD35FJw3GzHAP3e+mP28YcDJxVr745loHw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <!-- datatables bootstrap4 -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

    <!-- datatables dateTime -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css">

    <!-- Custom Style -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/media.css">


    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />



    <!-- Admin Style -->
    <link rel="stylesheet" type="text/css" href="css/admin-style.css">


    <title> Welcome To Kamashka </title>

</head>

<body>

    <!-- mobile-menu-home IF HOMEPAGE -->
    <div class="mobile-menu  ">
        <div class="mobile-icon-container">
            <i class="icon icon-menu-icon"></i>
        </div> <!-- logo -->
        <div class="icon">
            <div class="count-container">
                <img alt="" src="img/count-icon.svg">
                <span> 800 KD </span>
            </div><!-- count-container -->
        </div><!-- icon -->
    </div>

    <div class="mobile-left-menu">

        <div class="menu-header">
            <div class="logo-container">
                <img alt="" class="logo" src="img/logo-wide.png">
            </div><!-- logo -->
            <div class="btn-and-close">
                <i id="closeMobileMenu" class="icon icon-close"></i>
            </div><!-- btn-and-close -->

        </div><!-- menu-header -->

        <div class="search-container">
            <div class="form-group w-100">
                <input class="form-control" type="text">
            </div><!-- form-group -->
        </div><!-- search-container -->

        <div class="menu-links-container">
            <ul class="reset-ul">
                <li> <a href="admin-dashboard.php"> Dashboard </a> </li>
                <li> <a href="admin-taps.php"> Taps </a> </li>
                <li> <a href="admin-products.php"> Products </a> </li>
                <li> <a href="admin-prders.php"> Orders </a> </li>
            </ul>
        </div><!-- menu-links-container -->


    </div><!-- mobile-left-menu -->

    <header id="top-header" class="homepage-top-header show">
        <div class="container">
            <div class="row top-header-content">

                <div class="col-md-4 d-flex top-items">

                    <div class="menu-icon">
                        <i id="mobile-icon" class="fa fa-bars"></i>
                    </div> <!-- menu-icon -->

                    <div class="logo">
                        <a href="admin-dashboard.php"> <img alt="" class="img-fluid" src="img/logo-wide.png" /> </a>
                    </div> <!-- logo -->
                </div><!-- col-md-4 -->

                <div class="col-md-8 d-flex top-items">
                    <div class="main-menu ml-auto">
                        <ul class="menu">
                            <li class="menu-item"> <a href="#"> <i class="fa fa-cog mr-2" aria-hidden="true"></i> Settings </a> </li>
                            <li class="menu-item"> <a href="#"> <i class="fa fa-info mr-2" aria-hidden="true"></i> Help Center </a> </li>
                            <li class="menu-item"> <a style="padding: 0;" href="#">
                                    <div class="icon-container">
                                        <button class="reset-btn" type="button" id="notifications-btn" data-toggle="dropdown">
                                            <i class="icon icon-bell"></i>
                                            <span class="number" style="right: 3px;"> 0 </span>
                                        </button>
                                    </div><!-- icon-container -->
                                </a> </li>
                            <li class="menu-item">
                                <div class="icon-container h-100">
                                    <div class="dropdown custom-dropdown user-dropdown">
                                        <button class="dropdown-toggle reset-btn" type="button" data-toggle="dropdown">
                                            Jeroen Dom
                                            <i class="fa fa-chevron-down ml-2"></i>
                                            <img alt="" src="img//person05.jpg" alt="">
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div> <!-- dropdown -->
                                </div><!-- icon-container -->
                            </li>
                        </ul>
                    </div> <!-- main-menu -->
                </div><!-- col-md-4 -->


            </div><!-- top-header-content -->
        </div><!-- container -->
    </header><!-- top-header -->

    <!-- Create Modal Start -->
    <div class="modal fade" id="create-modal" tabindex="-1" role="dialog" aria-labelledby="create-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header mb-5">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="icon icon-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row items">
                        <div class="col-md-6">
                            <div class="one-item">
                                <a href="create-adv.php">
                                    <img alt="" class="img-fluid" src="img/create-adv.png">
                                    <p> Create Advertisement <i class="fa fa-chevron-right arrow-icon"></i> </p>
                                </a>
                            </div><!-- one-item -->
                        </div><!-- col-md-6 -->
                        <div class="col-md-6">
                            <div class="one-item">
                                <a href="#">
                                    <img alt="" class="img-fluid" src="img/create-store.png">
                                    <p> Create Store <i class="fa fa-chevron-right arrow-icon"></i> </p>
                                </a>
                            </div><!-- one-item -->
                        </div><!-- col-md-6 -->
                    </div><!-- row -->
                </div> <!-- modal-body -->

            </div> <!-- modal-content -->
        </div> <!-- modal-dialog -->
    </div> <!-- Delete Modal END -->


    <div class="left-menu-container">
        <div class="left-menu">
            <div class="left-menu-content">
                <div class="logo-header"> <img alt="" class="logo" src="img/logo-wide.png" /> <i id="close-left-menu" class="icon icon-close"></i> </div><!-- header-header -->
                <div class="menu">
                    <ul class="reset-ul">
                        <li> <a href="admin-dashboard.php"> Dashboard </a> </li>
                        <li> <a href="admin-taps.php"> Taps </a> </li>
                        <li> <a href="admin-products.php"> Products </a> </li>
                        <li> <a href="admin-orders.php"> Orders </a> </li>
                    </ul>
                </div><!-- menu -->
                <div class="menu-footer">
                    <ul class="reset-ul">
                        <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
                        <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                        <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                    </ul>
                </div><!-- menu-footer -->
            </div><!-- left-menu-content -->
        </div><!-- left-menu -->
    </div><!-- left-menu-container -->