<?php include 'admin-header.php'; ?>

<div class="page-content admin">

    <?php include 'admin-sidebar.php' ?>


    <div class="page-wrapper">

        <div class="page-header-wrapper">
            <h1 class="page-title"> Add New Category </h1>
        </div><!-- page-header-wrapper -->

        <div class="form-wrapper small-form">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3 relative">
                        <label for="" class=" bold"> Name (English) </label>
                        <input type="text" class="form-control" placeholder="Name (English)" id="name" required="">
                        <span class="invalid-feedback d-none "> This Field Is Required </span>
                    </div><!-- form-group  -->
                </div><!-- col-md-6 -->

                <div class="col-md-6">
                    <div class="form-group mb-3 relative">
                        <label for="" class=" bold"> Name (Arabic) </label>
                        <input type="text" class="form-control" placeholder="Name (Arabic)" id="name" required="">
                        <span class="invalid-feedback d-none "> This Field Is Required </span>
                    </div><!-- form-group  -->
                </div><!-- col-md-6 -->

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="" class=" bold"> Description (English) </label>
                        <textarea id="" class="form-control" name="" placeholder="Description (English)"></textarea>
                    </div>
                </div><!-- col-md-6 -->

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="" class=" bold"> Description (Arabic) </label>
                        <textarea id="" class="form-control" name="" placeholder="Description (Arabic)"></textarea>
                    </div>
                </div><!-- col-md-6 -->


                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="" class=" bold"> Product Tags </label>
                        <textarea id="" class="form-control" name="" placeholder="Product Tags"></textarea>
                    </div>
                </div><!-- col-md-12 -->

                <div class="col-md-12">
                    <div class="submit-btn-container text-center">
                        <a href="#" class="btn btn-custom1 text-center pl-5 pr-5 w-100" id=""> Add Category </a>
                    </div><!-- submit-btn-container -->
                </div>

            </div><!-- row -->
        </div><!-- form-wrapper -->

    </div><!-- page-wrapper -->
</div><!-- page-content -->

<?php include 'admin-footer.php'; ?>







<!-- Delete Modal Start -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog  " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel"> Delete </h5>
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
                <a href="#" class="btn btn-custom1 via" data-via="1"> Yes </a>
                <a href="#" class="btn btn-custom5 via" data-via="2"> No </a>
            </div><!-- modal-footer -->
        </div> <!-- modal-content -->
    </div> <!-- modal-dialog -->
</div> <!-- Delete Modal END -->