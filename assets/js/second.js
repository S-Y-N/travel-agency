
let recItem = document.querySelectorAll('.recomm__btn-item');
let recContent = document.querySelectorAll('.recomm__content-item');

recItem.forEach(function (el) {
    el.addEventListener('click', open);
});
function open() {
    recItem.forEach(function (item) {
        item.classList.remove('recomm__tabs__btn-item--active');
    });

    this.classList.add('recomm__tabs__btn-item--active');

    tabContent.forEach(function (item) {
        item.classList.remove('recomm__content-item--active');
    });
    document.querySelector('#' + this.dataset.button).classList.add('recomm__content-item--active');
}
