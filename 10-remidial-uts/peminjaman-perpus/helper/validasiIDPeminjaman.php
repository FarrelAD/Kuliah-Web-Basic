<?php

function validasiIDPeminjaman($idPeminjaman): bool {
    global $conn;

    $query = <<<SQL
        SELECT * FROM Peminjaman WHERE id = ?
    SQL;
    $stmt = $conn->prepare($query);
    $stmt->bindParam(1, $idPeminjaman, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return (!$result) ? false : true;
}
