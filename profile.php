<?php 
    include_once "src/ProfilePage.php";
    class UserProfilePage extends ProfilePage {
        public function getPageName(): string {
            return 'profile';
        }
    }

    $page = new UserProfilePage();
    $page->display();
?>