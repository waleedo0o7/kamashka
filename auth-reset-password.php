<?php include 'header.php'; ?>

<div class="page-content forget-password">
    <div class="sign-in-content">
        <img alt="" class="mb-0 logo" src="img/password.svg" />
        <h3 class="mb-2 bold"> Reset Password </h3>

        <div class="form-container">
 
            <form class="forget-password-form" action="test.php" data-parsley-validate="">            

                <div class="form-group mb-3 relative">
                    <input type="password" class="form-control input-with-icon" placeholder="New Password" required="">
                    <i class="icon icon-lock"></i>
                    <div  class="toggle-password-container">
                        <i class="icon icon-eye"></i>
                    </div><!-- toggle-password-container -->
                </div><!-- form-group  -->


                <div class="form-group mb-3 relative">
                    <input type="password" class="form-control input-with-icon" placeholder="Confirm New Password" required="">
                    <i class="icon icon-lock"></i>
                    <div  class="toggle-password-container">
                        <i class="icon icon-eye"></i>
                    </div><!-- toggle-password-container -->
                </div><!-- form-group  -->




                <div class="submit-btn-container">
                    <!-- <a href="#" class="btn btn-custom1 w-100 text-center" id="confirmation-btn" data-toggle="modal" data-target="#confirmation"> Next </a> -->
                    <button type="submit" class="btn btn-custom1 w-100 text-center"> Reset Password </button>
                </div><!-- submit-btn-container -->



            </form><!-- sign-in-form -->

        </div><!-- form-container -->

    </div><!-- sign-in-content -->

</div><!-- page-content -->


<?php include 'footer.php'; ?>