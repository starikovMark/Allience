<?php
$header_class = "display-none";
include_once("./templates/header-page-block.php") ?>
<section class="error">
        <div class="error-wrapper">
            <span class="error-number">404</span>
            <h2 class="error-title">Страница не найдена</h2>
            <p class="error-text">Мы не смогли найти страницу с таким адресом, попробуйте перейти на главную или напишите нам.</p>
            <a href="./" class="button modal-form-button modal-thx-button error-button">Вернуться
      на главную</a>
        </div>
        <!-- /.section-wrapper -->
</section>
<!-- /.section error section-error -->
<?php
$cta_display = "cta-display";
include_once("./footer.php") ?>