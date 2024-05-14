<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'о компании';
$page = 'about';
$activePage = '1';



include "partials/header.php" ?>

<main class="main">
    <div class="container-fluid">
        <section class="company">
            <div class="row" style="align-items: center;">
                <div class="col-md-12 col-xl-6">
                    <div class="company-img" data-aos="fade-right">
                        <img src="/assets/images/about/about.png" alt="">
                    </div>
                </div>
                <div class="col-md-12 col-xl-6">
                    <div class="company__content" data-aos="fade-left">
                        <div class="company__content-top">
                            Почему мы
                        </div>
                        <div class="company__content-title">
                            Наша компания начала транспортно-экспедиторскую деятельность в январе 2012 г
                        </div>
                        <div class="company__content-text">
                            Оперируем вагонами крупнейших компаний, управляющих вагонным парком приписки Республики Казахстан:  - АО «Астык Транс» (хоппер-зерновозы);  - АО «Кедентранссервис» (специализированные фитинговые платформы).  Предоставление вагонов под погрузку ~ 1 200 вг /месяц; Возврат порожнего подвижного состава в страну-собственницу ~ 70 000 вг / год.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="statistic">
            <img src="/assets/images/about/statistic.svg" alt="">

            <div class="statistic__content">
                <div class="statistic__content-title" data-aos="fade-down">
                    Наши достижения в цифрах:
                </div>
                <div class="statistic__content__row">
                    <div class="statistic__content__row-item" data-aos="fade-right">
                        <div>12</div>
                        <p>лет на рынке</p>
                    </div>
                    <div class="statistic__content__row-item" data-aos="fade-up">
                        <div>55+ </div>
                        <p>стран</p>
                    </div>
                    <div class="statistic__content__row-item" data-aos="fade-left">
                        <div>10000+</div>
                        <p>заказов</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="clause">
            <div class="row" style="justify-content: center;">
                <div class="col-lg-12 col-xl-10">
                    <div class="section-title clause-title" data-aos="fade-down">
                        Мы предлагаем комплексные <span>логистические решения</span>, чтобы помочь вашему бизнесу стать еще успешнее.
                    </div>
                </div>
            </div>

            <div class="clause__row ">
                <div class="row" style="justify-content: center;">
                    <div class="col-lg-12 col-xl-6">
                        <div class="clause__row-text" data-aos="fade-right">
                            Имеем прямые договоры с железнодорожными администрациями и ихструктурными дочерними предприятиями: Республика Узбекистан: АО «Узбекистон темирйуллари», ООО “O’ztemiryo’lekspeditsiya”, АО “O’ztemiryo’lkonteyner”; Республика Туркменистан: Агентство«Туркмендемиреллары» (АООТ «Демиреллары»), ОАО «Транспортно-логистический центр Туркменистана».
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-4">
                        <div class="clause__row__statistic" data-aos="fade-left">
                            <div class="clause__row__statistic-border"></div>
                            <div class="clause__row__statistic__items">
                                <div class="item">
                                    <p>6500+</p>
                                    <span>перевозок</span>
                                </div>
                                <div class="item">
                                    <p>150+</p>
                                    <span>единиц техники</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="about">

            <div class="row" style="justify-content: center;">
                <div class="col-md-12 col-xl-10">
                    <div class="about__bottom" data-fancybox="gallery" data-src="/assets/images/index/about__bottom-img.svg">
                        <img src="/assets/images/index/about__bottom-img.svg" alt="">
                        <div class="img__mini" data-aos="fade-down-left" data-aos-duration="2000">
                            <img src="/assets/images/index/mancity.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

    </section>
    </div>
</main>

<?php include "partials/footer.php" ?>