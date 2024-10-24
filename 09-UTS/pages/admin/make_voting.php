<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Kandidat | PilihWRI</title>
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
                <h1>Buat voting</h1>

                <p>Masukkan jumlah kandidat</p>
                <input id="candidate-total-input" type="number" min="1" placeholder="0">
                <button id="generator-form-btn">OK</button>

                <form id="form-registration" action="../../controllers/admin/candidate_registration.php" enctype="multipart/form-data" method="post">
                </form>
            </main>

            <script src="../../assets/js/jquery/jquery-3.7.1.min.js"></script>
            <script src="../../assets/js/admin/make_voting.js"></script>
    <?php } ?>
</body>

</html>