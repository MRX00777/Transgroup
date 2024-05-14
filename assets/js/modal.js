document.addEventListener("DOMContentLoaded", function() {
    var openModalButton = document.querySelector(".bottom__content-btn");
    var modal = document.getElementById("modal___name");
    var closeModalButton = modal.querySelector(".popup__content-close");
    var nameInput = modal.querySelector('input[type="text"]');
    var telInput = modal.querySelector('input[type="tel"]');
    var emailInput = modal.querySelector('input[type="email"]');
    var successModal = document.getElementById("modal___name_success");

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

    // Добавляем обработчик события отправки формы
    modal.addEventListener("submit", function(event) {
        event.preventDefault(); // Предотвращаем отправку формы по умолчанию

        // Проверяем, заполнены ли обязательные поля
        if (nameInput.value.trim() === '' || telInput.value.trim() === '' || emailInput.value.trim() === '') {
            alert("Заполните обязательные поля");
            return;
        }

        // Закрываем основное модальное окно с формой
        modal.classList.remove("modal-show");
        document.body.classList.remove("no-scroll");

        // Показываем модальное окно с сообщением об успешной отправке
        successModal.classList.add("modal-show");
    });

    // Добавляем обработчик события клика на любое место для закрытия модального окна успеха
    document.addEventListener("click", function(event) {
        if (!successModal.contains(event.target)) {
            successModal.classList.remove("modal-show");
            document.body.classList.remove("no-scroll");
        }
    });
});
