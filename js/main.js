const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo");
const logoLight = document.querySelector(".logo-light");
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
    logo.style.display = "block";
    logoLight.style.display = "none";
};
const navbarDark = (event) => {
    navbar.classList.remove("navbar-light");
    logoLight.style.display = "block";
    logo.style.display = "none";
}

window.addEventListener('scroll', () => { // Добавляем к окну слушателя, при скроле страницы выполняем фукцию
    this.scrollY > 1 ? navbarLight() : navbarDark(); // Если страница покручивается на 1 пиксель, включается светлая шапка, в противном случае темная шапка 
});
mMenuToggle.addEventListener("click", (event) => { // Функция при клике на кнопку меню
    event.preventDefault(); // Отключаем переход по ссылке для кнопки меню
    menu.classList.contains("is-open") ? closeMenu() : openMenu(); // если меню содержит класс is-open, выполняется функция закрытия меню, в противном случае меню открывается.
});
const swiper = new Swiper('.swiper', {
    autoHeight: true,
    slidesPerView: 1,
    navigation: {
      nextEl: '.slider-button-next',
      prevEl: '.slider-button-prev',
    },
    breakpoints: {
        // when window width is >= 320px
        588: {
          slidesPerView: 2,
          centeredSlides: true,
        },
        // when window width is >= 480px
        788: {
          slidesPerView: 2,
        },
        // when window width is >= 640px
        992: {
          slidesPerView: 3,
        },
        1200: {
            slidesPerView: 5,
        }
      }
  });
  const swiperScheme = new Swiper('.swiper-scheme', {
    autoHeight: true,
    slidesPerView: 1,
    navigation: {
      nextEl: '.slider-button-primary-next',
      prevEl: '.slider-button-primary-prev',
    },
    breakpoints: {
        // when window width is >= 320px
        588: {
          slidesPerView: 2,
        },
        // when window width is >= 480px
        788: {
          slidesPerView: 2,
        },
        // when window width is >= 640px
        992: {
          slidesPerView: 2,
        },
        1200: {
            slidesPerView: 4,
        }
      }
  });
  const swiperBlog = new Swiper('.slider-blog', {
    autoHeight: true,
    speed: 300,
    slidesPerView: 2,
    spaceBetween: 30,
    navigation: {
      nextEl: '.primary-buttons-next',
      prevEl: '.primary-buttons-prev',
    },
  });