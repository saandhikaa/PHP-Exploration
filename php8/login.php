<?php 
    session_start();
    
    require 'functions.php';

    // cek cookie
    if (isset($_COOKIE['id']) && isset($_COOKIE['key'])){
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        $result = mysqli_query($conn, "SELECT username FROM users WHERE id = $id");
        $row = mysqli_fetch_assoc($result);

        // cek cookie dan username
        if ($key === hash('sha256', $row['username'])){
            $_SESSION['login'] = true;
        }
    }

    if (isset($_SESSION["login"])){
        header("Location: index.php");
        exit;
    }

    if (isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        // cek username
        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
        if (mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);

            // cek password
            if (password_verify($password, $row["password"])){
                
                // set session
                $_SESSION["login"] = true;

                // cek remember me
                if (isset($_POST['remember'])){
                    
                    // buat cookie
                    setcookie('id', $row['id'], time()+120);
                    setcookie('key', hash('sha256', $row['username']), time()+120);
                }

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
        .newline{
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
                <div class="newline"><label for="username">Username: </label></div>
                <input type="text" name="username" id="username">
                <br><br>
            </li>

            <li>
                <div class="newline"><label for="password">Password: </label></div>
                <input type="password" name="password" id="password"><br><br>
                
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
                <br><br>
            </li>

            <button type="submit" name="login">Login</button><br><br>

            <a href="registration.php">Daftar sekarang</a>
        </ul>
    </form>
</body>
</html>