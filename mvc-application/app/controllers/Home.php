<?php
    class Home extends Controller {
        public function index() {
            $data = array(
                "title" => "Home"
            );
            
            $this->view("templates/header", $data);
            $this->view("home/index");
            $this->view("templates/footer");
        }
        
        public function greeting($name = "...") {
            $data = array(
                "title" => "Greetings",
                "name" => ucwords($name)
            );
            
            $this->view("templates/header", $data);
            $this->view("home/greeting", $data);
            $this->view("templates/footer");
        }
    }
?>