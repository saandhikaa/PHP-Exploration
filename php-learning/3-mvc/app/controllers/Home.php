<?php
    class Home extends Controller {
        public function index() {
            $data = array(
                "judul" => "Beranda"
            );
            
            $this->view("templates/header", $data);
            $this->view("home/index");
            $this->view("templates/footer");
        }
        
        public function detail($nama = "...") {
            $data = array(
                "judul" => "Detail",
                "nama" => ucwords($nama)
            );
            
            $this->view("templates/header", $data);
            $this->view("home/detail", $data);
            $this->view("templates/footer");
        }
    }
?>