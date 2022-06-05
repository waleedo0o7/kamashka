<?php include 'admin-header.php'; ?>

<style>

</style>

<div class="page-content admin">

    <?php include 'admin-sidebar.php' ?>

    <div class="page-wrapper">

        <div class="page-header-wrapper">
            <h1 class="page-title"> Add New Product </h1>
        </div><!-- page-header-wrapper -->

        <div class="form-wrapper">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-4 relative">
                                <label class=" "> Product Name (English Title) </label>
                                <input type="text" class="form-control" placeholder="Product Name (English Title)" id="name">
                            </div><!-- form-group  -->
                        </div><!-- col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group mb-4 relative">
                                <label class=" "> Product Name (Arabic Title) </label>
                                <input type="text" class="form-control" placeholder="Product Name (Arabic Title)" id="name">
                            </div><!-- form-group  -->
                        </div><!-- col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label class=" "> Description (English) </label>
                                <textarea class="form-control" placeholder="Description (English)"></textarea>
                            </div>
                        </div><!-- col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label class=" "> Description (Arabic) </label>
                                <textarea class="form-control" placeholder="Description (Arabic)"></textarea>
                            </div>
                        </div><!-- col-md-6 -->


                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label class=" "> Select Store Tap </label>
                                <select class="form-control">
                                    <option>Kids</option>
                                    <option>category 2</option>
                                    <option>category 3</option>
                                    <option>category 4</option>
                                    <option>category 5</option>
                                </select>
                            </div>
                        </div><!-- col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group mb-4 relative">
                                <label class=" "> Quantity </label>
                                <input type="text" class="form-control" placeholder="Quantity" id="name">
                            </div><!-- form-group  -->
                        </div><!-- col-md-6 -->






                        <div class="col-md-6">
                            <div class="form-group mb-4 relative">
                                <label class=" "> Old Price (In Kd) </label>
                                <input type="text" class="form-control" placeholder="Old Price (In Kd)" id="name">
                            </div><!-- form-group  -->
                        </div><!-- col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group mb-4 relative">
                                <label class=" "> New Price (In Kd) </label>
                                <input type="text" class="form-control" placeholder="New Price (In Kd)" id="name">
                            </div><!-- form-group  -->
                        </div><!-- col-md-6 -->







                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label class=" "> Return Policy (English) </label>
                                <textarea class="form-control" placeholder="Return Policy (English)"></textarea>
                            </div>
                        </div><!-- col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label class=" "> Return Policy (Arabic) </label>
                                <textarea class="form-control" placeholder="Return Policy (Arabic)"></textarea>
                            </div>
                        </div><!-- col-md-6 -->












                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label class=" "> Warranty Information (English) </label>
                                <textarea class="form-control" placeholder="Warranty Information (English)"></textarea>
                            </div>
                        </div><!-- col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label class=" "> Warranty Information (Arabic) </label>
                                <textarea class="form-control" placeholder="Warranty Information (Arabic)"></textarea>
                            </div>
                        </div><!-- col-md-6 -->



                        <div class="col-md-12 mb-4">
                            <div class="form-group mb-4">
                                <label class=" "> Product Tags </label>
                                <textarea class="form-control" placeholder="Product Tags"></textarea>
                            </div>
                        </div><!-- col-md-12 -->

                        <div class="col-md-12 mb-3">
                            <h1 class="page-title"> Product Type </h1>
                        </div><!-- col-md-12 -->

                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label class=" "> Select Category </label>
                                <select class="form-control">
                                    <option>Electroinc</option>
                                    <option>category 2</option>
                                    <option>category 3</option>
                                    <option>category 4</option>
                                    <option>category 5</option>
                                </select>
                            </div>
                        </div><!-- col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label class=" "> Select Sub Category </label>
                                <select class="form-control">
                                    <option>Mobiles</option>
                                    <option>category 2</option>
                                    <option>category 3</option>
                                    <option>category 4</option>
                                    <option>category 5</option>
                                </select>
                            </div>
                        </div><!-- col-md-6 -->

                        <div class="col-md-12">
                            <div class="products-attr-wrapper">
                                <div class="one-item">

                                    <div class="select-product-attribute-col">
                                        <div class="form-group mb-4">
                                            <label class=" "> Select Product Attribute </label>
                                            <select class="form-control mb-2">
                                                <option>Color</option>
                                                <option>Attribute 2</option>
                                                <option>Attribute 3</option>
                                                <option>Attribute 4</option>
                                                <option>Attribute 5</option>
                                            </select>
                                        </div><!-- form-group -->
                                    </div><!-- select-product-attribute-col -->

                                    <div class="attribute-value-col">
                                        <div class="form-group mb-4 attribute-value-wrapper">
                                            <label class=" "> Attribute Value </label>
                                            <input type="text" class="form-control mb-2" placeholder="Attribute">
                                        </div><!-- form-group  -->
                                    </div><!-- attribute-value-col -->

                                    <div class="add-attribute-wrapper">
                                        <i class="add-attribute-btn fa fa-plus"></i>
                                    </div><!-- add-attribute-wrapper -->

                                </div><!-- one-item -->
                            </div><!-- products-attr-wrapper -->
                        </div><!-- col-md-6 -->
                    </div><!-- row -->



                </div><!-- col-md-8 -->
                <div class="col-md-4">

                    <div class="upload-store-images-wrapper card p-3">

                        <div class="image-wrapper main-image">
                            <img alt="" class="img-fluid" id="imagePreview1" src="img/store.png" alt="">
                            <i class="icon icon-edit" id="imageEdit1"></i>
                            <div class="loading-container">
                                <div class="loader"></div>
                            </div>
                            <input id="imageUpload1" type="file" name="image" class="d-none" />
                        </div> <!-- image-wrapper main-image  -->



                        <div class="image-wrapper ">
                            <img alt="" class="img-fluid" id="imagePreview2" src="img/store.png" alt="">
                            <i class="icon icon-edit" id="imageEdit2"></i>
                            <div class="loading-container">
                                <div class="loader"></div>
                            </div>
                            <input id="imageUpload2" type="file" name="image" class="d-none" />
                        </div> <!-- image-wrapper  -->

                        <div class="image-wrapper ">
                            <img alt="" class="img-fluid" id="imagePreview3" src="img/store.png" alt="">
                            <i class="icon icon-edit" id="imageEdit3"></i>
                            <div class="loading-container">
                                <div class="loader"></div>
                            </div>
                            <input id="imageUpload3" type="file" name="image" class="d-none" />
                        </div> <!-- image-wrapper  -->

                        <div class="image-wrapper ">
                            <img alt="" class="img-fluid" id="imagePreview4" src="img/store.png" alt="">
                            <i class="icon icon-edit" id="imageEdit4"></i>
                            <div class="loading-container">
                                <div class="loader"></div>
                            </div>
                            <input id="imageUpload4" type="file" name="image" class="d-none" />
                        </div> <!-- image-wrapper  -->

                        <div class="image-wrapper ">
                            <img alt="" class="img-fluid" id="imagePreview5" src="img/store.png" alt="">
                            <i class="icon icon-edit" id="imageEdit5"></i>
                            <div class="loading-container">
                                <div class="loader"></div>
                            </div>
                            <input id="imageUpload5" type="file" name="image" class="d-none" />
                        </div> <!-- image-wrapper  -->

                        <div class="image-wrapper ">
                            <img alt="" class="img-fluid" id="imagePreview6" src="img/store.png" alt="">
                            <i class="icon icon-edit" id="imageEdit6"></i>
                            <div class="loading-container">
                                <div class="loader"></div>
                            </div>
                            <input id="imageUpload6" type="file" name="image" class="d-none" />
                        </div> <!-- image-wrapper  -->

                        <div class="image-wrapper ">
                            <img alt="" class="img-fluid" id="imagePreview7" src="img/store.png" alt="">
                            <i class="icon icon-edit" id="imageEdit7"></i>
                            <div class="loading-container">
                                <div class="loader"></div>
                            </div>
                            <input id="imageUpload7" type="file" name="image" class="d-none" />
                        </div> <!-- image-wrapper  -->

                    </div><!-- upload-store-images-wrapper -->

                </div><!-- col-md-4 -->


                <div class="col-md-12 mb-5">
                    <div class="submit-btn-container text-center">
                        <a href="#" class="btn btn-custom1 text-center pl-5 pr-5 "> Add Product </a>
                    </div><!-- submit-btn-container -->
                </div>
            </div><!-- row -->
        </div><!-- form-wrapper -->

    </div><!-- page-wrapper -->
</div><!-- page-content -->

<?php include 'admin-footer.php'; ?>

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
                <a href="#" class="btn btn-custom1 via"> Yes </a>
                <a href="#" class="btn btn-custom5 via"> No </a>
            </div><!-- modal-footer -->
        </div> <!-- modal-content -->
    </div> <!-- modal-dialog -->
</div> <!-- Delete Modal END -->