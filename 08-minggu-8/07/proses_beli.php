<?php

if (isset($_POST['beli-novel']) && 
    isset($_POST['beli-buku'])) {
    setcookie('beli-novel', $_POST['beli-novel']);
    setcookie('beli-buku', $_POST['beli-buku']);
    header("location:keranjang_belanja.php");
}