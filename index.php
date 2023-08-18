<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" href="./favicon.icofavicon.ico" type="image/x-icon">
  <script>
    !function (e, n, A) { function o(e, n) { return typeof e === n } function t() { var e, n, A, t, a, i, l; for (var f in r) if (r.hasOwnProperty(f)) { if (e = [], n = r[f], n.name && (e.push(n.name.toLowerCase()), n.options && n.options.aliases && n.options.aliases.length)) for (A = 0; A < n.options.aliases.length; A++)e.push(n.options.aliases[A].toLowerCase()); for (t = o(n.fn, "function") ? n.fn() : n.fn, a = 0; a < e.length; a++)i = e[a], l = i.split("."), 1 === l.length ? Modernizr[l[0]] = t : (!Modernizr[l[0]] || Modernizr[l[0]] instanceof Boolean || (Modernizr[l[0]] = new Boolean(Modernizr[l[0]])), Modernizr[l[0]][l[1]] = t), s.push((t ? "" : "no-") + l.join("-")) } } function a(e) { var n = u.className, A = Modernizr._config.classPrefix || ""; if (c && (n = n.baseVal), Modernizr._config.enableJSClass) { var o = new RegExp("(^|\\s)" + A + "no-js(\\s|$)"); n = n.replace(o, "$1" + A + "js$2") } Modernizr._config.enableClasses && (n += " " + A + e.join(" " + A), c ? u.className.baseVal = n : u.className = n) } function i(e, n) { if ("object" == typeof e) for (var A in e) f(e, A) && i(A, e[A]); else { e = e.toLowerCase(); var o = e.split("."), t = Modernizr[o[0]]; if (2 == o.length && (t = t[o[1]]), "undefined" != typeof t) return Modernizr; n = "function" == typeof n ? n() : n, 1 == o.length ? Modernizr[o[0]] = n : (!Modernizr[o[0]] || Modernizr[o[0]] instanceof Boolean || (Modernizr[o[0]] = new Boolean(Modernizr[o[0]])), Modernizr[o[0]][o[1]] = n), a([(n && 0 != n ? "" : "no-") + o.join("-")]), Modernizr._trigger(e, n) } return Modernizr } var s = [], r = [], l = { _version: "3.6.0", _config: { classPrefix: "", enableClasses: !0, enableJSClass: !0, usePrefixes: !0 }, _q: [], on: function (e, n) { var A = this; setTimeout(function () { n(A[e]) }, 0) }, addTest: function (e, n, A) { r.push({ name: e, fn: n, options: A }) }, addAsyncTest: function (e) { r.push({ name: null, fn: e }) } }, Modernizr = function () { }; Modernizr.prototype = l, Modernizr = new Modernizr; var f, u = n.documentElement, c = "svg" === u.nodeName.toLowerCase(); !function () { var e = {}.hasOwnProperty; f = o(e, "undefined") || o(e.call, "undefined") ? function (e, n) { return n in e && o(e.constructor.prototype[n], "undefined") } : function (n, A) { return e.call(n, A) } }(), l._l = {}, l.on = function (e, n) { this._l[e] || (this._l[e] = []), this._l[e].push(n), Modernizr.hasOwnProperty(e) && setTimeout(function () { Modernizr._trigger(e, Modernizr[e]) }, 0) }, l._trigger = function (e, n) { if (this._l[e]) { var A = this._l[e]; setTimeout(function () { var e, o; for (e = 0; e < A.length; e++)(o = A[e])(n) }, 0), delete this._l[e] } }, Modernizr._q.push(function () { l.addTest = i }), Modernizr.addAsyncTest(function () { function e(e, n, A) { function o(n) { var o = n && "load" === n.type ? 1 == t.width : !1, a = "webp" === e; i(e, a && o ? new Boolean(o) : o), A && A(n) } var t = new Image; t.onerror = o, t.onload = o, t.src = n } var n = [{ uri: "data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=", name: "webp" }, { uri: "data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==", name: "webp.alpha" }, { uri: "data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA", name: "webp.animation" }, { uri: "data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=", name: "webp.lossless" }], A = n.shift(); e(A.name, A.uri, function (A) { if (A && "load" === A.type) for (var o = 0; o < n.length; o++)e(n[o].name, n[o].uri) }) }), t(), a(s), delete l.addTest, delete l.addAsyncTest; for (var p = 0; p < Modernizr._q.length; p++)Modernizr._q[p](); e.Modernizr = Modernizr }(window, document);
  </script>
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
              <a href="./ag-tech.php" class="navbar-mobile-subtitle-link">
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
        <a href="tel:+74996861014" class="navbar-mobile-phone">+7 (499) 686-10-14</a>
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
            <a href="mailto:a.dragunov@tdaliance.ru" class="navbar-mobile-text">a.dragunov@tdaliance.ru</a>
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
        <a href="tel:+74996861014" class="navbar-phone__link">+7 (499) 686-10-14</a>
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
        <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">Подробнее о
          компании</button>
        <!-- Главный блок слайдера -->
        <?php include_once("./templates/swiper-block.php") ?>
      </div>
      <!-- /.header-content -->
    </div>
    <!-- /.container -->
  </header>
  <!-- /.header -->
  <?php include_once("./templates/scheme-block.php") ?>
  <?php
  $block_title = "Контрактное производство";
  include_once("./templates/contracts-block.php") ?>
  <?php include_once("./templates/marks-block.php") ?>
  <?php include_once("./templates/founder-block.php") ?>
  <?php include_once("./templates/clients-block.php") ?>
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
            <picture class="blog-card-image">
              <source type="image/webp" srcset="img/png/blog-image-1.webp">
              <source type="image/jpeg" srcset="img/png/blog-image-1.jpeg">
              <img src="img/png/blog-image-1.jpeg" alt="jpeg: blog-1" class="blog-card-image" />
            </picture>
            <h3 class="blog-card-title">
              Современная методология разработки одухотворила всех причастных
            </h3>
            <p class="blog-card-text">
              Действия представителей оппозиции, превозмогая сложившуюся
              непростую экономическую ситуацию, в равной степени
              предоставлены...
            </p>
          </a>
          <a href="#" class="swiper-slide blog-card">
            <picture class="blog-card-image">
              <source type="image/webp" srcset="img/png/blog-image-2.webp">
              <source type="image/jpeg" srcset="img/png/blog-image-2.jpeg">
              <img src="img/png/blog-image-2.jpeg" alt="jpeg: blog-2" class="blog-card-image" />
            </picture>
            <h3 class="blog-card-title">
              Сложно сказать, почему жизнь прекрасна
            </h3>
            <p class="blog-card-text">
              Сложно сказать, почему элементы политического процесса
              функционально разнесены на независимые элементы. Безусловно,
              высокотехнологичная...
            </p>
          </a>
          <a href="#" class="swiper-slide blog-card">
            <picture class="blog-card-image">
              <source type="image/webp" srcset="img/png/blog-image-1.webp">
              <source type="image/jpeg" srcset="img/png/blog-image-1.jpeg">
              <img src="img/png/blog-image-1.jpeg" alt="jpeg: blog-1" class="blog-card-image" />
            </picture>
            <h3 class="blog-card-title">
              Современная методология разработки одухотворила всех причастных
            </h3>
            <p class="blog-card-text">
              Действия представителей оппозиции, превозмогая сложившуюся
              непростую экономическую ситуацию, в равной степени
              предоставлены...
            </p>
          </a>
          <a href="#" class="swiper-slide blog-card">
            <picture class="blog-card-image">
              <source type="image/webp" srcset="img/png/blog-image-2.webp">
              <source type="image/jpeg" srcset="img/png/blog-image-2.jpeg">
              <img src="img/png/blog-image-2.jpeg" alt="jpeg: blog-2" class="blog-card-image" />
            </picture>
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
  <?php include_once("footer.php") ?>