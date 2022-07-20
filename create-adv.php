<?php include 'header.php'; ?>

<div class="page-content small-content profile create-advertisement">
    <div class="profile-content">

        <div class="profile-data w-100">
            <div class="profile-data-content mt-4">

                <h3 class="bold mb-4"> Create Advertisement </h3>

                <div class="form-group mb-3 relative">
                    <input type="text" class="form-control" placeholder="Ads Title"  required="">
                    <span class="invalid-feedback d-none "> This Field Is Required </span>
                </div><!-- form-group  -->


                <div class="form-group mb-3">
                    <textarea id="about-me" class="form-control"  placeholder="Ads Description"></textarea>
                </div><!-- form-group -->


                <div class="form-group mb-3 upload-with-thumbnails-container">

                    <div class="label-and-btn">
                        <label class=" bold"> Upload Photo Or Video </label>
                        <p class="max-limit d-none"> max limit is 3 files </p>
                        <button class="btn btn-custom2 upload-btn">  upload </button>
                        <button class="btn btn-custom2 upload-btn-disabled d-none">  upload </button>
                        <input id="upload" class="upload-with-thumbnails d-none" type="file" accept=".jpg,.jpeg.,.gif,.png,.mov,.mp4" />
                    </div><!-- label-and-btn -->

                    <div class="thumbnails-wrapper"></div>

                    <input id="primary-asset-id" type="text" placeholder="primary asset id" class="d-none">

                </div><!-- form-group -->

                <div class="target-audience-container">
                    <p class="bold"> Target Audience </p>
                    <div class="target-items-container mb-3">
                        <div class="one-item mb-3">
                            <div class="option">
                                <label class="option-container">
                                    <input type="radio" checked="checked" name="target-audience" value="1">
                                    <span class="checkmark"></span>
                                    Saved Target 1
                                </label>
                            </div><!-- option -->
                            <div class="actions">
                                <ul class="reset-ul">
                                    <li class="mr-3"> <a class="btn btn-sm btn-custom2 pl-4 pr-4" href=""> Details</a> </li>
                                    <li class="ml-2"> <a class="btn-edit-custom1" href=""> <i class="fa fa-edit"></i> </a> </li>
                                    <li class="ml-2"> <a class="btn-delete-custom1" href="" data-toggle="modal" data-target="#delete-modal"> <i class="fa fa-trash-alt"></i> </a> </li>
                                </ul>
                            </div><!-- actions -->
                        </div><!-- one-item -->


                        <div class="one-item">
                            <div class="option">
                                <label class="option-container">
                                    <input type="radio" name="target-audience" value="2">
                                    <span class="checkmark"></span>
                                    Saved Target 2
                                </label>
                            </div><!-- option -->
                            <div class="actions">
                                <ul class="reset-ul">
                                    <li class="mr-3"> <a class="btn btn-sm btn-custom2 pl-4 pr-4" href=""> Details</a> </li>
                                    <li class="ml-2"> <a class="btn-edit-custom1" href=""> <i class="fa fa-edit"></i> </a> </li>
                                    <li class="ml-2"> <a class="btn-delete-custom1" href="" data-toggle="modal" data-target="#delete-modal"> <i class="fa fa-trash-alt"></i> </a> </li>
                                </ul>
                            </div><!-- actions -->
                        </div><!-- one-item -->



                    </div><!-- target-items-container -->

                    <a class="btn btn-sm btn-custom2 pl-3 pr-3 " href="create-target-audience.php"> Create New Target </a>
                </div><!-- target-audience-container -->


                <div class="row mt-4 mb-4">

                    <div class="col-md-6">
                        <div class="form-group mb-3 relative">
                            <label  class=" bold"> Your Budget </label>
                            <input type="text" class="form-control" placeholder="2000 KWD"  required="">
                            <span class="invalid-feedback d-none "> This Field Is Required </span>
                        </div><!-- form-group  -->
                    </div><!-- col-md-6 -->

                    <div class="col-md-6">
                        <div class="form-group mb-3 relative">
                            <label  class=" bold"> Number Of Target Audience </label>
                            <input type="text" class="form-control" placeholder="2000"  required="">
                            <span class="invalid-feedback d-none "> This Field Is Required </span>
                        </div><!-- form-group  -->
                    </div><!-- col-md-6 -->

                </div><!-- row -->




                <div class="submit-btn-container text-center">
                    <a href="#" class="btn btn-primary text-center pl-5 pr-5 w-100  " id="confirmation-btn"> Preview Adv </a>
                </div><!-- submit-btn-container -->

            </div><!-- profile-data-content -->
        </div><!-- profile-data -->
    </div><!-- profile-content -->
</div><!-- page-content -->




<!-- Delete Modal Start -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="delete-modalLabel" aria-hidden="true">
    <div class="modal-dialog  " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delete-modalLabel"> Delete </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="icon icon-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="delete-container">
                    <p class="text-center">Are you sure you want to <br /> delete comment ?</p>
                </div> <!-- delete-container -->
            </div> <!-- modal-body -->
            <div class="modal-footer">
                <a href="#" class="btn btn-primary via" > Yes </a>
                <a href="#" class="btn btn-custom5 via" > No </a>
            </div><!-- modal-footer -->
        </div> <!-- modal-content -->
    </div> <!-- modal-dialog -->
</div> <!-- Delete Modal END -->




<?php include 'footer.php'; ?>