<?php include 'header.php'; ?>

<div class="page-content profile edit-profile2">
    <div class="profile-content">

        <div class="profile-data w-100">
            <div class="profile-data-content mt-2">

                <h3 class="bold mb-4"> Create Advertisement </h3>

                <div class="form-group mb-3 relative">
                    <input type="text" class="form-control" placeholder="Ads Title" id="name" required="">
                    <span class="invalid-feedback d-none "> This Field Is Required </span>
                </div><!-- form-group  -->

                <div class="submit-btn-container text-center">
                    <a href="#" class="btn btn-custom1 text-center pl-5 pr-5" id="confirmation-btn"> Preview Adv </a>
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