<?php include 'shipping-header.php'; ?>

<div class="page-content admin order-details-page">

    <?php include 'shipping-sidebar.php' ?>

    <div class="page-wrapper pb-5">
        <h1 class="page-title"> Order Details </h1>


        <div class="order-details-wrapper">
            <div class="overview">
                <h5 class="bold"> Over View </h5>
                <div class="row">
                    <div class="col-md-3">
                        <div class="item">
                            <h4 class="title"> Customer </h4>
                            <div class="details">
                                <p> Amr Hady </p>
                                <p> 010120202020 </p>
                                <p> amr@Mail.Com </p>
                            </div><!-- details -->
                        </div><!-- item -->
                    </div><!-- col-md-3 -->


                    <div class="col-md-3">
                        <div class="item">
                            <h4 class="title"> Shipped To </h4>
                            <div class="details">
                                <p> Elaine Hernandez </p>
                                <p> P. Sherman 42 </p>
                                <p> Wallaby Way, Sidney </p>
                                <p> P: (123) 345-6789 </p>
                            </div><!-- details -->
                        </div><!-- item -->
                    </div><!-- col-md-3 -->


                    <div class="col-md-3">
                        <div class="item">
                            <h4 class="title"> Payment Method </h4>
                            <div class="details">
                                <p> visa ending **123 </p>
                            </div><!-- details -->
                        </div><!-- item -->
                    </div><!-- col-md-3 -->


                    <div class="col-md-3">
                        <div class="item">
                            <h4 class="title"> Order Details </h4>
                            <div class="details">
                                <p> Order : No.22131213132 </p>
                                <p> Date : 4:34PM </p>
                                <p> Wed, Aug 13, 2020 </p>
                            </div><!-- details -->
                        </div><!-- item -->
                    </div><!-- col-md-3 -->

                </div><!-- row -->
            </div><!-- overview -->

            <hr class="mt-5 mb-4" />

            <div class="order-summary">

                <h5 class="bold mb-4"> Order Summary </h5>

                <div class="table-responsive ">
                    <table class="table order-summary-table">
                        <thead>
                            <tr>
                                <th scope="col"> Image </th>
                                <th scope="col"> Product </th>
                                <th scope="col"> Price </th>
                                <th scope="col"> Quantity </th>
                                <th scope="col"> Sub Total </th>
                                <th scope="col"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    <img alt="" class="img-fluid product-image" src="img/03.jpg" alt="">
                                </th>
                                <th>
                                    <p class="product-name"> Red Cotton Scarf </p>
                                    <p class="product-name2"> 2ft, Dark Red </p>
                                </th>
                                <th>
                                    <p class="product-price"> $11.00 </p>
                                </th>
                                <th>
                                    <p class="product-quantity"> 6 </p>
                                </th>
                                <th>
                                    <p class="product-sub-total"> $11.00 </p>
                                </th>
                                <th>
                                    <a class="btn btn-custom2" href="#"> Unavailable </a>
                                </th>
                            </tr>

                            <tr>
                                <th>
                                    <img alt="" class="img-fluid product-image" src="img/03.jpg" alt="">
                                </th>
                                <th>
                                    <p class="product-name"> Red Cotton Scarf </p>
                                    <p class="product-name2"> 2ft, Dark Red </p>
                                </th>
                                <th>
                                    <p class="product-price"> $11.00 </p>
                                </th>
                                <th>
                                    <p class="product-quantity"> 6 </p>
                                </th>
                                <th>
                                    <p class="product-sub-total"> $11.00 </p>
                                </th>
                                <th>
                                    <a class="btn " href="#"> Unavailable </a>
                                </th>
                            </tr>

                            <tr>
                                <th>
                                    <img alt="" class="img-fluid product-image" src="img/03.jpg" alt="">
                                </th>
                                <th>
                                    <p class="product-name"> Red Cotton Scarf </p>
                                    <p class="product-name2"> 2ft, Dark Red </p>
                                </th>
                                <th>
                                    <p class="product-price"> $11.00 </p>
                                </th>
                                <th>
                                    <p class="product-quantity"> 6 </p>
                                </th>
                                <th>
                                    <p class="product-sub-total"> $11.00 </p>
                                </th>
                                <th>
                                    <a class="btn " href="#"> Unavailable </a>
                                </th>
                            </tr>

                            <tr>

                                <th colspan="5">
                                </th>
                                <th>
                                    <div class="order-checkout">
                                        <p> <strong> Taxes </strong> <span class="ml-auto"> N/A </span></p>
                                        <p> <strong> Shipping Fees </strong> <span class="ml-auto colored2"> 200,00 KD </span></p>
                                        <p> <strong> Voucher Coupon </strong> <span class="ml-auto colored2"> - 200,00 KD </span></p>
                                        <hr />
                                        <p> <strong> Total </strong> <span class="ml-auto total colored2 bold lead"> 2,200,00 KD </span></p>
                                        <p> <strong> Payment Status </strong> <span class="ml-auto total success"> Paid </span></p>
                                    </div><!-- order-checkout -->
                                </th>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div><!-- order-summary -->


        </div><!-- order-details-wrapper -->


    </div><!-- page-wrapper -->
</div><!-- page-content -->

<?php include 'shipping-footer.php'; ?>



<script>
    productSlider();
</script>