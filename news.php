<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'Новости';
$page = 'news';
$activePage = '3';



include "partials/header.php" ?>

<main class="main">
    <div class="container-fluid">
        <div class="pages__name">
            <a href="/index.php" class="pages__name-info">Главная</a>
            <div class="pages__name-slash">/</div>
            <a href="/news.php" class="pages__name-info">Новости</a>
        </div>

        <section class="news">
            <div class="news__row">
                <h2 class="section-title news__row-title">
                    Новости
                </h2>
            </div>
            <div class="news__cards">
                <div class="row" style="justify-content: center; row-gap: 30px;">
                    <?php for ($i = 0; $i < 9; $i++) : ?>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <a href="/news__inner.php" class="news__cards__card" data-aos="fade-up" data-aos-duration="1000">
                                <div class="news__cards__card-img">
                                    <img src="/assets/images/news/news.png" alt="">
                                </div>
                                <div class="news__cards__card-title">
                                    Использование на складе устаревших технологий – это «закапывание денег»
                                </div>
                                <div class="news__cards__card-link">
                                    <p>читать статью</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                        <path d="M4.90899 14.6103C4.74961 14.6103 4.59024 14.5571 4.48399 14.4243C4.24492 14.1853 4.24492 13.8134 4.48399 13.5743L12.5324 5.52593H6.1043C5.78555 5.52593 5.51992 5.2603 5.51992 4.94155C5.51992 4.6228 5.78555 4.35718 6.1043 4.35718H13.9402C14.259 4.35718 14.5246 4.6228 14.5246 4.94155V12.8306C14.5246 13.1493 14.259 13.415 13.9402 13.415C13.6215 13.415 13.3558 13.1493 13.3558 12.8306V6.42905L5.33399 14.4509C5.22774 14.5571 5.06836 14.6103 4.90899 14.6103Z" fill="white" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    <?php endfor ?>
                </div>
            </div>

            <nav>
                <ul class="pagination">
                    <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                        <a class="page-link" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none">
                                <path d="M23.6846 11.8886L16.5888 18.9999L23.6846 26.1111L21.5001 28.2957L12.2043 18.9999L21.5001 9.7041L23.6846 11.8886Z" fill="#C4CDD5" />
                            </svg>
                        </a>
                    </li>
                    <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                    <li class="page-item">
                        <a class="page-link" href="#" rel="next" aria-label="Next »">
                            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none">
                                <path d="M14.3145 11.8886L21.4102 18.9999L14.3145 26.1111L16.499 28.2957L25.7947 18.9999L16.499 9.7041L14.3145 11.8886Z" fill="#1B1B1B" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>


    </div>

</main>

<?php include "partials/footer.php" ?>