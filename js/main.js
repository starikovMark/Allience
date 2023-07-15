const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use");
const mMenuToggle = document.querySelector(".navbar-menu-toggle");
const menu = document.querySelector(".navbar-mobile");

const openMenu = (event) => { // Стрелочная функция открывания меню
    menu.classList.add("is-open"); // Добавляем класс к меню
    mMenuToggle.classList.add("close-menu"); // Добавляем класс к кнопке меню
    document.body.style.overflow = "hidden"; // Когда меню открыто, страница не двигается
    navbarLight(); // Вызываем функцию светлой шапки
};
const closeMenu = (event) => { // Функция закрытия меню
    menu.classList.remove("is-open"); // Удаляем класс с меню
    mMenuToggle.classList.remove("close-menu"); // Удаляем класс с кнопки меню
    document.body.style.overflow = ""; // Страница двигается
    navbarDark(); // Функция темной шапки
};
const navbarLight = (event) => {
    navbar.classList.add("navbar-light");
    logo.href.baseVal = "img/svg/sprites.svg#logo";
};
const navbarDark = (event) => {
    navbar.classList.remove("navbar-light");
    logo.href.baseVal = "img/svg/sprites.svg#logo-light";
}

window.addEventListener('scroll', () => { // Добавляем к окну слушателя, при скроле страницы выполняем фукцию
    this.scrollY > 1 ? navbarLight() : navbarDark(); // Если страница покручивается на 1 пиксель, включается светлая шапка, в противном случае темная шапка 
});
mMenuToggle.addEventListener("click", (event) => { // Функция при клике на кнопку меню
    event.preventDefault(); // Отключаем переход по ссылке для кнопки меню
    menu.classList.contains("is-open") ? closeMenu() : openMenu(); // если меню содержит класс is-open, выполняется функция закрытия меню, в противном случае меню открывается.
});