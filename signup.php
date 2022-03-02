<?php include 'header.php'; ?>

<div class="page-content signup">
    <div class="signin-content">
        <img class="mb-0 logo" src="img/logo-square.svg" />
        <h3 class="mb-2"> Sign Up </h3>

        <div class="form-container">

            <div class="d-none alert alert-danger text-left" role="alert">
                <ul class="mb-0 resetul">
                    <li> Error Message </li>
                </ul>
            </div>

            <form class="signin-form" action="" data-parsley-validate="">

                <div class="form-group mb-3 relative">
                    <input type="text" class="form-control input-with-country-code only-numbers" placeholder="Phone Number" id="phone" required="">
                    <div class="country-code-container">

                        <select class="d-none" name="country" id="country">
                            <option selected value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                        </select>

                        <div class="dropdown">
                            <button class="resetbtn dropdown-toggle" type="button" id="choose-country" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="img/flag-kuwait.png" /> +002
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="choose-country">
                                <a data-value="1" class="dropdown-item" href="#"><img src="img/flag-kuwait.png" /> +002 </a>
                                <a data-value="2" class="dropdown-item " href="#"><img src="img/flag-ksa.png" /> +003 </a>
                                <a data-value="3" class="dropdown-item " href="#"><img src="img/flag-uae.png" /> +004 </a>
                            </div>
                        </div> <!-- dropdown -->
                    </div><!-- country-code-container -->
                </div><!-- form-group  -->

                <div class="form-group mb-3 relative">
                    <input type="text" class="form-control" placeholder="Full Name" id="name" required="">
                </div><!-- form-group  -->

                <div class="form-group mb-3 relative">
                    <input type="email" class="form-control" placeholder="Email Address" id="email" required="">
                </div><!-- form-group  -->

                <div class="form-group mb-3 relative">
                    <input type="password" class="form-control" placeholder="Password" required="">
                    <div id="toggle-password" class="toggle-password-container">
                        <i class="icon icon-eye"></i>
                    </div><!-- toggle-password-container -->
                </div><!-- form-group  -->

                <div class="form-group mb-3 relative">
                    <label class="text-left" for="date"> Date Of Birth (Optional) </label>
                    <input placeholder="Select your date" type="text" name="checkIn" id="datepicker" class="form-control calendar" required="">
                    <label class="text-left mt-1" for="date"> Your Age Is <span> 29 </span></label>
                </div><!-- form-group  -->

                <div class="form-group mb-3 relative">
                    <label class="text-left" for="date"> Gender </label>
                    <div class="genders-container">
                        <div class="gender active" data-gander="1">
                            <img class="img-fluid " src="img/male.png" alt="">
                        </div><!-- gender -->
                        <div class="gender" data-gander="2">
                            <img class="img-fluid" src="img/female.png" alt="">
                        </div><!-- gender -->
                        <select class="d-none" name="gender" id="gender">
                            <option selected value="1"> male </option>
                            <option value="2"> female </option>
                        </select>
                    </div><!-- genders-container -->
                </div><!-- form-group  -->

                <div class="form-group mb-3 relative d-none">
                    <input type="text" placeholder="via" id="via">
                </div><!-- form-group  -->

                <div class="submit-btn-container">
                    <a href="#" class="btn btn-custom1 w-100 text-center" data-toggle="modal" data-target="#confirmation"> Next </a>
                </div><!-- submit-btn-container -->




                <!-- Modal -->
                <div class="modal fade" id="confirmation" tabindex="-1" role="dialog" aria-labelledby="confirmation" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <p> We’ll send you the activation <br /> code by SMS or Whatsapp </p>
                            </div><!-- modal-body -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-custom1 via" data-via="1"> By SMS <img src="img/sms-icon.svg" /> </button>
                                <button type="submit" class="btn btn-custom3 via" data-via="2"> By Whatsapp <img src="img/whatssapp-icon.svg" /></button>
                            </div><!-- modal-footer -->
                        </div> <!-- modal-content -->
                    </div><!-- modal-dialog -->
                </div><!-- modal -->


            </form><!-- signin-form -->
        </div><!-- form-container -->

    </div><!-- signin-content -->

</div><!-- page-content -->


<?php include 'footer.php'; ?>