<?php

session_start();

$users = json_decode(file_get_contents("../../data/users.json"), true);
$candidates = json_decode(file_get_contents("../../data/candidates.json"), true);

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
        
        $is_img_upload_error = false;
        if (isset($images['name'][$i]) && $images['error'][$i] === UPLOAD_ERR_OK) {
            $image_name = basename($images['name'][$i]);
            $image_temp_path = $images['tmp_name'][$i];

            $target_dir = __DIR__ . '/../../assets/img/candidate-photos/';
            $target_file_path = $target_dir . $image_name;

            if (!move_uploaded_file($image_temp_path, $target_file_path)) {
                $is_img_upload_error = true;
            }
        } else {
            $is_img_upload_error = true;
        }

        $get_photo_dir = 'http://' . $_SERVER['HTTP_HOST'] . '/assets/img/candidate-photos/' . $image_name;
        
        $candidates[] = [
            "name"=> $name,
            "class"=>$class,
            "description"=>$description,
            "total_vote"=>0,
            "photo_dir"=>$get_photo_dir
            
        ];

        file_put_contents('../../data/candidates.json', json_encode($candidates, JSON_PRETTY_PRINT));
    }

    if (!$is_img_upload_error) {
        $message = "Gambar gagal diupload";
    } else {
        $message = "Data kandidat berhasil diupload";
    }
    
    $response = [
        "status"=> "Success",
        "message"=> $message
    ];
    echo json_encode( $response );
}