<?php
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
?>