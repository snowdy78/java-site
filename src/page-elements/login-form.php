<form class="container auth-form d-flex flex-column justify-content-center" method="post" action="login.php">
    <div class="row">
        <div class="col-12 input-group">
            <input class="form-control" type="email" name="email" placeholder="Ваш email" />
        </div>
    </div>
    <div class="row">
        <div class="col-12 input-group">
            <input class="form-control" type="password" name="password" placeholder="Пароль" />
        </div>
    </div>
    <div class="row">
        <div class="col-12"></div>
    </div>
    <div class="row">
        <div class="col-12"></div>
    </div>
    <div class="row">
        <div class="col-6 d-flex justify-content-start">
            <a class="text-black" href="forget-password.php">Забыли пароль?</a>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <a class="text-black fw-semibold" href="register.php">Регистрация</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <button type="submit" class="btn btn-primary w-100">Войти</button>
        </div>
    </div>
</form>