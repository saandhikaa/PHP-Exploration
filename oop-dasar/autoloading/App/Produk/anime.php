<?php
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
?>