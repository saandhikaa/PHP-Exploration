<?php
    // https://www.php.net/manual/en/funcref.php

    echo date("d") . "<br>";
    echo date("l",strtotime("23 mar 1998")) . "<br>" . "<br>";

    // time() --> unix time --> detik sejak 1-1-1970
    echo time() . "<br>";
    echo date("d", time() + (60*60*24*5)) . "<br>" . "<br>";


    // mktime() --> mktime(jam,menit,detik,bulan,tanggal,tahun)
    echo mktime(18,0,0,3,23,1998) . "<br>";
    echo date("l", mktime(18,0,0,3,23,1998)) . "<br>" . "<br>";

?>