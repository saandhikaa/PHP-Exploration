<?php
    class cetakinfo{
        public $semuaproduk = [];

        public function tambahproduk (Produk $produk){
            $this->semuaproduk[] = $produk;
        }

        public function cetak (){
            $str = "DAFTAR PRODUK:<br>";

            foreach ($this->semuaproduk as $p){
                $str .= "- {$p->detail()} <br>";
            }

            return $str;
        }
    }
?>