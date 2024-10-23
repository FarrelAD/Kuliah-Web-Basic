<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemilihan Umum</title>
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="../../assets/css/member/view_vote_result.css">
</head>

<body>
    <?php 
        include '../../components/navbar.php';

        session_start();
    
        if (!isset($_SESSION['user_id'])) {
            include '../../components/not_authenticated.php';
            exit();
        }

        if (!$_SESSION['role'] == 'member') {
            include '../../components/not_authorized.php';
        } else {
    ?>
        <main>
            <h1>Hasil voting</h1>

            <div id="candidate-container">
                <?php 
                
                foreach ($_SESSION['candidate_data'] as $index => $candidate) {
                    echo '
                        <div class="candidate-card">
                            <div class="candidate-photo-container">
                                <img src="' . $candidate["photo_dir"] . '" alt="Candidate photo" class="candidate-photo">
                            </div>
                            <div class="candidate-info">
                                <p class="candidate-name">' . $candidate["name"] . '</p>
                                <p class="total-vote">Total vote: 
                                    <span>'. $candidate['total_vote'].'</span>
                                </p>
                            </div>
                        </div>
                    ';
                }
                
                ?>
            </div>
        </main>
    <?php } ?>
</body>

</html>