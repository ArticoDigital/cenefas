import {Delete} from "./Delete";
import axios from 'axios';

const deleteElement = document.querySelectorAll('.deleteElement');
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

const FormCategory = document.getElementById('FormCategory'),
    FormCategoryClose = document.getElementById('FormCategoryClose'),
    FormCategoryInput = document.getElementById('FormCategoryInput'),
    CategoryUpdateUrl = document.querySelectorAll('.Category-updateUrl'),
    Modal = document.getElementById('Modal');

if (FormCategory) {

    CategoryUpdateUrl.forEach(function (item) {
        item.addEventListener('click', function () {
            Modal.classList.remove('is-hidden');
            FormCategoryInput.value = item.dataset.name;
            FormCategory.action = item.dataset.url
        });
    });

    FormCategoryClose.addEventListener('click', function () {
        Modal.classList.add('is-hidden');
    });
}
const FileCountries = document.getElementById('FileCountries');
if (FileCountries) {
    const FileCategories = document.getElementById('FileCategories');
    FileCountries.addEventListener('change', function () {
        const country = this[this.selectedIndex].value;
        FileCategories.options.length = 0;
        axios.get(`/admin/country/${country}/categories/`).then(function (r) {
            r.data.categories.forEach(function (item) {
                let option = document.createElement("option");
                option.text = item.name;
                option.value = item.id;
                FileCategories.add(option);
            });

        })
    });
    FileCategories.addEventListener('change', function () {
        document.getElementById('categoryName').value = this[this.selectedIndex].value;
    });
}

