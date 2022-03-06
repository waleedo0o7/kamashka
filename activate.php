<?php include 'header.php'; ?>

<div class="page-content activate">
    <div class="signin-content">
        <img class="mb-3 logo" src="img/activate.svg" />
        <h3 class="mb-0 bold"> Activate Number </h3>

        <div class="form-container">
            <p class="lead mb-4"> We Have Sent An SMS With An <br /> Activation Code To Your Phone By SMS </p>
            <div class="activate-inputs-container">
                <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" />
                <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" />
                <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" />
                <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" />
            </div><!-- activate-inputs-container -->

            <div class="signup-btn-container mb-1">
                <a style="width: 320px !important;" type="submit" href="activate.php" class="btn btn-custom1  text-center w-100" id="send"> Send </a>
            </div><!-- submit-btn-container -->

            <div class="d-none">
                <input type="text" id="code">
            </div><!-- d-none -->

        </div><!-- form-container -->
        <div class="page-footer">
            <p class="lead"> Didn't Receive The Code? </p>
            <div class="signup-btn-container mb-3">
                <a type="submit" href="activate.php" class="btn btn-custom2  text-center" id="resend-code" onclick="counterDownTwoMinutes()"> Resend Code
                    <span id="minutes">02</span>
                    <span id="colon">:</span>
                    <span id="seconds">00</span>
                </a>
            </div><!-- submit-btn-container -->
        </div><!-- page-footer -->
    </div><!-- signin-content -->
</div><!-- page-content -->

<?php include 'footer.php'; ?>

<script>
    counterDownTwoMinutes()
</script>