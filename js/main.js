const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use");
const mMenuToggle = document.querySelector(".navbar-menu-toggle");
const menu = document.querySelector(".navbar-mobile");


window.addEventListener('scroll', () => {
    if (this.scrollY > 1) {
        navbar.classList.add("navbar-light");
        logo.href.baseVal = "img/svg/sprites.svg#logo"
    } else {
        navbar.classList.remove("navbar-light");
        logo.href.baseVal = "img/svg/sprites.svg#logo-light"
    }
});
mMenuToggle.addEventListener("click", (event) => {
    event.preventDefault();
    menu.classList.toggle("is-open");
});
