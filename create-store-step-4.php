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
                        <li class="done"><a href="create-store-step-3.php"><span class="number">3</span> Business <br> Information </a></li>
                        <li class="current"><a href="create-store-step-4.php"><span class="number">4</span> Bank <br> Account </a></li>
                        <li class="disabled last"><a href="create-store-step-5.php"><span class="number">5</span> Social <br> Links </a></li>
                    </ul>
                </div>


                <form id="" action="#">

                    <!-- STEP 4 -->

                    <!-- <h3> Bank Account </h3> -->

                    <section>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label class=" "> Payment Currency </label>
                                    <select class="form-control">
                                        <option> Payment Currency</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                    </select>
                                </div>
                            </div> <!-- col-md-6 -->


                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label class=" "> Payment Mode </label>
                                    <select class="form-control">
                                        <option> Payment Mode </option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                    </select>
                                </div>
                            </div> <!-- col-md-6 -->



                            <div class="col-md-6">
                                <div class="form-group mb-4 relative">
                                    <label class=" "> Beneficiary Name </label>
                                    <input type="text" class="form-control " placeholder="Beneficiary Name">
                                </div><!-- form-group  -->
                            </div><!-- col-md-6 -->


                            <div class="col-md-6">
                                <div class="form-group mb-4 relative">
                                    <label class=" "> Bank Name </label>
                                    <input type="text" class="form-control " placeholder="Bank Name">
                                </div><!-- form-group  -->
                            </div><!-- col-md-6 -->


                            <div class="col-md-6">
                                <div class="form-group mb-4 relative">
                                    <label class=" "> Account Number </label>
                                    <input type="text" class="form-control " placeholder="Account Number">
                                </div><!-- form-group  -->
                            </div><!-- col-md-6 -->


                            <div class="col-md-6">
                                <div class="form-group mb-4 relative">
                                    <label class=" "> IBAN Code/Swift Code </label>
                                    <input type="text" class="form-control " placeholder="IBAN Code/Swift Code">
                                </div><!-- form-group  -->
                            </div><!-- col-md-6 -->




                            <div class="col-md-12">

                                <div class="form-group mb-3 upload-with-thumbnails-container">

                                    <div class="label-and-btn">
                                        <label class=" bold"> Proof Document </label>
                                        <a id="proof-upload-btn" class="btn btn-outline-primary"> upload </a>
                                        <input id="proof-document-input" class="d-none" type="file" accept=".jpg,.jpeg.,.gif,.png,.mov,.mp4" />
                                    </div><!-- label-and-btn -->

                                    <div id="proof-thumbnails-wrapper" class="thumbnails-wrapper"></div>

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