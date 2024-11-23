<?php
    include_once "src/DataBase.php";
    include_once "src/PageContent.php";
    
    abstract class ProfilePage extends PageContent {
        protected $user = null;
        protected function getBodyClassName(): string {
            return 'loginned';
        }
        protected function initUser() {
            if (session_status() != PHP_SESSION_ACTIVE) {
                session_start();
            }
            if (empty($_SESSION['login'])) {
                throw new UserNotFound("User not found");
            }
            $db = new DataBase();
            $this->user = $db->getUser($_SESSION['login']);     
        }
        public function getUser() {
            return $this->user;
        }
        protected function onUserLoginFail() {
            echo "<script>gotoPreviousPage()</script>";
        }
        protected function loadHeader(): void {
            try {
                $this->initUser();
            } catch (Exception $e) {
                $this->onUserLoginFail();
            }
            include 'src/page-elements/profile-header.php';
        }
        protected function loadMainContent(): void {
            include 'src/page-elements/history.php';
            parent::loadMainContent();
        }
        protected function loadFooter(): void {
            include 'src/page-elements/profile-footer.php';
        }
    }
?>