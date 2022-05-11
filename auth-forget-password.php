<?php include 'header.php'; ?>

<div class="page-content forget-password">
    <div class="sign-in-content">
        <img class="mb-0 logo" src="img/logo-square.png" />
        <h3 class="mb-2 bold"> Forget Password </h3>

        <div class="d-none">
            <input type="text" placeholder="via" id="via" value="email">
        </div><!-- d-none -->

        <div class="form-container">

            <div class="d-none alert alert-danger text-left" role="alert">
                <ul class="mb-0 reset-ul">
                    <li> Error Message </li>
                </ul>
            </div>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a data-via="email" class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"> Email</a>
                </li>
                <li class="nav-item">
                    <a data-via="phone" class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Phone</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">


                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <form class="forget-password-form" action="test.php">
                        <div class="form-group mb-3 relative">
                            <input type="email" class="form-control input-with-icon" placeholder="Email Address" required="">
                            <i class="fa fa-envelope"></i>
                        </div><!-- form-group  -->


                        <div class="submit-btn-container">
                            <!-- <a href="#" class="btn btn-custom1 w-100 text-center" id="confirmation-btn" data-toggle="modal" data-target="#confirmation"> Next </a> -->
                            <a href="auth-activate.php" class="btn btn-custom1 w-100 text-center"> Send Code </a>
                        </div><!-- submit-btn-container -->


                    </form><!-- sign-in-form -->
                </div> <!-- tab-pane -->

                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form class="forget-password-form" action="test.php">
                        <div class="form-group mb-3 relative">
                            <input type="text" class="form-control input-with-country-code only-numbers" placeholder="Phone Number" id="phone" required="">
                            <div class="country-code-container">

                                <select class="d-none" name="country" id="country">
                                    <option value="1"> 1 </option>
                                    <option selected value="2"> 2 </option>
                                    <option value="3"> 3 </option>
                                </select>

                                <div class="dropdown">
                                    <button class="reset-btn dropdown-toggle" type="button" id="choose-country-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="img/flag-kuwait.png" /> +002
                                        <i class="fa fa-caret-down"></i>
                                    </button>
                                    <div class="dropdown-menu choose-country-list" aria-labelledby="choose-country-btn">
                                        <a data-value="1" class="dropdown-item" href="#"><img src="img/flag-kuwait.png" /> +001 <i class="fa fa-caret-down"></i> </a>
                                        <a data-value="2" class="dropdown-item " href="#"><img src="img/flag-ksa.png" /> +002 <i class="fa fa-caret-down"></i> </a>
                                        <a data-value="3" class="dropdown-item " href="#"><img src="img/flag-uae.png" /> +003 <i class="fa fa-caret-down"></i> </a>
                                    </div>
                                </div> <!-- dropdown -->
                            </div><!-- country-code-container -->
                        </div> <!-- form-group  -->

                        <div class="submit-btn-container">
                            <!-- <a href="#" class="btn btn-custom1 w-100 text-center" id="confirmation-btn" data-toggle="modal" data-target="#confirmation"> Next </a> -->
                            <a href="auth-activate.php" class="btn btn-custom1 w-100 text-center"> Send Code </a>
                        </div><!-- submit-btn-container -->

                    </form><!-- sign-in-form -->
                </div> <!-- tab-pane -->
            </div>



        </div><!-- form-container -->

    </div><!-- sign-in-content -->
</div><!-- page-content -->


<?php include 'footer.php'; ?>