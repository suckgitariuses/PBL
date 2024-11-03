<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <h3><?= isset($_SESSION['error']) ? $_SESSION['error'] : "" ?></h3>
    <h3><?= isset($_SESSION['logout']) ? $_SESSION['logout'] : "" ?></h3>
    <form action="./../routes/route.php?page=proses_login" method="post">
        <label for="NIM">NIM</label><br>
        <input type="number" name="nim"><br>
        <label for="password">password</label><br>
        <input type="text" name="password"><br>
        <input type="submit" value="Login">
    </form>
    <?php
        unset($_SESSION['error']);
        unset($_SESSION['logout']);
    ?>
</body>
</html>