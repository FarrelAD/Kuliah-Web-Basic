<?php

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