<div class="container w-50 d-flex flex-column justify-content-center">
    <div class="row my-3" style="height: fit-content !important;">
        <div class="col-12 d-flex m-0 h-100 justify-content-center" style="height: fit-content !important;">
            <img src="img/logo.svg" class="d-flex logo monochrom-invert" style="height: 100px" />
        </div>
    </div>

    <div class="container">
        <div class="h2 text-center">
            Регистрация
        </div>
        <?php 
            include "src/page-elements/register-form.php";
        ?>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <?php
                    include_once "src/DataBase.php";
                    function register() {
                        if ($_SERVER["REQUEST_METHOD"] != "POST") {
                            return;
                        }
                        $db = new DataBase();
                        if (
                            empty($_POST["email"]) 
                            || empty($_POST["name"]) 
                            || empty($_POST["password"]) 
                            || empty($_POST["password-repeat"])
                        ) {
                            return;
                        }
                        $email = $_POST["email"];
                        $name = $_POST["name"];
                        $password = $_POST["password"];
                        $password_repeat = $_POST["password-repeat"];
    
                        $db->registerUser($email, $name, $password, $password_repeat);
    
                        echo "<div class='alert alert-success'>Вы успешно зарегистрировались</div>";
                    }
                    try {
                        register();
                    } catch (Exception $err) {
                        $err_message = $err->getMessage();
                        echo "<div class='alert alert-danger'>$err_message</div>";
                    }              
                ?>
            </div>
        </div>

    </div>
</div>