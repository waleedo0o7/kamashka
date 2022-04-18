<?php include 'admin-header.php'; ?>

<div class="page-content admin">
    <?php include 'admin-sidebar.php' ?>
    <div class="page-wrapper">


        <div class="table-wrapper">

            <div class="table-header-wrapper ">
                <h1 class="page-title"> Orders </h1>

                <div class="fillter-date-wrapper">
                    <div class="mr-2 item relative"> 
                        <input placeholder="From Date" class="form-control" type="text" id="min" name="min">
                        <i class="fa fa-chevron-down"></i>
                    </div><!-- item -->

                    <div class="item relative"> 
                        <input placeholder="To Date" class="form-control" type="text" id="max" name="max">
                        <i class="fa fa-chevron-down"></i>
                    </div><!-- item -->

                </div><!-- fillter-date-wrapper -->
            </div><!-- table-wrapper -->




            <table id="orders" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Order Number</th>
                        <th>Date</th>
                        <th>No. Products</th>
                        <th>Voucher Coupon</th>
                        <th>Shipping Company</th>
                        <th>Availability</th>
                        <th>Total</th>
                        <th>Statues</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>



                    <tr>
                        <td> 12312123 </td>
                        <td> 2008/11/28 </td>
                        <td> 3 </td>
                        <td> - </td>
                        <td> - </td>
                        <td> 320 In Stock </td>
                        <td> $29,192 </td>
                        <td> Recieved </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="resetbtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="admin-order-details.php"> view order </a>
                                        <a class="dropdown-item" href="" data-toggle="modal" data-target="#deleteModal"> Confirm </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>


                    <tr>
                        <td> 12312124 </td>
                        <td> 2009/10/09 </td>
                        <td> 7 </td>
                        <td> 10% Discount </td>
                        <td> Shaheen </td>
                        <td> 300 In Stock </td>
                        <td> $29,192 </td>
                        <td> Recieved </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="resetbtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#deleteModal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>




                    <tr>
                        <td> 12312124 </td>
                        <td> 2012/10/13 </td>
                        <td> 7 </td>
                        <td> 14% Discount </td>
                        <td> Shaheen </td>
                        <td> 300 In Stock </td>
                        <td> $29,192 </td>
                        <td> Recieved </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="resetbtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#deleteModal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>













                    <tr>
                        <td> 12312124 </td>
                        <td> 2012/10/13 </td>
                        <td> 7 </td>
                        <td> 20% Discount </td>
                        <td> Shaheen </td>
                        <td> 300 In Stock </td>
                        <td> $29,192 </td>
                        <td> Recieved </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="resetbtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#deleteModal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>






                    <tr>
                        <td> 12312124 </td>
                        <td> 2012/10/13 </td>
                        <td> 7 </td>
                        <td> 25% Discount </td>
                        <td> Shaheen </td>
                        <td> 300 In Stock </td>
                        <td> $29,192 </td>
                        <td> Recieved </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="resetbtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#deleteModal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>






                    <tr>
                        <td> 12312124 </td>
                        <td> 2012/10/13 </td>
                        <td> 7 </td>
                        <td> 30% Discount </td>
                        <td> Shaheen </td>
                        <td> 300 In Stock </td>
                        <td> $29,192 </td>
                        <td> Recieved </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="resetbtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#deleteModal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>







                    <tr>
                        <td> 12312124 </td>
                        <td> 2012/10/13 </td>
                        <td> 7 </td>
                        <td> 10% Discount </td>
                        <td> Shaheen </td>
                        <td> 300 In Stock </td>
                        <td> $29,192 </td>
                        <td> Recieved </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="resetbtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#deleteModal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>







                    <tr>
                        <td> 12312124 </td>
                        <td> 2012/10/13 </td>
                        <td> 7 </td>
                        <td> 10% Discount </td>
                        <td> Shaheen </td>
                        <td> 300 In Stock </td>
                        <td> $29,192 </td>
                        <td> Recieved </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="resetbtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#deleteModal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>






                    <tr>
                        <td> 12312124 </td>
                        <td> 2008/12/16 </td>
                        <td> 7 </td>
                        <td> 10% Discount </td>
                        <td> Shaheen </td>
                        <td> 300 In Stock </td>
                        <td> $29,192 </td>
                        <td> Recieved </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="resetbtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#deleteModal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>








                    <tr>
                        <td> 12312124 </td>
                        <td> 2009/04/10 </td>
                        <td> 7 </td>
                        <td> 10% Discount </td>
                        <td> Shaheen </td>
                        <td> 300 In Stock </td>
                        <td> $29,192 </td>
                        <td> Recieved </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="resetbtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#deleteModal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>








                    <tr>
                        <td> 12312124 </td>
                        <td> 2011/12/06 </td>
                        <td> 7 </td>
                        <td> 10% Discount </td>
                        <td> Shaheen </td>
                        <td> 300 In Stock </td>
                        <td> $29,192 </td>
                        <td> Recieved </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="resetbtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#deleteModal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>








                    <tr>
                        <td> 12312124 </td>
                        <td>2012/12/02 </td>
                        <td> 7 </td>
                        <td> 10% Discount </td>
                        <td> Shaheen </td>
                        <td> 300 In Stock </td>
                        <td> $29,192 </td>
                        <td> Recieved </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="resetbtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#deleteModal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>








                    <tr>
                        <td> 12312124 </td>
                        <td> 2011/06/07 </td>
                        <td> 7 </td>
                        <td> 10% Discount </td>
                        <td> Shaheen </td>
                        <td> 300 In Stock </td>
                        <td> $29,192 </td>
                        <td> Recieved </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="resetbtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#deleteModal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>





                </tbody>
            </table>


        </div><!-- table-wrapper -->





    </div><!-- page-wrapper -->
</div><!-- page-content -->

<?php include 'admin-footer.php'; ?>

<script>
    initOrdersTable();
</script>

<!-- Delete Modal Start -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog  " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel"> Confirm Order </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="icon icon-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="delete-container">
                    <p class="text-center">Are you sure you want to <br />  confirm order No.13515131?</p>
                </div> <!-- delete-container -->
            </div> <!-- modal-body -->
            <div class="modal-footer">
                <a href="#" class="btn btn-custom1 via" data-via="1"> Yes </a>
                <a href="#" class="btn btn-custom5 via" data-via="2"> No </a>
            </div><!-- modal-footer -->
        </div> <!-- modal-content -->
    </div> <!-- modal-dialog -->
</div> <!-- Delete Modal END -->