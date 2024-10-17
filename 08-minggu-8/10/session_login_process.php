<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" &&
    $password == "1234") {
    session_start();

    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';

    echo "Anda berhasil login! Silakan menuju <a href='home_session.php'>Halaman home</a>";
} else {
    echo "Gagal login! Silakan login lagi <a href='session_login_form.html'>Halaman login</a>";
}
