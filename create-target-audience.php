<?php include 'header.php'; ?>



<!--    /*syntax highlighting*/-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/SyntaxHighlighter/3.0.83/styles/shCore.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/SyntaxHighlighter/3.0.83/styles/shThemeFadeToGrey.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/SyntaxHighlighter/3.0.83/scripts/shCore.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/SyntaxHighlighter/3.0.83/scripts/shBrushJScript.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/SyntaxHighlighter/3.0.83/scripts/shBrushCss.min.js"></script>


<link rel="stylesheet" href="tags/tags.css">



<div class="page-content small-content profile create-advertisement">
    <div class="profile-content">

        <div class="profile-data w-100">
            <div class="profile-data-content mt-4">

                <h3 class="bold mb-4"> Create Target Audience </h3>

                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group mb-3 relative">
                            <input type="text" class="form-control" placeholder="Target Name" id="name" required="">
                            <span class="invalid-feedback d-none "> This Field Is Required </span>
                        </div><!-- form-group  -->

                    </div><!-- col-md-6 -->
                    <div class="col-md-6">
                        <select id="select-main-category" class="select-main-category w-100">
                            <option></option>
                            <option value="1">Test 02</option>
                            <option value="1">Test 03</option>
                            <option value="1">Test 04</option>
                            <option value="1">Test 05</option>
                        </select>
                    </div><!-- col-md-6 -->


                    <div class="col-md-6">

                        <label for="target-gender"> Gender </label>

                        <div class="d-flex">
                            <div class="option mr-4">
                                <label class="option-container">
                                    <input type="radio" checked="checked" name="target-gender" value="1">
                                    <span class="checkmark"></span>
                                    Male
                                </label>
                            </div><!-- option -->


                            <div class="option mr-4">
                                <label class="option-container">
                                    <input type="radio" checked="checked" name="target-gender" value="1">
                                    <span class="checkmark"></span>
                                    Female
                                </label>
                            </div><!-- option -->

                            <div class="option mr-4">
                                <label class="option-container">
                                    <input type="radio" checked="checked" name="target-gender" value="1">
                                    <span class="checkmark"></span>
                                    Both
                                </label>
                            </div><!-- option -->
                        </div><!-- inline-items -->
                    </div> <!-- col-md-6 -->



                    <div class="col-md-6 mb-3">
                        <label for="target-age" class="mb-3"> Age </label>

                        <div class="slider-range-container">
                            <div id="sliderrange"></div>
                            <div class="slider-range-values">
                                <p class="start m-0"> 0 </p>
                                <p class="end m-0"> 100 </p>
                            </div><!-- slider-range-values -->

                            <input class="d-none" id="from_age" placeholder="From age" type="text">
                            <input class="d-none" id="to_age" placeholder="To age" type="text">
                        </div><!-- slider-range-container" -->
                    </div> <!-- col-md-6 -->

                </div><!-- row -->

                <div class="search-location-container mb-3 ">

                    <div class="form-group mb-3 relative">
                        <input type="text" class="form-control" placeholder="Search For Location" id="search-location">
                    </div><!-- form-group  -->

                    <div class="map-wrapper">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d218360.36364995778!2d29.814800765744582!3d31.224034935279008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c49126710fd3%3A0xb4e0cda629ee6bb9!2sAlexandria%2C%20Alexandria%20Governorate!5e0!3m2!1sen!2seg!4v1648074395392!5m2!1sen!2seg" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div><!-- map-wrapper -->

                </div><!-- search-location-container -->




                <!-- keywords V1 -->
                <div class="form-group mb-3 relative keyword-main-container v1 d-none">
                    <label for="target-gender"> Keyword </label>

                    <div class="keyword-input-container">
                        <input type="text" class="form-control mb-2" placeholder="Type Your Keyword" id="add-keyword-input">
                        <a class="add-keyword-btn d-none" id="add-keyword-btn" href="#"> Add </a>
                    </div><!-- keyword-input-container -->

                    <div class="keywords-list"></div><!-- keywords-list -->

                    <input type="text" class="form-control d-none" placeholder="all values here" id="keywordsFinal" id="">

                </div><!-- form-group  -->





                <!-- keywords V2 -->
                <div class="form-group mb-3 relative v2">
                    <label for="target-gender"> Keyword </label>


                    <div class="tags-input" id="myTags">
                        <span class="autocomplete">
                            <input class="form-control w-100" type="text">
                            <div class="autocomplete-items"></div>
                        </span> <!-- autocomplete -->
                        <span class="data">
                            <!-- <span class="tag"><span class="text" _value="Nairobi 047">Nairobi 047</span><span class="close">&times;</span></span>
                            <span class="tag"><span class="text" _value="24">Mombasa</span><span class="close">&times;</span></span> -->
                        </span> <!-- data -->
                    </div> <!-- myTags -->

                </div><!-- form-group  -->





                <div class="submit-btn-container text-center">
                    <a href="#" class="btn btn-custom1 text-center pl-5 pr-5" id="confirmation-btn"> Save </a>
                </div><!-- submit-btn-container -->

            </div><!-- profile-data-content -->
        </div><!-- profile-data -->
    </div><!-- profile-content -->
</div><!-- page-content -->


<?php include 'footer.php'; ?>

<script type="text/javascript" src="tags/tags.js"></script>

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