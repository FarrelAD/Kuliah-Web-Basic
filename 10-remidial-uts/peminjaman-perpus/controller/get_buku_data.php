<?php 

require_once __DIR__ . "/../config/database.php";

function getBukuData(): array {
    $conn = getDBConnection();
    $query = <<<SQL
        SELECT id_buku, judul
        FROM Buku
    SQL;
    $stmt = $conn->query($query);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
