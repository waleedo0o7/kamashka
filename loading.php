<?php include 'header.php'; ?>

<div class="page-content small-content profile create-advertisement">
    <div class="profile-content">

        <div class="profile-data w-100">
            <div class="profile-data-content mt-4">

                <div class="loading-container">
                    <div class="sbl-circ-path sm"></div>
                </div><!-- loading-container -->

                <br /><br /><br />

                <div class="loading-container">
                    <div class="sbl-circ-path md"></div>
                </div><!-- loading-container -->

                <br /><br /><br />


                <div class="loading-container">
                    <div class="sbl-circ-path lg"></div>
                </div><!-- loading-container -->



            </div><!-- profile-data-content -->
        </div><!-- profile-data -->
    </div><!-- profile-content -->
</div><!-- page-content -->


<?php include 'footer.php'; ?>







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