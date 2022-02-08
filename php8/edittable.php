<?php 
    require 'functions.php';
    
    // ambil data dari URL
    $id = $_GET["id"];

    // query data berdasarkan id, index [0]
    $pacar = query("SELECT * FROM pacarku WHERE id = $id")[0];

    // cek tombol sudah/belum ditekan
    // "submit" --> name
    if (isset($_POST["submit"])){
        if (ubah($_POST) > 0){
            header("Location: index.php");
        }else{
            echo "gagal";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah</title>
</head>

<body>
    <h1>Biodata pacar</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $pacar["id"]; ?>">
        <ul>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" required value="<?= $pacar["nama"] ?>">
            </li>

            <li>
                <label for="birth">Birth: </label>
                <input type="text" name="birth" id="birth" required value="<?= $pacar["birth"] ?>">
            </li>

            <li>
                <label for="hobi">Hobi: </label>
                <input type="text" name="hobi" id="hobi" required value="<?= $pacar["hobi"] ?>">
            </li>
            
            <li>
                <label for="foto">Foto: </label>
                <input type="text" name="foto" id="foto" required value="<?= $pacar["foto"] ?>">
            </li>

            <br><br>

            <button type="submit" name="submit">   Kirim   </button>
        </ul>
    </form>

</body>
</html>