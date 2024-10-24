<main>
    <h1 id="warning-not-yet-login">Waduh, kamu belum login!</h1>
    <p>Pastikan kamu sudah login untuk memastikan bahwa kamu memiliki hak akses pada halaman tertentu!</p>
    <a id="login-yuk-btn" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/pages/login.php' ?>">Login yuk!</a>
</main>


<style>
    #warning-not-yet-login {
        color: #f68105;
    }

    #login-yuk-btn {
        display: block;
        width: 130px;
        text-align: center;
        background-color: #F6B116;
        text-decoration: none;
        color: white;
        font-weight: bold;
        box-sizing: border-box;
        padding: 1rem;
        border-radius: 8px;
    }

    #login-yuk-btn:hover {
        cursor: pointer;
        background-color: #f7dea4;
        color: #F6B116;
        outline: 2px solid #F6B116;
    }
</style>