<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemilihan Umum</title>
    <link rel="stylesheet" href="../../assets/css/global.css">
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
            <h1>Halaman hasil voting</h1>
        </main>
    <?php } ?>
</body>

</html>