<?php
    class About extends Controller {
        public function index() {
            $data = array(
                "title" => "About Us"
            );
            
            $this->view("templates/header", $data);
            $this->view("about/index");
            $this->view("templates/footer");
        }
    }
?>