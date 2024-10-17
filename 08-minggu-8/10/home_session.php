<html>

<head>
    <title>PHP Home Session</title>
</head>

<body>
    <?php
        session_start();
        if ($_SESSION['status'] == 'login') {
            echo "
                <p>Selamat datang " . $_SESSION['username'] . "</p>
                <a href='session_logout.php'>Logout</a>";
        } else {
            echo "
                <p>Anda belum login, silakan</p>
                <a href='sesssion_login_form.html'>Login</a>
            ";
        }
    ?>
</body>

</html>