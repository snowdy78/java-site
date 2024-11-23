<footer id="profile-footer">

    <?php
        if (!isset($this->user)) {
            header("Location: ./index.php");
        }
        if ($this->user['administrator'] == '1') {
            echo "
                <a class='btn col-2 text-light d-flex justify-content-center align-items center' href='curator-watch.php'>
                    Администрирование
                </a>";
        }
    ?>
</footer>
