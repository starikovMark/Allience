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
    <title><?php echo $page_title?> – Allience Production</title>
  </head>
  <body>
    <div class="navbar-mobile">
      <ul class="navbar-mobile-menu">
        <li class="navbar-mobile-item">
          <a href="./about.php" class="navbar-mobile-link">О компании</a>
        </li>
        <li class="navbar-mobile-item">
          <a href="./contracts.php" class="navbar-mobile-link">Контрактное производство</a>
          <ul class="navbar-mobile-subtitle">
            <li class="navbar-mobile-subtitle-item">
              <a href="./auto-him.php" class="navbar-mobile-subtitle-link">
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
          <a href="./marks.php" class="navbar-mobile-link">Собственные торговые марки</a>
          <ul class="navbar-mobile-subtitle">
            <li class="navbar-mobile-subtitle-item">
              <a href="#" class="navbar-mobile-subtitle-link">
                Автохимия AG-Tech
              </a>
            </li>
            <li class="navbar-mobile-subtitle-item">
              <a href="#" class="navbar-mobile-subtitle-link"> Автохимия AP </a>
            </li>
          </ul>
        </li>
        <li class="navbar-mobile-item">
          <a href="#" class="navbar-mobile-link">Новости</a>
        </li>
        <li class="navbar-mobile-item">
          <a href="./contacts.php" class="navbar-mobile-link">Контакты</a>
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
            <a href="mailto:a.dragunov@tdaliance.ru" class="navbar-mobile-text"
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
    <nav class="navbar navbar-light">
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
          <a href="./contacts.php" class="navbar-menu-link">Контакты</a>
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
    <section class="named <?= $header_class; ?>">
      <div class="container">
        <div class="seporator"></div>
        <div class="named-wrapper">
          <div class="named-text">
            <h2 class="section-title named-title <?= $header_title; ?>"><?php echo $page_title?></h2>
            <ul class="breadcrumb">
              <li class="breadcrumb-item">
                <a class="breadcrumb-item-link" href="index.html">Главная</a>
              </li>
              <li class="breadcrumb-item-active">
                <a
                  class="breadcrumb-item-link breadcrumb-item-link-active"
                  href="./about.php"
                  ><?php echo $page_title?></a
                >
              </li>
            </ul>
          </div>
          <!-- /.named-text -->
          <picture class="named-image <?= $header_image;?>">
            <source type="image/webp" srcset="img/png/avto-him.webp">
            <source type="image/jpeg" srcset="img/png/avto-him.png">
            <img src="img/png/avto-him.png" class="named-image <?= $header_image;?>">
          </picture>
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section named -->