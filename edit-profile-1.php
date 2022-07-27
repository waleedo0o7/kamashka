<?php include 'header.php'; ?>




<div class="page-content profile edit-profile1">
    <div class="profile-content">
        <div class="profile-sidebar">

            <div class="profile-header">
                <div class="completeness-percentage-container">
                    <div class="completeness-percentage" data-percentage="75">
                        75%
                    </div><!-- completeness-percentage -->
                </div><!-- completeness-percentage-container -->
                <!-- <a href="edit-profile-2.php" class="btn btn-primary btn-lg"> Edit Profile </a> -->
            </div><!-- profile-header -->

            <div class="profile-info">
                <div class="image-and-data">
                    <div class="image-container relative">
                        <div class="image text-center ">
                            <img alt="" id="profile-image" class="img-fluid" src="img/person04.jpg">
                        </div><!-- image -->
                        <div class="change-image-container">
                            <i class="icon icon-edit"></i>
                        </div><!-- change-image-container -->
                    </div><!-- image-container -->
                    <div class="data">
                        <h1 class="name"> Amr Abd Alhady </h1>
                        <p class="lead"> janedoe123@email.com </p>
                        <p class="bold"> 01273495477 </p>
                        <a href="auth-reset-password.php"> Change Password </a>
                    </div><!-- data -->
                </div><!-- image-and-data -->

                <div class="profile-info-slider-container mt-3">
                    <div class="profile-info-slider">

                        <div class="item">
                            <div class=" item-content">
                                <p class="title"> Gender </p>
                                <p class="value"> Male </p>
                            </div><!-- card -->
                        </div> <!-- item -->


                        <div class="item">
                            <div class=" item-content">
                                <p class="title"> Age </p>
                                <p class="value"> 30 </p>
                            </div><!-- card -->
                        </div> <!-- item -->


                        <div class="item">
                            <div class=" item-content">
                                <p class="title"> Job </p>
                                <p class="value"> Artist </p>
                            </div><!-- card -->
                        </div> <!-- item -->


                        <div class="item">
                            <div class=" item-content">
                                <p class="title"> Title </p>
                                <p class="value"> Value </p>
                            </div><!-- card -->
                        </div> <!-- item -->


                        <div class="item">
                            <div class=" item-content">
                                <p class="title"> Title </p>
                                <p class="value"> Value </p>
                            </div><!-- card -->
                        </div> <!-- item -->

                    </div> <!-- owl-carousel -->
                </div> <!-- brand-slider-container -->

            </div><!-- profile-info -->

        </div><!-- profile-sidebar -->

        <div class="profile-data">
            <div class="profile-data-content">

                <h4 class="bold mb-3"> Edit Profile </h4>

                <form action="test.php">

                    <div class="card p-3 mb-3">



                        <!-- USER PROFILE HIDDEN INPUT   -->
                        <div class="form-group mb-3 relative d-none">
                            <input id="change-profile-image" class="" type="file" accept="image/png, image/gif, image/jpeg">
                        </div><!-- form-group  -->


                        <div class="form-group mb-3 relative">
                            <label class=""> Full Name </label>
                            <input type="text" class="form-control" placeholder="Enter Full Name">
                        </div><!-- form-group  -->

                        <div class="form-group mb-3 relative">
                            <label class=""> E-mail </label>
                            <input type="text" class="form-control" placeholder="E-mail">
                        </div><!-- form-group  -->


                        <div class="form-group">
                            <label class=""> About Me </label>
                            <textarea id="about-me" class="form-control" placeholder="About Your Self ..."></textarea>
                        </div><!-- form-group -->


                        <div class="form-group mb-3 relative">
                            <label class=""> Date Of Birth (Optional) </label>
                            <input placeholder="Select your date" type="text" name="checkIn" class="form-control calendar" id="datepicker">
                            <p class="text-left mt-1" id="your-age"> </p>
                        </div><!-- form-group  -->

                        <div class="form-group-with-phone-and-label">

                            <label class=""> Phone Number </label>

                            <div class="form-group mb-3 relative">

                                <input type="text" class="form-control input-with-country-code only-numbers" placeholder="Phone Number" id="phone">

                                <span class="invalid-feedback  d-none"> This Field Is Required </span>

                                <div class="country-code-container">

                                    <select class="d-none" name="country" id="country">
                                        <option selected value="001"> 001 </option>
                                        <option value="002"> 002 </option>
                                        <option value="003"> 003 </option>
                                    </select>

                                    <div class="dropdown">
                                        <button class="reset-btn dropdown-toggle" type="button" id="choose-country-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img alt="" src="img/flag-kuwait.png" /> +001
                                            <i class="fa fa-caret-down"></i>
                                        </button>
                                        <div class="dropdown-menu choose-country-list" aria-labelledby="choose-country-btn">
                                            <a data-value="1" class="dropdown-item" href="#"><img alt="" src="img/flag-kuwait.png" /> +001 <i class="fa fa-caret-down"></i> </a>
                                            <a data-value="2" class="dropdown-item " href="#"><img alt="" src="img/flag-ksa.png" /> +002 <i class="fa fa-caret-down"></i> </a>
                                            <a data-value="3" class="dropdown-item " href="#"><img alt="" src="img/flag-uae.png" /> +003 <i class="fa fa-caret-down"></i> </a>
                                        </div>
                                    </div> <!-- dropdown -->

                                </div><!-- country-code-container -->
                            </div><!-- form-group  -->
                        </div> <!-- form-group-with-phone-and-label -->



                        <div class="form-group relative">
                            <label class="text-left"> Gender </label>
                            <div class="genders-container">
                                <div class="gender-list">
                                    <div class="gender" data-gander="male">
                                        <img alt="" class="img-fluid " src="img/male.png">
                                        <p> Male </p>
                                    </div><!-- gender -->
                                    <div class="gender" data-gander="female">
                                        <img alt="" class="img-fluid" src="img/female.png">
                                        <p> Female </p>
                                    </div><!-- gender -->
                                </div><!-- gender-list -->
                                <select class="d-none" name="gender" id="gender">
                                    <option selected value="male"> male </option>
                                    <option value="female"> female </option>
                                </select>
                            </div><!-- genders-container -->
                        </div><!-- form-group  -->

                    </div> <!-- card -->

                    <div class="card p-3 mb-3">
                        <div class="form-group">
                            <label for="about-me" class=""> Country </label>
                            <select class="custom-select">
                                <option value="1">kuwait</option>
                                <option value="1">Saudi Arabia</option>
                                <option value="1">United Arab Emirates</option>
                            </select>
                        </div><!-- form-group -->

                        <div class="form-group">
                            <label for="about-me" class=""> City </label>
                            <select class="custom-select">
                                <option value="1">Select City</option>
                                <option value="1">Saudi Arabia</option>
                                <option value="1">United Arab Emirates</option>
                            </select>
                        </div><!-- form-group -->

                        <div class="form-group">
                            <label for="about-me" class=""> Area </label>
                            <select class="custom-select">
                                <option value="1">Select Area</option>
                                <option value="1">Saudi Arabia</option>
                                <option value="1">United Arab Emirates</option>
                            </select>
                        </div><!-- form-group -->

                    </div> <!-- card -->

                    <div class="card p-3 mb-3">
                        <div class="form-group">
                            <label for="about-me" class=""> Job Category </label>
                            <select class="custom-select">
                                <option value="1">Select Category</option>
                                <option value="1">Saudi Arabia</option>
                                <option value="1">United Arab Emirates</option>
                            </select>
                        </div><!-- form-group -->


                        <div class="form-group">
                            <label for="about-me" class=""> Job Title </label>
                            <select class="custom-select">
                                <option value="1">Select Title</option>
                                <option value="1">Saudi Arabia</option>
                                <option value="1">United Arab Emirates</option>
                            </select>
                        </div><!-- form-group -->

                    </div> <!-- card -->
                    
                    <!-- interests -->
                    <div class="card interests p-3 mb-3">

                        <div class="d-flex">
                            <label class="lead bold white"> Interests </label>
                        </div><!-- card-header -->

                        <div class="interests-container m-0">
                            <button data-value="tv-show" type="button" class="btn btn-interests"> TV show </button>
                            <button data-value="music" type="button" class="btn btn-interests "> music </button>
                            <button data-value="books" type="button" class="btn btn-interests "> books </button>
                            <button data-value="sport" type="button" class="btn btn-interests "> sport </button>
                            <button data-value="shopping" type="button" class="btn btn-interests "> shopping </button>
                            <button data-value="movie" type="button" class="btn btn-interests "> movie </button>
                            <button data-value="games" type="button" class="btn btn-interests "> games </button>
                            <button data-value="social N." type="button" class="btn btn-interests "> social N. </button>
                            <button data-value="family" type="button" class="btn btn-interests "> family </button>
                            <button data-value="politics" type="button" class="btn btn-interests "> politics </button>
                            <button data-value="dance" type="button" class="btn btn-interests "> dance </button>
                            <button data-value="bars" type="button" class="btn btn-interests "> bars </button>
                            <button data-value="travel" type="button" class="btn btn-interests "> travel </button>
                            <button data-value="art" type="button" class="btn btn-interests "> art </button>
                            <button data-value="shopping" type="button" class="btn btn-interests "> shopping </button>
                            <button data-value="movie" type="button" class="btn btn-interests "> movie </button>
                            <button data-value="games" type="button" class="btn btn-interests "> games </button>
                            <button data-value="social N." type="button" class="btn btn-interests "> social N. </button>
                            <button data-value="family" type="button" class="btn btn-interests "> family </button>
                            <button data-value="politics" type="button" class="btn btn-interests "> politics </button>
                            <button data-value="shopping" type="button" class="btn btn-interests "> shopping </button>
                            <button data-value="movie" type="button" class="btn btn-interests "> movie </button>
                            <button data-value="games" type="button" class="btn btn-interests "> games </button>
                            <button data-value="social N." type="button" class="btn btn-interests "> social N. </button>
                            <button data-value="family" type="button" class="btn btn-interests "> family </button>
                            <button data-value="politics" type="button" class="btn btn-interests "> politics </button>
                        </div><!-- interests-container -->

                        <input class="d-none" id="my-interests-value" type="text" value="">

                    </div> <!-- card -->

                    <div class="submit-btn-container text-center">
                        <button type="submit" class="btn btn-primary text-center pl-5 pr-5"> save </button>
                    </div> <!-- submit-btn-container -->

                </form>

            </div><!-- profile-data-content -->
        </div><!-- profile-data -->
    </div><!-- profile-content -->
</div><!-- page-content -->


<?php include 'footer.php'; ?>