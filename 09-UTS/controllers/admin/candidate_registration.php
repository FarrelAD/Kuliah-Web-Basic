<?php

include '../../data/data.php';

session_start();

if (!isset($_SESSION['users_data'])) {
    $_SESSION['users_data'] = $users_data;
}

if (!isset($_SESSION['candidate_data'])) {
    $_SESSION['candidate_data'] = $candidate_data;
}

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    echo 'Tidak bisa melakukan request. Kamu tidak memperoleh otorisasi!';
    exit();
}


///////////////////////////////////////////////
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $names = $_POST['name'];
    $classes = $_POST['student_class'];
    $descriptions = $_POST['description'];
    $images = $_FILES['image'];

    
    for ($i = 0; $i < count($names); $i++) {
        $name = $names[$i];
        $class = $classes[$i];
        $description = $descriptions[$i];
        
        if (isset($images['name'][$i]) && $images['error'][$i] === UPLOAD_ERR_OK) {
            $image_name = basename($images['name'][$i]);
            $image_temp_path = $images['tmp_name'][$i];

            $target_dir = 'http://' . $_SERVER['HTTP_HOST'] . '/assets/img/candidate-photos/';
            $target_file_path = $target_dir . $image_name;

            if (move_uploaded_file($image_temp_path, $target_file_path)) {
                echo "Image for $name uploaded successfully.<br>";
            } else { 
                echo "Error uploading image for $name.<br>";
            }
        } else {
            echo "No image provided for $name.<br>";
        }

        $_SESSION['candidate_data'][] = [
            "name"=> $names,
            "class"=>$class,
            "description"=>$description,
            "total_vote"=>0,
            "photo_dir"=>$target_file_path
        ];
    }
}