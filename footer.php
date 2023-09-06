<section class="cta <?= $cta_display ?>">
  <div class="bg-grey section-cta">
    <picture class="cta-image">
      <source type="image/webp" srcset="img/png/calltoaction.webp">
      <source type="image/jpeg" srcset="img/png/calltoaction.png">
      <img src="img/png/calltoaction.png" alt="png: calltoaction" class="cta-image" />
    </picture>
    <div class="cta-wrapper container">
      <form action="handler.php" method="POST" class="cta-form">
        <h2 class="cta-form-title section-title">Хотите сотрудничать?</h2>
        <p class="cta-form-text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
          ответит на все интересующие вопросы и поможем даже в самых сложных
          случаях!
        </p>
        <div class="input-group-wrapper">
          <div class="input-group">
            <input type="text" id="user_name" name="username" class="input" placeholder=" " />
            <label for="user_name" class="input-group-label">Имя</label>
          </div>
          <div class="input-group">
            <input type="tel" id="user_phone" name="userphone" class="input phone-mask" placeholder=" " />
            <label for="user_phone" class="input-group-label">Номер телефона</label>
          </div>
        </div>
        <!-- /.input-group-wrapper -->
        <div class="cta-form-footer">
          <button class="button cta-form-button">Отправить заявку</button>
          <div class="notify">
            <svg class="notify-icon" width="14" height="14">
              <use href="img/svg/sprites.svg#shield"></use>
            </svg>
            <p class="notify-text">
              Обращаясь к нам вы получаете не только профессиональную
              работу, но и абсолютную конфиденциальность информации!
            </p>
          </div>
        </div>
      </form>
      <!-- /.cta-form -->
    </div>
    <!-- /.cta-wrapper container -->
  </div>
  <!-- /.bg-grey -->
</section>
<!-- /.section cta -->
<footer class="footer">
  <div class="container">
    <div class="footer-top">
      <svg class="footer-top-icon">
        <use href="img/svg/sprites.svg#logo"></use>
      </svg>
      <a href="tel:+74996861014" class="footer-phone">+7 (499) 686-10-14</a>
      <div class="footer-info">
        <div class="footer-info-item">
          <svg class="footer-info-icon" width="24" height="24">
            <use href="img/svg/sprites.svg#mark"></use>
          </svg>
          <address class="footer-info-text">
            г. Москва, Холодильный пер. 4к1с8
          </address>
        </div>
        <div class="footer-info-item">
          <svg class="footer-info-icon" width="24" height="24">
            <use href="img/svg/sprites.svg#mail"></use>
          </svg>
          <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-text">a.dragunov@tdaliance.ru</a>
        </div>
      </div>
      <!-- /.footer-info -->
      <div class="footer-social">
        <a href="#" class="footer-social-link">
          <svg class="footer-social-icon" width="24" height="24">
            <use href="img/svg/sprites.svg#vk"></use>
          </svg>
        </a>
        <a href="#" class="footer-social-link">
          <svg class="footer-social-icon" width="24" height="24">
            <use href="img/svg/sprites.svg#inst"></use>
          </svg>
        </a>
      </div>
    </div>
    <!-- /.footer-top -->
  </div>
  <!-- /.container -->
  <hr class="footer-seporator" color="#EBEBF0" />
  <div class="container">
    <div class="footer-bottom">
      <div class="footer-menu-wrapper">
        <h3 class="footer-menu-title">Контрактное производство</h3>
        <ul class="footer-menu-list footer-menu-list-col">
          <li class="footer-menu-item">
            <a href="./auto-him.php" class="footer-menu-link">Автомобильная химия</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Бытовая химия</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Дезинфицирующие средства</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Косметическая продукция</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Краски аэрозольные</a>
          </li>
        </ul>
      </div>
      <!-- /.footer-menu-wrapper -->
      <div class="footer-menu-wrapper">
        <h3 class="footer-menu-title">Собственные марки</h3>
        <ul class="footer-menu-list">
          <li class="footer-menu-item">
            <a href="ag-tech.php" class="footer-menu-link">Автохимия AG-Tech</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Автохимия AP</a>
          </li>
        </ul>
      </div>
      <!-- /.footer-menu-wrapper -->
      <div class="footer-menu-wrapper">
        <ul class="footer-menu-list footer-menu-list-bold">
          <li class="footer-menu-item footer-menu-item-bold">
            <a href="./about.php" class="footer-menu-link footer-menu-link-bold">О компании</a>
          </li>
          <li class="footer-menu-item footer-menu-item-bold">
            <a href="#" class="footer-menu-link footer-menu-link-bold">Новости</a>
          </li>
          <li class="footer-menu-item footer-menu-item-bold">
            <a href="./contacts.php" class="footer-menu-link footer-menu-link-bold">Контакты</a>
          </li>
        </ul>
      </div>
      <!-- /.footer-menu-wrapper -->
    </div>
    <!-- /.footer-bottom -->
  </div>
  <!-- /.container -->
  <hr class="footer-seporator" color="#EBEBF0" />
  <div class="container">
    <div class="footer-wrapper">
      <div class="footer-legal">
        <p class="copyright">
          &copy;
          <?php echo date("Y") ?> «Aliance Production». Все права защищены.
        </p>
        <a href="./policy.php" class="footer-policy">Политики конфиденциальности</a>
      </div>
      <div class="footer-author">
        <span class="footer-author-text"> Сделано в </span>
        <svg class="footer-social-icon" width="52" height="11">
          <use href="img/svg/sprites.svg#ruso"></use>
        </svg>
      </div>
    </div>
  </div>
  <!-- /.container -->
