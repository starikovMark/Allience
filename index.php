<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Allience Production</title>
  </head>
  <body class="front-page">
    <header class="header header-image">
      <div class="navbar-mobile">
        <ul class="navbar-mobile-menu">
          <li class="navbar-mobile-item">
            <a href="./about.php" class="navbar-mobile-link">О компании</a>
          </li>
          <li class="navbar-mobile-item">
            <a href="#" class="navbar-mobile-link">Контрактное производство</a>
            <ul class="navbar-mobile-subtitle">
              <li class="navbar-mobile-subtitle-item">
                <a href="#" class="navbar-mobile-subtitle-link">
                  Автомобильная химия
                </a>
              </li>
              <li class="navbar-mobile-subtitle-item">
                <a href="#" class="navbar-mobile-subtitle-link">
                  Бытовая химия
                </a>
              </li>
              <li class="navbar-mobile-subtitle-item">
                <a href="#" class="navbar-mobile-subtitle-link">
                  Дезинфицирующие средства
                </a>
              </li>
              <li class="navbar-mobile-subtitle-item">
                <a href="#" class="navbar-mobile-subtitle-link">
                  Пищевые аэрозоли
                </a>
              </li>
              <li class="navbar-mobile-subtitle-item">
                <a href="#" class="navbar-mobile-subtitle-link">
                  Косметическая продукция
                </a>
              </li>
              <li class="navbar-mobile-subtitle-item">
                <a href="#" class="navbar-mobile-subtitle-link">
                  Краски аэрозольные
                </a>
              </li>
            </ul>
          </li>
          <li class="navbar-mobile-item">
            <a href="#" class="navbar-mobile-link"
              >Собственные торговые марки</a
            >
            <ul class="navbar-mobile-subtitle">
              <li class="navbar-mobile-subtitle-item">
                <a href="#" class="navbar-mobile-subtitle-link">
                  Автохимия AG-Tech
                </a>
              </li>
              <li class="navbar-mobile-subtitle-item">
                <a href="#" class="navbar-mobile-subtitle-link">
                  Автохимия AP
                </a>
              </li>
            </ul>
          </li>
          <li class="navbar-mobile-item">
            <a href="#" class="navbar-mobile-link">Новости</a>
          </li>
          <li class="navbar-mobile-item">
            <a href="#" class="navbar-mobile-link">Контакты</a>
          </li>
        </ul>
        <div class="navbar-mobile-info">
          <a href="tel:+74996861014" class="navbar-mobile-phone"
            >+7 (499) 686-10-14</a
          >
          <ul class="navbar-mobile-info-list">
            <li class="navbar-mobile-info-item">
              <svg class="navbar-mobile-icon" width="24" height="24">
                <use href="img/svg/sprites.svg#mark"></use>
              </svg>
              <address class="navbar-mobile-text">
                г. Москва, Холодильный пер. 4к1с8
              </address>
            </li>
            <li class="navbar-mobile-info-item">
              <svg class="navbar-mobile-icon" width="24" height="24">
                <use href="img/svg/sprites.svg#mail"></use>
              </svg>
              <a
                href="mailto:a.dragunov@tdaliance.ru"
                class="navbar-mobile-text"
                >a.dragunov@tdaliance.ru</a
              >
            </li>
          </ul>
          <div class="navbar-mobile-social">
            <a href="#" class="navbar-mobile-social-link">
              <svg class="navbar-mobile-icon" width="24" height="24">
                <use href="img/svg/sprites.svg#vk"></use>
              </svg>
            </a>
            <a href="#" class="navbar-mobile-social-link">
              <svg class="navbar-mobile-icon" width="24" height="24">
                <use href="img/svg/sprites.svg#inst"></use>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <!-- /.navbar-mobile -->
      <nav class="navbar">
        <a href="#" class="navbar-menu-toggle">
          <div class="navbar-menu-line"></div>
          <div class="navbar-menu-line"></div>
          <div class="navbar-menu-line"></div>
        </a>
        <a href="./" class="navbar-logo">
          <svg class="logo-svg logo-light">
            <use href="img/svg/sprites.svg#logo-light"></use>
          </svg>
          <svg class="logo-svg logo-dark">
            <use href="img/svg/sprites.svg#logo"></use>
          </svg>
        </a>
        <ul class="navbar-menu">
          <li class="navbar-menu-item">
            <a href="./about.php" class="navbar-menu-link">О компании</a>
          </li>
          <li class="navbar-menu-item">
            <a href="#" class="navbar-menu-link">Контрактное производство</a>
          </li>
          <li class="navbar-menu-item">
            <a href="#" class="navbar-menu-link">Собственные торговые марки</a>
          </li>
          <li class="navbar-menu-item">
            <a href="#" class="navbar-menu-link">Новости</a>
          </li>
          <li class="navbar-menu-item">
            <a href="#" class="navbar-menu-link">Контакты</a>
          </li>
        </ul>
        <div class="navbar-phone">
          <svg class="navbar-phone-image" width="24" height="24">
            <use href="img/svg/sprites.svg#phone"></use>
          </svg>
          <a href="tel:+74996861014" class="navbar-phone__link"
            >+7 (499) 686-10-14</a
          >
        </div>
        <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">
          <span class="navbar-button-link">
            <svg class="navbar-phone-image phone-icon" width="24" height="24">
              <use href="img/svg/sprites.svg#phone"></use>
            </svg>
          </span>
          <span class="navbar-button-text">Получить консультацию</span>
        </button>
      </nav>
      <!-- /.navbar -->
      <div class="container">
        <div class="header-content">
          <div class="seporator"></div>
          <h1 class="header-title">
            Комплексное обеспечение товарами и расходными материалами бизнеса
          </h1>
          <p class="header-subtitle">
            Высокий уровень вовлечения представителей целевой аудитории является
            четким доказательством простого факта: высококачественный прототип
            будущего проекта напрямую зависит от анализа существующих паттернов
            поведения.
          </p>
          <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">Подробнее о компании</button>
          <!-- Главный блок слайдера -->
          <div class="swiper">
            <!-- обертка слайдера-->
            <div class="swiper-wrapper header-features">
              <!-- слайды -->
              <div class="swiper-slide header-features-item">
                <svg class="header-features-icon" width="36" height="36">
                  <use href="img/svg/sprites.svg#time"></use>
                </svg>
                <p class="header-features-text">
                  Непрерывная работа c 2017 года
                </p>
              </div>
              <div class="swiper-slide header-features-item">
                <svg class="header-features-icon" width="36" height="36">
                  <use href="img/svg/sprites.svg#certificate"></use>
                </svg>
                <p class="header-features-text">
                  Вся продукция сертифицирована
                </p>
              </div>
              <div class="swiper-slide header-features-item">
                <svg class="header-features-icon" width="36" height="36">
                  <use href="img/svg/sprites.svg#control"></use>
                </svg>
                <p class="header-features-text">
                  Контроль качества на всех этапах
                </p>
              </div>
              <div class="swiper-slide header-features-item">
                <svg class="header-features-icon" width="36" height="36">
                  <use href="img/svg/sprites.svg#delivery"></use>
                </svg>
                <p class="header-features-text">
                  Возможны поставки по всей России
                </p>
              </div>
              <div class="swiper-slide header-features-item">
                <svg class="header-features-icon" width="36" height="36">
                  <use href="img/svg/sprites.svg#speed"></use>
                </svg>
                <p class="header-features-text">Оперативное производство</p>
              </div>
            </div>
            <!-- кнопки переключения -->
            <div class="slider-buttons">
              <div class="slider-button-prev">
                <svg width="36" height="24">
                  <use href="img/svg/sprites.svg#arrow-prev"></use>
                </svg>
              </div>
              <div class="slider-button-next">
                <svg width="36" height="24">
                  <use href="img/svg/sprites.svg#arrow-next"></use>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <!-- /.header-content -->
      </div>
      <!-- /.container -->
    </header>
    <!-- /.header -->
    <section class="section section-scheme">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">схема работы</h2>
        <!-- Slider main container -->
        <div class="swiper-scheme">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper steps">
            <!-- Slides -->
            <div class="swiper-slide steps-item">
              <span class="steps-number">01</span>
              <h3 class="steps-title">Знакомство</h3>
              <p class="steps-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
            </div>
            <div class="swiper-slide steps-item">
              <span class="steps-number">02</span>
              <h3 class="steps-title">Заключение договора</h3>
              <p class="steps-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </div>
            <div class="swiper-slide steps-item">
              <span class="steps-number">03</span>
              <h3 class="steps-title">Производство</h3>
              <p class="steps-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые элементы.
              </p>
            </div>
            <div class="swiper-slide steps-item">
              <span class="steps-number">04</span>
              <h3 class="steps-title">Доставка</h3>
              <p class="steps-text">
                В частности, экономическая повестка сегодняшнего дня говорит о
                возможностях приоритизации разума над эмоциями.
              </p>
            </div>
          </div>
          <a href="#" class="button-link" data-toggle="modal" data-target="#feedback-modal">Оставь заявку</a>
          <!-- If we need navigation buttons -->
          <div class="slider-buttons-primary primary-buttons-wrapper">
            <div class="slider-button-primary-prev primary-buttons-prev">
              <svg width="36" height="24">
                <use href="img/svg/sprites.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="slider-button-primary-next primary-buttons-next">
              <svg width="36" height="24">
                <use href="img/svg/sprites.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section section-scheme -->
    <section class="section production">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">Контрактное производство</h2>
        <div class="cards">
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Автомобильная химия</h3>
              <p class="card-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
            </div>
            <img src="img/png/metal.png" alt="png: metal" class="card-image" />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Бытовая химия</h3>
              <p class="card-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые элементы.
              </p>
            </div>
            <img src="img/png/losk.png" alt="png: losk" class="card-image" />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Дезинфицирующие средства</h3>
              <p class="card-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </div>
            <img
              src="img/png/septarius.png"
              alt="png: septarius"
              class="card-image"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Пищевые аэрозоли</h3>
              <p class="card-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
            </div>
            <img
              src="img/png/septarius.png"
              alt="png: septarius"
              class="card-image"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Косметическая продукция</h3>
              <p class="card-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </div>
            <img src="img/png/metal.png" alt="png: metal" class="card-image" />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Краски аэрозольные</h3>
              <p class="card-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые элементы.
              </p>
            </div>
            <img src="img/png/losk.png" alt="png: losk" class="card-image" />
          </a>
        </div>
        <!-- /.cards -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section production -->
    <section class="section marks">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">собственные торговые марки</h2>
        <div class="cards products">
          <div class="card product">
            <svg class="product-image">
              <use href="img/svg/sprites.svg#ag-tech"></use>
            </svg>
            <div class="product-text">
              <h3 class="card-title product-text-title">Автохимия AG-Tech</h3>
              <p class="card-text product-text-subtitle">
                Для современного мира разбавленное изрядной долей эмпатии,
                рациональное мышление создаёт предпосылки для поставленных
                обществом задач.
              </p>
            </div>
          </div>
          <div class="card product">
            <svg class="product-image">
              <use href="img/svg/sprites.svg#allience"></use>
            </svg>
            <div class="product-text">
              <h3 class="card-title product-text-title">Автохимия AP</h3>
              <p class="card-text product-text-subtitle">
                Для современного мира разбавленное изрядной долей эмпатии,
                рациональное мышление создаёт предпосылки для поставленных
                обществом задач.
              </p>
            </div>
          </div>
        </div>
        <!-- /.products -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section marks -->
    <section class="section founder">
      <img src="img/png/founder.png" alt="png: founder" class="founder-image" />
      <div class="container">
        <div class="founder-content-wrapper">
          <div class="founder-content">
            <div class="seporator"></div>
            <h2 class="section-title">Отношение к делу и к клиентам</h2>
            <p class="founder-text">
              Кстати, интерактивные прототипы описаны максимально подробно.
              Повседневная практика показывает, что укрепление и развитие
              внутренней структуры говорит о возможностях соответствующих
              условий активизации. Внезапно, независимые государства, которые
              представляют собой яркий пример континентально-европейского типа
              политической культуры, будут подвергнуты целой серии независимых
              исследований. С учётом сложившейся международной обстановки,
              синтетическое тестирование выявляет срочную потребность системы
              массового участия. А ещё действия представителей оппозиции,
              превозмогая сложившуюся непростую экономическую ситуацию, в равной
              степени предоставлены сами себе. Не следует, однако, забывать, что
              выбранный нами инновационный путь в значительной степени
              обусловливает важность дальнейших направлений развития.
            </p>
            <a href="#" class="button-link" data-toggle="modal" data-target="#feedback-modal"
              >Оставь заявку</a
            >
          </div>
          <!-- /.founder-content -->
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section founder -->
    <section class="section clients">
      <div class="container">
        <div class="seporator"></div>
        <div class="clients-content">
          <div class="clients-text-wrapper">
            <h2 class="section-title">
              Производим аэрозольную продукцию для разных сфер
            </h2>
            <ul class="clients-text-list">
              <li class="clients-text-item">
                <svg class="clients-text-icon">
                  <use href="img/svg/sprites.svg#him"></use>
                </svg>
                Химические производства
              </li>
              <li class="clients-text-item">
                <svg class="clients-text-icon">
                  <use href="img/svg/sprites.svg#wash-auto"></use>
                </svg>
                Автомойки
              </li>
              <li class="clients-text-item">
                <svg class="clients-text-icon">
                  <use href="img/svg/sprites.svg#eat-product"></use>
                </svg>
                Пищевая продукция
              </li>
              <li class="clients-text-item">
                <svg class="clients-text-icon">
                  <use href="img/svg/sprites.svg#paint"></use>
                </svg>
                Лаки и краски
              </li>
              <li class="clients-text-item">
                <svg class="clients-text-icon">
                  <use href="img/svg/sprites.svg#hand"></use>
                </svg>
                Косметические средства
              </li>
              <li class="clients-text-item">
                <svg class="clients-text-icon">
                  <use href="img/svg/sprites.svg#cosmetic"></use>
                </svg>
                Автомобильная косметика
              </li>
              <li class="clients-text-item">
                <svg class="clients-text-icon">
                  <use href="img/svg/sprites.svg#cosmetic-cloth"></use>
                </svg>
                Косметика по уходу за одеждой
              </li>
              <li class="clients-text-item">
                <svg class="clients-text-icon">
                  <use href="img/svg/sprites.svg#cosmetic-shoes"></use>
                </svg>
                Косметика по уходу за обувью
              </li>
              <li class="clients-text-item">
                <svg class="clients-text-icon">
                  <use href="img/svg/sprites.svg#material"></use>
                </svg>
                Строительные материалы
              </li>
              <li class="clients-text-item">
                <svg class="clients-text-icon">
                  <use href="img/svg/sprites.svg#more"></use>
                </svg>
                И многих других
              </li>
            </ul>
          </div>
          <!-- /.clients-text-wrapper -->
          <div class="clients-logo-wrapper">
            <a href="#" class="clients-logo-item"
              ><img
                src="img/png/burger-king.png"
                alt="png: burger-king"
                class="clients-logo-image" /></a
            ><a href="#" class="clients-logo-item"
              ><img
                src="img/png/burger-king.png"
                alt="png: burger-king"
                class="clients-logo-image" /></a
            ><a href="#" class="clients-logo-item"
              ><img
                src="img/png/burger-king.png"
                alt="png: burger-king"
                class="clients-logo-image" /></a
            ><a href="#" class="clients-logo-item"
              ><img
                src="img/png/burger-king.png"
                alt="png: burger-king"
                class="clients-logo-image" /></a
            ><a href="#" class="clients-logo-item"
              ><img
                src="img/png/burger-king.png"
                alt="png: burger-king"
                class="clients-logo-image" /></a
            ><a href="#" class="clients-logo-item"
              ><img
                src="img/png/burger-king.png"
                alt="png: burger-king"
                class="clients-logo-image" /></a
            ><a href="#" class="clients-logo-item"
              ><img
                src="img/png/burger-king.png"
                alt="png: burger-king"
                class="clients-logo-image" /></a
            ><a href="#" class="clients-logo-item"
              ><img
                src="img/png/burger-king.png"
                alt="png: burger-king"
                class="clients-logo-image" /></a
            ><a href="#" class="clients-logo-item"
              ><img
                src="img/png/burger-king.png"
                alt="png: burger-king"
                class="clients-logo-image"
            /></a>
          </div>
          <!-- /.clients-logo-wrapper -->
        </div>
        <!-- /.clients-content -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section clients -->
    <section class="section blog">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">Блог экспертов в области производства</h2>
        <!-- Slider main container -->
        <div class="swiper slider-blog">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper slider-blog-wrapper">
            <!-- Slides -->
            <a href="#" class="swiper-slide blog-card">
              <img
                src="img/png/blog-image-1.jpeg"
                alt="jpeg: blog-1"
                class="blog-card-image"
              />
              <h3 class="blog-card-title">
                Современная методология разработки одухотворила всех причастных
              </h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в равной степени
                предоставлены...
              </p>
            </a>
            <a href="#" class="swiper-slide blog-card"
              ><img
                src="img/png/blog-image-2.jpeg"
                alt="jpeg: blog-2"
                class="blog-card-image"
              />
              <h3 class="blog-card-title">
                Сложно сказать, почему жизнь прекрасна
              </h3>
              <p class="blog-card-text">
                Сложно сказать, почему элементы политического процесса
                функционально разнесены на независимые элементы. Безусловно,
                высокотехнологичная...
              </p></a
            >
            <a href="#" class="swiper-slide blog-card"
              ><img
                src="img/png/blog-image-1.jpeg"
                alt="jpeg: blog-1"
                class="blog-card-image"
              />
              <h3 class="blog-card-title">
                Современная методология разработки одухотворила всех причастных
              </h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в равной степени
                предоставлены...
              </p></a
            >
            <a href="#" class="swiper-slide blog-card">
              <img
                src="img/png/blog-image-2.jpeg"
                alt="jpeg: blog-2"
                class="blog-card-image"
              />
              <h3 class="blog-card-title">
                Сложно сказать, почему жизнь прекрасна
              </h3>
              <p class="blog-card-text">
                Сложно сказать, почему элементы политического процесса
                функционально разнесены на независимые элементы. Безусловно,
                высокотехнологичная...
              </p>
            </a>
          </div>
          <!-- If we need navigation buttons -->
          <div class="blog-slider-footer">
            <a href="#" class="button-link">Весь блог</a>
            <div class="blog-buttons primary-buttons-wrapper">
              <div class="primary-buttons-prev">
                <svg width="36" height="24">
                  <use href="img/svg/sprites.svg#arrow-prev"></use>
                </svg>
              </div>
              <div class="primary-buttons-next">
                <svg width="36" height="24">
                  <use href="img/svg/sprites.svg#arrow-next"></use>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section blog -->
    
    <?php include_once("footer.php")?>
