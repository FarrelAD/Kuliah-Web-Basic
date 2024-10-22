<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | PilihWRI</title>
    <link rel="shortcut icon" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/assets/img/wri-icon.png' ?>"
        type="image/png">
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="../../assets/css/admin/dashboard.css">
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
                <h1>Dashboard</h1>
                <a href="make_voting.php" class="admin-menu">Buat Voting</a>
                <a href="vote_result.php" class="admin-menu">Hasil Voting</a>
                <a href="post_announcements.php" class="admin-menu">Posting Pengumuman</a>
            </main>
    <?php } ?>

</body>

</html>