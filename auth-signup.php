<?php include 'header.php'; ?>

<div class="page-content signup">
    <div class="signin-content">
        <img class="mb-0 logo" src="img/logo-square.png" />
        <h3 class="mb-2 bold"> Sign Up </h3>

        <div class="form-container">

 
            <form class="signin-form" action="" data-parsley-validate="">

                <div class="form-group mb-3 relative">
                    <input type="text" class="form-control input-with-country-code only-numbers" placeholder="Phone Number" id="phone" required="">
                    <span class="invalid-feedback  d-none"> This Field Is Required </span>
                    
                    <div class="country-code-container">

                        <select class="d-none" name="country" id="country">
                            <option  value="001"> 001 </option>
                            <option value="002"> 002 </option>
                            <option selected value="003"> 003 </option>
                        </select>

                        <div class="dropdown">
                            <button class="resetbtn dropdown-toggle" type="button" id="choose-country-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="img/flag-kuwait.png" /> +001
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-menu choose-country-list" aria-labelledby="choose-country-btn">
                                <a data-value="1" class="dropdown-item" href="#"><img src="img/flag-kuwait.png" /> +001 </a>
                                <a data-value="2" class="dropdown-item " href="#"><img src="img/flag-ksa.png" /> +002 </a>
                                <a data-value="3" class="dropdown-item " href="#"><img src="img/flag-uae.png" /> +003 </a>
                            </div>
                        </div> <!-- dropdown -->

                    </div><!-- country-code-container -->
                </div><!-- form-group  -->

                <div class="form-group mb-3 relative">
                    <input type="text" class="form-control" placeholder="Full Name" id="name" required="">
                    <span class="invalid-feedback d-none "> This Field Is Required </span>
                </div><!-- form-group  -->

                <div class="form-group mb-3 relative">
                    <input type="email" class="form-control" placeholder="Email Address" id="email" required="">
                    <span class="invalid-feedback d-none "> This Field Is Required </span>
                </div><!-- form-group  -->

                <div class="form-group mb-3 relative">
                    <input type="password" class="form-control" placeholder="Password" required="">
                    <span class="invalid-feedback d-none "> This Field Is Required </span>
                    <div id="toggle-password" class="toggle-password-container">
                        <i class="icon icon-eye"></i>
                    </div><!-- toggle-password-container -->
                </div><!-- form-group  -->

                <div class="form-group mb-3 relative">
                    <label class="text-left" for="date"> Date Of Birth (Optional) </label>
                    <input placeholder="Select your date" type="text" name="checkIn" id="datepicker" class="form-control calendar">
                    <p class="text-left mt-1" id="your-age"> </p>
                </div><!-- form-group  -->

                <div class="form-group mb-3 relative">
                    <label class="text-left" for="date"> Gender </label>
                    <div class="genders-container">
                        <div class="gender-list">
                            <div class="gender" data-gander="male">
                                <img class="img-fluid " src="img/male.png" alt="">
                            </div><!-- gender -->
                            <div class="gender" data-gander="female">
                                <img class="img-fluid" src="img/female.png" alt="">
                            </div><!-- gender -->
                        </div><!-- gender-list -->
                        <select class="d-none" name="gender" id="gender">
                            <option selected value="male"> male </option>
                            <option  value="female"> female </option>
                        </select>
                    </div><!-- genders-container -->
                </div><!-- form-group  -->

                <div class="form-group mb-3 relative d-none">
                    <input type="text" placeholder="via" id="via">
                </div><!-- form-group  -->

                <div class="submit-btn-container">
                    <a href="#" class="btn btn-custom1 w-100 text-center" id="confirmation-btn"> Next </a>
                </div><!-- submit-btn-container -->

                <!-- Modal START -->
                <div class="modal fade" id="confirmation" tabindex="-1" role="dialog" aria-labelledby="confirmation" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <p> We’ll send you the activation <br /> code by SMS or Whatsapp </p>
                            </div><!-- modal-body -->
                            <div class="modal-footer">
                                <a  href="auth-activate.php" class="btn btn-custom1 via" data-via="1"> By SMS <img src="img/sms-icon.svg" /> </a>
                                <a  href="auth-activate.php" class="btn btn-custom3 via" data-via="2"> By Whatsapp <img src="img/whatssapp-icon.svg" /></a>
                            </div><!-- modal-footer -->
                        </div> <!-- modal-content -->
                    </div><!-- modal-dialog -->
                </div><!-- modal END -->

            </form><!-- signin-form -->

        </div><!-- form-container -->
    </div><!-- signin-content -->
</div><!-- page-content -->


<?php include 'footer.php'; ?>

<script>
    onErrorCountryCodeValues();
    onErrorGenderValue();
</script>