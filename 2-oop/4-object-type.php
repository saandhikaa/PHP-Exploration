<?php
    class manga{
        public  $judul, $penulis, $penerbit, $tahun;
        
        public function __construct($judul="", $penulis="", $penerbit="", $tahun=0){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->tahun = $tahun;
        }
        
        public function getLabel(){
            return "$this->penulis, $this->penerbit";
        }
    }

    class detail{
        public function cetak(manga $value){
            $str = "{$value->judul} by {$value->getLabel()} ({$value->tahun}).";
            return $str;
        }
    }

    $manga1 = new manga("Bocchi the Rock!", "Aki Hamaji", "Houbunsha", 2017);
    
    $info = new detail();
    echo $info->cetak($manga1);
?>