import {Delete} from "./Delete";

const modalTermEl = document.querySelector('.ModalTerm'),
    WinnersModalEl = document.querySelector('.WinnersModal'),
    modalClose = document.querySelectorAll('.Modal-close'),
    Terms = document.querySelector('.Terms-button'),
    WinnersAllButton = document.querySelector('.Winners-button')
;

if (Terms) {
    Terms.addEventListener('click', function (e) {
        e.preventDefault();
        modalTermEl.classList.add('active');
    });
}
if (WinnersAllButton) {
    WinnersAllButton.addEventListener('click', function (e) {
        e.preventDefault();
        WinnersModalEl.classList.add('active');
    });
}
if (modalClose) {
    modalClose.forEach(function (el) {
        el.addEventListener('click', function () {
            document.querySelectorAll('.Modal').forEach(function (modal) {
                modal.classList.remove('active')
            });
        })
    });
}

const deleteElement = document.querySelectorAll('.delete');
if (deleteElement) {
    deleteElement.forEach(function (el) {
        el.addEventListener('click', function (e) {
            e.preventDefault();
            Delete({
                title: 'Estas seguro de eliminar?',
                text: 'Recuerda que no podrás volver a recuperar la info',
                formId: el
            });
        });
    })
}