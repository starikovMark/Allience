const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo");
const logoLight = document.querySelector(".logo-light");
const mMenuToggle = document.querySelector(".navbar-menu-toggle");
const menu = document.querySelector(".navbar-mobile");
const isFront = document.body.classList.contains("front-page");
const modalButtons = document.querySelectorAll('[data-toggle=modal]');
let currentModal;
let modalDialog;
let alertModal = document.querySelector("#alert-modal");

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
modalButtons.forEach((button) => {
   /* клик по переключателю */ /* */
  button.addEventListener("click", (event) => {
    event.preventDefault();
    /* Определяем текущее открытое окно*/
  currentModal = document.querySelector(button.dataset.target);
  /* Открываем текущее окно*/
  currentModal.classList.toggle("is-open");
  /* Назначаем диалоговое окно*/
  modalDialog = currentModal.querySelector(".modal-dialog");
  /*отслеживаем клик по окну и пустым областям */
  currentModal.addEventListener("click", event => {
    /* если клик в пустую область (не диалог)*/
    if  (!event.composedPath().includes(modalDialog)) {
      /*закрываем окно */
      currentModal.classList.remove("is-open");
    }
  });
  });
});
/* отлавливаем событие нажатие на кнопки */
document.addEventListener("keyup", (event) => {
  /* проверяем что это Escape и текущее окно открыто */
  if (event.key == "Escape" && currentModal.classList.contains("is-open")) {
    /*Закрывает текущее окно */
    currentModal.classList.toggle("is-open");
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
    const thisForm = event.target;
    const formData = new FormData(thisForm);
    const ajaxSend = (formData) => {
      fetch(thisForm.getAttribute("action"), {
        method: thisForm.getAttribute("method"),
        body: formData,
      }).then((responce) => {
        if (responce.ok) {
          thisForm.reset();
          currentModal.classList.remove("is-open");
          alertModal.classList.add("is-open");
          currentModal = alertModal;
          modalDialog = currentModal.querySelector(".modal-dialog");
          /*отслеживаем клик по окну и пустым областям */
          currentModal.addEventListener("click", event => {
            /* если клик в пустую область (не диалог)*/
            if  (!event.composedPath().includes(modalDialog)) {
              /*закрываем окно */
              currentModal.classList.remove("is-open");
            }
          });
        } else {
          alert("Ошибка. Текст ошибки: " .responce.statusText);
        }
      });
    };
    ajaxSend(formData);
  });
});

/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
  /* если вводят семерку, добавляем ей скобку */
  if (str === "7") {
    return "7 (";
  }
  /* если вводят восьмерку, ставим вместо нее +7 ( */
  if (str === "8") {
    return "+7 (";
  }
  /* если пишут девятку, заменяем на +7 (9  */
  if (str === "9") {
    return "7 (9";
  }
  /* в других случаях просто 7 (  */
  return "7 (";
}; /* профикс в любом раскладе будет +7 () */

/* Ловим события ввода в любом поле */
document.addEventListener("input", (e) => {
  /* Проверяем, что это поле имеет класс phone-mask */
  if (e.target.classList.contains("phone-mask")) {
    /* поле с телефоном помещаем в переменную input */
    const input = e.target;
    /* вставляем плюс в начале номера */
    const value = input.value.replace(/\D+/g, "");
    /* длинна номера 11 символов */
    const numberLength = 11;

    /* Создаем переменную, куда будем записывать номер */
    let result;
    /* Если пользователь ввел 8... */
    if (input.value.includes("+8") || input.value[0] === "8") {
      /* Стираем восьмерку */
      result = "";
    } else {
      /* Оставляем плюсик в поле */
      result = "+";
    }

    /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
    for (let i = 0; i < value.length && i < numberLength; i++) {
      switch (i) {
        case 0:
          /* в самом начале ставим префикс +7 ( */
          result += prefixNumber(value[i]);
          continue;
        case 4:
          /* добавляем после "+7 (" круглую скобку ")" */
          result += ") ";
          break;
        case 7:
          /* дефис после 7 символа */
          result += "-";
          break;
        case 9:
          /* еще дефис  */
          result += "-";
          break;
        default:
          break;
      }
      /* на каждом шаге цикла добавляем новую цифру к номеру */
      result += value[i];
    }
    /* итог: номер в формате +7 (999) 123-45-67 */
    input.value = result;
  }
});