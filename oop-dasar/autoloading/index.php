<?php
    require_once "App/init.php";

    use App\Product\user as Productuser;
    use App\Service\user as Serviceuser;

    $produk1 = new manga("Bocchi the Rock!", "Aki Hamaji", "Houbunsha", 5, 2017);
    $produk2 = new anime("Bocchi the Rock!", "Keiichiro Saito", "Erika Yoshida", "CloverWorks", 12, 2022);
    
    $cetaksemua = new cetakinfo();
    $cetaksemua->tambahproduk($produk1);
    $cetaksemua->tambahproduk($produk2);

    echo $cetaksemua->cetak();

    echo "<hr>";
    
    new Serviceuser();
    new Productuser();
?>