<?php 
    require 'functions.php';

    if (isset($_POST["daftar"])){
        if (registration($_POST) > 0){
            echo "<script>alert('Pendaftaran Berhasil')</script>";
        }else{
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registrasi</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>

<body>
    <h1>Halaman Registrasi</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username">
                <br><br>
            </li>

            <li>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password">
                <br><br>
            </li>
            
            <li>
                <label for="password2">Konfirmasi password: </label>
                <input type="password" name="password2" id="password2">
                <br><br>
            </li>
            
            <button type="submit" name="daftar">Daftar</button><br><br>

            <a href="login.php">Login</a>
        </ul>
    </form>  
</body>
</html>