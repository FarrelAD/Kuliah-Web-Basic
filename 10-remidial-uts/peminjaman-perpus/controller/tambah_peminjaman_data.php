<?php

require_once __DIR__ . "/../config/database.php";
require_once __DIR__ . "/../helper/validasiIDPengguna.php";
require_once __DIR__ . "/../helper/validasiIDBuku.php";

$conn = getDBConnection();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idPeminjam = $_POST['id-peminjam'];
    $idBuku = $_POST['id-buku'];
    $durasiPinjam = $_POST['durasi-pinjam'];

    if (validasiIDPengguna($idPeminjam) && validasiIDBuku($idBuku)) {
        $query = <<<SQL
            INSERT INTO Peminjaman (id_peminjam, id_buku, durasi_pinjam, waktu_awal_pinjam, waktu_pengembalian)
            VALUES (?, ?, ?, ?, ?)
        SQL;

        $waktuAwalPinjam = new DateTime();
        $waktuAwalPinjamStr = $waktuAwalPinjam->format('Y-m-d');
        $waktuPengembalian = new DateTime();
        $waktuPengembalian->modify("+{$durasiPinjam} days");
        $waktuPengembalianStr = $waktuPengembalian->format('Y-m-d');
        $stmt = $conn->prepare($query);
        $stmt->bindParam(1, $idPeminjam, PDO::PARAM_INT);
        $stmt->bindParam(2, $idBuku, PDO::PARAM_INT);
        $stmt->bindParam(3, $durasiPinjam, PDO::PARAM_INT);
        $stmt->bindParam(4, $waktuAwalPinjamStr, PDO::PARAM_STR);
        $stmt->bindParam(5, $waktuPengembalianStr, PDO::PARAM_STR);
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
