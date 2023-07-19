<?php
    class manga{
        // property
        public  $judul = "Judul",
                $penulis = "Penulis",
                $penerbit = "Penerbit",
                $tahun = 0;

        // method
        public function sayHello(){
            return "Hello World!";
        }

        public function getLabel(){
            return "$this->penulis, $this->penerbit";
        }
    }

    $manga1 = new manga();
    $manga1->judul = "Naruto";
    $manga1->penulis = "Masashi Kishimoto";
    $manga1->penerbit = "Shueisha";
    $manga1->tahun = 1997;
    echo "Manga : $manga1->judul, $manga1->penerbit<br>";
    // var_dump($manga1);

    $manga2 = new manga();
    $manga2->judul = "Bocchi the rock";
    $manga2->penulis = "Aki hamaji";
    $manga2->penerbit = "Houbunsha";
    echo "Manga : $manga2->judul, $manga2->penerbit<br>";
    // var_dump($manga2);
    
    // echo "<br>";
    // echo $manga1->sayHello();

    echo "<br>";
    echo $manga1->getLabel();

    echo "<br>";
    echo $manga2->getLabel();
    
?>