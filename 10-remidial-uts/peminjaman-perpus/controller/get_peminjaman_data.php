<?php

require_once __DIR__ . "/../config/database.php";

function getPeminjamanData(): array {
    $conn = getDBConnection();
    $query = <<<SQL
        SELECT pm.id, nama, judul, durasi_pinjam, waktu_awal_pinjam, waktu_pengembalian
        FROM Peminjaman pm
        INNER JOIN Pengguna pp ON pm.id_peminjam = pp.id
        INNER JOIN Buku b ON pm.id_buku = b.id_buku
    SQL;
    $stmt = $conn->query($query);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
