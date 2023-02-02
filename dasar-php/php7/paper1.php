<?php 
    /* variabel super global:
        1. $_GET
        2. $_POST
        3. $_REQUEST
        4. $_SESSION
        5. $_COOKIE
        6. $_SERVER
        7. $_ENV
    */

    $pacar = 
    [
        [
            "nama"=> "Rose r rosie",
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

    var_dump($_GET);
    echo "<br><br>";

    echo $_SERVER["SERVER_NAME"];
    echo "<br><br>";
    
    // variabel scope
    $x = 10;

    function tampil(){
        $x = 12;
        echo $x . ", ";

        global $x;
        echo $x ."<br>";
    }

    tampil();
    echo $x;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>

<body>
    <h1>Pacarku</h1>
    <ul>
        <?php foreach($pacar as $m1): ?>
            <li>
                <a href="paper2.php?nama=<?= $m1["nama"]; ?>&foto=<?= $m1["foto"] ?>">
                    <?= $m1["nama"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>