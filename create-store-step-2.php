<?php include 'header.php'; ?>

<div class="page-content small-content profile create-store-page">
    <div class="profile-content">

        <div class="profile-data w-100">
            <div class="profile-data-content mt-4">

                <h3 class="bold mb-4 "> Create Store </h3>


                <div class="steps clearfix">
                    <ul role="tablist">
                        <li class="first done"><a href="create-store-step-1.php"><span class="number">1</span> Basic <br> Information </a></li>
                        <li class="disabled current"><a href="create-store-step-2.php"><span class="number">2</span> VAT <br> Information </a></li>
                        <li class="disabled"><a href="create-store-step-3.php"><span class="number">3</span> Business <br> Information </a></li>
                        <li class="disabled"><a href="create-store-step-4.php"><span class="number">4</span> Bank <br> Account </a></li>
                        <li class="disabled last"><a href="create-store-step-5.php"><span class="number">5</span> Social <br> Links </a></li>
                    </ul>
                </div>


                <form id="" action="#">


                    <!-- STEP 2 -->

                    <!-- <h3> VAT Information </h3> -->

                    <section>

                        <div class="row">

                            <div class="col-md-12 mb-4">

                                <p class="bold mb-2"> Vat Registration Status </p>

                                <div class="d-flex">

                                    <div class="option mr-4">
                                        <label class="option-container">
                                            <input type="radio" checked="checked" name="target-gender" value="1">
                                            <span class="checkmark"></span>
                                            Registered
                                        </label>
                                    </div><!-- option -->


                                    <div class="option mr-4">
                                        <label class="option-container">
                                            <input type="radio" name="target-gender" value="1">
                                            <span class="checkmark"></span>
                                            Not Registered
                                        </label>
                                    </div><!-- option -->


                                </div><!-- inline-items -->

                            </div><!-- col-md-6 -->



                            <div class="col-md-12">
                                <div class="form-group mb-4 relative">
                                    <label class=" "> Tax Registration Number </label>
                                    <input type="text" class="form-control " placeholder="Tax Registration Number">
                                </div><!-- form-group  -->
                            </div><!-- col-md-6 -->



                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label class=" "> Select Store Tap </label>
                                    <select class="form-control">
                                        <option> Tax Registration Country</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                    </select>
                                </div>
                            </div> <!-- col-md-6 -->

                            <div class="col-md-6">
                                <div class="form-group mb-3 relative">
                                    <label class="text-left"> Vat Expiration Date </label>
                                    <input placeholder="Vat Expiration Date" type="text" name="checkIn" id="" class="form-control calendar" disabled>
                                </div><!-- form-group  -->
                            </div><!-- col-md-6 -->

                            <div class="col-md-6">
                                <div class="form-group mb-4 relative">
                                    <label class=" "> English Address </label>
                                    <input type="text" class="form-control " placeholder="English Address">
                                </div><!-- form-group  -->
                            </div><!-- col-md-6 -->

                            <div class="col-md-6">
                                <div class="form-group mb-4 relative">
                                    <label class=" "> Arabic Address </label>
                                    <input type="text" class="form-control " placeholder="Arabic Address">
                                </div><!-- form-group  -->
                            </div><!-- col-md-6 -->

                            <div class="col-md-12">

                                <div class="form-group mb-3 upload-with-thumbnails-container">

                                    <div class="label-and-btn">
                                        <label class=" bold"> VAT Proof Document </label>
                                        <a id="vat-proof-upload-btn" class="btn btn-outline-primary"> upload </a>
                                        <input id="vat-proof-document-input" class="d-none" type="file" accept=".jpg,.jpeg.,.gif,.png,.mov,.mp4" />
                                    </div><!-- label-and-btn -->

                                    <div id="vat-prof-thumbnails-wrapper" class="thumbnails-wrapper"></div>

                                    <input id="primary-asset-id" type="text" placeholder="primary asset id" class="d-none">

                                </div><!-- form-group -->

                            </div> <!-- col-md-12 -->



                            <div class="col-md-12">

                                <div class="form-group mb-3 upload-with-thumbnails-container">

                                    <div class="label-and-btn">
                                        <label class=" bold"> Tax Card Document </label>
                                        <a id="tax-card-upload-btn" class="btn btn-outline-primary"> upload </a>
                                        <input id="tax-card-document-input" class="d-none" type="file" accept=".jpg,.jpeg.,.gif,.png,.mov,.mp4" />
                                    </div><!-- label-and-btn -->

                                    <div id="tax-card-thumbnails-wrapper" class="thumbnails-wrapper"></div>

                                    <input id="primary-asset-id" type="text" placeholder="primary asset id" class="d-none">

                                </div><!-- form-group -->

                            </div> <!-- col-md-12 -->




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