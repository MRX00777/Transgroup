<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'Партнёры';
$page = 'partners';
$activePage = '4';



include "partials/header.php" ?>

<main class="main">
    <div class="row" style="justify-content: center;">
        <div class="col-lg-12 col-xl-10">
            <section class="partners">
                <div class="partners-title" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600">
                    Наши партнёры
                </div>
                <div class="partners__content">
                    <?php for ($i = 0; $i < 20; $i++) : ?>
                        <div class="partners__content__card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                            <img src="assets/images/partners-logo2.svg" alt="">
                        </div>
                    <?php endfor ?>
                </div>
            </section>
        </div>
    </div>


</main>

<?php include "partials/footer.php" ?>