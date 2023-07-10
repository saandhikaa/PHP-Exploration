<?php
    class manga{
        public  $judul, $penulis, $penerbit, $tahun;
        
        public function __construct($judul="", $penulis="", $penerbit="", $tahun=0){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->tahun = $tahun;
        }
    }

    $manga1 = new manga("Naruto","Masashi Kishimoto");
    var_dump($manga1);
    
?>