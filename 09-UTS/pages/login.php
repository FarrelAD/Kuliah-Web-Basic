<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | PilihWRI</title>
    <link rel="shortcut icon" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/assets/img/wri-icon.png' ?>" type="image/png">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
    <?php include '../components/navbar.php' ?>

    <main>
        <form action="../controllers/login.php" id="form-login">
            <h1>Login</h1>
            <input type="number" name="nim" id="nim-input" placeholder="Masukkan NIM" required>

            <br>

            <input type="password" name="password" id="password-input" placeholder="Masukkan password" required>

            <input type="submit" value="Login">

            <a id="forget-password-link" href="">Lupa password?</a>
        </form>
    </main>

    <script src="../assets/js/jquery/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/login.js"></script>
</body>

</html>