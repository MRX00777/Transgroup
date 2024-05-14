<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'Главная';
$page = 'index';




include "partials/header.php" ?>

<main class="main" style="margin-top: 0px !important;">

    <section class="swiper main__slider ">
        <div class="border border1"></div>
        <div class="border border2"></div>
        <div class="border border3"></div>

        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="top">
                    <img src="/assets/images/slider-bg/02.jpg" alt="">

                    <div class="top__row">
                        <div class="top__row__left">
                            <div class="top__row__left-title">
                                Железнодорожные грузоперевозки
                            </div>
                            <a href="/services__inner.php" class="top__row__left-link">
                                подробнее
                                <svg>
                                    <use xlink:href="/assets/icons/sprite.svg#arrow-header"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="top__row__right">
                            Предоставление вагонов в пользование
                        </div>
                    </div>



                </div>
            </div>
            <div class="swiper-slide">
                <div class="top">
                    <img src="/assets/images/index/top-bg.png" alt="">

                    <div class="top__row">
                        <div class="top__row__left">
                            <div class="top__row__left-title">
                                Железнодорожные грузоперевозки
                            </div>
                            <a href="" class="top__row__left-link">
                                подробнее
                                <svg>
                                    <use xlink:href="/assets/icons/sprite.svg#arrow-header"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="top__row__right">
                            Предоставление вагонов в пользование
                        </div>
                    </div>



                </div>
            </div>
            <div class="swiper-slide">
                <div class="top">
                    <img src="/assets/images/index/top-bg.png" alt="">

                    <div class="top__row">
                        <div class="top__row__left">
                            <div class="top__row__left-title">
                                Железнодорожные грузоперевозки
                            </div>
                            <a href="" class="top__row__left-link">
                                подробнее
                                <svg>
                                    <use xlink:href="/assets/icons/sprite.svg#arrow-header"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="top__row__right">
                            Предоставление вагонов в пользование
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <div class="autoplay-progress">
            <svg viewBox="0 0 48 48">
                <circle style="stroke-width: 1px;" cx="24" cy="24" r="20"></circle>
            </svg>
            <span></span>
        </div>
    </section>

    <section class="about">
        <div class="container-fluid">

            <div class="about__top">
                <div class="row">
                    <div class="col-md-12 col-xl-6">
                        <div class="about__top__left" data-aos="fade-left">
                            TRANSGROUP SYSTEMS L.P.
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-6">
                        <div class="about__top__right"  data-aos="fade-right" data-aos-duration="600" data-aos-delay="300">
                            Транспортно-экспедиторская компания, оказывающая полный спектр услуг железнодорожным транспортом по территориям СНГ, странам Балтии, Центральной Азии, Юго-Западной Азии, коридора «TRACECA» и Китая.
                        </div>
                    </div>
                </div>


            </div>

            <div class="about__center ">
                <div class="about__center__item" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="300">
                    <div class="about__center__item__title">
                        <svg>
                            <use xlink:href="/assets/icons/sprite.svg#complex-icon"></use>
                        </svg>
                        <p>Комплексность</p>
                    </div>

                    <div class="about__center__item__info">
                        <p>
                            Предлагаем интегрированный подход к управлению всеми аспектами логистической цепи
                        </p>
                        <div></div>
                        <img src="/assets/images/index/about__top-img.png" alt="">
                    </div>

                    <div class="about__center__item-icon">
                        <img src="/assets//icons/arrow-header.svg" alt="">
                    </div>
                </div>
                <div class="about__center__item" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="300">
                    <div class="about__center__item__title">
                        <svg>
                            <use xlink:href="/assets/icons/sprite.svg#focus-icon"></use>
                        </svg>
                        <p>Фокусировка</p>
                    </div>

                    <div class="about__center__item__info">
                        <p>
                            Предлагаем интегрированный подход к управлению всеми аспектами логистической цепи
                        </p>
                        <div></div>
                        <img src="/assets/images/slider-bg/01.jpg" alt="">
                    </div>

                    <div class="about__center__item-icon">
                        <img src="/assets//icons/arrow-header.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="row" style="justify-content: center;"  data-aos-duration="600" data-aos-delay="300">
                <div class="col-md-12 col-xl-10">
                    <div class="about__bottom" data-fancybox="gallery" data-src="/assets/images/index/about__bottom-img.svg">
                        <img src="/assets/images/index/about__bottom-img.svg" alt="">
                        <div class="img__mini" data-aos="fade-down-left" data-aos-duration="2000" >
                            <img src="/assets/images/index/mancity.png" alt="">
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="services">
        <div class="services__top">
            <div class="services__top-title" data-aos="fade-right" data-aos-duration="600" data-aos-delay="300">
                Спектр оказываемых услуг:
            </div>
            <div class="services__top__cards swiper">
                <div class="swiper-wrapper">
                    <?php for ($i = 0; $i < 8; $i++) : ?>
                        <div class="swiper-slide">
                            <a href="/services__inner.php" class="services__top__card"  data-aos="fade-left" data-aos-duration="600" data-aos-delay="300">
                                <div class="services__top__card__row" >
                                    <p>
                                        ТЭО при транспортировке ж.д. транспортом
                                    </p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                        <g clip-path="url(#clip0_1138_2415)">
                                            <path d="M0.629883 13.5592L13.1082 1.08093M13.1082 1.08093H2.18967M13.1082 1.08093V11.9994" stroke="white" stroke-width="1.78263" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1138_2415">
                                                <rect width="14" height="14" fill="white" transform="translate(0 0.189575)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <img src="/assets/images/index/services__card2.png" alt="" >
                            </a>
                        </div>
                    <?php endfor ?>
                </div>

            </div>
        </div>
        <div class="services__clients swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="services__clients-logo">
                        <img src="/assets/images/index/a.svg" alt="">
                    </div>
                </div>
                <?php for ($i = 0; $i < 20; $i++) : ?>
                    <div class="swiper-slide">
                        <div class="services__clients-logo">
                            <img src="/assets/images/index/clients-logo.svg" alt="">
                        </div>
                    </div>
                <?php endfor ?>
                <div class="swiper-slide">
                    <div class="services__clients-logo">
                        <img src="/assets/images/index/huawei.svg" alt="">
                    </div>
                </div>
            </div>

        </div>

        <div class="services__video">
            <div class="services__video-img">
                <img src="/assets/images/index/video-prevu.png" alt="">
            </div>
            <div class="services__video-btn" data-fancybox="gallery" data-src="https://www.youtube.com/watch?v=NSpA-Hwdr_M">
                <img src="/assets/icons/video.svg" alt="">
            </div>
        </div>
    </section>

    <div class="container-fluid ">
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
    </div>

    <div class="container-fluid ">
        <section class="news">
            <div class="news__row">
                <h2 class="section-title news__row-title">
                    Последние новости
                </h2>
                <a href="!#" class="news__row-link">
                    <p>все новости</p>
                    <svg>
                        <use xlink:href="/assets/icons/sprite.svg#arrow-header"></use>
                    </svg>
                </a>
            </div>
            <div class="news__cards">
                <div class="row" style="justify-content: center; row-gap: 30px;">
                    <?php for ($i = 0; $i < 4; $i++) : ?>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <a href="#" class="news__cards__card" data-aos="flip-left" data-aos-duration="600" data-aos-delay="300" >
                                <div class="news__cards__card-img">
                                    <img src="/assets/images/slider-bg/02.jpg" alt="">
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
        </section>
    </div>

    <div class="container-fluid">
        <div class="row" style="justify-content: center;">
            <div class="col-lg-12 col-xl-10">
                <section class="app">
                    <div class="section-title app-title" >
                        Остались вопросы?
                    </div>
                    <div class="app-text">
                        Свяжитесь с нами и мы вам поможем!
                    </div>

                    <form action="" method="" class="app__content">
                        <div class="app__content__row">

                            <div class="input">
                                <label for="">Ваше имя</label>
                                <div class="input__content">
                                    <input type="text" placeholder="Введите имя" required>
                                </div>
                            </div>


                            <div class="input" style="margin-bottom: 25px;">
                                <label for="">Номер телефона</label>
                                <div class="input__content" style="color: #1B1B1B;">
                                    <input type="tel" id="telIndex" class="telCountry" required>
                                    <input class="info__fill_number" type="hidden" name="phone">
                                </div>
                                <p>По этому номеру с вами свяжется наш специалист</p>
                            </div>

                        </div>



                        <div class="input" >
                            <label for="">Электронная почта</label>
                            <div class="input__content">
                                <input type="email" placeholder="Введите почту" required>
                            </div>
                        </div>
                        <div class="input">
                            <label for="">Комментарий</label>
                            <div class="input__content">
                                <textarea type="text" placeholder="Введите комментарий" cols="30" rows="6"></textarea>
                            </div>
                        </div>

                        <button type="submit" class="button-form">
                            <p>Получить консультацию</p>
                            <svg>
                                <use xlink:href="/assets/icons/sprite.svg#arrow-header"></use>
                            </svg>
                        </button>
                    </form>
                </section>
            </div>
        </div>
    </div>

    <?php include "includes/modal__success.php" ?>

