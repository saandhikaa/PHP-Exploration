<?php
    class Pacar extends Controller {
        public function index() {
            $data = array(
                "judul" => "Daftar Pacar",
                "pacarku" => $this->model("Pacar_model")->daftarPacar()
            );
            
            $this->view("templates/header", $data);
            $this->view("pacar/index", $data);
            $this->view("templates/footer");
        }
        
        public function detail ($id) {
            $data = array(
                "judul" => "Detail Pacar",
                "pacarku" => $this->model("Pacar_model")->detailPacar($id)
            );
            
            $this->view("templates/header", $data);
            $this->view("pacar/detail", $data);
            $this->view("templates/footer");
        }
    }
?>