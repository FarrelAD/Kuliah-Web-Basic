<?php

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
