<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'Контакты';
$page = 'contacts';
$activePage = '5';




include "partials/header.php" ?>

<main class="main">
    <div class="container-fluid">
        <section class="contacts">
            <div class="contacts-title" data-aos="fade-down" data-aos-duration="800">
                Контакты
            </div>
            <div class="contacts__content">
                <div class="row">
                    <div class="col-lg-12 col-xl-6">
                        <div class="contacts__content__form">
                            <div class="contacts__content__form-title">
                                Заполните форму и мы с вами свяжемся
                            </div>
                            <form action="" method="" class="app__content" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
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


                                <div class="input">
                                    <label for="">Комментарий</label>
                                    <div class="input__content">
                                        <textarea type="text" placeholder="Введите сообщение" cols="30" rows="6"></textarea>
                                    </div>
                                </div>

                                <button type="submit" class="button-form">
                                    <p>Отправить</p>
                                    <svg>
                                        <use xlink:href="/assets/icons/sprite.svg#arrow-header"></use>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="contacts__content__adress" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <div class="contacts__content__adress-title">
                                Контактная информация:
                            </div>
                            <div class="contacts__content__adress__info">
                                <a href="tel:+998712312424">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="36" viewBox="0 0 35 36" fill="none">
                                        <path d="M28.5902 22.0345L23.0312 19.5433C22.7794 19.4354 22.5046 19.392 22.2317 19.4171C21.9588 19.4422 21.6965 19.5349 21.4685 19.6869C21.4454 19.7018 21.4234 19.7183 21.4026 19.7363L18.4972 22.2075C18.4671 22.2239 18.4335 22.2331 18.3992 22.2343C18.3649 22.2356 18.3308 22.2288 18.2995 22.2145C16.4321 21.3132 14.4975 19.3904 13.5926 17.5488C13.5775 17.518 13.5697 17.4842 13.5697 17.4499C13.5697 17.4156 13.5775 17.3818 13.5926 17.3511L16.072 14.4092C16.0898 14.3874 16.1063 14.3646 16.1214 14.341C16.2713 14.1121 16.3618 13.8495 16.3849 13.5769C16.4079 13.3042 16.3626 13.0302 16.2532 12.7794L13.7797 7.22989C13.6392 6.9023 13.3963 6.6291 13.0874 6.45129C12.7784 6.27349 12.4202 6.20068 12.0663 6.24378C10.5286 6.44594 9.11708 7.20111 8.09556 8.36816C7.07404 9.53521 6.51242 11.0343 6.51564 12.5853C6.51564 21.7992 14.0115 29.295 23.2254 29.295C24.7763 29.298 26.2752 28.7363 27.4422 27.7148C28.6092 26.6933 29.3645 25.2819 29.5669 23.7443C29.6099 23.3921 29.5381 23.0355 29.3621 22.7274C29.1861 22.4194 28.9154 22.1763 28.5902 22.0345ZM23.2254 27.8829C14.7905 27.8829 7.92773 21.0202 7.92773 12.5853C7.9238 11.3778 8.3596 10.2103 9.15372 9.30074C9.94783 8.3912 11.0459 7.80189 12.2429 7.64293H12.2699C12.3173 7.64382 12.3634 7.65901 12.402 7.68652C12.4407 7.71402 12.4701 7.75256 12.4864 7.79708L14.9694 13.3407C14.9835 13.3715 14.9909 13.4051 14.9909 13.439C14.9909 13.4729 14.9835 13.5064 14.9694 13.5372L12.4853 16.4862C12.4667 16.5072 12.4498 16.5296 12.4347 16.5532C12.2792 16.7905 12.1877 17.0639 12.1689 17.347C12.1502 17.6301 12.2048 17.9132 12.3276 18.1689C13.3713 20.3059 15.5248 22.4428 17.6853 23.4866C17.9425 23.6087 18.227 23.662 18.511 23.6414C18.795 23.6208 19.0688 23.5269 19.3057 23.3689C19.328 23.3536 19.3504 23.3372 19.3716 23.3195L22.2758 20.8483C22.3044 20.8329 22.3361 20.8239 22.3686 20.8219C22.4011 20.8198 22.4337 20.8249 22.464 20.8366L28.0242 23.3277C28.0696 23.3471 28.1078 23.3802 28.1333 23.4225C28.1589 23.4647 28.1705 23.5139 28.1665 23.5631C28.0084 24.7606 27.4197 25.8595 26.5103 26.6545C25.601 27.4495 24.4333 27.8862 23.2254 27.8829Z" fill="#F18331" />
                                    </svg>
                                    <p>
                                        +998 71 231 24 24
                                    </p>
                                </a>
                                <a href="mailto:Transgroup@gmail.com">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="36" viewBox="0 0 35 36" fill="none">
                                        <path opacity="0.9" d="M23.5903 17.6323L32.5228 26.5648L31.255 27.8316L22.3226 18.8992L23.5903 17.6323ZM11.4791 17.6709L12.746 18.9377L3.87622 27.8074L2.60938 26.5442L11.4791 17.6709Z" fill="#F18331" />
                                        <path d="M17.5011 22.6999C16.1572 22.6999 14.7238 22.1624 13.7382 21.0873L2.53906 9.97769L3.79337 8.72339L14.9925 19.9226C16.426 21.356 18.6659 21.356 20.0993 19.9226L31.2985 8.72339L32.5528 9.97769L21.2641 21.1769C20.2785 22.1624 18.845 22.6999 17.5011 22.6999Z" fill="#F18331" />
                                        <path d="M30.0435 29.9569H4.95733C3.43424 29.9569 2.26953 28.7921 2.26953 27.2691V9.3504C2.26953 7.82731 3.43424 6.6626 4.95733 6.6626H30.0435C31.5665 6.6626 32.7313 7.82731 32.7313 9.3504V27.2691C32.7313 28.7921 31.5665 29.9569 30.0435 29.9569ZM4.95733 8.45446C4.41977 8.45446 4.0614 8.81284 4.0614 9.3504V27.2691C4.0614 27.8066 4.41977 28.165 4.95733 28.165H30.0435C30.581 28.165 30.9394 27.8066 30.9394 27.2691V9.3504C30.9394 8.81284 30.581 8.45446 30.0435 8.45446H4.95733Z" fill="#F18331" />
                                    </svg>
                                    <p>
                                        Transgroup@gmail.com
                                    </p>
                                </a>
                            </div>
                            <div class="contacts__content__adress__networks">
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                        <g clip-path="url(#clip0_1123_1952)">
                                            <path d="M5.21186 11.0665L7.43743 16.6629L10.3348 13.7484L15.3026 17.7202L18.8004 1.8999L0.90625 9.39752L5.21186 11.0665ZM13.6871 6.4389L8.21 11.4642L7.52781 14.0505L6.26758 10.8807L13.6871 6.4389Z" fill="#2B2B2B" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1123_1952">
                                                <rect width="17.8941" height="18" fill="white" transform="translate(0.90625 0.810059)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                        <g clip-path="url(#clip0_1123_1939)">
                                            <path d="M15.7085 0.810059H3.05676C1.61154 0.810059 0.435547 1.99301 0.435547 3.44678V16.1733C0.435547 17.6271 1.61154 18.8101 3.05676 18.8101H15.7085C17.1537 18.8101 18.3297 17.6271 18.3297 16.1733V3.44678C18.3297 1.99301 17.1537 0.810059 15.7085 0.810059ZM9.41755 14.521C6.81587 14.521 4.69938 12.392 4.69938 9.7749C4.69938 7.15782 6.81587 5.02881 9.41755 5.02881C12.0192 5.02881 14.1357 7.15782 14.1357 9.7749C14.1357 12.392 12.0192 14.521 9.41755 14.521ZM14.66 6.0835C13.7928 6.0835 13.0872 5.37378 13.0872 4.50146C13.0872 3.62915 13.7928 2.91943 14.66 2.91943C15.5272 2.91943 16.2327 3.62915 16.2327 4.50146C16.2327 5.37378 15.5272 6.0835 14.66 6.0835Z" fill="#696969" />
                                            <path d="M14.659 3.97412C14.3697 3.97412 14.1348 4.21046 14.1348 4.50146C14.1348 4.79247 14.3697 5.02881 14.659 5.02881C14.9483 5.02881 15.1832 4.79247 15.1832 4.50146C15.1832 4.21046 14.9483 3.97412 14.659 3.97412Z" fill="#696969" />
                                            <path d="M9.41774 6.0835C7.39449 6.0835 5.74805 7.73969 5.74805 9.7749C5.74805 11.8101 7.39449 13.4663 9.41774 13.4663C11.441 13.4663 13.0874 11.8101 13.0874 9.7749C13.0874 7.73969 11.441 6.0835 9.41774 6.0835Z" fill="#696969" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1123_1939">
                                                <rect width="17.8941" height="18" fill="white" transform="translate(0.435547 0.810059)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                        <g clip-path="url(#clip0_1123_1946)">
                                            <path d="M11.7459 18.8101V10.6128H14.3957L14.7896 7.40326H11.7459V5.35894C11.7459 4.4328 11.9932 3.7987 13.2668 3.7987H14.8807V0.937248C14.0954 0.849425 13.3061 0.80702 12.5164 0.810228C10.1742 0.810228 8.56615 2.30246 8.56615 5.04189V7.39726H5.93359V10.6068H8.5719V18.8101H11.7459Z" fill="#696969" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1123_1946">
                                                <rect width="17.8941" height="18" fill="white" transform="translate(0.962891 0.810059)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                        // Если запрос прошел успешно, сбрасываем данные формы
                        form.reset();
                        // Показываем модальное окно об успешной отправке
                        modal.classList.add("modal-show");
                        // Закрываем модальное окно через 3 секунды
                        setTimeout(function() {
                            modal.classList.remove("modal-show");
                        }, 3000);
                    } else {
                        // В случае ошибки выводим сообщение об ошибке
                        console.error("Ошибка при отправке данных формы:", xhr.statusText);
                    }
                }
            };
            xhr.send(new URLSearchParams(formData));
        });

        // Функция для закрытия модального окна при клике на любое место вне его
        function closeModalOnOutsideClick(event) {
            if (!modal.contains(event.target)) {
                modal.classList.remove("modal-show");
                document.removeEventListener("click", closeModalOnOutsideClick);
            }
        }

        // Добавляем обработчик события клика на любое место для закрытия модального окна
        document.addEventListener("click", closeModalOnOutsideClick);

        // Предотвращаем закрытие модального окна при клике на само окно
        modal.addEventListener("click", function(event) {
            event.stopPropagation();
        });
    });
</script>








<?php include "partials/footer.php" ?>