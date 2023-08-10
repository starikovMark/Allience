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
            <a href="./contracts.php" class="navbar-mobile-link">Контрактное производство</a>
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
            <a href="./marks.php" class="navbar-mobile-link"
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
            <a href="./contracts.php" class="navbar-menu-link">Контрактное производство</a>
          </li>
          <li class="navbar-menu-item">
            <a href="./marks.php" class="navbar-menu-link">Собственные торговые марки</a>
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
    <?php include_once("./templates/scheme-block.php")?>
    <?php 
    $block_title = "Контрактное производство";
    include_once("./templates/contracts-block.php")?>
    <?php include_once("./templates/marks-block.php")?>
    <?php include_once("./templates/founder-block.php")?>
    <?php include_once("./templates/clients-block.php")?>
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
