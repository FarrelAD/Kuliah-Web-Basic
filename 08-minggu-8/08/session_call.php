<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Session Call</title>
</head>
<body>
    <?php
        echo "Warna favorit: " . $_SESSION['favcolor'] . "<br>";
        echo "Hewan favorit: " . $_SESSION['favanimal'] . "<br>";
    ?>
</body>
</html>
