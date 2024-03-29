<?php
    class App {
        protected $controller = 'Home';
        protected $method = 'index';
        protected $params = array();
        
        public function __construct() {
            $url = $this->parseURL();
            
            // get controller from url
            if (!empty($url)) {
                if (file_exists("../app/controllers/" . $url[0] . ".php")) {
                    $this->controller = $url[0];
                    unset($url[0]);
                }
            }
            
            // create instance controller
            require_once "../app/controllers/" . $this->controller . ".php";
            $this->controller = new $this->controller;
            
            // get method from url
            if (isset($url[1]) && !isset($url[0])) {
                if (method_exists($this->controller, $url[1])) {
                    $this->method = $url[1];
                    unset($url[1]);
                }
            }
            
            // get parameters from url
            if (isset($url[2]) && !isset($url[0]) && !isset($url[1])) {
                $this->params = array_values($url);
            }
            
            call_user_func_array([$this->controller, $this->method], $this->params);
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