<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'Услуги';
$page = 'services__inner';
$activePage = '2';




include "partials/header.php" ?>

<main class="main">


    <section class="top">
        <div class="container-fluid">
            <div class="pages__name">
                <a href="/index.php" class="pages__name-info">Главная</a>
                <div class="pages__name-slash">/</div>
                <a href="/services.php" class="pages__name-info">Услуги</a>
                <div class="pages__name-slash">/</div>
                <a href="/services__inner.php" class="pages__name-info">Автомобильные перевозки</a>
            </div>
        </div>

        <img src="/assets/images/slider-bg/05.jpg" alt="" class="top__img">

        <div class="top__content" data-aos="fade-down" data-aos-duration="1000">
            <div class="container-fluid">
                <h1>ТЭО при транспортировке ж.д. транспортом </h1>
                <p>
                    TRANSGROUP SYSTEMS L.P. имеет прямые договоры с железнодорожными администрациями и их структурными дочерними предприятиями:
                    Республика Узбекистан: АО «Узбекистон темир йуллари», ООО “O’ztemiryo’lekspeditsiya”, АО “O’ztemiryo’lkonteyner”.
                    Республика Туркменистан: Агентство «Туркмендемиреллары» (АООТ «Демиреллары»), ОАО «Транспортно-логистический центр Туркменистана».
                </p>
            </div>
        </div>

    </section>

    <div class="container-fluid">
        <section class="info">
            <div class="info__row">
                <h2 data-aos="fade-right" data-aos-duration="1000">
                    Что входит в услугу?
                </h2>

                <div class="info__row__right" data-aos="fade-left" data-aos-duration="1000">
                    <ul>
                        <li>Организация грузоперевозок железнодорожным транспортом</li>
                    </ul>

                    <p>
                        Поддержание связи с заказчиком на протяжении всего маршрута, оперативное решение возможных проблем и возврат денежных средств в случае неисполнения условий договора.
                    </p>
                </div>

            </div>
            <div class="info__row">
                <h2 data-aos="fade-right" data-aos-duration="1000">
                    Какие гарантии мы даем?
                </h2>

                <div class="info__row__right" data-aos="fade-left" data-aos-duration="1000">
                    <p>
                        Поддержание связи с заказчиком на протяжении всего маршрута, оперативное решение возможных проблем и возврат денежных средств в случае неисполнения условий договора.
                    </p>
                </div>

            </div>
            <div class="info__row" data-aos="fade-right" data-aos-duration="1000">
                <h2>
                    Преимущества работы с нами:
                </h2>

                <div class="info__row__right" data-aos="fade-left" data-aos-duration="1000" >
                    <p>
                        Поддержание связи с заказчиком на протяжении всего маршрута, оперативное решение возможных проблем и возврат денежных средств в случае неисполнения условий договора.
                    </p>
                    <ul>
                        <li>Опыт и профессионализм в организации ж.д. транспортировки</li>
                        <li>Надежная логистическая поддержка на всех этапах перевозки</li>
                        <li>Эффективное решение оперативных вопросов и проблем в процессе транспортировки</li>
                    </ul>
                </div>

            </div>
        </section>
    </div>


    <section class="garants">
        <div class="container-fluid">
            <div class="garants-title" data-aos="zoom-in-down" data-aos-duration="1000">
                Вы получите ряд гарантий работая с нами:
            </div>

            <div class="garants__content">
                <div class="garants__content__card" data-aos="zoom-in-up" data-aos-duration="1000">
                    <img src="/assets/images/services/garants-card1.svg" alt="">
                    <p>
                        Отслежевание груза на всём пути исследования
                    </p>
                </div>
                <div class="garants__content__card" data-aos="zoom-in-up" data-aos-duration="1000">
                    <img src="/assets/images/services/garants-card2.svg" alt="">
                    <p>
                        100% безопасность доставки груза
                    </p>
                </div>
                <div class="garants__content__card" data-aos="zoom-in-up" data-aos-duration="1000">
                    <img src="/assets/images/services/garants-card3.svg" alt="">
                    <p>
                        Надежная поддержка специалистов
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bottom">
        <img src="/assets/images/slider-bg/03.jpg" alt="" class="bottom-img">
        <div class="bottom__content">
            <div class="bottom__content-title" data-aos="zoom-out-right" data-aos-duration="1000">
                Закажите расчёт грузоперевозки
            </div>
            <div class="bottom__content-text" data-aos="zoom-in" data-aos-duration="1000">
                Заполните контактную форму и менеджер свяжется c вами в ближайшее время
            </div>
            <div class="bottom__content-btn" data-aos="zoom-out-left" data-aos-duration="1000">
                <p>
                    Рассчитать стоимость грузоперевоки
                </p>
                <svg>
                    <use xlink:href="/assets/icons/sprite.svg#arrow-header"></use>
                </svg>
            </div>
        </div>
    </section>


    <?php include "includes/modal__form.php" ?>

    <?php include "includes/modal__success.php" ?>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
    var openModalButton = document.querySelector(".bottom__content-btn");
    var modal = document.getElementById("modal___name");
    var closeModalButton = modal.querySelector(".popup__content-close");
    var nameInput = modal.querySelector('input[type="text"]');
    var telInput = modal.querySelector('input[type="tel"]');
    var emailInput = modal.querySelector('input[type="email"]');
    var successModal = document.querySelector('.success');

    // Добавляем обработчик события отправки формы
    modal.addEventListener("submit", function(event) {
        event.preventDefault(); // Предотвращаем отправку формы по умолчанию

        // Проверяем, заполнены ли обязательные поля
        if (nameInput.value.trim() === '' || telInput.value.trim() === '' || emailInput.value.trim() === '') {
            return;
        }

        // Отправляем данные формы через AJAX
        var formData = new FormData(modal);
        var xhr = new XMLHttpRequest();
        xhr.open("POST", modal.getAttribute("action"));
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Сбрасываем данные формы
                    modal.reset();

                    // Закрываем основное модальное окно с формой
                    modal.classList.remove("modal-show");
                    document.body.classList.remove("no-scroll");

                    // Показываем модальное окно с сообщением об успешной отправке
                    successModal.classList.add("modal-show");

                    // Закрываем модальное окно с сообщением об успешной отправке через 3 секунды
                    setTimeout(function() {
                        successModal.classList.remove("modal-show");
                        document.body.classList.remove("no-scroll");
                    }, 3000);
                } else {
                    console.error("Произошла ошибка при отправке данных формы.");
                }
            }
        };
        xhr.send(formData);
    });

    // Добавляем обработчик события клика на модальное окно успешной отправки для его закрытия
    successModal.addEventListener("click", function(event) {
        if (!event.target.closest('.success__body')) {
            successModal.classList.remove("modal-show");
            document.body.classList.remove("no-scroll");
        }
    });

    // Добавляем обработчик события клика на кнопку открытия основной модалки
    openModalButton.addEventListener("click", function() {
        modal.classList.add("modal-show");
        document.body.classList.add("no-scroll");
    });

    // Добавляем обработчик события клика на кнопку закрытия основной модалки
    closeModalButton.addEventListener("click", function() {
        modal.classList.remove("modal-show");
        document.body.classList.remove("no-scroll");
    });
});
    </script>


</main>

<?php include "partials/footer.php" ?>