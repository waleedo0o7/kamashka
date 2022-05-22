<?php include 'header.php'; ?>

<div class="page-content very-small-content profile invite-friend">
    <div class="profile-content">
        <div class="profile-data w-100">
            <div class="container mt-4">
                <h3 class="bold mb-3"> Invite Friend </h3>

                <div class="invite-friend-wrapper">
                    <div class="image text-center mb-4">
                        <img alt="" class="img-fluid" src="img/invite-friend.gif">
                    </div><!-- image -->

                    <p class="lead bold mb-1"> Invite Friend </p>
                    <p> Invite your friend and get 25 kwd free credit when he use the application </p>
                    <p class="lead bold"> Share Code </p>

                    <div id="copy-link-btn" class="share-link-container mb-3 bg-white w-100">
                        <p id="copy-link" class="m-0"> 18073D4x </p>

                        <div class="icons">
                            <i class="icon icon-copy mr-2" onclick="copyTextInShareModal()"></i>
                            <!-- <i class="icon icon-share"></i>  -->
                        </div><!-- icons -->
                        
                        <p class="link-copied" id="link-copied"> <i class="fa fa-check"></i> Link Copied </p>
                    </div><!-- share-link-container -->

                </div><!-- invite-friend-wrapper -->

            </div> <!-- profile-data-content -->
        </div> <!-- profile-data -->
    </div> <!-- profile-content -->
</div><!-- page-content -->

<?php include 'footer.php'; ?>