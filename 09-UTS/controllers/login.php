<?php

include '../data/data.php';

session_start();

if (!isset($_SESSION['users_data'])) {
    $_SESSION['users_data'] = $users_data;
}

if (!isset($_SESSION['candidate_data'])) {
    $_SESSION['candidate_data'] = $candidate_data;
}


///////////////////////////////////////////////
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = trim(htmlspecialchars($_POST['nim']));
    $password = trim(htmlspecialchars($_POST['password']));

    foreach ($_SESSION['users_data'] as $user) {
        if ($user['nim'] == $nim && $user['password'] == $password) {
            $_SESSION['user_id'] = $user['nim'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['role'] = $user['role'];

            echo "Login sukses!";
            exit();
        }
    }

    echo "Ada masalah!";
    // header('Location: ../pages/member/dashboard.php');
}
