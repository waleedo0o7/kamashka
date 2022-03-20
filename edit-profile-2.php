<?php include 'header.php'; ?>

<div class="page-content small-content profile edit-profile2">
    <div class="profile-content">

        <div class="profile-data w-100">
            <div class="profile-data-content mt-2">

                <h3 class="bold mb-4"> Edit Profile </h3>

                <div class="form-group mb-3 relative">
                    <input type="text" class="form-control" placeholder="Full Name" id="name" required="">
                    <span class="invalid-feedback d-none "> This Field Is Required </span>
                </div><!-- form-group  -->

                <div class="form-group mb-3 relative">
                    <input type="email" class="form-control" placeholder="Email" id="email" required="">
                    <span class="invalid-feedback d-none "> This Field Is Required </span>
                </div><!-- form-group  -->

                <div class="one-item">
                    <div class="content"> <a href="auth-change-phone-number.php"> Change Phone Number </a> </div>
                    <div class="content"> <a href="auth-change-phone-number.php"><i class="fa arrow-icon fa-chevron-right"></i> </a></div>
                </div><!-- one-item -->

                <div class="one-item password mb-3">
                    <div class="content"> <a href="auth-reset-password.php"> Change Password </a> </div>
                    <div class="content"> <a href="auth-reset-password.php"><i class="fa arrow-icon fa-chevron-right"></i> </a></div>
                </div><!-- one-item -->

                <div class="form-group mb-3 relative">
                    <label class="text-left" for="date"> Date Of Birth (Optional) </label>
                    <input placeholder="Select your date" type="text" name="checkIn" id="datepicker" class="form-control calendar">
                    <p class="text-left mt-1" id="your-age"> </p>
                </div><!-- form-group  -->

                <div class="form-group mb-5 relative">
                    <label class="text-left" for="date"> Gender </label>
                    <div class="genders-container">
                        <div class="gender-list">
                            <div class="gender" data-gander="male">
                                <img class="img-fluid " src="img/male.png" alt="">
                                <p> Male </p>
                            </div><!-- gender -->
                            <div class="gender" data-gander="female">
                                <img class="img-fluid" src="img/female.png" alt="">
                                <p> Female </p>
                            </div><!-- gender -->
                        </div><!-- gender-list -->
                        <select class="d-none" name="gender" id="gender">
                            <option selected value="male"> male </option>
                            <option value="female"> female </option>
                        </select>
                    </div><!-- genders-container -->
                </div><!-- form-group  -->

                <div class="submit-btn-container">
                    <a href="#" class="btn btn-custom1 w-100 text-center" id="confirmation-btn"> Next </a>
                </div><!-- submit-btn-container -->

            </div><!-- profile-data-content -->
        </div><!-- profile-data -->
    </div><!-- profile-content -->
</div><!-- page-content -->


<?php include 'footer.php'; ?>

<script> 
    onErrorGenderValue();
    calcAge();
</script>