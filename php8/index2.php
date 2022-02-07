<?php 
    // koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "pacar");

    // ambil data dari database
    $result = mysqli_query($conn, "SELECT * FROM pacarku");
    if (!$result){
        echo mysqli_error($conn) . "<br><br>";
    }
    //var_dump($result);

    // ambil data (fetch) dari $result
    //  mysqli_fetch_row()
    //  mysqli_fetch_assoc()
    //  mysqli_fetch_array()
    //  mysqli_fetch_object()

    // while ($var1 = mysqli_fetch_assoc($result)){
    //   var_dump($var1["nama"]);
    // }

    
    
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
            <th>ID.</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Birth</th>
            <th>Hobi</th>
            <th>Aksi</th>
        </tr>
        
        <?php $urut = 1; ?>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
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
        <?php endwhile; ?>
        
    </table>
</body>
</html>