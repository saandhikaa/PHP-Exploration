<?php 
    require 'functions.php';
    
    // cek tombol sudah/belum ditekan
    // "submit" --> name
    if (isset($_POST["submit"])){
        if (tambah($_POST) > 0){
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
                <input type="text" name="foto" id="foto" required>
            </li>

            <br><br>

            <button type="submit" name="submit">   Kirim   </button>
        </ul>
    </form>

</body>
</html>