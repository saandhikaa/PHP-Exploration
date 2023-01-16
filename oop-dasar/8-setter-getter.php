<?php
    class Produk{
        protected $judul, $penulis, $tahun;
        
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
    }

    class manga extends Produk{
        private $penerbit, $volumes;

        public function __construct($judul="<none>", $penulis="<none>", $penerbit="<none>", $volume=0, $tahun=0){
            parent::__construct($judul, $penulis, $tahun);
            $this->penerbit = $penerbit;
            $this->volumes = $volume;
        }

        public function detail(){
            $str = "MANGA: {$this->judul} written by {$this->penulis}, vol.{$this->volumes}, {$this->penerbit}: {$this->tahun}";
            return $str;
        }
    }

    class anime extends Produk{
        private $pengarah, $studio, $episodes;

        public function __construct($judul, $pengarah, $penulis, $studio, $episode, $tahun){
            parent::__construct($judul, $penulis, $tahun);
            $this->pengarah = $pengarah;
            $this->studio = $studio;
            $this->episodes = $episode;
        }
        public function detail(){
            $str = "ANIME: {$this->judul} directed by {$this->pengarah}, written by {$this->penulis}, eps.{$this->episodes}, Studio {$this->studio}: {$this->tahun}";
            return $str;
        }
    }

    $produk1 = new manga("Bocchi the Rock!", "Aki Hamaji", "Houbunsha", 5, 2017);
    $produk2 = new anime("Bocchi the Rock!", "Keiichiro Saito", "Erika Yoshida", "CloverWorks", 12, 2022);
    
    // $produk1->judul = "Manga bocchi";  --cant use this way

    $produk1->resetJudul("Bocchi the gang");
    $produk2->resetPenulis("Aki Hamaji");

    echo $produk1->detail();
    echo "<br>";

    echo $produk2->detail();
?>