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

    <!-- Admin Style -->
    <link rel="stylesheet" type="text/css" href="css/admin-style.css">


    <title> Welcome To Kamashka </title>

</head>

<body>

    <!-- mobile-menu-home IF HOMEPAGE -->
    <div class="mobile-menu  ">
        <div class="mobile-icon-container">
            <i id="mobile-icon" class="icon icon-meni-icon"></i>
        </div> <!-- logo -->
        <div class="icon">
            <div class="count-container">
                <img src="img/count-icon.svg">
                <span> 800 KD </span>
            </div><!-- count-container -->
        </div><!-- icon -->
    </div>

    <div class="mobile-left-menu">

        <div class="menu-header">
            <div class="logo-container">
                <img class="logo" src="img/logo-wide.png">
            </div><!-- logo -->
            <div class="btn-and-close">
                <a class="btn btn-custom1" data-toggle="modal" data-target="#createModal"> Create </a>
                <i id="closeMobileMenu" class="icon icon-close"></i>
            </div><!-- btn-and-close -->
        </div><!-- menu-header -->

        <div class="menu-icons-container">
            <ul class="resetul menu-icons">
                <li> <a href="#"> <i class="icon icon-bell"></i> <span class="number" style="right: 3px;"> 0 </span></a> </li>
                <li> <a href="#"> <i class="icon icon-heart"></i> <span class="number" style="right: 3px;"> 0 </span></a> </li>
                <li> <a href="#"> <i class="icon icon-cart"></i> <span class="number" style="right: 3px;"> 0 </span></a> </li>
                <li>

                    <!--  IF USER LOOOOOGINED  for mobile  -->
                    <div class="icon-container">
                        <div class="dropdown custom-dropdown dropdown-mobile-popup ">
                            <a class="dropdown-toggle resetbtn" type="button" id="signin" data-toggle="dropdown">
                                <i class="icon icon-user"></i>
                            </a>
                            <div class="dropdown-menu disable-auto-close pl-3 pr-3 user" aria-labelledby="signin">
                                <p class="bold text-center"> Continue With Your Profile, Create Your Own Advs, Collect Money, Shop Online And More </p>
                                <a href="auth-signin.php" class="btn btn-custom1 w-100 mb-2"> Sign In </a>
                                <a href="auth-signup.php" class="btn btn-custom2 w-100 "> Sign Up </a>

                                <p class="text-center"> Or continue with </p>

                                <ul class="resetul social-icons mb-3">
                                    <li> <a href="#"> <img src="img/facebook-icon.svg" /> </a> </li>
                                    <li> <a href="#"> <img src="img/google-icon.svg" /> </a> </li>
                                    <li> <a href="#"> <img src="img/apple-icon.svg" /> </a> </li>
                                </ul>

                            </div> <!-- dropdown-menu -->

                        </div> <!-- dropdown -->
                    </div><!-- icon-container -->


                    <!--  IF USER  NOOOOT  LOOOOOGINED  for mobile -->

                    <div class="icon-container">
                        <div class="dropdown custom-dropdown dropdown-mobile-popup d-none ">
                            <a class="dropdown-toggle resetbtn" href="#">
                                <i class="icon icon-user"></i>
                            </a>
                        </div> <!-- dropdown -->
                    </div><!-- icon-container -->

                </li>
                <li> <a href="#" id="toggle-search"> <i class="icon icon-search"></i> </a> </li>
            </ul> <!-- menu-icons -->

            <div class="user-icons">
                <div class="dropdown custom-dropdown dropdown-mobile-popup">
                    <button class="dropdown-toggle language-btn resetbtn" type="button" id="language" data-toggle="dropdown">
                        <img class="img-fluid" src="img/flag-kuwait.png" />
                    </button>
                    <div class="dropdown-menu disable-auto-close" aria-labelledby="language">
                        <p>Country</p>
                        <div class="one-item">
                            <ul class="resetul countries">
                                <li> <a href="#"> <img class="img-fluid" src="img/flag-kuwait.png" /> <span> kuwait </span> <i class="fa fa-check"></i> </a> </li>
                                <li> <a href="#"> <img class="img-fluid" src="img/flag-ksa.png" /> <span> Saudi Arabia </span> </a></li>
                                <li> <a href="#"> <img class="img-fluid" src="img/flag-uae.png" /> <span> United Arab Emirates</span> </a></li>
                            </ul>
                        </div><!-- one-item -->


                        <p> Language </p>
                        <div class="one-item">
                            <ul class="resetul languages">
                                <li> <a href="#"> <span> English </span> <i class="fa fa-check"></i> </a> </li>
                                <li> <a href="#"> <span> عربي </span> </a></li>
                            </ul>
                        </div><!-- one-item -->

                    </div> <!-- dropdown-menu -->
                </div> <!-- dropdown -->
            </div><!-- user-icons -->
        </div><!-- menu-icons-container -->

        <div class="search-container">
            <div class="form-group w-100">
                <input class="form-control" type="text">
            </div><!-- form-group -->
        </div><!-- search-container -->

        <div class="menu-links-container">
            <ul class="resetul">
                <li> <a href="#"> Advertising </a> </li>
                <li> <a href="#"> Discover </a> </li>
                <li> <a href="#"> Shoping </a> </li>

                <!-- IF USER LOGINED -->
                <li> <a href="#"> Sign Out </a> </li>
            </ul>
        </div><!-- menu-links-container -->

        <div class="social-media-container">
            <ul class="resetul">
                <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
                <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
            </ul>
        </div><!-- social-media-container -->

    </div><!-- mobile-left-menu -->

    <header id="top-header" class="homepage-top-header show">
        <div class="container">
            <div class="row top-header-content">

                <div class="col-md-4 d-flex top-items">

                    <div class="menu-icon">
                        <i id="mobile-icon" class="fa fa-bars"></i>
                    </div> <!-- menu-icon -->

                    <div class="logo">
                        <a href="home.php"> <img class="img-fluid" src="img/logo-wide.png" /> </a>
                    </div> <!-- logo -->
                </div><!-- col-md-4 -->

                <div class="col-md-8 d-flex top-items">
                    <div class="main-menu ml-auto">
                        <ul class="menu">
                            <li class="menu-item"> <a href="#"> <i class="fa fa-cog mr-2" aria-hidden="true"></i> Settings </a> </li>
                            <li class="menu-item"> <a href="#"> <i class="fa fa-info mr-2" aria-hidden="true"></i> Help Center </a> </li>
                            <li class="menu-item"> <a style="padding: 0;" href="#">
                                    <div class="icon-container">
                                        <button class="resetbtn" type="button" id="notifications-btn" data-toggle="dropdown">
                                            <i class="icon icon-bell"></i>
                                            <span class="number" style="right: 3px;"> 0 </span>
                                        </button>
                                    </div><!-- icon-container -->
                                </a> </li>
                            <li class="menu-item">
                                <div class="icon-container h-100">
                                    <div class="dropdown custom-dropdown user-dropdown">
                                        <button class="dropdown-toggle resetbtn" type="button" data-toggle="dropdown">
                                            Jeroen Dom
                                            <i class="fa fa-chevron-down ml-2"></i>
                                            <img src="img//person05.jpg" alt="">
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
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
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
                                    <img class="img-fluid" src="img/create-adv.png">
                                    <p> Create Advertisement <i class="fa fa-chevron-right arrow-icon"></i> </p>
                                </a>
                            </div><!-- one-item -->
                        </div><!-- col-md-6 -->
                        <div class="col-md-6">
                            <div class="one-item">
                                <a href="#">
                                    <img class="img-fluid" src="img/create-store.png">
                                    <p> Create Store <i class="fa fa-chevron-right arrow-icon"></i> </p>
                                </a>
                            </div><!-- one-item -->
                        </div><!-- col-md-6 -->
                    </div><!-- row -->
                </div> <!-- modal-body -->

            </div> <!-- modal-content -->
        </div> <!-- modal-dialog -->
    </div> <!-- Delete Modal END -->

    <!-- right-menu -->
    <div class="right-menu-container">
        <div class="right-menu">

            <div class="right-menu-header">
                <p class="title"> <span> 164 </span> Comments </p>
                <i class="icon icon-close" id="close-right-menu"></i>
            </div><!-- right-menu-header -->

            <div class="right-menu-content">
                <div class="all-comments">

                    <!--  IF THIS COMMENT IS NOOOOT MY COMMENT  -->
                    <div class="one-comment">
                        <div class="image-container">
                            <img class="img-fluid" src="img/person04.jpg" alt="">
                        </div><!-- image-container -->
                        <div class="name-and-comment">
                            <p class="name bold"> Ahmed Mohamed <img class="img-fluid" src="img/verified.svg"> </p>
                            <p class="comment">Nice Advertisement ( this is NOT my comment ) </p>
                        </div><!-- name-and-comment -->
                        <div class="actions">

                            <div class="dropdown custom-dropdown">
                                <button class="dropdown-toggle resetbtn p-0" type="button" id="cart-btn" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu options-dropdown " aria-labelledby="cart">
                                    <a class="dropdown-item" data-toggle="modal" data-target="#reportModal"> <i class="icon icon-report"></i> Report </a>
                                    <a class="dropdown-item copy-comment" href="#"> <i class="icon icon-copy"></i> Copy </a>
                                </div> <!-- dropdown-menu -->
                            </div> <!-- dropdown -->

                            <p class="date"> 12 Dec 2020 </p>
                        </div><!-- actions -->
                        <span class="comment-copied"> <i class="fa fa-check"></i> Comment Copied </span>
                    </div><!-- one-comment -->


                    <!--  IF THIS COMMENT IS MY COMMENT  -->
                    <div class="one-comment">
                        <div class="image-container">
                            <img class="img-fluid" src="img/person04.jpg" alt="">
                        </div><!-- image-container -->
                        <div class="name-and-comment">
                            <p class="name bold"> Ahmed Mohamed <img class="img-fluid" src="img/verified.svg"> </p>
                            <p class="comment"> Nice Advertisement ( this is MY comment ) </p>
                            <div class="edit-container">
                                <input class="form-control" type="text" value="Nice Advertisement ( this is MY comment )" />
                                <a class="save-comment" href="#"> save </a>
                            </div><!-- input-container -->
                        </div><!-- name-and-comment -->
                        <div class="actions">

                            <div class="dropdown custom-dropdown">
                                <button class="dropdown-toggle resetbtn p-0" type="button" id="cart-btn" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu options-dropdown " aria-labelledby="cart">
                                    <a class="dropdown-item edit-comment" href="#"> <i class="icon icon-edit"></i> Edit </a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#deleteModal"> <i class="fas fa-trash-alt"></i> Delete </a>
                                </div> <!-- dropdown-menu -->
                            </div> <!-- dropdown -->

                            <p class="date"> 12 Dec 2020 </p>
                        </div><!-- actions -->
                    </div><!-- one-comment -->

                </div><!-- all-comments -->
            </div><!-- right-menu-content -->

            <div class="right-menu-footer">
                <div class="add-comment-container">
                    <div class="image">
                        <img class="img-fluid" src="img/person04.jpg" alt="">
                    </div><!-- image -->

                    <div class="comment-input-container form-group">
                        <input id="add-comment" placeholder="Add Comment... " type="text" class="form-control">
                    </div><!-- form-group  -->

                    <div class="send-comment-container">
                        <i id="send-comment" class="fa fa-arrow-up"></i>
                    </div><!-- send-comment-container -->

                </div><!-- add-comment-container -->
            </div><!-- right-menu-footer -->

        </div><!-- right-menu -->
    </div><!-- right-menu-container -->

    <div class="left-menu-container">
        <div class="left-menu">
            <div class="left-menu-content">
                <div class="logo-header"> <img class="logo" src="img/logo-wide.png" /> <i id="close-left-menu" class="icon icon-close"></i> </div><!-- header-header -->
                <div class="menu">
                    <ul class="resetul">
                        <li> <a href="#"> Advertising </a> </li>
                        <li> <a href="#"> Discover </a> </li>
                        <li> <a href="#"> Shoping </a> </li>
                        <li> <a href="#"> My Profile </a> </li>
                        <li> <a href="#"> Create </a> </li>
                        <li> <a href="#"> Sign Out </a> </li>
                    </ul>
                </div><!-- menu -->
                <div class="menu-footer">
                    <ul class="resetul">
                        <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
                        <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                        <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                    </ul>
                </div><!-- menu-footer -->
            </div><!-- left-menu-content -->
        </div><!-- left-menu -->
    </div><!-- left-menu-container -->