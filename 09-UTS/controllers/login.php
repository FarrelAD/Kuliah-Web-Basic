<?php

session_start();

$users = json_decode(file_get_contents("../data/users.json"), true);



///////////////////////////////////////////////
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = htmlspecialchars($_POST['nim']);
    $password = htmlspecialchars($_POST['password']);
    $is_login_successful = false;

    foreach ($users as $user) {
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
        switch ($_SESSION['role']) {
            case "admin":
                $redirection_path = "admin/dashboard.php";
                break;
            case "member":
                $redirection_path = "member/dashboard.php";
                break;
            default:
                break;
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
