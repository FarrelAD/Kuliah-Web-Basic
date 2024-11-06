<?php

require_once __DIR__ . "/../config/database.php";
$conn = getDBConnection();


if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    // Ekstrak request body
    $inputData = file_get_contents('php://input');
    $data = json_decode($inputData, true);

    if (isset($data['idPeminjaman']) && isset($data['idPeminjam']) && 
        isset($data['idBuku'])) {
        $idPeminjaman = $data['idPeminjaman'];
        $idPeminjam = $data['idPeminjam'];
        $idBuku = $data['idBuku'];

        $query = <<<SQL
            UPDATE Peminjaman
            SET id_peminjam = ?, id_buku = ?
            WHERE id = ?
        SQL;
        $stmt = $conn->prepare($query);
        $stmt->bindParam(1, $idPeminjam, PDO::PARAM_INT);
        $stmt->bindParam(2, $idBuku, PDO::PARAM_INT);
        $stmt->bindParam(3, $idPeminjaman, PDO::PARAM_INT);
        $stmt->execute();
    }
} else {
    echo "HTTP Request method yang kamu pakai tidak diizinkan!";
    http_response_code(405);
}