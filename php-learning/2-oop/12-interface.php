<?php

    interface cetak{
        public function detail();
    }

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

    class manga extends Produk implements cetak{
        private $penerbit, $volumes;

        public function __construct($judul="<none>", $penulis="<none>", $penerbit="<none>", $volume=0, $tahun=0){
            parent::__construct($judul, $penulis, $tahun);
            $this->penerbit = $penerbit;
            $this->volumes = $volume;
        }

        public function detail(){
            $str = "MANGA: {$this->infoproduk()}, vol.{$this->volumes}, {$this->penerbit}";
            return $str;
        }
    }

    class anime extends Produk implements cetak{
        private $pengarah, $studio, $episodes;

        public function __construct($judul, $pengarah, $penulis, $studio, $episode, $tahun){
            parent::__construct($judul, $penulis, $tahun);
            $this->pengarah = $pengarah;
            $this->studio = $studio;
            $this->episodes = $episode;
        }
        public function detail(){
            $str = "ANIME: {$this->infoproduk()} directed by {$this->pengarah}, eps.{$this->episodes}, Studio {$this->studio}";
            return $str;
        }
    }

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

    $produk1 = new manga("Bocchi the Rock!", "Aki Hamaji", "Houbunsha", 5, 2017);
    $produk2 = new anime("Bocchi the Rock!", "Keiichiro Saito", "Erika Yoshida", "CloverWorks", 12, 2022);
    
    $cetaksemua = new cetakinfo();
    $cetaksemua->tambahproduk($produk1);
    $cetaksemua->tambahproduk($produk2);

    echo $cetaksemua->cetak();
?>