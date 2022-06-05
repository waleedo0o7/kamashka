<?php include 'shipping-header.php'; ?>

<div class="page-content admin company-profile edit">

    <?php include 'shipping-sidebar.php' ?>

    <div class="page-wrapper">

        <div class="page-header-wrapper">
            <h1 class="page-title">Edit Company Profile </h1>
        </div><!-- page-header-wrapper -->

        <div class="form-wrapper">

            <div class="row">
                <div class="col-md-12">
                    <div class="company-banner-and-logo-wrapper">
                        <div class="banner-wrapper edit-image-wrapper">
                            <img id="company-banner" class="img-fluid banner-image" src="img/big-banner02.png" alt="">
                            <i id="edit-company-banner-btn" class="fa fa-camera" aria-hidden="true"></i>
                            <div class="loading-container">
                                <div class="loader"></div>
                            </div>
                            <input id="edit-company-banner-input" type="file" name="image" class="d-none" />
                        </div><!-- banner-wrapper -->

                        <div class="logo-wrapper  edit-image-wrapper">
                            <img id="company-logo" class="img-fluid logo-image" src="img/brand-logo-02.jpg" alt="">
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
                        <label class=" "> Company Name (English) </label>
                        <input type="text" class="form-control" placeholder="Company Name (English)">
                    </div><!-- form-group  -->
                </div><!-- col-md-6 -->

                <div class="col-md-6">
                    <div class="form-group mb-4 relative">
                        <label class=" "> Company Name (Arabic) </label>
                        <input type="text" class="form-control" placeholder="Company Name (Arabic)">
                    </div><!-- form-group  -->
                </div><!-- col-md-6 -->


                <div class="col-md-6">
                    <div class="form-group mb-4 relative">
                        <label class=" "> Email </label>
                        <input type="text" class="form-control" placeholder="Email">
                    </div><!-- form-group  -->
                </div><!-- col-md-6 -->


                <div class="col-md-6">
                    <div class="form-group mb-4 relative">
                        <label class=" "> Company Website </label>
                        <input type="text" class="form-control" placeholder="Company Website">
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
                        <label class=" "> Company Phone (For Customer Support) </label>
                        <input type="text" class="form-control" placeholder="Company Phone (For Customer Support)">
                    </div><!-- form-group  -->
                </div><!-- col-md-6 -->


                <div class="col-md-6">
                    <div class="form-group mb-4">
                        <label class=" ">City </label>
                        <select class="form-control">
                            <option>City 1</option>
                            <option>City 2</option>
                            <option>City 3</option>
                            <option>City 4</option>
                            <option>City 5</option>
                        </select>
                    </div>
                </div><!-- col-md-6 -->


                <div class="col-md-6">
                    <div class="form-group mb-4 relative">
                        <label class=" "> Number Of Drivers </label>
                        <input type="text" class="form-control" placeholder="Number Of Drivers">
                    </div><!-- form-group  -->
                </div><!-- col-md-6 -->

 
                <div class="col-md-12 mb-5">

                    <div class="search-location-container mb-3 ">

                        <div class="form-group mb-3 relative">
                            <label class=" "> Address </label>
                            <input type="text" class="form-control" placeholder="Search For Location" id="search-location">
                        </div><!-- form-group  -->

                        <div class="map-wrapper w-100">
                            <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d218360.36364995778!2d29.814800765744582!3d31.224034935279008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c49126710fd3%3A0xb4e0cda629ee6bb9!2sAlexandria%2C%20Alexandria%20Governorate!5e0!3m2!1sen!2seg!4v1648074395392!5m2!1sen!2seg" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div><!-- map-wrapper -->

                    </div><!-- search-location-container -->

                </div> <!-- col-md-12 mb-5 -->
                <div class="col-md-12 mb-5">
                    <div class="working-days-wrapper">
                        <label class="mb-4"> Working Days </label>

                        <div class="options">

                            <div class=" form-check-inline custom-control-lg custom-control custom-checkbox mb-2">
                                <input class="custom-control-input" id="sunday" type="checkbox" />
                                <label class="custom-control-label" for="sunday">Sunday</label>
                            </div>

                            <div class=" form-check-inline custom-control-lg custom-control custom-checkbox mb-2">
                                <input class="custom-control-input" id="monday" type="checkbox" />
                                <label class="custom-control-label" for="monday">Monday</label>
                            </div>

                            <div class=" form-check-inline custom-control-lg custom-control custom-checkbox mb-2">
                                <input class="custom-control-input" id="tuesday" type="checkbox" />
                                <label class="custom-control-label" for="tuesday">Tuesday</label>
                            </div>

                            <div class=" form-check-inline custom-control-lg custom-control custom-checkbox mb-2">
                                <input class="custom-control-input" id="wednesday" type="checkbox" />
                                <label class="custom-control-label" for="wednesday">Wednesday</label>
                            </div>
                            
                            <div class=" form-check-inline custom-control-lg custom-control custom-checkbox mb-2">
                                <input class="custom-control-input" id="thursday" type="checkbox" />
                                <label class="custom-control-label" for="thursday">Thursday</label>
                            </div>
                            
                            <div class=" form-check-inline custom-control-lg custom-control custom-checkbox mb-2">
                                <input class="custom-control-input" id="friday" type="checkbox" />
                                <label class="custom-control-label" for="friday">Friday</label>
                            </div>
                            
                            <div class=" form-check-inline custom-control-lg custom-control custom-checkbox mb-2">
                                <input class="custom-control-input" id="saturday" type="checkbox" />
                                <label class="custom-control-label" for="saturday">Saturday</label>
                            </div>
                            
                        </div><!-- options -->

                    </div><!-- working-days-wrapper -->
                </div> <!-- col-md-12 mb-5 -->

                <div class="col-md-12 mb-5">
                    <div class="submit-btn-container text-center">
                        <a href="#" class="btn btn-custom1 text-center pl-5 pr-5 "> Save</a> 
                    </div><!-- submit-btn-container -->
                </div>

            </div><!-- row -->
        </div><!-- form-wrapper -->
    </div><!-- page-wrapper -->

</div><!-- page-content -->

<?php include 'shipping-footer.php'; ?>