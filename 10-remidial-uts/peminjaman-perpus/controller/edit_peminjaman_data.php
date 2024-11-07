<?php

require_once __DIR__ . "/../config/database.php";
require_once __DIR__ . "/../helper/validasiIDPengguna.php";
require_once __DIR__ . "/../helper/validasiIDBuku.php";
require_once __DIR__ . "/../helper/validasiIDPeminjaman.php";

$conn = getDBConnection();


if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    // Ekstrak request body
    $inputData = file_get_contents('php://input');
    $data = json_decode($inputData, true);

    if (
        isset($data['idPeminjaman']) && isset($data['idPeminjam']) &&
        isset($data['idBuku']) && isset($data['durasiPinjam']) &&
        isset($data['waktuAkhirPinjam'])
    ) {
        $idPeminjaman = $data['idPeminjaman'];
        $idPeminjam = $data['idPeminjam'];
        $idBuku = $data['idBuku'];
        $durasiPinjam = $data['durasiPinjam'];
        $waktuAkhirPinjam = $data['waktuAkhirPinjam'];

        if (
            validasiIDPengguna($idPeminjam) && validasiIDBuku($idBuku) &&
            validasiIDPeminjaman($idPeminjaman)
        ) {
            $query = <<<SQL
                UPDATE Peminjaman
                SET id_peminjam = ?, id_buku = ?, durasi_pinjam = ?, waktu_pengembalian = ?
                WHERE id = ?
            SQL;
            $stmt = $conn->prepare($query);
            $stmt->bindParam(1, $idPeminjam, PDO::PARAM_INT);
            $stmt->bindParam(2, $idBuku, PDO::PARAM_INT);
            $stmt->bindParam(3, $durasiPinjam, PDO::PARAM_INT);
            $stmt->bindParam(4, $waktuAkhirPinjam, PDO::PARAM_STR);
            $stmt->bindParam(5, $idPeminjaman, PDO::PARAM_INT);
            $stmt->execute();
        } else {
            http_response_code(404);
            echo json_encode([
                'status' => 'error',
                'message' => 'Data yang dikirim tidak bisa ditemukan di database'
            ]);
        }
    } else {
        echo "Data yang dikirim gak lengkap!";
    }
} else {
    echo "HTTP Request method yang kamu pakai tidak diizinkan!";
    http_response_code(405);
}
