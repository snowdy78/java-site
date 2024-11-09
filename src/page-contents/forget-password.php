<div class="container w-50 d-flex flex-column justify-content-center">
    <div class="row my-3" style="height: fit-content !important;">
        <div class="col-12 d-flex m-0 h-100 justify-content-center" style="height: fit-content !important;">
            <img src="img/logo.svg" class="d-flex logo monochrom-invert" style="height: 100px" />
        </div>
    </div>

    <div class="container">
        <div class="h2 text-center">
            Забыли пароль?
        </div>
        <?php 
            include "src/page-elements/forget-password-form.php";
        ?>
        <div class="containter pt-5">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <a class="text-black" href="login.php">Вспомнил пароль</a>
                </div>
            </div>
        </div>
    </div>
</div>