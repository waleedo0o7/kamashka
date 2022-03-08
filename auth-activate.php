<?php include 'header.php'; ?>

<div class="page-content activate">
    <div class="signin-content">
        <img class="mb-3 logo" src="img/activate.svg" />
        <h3 class="mb-0 bold"> Activate Number </h3>

        <div class="form-container">
            <p class="lead mb-4"> We Have Sent An SMS With An <br /> Activation Code To Your Phone By SMS </p>

            <div class="mb-3 activate-inputs-container">

                <div class="activate-inputs">
                    <input class="num1" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" />
                    <input class="num2" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" />
                    <input class="num3" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" />
                    <input class="num4" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" />
                </div><!-- activate-inputs -->

                <form action="" id="activate-code" class="d-none">
                    <input id="activate-code-input" name="code" type="text">
                </form>

                <!-- <a type="submit" href="auth-activate.php" class="btn btn-custom1  text-center w-100" id="send"> Send </a> -->

            </div>

            <div class="d-none">
                <input type="text" id="code">
            </div><!-- d-none -->

        </div><!-- form-container -->
        <div class="page-footer">
            <p class="lead"> Didn't Receive The Code? </p>
            <div class="signup-btn-container mb-3">
                <a type="submit" href="auth-activate.php" class="btn btn-custom2  text-center" id="resend-code" onclick="counterDownTwoMinutes()"> Resend Code
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