</main>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var form = document.querySelector(".app__content");
        var modal = document.querySelector(".success");

        form.addEventListener("submit", function(event) {
            event.preventDefault(); // Предотвращаем отправку формы

            // Собираем данные из формы
            var formData = new FormData(form);

            // Отправляем данные на сервер с помощью AJAX
            var xhr = new XMLHttpRequest();
            xhr.open("POST", form.action);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Если запрос прошел успешно, отображаем модальное окно
                        modal.classList.add("modal-show");
                        // Закрываем модальное окно через 3 секунды
                        setTimeout(function() {
                            modal.classList.remove("modal-show");
                        }, 3000);
                        // Сбрасываем данные формы
                        form.reset();
                    } else {
                        // В случае ошибки выводим сообщение об ошибке
                        console.error("Ошибка при отправке данных формы:", xhr.statusText);
                    }
                }
            };
            xhr.send(new URLSearchParams(formData));
        });

        // Добавляем обработчик события клика на любое место для закрытия модального окна
        document.addEventListener("click", closeModalOnOutsideClick);

        // Добавляем обработчик события клика для закрытия модального окна при клике на само модальное окно
        modal.addEventListener("click", function(event) {
            closeModal();
        });

        // Функция для закрытия модального окна при клике на любое место вне его
        function closeModalOnOutsideClick(event) {
            if (!modal.contains(event.target)) {
                closeModal();
            }
        }

        // Функция для закрытия модального окна
        function closeModal() {
            modal.classList.remove("modal-show");
        }
    });

    AOS.init({
        duration: 1200,
    })
</script>












<?php include "partials/footer.php" ?>