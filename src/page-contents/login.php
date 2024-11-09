<div class="container w-50 d-flex flex-column justify-content-center">
    <div class="row my-3" style="height: fit-content !important;">
        <div class="col-12 d-flex m-0 h-100 justify-content-center" style="height: fit-content !important;">
            <img src="img/logo.svg" class="d-flex logo monochrom-invert" style="height: 100px" />
        </div>
    </div>

    <div class="container">
        <div class="h2 text-center">
            Вход
        </div>
        
        <?php 
            include "src/page-elements/login-form.php";
        ?>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <?php
                    include_once "src/DataBase.php";
                    
                    function login() {
                        if ($_SERVER["REQUEST_METHOD"] != "POST") {
                            return;
                        }
                        $db = new DataBase();
                        if (
                            empty($_POST["email"]) 
                            || empty($_POST["password"]) 
                        ) {
                            throw new Exception("Please fill empty fields");
                        }
                        $email = $_POST["email"];
                        $password = $_POST["password"];

                        $db->loginUser($email, $password);
                        echo "<div class='alert alert-success'>Вход прошел успешно</div>";  
                    }
                    try {
                        login();
                    } 
                    catch (Exception $e) {;
                        $err_message = $e->getMessage();
                        echo "<div class='alert alert-danger'>$err_message</div>";
                    }
                ?>
            </div>
        </div>

    </div>
</div>