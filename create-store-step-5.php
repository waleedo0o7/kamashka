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
                        <li class="done"><a href="create-store-step-4.php"><span class="number">4</span> Bank <br> Account </a></li>
                        <li class="current last"><a href="create-store-step-5.php"><span class="number">5</span> Social <br> Links </a></li>
                    </ul>
                </div>

                <form id="" action="#">

                    <!-- STEP 5 -->

                    <!-- <h3>Social Links </h3> -->

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