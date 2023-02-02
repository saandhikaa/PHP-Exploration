<?php 
    session_start();

    if (!isset($_SESSION["login"])){
        header("Location: login.php");
    }
    
    // menggunakan file lain
    require 'functions.php';
    $pacarku = query("SELECT * FROM pacarku ORDER BY id DESC");
        
    if (!$pacarku){
        getpacar();
    }

    if (isset($_POST["cari"])){
        $pacarku = cari($_POST["keywords"]);
    }

    // logout
    if (isset($_POST["logout"])){
        // hapus session
        session_unset();
        session_destroy();

        // hapus cookie
        setcookie('id', '', time() - 3600);
        setcookie('key', '', time() - 3600);

        // kembali ke halaman login
        header("Location: login.php");
    }

    // pagination
    $jumlahbaris = count(query("SELECT * FROM pacarku"));
    $barisperhalaman = 5;
    $jumlahhalaman = ceil($jumlahbaris / $barisperhalaman);

    //                kondisi                 ? true             : false ;
    $halamansaatini = isset($_GET["halaman"]) ? $_GET["halaman"] : 1 ;

    $startindex = ($barisperhalaman * $halamansaatini) - $barisperhalaman;

    $pacarku = query("SELECT * FROM pacarku ORDER BY id DESC LIMIT $startindex, $barisperhalaman");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pacar</title>
</head>

<body>
    <h1>Pacarku</h1>  
    
    <a href="addtable.php?id=<?=end($pacarku)["id"] + 1?>">Pacar Baru</a><br><br>

    <form action="" method="post">
        <input type="text" name="keywords" size="30" autofocus placeholder="Cari disini.." autocomplete="off">
        <button type="submit" name="cari">Cari</button>
        <button type="submit" name="refresh">Refresh</button>
        <button type="submit" name="logout">Logout</button><br><br>
    </form>
    
    <!-- navigasi -->
    <?php if ($halamansaatini > 1): ?>
        <a href="?halaman=1">first</a>
        <a href="?halaman=<?= $halamansaatini-1;?>">prev</a>
    <?php endif; ?>
    
    <?= $halamansaatini; ?>

    <?php if ($halamansaatini < $jumlahhalaman): ?>
        <a href="?halaman=<?= $halamansaatini+1;?>">next</a>
        <a href="?halaman=<?= $jumlahhalaman ?>">last</a>
    <?php endif; ?>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Foto Ayang</th>
            <th>Nama</th>
            <th>Birth</th>
            <th>Hobi</th>
            <th>Aksi</th>
        </tr>
        
        <?php $urut = 1; ?>
        <?php foreach($pacarku as $row): ?>
            <tr>
                <td><?= $urut; $urut++ ?></td>
                <td><img src="image/<?= $row["foto"];?>" width="100"></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["birth"]; ?></td>
                <td><?= $row["hobi"]; ?></td>
                <td>
                    <a href="edittable.php?id=<?= $row["id"] ?>">Edit bio</a><br><br>
                    <a href="deltable.php?id=<?= $row["id"] ?>" onclick="return confirm('Are you sure?')">Putus</a>
                </td>

            </tr>
        <?php endforeach; ?>
        
    </table>
</body>
</html>