</footer>
<!-- /.footer -->
<div class="modal" id="feedback-modal">
  <div class="modal-dialog">
    <form action="handler.php" method="POST" class="cta-form modal-form">
      <h2 class="cta-form-title modal-title">Есть вопросы?</h2>
      <a href="#" class="modal-button" data-toggle="modal" data-target="#feedback-modal">
        <svg class="modal-button-icon" width="24" height="24">
          <use href="img/svg/sprites.svg#close"></use>
        </svg>
      </a>
      <p class="cta-form-text modal-text">
        Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
        ответит на все интересующие вопросы и поможем даже в самых сложных
        случаях!
      </p>
      <div class="input-group-wrapper modal-group-input-wrapper">
        <div class="input-group modal-input-group">
          <input type="text" id="modal_user_name" name="username" class="input" placeholder=" " />
          <label for="modal_user_name" class="input-group-label modal-input-label">Имя</label>
        </div>
        <div class="input-group modal-input-group">
          <input type="tel" id="modal_user_phone" name="userphone" class="input phone-mask" placeholder=" " />
          <label for="modal_user_phone" class="input-group-label modal-input-label">Номер телефона</label>
        </div>
      </div>
      <!-- /.input-group-wrapper -->
      <div class="modal-form-footer">
        <button class="button modal-form-button">Отправить заявку</button>
        <div class="notify">
          <svg class="notify-icon" width="14" height="14">
            <use href="img/svg/sprites.svg#shield"></use>
          </svg>
          <p class="notify-text">
            Обращаясь к нам вы получаете не только профессиональную работу,
            но и абсолютную конфиденциальность информации!
          </p>
        </div>
      </div>
    </form>
    <!-- /.modal-form-footer -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal modal-thx" id="alert-modal">
  <div class="modal-dialog modal-dialog-thx">
    <svg class="modal-image">
      <use href="img/svg/sprites.svg#thank-you"></use>
    </svg>
    <a href="#" class="modal-button" data-toggle="modal" data-target="#alert-modal">
      <svg class="modal-button-icon" width="24" height="24">
        <use href="img/svg/sprites.svg#close"></use>
      </svg>
    </a>
    <h2 class="cta-form-title modal-title modal-thx-title">Спасибо за заявку!</h2>
    <p class="modal-thx-text">Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и
      поможем даже в самых сложных случаях!</p>
    <button class="button modal-form-button modal-thx-button" data-toggle="modal" data-target="#alert-modal">Вернуться
      на главную</button>
  </div>
  <!-- /.modal-dialog-thx -->
</div>
<!-- /.modal-thx-->
<script src="js/swiper-bundle.min.js"></script>
<script src="js/just-validate.production.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>