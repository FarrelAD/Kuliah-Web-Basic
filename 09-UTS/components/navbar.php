<nav>
    <a href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>" id="wri-logo-nav-container">
        <img src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/assets/img/wri_logo_full.jpg' ?>" alt="Logo WRI" id="wri-landingpage-logo">
    </a>
    <a href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/pages/member/dashboard.php' ?>" id="home-href">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="size-6" id="home-icon">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
        </svg>
    </a>
</nav>



<style>
    nav {
        position: fixed;
        top: 0;
        width: 100vw;
        height: 50px;
        background-color: #F6B116;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 2rem;
    }

    #wri-logo-nav-container {
        display: inline-block;
        height: 85%;
    }

    #wri-logo-nav-container > img {
        height: 100%;
        border: 2px solid white;
    }

    #home-href {
        display: inline-block;
        text-decoration: none;
        color: white;
        margin-right: 3rem;
    }

    #home-icon {
        height: 85%;
        width: 2rem;
    }
</style>