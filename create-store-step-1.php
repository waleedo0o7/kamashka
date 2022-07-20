<?php include 'header.php'; ?>


<div class="page-content small-content profile create-store-page">
    <div class="profile-content">

        <div class="profile-data w-100">
            <div class="profile-data-content mt-4">

                <h3 class="bold mb-4 "> Create Store </h3>


                <div class="steps clearfix">
                    <ul role="tablist">
                        <li class="first current"><a href="create-store-step-1.php"><span class="number">1</span> Basic <br> Information </a></li>
                        <li class="disabled"><a href="create-store-step-2.php"><span class="number">2</span> VAT <br> Information </a></li>
                        <li class="disabled"><a href="create-store-step-3.php"><span class="number">3</span> Business <br> Information </a></li>
                        <li class="disabled"><a href="create-store-step-4.php"><span class="number">4</span> Bank <br> Account </a></li>
                        <li class="disabled last"><a href="create-store-step-5.php"><span class="number">5</span> Social <br> Links </a></li>
                    </ul>
                </div>


                <form id="" action="#">

                    <!-- STEP 1 -->

                    <!-- <h3> Basic Information </h3> -->

                    <section>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="company-banner-and-logo-wrapper">
                                    <div class="banner-wrapper edit-image-wrapper">
                                        <img id="company-banner" class="img-fluid banner-image" src="img/company-cover-default.png" alt="">
                                        <i id="edit-company-banner-btn" class="icon-edit" aria-hidden="true"></i>
                                        <div class="loading-container">
                                            <div class="loader"></div>
                                        </div>
                                        <input id="edit-company-banner-input" type="file" name="image" class="d-none" />
                                    </div><!-- banner-wrapper -->

                                    <div class="logo-wrapper  edit-image-wrapper">
                                        <img id="company-logo" class="img-fluid logo-image" src="img/company-logo-default.png" alt="">
                                        <i id="edit-company-logo-btn" class="icon-edit" aria-hidden="true"></i>
                                        <div class="loading-container">
                                            <div class="loader"></div>
                                        </div>
                                        <input id="edit-company-logo-input" type="file" name="image" class="d-none" />
                                    </div><!-- logo-wrapper -->

                                </div><!-- company-panner-and-logo-wrapper -->
                            </div><!-- col-md-12 -->
                        </div><!-- row -->

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group mb-4 relative">
                                    <label class=" "> Store Name (In English) </label>
                                    <input type="text" class="form-control " placeholder="Store Name (In English)">
                                </div><!-- form-group  -->
                            </div><!-- col-md-6 -->

                            <div class="col-md-6">
                                <div class="form-group mb-4 relative">
                                    <label class=" "> Store Name (In Arabic) </label>
                                    <input type="text" class="form-control" placeholder="Store Name (In Arabic)">
                                </div><!-- form-group  -->
                            </div><!-- col-md-6 -->


                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label class=" "> Store Description(English) </label>
                                    <textarea class="form-control" placeholder="Store Description(English)"></textarea>
                                </div>
                            </div><!-- col-md-6 -->

                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label class=" "> Store Description(Arabic) </label>
                                    <textarea class="form-control" placeholder="Store Description(Arabic)"></textarea>
                                </div>
                            </div><!-- col-md-6 -->


                            <div class="col-md-6">
                                <div class="form-group mb-4 relative">
                                    <label class=" "> Store Legal Name </label>
                                    <input type="text" class="form-control" placeholder="Store Legal Name">
                                </div><!-- form-group  -->
                            </div><!-- col-md-6 -->

                            <div class="col-md-6">
                                <div class="form-group mb-4 relative">
                                    <label class=" "> Phone Number </label>
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div><!-- form-group  -->
                            </div><!-- col-md-6 -->

                            <div class="col-md-6">
                                <div class="form-group mb-4 relative">
                                    <label class=" "> Business Email </label>
                                    <input type="text" class="form-control" placeholder="Business Email">
                                </div><!-- form-group  -->
                            </div><!-- col-md-6 -->

                            <div class="col-md-6">
                                <div class="form-group mb-4 relative">
                                    <label class=" "> Financial Email </label>
                                    <input type="text" class="form-control" placeholder="Financial Email ">
                                </div><!-- form-group  -->
                            </div><!-- col-md-6 -->

                        </div><!-- row -->

                    </section>

                </form>


            </div><!-- profile-data-content -->
        </div><!-- profile-data -->
    </div><!-- profile-content -->
</div><!-- page-content -->






<?php include 'footer.php'; ?>

<script src="js/create-store.js"></script>




<script>
    uploadVatProofDocumentWithThumbnails();

    uploadTaxCardDocumentWithThumbnails();

    uploadLicenseScanDocumentWithThumbnails();

    uploadProofDocumentWithThumbnails();
</script>