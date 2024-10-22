<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | PilihWRI</title>
    <link rel="shortcut icon" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/assets/img/wri-icon.png' ?>"
        type="image/png">
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="../../assets/css/profile.css">
</head>

<body>
    <?php
        include '../components/navbar.php';
        session_start();

        if (!isset($_SESSION['user_id'])) {
            include '../components/not_authenticated.php';
            exit();
        }

        if (!$_SESSION['role'] == 'admin') {
            include '../components/not_authorized.php';
        } else {
            echo "<main>
                <h1>Profil akun anda</h1>
                <hr>
                <p>Nama : " . $_SESSION['name'] . "</p>
                <p>Role : " . $_SESSION['role'] . "</p>

                <a id='logout-btn' href='../controllers/logout.php'>Logout</a>
            </main>
            ";
        } ?>
</body>

</html>