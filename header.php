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

    <!-- Fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />


    <!-- swiper Slider -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Custom Style -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/media.css">

    <title> Welcome To Kamashka </title>

</head>

<body class="">

    <div class="mobile-menu">
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
                        <div class="dropdown custom-dropdown dropdown-mobile-popup ">
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
                    <div class="logo">
                        <a href="home.php"> <img class="img-fluid" src="img/logo-wide.png" /> </a>
                    </div> <!-- logo -->
                    <div class="menu-icon">
                        <i id="mobile-icon" class="icon icon-meni-icon"></i>
                    </div> <!-- menu-icon -->
                    <div class="main-menu">
                        <ul class="menu">
                            <li class="menu-item"> <a class="active" href="#"> Advertising </a> </li>
                            <li class="menu-item"> <a href="#"> Discover </a> </li>
                            <li class="menu-item"> <a href="#"> Shoping </a> </li>
                        </ul>
                    </div> <!-- main-menu -->
                </div><!-- col-md-6 -->

                <div class="col-md-8 d-flex bottom-items">
                    <div class="search">
                        <div class="search-container">
                            <input class="search-input" type="text" placeholder="Search For Products, Brands & Categories" />
                            <i class="icon icon-search"></i>
                        </div>
                    </div> <!-- search -->
                    <div class="count">
                        <div class="count-container">
                            <img src="img/count-icon.svg">
                            <span> 800 KD </span>
                        </div><!-- count-container -->
                    </div> <!-- count -->
                    <div class="icons">

                        <div class="icon-container">
                            <div class="dropdown custom-dropdown">
                                <button class="dropdown-toggle resetbtn " type="button" id="notifications-btn" data-toggle="dropdown">
                                    <i class="icon icon-bell"></i>
                                    <span class="number" style="right: 3px;"> 0 </span>
                                </button>

                                <div class="dropdown-menu notifications-dropdown-menu  disable-auto-close pl-3 pr-3" aria-labelledby="notifications">
                                    <div class="notifications-menu-container">
                                        <ul class="resetul">

                                            <a class="notification-one-item" href="#">
                                                <div class="notification-icon">
                                                    <i class="icon icon-deal-accept-post-approved"></i>
                                                </div><!-- notification-icon -->
                                                <div class="notification-details">
                                                    <p> deal accepted - post approved // <span class="colored2"> #1982984 </span> as shipped. </p>
                                                </div><!-- notification-details -->
                                                <div class="notification-date"> <span>9:20</span> AM <i class="fa fa-circle"></i> </div><!-- notification-date -->
                                            </a> <!-- notification-one-item -->

                                            <a class="notification-one-item" href="#">
                                                <div class="notification-icon">
                                                    <i class="icon icon-deal-pending"></i>
                                                </div><!-- notification-icon -->
                                                <div class="notification-details">
                                                    <p> deal pending // marked your order <span class="colored2"> #1982984 </span> as shipped. </p>
                                                </div><!-- notification-details -->
                                                <div class="notification-date"> <span> </span> Yesterday </div><!-- notification-date -->
                                            </a> <!-- notification-one-item -->

                                            <a class="notification-one-item" href="#">
                                                <div class="notification-icon">
                                                    <i class="icon icon-deal-received"></i>
                                                </div><!-- notification-icon -->
                                                <div class="notification-details">
                                                    <p> deal received // Smiley’s Store marked your order <span class="colored2"> #1982984 </span> as shipped. </p>
                                                </div><!-- notification-details -->
                                                <div class="notification-date"> <span> </span> Yesterday </div><!-- notification-date -->
                                            </a> <!-- notification-one-item -->

                                            <a class="notification-one-item" href="#">
                                                <div class="notification-icon">
                                                    <i class="icon icon-deal-updated"></i>
                                                </div><!-- notification-icon -->
                                                <div class="notification-details">
                                                    <p> deal updated // Smiley’s Store marked your order <span class="colored2"> #1982984 </span> as shipped. </p>
                                                </div><!-- notification-details -->
                                                <div class="notification-date"> <span> </span> Yesterday </div><!-- notification-date -->
                                            </a> <!-- notification-one-item -->

                                            <a class="notification-one-item" href="#">
                                                <div class="notification-icon">
                                                    <i class="icon icon-discount"></i>
                                                </div><!-- notification-icon -->
                                                <div class="notification-details">
                                                    <p> discount // Smiley’s Store marked your order <span class="colored2"> #1982984 </span> as shipped. </p>
                                                </div><!-- notification-details -->
                                                <div class="notification-date"> <span> </span> Yesterday </div><!-- notification-date -->
                                            </a> <!-- notification-one-item -->

                                            <a class="notification-one-item" href="#">
                                                <div class="notification-icon">
                                                    <i class="icon icon-location-pin"></i>
                                                </div><!-- notification-icon -->
                                                <div class="notification-details">
                                                    <p> location // Smiley’s Store marked your order <span class="colored2"> #1982984 </span> as shipped. </p>
                                                </div><!-- notification-details -->
                                                <div class="notification-date"> <span> </span> Yesterday </div><!-- notification-date -->
                                            </a> <!-- notification-one-item -->

                                            <a class="notification-one-item" href="#">
                                                <div class="notification-icon">
                                                    <i class="icon icon-order"></i>
                                                </div><!-- notification-icon -->
                                                <div class="notification-details">
                                                    <p> order // Smiley’s Store marked your order <span class="colored2"> #1982984 </span> as shipped. </p>
                                                </div><!-- notification-details -->
                                                <div class="notification-date"> <span> </span> Yesterday </div><!-- notification-date -->
                                            </a> <!-- notification-one-item -->



                                        </ul>
                                        <div class="notifications-footer">
                                            <a class="btn " href="#"> Show All </a>
                                        </div><!-- notifications-footer -->
                                    </div><!-- notifications-menu-container -->
                                </div> <!-- dropdown-menu -->
                            </div> <!-- dropdown -->
                        </div><!-- icon-container -->

                        <div class="icon-container">
                            <button class="resetbtn " type="button" id="wishlist">
                                <i class="icon icon-heart"></i>
                                <span class="number"> 0 </span>
                            </button>
                        </div><!-- icon-container -->


                        <div class="icon-container">
                            <div class="dropdown custom-dropdown">
                                <button class="dropdown-toggle resetbtn " type="button" id="cart-btn" data-toggle="dropdown">
                                    <i class="icon icon-cart"></i>
                                    <span class="number"> 0 </span>
                                </button>


                                <div class="dropdown-menu cart-dropdown-menu disable-auto-close pl-3 pr-3" aria-labelledby="cart">
                                    <div class="cart-menu-container">
                                        <ul class="resetul">
                                            <li class="cart-one-item">
                                                <div class="image"> <img class="img-fluid" src="img/thum.png" /> </div><!-- image -->
                                                <div class="details">
                                                    <p class="name"> Shirt </p>
                                                    <p class="cat"> Cat's Eye </p>
                                                    <p class="price-container"> $<span id="price">24.00</span> </p>

                                                    <div class="counter">
                                                        <span class="down" onClick='decreaseCount(event, this)'> <i class="fa fa-minus"></i> </span>
                                                        <input type="text" value="1">
                                                        <span class="up" onClick='increaseCount(event, this)'> <i class="fa fa-plus"></i></span>
                                                    </div> <!-- counter -->

                                                </div> <!-- details -->
                                                <i class="icon icon-close remove" id="removeItem"></i>
                                            </li><!-- cart-one-item -->


                                            <li class="cart-one-item">
                                                <div class="image"> <img class="img-fluid" src="img/thum.png" /> </div><!-- image -->
                                                <div class="details">
                                                    <p class="name"> Shirt </p>
                                                    <p class="cat"> Cat's Eye </p>
                                                    <p class="price-container"> $<span id="price">44.00</span> </p>

                                                    <div class="counter">
                                                        <span class="down" onClick='decreaseCount(event, this)'> <i class="fa fa-minus"></i> </span>
                                                        <input type="text" value="1">
                                                        <span class="up" onClick='increaseCount(event, this)'> <i class="fa fa-plus"></i></span>
                                                    </div> <!-- counter -->

                                                </div> <!-- details -->
                                                <i class="icon icon-close remove" id="removeItem"></i>
                                            </li><!-- cart-one-item -->


                                            <li class="cart-one-item">
                                                <div class="image"> <img class="img-fluid" src="img/thum.png" /> </div><!-- image -->
                                                <div class="details">
                                                    <p class="name"> Shirt </p>
                                                    <p class="cat"> Cat's Eye </p>
                                                    <p class="price-container"> $<span id="price">34.00</span> </p>

                                                    <div class="counter">
                                                        <span class="down" onClick='decreaseCount(event, this)'> <i class="fa fa-minus"></i> </span>
                                                        <input type="text" value="1">
                                                        <span class="up" onClick='increaseCount(event, this)'> <i class="fa fa-plus"></i></span>
                                                    </div> <!-- counter -->

                                                </div> <!-- details -->
                                                <i class="icon icon-close remove" id="removeItem"></i>
                                            </li><!-- cart-one-item -->

                                        </ul>

                                        <div class="cart-footer">
                                            <div class="total-container">
                                                <span class="total-title"> Total </span>
                                                <p class="bold total-price p-0"> $ <input disabled id="totalPrice" type="text" value="81.57"> </p><!-- total-price -->

                                            </div><!-- total-container -->
                                            <a class="btn btn-custom1" href="#"> CHECKOUT <i class="fa fa-chevron-right"></i> </a>
                                        </div><!-- cart-footer -->
                                    </div><!-- cart-menu-container -->
                                </div> <!-- dropdown-menu -->
                            </div> <!-- dropdown -->
                        </div><!-- icon-container -->










                        <!--  IF USER LOOOOGINED for web  -->
                        <div class="icon-container d-none">
                            <div class="dropdown custom-dropdown">
                                <a class="resetbtn" href="#">
                                    <i class="icon icon-user"></i>
                                </a>
                            </div> <!-- dropdown -->
                        </div><!-- icon-container -->





                        <!--  IF USER     NOOOOT   LOOOOGINED for web  -->
                        <div class="icon-container">
                            <div class="dropdown custom-dropdown">
                                <button class="dropdown-toggle resetbtn" type="button" id="signin" data-toggle="dropdown">
                                    <i class="icon icon-user"></i>
                                </button>
                                <div class="dropdown-menu disable-auto-close pl-3 pr-3" aria-labelledby="signin">
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






                    </div> <!-- icons -->

                    <div class="user-icons">
                        <div class="dropdown custom-dropdown">
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
                        <a class="btn btn-custom1" data-toggle="modal" data-target="#createModal"> Create </a>
                    </div><!-- user-icons -->
                </div><!-- col-md-6 -->

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