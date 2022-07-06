<?php include 'header.php'; ?>

<div class="page-content small-content profile create-store-page">
    <div class="profile-content">

        <div class="profile-data w-100">
            <div class="profile-data-content mt-4">

                <h3 class="bold mb-4 "> Create Store </h3>


                <form id="contact" action="#">
                    <div>

                        <h3> Basic <br> Information </h3>

                        <section>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="company-banner-and-logo-wrapper">
                                        <div class="banner-wrapper edit-image-wrapper">
                                            <img id="company-banner" class="img-fluid banner-image" src="img/company-cover-default.png" alt="">
                                            <i id="edit-company-banner-btn" class="fa fa-camera" aria-hidden="true"></i>
                                            <div class="loading-container">
                                                <div class="loader"></div>
                                            </div>
                                            <input id="edit-company-banner-input" type="file" name="image" class="d-none" />
                                        </div><!-- banner-wrapper -->

                                        <div class="logo-wrapper  edit-image-wrapper">
                                            <img id="company-logo" class="img-fluid logo-image" src="img/company-logo-default.png" alt="">
                                            <i id="edit-company-logo-btn" class="fa fa-camera" aria-hidden="true"></i>
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

                        <!--  -->
                        <h3> VAT <br> Information </h3>

                        <section>


                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group mb-4 relative">
                                        <label class=" "> Tax Registration Number </label>
                                        <input type="text" class="form-control " placeholder="Tax Registration Number">
                                    </div><!-- form-group  -->
                                </div><!-- col-md-6 -->


                                <div class="col-md-6">

                                    <p> Vat Registration Status </p>
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
                                                <input type="radio" checked="checked" name="target-gender" value="1">
                                                <span class="checkmark"></span>
                                                Not Registered
                                            </label>
                                        </div><!-- option -->


                                    </div><!-- inline-items -->

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
                                        <input placeholder="Vat Expiration Date" type="text" name="checkIn" id="datepicker" class="form-control calendar">
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
                                            <a id="vat-proof-upload-btn" class="btn btn-custom2"> upload </a>
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
                                            <a id="tax-card-upload-btn" class="btn btn-custom2"> upload </a>
                                            <input id="tax-card-document-input" class="d-none" type="file" accept=".jpg,.jpeg.,.gif,.png,.mov,.mp4" />
                                        </div><!-- label-and-btn -->

                                        <div id="tax-card-thumbnails-wrapper" class="thumbnails-wrapper"></div>

                                        <input id="primary-asset-id" type="text" placeholder="primary asset id" class="d-none">

                                    </div><!-- form-group -->

                                </div> <!-- col-md-12 -->




                            </div><!-- row -->




                        </section>

                        <!--  -->
                        <h3> Business <br> Information </h3>
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
                                        <input placeholder="Commercial License Issue Date" type="text" name="checkIn" id="datepicker" class="form-control calendar">
                                    </div><!-- form-group  -->
                                </div><!-- col-md-6 -->


                                <div class="col-md-6">
                                    <div class="form-group mb-3 relative">
                                        <label class="text-left"> Commercial License Expiry Date </label>
                                        <input placeholder="Commercial License Expiry Date" type="text" name="checkIn" id="datepicker" class="form-control calendar">
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


                        <!--  -->
                        <h3> Bank <br> Account </h3>

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
                                            <a id="proof-upload-btn" class="btn btn-custom2"> upload </a>
                                            <input id="proof-document-input" class="d-none" type="file" accept=".jpg,.jpeg.,.gif,.png,.mov,.mp4" />
                                        </div><!-- label-and-btn -->

                                        <div id="proof-thumbnails-wrapper" class="thumbnails-wrapper"></div>

                                        <input id="primary-asset-id" type="text" placeholder="primary asset id" class="d-none">

                                    </div><!-- form-group -->

                                </div> <!-- col-md-12 -->



                            </div> <!-- row -->
                        </section>



                        <h3>Social <br> Links </h3>
                        <section>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group mb-4 relative">
                                        <label class=" "> Facebook </label>
                                        <input type="text" class="form-control " placeholder="Facebook">
                                    </div><!-- form-group  -->
                                </div><!-- col-md-6 -->

                                <div class="col-md-6">
                                    <div class="form-group mb-4 relative">
                                        <label class=" "> Linked In </label>
                                        <input type="text" class="form-control " placeholder="Linked In">
                                    </div><!-- form-group  -->
                                </div><!-- col-md-6 -->

                                <div class="col-md-6">
                                    <div class="form-group mb-4 relative">
                                        <label class=" "> Instagram </label>
                                        <input type="text" class="form-control " placeholder="Instagram">
                                    </div><!-- form-group  -->
                                </div><!-- col-md-6 -->

                                <div class="col-md-6">
                                    <div class="form-group mb-4 relative">
                                        <label class=" "> Website </label>
                                        <input type="text" class="form-control " placeholder="Website">
                                    </div><!-- form-group  -->
                                </div><!-- col-md-6 -->


                            </div> <!-- row -->

                        </section>
                    </div>
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