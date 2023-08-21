<?php
$page_title = "Контакты";
include_once("./templates/header-page-block.php") ?>
<section class="section contacts section-contacts">
    <div class="container">
        <div class="contacts-wrapper">
            <a href="tel:+74996861014" class="footer-phone contacts-phone">+7 (499) 686-10-14</a>
            <div class="footer-info-item">
                <svg class="footer-info-icon" width="36" height="36">
                    <use href="img/svg/sprites.svg#mark"></use>
                </svg>
                <address class="footer-info-text contacts-info-text">
                    г. Москва, Холодильный пер. 4к1с8
                </address>
            </div>
            <div class="footer-info-item">
                <svg class="footer-info-icon" width="36" height="36">
                    <use href="img/svg/sprites.svg#mail"></use>
                </svg>
                <a href="mailto:a.dragunov@tdaliance.ru"
                    class="footer-info-text contacts-info-text">a.dragunov@tdaliance.ru</a>
            </div>
            <!-- /.footer-info -->
            <div class="footer-social contacts-social">
                <a href="#" class="footer-social-link">
                    <svg class="footer-social-icon" width="36" height="36">
                        <use href="img/svg/sprites.svg#vk"></use>
                    </svg>
                </a>
                <a href="#" class="footer-social-link">
                    <svg class="footer-social-icon" width="36" height="36">
                        <use href="img/svg/sprites.svg#inst"></use>
                    </svg>
                </a>
            </div>
        </div>
        <iframe class="contacts-map"
            src="https://yandex.ru/map-widget/v1/?um=constructor%3A074647830d27ddf9d05611edf5142d4de56307943fd491962c1bc81bf0df503c&amp;source=constructor"
            frameborder="0"></iframe>
    </div>
    <!-- /.container -->
</section>
<!-- /.section contacts section-contacts -->
<?php include_once("./footer.php") ?>