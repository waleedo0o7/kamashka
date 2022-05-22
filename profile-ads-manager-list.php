<?php include 'header.php'; ?>

<div class="top-bar-wrapper">
    <div class="top-bar ads-manager">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="headline"> Ads Manager </h3>
                </div> <!-- col-md-4 -->
                <div class="col-md-8">
                    <div class="content">
                        <div class="search-wrapper">
                            <input placeholder="Search For Adv Title" class="search form-control" type="text">
                            <i class="fa fa-search"></i>
                        </div><!-- search-wrapper -->
                        <a href="profile-ads-manager-home.php"><i class="sort icon icon-filter"></i><!-- icon --></a>
                    </div><!-- content -->
                </div> <!-- col-md-8 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- top-bar ads-manager -->
</div><!-- top-bar-wrapper -->

<div class="page-content ads-manager-page-list bg-gray">
    <div class="container">
        <div class="all-ads-wrapper">
            <div class="row">

                <div class="col-md-4">
                    <div class="one-adv card p-3">

                        <div class="post-header">
                            <h4 class="bold"> Laptop Hp </h4>
                            <div class="actions">

                                <!-- Default dropleft button -->
                                <div class="btn-group dropleft">
                                    <button type="button" class="reset-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" >

                                        <!--  IF ADV ACTIVE  -->
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#republishModal"> Republish Adv </a>
                                        <a class="dropdown-item" href="profile-ads-manager-list-ads-statistics.php"> Adv Statistics</a>

                                        <div class="dropdown-divider"></div>

                                        <!--  IF ADV FINISHED  -->
                                        <a class="dropdown-item" href="create-adv.php"> Edit Ads</a>
                                        <a class="dropdown-item" href="" data-toggle="modal" data-target="#budgetModal"> Increase / Decrease Budget</a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#deleteAdvModal"> Stop Adv</a>
                                        <a class="dropdown-item" href="profile-ads-manager-list-ads-statistics.php"> Adv Statistics</a>
                                    </div>
                                </div> <!-- btn-group -->

                            </div><!-- actions -->
                        </div> <!-- post-header -->

                        <div class="post-details">

                            <div class="item">
                                <div class="title"> Active </div><!-- title -->

                                <div class="value">
                                    <label class="toggle custom-switch">
                                        <input type="checkbox" class="toggle__input">
                                        <span class="toggle-track m-0">
                                            <span class="toggle-indicator">
                                                <!-- 	This check mark is optional	 -->
                                                <span class="checkMark">
                                                    <svg viewBox="0 0 24 24"  role="presentation" aria-hidden="true">
                                                        <path d="M9.86 18a1 1 0 01-.73-.32l-4.86-5.17a1.001 1.001 0 011.46-1.37l4.12 4.39 8.41-9.2a1 1 0 111.48 1.34l-9.14 10a1 1 0 01-.73.33h-.01z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div><!-- value -->
                            </div> <!-- item -->


                            <div class="item">
                                <div class="title"> Status </div><!-- title -->
                                <div class="value">
                                    <div class="label-custom label-custom1" role="alert"> Active </div>
                                </div><!-- value -->
                            </div> <!-- item -->

                            <div class="item">
                                <div class="title"> Budget </div><!-- title -->
                                <div class="value">1000 Kd</div><!-- value -->
                            </div> <!-- item -->

                            <div class="item">
                                <div class="title"> Date </div><!-- title -->
                                <div class="value"> 20/2/2021 </div><!-- value -->
                            </div> <!-- item -->

                            <div class="item">
                                <div class="title"> Gender </div><!-- title -->
                                <div class="value"> Both </div><!-- value -->
                            </div> <!-- item -->

                            <div class="item">
                                <div class="title"> Age Range </div><!-- title -->
                                <div class="value"> 18 To 60 </div><!-- value -->
                            </div> <!-- item -->

                            <div class="item">
                                <div class="title"> Location </div><!-- title -->
                                <div class="value"> Alexandria </div><!-- value -->
                            </div> <!-- item -->

                            <div class="item">
                                <div class="title"> Views </div><!-- title -->
                                <div class="value"> 3000 </div><!-- value -->
                            </div> <!-- item -->

                            <div class="item">
                                <div class="title"> Shares </div><!-- title -->
                                <div class="value"> 300 </div><!-- value -->
                            </div> <!-- item -->

                        </div><!-- post-details -->
                    </div><!-- one-adv -->
                </div><!-- col-md-4 -->

                <div class="col-md-4">
                    <div class="one-adv card p-3">

                        <div class="post-header">
                            <h4 class="bold"> Laptop Hp </h4>
                            <div class="actions">

                                <!-- Default dropleft button -->
                                <div class="btn-group dropleft">
                                    <button type="button" class="reset-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" >

                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#republishModal"> Republish Adv </a>
                                        <a class="dropdown-item" href="profile-ads-manager-list-ads-statistics.php"> Adv Statistics</a>

                                        <div class="dropdown-divider"></div>

                                        <a class="dropdown-item" href="create-adv.php"> Edit Ads</a>
                                        <a class="dropdown-item" href="" data-toggle="modal" data-target="#budgetModal"> Increase / Decrease Budget</a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#deleteAdvModal"> Stop Adv</a>
                                        <a class="dropdown-item " href="" data-toggle="modal" data-target="#toggleActivationAdvModal"> test toggle Activation Adv Modal</a>
                                        <a class="dropdown-item" href="profile-ads-manager-list-ads-statistics.php"> Adv Statistics</a>
                                    </div>
                                </div> <!-- btn-group -->

                            </div><!-- actions -->
                        </div> <!-- post-header -->

                        <div class="post-details">

                            <div class="item">
                                <div class="title"> Active </div><!-- title -->

                                <div class="value">
                                    <label class="toggle custom-switch">
                                        <input type="checkbox" class="toggle__input" checked>
                                        <span class="toggle-track m-0">
                                            <span class="toggle-indicator">
                                                <!-- 	This check mark is optional	 -->
                                                <span class="checkMark">
                                                    <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true">
                                                        <path d="M9.86 18a1 1 0 01-.73-.32l-4.86-5.17a1.001 1.001 0 011.46-1.37l4.12 4.39 8.41-9.2a1 1 0 111.48 1.34l-9.14 10a1 1 0 01-.73.33h-.01z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div><!-- value -->
                            </div> <!-- item -->

                            <div class="item">
                                <div class="title"> Status </div><!-- title -->
                                <div class="value">
                                    <div class="label-custom label-custom1" role="alert"> Active </div>
                                </div><!-- value -->
                            </div> <!-- item -->

                            <div class="item">
                                <div class="title"> Budget </div><!-- title -->
                                <div class="value">1000 Kd</div><!-- value -->
                            </div> <!-- item -->

                            <div class="item">
                                <div class="title"> Date </div><!-- title -->
                                <div class="value"> 20/2/2021 </div><!-- value -->
                            </div> <!-- item -->

                            <div class="item">
                                <div class="title"> Gender </div><!-- title -->
                                <div class="value"> Both </div><!-- value -->
                            </div> <!-- item -->

                            <div class="item">
                                <div class="title"> Age Range </div><!-- title -->
                                <div class="value"> 18 To 60 </div><!-- value -->
                            </div> <!-- item -->

                            <div class="item">
                                <div class="title"> Location </div><!-- title -->
                                <div class="value"> Alexandria </div><!-- value -->
                            </div> <!-- item -->

                            <div class="item">
                                <div class="title"> Views </div><!-- title -->
                                <div class="value"> 3000 </div><!-- value -->
                            </div> <!-- item -->

                            <div class="item">
                                <div class="title"> Shares </div><!-- title -->
                                <div class="value"> 300 </div><!-- value -->
                            </div> <!-- item -->

                        </div><!-- post-details -->
                    </div><!-- one-adv -->
                </div><!-- col-md-4 -->

                <div class="col-md-4">
                    <div class="one-adv card p-3">

                        <div class="post-header">
                            <h4 class="bold"> Laptop Hp </h4>
                            <div class="actions">

                                <!-- Default dropleft button -->
                                <div class="btn-group dropleft">
                                    <button type="button" class="reset-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" >

                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#republishModal"> Republish Adv </a>
                                        <a class="dropdown-item" href="profile-ads-manager-list-ads-statistics.php"> Adv Statistics</a>

                                        <div class="dropdown-divider"></div>

                                        <a class="dropdown-item" href="create-adv.php"> Edit Ads</a>
                                        <a class="dropdown-item" href="" data-toggle="modal" data-target="#budgetModal"> Increase / Decrease Budget</a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#deleteAdvModal"> Stop Adv</a>
                                        <a class="dropdown-item" href="profile-ads-manager-list-ads-statistics.php"> Adv Statistics</a>
                                    </div>
                                </div> <!-- btn-group -->

                            </div><!-- actions -->
                        </div> <!-- post-header -->

                        <div class="post-details">

                            <div class="item">
                                <div class="title"> Active </div><!-- title -->

                                <div class="value">
                                    <label class="toggle custom-switch">
                                        <input type="checkbox" class="toggle__input">
                                        <span class="toggle-track m-0">
                                            <span class="toggle-indicator">
                                                <!-- 	This check mark is optional	 -->
                                                <span class="checkMark">
                                                    <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true">
                                                        <path d="M9.86 18a1 1 0 01-.73-.32l-4.86-5.17a1.001 1.001 0 011.46-1.37l4.12 4.39 8.41-9.2a1 1 0 111.48 1.34l-9.14 10a1 1 0 01-.73.33h-.01z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div><!-- value -->
                            </div> <!-- item -->

                            <div class="item">
                                <div class="title"> Status </div><!-- title -->
                                <div class="value">
                                    <div class="label-custom label-custom2" role="alert"> Finished </div>
                                </div><!-- value -->
                            </div> <!-- item -->

                            <div class="item">
                                <div class="title"> Budget </div><!-- title -->
                                <div class="value">1000 Kd</div><!-- value -->
                            </div> <!-- item -->

                            <div class="item">
                                <div class="title"> Date </div><!-- title -->
                                <div class="value"> 20/2/2021 </div><!-- value -->
                            </div> <!-- item -->

                            <div class="item">
                                <div class="title"> Gender </div><!-- title -->
                                <div class="value"> Both </div><!-- value -->
                            </div> <!-- item -->

                            <div class="item">
                                <div class="title"> Age Range </div><!-- title -->
                                <div class="value"> 18 To 60 </div><!-- value -->
                            </div> <!-- item -->

                            <div class="item">
                                <div class="title"> Location </div><!-- title -->
                                <div class="value"> Alexandria </div><!-- value -->
                            </div> <!-- item -->

                            <div class="item">
                                <div class="title"> Views </div><!-- title -->
                                <div class="value"> 3000 </div><!-- value -->
                            </div> <!-- item -->

                            <div class="item">
                                <div class="title"> Shares </div><!-- title -->
                                <div class="value"> 300 </div><!-- value -->
                            </div> <!-- item -->

                        </div><!-- post-details -->
                    </div><!-- one-adv -->
                </div><!-- col-md-4 -->

            </div><!-- row -->

        </div><!-- all-ads-wrapper -->

    </div><!-- container -->

