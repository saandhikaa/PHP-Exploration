<?php
    class About extends Controller {
        public function index() {
            $data = array(
                "judul" => "Tentang saya"
            );
            
            $this->view("templates/header", $data);
            $this->view("about/index");
            $this->view("templates/footer");
        }
    }
?>