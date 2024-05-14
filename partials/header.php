<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="<?= $kw ?>">
    <meta name="description" content="<?= $desc ?>">
    <link rel="shortcut icon" href="./../fav/favicon.svg" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/libraries/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.0/css/intlTelInput.css">
    <link rel="stylesheet" href="/assets/css/global.css">

    <?php
    switch ($page) {
        case 'index':
            echo '<link rel="stylesheet" href="/assets/css/index.css">';
            break;
        case 'services':
            echo '<link rel="stylesheet" href="/assets/css/index.css">';
            echo '<link rel="stylesheet" href="/assets/css/pages/services.css">';
            break;
        case 'services__inner':
            echo '<link rel="stylesheet" href="/assets/css/index.css">';
            echo '<link rel="stylesheet" href="/assets/css/pages/services__inner.css">';
            break;
        case 'about':
            echo '<link rel="stylesheet" href="/assets/css/index.css">';
            echo '<link rel="stylesheet" href="/assets/css/pages/about.css">';
            break;
        case 'news':
            echo '<link rel="stylesheet" href="/assets/css/index.css">';
            echo '<link rel="stylesheet" href="/assets/css/pages/news.css">';
            break;
        case 'news__inner':
            echo '<link rel="stylesheet" href="/assets/css/pages/news__inner.css">';
            break;
        case 'charity':
            echo '<link rel="stylesheet" href="/assets/css/pages/news__inner.css">';
            echo '<link rel="stylesheet" href="/assets/css/pages/charity.css">';
            break;
        case 'partners':
            echo '<link rel="stylesheet" href="/assets/css/pages/partners.css">';
            break;
        case 'vacancies':
            echo '<link rel="stylesheet" href="/assets/css/pages/vacancies.css">';
            break;
        case 'contacts':
            echo '<link rel="stylesheet" href="/assets/css/pages/contacts.css">';
            break;
    }
    ?>
    <title><?= $title ?></title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="container-fluid">
                <div class="header__wrapper">

                    <a href="/" class="header__wrapper__logo" style="z-index: 9999;">
                        <img src="/assets/icons/logo.svg" alt="logo">
                    </a>

                    <div class="header__wrapper__nav">
                        <div class="mobile__nav">
                            <ul class="header__wrapper__nav__list">
                                <li><a href="/about.php" class="header-link <?= $activePage == '1' ? 'active' : '' ?>">о компании
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M1.58965 11.1487C1.43027 11.1487 1.2709 11.0955 1.16465 10.9627C0.925584 10.7237 0.925584 10.3518 1.16465 10.1127L9.21309 2.06426H2.78496C2.46621 2.06426 2.20058 1.79863 2.20058 1.47988C2.20058 1.16113 2.46621 0.895508 2.78496 0.895508H10.6209C10.9397 0.895508 11.2053 1.16113 11.2053 1.47988V9.36896C11.2053 9.68766 10.9397 9.95336 10.6209 9.95336C10.3022 9.95336 10.0365 9.68766 10.0365 9.36896V2.96738L2.01465 10.9893C1.9084 11.0955 1.74902 11.1487 1.58965 11.1487Z" fill="white" />
                                        </svg>
                                    </a></li>
                                <li><a href="/services.php" class="header-link <?= $activePage == '2' ? 'active' : '' ?>">услуги
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M1.58965 11.1487C1.43027 11.1487 1.2709 11.0955 1.16465 10.9627C0.925584 10.7237 0.925584 10.3518 1.16465 10.1127L9.21309 2.06426H2.78496C2.46621 2.06426 2.20058 1.79863 2.20058 1.47988C2.20058 1.16113 2.46621 0.895508 2.78496 0.895508H10.6209C10.9397 0.895508 11.2053 1.16113 11.2053 1.47988V9.36896C11.2053 9.68766 10.9397 9.95336 10.6209 9.95336C10.3022 9.95336 10.0365 9.68766 10.0365 9.36896V2.96738L2.01465 10.9893C1.9084 11.0955 1.74902 11.1487 1.58965 11.1487Z" fill="white" />
                                        </svg>
                                    </a></li>
                                <li><a href="/news.php" class="header-link <?= $activePage == '3' ? 'active' : '' ?>">новости
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M1.58965 11.1487C1.43027 11.1487 1.2709 11.0955 1.16465 10.9627C0.925584 10.7237 0.925584 10.3518 1.16465 10.1127L9.21309 2.06426H2.78496C2.46621 2.06426 2.20058 1.79863 2.20058 1.47988C2.20058 1.16113 2.46621 0.895508 2.78496 0.895508H10.6209C10.9397 0.895508 11.2053 1.16113 11.2053 1.47988V9.36896C11.2053 9.68766 10.9397 9.95336 10.6209 9.95336C10.3022 9.95336 10.0365 9.68766 10.0365 9.36896V2.96738L2.01465 10.9893C1.9084 11.0955 1.74902 11.1487 1.58965 11.1487Z" fill="white" />
                                        </svg>
                                    </a></li>
                            </ul>

                            <a href="/" class="header__wrapper__nav-logo">
                                <img src="/assets/icons/logo.svg" alt="logo">
                            </a>

                            <ul class="header__wrapper__nav__list">
                                <li><a href="/partners.php" class="header-link <?= $activePage == '4' ? 'active' : '' ?>">партнеры
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M1.58965 11.1487C1.43027 11.1487 1.2709 11.0955 1.16465 10.9627C0.925584 10.7237 0.925584 10.3518 1.16465 10.1127L9.21309 2.06426H2.78496C2.46621 2.06426 2.20058 1.79863 2.20058 1.47988C2.20058 1.16113 2.46621 0.895508 2.78496 0.895508H10.6209C10.9397 0.895508 11.2053 1.16113 11.2053 1.47988V9.36896C11.2053 9.68766 10.9397 9.95336 10.6209 9.95336C10.3022 9.95336 10.0365 9.68766 10.0365 9.36896V2.96738L2.01465 10.9893C1.9084 11.0955 1.74902 11.1487 1.58965 11.1487Z" fill="white" />
                                        </svg>
                                    </a></li>
                                <li><a href="/contacts.php" class="header-link <?= $activePage == '5' ? 'active' : '' ?>">контакты
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M1.58965 11.1487C1.43027 11.1487 1.2709 11.0955 1.16465 10.9627C0.925584 10.7237 0.925584 10.3518 1.16465 10.1127L9.21309 2.06426H2.78496C2.46621 2.06426 2.20058 1.79863 2.20058 1.47988C2.20058 1.16113 2.46621 0.895508 2.78496 0.895508H10.6209C10.9397 0.895508 11.2053 1.16113 11.2053 1.47988V9.36896C11.2053 9.68766 10.9397 9.95336 10.6209 9.95336C10.3022 9.95336 10.0365 9.68766 10.0365 9.36896V2.96738L2.01465 10.9893C1.9084 11.0955 1.74902 11.1487 1.58965 11.1487Z" fill="white" />
                                        </svg>
                                    </a></li>
                                <li><a href="/charity.php" class="header-link <?= $activePage == '6' ? 'active' : '' ?>">благотворительность
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M1.58965 11.1487C1.43027 11.1487 1.2709 11.0955 1.16465 10.9627C0.925584 10.7237 0.925584 10.3518 1.16465 10.1127L9.21309 2.06426H2.78496C2.46621 2.06426 2.20058 1.79863 2.20058 1.47988C2.20058 1.16113 2.46621 0.895508 2.78496 0.895508H10.6209C10.9397 0.895508 11.2053 1.16113 11.2053 1.47988V9.36896C11.2053 9.68766 10.9397 9.95336 10.6209 9.95336C10.3022 9.95336 10.0365 9.68766 10.0365 9.36896V2.96738L2.01465 10.9893C1.9084 11.0955 1.74902 11.1487 1.58965 11.1487Z" fill="white" />
                                        </svg>
                                    </a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="header__right__block" style="z-index: 9999;">
                        <?php include "includes/lang.php" ?>

                        <div class="burger" onclick="toggleMobileMenu()">
                            <div class="burger__wrapper">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>



                </div>
        </header>