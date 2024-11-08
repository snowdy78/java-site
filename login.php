<?php
    include_once "src/PageContent.php";
    class LoginPage extends PageContent {
        
        public function getPageName(): string {
            return "login";
        }
    }
    $page = new LoginPage();
    $page->display();
?>