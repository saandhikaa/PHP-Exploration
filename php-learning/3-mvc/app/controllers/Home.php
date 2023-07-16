<?php
    class Home extends Controller {
        public function index() {
            $data = array(
                "judul" => "Beranda",
                "nama" => $this->model('User_model')->getUser()
            );
            
            $this->view("templates/header", $data);
            $this->view("home/index", $data);
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