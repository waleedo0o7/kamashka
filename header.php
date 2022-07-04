<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

    <!-- select2 -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />

    <!-- jquery UI  -->
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css" />

    <link href="https://vjs.zencdn.net/7.18.1/video-js.css" rel="stylesheet" />


    <!-- custom icon font -->
    <link href="https://file.myfontastic.com/PAF7Wy8xpNT3YfH9VPgbya/icons.css" rel="stylesheet">

    <!-- Custom Style -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/media.css">

    <title> Welcome To Kamashka </title>


    
    

</head>

<body>

    <!-- mobile-menu-light IF HOMEPAGE -->
    <div class="mobile-menu ">
        <div class="mobile-icon-container">
            <i class="icon icon-menu-icon-2"></i>
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
                <a class="btn btn-custom1" data-toggle="modal" data-target="#create-modal"> Create </a>
                <i id="closeMobileMenu" class="icon icon-close"></i>
            </div><!-- btn-and-close -->
        </div><!-- menu-header -->






        <!-- IF USER LOGIN -->
        <div class="menu-icons-container d-none">
            <ul class="reset-ul menu-icons">
                <li> <a href="#"> <i class="icon icon-bell"></i> <span class="number" style="right: 3px;"> 0 </span></a> </li>
                <li> <a href="#"> <i class="icon icon-heart"></i> <span class="number" style="right: 3px;"> 0 </span></a> </li>
                <li> <a href="#"> <i class="icon icon-cart"></i> <span class="number" style="right: 3px;"> 0 </span></a> </li>
                <li>

                    <div class="icon-container">
                        <div class="dropdown custom-dropdown dropdown-mobile-popup ">
                            <a class="dropdown-toggle reset-btn" href="my-profile.php">
                                <i class="icon icon-user"></i>
                            </a>
                        </div> <!-- dropdown -->
                    </div><!-- icon-container -->

                </li>
                <li> <a href="#" id="toggle-search"> <i class="icon icon-search"></i> </a> </li>
            </ul> <!-- menu-icons -->

            <div class="user-icons">
                <div class="dropdown custom-dropdown dropdown-mobile-popup">
                    <button class="dropdown-toggle language-btn reset-btn" type="button" id="language" data-toggle="dropdown">
                        <img alt="" class="img-fluid" src="img/flag-kuwait.png" />
                    </button>
                    <div class="dropdown-menu disable-auto-close">
                        <p>Country</p>
                        <div class="one-item">
                            <ul class="reset-ul countries">
                                <li> <a href="#"> <img alt="" class="img-fluid" src="img/flag-kuwait.png" /> <span> kuwait </span> <i class="fa fa-check"></i> </a> </li>
                                <li> <a href="#"> <img alt="" class="img-fluid" src="img/flag-ksa.png" /> <span> Saudi Arabia </span> </a></li>
                                <li> <a href="#"> <img alt="" class="img-fluid" src="img/flag-uae.png" /> <span> United Arab Emirates</span> </a></li>
                            </ul>
                        </div><!-- one-item -->


                        <p> Language </p>
                        <div class="one-item">
                            <ul class="reset-ul languages">
                                <li> <a href="#"> <span> English </span> <i class="fa fa-check"></i> </a> </li>
                                <li> <a href="#"> <span> عربي </span> </a></li>
                            </ul>
                        </div><!-- one-item -->

                    </div> <!-- dropdown-menu -->
                </div> <!-- dropdown -->
            </div><!-- user-icons -->
        </div><!-- menu-icons-container -->

        <!-- IF USER NOT LOGIN -->
        <div class="menu-icons-container">
            <ul class="reset-ul menu-icons">
                <li>
                <div class="icon-container">
                        <div class="dropdown custom-dropdown dropdown-mobile-popup ">
                            <a class="dropdown-toggle reset-btn" href="#" id="sign-in" data-toggle="dropdown">
                                <i class="icon icon-user"></i>
                            </a>
                            <div class="dropdown-menu disable-auto-close pl-3 pr-3 user">
                                <p class="bold text-center"> Continue With Your Profile, Create Your Own Adv , Collect Money, Shop Online And More </p>
                                <a href="auth-sign-in.php" class="btn btn-custom1 w-100 mb-2"> Sign In </a>
                                <a href="auth-sign-up.php" class="btn btn-custom2 w-100 "> Sign Up </a>

                                <p class="text-center"> Or continue with </p>

                                <ul class="reset-ul social-icons mb-3">
                                    <li> <a href="#"> <img alt="" src="img/facebook-icon.svg" /> </a> </li>
                                    <li> <a href="#"> <img alt="" src="img/google-icon.svg" /> </a> </li>
                                    <li> <a href="#"> <img alt="" src="img/apple-icon.svg" /> </a> </li>
                                </ul>

                            </div> <!-- dropdown-menu -->

                        </div> <!-- dropdown -->
                    </div><!-- icon-container -->


                </li>
                <li> <a href="#" id="toggle-search"> <i class="icon icon-search"></i> </a> </li>
            </ul> <!-- menu-icons -->

            <div class="user-icons">
                <div class="dropdown custom-dropdown dropdown-mobile-popup">
                    <button class="dropdown-toggle language-btn reset-btn" type="button" id="language" data-toggle="dropdown">
                        <img alt="" class="img-fluid" src="img/flag-kuwait.png" />
                    </button>
                    <div class="dropdown-menu disable-auto-close">
                        <p>Country</p>
                        <div class="one-item">
                            <ul class="reset-ul countries">
                                <li> <a href="#"> <img alt="" class="img-fluid" src="img/flag-kuwait.png" /> <span> kuwait </span> <i class="fa fa-check"></i> </a> </li>
                                <li> <a href="#"> <img alt="" class="img-fluid" src="img/flag-ksa.png" /> <span> Saudi Arabia </span> </a></li>
                                <li> <a href="#"> <img alt="" class="img-fluid" src="img/flag-uae.png" /> <span> United Arab Emirates</span> </a></li>
                            </ul>
                        </div><!-- one-item -->


                        <p> Language </p>
                        <div class="one-item">
                            <ul class="reset-ul languages">
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
                <input class="form-control" type="text" placeholder="Search For Products, Brands & Taps">
            </div><!-- form-group -->
        </div><!-- search-container -->

        <div class="menu-links-container">
            <ul class="reset-ul">
                <li> <a href="home.php"> Advertising </a> </li>
                <li> <a href="discover.php"> Discover </a> </li>
                <li> <a href="shopping.php"> Shopping </a> </li>
            </ul>
        </div><!-- menu-links-container -->

        <div class="social-media-container">
            <ul class="reset-ul">
                <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
                <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
            </ul>
        </div><!-- social-media-container -->

    </div><!-- mobile-left-menu -->
 
    <header id="top-header" class="homepage-top-header show">
        <div class="container">
            <div class="row top-header-content">

                <div class="col-md-7 d-flex top-items">

                    <div class="logo">
                        <a href="home.php"> <img alt="" class="img-fluid" src="img/logo-wide.png" /> </a>
                    </div> <!-- logo -->

                    <div class="menu-icon">
                        <i id="mobile-icon" class="icon icon-menu-icon-2"></i>
                    </div> <!-- menu-icon -->

                    <div class="main-menu">
                        <ul class="menu">
                            <li class="menu-item"> <a class="active" href="home.php"> Advertising </a> </li>
                            <li class="menu-item"> <a href="discover.php"> Discover </a> </li>
                            <li class="menu-item"> <a href="shopping.php"> Shopping </a> </li>
                        </ul>
                    </div> <!-- main-menu -->

                    <div class="search">
                        <div class="search-container">
                            <form action="test.php">
                                <input class="search-input" type="text" placeholder="Search For Products, Brands & Taps" />
                                <button class="reset-btn">
                                    <i class="icon icon-search"></i>
                                </button>
                            </form>
                        </div>
                    </div> <!-- search -->

                </div><!-- col-md-6 -->

                <!-- IF USER LOGIN -->
                <div class="col-md-5  bottom-items d-none">

                    <div class="count">
                        <div class="count-container">
                            <img alt="" src="img/count-icon.svg">
                            <span> 800 KD </span>
                        </div><!-- count-container -->
                    </div> <!-- count -->

                    <div class="icons">
                        <div class="icon-container">
                            <div class="dropdown custom-dropdown">
                                <button class="dropdown-toggle reset-btn " type="button" id="notifications-btn" data-toggle="dropdown">
                                    <i class="icon icon-bell"></i>
                                    <span class="number" style="right: 3px;"> 0 </span>
                                </button>

                                <div class="dropdown-menu notifications-dropdown-menu  disable-auto-close pl-3 pr-3">
                                    <div class="notifications-menu-container">
                                        <ul class="reset-ul">
                                            <li>
                                                <a class="notification-one-item" href="#">
                                                    <div class="notification-icon">
                                                        <i class="icon icon-deal-accept-post-approved"></i>
                                                    </div><!-- notification-icon -->
                                                    <div class="notification-details">
                                                        <p> deal accepted - post approved // <span class="colored2"> #1982984 </span> as shipped. </p>
                                                    </div><!-- notification-details -->
                                                    <div class="notification-date"> <span>9:20</span> AM <i class="fa fa-circle"></i> </div><!-- notification-date -->
                                                </a> <!-- notification-one-item -->
                                            </li>

                                            <li>
                                                <a class="notification-one-item" href="#">
                                                    <div class="notification-icon">
                                                        <i class="icon icon-deal-pending"></i>
                                                    </div><!-- notification-icon -->
                                                    <div class="notification-details">
                                                        <p> deal pending // marked your order <span class="colored2"> #1982984 </span> as shipped. </p>
                                                    </div><!-- notification-details -->
                                                    <div class="notification-date"> <span> </span> Yesterday </div><!-- notification-date -->
                                                </a> <!-- notification-one-item -->
                                            </li>

                                            <li>
                                                <a class="notification-one-item" href="#">
                                                    <div class="notification-icon">
                                                        <i class="icon icon-deal-received"></i>
                                                    </div><!-- notification-icon -->
                                                    <div class="notification-details">
                                                        <p> deal received // Smiley’s Store marked your order <span class="colored2"> #1982984 </span> as shipped. </p>
                                                    </div><!-- notification-details -->
                                                    <div class="notification-date"> <span> </span> Yesterday </div><!-- notification-date -->
                                                </a> <!-- notification-one-item -->
                                            </li>

                                            <li>
                                                <a class="notification-one-item" href="#">
                                                    <div class="notification-icon">
                                                        <i class="icon icon-deal-updated"></i>
                                                    </div><!-- notification-icon -->
                                                    <div class="notification-details">
                                                        <p> deal updated // Smiley’s Store marked your order <span class="colored2"> #1982984 </span> as shipped. </p>
                                                    </div><!-- notification-details -->
                                                    <div class="notification-date"> <span> </span> Yesterday </div><!-- notification-date -->
                                                </a> <!-- notification-one-item -->
                                            </li>

                                            <li>
                                                <a class="notification-one-item" href="#">
                                                    <div class="notification-icon">
                                                        <i class="icon icon-discount"></i>
                                                    </div><!-- notification-icon -->
                                                    <div class="notification-details">
                                                        <p> discount // Smiley’s Store marked your order <span class="colored2"> #1982984 </span> as shipped. </p>
                                                    </div><!-- notification-details -->
                                                    <div class="notification-date"> <span> </span> Yesterday </div><!-- notification-date -->
                                                </a> <!-- notification-one-item -->
                                            </li>

                                            <li>
                                                <a class="notification-one-item" href="#">
                                                    <div class="notification-icon">
                                                        <i class="icon icon-location-pin"></i>
                                                    </div><!-- notification-icon -->
                                                    <div class="notification-details">
                                                        <p> location // Smiley’s Store marked your order <span class="colored2"> #1982984 </span> as shipped. </p>
                                                    </div><!-- notification-details -->
                                                    <div class="notification-date"> <span> </span> Yesterday </div><!-- notification-date -->
                                                </a> <!-- notification-one-item -->
                                            </li>

                                        </ul>
                                        <div class="notifications-footer">
                                            <a class="btn " href="notifications.php"> Show All </a>
                                        </div><!-- notifications-footer -->
                                    </div><!-- notifications-menu-container -->
                                </div> <!-- dropdown-menu -->
                            </div> <!-- dropdown -->
                        </div><!-- icon-container -->

                        <div class="icon-container">
                            <button class="reset-btn " type="button" id="wishlist">
                                <i class="icon icon-heart"></i>
                                <span class="number"> 0 </span>
                            </button>
                        </div><!-- icon-container -->


                        <div class="icon-container">
                            <div class="dropdown custom-dropdown">
                                <button class="dropdown-toggle reset-btn " type="button" id="cart-btn" data-toggle="dropdown">
                                    <i class="icon icon-cart"></i>
                                    <span class="number"> 0 </span>
                                </button>


                                <div class="dropdown-menu cart-dropdown-menu disable-auto-close pl-3 pr-3">
                                    <div class="cart-menu-container">
                                        <ul class="reset-ul">
                                            <li class="cart-one-item">
                                                <div class="image"> <img alt="" class="img-fluid" src="img/thumbnail.png" /> </div><!-- image -->
                                                <div class="details">
                                                    <p class="name"> Shirt </p>
                                                    <p class="cat"> Cat's Eye </p>
                                                    <p class="price-container"> $<span class="price">24.00</span> </p>

                                                    <div class="counter">
                                                        <span class="down" onClick='decreaseCount(event, this)'> <i class="fa fa-minus"></i> </span>
                                                        <input type="text" value="1">
                                                        <span class="up" onClick='increaseCount(event, this)'> <i class="fa fa-plus"></i></span>
                                                    </div> <!-- counter -->

                                                </div> <!-- details -->
                                                <i class="icon icon-close remove"></i>
                                            </li><!-- cart-one-item -->


                                            <li class="cart-one-item">
                                                <div class="image"> <img alt="" class="img-fluid" src="img/thumbnail.png" /> </div><!-- image -->
                                                <div class="details">
                                                    <p class="name"> Shirt </p>
                                                    <p class="cat"> Cat's Eye </p>
                                                    <p class="price-container"> $<span class="price">44.00</span> </p>

                                                    <div class="counter">
                                                        <span class="down" onClick='decreaseCount(event, this)'> <i class="fa fa-minus"></i> </span>
                                                        <input type="text" value="1">
                                                        <span class="up" onClick='increaseCount(event, this)'> <i class="fa fa-plus"></i></span>
                                                    </div> <!-- counter -->

                                                </div> <!-- details -->
                                                <i class="icon icon-close remove"></i>
                                            </li><!-- cart-one-item -->


                                            <li class="cart-one-item">
                                                <div class="image"> <img alt="" class="img-fluid" src="img/thumbnail.png" /> </div><!-- image -->
                                                <div class="details">
                                                    <p class="name"> Shirt </p>
                                                    <p class="cat"> Cat's Eye </p>
                                                    <p class="price-container"> $<span class="price">34.00</span> </p>

                                                    <div class="counter">
                                                        <span class="down" onClick='decreaseCount(event, this)'> <i class="fa fa-minus"></i> </span>
                                                        <input type="text" value="1">
                                                        <span class="up" onClick='increaseCount(event, this)'> <i class="fa fa-plus"></i></span>
                                                    </div> <!-- counter -->

                                                </div> <!-- details -->
                                                <i class="icon icon-close remove"></i>
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


                        <div class="icon-container">
                            <div class="dropdown custom-dropdown">
                                <a class="reset-btn" href="my-profile.php">
                                    <i class="icon icon-user"></i>
                                </a>
                            </div> <!-- dropdown -->
                        </div><!-- icon-container -->


                    </div> <!-- icons -->

                    <div class="user-icons ml-3">
                        <div class="dropdown custom-dropdown">
                            <button class="dropdown-toggle language-btn reset-btn" type="button" id="language" data-toggle="dropdown">
                                <img alt="" class="img-fluid" src="img/flag-kuwait.png" />
                            </button>
                            <div class="dropdown-menu disable-auto-close">
                                <p>Country</p>
                                <div class="one-item">
                                    <ul class="reset-ul countries">
                                        <li> <a href="#"> <img alt="" class="img-fluid" src="img/flag-kuwait.png" /> <span> kuwait </span> <i class="fa fa-check"></i> </a> </li>
                                        <li> <a href="#"> <img alt="" class="img-fluid" src="img/flag-ksa.png" /> <span> Saudi Arabia </span> </a></li>
                                        <li> <a href="#"> <img alt="" class="img-fluid" src="img/flag-uae.png" /> <span> United Arab Emirates</span> </a></li>
                                    </ul>
                                </div><!-- one-item -->


                                <p> Language </p>
                                <div class="one-item">
                                    <ul class="reset-ul languages">
                                        <li> <a href="#"> <span> English </span> <i class="fa fa-check"></i> </a> </li>
                                        <li> <a href="#"> <span> عربي </span> </a></li>
                                    </ul>
                                </div><!-- one-item -->

                            </div> <!-- dropdown-menu -->
                        </div> <!-- dropdown -->
                        <a class="btn btn-custom1 ml-3" data-toggle="modal" data-target="#create-modal"> Create </a>
                    </div><!-- user-icons -->
                </div><!-- col-md-6 -->

                <!-- IF USER NOT LOGIN -->
                <div class="col-md-5  bottom-items">

                    <div class="icons">

                        <div class="icon-container">
                            <div class="dropdown custom-dropdown">
                                <button class="dropdown-toggle reset-btn" type="button" id="sign-in" data-toggle="dropdown">
                                    <i class="icon icon-user"></i>
                                </button>
                                <div class="dropdown-menu disable-auto-close pl-3 pr-3">
                                    <p class="bold text-center"> Continue With Your Profile, Create Your Own Adv , Collect Money, Shop Online And More </p>
                                    <a href="auth-sign-in.php" class="btn btn-custom1 w-100 mb-2"> Sign In </a>
                                    <a href="auth-sign-up.php" class="btn btn-custom2 w-100 "> Sign Up </a>

                                    <p class="text-center"> Or continue with </p>

                                    <ul class="reset-ul social-icons mb-3">
                                        <li> <a href="#"> <img alt="" src="img/facebook-icon.svg" /> </a> </li>
                                        <li> <a href="#"> <img alt="" src="img/google-icon.svg" /> </a> </li>
                                        <li> <a href="#"> <img alt="" src="img/apple-icon.svg" /> </a> </li>
                                    </ul>

                                </div> <!-- dropdown-menu -->
                            </div> <!-- dropdown -->
                        </div><!-- icon-container -->

                    </div> <!-- icons -->

                    <div class="user-icons ml-3">
                        <div class="dropdown custom-dropdown">
                            <button class="dropdown-toggle language-btn reset-btn" type="button" id="language" data-toggle="dropdown">
                                <img alt="" class="img-fluid" src="img/flag-kuwait.png" />
                            </button>
                            <div class="dropdown-menu disable-auto-close">
                                <p>Country</p>
                                <div class="one-item">
                                    <ul class="reset-ul countries">
                                        <li> <a href="#"> <img alt="" class="img-fluid" src="img/flag-kuwait.png" /> <span> kuwait </span> <i class="fa fa-check"></i> </a> </li>
                                        <li> <a href="#"> <img alt="" class="img-fluid" src="img/flag-ksa.png" /> <span> Saudi Arabia </span> </a></li>
                                        <li> <a href="#"> <img alt="" class="img-fluid" src="img/flag-uae.png" /> <span> United Arab Emirates</span> </a></li>
                                    </ul>
                                </div><!-- one-item -->


                                <p> Language </p>
                                <div class="one-item">
                                    <ul class="reset-ul languages">
                                        <li> <a href="#"> <span> English </span> <i class="fa fa-check"></i> </a> </li>
                                        <li> <a href="#"> <span> عربي </span> </a></li>
                                    </ul>
                                </div><!-- one-item -->

                            </div> <!-- dropdown-menu -->
                        </div> <!-- dropdown -->
                        <a class="btn btn-custom1 ml-3" data-toggle="modal" data-target="#create-modal"> Create </a>
                    </div><!-- user-icons -->
                </div><!-- col-md-6 -->

            </div><!-- top-header-content -->
        </div><!-- container -->
    </header><!-- top-header -->