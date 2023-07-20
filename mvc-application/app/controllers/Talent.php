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
        
        public function newtalent() {
            // Clean up the $_POST array using trim()
            $data['id'] = time();
            $data['name'] = trim($_POST['name']);
            $data['birthdate'] = $_POST['birthdate'];
            $data['birthplace'] = trim($_POST['birthplace']);
            $data['occupation'] = trim($_POST['occupation']);
            $data['nationality'] = trim($_POST['nationality']);
            
            if ($this->model('Talent_model')->newTalent($data) > 0) {
                header('Location: ' . BASEURL . '/talent');
                exit;
            }
        }
    }
?>