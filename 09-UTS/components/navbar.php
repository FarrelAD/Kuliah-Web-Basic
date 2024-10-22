<nav>
    <?php
        $dashboard_link = 'http://' . $_SERVER['HTTP_HOST'] . '/pages/member/dashboard.php';

        if (isset($_SESSION['user_id'])) {
            if ($_SESSION['role'] == 'admin') {
                $dashboard_link = 'http://' . $_SERVER['HTTP_HOST'] . '/pages/admin/dashboard.php';
            }
        }
    ?>

    <a href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>" id="wri-logo-nav-container">
        <img src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/assets/img/wri_logo_full.jpg' ?>" alt="Logo WRI"
            id="wri-landingpage-logo">
    </a>

    <div>
        <a href="<?php echo $dashboard_link ?>" id="home-href">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="size-6" id="home-icon">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>
        </a>
        <a id="profile-href" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/pages/profile.php' ?>">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6" id="profile-icon">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
        </a>
    </div>
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

    #wri-logo-nav-container>img {
        height: 100%;
        border: 2px solid white;
    }

    #home-href,
    #profile-href {
        margin: 0 1rem;
    }

    #home-href {
        display: inline-block;
        text-decoration: none;
        color: white;
    }

    #home-icon,
    #profile-icon {
        height: 85%;
        width: 2rem;
    }

    #profile-href {
        display: inline-block;
        text-decoration: none;
        color: white;
    }
</style>