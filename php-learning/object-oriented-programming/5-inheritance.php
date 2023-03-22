<?php
    class Produk{
        public  $judul, $penulis, $tahun;
        
        public function __construct($judul="", $penulis="", $tahun=0){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->tahun = $tahun;
        }
        
    }

    class manga extends Produk{
        public function detail(){
            $str = "Manga: {$this->judul} written by {$this->penulis} ({$this->tahun})";
            return $str;
        }
    }

    class anime extends Produk{
        public function detail(){
            $str = "Anime: {$this->judul} written by {$this->penulis} ({$this->tahun})";
            return $str;
        }
    }

    $produk1 = new manga("Bocchi the Rock!", "Aki Hamaji", 2017);
    echo $produk1->detail();
    
?>