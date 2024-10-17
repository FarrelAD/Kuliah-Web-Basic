<html>

<head>
    <title>Keranjang Belanja</title>
</head>

<body>
    <h1>Keranjang Belanja</h1>

    <?php
        $beli_novel = $_COOKIE['beli-novel'];
        $beli_buku = $_COOKIE['beli-buku'];

        echo "Jumlah novel: " . $beli_novel . "<br>";
        echo "Jumlah buku: " . $beli_buku . "<br>";
    ?>

</body>

</html>