<?php 
    if(isset($_POST["submit"])){
        if($_POST["username"] == "admin" && $_POST["password"] == "live"){
            header("Location: admin.php");
        }else{
            $errorlogin = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login Admin</h1>
    <ul>
        <form action="" method="post">
            <li>
                <label for="un">Username: </label>
                <input type="text" name="username" id="un">
            </li>
            <li>
                <label for="pw">Password: </label>
                <input type="password" name="password" id="pw">
            </li>
            <br>

            <?php if (isset($errorlogin)): ?>
                <p style="color:red; font-style:italic">username / password salah!</p>
            <?php endif; ?>

            <button type="submit" name="submit">Login</button>
        </form>
    </ul>
</body>
</html>