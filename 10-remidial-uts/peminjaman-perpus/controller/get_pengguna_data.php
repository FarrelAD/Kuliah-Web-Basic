<?php 

require_once __DIR__ . "/../config/database.php";

function getPenggunaData(): array {
    $conn = getDBConnection();
    $query = <<<SQL
        SELECT id, nama
        FROM Pengguna
    SQL;
    $stmt = $conn->query($query);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
