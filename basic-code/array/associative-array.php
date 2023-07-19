<?php 
    // array assosiatif
    // key array bisa dibuat sendiri

    $mahasiswa = 
        [
            [
                "nama"=>"Rose r rosie",
                "uid" => "021197",
                "fav" => "love",
                "foto" => "rose.jpg"
            ],
            [
                "nama"=>"Luka live",
                "uid" => "032398",
                "fav" => ["apple","popcorn"],
                "foto" => "luka.jpg"
            ]
        ];
        echo $mahasiswa[1]["fav"][1] . "<br><br>";
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <title>Pacarku</title>
 </head>

 <body>
     <h1>Daftar Pacar</h1>
     <?php foreach($mahasiswa as $m1): ?>
        <ul>
            <img src="image/<?= $m1["foto"] ?>">
            <li>Name: <?= $m1["nama"] ?></li>
            <li>UID:  <?= $m1["uid"] ?></li>
        </ul>
     <?php endforeach; ?>
 </body>
 </html>