</div><!-- page-content -->





<!-- republishModal Modal Start -->
<div class="modal fade" id="republishModal" tabindex="-1" role="dialog">
    <div class="modal-dialog  " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="deleteModalLabel"> Delete </h5> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="icon icon-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="delete-container mt-4">
                    <p class="text-center lead"> You can edit the adv before republishing it <br /> do you want to perform this action? </p>
                </div> <!-- delete-container -->
            </div> <!-- modal-body -->
            <div class="modal-footer">
                <a href="#" class="btn btn-custom1 via"> Yes, I Want To Edit </a>
                <a href="#" class="btn btn-custom5 via"> No </a>
            </div><!-- modal-footer -->
        </div> <!-- modal-content -->
    </div> <!-- modal-dialog -->
</div> <!-- republishModal Modal END -->

<!-- budgetModal  Modal Start -->
<div class="modal fade" id="budgetModal" tabindex="-1" role="dialog">
    <div class="modal-dialog  " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="deleteModalLabel"> Delete </h5> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="icon icon-close"></i>
                </button>
            </div>
            <div class="modal-body p-3">
                <div class="text-left mt-4">


                    <div class="row">
                        <div class="col-md-8">
                            <p class="lead">Current Remaining Budget</p>
                        </div><!-- col-md-8 -->
                        <div class="col-md-4 text-right">
                            <div class="slider-range-values">
                                <span class="budget-label m-0 bold lead colored2"> 1000 </span>
                                <span class="total-budget-label m-0 bold lead colored2"> / 2000 </span>
                            </div><!-- slider-range-values -->

                        </div><!-- col-md-4 -->
                    </div><!-- row -->

                    <!--  <div class="slider-range-container slider-range-with-one-axis mb-4">
                        <div id="sliderrange-one-axis"></div>
                        <input id="budget" class="d-none" placeholder="budget" type="text">
                    </div>slider-range-container slider-range-with-one-axis" -->

                    <div class="progress budget-progress mb-4">
                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <p class="bold danger"> Your adv is not attractive, please increase the budget or enter fewer users </p>

                    <p class=" d-flex mb-1"> Increment Budget </p>
                    <div class="form-group mb-3 relative">
                        <input type="text" class="form-control" placeholder="2000">
                        <p> Your Budget is :  5000  </p>
                    </div><!-- form-group  -->

                    <p class=" d-flex mb-1"> Number Of Target Audience </p>
                    <div class="form-group mb-3 relative">
                        <input type="text" class="form-control" placeholder="2000" >
                        <p> Target Audience is : 100000  </p>
                    </div><!-- form-group  -->

                </div> <!-- delete-container -->
            </div> <!-- modal-body -->
            <div class="modal-footer">
                <a href="#" class="btn btn-custom1 via" > Submit </a>
                <a href="#" class="btn btn-custom5 via" > Cancel </a>
            </div><!-- modal-footer -->
        </div> <!-- modal-content -->
    </div> <!-- modal-dialog -->
