<header id="profile-header">
    <div class="p-2">
        <?php
            include "src/page-elements/mini-logo.php";
        ?>
    </div>
    <div></div>
    <div></div>
    <a class="trash-box btn d-flex text-light justify-content-center align-items-center">Корзина</a>
    <a class="notifications btn d-flex text-light justify-content-center align-items-center">Уведомления</a>
    <div class="profile p-3 d-flex text-light justify-content-start align-items-center">
        <img class="img-fluid rounded" style="max-width:100%; height: 100%;" src="
            <?php
                if (!isset($user['avatar'])) {
                    echo "img/default-avatar.png";
                }
            ?>"
        />
        <div class="px-3" style="cursor: default">
            <?php 
                echo $this->user['login'];
            ?>
        </div>
    </div>
</header>
