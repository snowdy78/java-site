<?php
    abstract class PageContent {
        private static $pages = []; 
        public function __construct() {
            self::$pages[$this->getPageName()] = $this;
        }
        protected function getBodyClassName(): string {
            return "unloginned";
        }
        public function display(): void {
            echo "<!DOCTYPE html>";
            echo "<html>";
            echo "<head>";
            include "src/page-elements/head.php";
            echo "<title>";
            if (empty($this->title())) {
                echo $this->getPageName();
            } else {
                echo $this->title();
            }
            echo "</title>";
            echo "</head>";
            $body_styling = $this->getBodyClassName();
            echo "<body class='$body_styling'>";
            $this->loadHeader();
            echo "<div id='main-content'>";
            $this->loadMainContent();
            echo "</div>";
            $this->loadFooter();
            include "src/page-elements/page-bottom.php";
            echo "</body>";
            echo "</html>";
        }
        protected function title(): string {
            return "";
        }
        protected function loadMainContent(): void {
            include "src/page-contents/".$this->getPageName().".php";
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