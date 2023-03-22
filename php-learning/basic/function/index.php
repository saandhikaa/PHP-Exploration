<?php 
    function greeting($nama = "Rose", $waktu = 8){
        $greet = "";
        if ($waktu >= 5 && $waktu <= 9){
            $greet = "Pagi";
        } elseif ($waktu >= 10 && $waktu <= 15){
             $greet = "Siang";
        } elseif ($waktu >= 16 && $waktu <= 19){
            $greet = "Sore";
        } else{
             $greet = "Malam";
        }

        return "Hai " . $nama . " Cantik<br>Selamat " . $greet;

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo greeting("Rose",19) ?></h1>
</body>
</html>