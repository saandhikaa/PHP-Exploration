<?php
    // require_once "Produk/cetak.php";
    // require_once "Produk/Produk.php";
    // require_once "Produk/anime.php";
    // require_once "Produk/manga.php";
    // require_once "Produk/cetakinfo.php";

    spl_autoload_register(function($class){
        require_once __DIR__ . "/Produk/" . $class .  ".php";
    });
?>