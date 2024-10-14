<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $errors = [];

    if (empty($nama)) {
        $errors[] = "Nama harus diisi";
    }

    if (empty($email)) {
        $errors[] = "Email harus diisi";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid!";
    }

    if (empty($password)) {
        $errors[] = "Password harus diisi";
    }

    if (!empty($errors)) {
        foreach ($errors as $key => $error) {
            echo $error . "<br>";
        }
    } else {
        echo "
            <p>Data berhasil dikirim: </p>
                <ol>
                    <li>Nama: " . $nama . "</li>
                    <li>Email: " . $email . "</li>
                    <li>Password: " . $password . "</li>
                </ol>
        ";
    }
    
}
