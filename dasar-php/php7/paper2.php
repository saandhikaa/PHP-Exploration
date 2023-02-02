<?php 
    // cek data yg ada pada &_GET
    if(!isset($_GET["nama"]) || !isset($_GET["foto"])){
        // redirect to
        header("Location: paper1.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Pacar</title>
</head>

<body>
    <ul>
        <img src="image/<?= $_GET["foto"]?>">
        <li>Nama: <?= $_GET["nama"]; ?></li>
    </ul>

    <a href="paper1.php">back</a>
</body>
</html>