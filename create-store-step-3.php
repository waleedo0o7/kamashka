<?php include 'header.php'; ?>

<div class="page-content small-content profile create-store-page">
    <div class="profile-content">

        <div class="profile-data w-100">
            <div class="profile-data-content mt-4">

                <h3 class="bold mb-4 "> Create Store </h3>


                <div class="steps clearfix">
                    <ul role="tablist">
                        <li class="first done"><a href="create-store-step-1.php"><span class="number">1</span> Basic <br> Information </a></li>
                        <li class="done"><a href="create-store-step-2.php"><span class="number">2</span> VAT <br> Information </a></li>
                        <li class="current"><a href="create-store-step-3.php"><span class="number">3</span> Business <br> Information </a></li>
                        <li class="disabled"><a href="create-store-step-4.php"><span class="number">4</span> Bank <br> Account </a></li>
                        <li class="disabled last"><a href="create-store-step-5.php"><span class="number">5</span> Social <br> Links </a></li>
                    </ul>
                </div>


                <form id="" action="#">


                    <!-- STEP 3 -->

                    <!-- <h3> Business Information </h3> -->

                    <section>

                        <div class="row">


                            <div class="col-md-12">
                                <div class="form-group mb-4 relative">
                                    <label class=" "> License Number </label>
                                    <input type="text" class="form-control " placeholder="License Number">
                                </div><!-- form-group  -->
                            </div><!-- col-md-6 -->


                            <div class="col-md-6">
                                <div class="form-group mb-3 relative">
                                    <label class="text-left"> Commercial License Issue Date </label>
                                    <input placeholder="Commercial License Issue Date" type="text" name="checkIn" id="" class="form-control calendar" disabled>
                                </div><!-- form-group  -->
                            </div><!-- col-md-6 -->


                            <div class="col-md-6">
                                <div class="form-group mb-3 relative">
                                    <label class="text-left"> Commercial License Expiry Date </label>
                                    <input placeholder="Commercial License Expiry Date" type="text" name="checkIn" id="" class="form-control calendar" disabled>
                                </div><!-- form-group  -->
                            </div><!-- col-md-6 -->


                            <div class="col-md-12">

                                <div class="form-group mb-3 upload-with-thumbnails-container">

                                    <div class="label-and-btn">
                                        <label class=" bold"> License Scan </label>
                                        <a id="license-scan-upload-btn" class="btn btn-custom2"> upload </a>
                                        <input id="license-scan-document-input" class="d-none" type="file" accept=".jpg,.jpeg.,.gif,.png,.mov,.mp4" />
                                    </div><!-- label-and-btn -->

                                    <div id="license-scan-thumbnails-wrapper" class="thumbnails-wrapper"></div>

                                    <input id="primary-asset-id" type="text" placeholder="primary asset id" class="d-none">

                                </div><!-- form-group -->

                            </div> <!-- col-md-12 -->


                        </div> <!-- row -->

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