<?php
    class Home {
        public function index() {
            echo "Home/index";
        }
        
        public function detail($nama = "freya") {
            echo "Home/detail = " . ucwords($nama);
        }
    }
?>