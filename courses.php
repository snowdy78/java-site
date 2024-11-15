<?php 
    include_once "ProfilePage.php";
    class CoursesPage extends ProfilePage {
        public function getPageName(): string {
            return 'cources';
        }
    }
    
    $page = new CoursesPage();
    $page->display();
?>