<?php

session_start();

$candidates = json_decode(file_get_contents("../../data/candidates.json"), true);



///////////////////////////////////////////////
if (isset($_POST)) {
    $candidate_id = htmlspecialchars($_POST['selected_candidate']);
    
    $candidates[$candidate_id - 1]['total_vote'] += 1;

    // Update data to JSON file
    file_put_contents('../../data/candidates.json', json_encode($candidates, JSON_PRETTY_PRINT));
    
    $response = [
        "status"=>"Success",
        "totalVote"=>$candidates[$candidate_id - 1]['total_vote']
    ];
    echo json_encode( $response );
}