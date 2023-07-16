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
    }
?>