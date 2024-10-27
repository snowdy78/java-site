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
            include "src/page-elements/header.php";
            echo "<div id='main-content'>";
            include "src/page-contents/".$this->getPageName().".php";
            echo "</div>";
            include "src/page-elements/footer.php";
            include "src/page-elements/page-bottom.php";
            echo "</body>";
            echo "</html>";
        }
        abstract public function getPageName(): string;
    }
?>