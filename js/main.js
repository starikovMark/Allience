const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo");
const logoLight = document.querySelector(".logo-light");
const mMenuToggle = document.querySelector(".navbar-menu-toggle");
const menu = document.querySelector(".navbar-mobile");
const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal-dialog");
const isFront = document.body.classList.contains("front-page");

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
};
const navbarDark = (event) => {
    navbar.classList.remove("navbar-light");
};
const changeNavHeight = (height) => {
  navbar.style.height = height;
};
window.addEventListener('scroll', () => { // Добавляем к окну слушателя, при скроле страницы выполняем фукцию
    this.scrollY > 1 ? changeNavHeight("4.5rem") : changeNavHeight("5.875rem");    // Если страница покручивается на 1 пиксель, включается светлая шапка, в противном случае темная шапка 
    if (isFront) {
      this.scrollY > 1 ? navbarLight() : navbarDark();
    }
});
mMenuToggle.addEventListener("click", (event) => { // Функция при клике на кнопку меню
    event.preventDefault(); // Отключаем переход по ссылке для кнопки меню
    menu.classList.contains("is-open") ? closeMenu() : openMenu(); // если меню содержит класс is-open, выполняется функция закрытия меню, в противном случае меню открывается.
});
document.addEventListener("click", (event) => {
  if (
    event.target.dataset.toggle == "modal" ||
    event.target.parentNode.dataset.toggle == "modal" ||
    (!event.composedPath().includes(modalDialog) &&
      modal.classList.contains("is-open"))
  ) {
    event.preventDefault();
    modal.classList.toggle("is-open");
  }
});
document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && modal.classList.contains("is-open")) {
    modal.classList.toggle("is-open");
  }
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
    slidesPerView: 1,
    spaceBetween: 30,
    autoplay: {
      delay: 5000,
    },
    navigation: {
      nextEl: '.primary-buttons-next',
      prevEl: '.primary-buttons-prev',
    },
    breakpoints: {

      788: {
        slidesPerView: 2,
      },

    }
  });

const forms = document.querySelectorAll("form"); // достаем формы
forms.forEach((form) => {
  const validator = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });
  validator
  .addField("[name=username]", [
    {
      rule: 'required',
      errorMessage: "Укажите имя",
    },
    {
      rule: 'minLength',
      value: 2,
      errorMessage: "Минимально 2 символа",
    },
    {
      rule: 'maxLength',
      value: 30,
      errorMessage: "Максимально 30 символов",
    },
  ])
  .addField("[name=userphone]", [
    {
      rule: 'required',
      mask: '+7(000)000-00-00',
      errorMessage: "Укажите телефон",
    },
  ])
  .onSuccess((event) => {
    console.log(event.target.getAttribute("method"));
  })
});

IMask(
  document.getElementById('user_phone'),
  {
    mask: '+{7} (000) 000-00-00',
  }
);