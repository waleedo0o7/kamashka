<?php include 'admin-header.php'; ?>

<div class="page-content admin">

    <?php include 'admin-sidebar.php' ?>

    <div class="page-wrapper">

        <div class="table-wrapper">

            <div class="table-header-wrapper">
                <h1 class="page-title"> Products </h1>
                <a class="products-grid" href="admin-products-grid.php"> <i class="icon icon-icon-cards-view"></i> </a>
                <a href="admin-product-add.php" class="btn btn-custom1 add-item"> Add Product </a>
            </div><!-- table-wrapper -->



            <table id="products" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Name</th>
                        <th>Tap</th>
                        <th>Price</th>
                        <th>Purchased</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th>Admin Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>


                
                <tr>
                        <td>
                            <div class="product-image">
                                <img alt="" class="img-fluid" src="img/tshirt.jpg" />
                            </div>
                        </td>
                        <td> T Shirts Blue</td>
                        <td> mans </td>
                        <td> 20KD </td>
                        <td> 20 </td>
                        <td> 500 </td>
                        <td> <span class="d-block w-100 bold status danger text-center"> Not Active </span> </td>
                        <td class="admin-statu"> <span class="d-block w-100 bold trending warning text-center">   Under Review </span> </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="reset-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="admin-product-details.php"> product details </a>
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#delete-modal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>

 
                    <tr>
                        <td>
                            <div class="product-image">
                                <img alt="" class="img-fluid" src="img/tshirt.jpg" />
                            </div>
                        </td>
                        <td> aT Shirts Blue</td>
                        <td> mans </td>
                        <td> 20KD </td>
                        <td> 20 </td>
                        <td> 500 </td>
                        <td> <span class="d-block w-100 bold status danger text-center"> Not Active </span> </td>
                        <td class="admin-statu"> <span class="d-block w-100 bold trending danger text-center">   Rejected </span> </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="reset-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#delete-modal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <div class="product-image">
                                <img alt="" class="img-fluid" src="img/tshirt.jpg" />
                            </div>
                        </td>
                        <td> bT Shirts Blue</td>
                        <td> mans </td>
                        <td> 20KD </td>
                        <td> 20 </td>
                        <td> 500 </td>
                        <td> <span class="d-block w-100 bold status success text-center"> Active </span> </td>
                        <td class="admin-statu"> <span class="d-block w-100 text-center">  <i class="accepted fa fa-check"></i>   </span> </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="reset-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#delete-modal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>
































                    

                
                    <tr>
                        <td>
                            <div class="product-image">
                                <img alt="" class="img-fluid" src="img/tshirt.jpg" />
                            </div>
                        </td>
                        <td> cT Shirts Blue</td>
                        <td> mans </td>
                        <td> 20KD </td>
                        <td> 20 </td>
                        <td> 500 </td>
                        <td> <span class="d-block w-100 bold status danger text-center"> Not Active </span> </td>
                        <td class="admin-statu"> <span class="d-block w-100 bold trending warning text-center">   Under Review </span> </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="reset-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#delete-modal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>

 
                    <tr>
                        <td>
                            <div class="product-image">
                                <img alt="" class="img-fluid" src="img/tshirt.jpg" />
                            </div>
                        </td>
                        <td> dT Shirts Blue</td>
                        <td> mans </td>
                        <td> 20KD </td>
                        <td> 20 </td>
                        <td> 500 </td>
                        <td> <span class="d-block w-100 bold status danger text-center"> Not Active </span> </td>
                        <td class="admin-statu"> <span class="d-block w-100 bold trending danger text-center">   Rejected </span> </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="reset-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#delete-modal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <div class="product-image">
                                <img alt="" class="img-fluid" src="img/tshirt.jpg" />
                            </div>
                        </td>
                        <td> eT Shirts Blue</td>
                        <td> mans </td>
                        <td> 20KD </td>
                        <td> 20 </td>
                        <td> 500 </td>
                        <td> <span class="d-block w-100 bold status success text-center"> Active </span> </td>
                        <td class="admin-statu"> <span class="d-block w-100 text-center">  <i class="accepted fa fa-check"></i>   </span> </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="reset-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#delete-modal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>





























                    

                
                    <tr>
                        <td>
                            <div class="product-image">
                                <img alt="" class="img-fluid" src="img/tshirt.jpg" />
                            </div>
                        </td>
                        <td> fT Shirts Blue</td>
                        <td> mans </td>
                        <td> 20KD </td>
                        <td> 20 </td>
                        <td> 500 </td>
                        <td> <span class="d-block w-100 bold status danger text-center"> Not Active </span> </td>
                        <td class="admin-statu"> <span class="d-block w-100 bold trending warning text-center">   Under Review </span> </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="reset-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#delete-modal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>

 
                    <tr>
                        <td>
                            <div class="product-image">
                                <img alt="" class="img-fluid" src="img/tshirt.jpg" />
                            </div>
                        </td>
                        <td> nT Shirts Blue</td>
                        <td> mans </td>
                        <td> 20KD </td>
                        <td> 20 </td>
                        <td> 500 </td>
                        <td> <span class="d-block w-100 bold status danger text-center"> Not Active </span> </td>
                        <td class="admin-statu"> <span class="d-block w-100 bold trending danger text-center">   Rejected </span> </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="reset-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#delete-modal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <div class="product-image">
                                <img alt="" class="img-fluid" src="img/tshirt.jpg" />
                            </div>
                        </td>
                        <td> yT Shirts Blue</td>
                        <td> mans </td>
                        <td> 20KD </td>
                        <td> 20 </td>
                        <td> 500 </td>
                        <td> <span class="d-block w-100 bold status success text-center"> Active </span> </td>
                        <td class="admin-statu"> <span class="d-block w-100 text-center">  <i class="accepted fa fa-check"></i>   </span> </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="reset-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#delete-modal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>


































                    

                
                    <tr>
                        <td>
                            <div class="product-image">
                                <img alt="" class="img-fluid" src="img/tshirt.jpg" />
                            </div>
                        </td>
                        <td> zT Shirts Blue</td>
                        <td> mans </td>
                        <td> 20KD </td>
                        <td> 20 </td>
                        <td> 500 </td>
                        <td> <span class="d-block w-100 bold status danger text-center"> Not Active </span> </td>
                        <td class="admin-statu"> <span class="d-block w-100 bold trending warning text-center">   Under Review </span> </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="reset-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#delete-modal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>

 
                    <tr>
                        <td>
                            <div class="product-image">
                                <img alt="" class="img-fluid" src="img/tshirt.jpg" />
                            </div>
                        </td>
                        <td> zzT Shirts Blue</td>
                        <td> mans </td>
                        <td> 20KD </td>
                        <td> 20 </td>
                        <td> 500 </td>
                        <td> <span class="d-block w-100 bold status danger text-center"> Not Active </span> </td>
                        <td class="admin-statu"> <span class="d-block w-100 bold trending danger text-center">   Rejected </span> </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="reset-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#delete-modal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <div class="product-image">
                                <img alt="" class="img-fluid" src="img/tshirt.jpg" />
                            </div>
                        </td>
                        <td> fffT Shirts Blue</td>
                        <td> mans </td>
                        <td> 20KD </td>
                        <td> 20 </td>
                        <td> 500 </td>
                        <td> <span class="d-block w-100 bold status success text-center"> Active </span> </td>
                        <td class="admin-statu"> <span class="d-block w-100 text-center">  <i class="accepted fa fa-check"></i>   </span> </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="reset-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#delete-modal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>

































                    

                
                    <tr>
                        <td>
                            <div class="product-image">
                                <img alt="" class="img-fluid" src="img/tshirt.jpg" />
                            </div>
                        </td>
                        <td> T Shirts Blue</td>
                        <td> mans </td>
                        <td> 20KD </td>
                        <td> 20 </td>
                        <td> 500 </td>
                        <td> <span class="d-block w-100 bold status danger text-center"> Not Active </span> </td>
                        <td class="admin-statu"> <span class="d-block w-100 bold trending warning text-center">   Under Review </span> </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="reset-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#delete-modal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>

 
                    <tr>
                        <td>
                            <div class="product-image">
                                <img alt="" class="img-fluid" src="img/tshirt.jpg" />
                            </div>
                        </td>
                        <td> T Shirts Blue</td>
                        <td> mans </td>
                        <td> 20KD </td>
                        <td> 20 </td>
                        <td> 500 </td>
                        <td> <span class="d-block w-100 bold status danger text-center"> Not Active </span> </td>
                        <td class="admin-statu"> <span class="d-block w-100 bold trending danger text-center">   Rejected </span> </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="reset-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#delete-modal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <div class="product-image">
                                <img alt="" class="img-fluid" src="img/tshirt.jpg" />
                            </div>
                        </td>
                        <td> T Shirts Blue</td>
                        <td> mans </td>
                        <td> 20KD </td>
                        <td> 20 </td>
                        <td> 500 </td>
                        <td> <span class="d-block w-100 bold status success text-center"> Active </span> </td>
                        <td class="admin-statu"> <span class="d-block w-100 text-center">  <i class="accepted fa fa-check"></i>   </span> </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="reset-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#delete-modal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>































                    

                
                    <tr>
                        <td>
                            <div class="product-image">
                                <img alt="" class="img-fluid" src="img/tshirt.jpg" />
                            </div>
                        </td>
                        <td> T Shirts Blue</td>
                        <td> mans </td>
                        <td> 20KD </td>
                        <td> 20 </td>
                        <td> 500 </td>
                        <td> <span class="d-block w-100 bold status danger text-center"> Not Active </span> </td>
                        <td class="admin-statu"> <span class="d-block w-100 bold trending warning text-center">   Under Review </span> </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="reset-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#delete-modal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>

 
                    <tr>
                        <td>
                            <div class="product-image">
                                <img alt="" class="img-fluid" src="img/tshirt.jpg" />
                            </div>
                        </td>
                        <td> T Shirts Blue</td>
                        <td> mans </td>
                        <td> 20KD </td>
                        <td> 20 </td>
                        <td> 500 </td>
                        <td> <span class="d-block w-100 bold status danger text-center"> Not Active </span> </td>
                        <td class="admin-statu"> <span class="d-block w-100 bold trending danger text-center">   Rejected </span> </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="reset-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#delete-modal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <div class="product-image">
                                <img alt="" class="img-fluid" src="img/tshirt.jpg" />
                            </div>
                        </td>
                        <td> T Shirts Blue</td>
                        <td> mans </td>
                        <td> 20KD </td>
                        <td> 20 </td>
                        <td> 500 </td>
                        <td> <span class="d-block w-100 bold status success text-center"> Active </span> </td>
                        <td class="admin-statu"> <span class="d-block w-100 text-center">  <i class="accepted fa fa-check"></i>   </span> </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="reset-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#delete-modal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>
































                    

                
                    <tr>
                        <td>
                            <div class="product-image">
                                <img alt="" class="img-fluid" src="img/tshirt.jpg" />
                            </div>
                        </td>
                        <td> T Shirts Blue</td>
                        <td> mans </td>
                        <td> 20KD </td>
                        <td> 20 </td>
                        <td> 500 </td>
                        <td> <span class="d-block w-100 bold status danger text-center"> Not Active </span> </td>
                        <td class="admin-statu"> <span class="d-block w-100 bold trending warning text-center">   Under Review </span> </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="reset-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#delete-modal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>

 
                    <tr>
                        <td>
                            <div class="product-image">
                                <img alt="" class="img-fluid" src="img/tshirt.jpg" />
                            </div>
                        </td>
                        <td> T Shirts Blue</td>
                        <td> mans </td>
                        <td> 20KD </td>
                        <td> 20 </td>
                        <td> 500 </td>
                        <td> <span class="d-block w-100 bold status danger text-center"> Not Active </span> </td>
                        <td class="admin-statu"> <span class="d-block w-100 bold trending danger text-center">   Rejected </span> </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="reset-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#delete-modal"> Delete </a>
                                    </div>
                                </div> <!-- btn-group -->
                            </div><!-- actions -->
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <div class="product-image">
                                <img alt="" class="img-fluid" src="img/tshirt.jpg" />
                            </div>
                        </td>
                        <td> T Shirts Blue</td>
                        <td> mans </td>
                        <td> 20KD </td>
                        <td> 20 </td>
                        <td> 500 </td>
                        <td> <span class="d-block w-100 bold status success text-center"> Active </span> </td>
                        <td class="admin-statu"> <span class="d-block w-100 text-center">  <i class="accepted fa fa-check"></i>   </span> </td>
                        <td>
                            <div class="actions">
                                <div class="btn-group dropleft">
                                    <button type="button" class="reset-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> Edit </a>
                                        <a class="dropdown-item danger" href="" data-toggle="modal" data-target="#delete-modal"> Delete </a>
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







<!-- Delete Modal Start -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="delete-modalLabel" aria-hidden="true">
    <div class="modal-dialog  " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delete-modalLabel"> Delete </h5>
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
                <a href="#" class="btn btn-custom1 via" > Yes </a>
                <a href="#" class="btn btn-custom5 via" > No </a>
            </div><!-- modal-footer -->
        </div> <!-- modal-content -->
    </div> <!-- modal-dialog -->
</div> <!-- Delete Modal END -->