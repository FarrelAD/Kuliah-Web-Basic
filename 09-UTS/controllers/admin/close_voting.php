<?php

$candidates = json_decode(file_get_contents("../../data/candidates.json"), true);

$candidates = [];

file_put_contents('../../data/candidates.json', json_encode($candidates, JSON_PRETTY_PRINT));

$response = [
    "status"=> "Success",
    "message"=> "Data voting berhasil ditutup!"
];
echo json_encode( $response );