</div> <!-- budgetModal Modal END -->

<!-- deleteAdvModal  Modal Start -->
<div class="modal fade" id="deleteAdvModal" tabindex="-1" role="dialog">
    <div class="modal-dialog  " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="deleteAdvModal"> Delete </h5> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="icon icon-close"></i>
                </button>
            </div>
            <div class="modal-body  p-3">
                <div class="text-center mt-4 lead">
                    <p class="lead "> Are you sure you want to <br /> stop the adv ? </p>
                </div> <!-- text-center -->
            </div> <!-- modal-body -->
            <div class="modal-footer">
                <a href="#" class="btn btn-custom1 via" > Yes </a>
                <a href="#" class="btn btn-custom5 via" > No </a>
            </div><!-- modal-footer -->
        </div> <!-- modal-content -->
    </div> <!-- modal-dialog -->
</div> <!-- deleteAdvModal Modal END -->

<!-- toggleActivationAdvModal  Modal Start -->
<div class="modal fade" id="toggleActivationAdvModal" tabindex="-1">
    <div class="modal-dialog  " role="document">
        <div class="modal-content">
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="icon icon-close"></i>
                </button>
            </div>
            <div class="modal-body  p-3">
                <div class="text-center mt-4 lead">
                    <p class="lead are-you-sure"> Are you sure you want to <br /> active this adv ? </p>
                </div> <!-- text-center -->
            </div> <!-- modal-body -->
            <div class="modal-footer">
                <a href="#" class="btn btn-custom1 via" > Yes </a>
                <a href="#" class="btn btn-custom5 via" data-dismiss="modal"> No </a>
            </div><!-- modal-footer -->
        </div> <!-- modal-content -->
    </div> <!-- modal-dialog -->
</div> <!-- deleteAdvModal Modal END -->




<?php include 'footer.php'; ?>







