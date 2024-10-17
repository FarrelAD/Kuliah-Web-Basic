<?php

$target_directory = "documents/";

if (!file_exists($target_directory)) {
    mkdir($target_directory, 0777, true);
}

if ($_FILES['files']['name'][0]) {
    $total_files = count($_FILES['files']['name']);

    for ($i=0; $i < $total_files; $i++) { 
        $file_name = $_FILES['files']['name'][$i];
        $target_file = $target_directory . $file_name;
        
        if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $target_file)) {
            echo "File $file_name berhasil diunggah. <br>";
        } else {
            echo "Gagal mengunggah file $file_name. <br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah";
}
