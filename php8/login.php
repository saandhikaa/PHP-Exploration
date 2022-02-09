<?php 
    require 'functions.php';

    if (isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        // cek username
        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
        if (mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);

            // cek password
            if (password_verify($password, $row["password"])){
                header("location: index.php");
                exit;
            }

        }

        $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>

<body>
    <h1>Halaman Login</h1>

    <?php if (isset($error)): ?>
        <p style="color: red; font-style: italic;">Username / password salah!</p>
    <?php endif; ?>
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

            <button type="submit" name="login">Login</button><br><br>

            <a href="registration.php">Daftar sekarang</a>
        </ul>
    </form>
</body>
</html>