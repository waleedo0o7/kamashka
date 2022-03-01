<?php include 'header.php'; ?>

<div class="page-content signin">
    <div class="signin-content">
        <img class="mb-0 logo" src="img/logo-square.svg" />
        <h3 class="mb-2"> Sign In </h3>

        <div class="form-container">
            <form class="signin-form" action="">
                <div class="form-group mb-3 relative">
                    <input type="email" class="form-control" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1">
                    <i class="fa fa-envelope"></i>
                </div><!-- form-group  -->
                <div class="form-group mb-3 relative">
                    <input type="password" class="form-control" placeholder="Password" aria-label="password" aria-describedby="basic-addon1">
                    <i class="icon icon-lock"></i>
                    <div id="toggle-password" class="toggle-password-container">
                        <i class="icon icon-eye"></i>
                    </div><!-- toggle-password-container -->
                </div><!-- form-group  -->
                <div class="forget-password-container mb-3 text-right">
                    <a href="#" class="link text-capitalize "> Forget password ?</a>
                </div><!-- forget-password-container -->
                <div class="submit-btn-container">
                    <a href="#" class="btn btn-custom1 w-100 text-center"> Next </a>
                </div><!-- submit-btn-container -->
            </form><!-- signin-form -->
        </div><!-- form-container -->

        <div class="page-footer">
            <div class="signup-btn-container mb-3">
                <a href="#" class="btn btn-custom2 w-100 text-center"> Sign Up </a>
            </div><!-- submit-btn-container -->
            <p class="text-capitalize "> Or continue with </p>
            <ul class="resetul icons mb-3">
                <li> <a href="#"> <img src="img/facebook-icon.svg"/> </a> </li>
                <li> <a href="#"> <img src="img/google-icon.svg"/> </a> </li>
                <li> <a href="#"> <img src="img/apple-icon.svg"/> </a> </li>
            </ul>
            <p> by creating an account or sign in , you agree <br>
            to <a href="#"> The Terms </a> and <a href="#"> Privacy Policy </a></p>
        </div><!-- page-footer -->
    </div><!-- signin-content -->
</div><!-- page-content -->

<?php include 'footer.php'; ?>