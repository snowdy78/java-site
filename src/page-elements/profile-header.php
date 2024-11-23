<header id="profile-header">
    <div class="p-2">
        <?php
            include "src/page-elements/mini-logo.php";
        ?>
    </div>
    <?php
        if (!isset($this->user)) {
            header("Location: ./index.php");
        }
        if ($this->user['administrator'] == '1') {
            echo "<a class='btn btn-dark' href='curator-watch.php'>Студенты</a>";
        }
    ?>
    <div></div>
    <div class="trash-box d-flex text-light justify-content-center align-items-center">Корзина</div>
    <div class="notifications d-flex text-light justify-content-center align-items-center">Уведомления</div>
    <div class="profile p-3 d-flex text-light justify-content-start align-items-center">
        <img class="img-fluid rounded" style="max-width:100%; height: 100%;" src="
            <?php
                if (!isset($user['avatar'])) {
                    echo "img/default-avatar.png";
                }
            ?>"
        />
        <div class="px-3">
            <?php 
                echo $this->user['login'];
            ?>
        </div>
    </div>
</header>
