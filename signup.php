<?php include 'header.php'; ?>

<div class="page-content signup">
    <div class="signin-content">
        <img class="mb-0 logo" src="img/logo-square.svg" />
        <h3 class="mb-2"> Sign Up </h3>


        <div class="form-container">
            <form class="signin-form" action="">
                <div class="form-group mb-3 relative">
                    <input type="text" class="form-control" placeholder="Phone Number" id="phone">
                </div><!-- form-group  -->
                <div class="form-group mb-3 relative">
                    <input type="text" class="form-control" placeholder="Full Name" id="name">
                </div><!-- form-group  -->

                <div class="form-group mb-3 relative">
                    <input type="text" class="form-control" placeholder="Email Address" id="email">
                </div><!-- form-group  -->

                <div class="form-group mb-3 relative">
                    <input type="text" class="form-control" placeholder="Password" id="password">
                </div><!-- form-group  -->

                <div class="form-group mb-3 relative">
                    <label class="text-left" for="date"> Date Of Birth (Optional) </label>
                    <input type="text" class="form-control" placeholder="DD/MM/YYYY" id="date">
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
                        <input class="d-none" type="text" id="genderValue">
                    </div><!-- genders-container -->
                </div><!-- form-group  -->

                <div class="submit-btn-container">
                    <a href="#" class="btn btn-custom1 w-100 text-center" data-toggle="modal" data-target="#confirmation"> Next </a>
                </div><!-- submit-btn-container -->
            </form><!-- signin-form -->
        </div><!-- form-container -->

    </div><!-- signin-content -->




    <!-- Modal -->
    <div class="modal fade" id="confirmation" tabindex="-1" role="dialog" aria-labelledby="confirmation" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <p> We’ll send you the activation <br /> code by SMS or Whatsapp </p>
                </div><!-- modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-custom1" data-dismiss="modal"> By SMS <img src="img/sms-icon.svg" /> </button>
                    <button type="button" class="btn btn-custom3" data-dismiss="modal"> By Whatsapp <img src="img/whatssapp-icon.svg" /></button>
                </div><!-- modal-footer -->
            </div> <!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->

</div><!-- page-content -->






<?php include 'footer.php'; ?>