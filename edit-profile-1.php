<?php include 'header.php'; ?>

<div class="page-content profile edit-profile1">
    <div class="profile-content">
        <div class="profile-sidebar">

            <div class="profile-header">
                <div class="completeness-percentage-container">
                    <div class="completeness-percentage" data-percentage="75">
                        75%
                    </div><!-- completeness-percentage -->
                </div><!-- completeness-percentage-container -->
                <a href="edit-profile-2.php" class="btn btn-custom1 btn-lg"> Edit Profile </a>
            </div><!-- profile-header -->

            <div class="profile-info">
                <div class="image-and-data">
                    <div class="image-container relative">
                        <div class="image text-center ">
                            <img id="profile-image" class="img-fluid" src="img/person04.jpg" alt="">
                        </div><!-- image -->
                        <div class="change-image-container">
                            <i class="icon icon-edit"></i>
                            <input id="change-profile-image" class="d-none" type="file" accept="image/png, image/gif, image/jpeg">
                        </div><!-- change-image-container -->
                    </div><!-- image-container -->
                    <div class="data">
                        <h1 class="name"> Amr Abd Alhady </h1>
                        <p class="lead"> janedoe123@email.com </p>
                        <p class="bold"> 01273495477 </p>

                    </div><!-- data -->
                </div><!-- image-and-data -->

                <div class="profile-info-slider-container mt-3">
                    <div class="profile-info-slider">

                        <div class="item">
                            <div class=" item-content">
                                <p class="title"> Gender </p>
                                <p class="value"> Male </p>
                            </div><!-- card -->
                        </div> <!-- item -->


                        <div class="item">
                            <div class=" item-content">
                                <p class="title"> Age </p>
                                <p class="value"> 30 </p>
                            </div><!-- card -->
                        </div> <!-- item -->


                        <div class="item">
                            <div class=" item-content">
                                <p class="title"> Job </p>
                                <p class="value"> Artist </p>
                            </div><!-- card -->
                        </div> <!-- item -->


                        <div class="item">
                            <div class=" item-content">
                                <p class="title"> Title </p>
                                <p class="value"> Value </p>
                            </div><!-- card -->
                        </div> <!-- item -->


                        <div class="item">
                            <div class=" item-content">
                                <p class="title"> Title </p>
                                <p class="value"> Value </p>
                            </div><!-- card -->
                        </div> <!-- item -->

                    </div> <!-- owl-carousel -->
                </div> <!-- brand-slider-container -->

            </div><!-- profile-info -->

        </div><!-- profile-sidebar -->

        <div class="profile-data">
            <div class="profile-data-content">
                <div class="card p-3 mb-3">
                    <div class="form-group">
                        <label for="about-me" class="lead bold"> About Me </label>
                        <textarea id="about-me" class="form-control" name="" placeholder="About Your Self ..."></textarea>
                    </div><!-- form-group -->
                </div> <!-- card -->

                <div class="card interests p-3 mb-3">
                    <div class="card-header d-flex">
                        <label for="about-me" class="lead bold"> Interests </label>
                        <a href="auth-interests.php" class="btn btn-custom1 btn-lg"> Edit </a>
                    </div><!-- card-header -->

                    <div class="interests-container">
                        <button data-value="tv-show" type="button" class="btn btn-interests"> TV show </button>
                        <button data-value="music" type="button" class="btn btn-interests "> music </button>
                        <button data-value="books" type="button" class="btn btn-interests "> books </button>
                        <button data-value="sport" type="button" class="btn btn-interests "> sport </button>
                        <button data-value="shopping" type="button" class="btn btn-interests "> shopping </button>
                        <button data-value="movie" type="button" class="btn btn-interests "> movie </button>
                    </div><!-- interests-container -->


                </div> <!-- card -->

                <div class="card p-3 mb-3">
                    <div class="form-group">
                        <label for="about-me" class=""> Country </label>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option value="1">kuwait</option>
                            <option value="1">Saudi Arabia</option>
                            <option value="1">United Arab Emirates</option>
                        </select>
                    </div><!-- form-group -->

                    <div class="form-group">
                        <label for="about-me" class=""> City </label>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option value="1">Select City</option>
                            <option value="1">Saudi Arabia</option>
                            <option value="1">United Arab Emirates</option>
                        </select>
                    </div><!-- form-group -->

                    <div class="form-group">
                        <label for="about-me" class=""> Area </label>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option value="1">Select Area</option>
                            <option value="1">Saudi Arabia</option>
                            <option value="1">United Arab Emirates</option>
                        </select>
                    </div><!-- form-group -->

                </div> <!-- card -->



                <div class="card p-3 mb-3">
                    <div class="form-group">
                        <label for="about-me" class=""> Job Category </label>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option value="1">Select Category</option>
                            <option value="1">Saudi Arabia</option>
                            <option value="1">United Arab Emirates</option>
                        </select>
                    </div><!-- form-group -->


                    <div class="form-group">
                        <label for="about-me" class=""> Job Title </label>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option value="1">Select Title</option>
                            <option value="1">Saudi Arabia</option>
                            <option value="1">United Arab Emirates</option>
                        </select>
                    </div><!-- form-group -->

                </div> <!-- card -->


                <div class="submit-btn-container text-center">
                    <button href="#" class="btn btn-custom1 text-center pl-5 pr-5"> save </button>
                </div> <!-- submit-btn-container -->

            </div><!-- profile-data-content -->
        </div><!-- profile-data -->

    </div><!-- profile-content -->
</div><!-- page-content -->


<?php include 'footer.php'; ?>

<script>
    profileInfoSlider();
</script>