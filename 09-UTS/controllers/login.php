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
    $is_login_successful = false;

    foreach ($_SESSION['users_data'] as $user) {
        if ($user['nim'] == $nim && $user['password'] == $password) {
            $_SESSION['user_id'] = $user['nim'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['role'] = $user['role'];

            $is_login_successful = true;
            break;
        }
    }

    if ($is_login_successful) {
        $redirection_path = "";
        if ($_SESSION['role'] == 'admin') {
            $redirection_path = "admin/dashboard.php";
        } elseif ($_SESSION['role'] == 'member') {
            $redirection_path = "member/dashboard.php";
        }

        $response = [
            "status"=> "Success",
            "redirectionPath"=> $redirection_path,
        ];
    }  else{
        $response = [
            "status"=> "Failed",
            "message"=> "Login failed!",
        ];
    }
    
    echo json_encode( $response );
}
