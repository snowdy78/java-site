<?php
    include_once "src/PageContent.php";
    class ForgetPasswordPage extends PageContent {
        
        public function getPageName(): string {
            return "forget-password";
        }
    }
    $page = new ForgetPasswordPage();
    $page->display();
?>