<?php
$page_title = "Автохимия AG-TECH";
$header_image = "named-image-visible";
include_once("./templates/header-page-block.php") ?>
<?php
$section_title = "Собственное производство автохимия AG-Tech";
$section_image = "ag-tech-page-image";
include_once("./templates/text-page-block.php") ?>
<div class="container">
    <?php
    $button_color = "slider-button-dark";
    include_once("./templates/swiper-block.php") ?>
</div>
<section class="section distributor section-distributor">
    <div class="container">
        <div class="distributor-wrapper">
            <div class="seporator"></div>
            <h2 class="section-title distributor-title">Генеральный дистрибьютор премиальной
                автохимии</h2>
            <p class="section-text distributor-text">Внезапно, активно развивающиеся страны третьего мира могут быть
                объявлены нарушающими общечеловеческие нормы этики и морали.</p>
            <ul class="clients-text-list distributor-list">
                <li class="clients-text-item distributor-list-item">
                    <svg class="clients-text-icon">
                        <use href="img/svg/sprites.svg#him"></use>
                    </svg>
                    Полное описание товаров
                </li>
                <li class="clients-text-item distributor-list-item">
                    <svg class="clients-text-icon">
                        <use href="img/svg/sprites.svg#wash-auto"></use>
                    </svg>
                    Актуальные цены
                </li>
                <li class="clients-text-item distributor-list-item">
                    <svg class="clients-text-icon">
                        <use href="img/svg/sprites.svg#paint"></use>
                    </svg>
                    Лаки и краски
                </li>
                <li class="clients-text-item distributor-list-item">
                    <svg class="clients-text-icon">
                        <use href="img/svg/sprites.svg#him"></use>
                    </svg>
                    Хмические производства
                </li>
            </ul>
            <button class="button distributor-button">
                <svg style="width: 24px; height: 24px;">
                    <use href="img/svg/sprites.svg#download" width="24" height="24"></use>
                </svg>
                Скачать каталог
            </button>
        </div>
        <!-- /.distributor-wrapper -->
    </div>
</section>
<!-- /.section distributor section distributor -->
<?php include_once("./footer.php") ?>