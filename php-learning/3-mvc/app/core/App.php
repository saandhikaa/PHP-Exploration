<?php
    class App {
        protected $controller = 'Home';
        protected $method = 'index';
        protected $params = array();
        
        public function __construct() {
            $url = $this->parseURL();
            
            // get controller from url
            if (file_exists("../app/controllers/" . $url[0] . ".php")) {
                $this->controller = $url[0];
                unset($url[0]);
            }
            
            // create instance controller
            require_once "../app/controllers/" . $this->controller . ".php";
            $this->controller = new $this->controller;
        }
        
        public function parseURL() {
            if (isset($_GET['url'])){
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);
                return $url;
            }
        }
    }
?>