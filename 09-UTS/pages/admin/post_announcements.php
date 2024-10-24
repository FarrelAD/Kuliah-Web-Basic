<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengumuman | PilihWRI</title>
    <link rel="shortcut icon" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/assets/img/wri-icon.png' ?>"
        type="image/png">
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="../../assets/css/admin/make_voting.css">
</head>

<body>
    <?php
        include '../../components/navbar.php';
        session_start();

        if (!isset($_SESSION['user_id'])) {
            include '../../components/not_authenticated.php';
            exit();
        }

        if (!$_SESSION['role'] == 'admin') {
            include '../../components/not_authorized.php';
        } else {
            ?>
            <main>
                <h1>Buat Pengumuman</h1>
            </main>
    <?php } ?>
</body>

</html>