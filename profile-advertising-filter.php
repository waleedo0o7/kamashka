<?php include 'header.php'; ?>


<div class="page-content very-small-content profile advertising-filter">
    <div class="profile-content">
        <div class="profile-data w-100">
            <div class="container mt-4">
                <h3 class="bold mb-3"> Advertising Filter </h3>

                <div class="advertising-filter-wrapper">

                    <div class="card p-3">

                        <div class="item pt-0">
                            <p class="d-flex mb-0">
                                <a href="profile-advertising-filter-categories.php" class="colored1"> Taps </a>
                                <a href="profile-advertising-filter-categories.php" class="ml-auto"> <i class="fa arrow-icon fa-chevron-right "></i></a>
                            </p>
                        </div><!-- item -->


                        <div class="item">
                            <p class="d-flex mb-0">
                                <a href="profile-advertising-filter-interests.php" class="colored1"> Interests </a>
                                <a href="profile-advertising-filter-interests.php" class="ml-auto"> <i class="fa arrow-icon fa-chevron-right "></i></a>
                            </p>
                        </div><!-- item -->


                        <div class="item">

                            <p> Gender </p>

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

                            </div><!-- inline-items -->
                        </div><!-- item -->


                        <div class="item">
                            <label class="mb-3"> Age Range </label>

                            <div class="slider-range-container">
                                <div id="age-slider-range" class="slider-range"></div>
                                <div class="slider-range-values mb-0">
                                    <p class="m-0"> <span class="start "> 0 </span> </p>
                                    <p class="m-0"> <span class="end"> 100 </span> </p>
                                </div><!-- slider-range-values -->

                                <input class="d-none" id="age-from" placeholder="From age" type="text">
                                <input class="d-none" id="age-to" placeholder="To age" type="text">
                            </div><!-- slider-range-container" -->
                        </div><!-- item -->



                        <div class="item last-item">
                            <label class="mb-3"> Share Value </label>

                            <div class="slider-range-container">
                                <div id="share-slider-range" class="slider-range"></div>
                                <div class="slider-range-values mb-0">
                                    <p class="m-0"> <span class="start "> 0 </span> KD</p>
                                    <p class="m-0"> <span class="end"> 100 </span> KD </p>
                                </div><!-- slider-range-values -->

                                <input class="d-none" id="share-from" placeholder="From age" type="text">
                                <input class="d-none" id="share-to" placeholder="To age" type="text">
                            </div><!-- slider-range-container" -->
                        </div><!-- item -->





                        <div class="submit-btn-container">
                            <!-- <a href="#" class="btn btn-custom1 w-100 text-center" id="confirmation-btn" data-toggle="modal" data-target="#confirmation"> Next </a> -->
                            <button type="submit" class="btn btn-custom1 w-100 text-center"> Filter </button>
                        </div><!-- submit-btn-container -->

                    </div><!-- card -->



                </div><!-- advertising-filter-wrapper -->

            </div> <!-- profile-data-content -->
        </div> <!-- profile-data -->
    </div> <!-- profile-content -->
</div><!-- page-content -->

<?php include 'footer.php'; ?>