<?php include 'header.php'; ?>

<div class="page-content sign-in">
    <div class="auth-page-content">
        <img alt="" class="mb-0 logo" src="img/logo-square.png" />
        <h3 class="mb-2 bold"> Sign In </h3>

        <div class="form-container">

            <div class="d-none alert alert-danger text-left" role="alert">
                <ul class="mb-0 reset-ul">
                    <li> Error Message </li>
                </ul>
            </div>

            <form class="sign-in-form" action="test.php" >
                <div class="form-group mb-3 relative">
                    <input type="email" class="form-control input-with-icon" placeholder="Email Address" required="">
                    <i class="fa fa-envelope"></i>
                </div><!-- form-group  -->
                <div class="form-group mb-3 relative">
                    <input type="password" class="form-control input-with-icon" placeholder="Password" required="">
                    <i class="icon icon-lock"></i>
                    <div id="toggle-password" class="toggle-password-container">
                        <i class="icon icon-eye"></i>
                    </div><!-- toggle-password-container -->
                </div><!-- form-group  -->
                <div class="forget-password-container mb-3 text-right">
                    <a href="auth-forget-password.php" class="link text-capitalize "> Forget password ?</a>
                </div><!-- forget-password-container -->
                <div class="submit-btn-container">
                    <button  class="btn btn-primary w-100 text-center"> Sign In </button>
                </div><!-- submit-btn-container -->
            </form><!-- sign-in-form -->

            
        </div><!-- form-container -->

        <div class="page-footer">
            <div class="sign-up-btn-container mb-3">
                <a href="auth-sign-up.php" class="btn btn-outline-primary w-100 text-center"> Sign Up </a>
            </div><!-- submit-btn-container -->
            <p class="text-capitalize "> Or continue with </p>
            <ul class="reset-ul icons mb-3">
                <li> <a href="#"> <img alt="" src="img/facebook-icon.svg" /> </a> </li>
                <li> <a href="#"> <img alt="" src="img/google-icon.svg" /> </a> </li>
                <li> <a href="#"> <img alt="" src="img/apple-icon.svg" /> </a> </li>
            </ul>
            <p> by creating an account or sign in , you agree <br>
                to <a href="#"> The Terms </a> and <a href="#"> Privacy Policy </a></p>
        </div><!-- page-footer -->

    </div><!-- auth-page-content -->
</div><!-- page-content -->

<?php include 'footer.php'; ?>