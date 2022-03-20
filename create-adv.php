<?php include 'header.php'; ?>

<div class="page-content small-content profile create-advertisement">
    <div class="profile-content">

        <div class="profile-data w-100">
            <div class="profile-data-content mt-2">

                <h3 class="bold mb-4"> Create Advertisement </h3>

                <div class="form-group mb-3 relative">
                    <input type="text" class="form-control" placeholder="Ads Title" id="name" required="">
                    <span class="invalid-feedback d-none "> This Field Is Required </span>
                </div><!-- form-group  -->


                <div class="form-group mb-3">
                    <textarea id="about-me" class="form-control" name="" placeholder="Ads Description"></textarea>
                </div><!-- form-group -->


                <div class="form-group mb-3">
                    <div class="label-and-btn">
                        <label for="upload-images" class="lead bold"> Upload Photo Or Video </label>
                        <input id="upload-images" class="form-control" type="file" accept="image/png, image/gif, image/jpeg">
                    </div><!-- label-and-btn -->

                    <div class="thumbnails-container"> thumbnails-container </div><!-- thumbnails-container -->
                </div><!-- form-group -->

                <div class="target-audience-container">
                    <p class="bold"> Target Audience </p>
                    <div class="target-items-container">
                        <div class="one-item">
                            <div class="option">
                                <label class="option-container">
                                    <input type="radio" checked="checked" name="target-audience" value="1">
                                    <span class="checkmark"></span>
                                    Saved Target 1
                                </label>
                            </div><!-- option -->
                            <div class="actions">
                                <ul class="resetul">
                                    <li class="mr-3"> <a class="btn btn-sm btn-custom2 pl-4 pr-4" href=""> Details</a> </li>
                                    <li class="ml-2"> <a class="btn-edit-custom1" href=""> <i class="fa fa-edit"></i>  </a> </li>
                                    <li class="ml-2"> <a class="btn-delete-custom1" href=""> <i class="fa fa-trash-alt"></i>  </a> </li>
                                </ul>
                            </div><!-- actions -->
                        </div><!-- one-item -->


                        <div class="one-item">
                            <div class="option">
                                <label class="option-container">
                                    <input type="radio"  name="target-audience" value="2">
                                    <span class="checkmark"></span>
                                    Saved Target 2
                                </label>
                            </div><!-- option -->
                            <div class="actions">
                                <ul class="resetul">
                                    <li class="mr-3"> <a class="btn btn-sm btn-custom2 pl-4 pr-4" href=""> Details</a> </li>
                                    <li class="ml-2"> <a class="btn-edit-custom1" href=""> <i class="fa fa-edit"></i>  </a> </li>
                                    <li class="ml-2"> <a class="btn-delete-custom1" href=""> <i class="fa fa-trash-alt"></i>  </a> </li>
                                </ul>
                            </div><!-- actions -->
                        </div><!-- one-item -->



                    </div><!-- target-items-container -->
                </div><!-- target-audience-container -->

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