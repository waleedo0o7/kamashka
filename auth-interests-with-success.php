<?php include 'header.php'; ?>

<div class="page-content auth-page interests-page">
    <div class="auth-page-content">
        <h3 class="mb-2 bold"> My Interests </h3>

        <div class="form-container">

            <form class="auth-form" action="test.php">


                <div class="interests-container">
                    <button data-value="tv-show" type="button" class="btn btn-interests"> TV show </button>
                    <button data-value="music"  type="button" class="btn btn-interests "> music </button>
                    <button data-value="books"  type="button" class="btn btn-interests "> books </button>
                    <button data-value="sport"  type="button" class="btn btn-interests "> sport </button>
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

                <!-- <select  id="my-interests-value" multiple>
                    <option value="tv-show">  tv-show </option>
                    <option value="tv-show">  music </option>
                    <option value="tv-show">  books </option>
                    <option value="tv-show">  sport </option>
                    <option value="tv-show">  shopping </option>
                </select> -->
                <div class="submit-btn-container">
                    <a href="#" class="btn btn-primary w-100 text-center" id="confirmation-btn"> Continue </a>
                </div><!-- submit-btn-container -->

            </form><!-- auth-form -->

        </div><!-- form-container -->

    </div><!-- auth-page-content -->

</div><!-- page-content  auth-page -->



<div class="action-success">
    <img alt="" src="img/success.gif" />
</div><!-- action-success -->

<?php include 'footer.php'; ?>