<?php
    class Pacar_model {
        private $pacarku = array(
            array(
                "nama" => "Dilreba",
                "ultah" => "3 juni",
                "negara" => "Cina"
            ),
            array(
                "nama" => "Freya",
                "ultah" => "13 februari",
                "negara" => "Indonesia"
            ),
            array(
                "nama" => "Rose",
                "ultah" => "11 februari",
                "negara" => "Korea"
            )
        );
        
        public function daftarPacar() {
            return $this->pacarku;
        }
    }
?>