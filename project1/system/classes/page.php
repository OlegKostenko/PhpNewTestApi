<?php
    class Page {
        
        public $id;
        public $user;
        public $title;
        public $style;
        public $script;
        public $content;
        public $template;
        
        public function __construct() {
            $this->id = $this->defineId();
            $this->user = "Guest";
            $this->title = "-";
            $this->style = "css/$this->id.css";
            $this->script = "js/$this->id.js";
            $this->content = "pages/$this->id.php";
            $this->template = "tmp/base.php";
        }
        private function defineId() {
            if(isset($_GET["id"])) {
                return $_GET["id"];
            } else {
                return "main";
            }
        }
        
        public function load() {
            include($this->content);
            include($this->template);
        }
    }