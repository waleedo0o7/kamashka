<?php include 'header.php'; ?>

<div class="page-content bg-gray very-small-content pt-5 wallet-page pb-5">
    <div class="container  bg-gray">

        <h3 class="bold mb-4"> Bank Account </h3>

        <div class="form-group mb-4 relative">
            <select class="form-control" id="exampleFormControlSelect1">
                <option> Select Bank </option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>

        <div class="form-group mb-4 relative">
            <label  class=" bold"> Full Name </label>
            <input type="text" class="form-control" placeholder=" Full Name" required="">
        </div><!-- form-group  -->

        <div class="form-group mb-4 relative">
            <label  class=" bold"> Civil Id </label>
            <input type="text" class="form-control" placeholder="Civil Id" required="">
        </div><!-- form-group  -->


        <div class="form-group mb-4 relative">
            <label  class=" bold"> IBAN Account Number </label>
            <input type="text" class="form-control" placeholder="IBAN Account Number" id="name" required="">
        </div><!-- form-group  -->

        <div class="submit-btn-container">
            <button class="btn btn-primary w-100 text-center"> Save </button>
        </div>

    </div><!-- container -->
</div><!-- page-content -->

<?php include 'footer.php'; ?>