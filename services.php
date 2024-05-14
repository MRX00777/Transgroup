<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'Услуги';
$page = 'services';
$activePage = '2';




include "partials/header.php" ?>



<main class="main">
    <div class="container-fluid">
        <div class="pages__name">
            <a href="/index.php" class="pages__name-info">Главная</a>
            <div class="pages__name-slash">/</div>
            <a href="/services.php" class="pages__name-info">Услуги</a>
        </div>
    </div>

    <div class="container-fluid ">
        <section class="news">
            <div class="news__row">
                <h2 class="section-title news__row-title" data-aos="fade-down">
                    Спектр оказываемых услуг:
                </h2>
            </div>
            <div class="news__cards">
                <div class="row" style="justify-content: center; row-gap: 30px;">
                    <?php for ($i = 0; $i < 4; $i++) : ?>
                        <div class="col-12 col-sm-12 col-lg-6 col-xl-5">
                            <a href="/services__inner.php" class="news__cards__card" data-aos="fade-up" data-aos-duration="1000">
                                <div class="news__cards__card-title">
                                    <p>ТЭО при транспортировке ж.д. транспортом </p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                        <path d="M4.90899 14.6103C4.74961 14.6103 4.59024 14.5571 4.48399 14.4243C4.24492 14.1853 4.24492 13.8134 4.48399 13.5743L12.5324 5.52593H6.1043C5.78555 5.52593 5.51992 5.2603 5.51992 4.94155C5.51992 4.6228 5.78555 4.35718 6.1043 4.35718H13.9402C14.259 4.35718 14.5246 4.6228 14.5246 4.94155V12.8306C14.5246 13.1493 14.259 13.415 13.9402 13.415C13.6215 13.415 13.3558 13.1493 13.3558 12.8306V6.42905L5.33399 14.4509C5.22774 14.5571 5.06836 14.6103 4.90899 14.6103Z" fill="white" />
                                    </svg>
                                </div>
                                <div class="news__cards__card-img">
                                    <img src="/assets/images/slider-bg/02.jpg" alt="">
                                </div>
                            </a>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
        </section>
    </div>
</main>

<?php include "partials/footer.php" ?>