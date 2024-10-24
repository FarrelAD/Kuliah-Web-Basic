<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | PilihWRI</title>
    <link rel="shortcut icon" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/assets/img/wri-icon.png' ?>" type="image/png">
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="../../assets/css/member/dashboard.css">
</head>

<body>
    <?php 
        include '../../components/navbar.php';
        session_start();
    
        if (!isset($_SESSION['user_id'])) {
            include '../../components/not_authenticated.php';
            exit();
        }

        if (!$_SESSION['role'] == 'member') {
            include '../../components/not_authorized.php';
        } else {
    ?>
        <main>
            <h1>Dashboard</h1>
            <a href="vote.php" id="vote-link">Voting</a>
            <a href="view_vote_result.php" id="view-vote-result-link">Lihat hasil voting</a>
        </main>
    <?php } ?>
</body>

</html>