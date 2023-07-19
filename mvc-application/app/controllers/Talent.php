<?php
    class Talent extends Controller {
        public function index() {
            $data = array(
                "title" => "All Talent",
                "talent" => $this->model("Talent_model")->talentList()
            );
            
            $this->view("templates/header", $data);
            $this->view("talent/index", $data);
            $this->view("templates/footer");
        }
        
        public function detail ($id) {
            $data = array(
                "title" => "Biography",
                "talent" => $this->model("Talent_model")->talentDetail($id)
            );
            
            $this->view("templates/header", $data);
            $this->view("talent/detail", $data);
            $this->view("templates/footer");
        }
    }
?>