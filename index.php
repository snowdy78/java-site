<?php
    include_once "src/PageContent.php";
    class MainPage extends PageContent {
        
        public function getPageName(): string {
            return "main";
        }
        protected function title(): string {
            return "Главная страница";
        }
    }
    $page = new MainPage();
    $page->display();
?>
