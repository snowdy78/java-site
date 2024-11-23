<?php
    include_once "src/DataBase.php";
    include_once "src/page-elements/curator-assign.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_GET['curator_id']) && isset($_GET['user_id'])) {
            try {
                if (assign_curator($_GET['user_id'], $_GET['curator_id'])) {
                    echo "<div class='container col-2 alert alert-success'>Куратор установлен</div>";
                } else echo "<div class='container col-2 alert alert-danger'>Куратор не установлен</div>";
            } catch (Exception $err) {
                echo "<div class='container col-2 alert alert-danger'>".$err->getMessage()."</div>";
            }
        }
    }
    $db = new DataBase();
    $curator = $this->user;
    if ($curator['administrator'] == '0') {
        echo "<script>history.back();</script>";  
        exit;  
    }
?>
<div>
    <div class="container">
        <h1 class="h1 container my-4">Таблица студентов</h1>
        <?php 
            try {
                $users = $db->getAllUsers();
            } catch (Exception $err) {
                $message = $err->getMessage();
                print "<div class='alert alert-danger'>$message</div>";
                return;
            }
            if (empty($users)) {
                echo "Студентов нет.";
                exit;
            }
        ?>

        <table class="student-table table table-striped">
            <thead>
                <tr class="row">
                    <th scope="col" class="col-1 border border-1"></th>
                    <th scope="col" class="col-4 border border-1">
                        Логин
                    </th>
                    <th scope="col" class="col-2 border border-1">
                        E-Mail
                    </th>
                    <th scope="col" class="col-2 border border-1">
                        Куратор
                    </th>
                    <th scope="col" class="col-3 border border-1"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    print_users($db, $users, $curator);
                    function print_users($db, $users, $curator) {
                        foreach($users as $user) {
                            $id = $user['id'];
                            $login = $user['login'];
                            $email = $user['email'];
                            try {
                                $user_curator = $db->getUser($user['curator_id']);
                                $user_curator_login = $user_curator['login'];
                            } catch (Exception $err) {
                                $user_curator = null;
                                $user_curator_login = null;
                            }
                            if ($user['administrator'] != "0") {
                                return;
                            }
                ?>
                <tr class="row">
                    <td class="col-1 border border-1"></td>
                    <td class="col-4 border border-1">
                        <?php echo $login; ?>
                    </td>
                    <td class="col-2 border border-1">
                        <?php echo $email; ?>
                    </td>
                    <td class="col-2 border border-1">
                        <?php echo $user_curator_login ?? "Не назначен"; ?>
                    </td>
                    <td class="d-flex col-3 border border-1 justify-content-center">
                        <form method="post" action="./curator-watch.php?curator_id=<?php echo $curator['id']; ?>&user_id=<?php echo $id; ?>">
                            <button class="btn btn-primary" type="submit">Назначить себя куратором</button>
                        </form>
                    </td>
                </tr>
                <?php
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>