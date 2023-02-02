<?php
    //-----------------------------------------------------

    // 0. Sintak dasar: echo, print_r(), var_dump()
    // 1. PHP di dalam HTML
    // 2. Variabel --> $<variabel-name>
    // 3. Aritmatika: + - * / %
    // 4. Operator: penggabungan/concate --> <text1> . <text2>
    // 5. Assignment: =  +=  -=  *=  /=  %=  .=
    // 6. Perbandingan: <  >  <=  >=  ==  !=
    // 7. Identitas: ===  !==
    // 8. Logika: &&  ||  !

    //-----------------------------------------------------

    // Note 2
    $nama = "Rose";
    $x = 10;
    $y = 20;

    // Note 3
    echo $x + ($x * $y);
    echo " | ";

    // Note 4
    echo $nama . " " . $x;
    echo " | ";

    // Note 5
    echo $nama .= "'s";
    echo " | ";

    // Note 6
    var_dump($x == "10");
    echo " | ";

    // Note 7
    var_dump($y === "20");
    echo " | ";

    // Note 8
    var_dump($x > 2 && $y == 20);
    echo " | ";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn php</title>
</head>
<body>
    <h1>welcome!</h1>
    <h2>
        <?php 
            echo "$nama is red";
        ?> 
    </h2>
</body>
</html>