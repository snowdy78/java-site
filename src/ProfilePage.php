<?php
    include_once "src/DataBase.php";
    include_once "src/PageContent.php";
    abstract class ProfilePage extends PageContent {
        protected function initUser() {
            if (session_status() != PHP_SESSION_ACTIVE) {
                throw new UserNotFound("User not found");
            }
            $db = new DateBase();
            try {
                $user = $db->getUser();
            } catch (Exception $e) {
                
            }
        }
        protected function loadHeader(): void {
            try {
                $this->initUser();
            } catch (Exception $e) {
            }
            include 'src/page-elements/profile-header.php';
        }
        protected function loadFooter(): void {}
    }
?>