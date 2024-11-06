<?php 

require_once __DIR__ . "/../config/database.php";
$conn = getDBConnection();

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    // Ekstrak request body
    $inputData = file_get_contents('php://input');
    $data = json_decode($inputData, true);

    if (isset($data['id'])) {
        $id = $data['id'];

        $query = <<<SQL
            DELETE FROM peminjaman
            WHERE id = ?
        SQL;
        $stmt = $conn->prepare($query);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();

        echo json_encode([
            "id"=>$id,
        ]);
    }
}