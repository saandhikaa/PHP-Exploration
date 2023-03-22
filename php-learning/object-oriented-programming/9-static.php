<?php
    class class_normal{
        public $angka = 1;

        public function halo(){
            return "Halo ke-" . $this->angka++;
        }
    }
    
    class class_static{
        public static $angka = 1;

        public function halo(){
            return "Halo ke-" . self::$angka++; // call static property
        }

        public static function static_halo(){
            return "Halo Dunia";
        }
    }
    
    $objnormal1 = new class_normal();
    echo $objnormal1->halo() . "<br>";
    echo $objnormal1->halo() . "<br>";
    echo $objnormal1->halo() . "<br>";

    echo "<br>";

    $objnormal2 = new class_normal();
    echo $objnormal2->halo() . "<br>";
    echo $objnormal2->halo() . "<br>";
    echo $objnormal2->halo() . "<br>";

    
    echo "<hr>";

    $objstatic1 = new class_static();
    echo $objstatic1->halo() . "<br>";
    echo $objstatic1->halo() . "<br>";
    echo $objstatic1->halo() . "<br>";
    
    echo "<br>";
    
    $objstatic2 = new class_static();
    echo $objstatic2->halo() . "<br>";
    echo $objstatic2->halo() . "<br>";
    echo $objstatic2->halo() . "<br>";

    echo "<hr>";

    echo class_static::static_halo();  // call static method
?>