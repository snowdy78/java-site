<?php
    include_once "src/DataBase.php";
    function assign_curator($user_id, $curator_id) {
        $db = new DataBase();
        return $db->updateUser($user_id, ['curator_id'], [$curator_id]);
    }
?>