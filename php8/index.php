<?php 
    // menggunakan file lain
    require 'functions.php';
    $pacarku = query("SELECT * FROM pacarku")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pacar</title>
</head>

<body>
    <h1>Pacarku</h1>    
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Birth</th>
            <th>Hobi</th>
            <th>Aksi</th>
        </tr>
        
        <?php $urut = 1; ?>
        <?php foreach($pacarku as $row): ?>
            <tr>
                <td><?= $urut; $urut++ ?></td>
                <td><img src="image/<?php echo $row["foto"];?>" width="100"></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["birth"]; ?></td>
                <td><?= $row["hobi"]; ?></td>
                <td>
                    <a href="">ubah</a><br><br>
                    <a href="">hapus</a>
                </td>

            </tr>
        <?php endforeach; ?>
        
    </table>
</body>
</html>