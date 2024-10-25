<?php
    include_once "src/PageContent.php";
    class MainPage extends PageContent {
        
        public function getPageName(): string {
            return "main";
        }
    }
    $page = new MainPage();
    $page->display();
?>
