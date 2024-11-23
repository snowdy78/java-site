<?php 
    include_once "src/ProfilePage.php";
    class UserProfilePage extends ProfilePage {
        public function getPageName(): string {
            return 'curator-watch';
        }
        protected function title(): string {
            return 'Просмотр студентов';
        }
    }

    $page = new UserProfilePage();
    $page->display();
?>