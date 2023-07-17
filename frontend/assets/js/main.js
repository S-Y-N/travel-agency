let tabItem = document.querySelectorAll('.tabs__btn-item');
let tabContent = document.querySelectorAll('.tabs__content-item');

tabItem.forEach(function (el) {
    el.addEventListener('click', open);
});
function open() {
    tabItem.forEach(function (item) {
        item.classList.remove('tabs__btn-item--active');
    });

    this.classList.add('tabs__btn-item--active');

    tabContent.forEach(function (item) {
        item.classList.remove('tabs__content-item--active');
    });
    document.querySelector('#' + this.dataset.button).classList.add('tabs__content-item--active');
}
