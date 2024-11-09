<?php
    abstract class PageContent {
        private static $pages = []; 
        public function __construct() {
            self::$pages[$this->getPageName()] = $this;
        }
        public function display(): void {
            echo "<!DOCTYPE html>";
            echo "<html>";
            include "src/page-elements/head.php";
            echo "<body>";
            $this->loadHeader();
            echo "<div id='main-content'>";
            include "src/page-contents/".$this->getPageName().".php";
            echo "</div>";
            $this->loadFooter();
            include "src/page-elements/page-bottom.php";
            echo "</body>";
            echo "</html>";
        }
        abstract public function getPageName(): string;
        protected function loadHeader(): void {
            include "src/page-elements/header.php";
        }
        protected function loadFooter(): void {
            include "src/page-elements/footer.php";
        }
    }
?>