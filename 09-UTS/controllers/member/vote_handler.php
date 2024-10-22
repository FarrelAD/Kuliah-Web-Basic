<?php

include '../../data/data.php';

session_start();

if (!isset($_SESSION['candidate_data'])) {
    $_SESSION['candidate_data'] = $candidate_data;
}



///////////////////////////////////////////////
if (isset($_POST)) {
    $candidate_id = htmlspecialchars($_POST['selected_candidate']);
    
    $_SESSION['candidate_data'][$candidate_id - 1]['total_vote'] += 1;
    echo $candidate_data[$candidate_id - 1]['total_vote'];
    header('Total-Vote: ' . $_SESSION['candidate_data'][$candidate_id -1]['total_vote']);
}