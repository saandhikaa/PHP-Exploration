<?php
    class Home extends Controller {
        public function index() {
            $this->view();
            echo "Home/index";
        }
        
        public function detail($nama = "freya") {
            echo "Home/detail = " . ucwords($nama);
        }
    }
?>