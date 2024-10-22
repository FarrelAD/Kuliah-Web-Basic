<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting | PilihWRI</title>
    <link rel="shortcut icon" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/assets/img/wri-icon.png' ?>" type="image/png">
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="../../assets/css/member/vote.css">
</head>

<body>
    <?php 
        include '../../components/navbar.php';
        
        session_start();
    
        if (!isset($_SESSION['user_id'])) {
            include '../../components/not_authenticated.php';
            exit();
        }

        if ($_SESSION['role'] == 'member') {
    ?>

        <main>
            <h1>Voting</h1>
            <p>Silakan pilih pemimpin yang menurut anda paling cocok untuk memimpin komunitas ini!</p>

            <form id="form-vote" method="post" action="../../controllers/member/vote_handler.php">
                <div id="candidate-container">
                    <div class="candidate-card">
                        <div class="candidate-photo-container">
                            <img src="../../assets/img/man1.jpg" alt="Candidate photo" class="candidate-photo">
                        </div>
                        <div class="candidate-desc">
                            <p>Kandidat 1</p>
                            <button class="vote-button" data-id="1">Vote</button>
                        </div>
                    </div>
                    <div class="candidate-card">
                        <div class="candidate-photo-container">
                            <img src="../../assets/img/man2.jpg" alt="Candidate photo" class="candidate-photo">
                        </div>
                        <div class="candidate-desc">
                            <p>Kandidat 2</p>
                            <button class="vote-button" data-id="2">Vote</button>
                        </div>
                    </div>
                </div>

                <input type="submit" value="Kirim" id="form-submit">
            </form>
        </main>

    <?php } else { include '../../components/not_authorized.php'; } ?>

    <script src="../../assets/js/jquery/jquery-3.7.1.min.js"></script>
    <script src="../../assets/js/member/vote.js"></script>
</body>

</html>