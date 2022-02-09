<?php 
    session_start();
        
    if (!isset($_SESSION["login"])){
        header("Location: login.php");
    }

    require 'functions.php';
    $newid = $_GET["id"];

    // cek tombol sudah/belum ditekan
    // "submit" --> name
    if (isset($_POST["submit"])){

        if (tambah($_POST, $newid) > 0){
            header("Location: index.php");
        }else{
            echo "Biodata pacar tidak diterima";
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

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" required>
            </li>

            <li>
                <label for="birth">Birth: </label>
                <input type="text" name="birth" id="birth" required>
            </li>

            <li>
                <label for="hobi">Hobi: </label>
                <input type="text" name="hobi" id="hobi" required>
            </li>
            
            <li>
                <label for="foto">Foto: </label>
                <input type="file" name="foto" id="foto" >
            </li>

            <br><br>

            <button type="submit" name="submit">Kirim</button>
        </ul>
    </form>

</body>
</html>