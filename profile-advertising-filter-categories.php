<?php include 'header.php'; ?>


<div class="page-content very-small-content profile categories">
    <div class="profile-content">
        <div class="profile-data w-100">
            <div class="container mt-4">
                <h3 class="bold mb-3"> Taps </h3>

                <div class="categories-wrapper">


                    <div class="select-all-wrapper">

                        <div class="custom-control-lg custom-control custom-checkbox mb-2">
                            <input class="custom-control-input" id="select-all" type="checkbox" />
                            <label class="custom-control-label" for="select-all">Select All Taps</label>
                        </div>

                    </div><!-- select-all-wrapper -->


                    <div class="form-container">

                        <form class="auth-form" action="test.php">


                            <div class="interests-container">
                                <button data-value="tv-show" type="button" class="btn btn-interests"> TV show </button>
                                <button data-value="music" type="button" class="btn btn-interests "> music </button>
                                <button data-value="books" type="button" class="btn btn-interests "> books </button>
                                <button data-value="sport" type="button" class="btn btn-interests "> sport </button>
                                <button data-value="shopping" type="button" class="btn btn-interests "> shopping </button>
                                <button data-value="movie" type="button" class="btn btn-interests "> movie </button>
                                <button data-value="games" type="button" class="btn btn-interests "> games </button>
                                <button data-value="social N." type="button" class="btn btn-interests "> social N. </button>
                                <button data-value="family" type="button" class="btn btn-interests "> family </button>
                                <button data-value="politics" type="button" class="btn btn-interests "> politics </button>
                                <button data-value="dance" type="button" class="btn btn-interests "> dance </button>
                                <button data-value="bars" type="button" class="btn btn-interests "> bars </button>
                                <button data-value="travel" type="button" class="btn btn-interests "> travel </button>
                                <button data-value="art" type="button" class="btn btn-interests "> art </button>
                            </div><!-- interests-container -->

                            <input class="d-none" id="my-interests-value" type="text" value="">

                            <div class="submit-btn-container">
                                <a href="#" class="btn btn-primary w-100 text-center" id="confirmation-btn"> Save </a>
                            </div><!-- submit-btn-container -->

                        </form><!-- auth-form -->

                    </div><!-- form-container -->




                </div><!-- categories-wrapper -->

            </div> <!-- container -->
        </div> <!-- profile-data -->
    </div> <!-- profile-content -->
</div><!-- page-content -->

<?php include 'footer.php'; ?>