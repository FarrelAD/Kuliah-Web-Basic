<?php

$serverName = "LAPTOP-V9Q55RPI";
$database = "db_perpustakaan_web_uts";
$username = "";
$password = "";

function getDBConnection(): PDO {
    global $serverName, $database, $username, $password;
    try {
        $dsn = "sqlsrv:Server=$serverName; Database=$database";
        $conn = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        echo "". $e->getMessage();
    }

    return $conn;
}
