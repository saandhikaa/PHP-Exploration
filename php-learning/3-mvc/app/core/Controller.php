<?php
    class Controller {
        public function view ($view, $data = array()) {
            require_once "../app/views/" . $view . ".php";
        }
    }
?>