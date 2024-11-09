<?php
    include_once "src/PageContent.php";
    class RegisterPage extends PageContent {
        
        public function getPageName(): string {
            return "register";
        }
    }
    $page = new RegisterPage();
    $page->display();
?>