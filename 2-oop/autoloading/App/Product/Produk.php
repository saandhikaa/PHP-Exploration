<?php
    abstract class Produk{
        private $judul, $penulis, $tahun;
        
        protected function __construct($judul="", $penulis="", $tahun=0){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->tahun = $tahun;
        }
        
        public function resetJudul($judulbaru){
            $this->judul = $judulbaru;
        }

        public function resetPenulis($penulisbaru){
            $this->penulis = $penulisbaru;
        }

        public function resetTahun($tahunbaru){
            $this->tahun = $tahunbaru;
        }

        abstract public function detail();

        public function infoproduk(){
            $str = "{$this->judul} ({$this->tahun}) written by {$this->penulis}";
            return $str;
        }
    }
?>