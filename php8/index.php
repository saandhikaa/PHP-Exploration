<?php 
    session_start();

    if (!isset($_SESSION["login"])){
        header("Location: login.php");
    }
    
    // menggunakan file lain
    require 'functions.php';
    $pacarku = query("SELECT * FROM pacarku");
        
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