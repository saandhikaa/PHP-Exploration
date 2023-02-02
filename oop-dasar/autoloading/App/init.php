<?php
    // require_once "Produk/cetak.php";
    // require_once "Produk/Produk.php";
    // require_once "Produk/anime.php";
    // require_once "Produk/manga.php";
    // require_once "Produk/cetakinfo.php";

    spl_autoload_register(function($class){
        $class = explode('\\', $class);
        require_once __DIR__ . "/Product/" . end($class) .  ".php";
    });
    
    spl_autoload_register(function($class){
        $class = explode('\\', $class);
        require_once __DIR__ . "/Service/" . end($class) .  ".php";
    });
?>