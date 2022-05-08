<?php include 'header.php'; ?>

<div class="page-content forget-password">
    <div class="sign-in-content">
        <img alt="" class="mb-3 logo" src="img/password.svg" />
        <h3 class="mb-2 bold"> Change Phone number </h3>

        <div class="form-container">


            <form class="forget-password-form" action="" data-parsley-validate="">            

 
 
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



                <div class="submit-btn-container">
                    <!-- <a href="#" class="btn btn-custom1 w-100 text-center" id="confirmation-btn" data-toggle="modal" data-target="#confirmation"> Next </a> -->
                    <button type="submit" class="btn btn-custom1 w-100 text-center"> Change Number </button>
                </div><!-- submit-btn-container -->



            </form><!-- sign-in-form -->

        </div><!-- form-container -->

    </div><!-- sign-in-content -->

</div><!-- page-content -->


<?php include 'footer.php'; ?>


<script> 
    onErrorCountryCodeValues(); 
</script>
