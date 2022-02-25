<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Slick Slider -->
    <!-- <link rel="stylesheet" type="text/css" href="css/slick.css" /> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css" integrity="sha512-gRH0EcIcYBFkQTnbpO8k0WlsD20x5VzjhOA1Og8+ZUAhcMUCvd+APD35FJw3GzHAP3e+mP28YcDJxVr745loHw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Main Style -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" type="image/x-icon" href="img/favicon.png">

    <title> Welcome To Kamashka </title>
</head>

<body class="">

    <div class="mobile-menu">
        <div class="logo">
            <a href="#"> <img class="img-fluid" src="img/logo.svg" /> </a>
        </div> <!-- logo -->
        <div class="icon">
            <i id="mobile-icon" class="icon icon-meni-icon"></i>
        </div><!-- icon -->
    </div>

    <header id="top-header" class="homepage-top-header">
        <div class="container">
            <div class="row top-header-content">

                <div class="col-md-4 d-flex top-items">
                    <div class="logo">
                        <a href="#"> <img class="img-fluid" src="img/logo.svg" /> </a>
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
                            <input class="search-input" type="text" placeholder="Search For Products, Brands & Categories, Advertisment" />
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
                            <i class="icon icon-heart"></i>
                            <span class="number"> 0 </span>
                        </div><!-- icon-container -->
                        <div class="icon-container">


                            <div class="dropdown custom-dropdown">
                                <button class="dropdown-toggle resetbtn" type="button" id="cart" data-toggle="dropdown">
                                    <i class="icon icon-cart"></i>
                                    <span class="number"> 0 </span>
                                </button>
                                <div class="dropdown-menu cart-dropdown-menu pl-3 pr-3" aria-labelledby="cart">
                                    <div class="cart-menu-container">
                                        <ul class="resetul">
                                            <li class="cart-one-item">
                                                <div class="image"> <img class="img-fluid" src="img/thum.png" /> </div><!-- image -->
                                                <div class="details">
                                                    <p class="name"> Shirt </p>
                                                    <p class="cat"> Cat's Eye </p>
                                                    <p class="price"> $<span>44.00</span> </p>

                                                    <div class="counter">
                                                        <span class="down" onClick='decreaseCount(event, this)'> <i  class="fa fa-minus"></i> </span>
                                                        <input type="text" value="1">
                                                        <span class="up" onClick='increaseCount(event, this)'> <i  class="fa fa-plus"></i></span>
                                                    </div> <!-- counter -->

                                                </div> <!-- details -->
                                                <i class="fa fa-times remove"></i>
                                            </li><!-- cart-one-item -->
                                            <li class="cart-one-item">
                                                <div class="image"> <img class="img-fluid" src="img/thum.png" /> </div><!-- image -->
                                                <div class="details">
                                                    <p class="name"> Shirt </p>
                                                    <p class="cat"> Cat's Eye </p>
                                                    <p class="price"> $<span>44.00</span> </p>
                                                    <i class="fa fa-times remove"></i>

                                                    <div class="counter">
                                                        <span class="down" onClick='decreaseCount(event, this)'>-</span>
                                                        <input type="text" value="1">
                                                        <span class="up" onClick='increaseCount(event, this)'>+</span>
                                                    </div> <!-- counter -->

                                                </div> <!-- details -->
                                            </li><!-- cart-one-item -->
                                        </ul>

                                        <div class="cart-footer">
                                            <div class="total-container">
                                                <span class="total-title"> Total </span>
                                                <p class="total-price p-0"> $ <span> 81.57 </span> </p><!-- total-price -->
                                            </div><!-- total-container -->
                                            <a class="btn btn-custom1" href="#"> CHECKOUT <i class="fa fa-chevron-right"></i> </a>
                                        </div><!-- cart-footer -->
                                    </div><!-- cart-menu-container -->
                                </div> <!-- dropdown-menu -->
                            </div> <!-- dropdown -->


                        </div><!-- icon-container -->
                        <div class="icon-container">

                            <div class="dropdown custom-dropdown">
                                <button class="dropdown-toggle resetbtn" type="button" id="signin" data-toggle="dropdown">
                                    <i class="icon icon-user"></i>
                                </button>
                                <div class="dropdown-menu pl-3 pr-3" aria-labelledby="signin">
                                    <p class="bold text-center"> Continue With Your Profile, Create Your Own Advs, Collect Money, Shop Online And More </p>

                                    <a href="" class="btn btn-custom1 w-100 mb-2"> Sign In </a>
                                    <a href="" class="btn btn-custom2 w-100 "> Sign Up </a>

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

                    <!-- IF USER LOGIN -->
                    <div class="user-icons">
                        <div class="dropdown custom-dropdown">
                            <button class="dropdown-toggle language-btn resetbtn" type="button" id="language" data-toggle="dropdown">
                                <img class="img-fluid" src="img/flag-kuwait.png" />
                            </button>
                            <div class="dropdown-menu" aria-labelledby="language">
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
                        <a class="btn btn-custom1" href="#"> Create </a>
                    </div><!-- user-icons -->
                </div><!-- col-md-6 -->
            </div><!-- top-header-content -->
        </div><!-- container -->
    </header><!-- top-header -->


    <div class="left-menu-container">
        <div class="left-menu">
            <div class="left-menu-content">
                <div class="logo-header"> <img class="logo" src="img/logo.svg" /> <i id="close-left-menu" class="fa fa-times"></i> </div><!-- header-header -->
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