<?php

require_once __DIR__ . "/../config/database.php";
$conn = getDBConnection();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idPeminjam = $_POST['id-peminjam'];
    $idBuku = $_POST['id-buku'];
    $durasiPinjam = $_POST['durasi-pinjam'];

    if (validasiIDPengguna($idPeminjam) && validasiIDBuku($idBuku)) {
        $query = <<<SQL
            INSERT INTO Peminjaman (id_peminjam, id_buku, waktu_pengembalian)
            VALUES (?, ?, ?)
        SQL;

        $waktuPengembalian = new DateTime();
        $waktuPengembalian->modify("+{$durasiPinjam} days");
        $waktuPengembalianStr = $waktuPengembalian->format('Y-m-d');
        $stmt = $conn->prepare($query);
        $stmt->bindParam(1, $idPeminjam, PDO::PARAM_INT);
        $stmt->bindParam(2, $idBuku, PDO::PARAM_INT);
        $stmt->bindParam(3, $waktuPengembalianStr, PDO::PARAM_STR);
        $stmt->execute();

        // Redirect ke root path
        header('Location: /');
    } else {
        http_response_code(404);
        echo json_encode([
            'status'=> 'error',
            'message'=> 'Data yang dikirim tidak bisa ditemukan di database'
        ]);
    }

}

function validasiIDPengguna($idPeminjam): bool {
    global $conn;

    $query = <<<SQL
        SELECT * FROM Pengguna WHERE id = ?
    SQL;
    $stmt = $conn->prepare($query);
    $stmt->bindParam(1, $idPeminjam, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return (!$result) ? false : true;
}

function validasiIDBuku($idBuku): bool {
    global $conn;

    $query = <<<SQL
        SELECT * FROM Buku WHERE id_buku = ?
    SQL;
    $stmt = $conn->prepare($query);
    $stmt->bindParam(1, $idBuku, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return (!$result) ? false : true;
}
