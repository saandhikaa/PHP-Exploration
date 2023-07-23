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
        
        public function delete ($id) {
            if ($this->model('Talent_model')->deleteTalent($id) > 0) {
                Flasher::setFlash("Talent delete", "successfully", "success");
                header('Location: ' . BASEURL . '/talent');
                exit;
            } else {
                Flasher::setFlash("Talent delete", "failed", "danger");
                header('Location: ' . BASEURL . '/talent');
                exit;
            }
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
                Flasher::setFlash("New talent add", "successfully", "success");
                header('Location: ' . BASEURL . '/talent');
                exit;
            } else {
                Flasher::setFlash("New talent add", "failed", "danger");
                header('Location: ' . BASEURL . '/talent');
                exit;
            }
        }
    }
?>