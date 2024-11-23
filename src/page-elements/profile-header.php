<header id="profile-header">
    <?php
        if (!isset($this->user)) {
            header("Location: ./index.php");
        }
        if ($this->user['administrator'] == '1') {
            echo "<a class='btn btn-dark' href='curator-watch.php'>Студенты</a>";
        }
    ?>
</header>
