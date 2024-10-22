<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PilihWRI!</title>
    <link rel="shortcut icon" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/assets/img/wri-icon.png' ?>" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>
    <?php 
        include 'components/navbar.php';
        session_start();
    ?>

    <main>

        <div id="hero-section">
            <div id="hero-description">
                <h1 id="hero-web-title">PilihWRI!</h1>
                <p>Suara Anda, Masa Depan Kita!</p>
                <p>Bergabunglah dalam pemilihan ketua WRI secara online. Setiap suara berarti dalam menentukan pemimpin yang tepat untuk masa depan kita.</p>

                <h3 id="community-tagline">#WRI EXPLORE!</h3>
            </div>

            <img src="assets/img/check-mark-icon.jpg" alt="Vote img" id="vote-icon">
        </div>

        <?php 
            $trigger_link = "pages/login.php";

            if (isset($_SESSION['user_id']) ) {
                if ($_SESSION['role'] == 'admin') {
                    $trigger_link = 'pages/admin/dashboard.php';
                } elseif ($_SESSION['role'] == 'member') {
                    $trigger_link = 'pages/member/dashboard.php';
                }
            }
        ?>

        <a id="vote-trigger-link" href="<?php echo $trigger_link; ?>">Ikuti voting sekarang</a>
    </main>
</body>

</html>