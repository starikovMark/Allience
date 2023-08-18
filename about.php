<?php
$page_title = "О компании";
include_once("./templates/header-page-block.php") ?>
<section class="section expert section-expert">
    <div class="container">
        <div class="expert-wrapper">
            <picture class="expert-image">
                <source type="image/webp" srcset="img/png/expert.webp">
                <source type="image/jpeg" srcset="img/png/expert.png">
                <img src="img/png/expert.png" alt="png: expert" class="expert-image">
            </picture>
            <div class="expert-content">
                <div class="seporator"></div>
                <h2 class="section-title expert-content-title">мы - эксперты в области производства химии</h2>
                <p class="expert-content-text">Разнообразный и богатый опыт говорит нам, что перспективное планирование
                    однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые
                    особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные
                    прототипы, которые представляют собой яркий пример континентально-европейского типа политической
                    культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что
                    перспективное планирование играет важную роль в формировании системы массового участия.</p>
            </div>
            <!-- /.expert-text -->
        </div>
        <!-- /.expert-wrapper -->
        <?php
        $button_color = "slider-button-dark";
        include_once("./templates/swiper-block.php") ?>
    </div>
    <!-- /.container -->
</section>
<!-- /.expert -->
<section class="section production section-production">
    <div class="container">
        <div class="production-wrapper">
            <div class="production-content">
                <div class="seporator"></div>
                <h2 class="section-title production-title">Наше производство</h2>
                <p class="section-text production-text">Предварительные выводы неутешительны: разбавленное изрядной
                    долей
                    эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в формировании
                    глубокомысленных рассуждений. Но граница обучения кадров создаёт необходимость включения в
                    производственный план целого ряда внеочередных мероприятий с учётом комплекса кластеризации усилий.
                </p>
                <p class="section-text production-text">
                    Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно
                    открывает
                    новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны:
                    экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.
                </p>
                <ul class="clients-text-list production-text-list">
                    <li class="clients-text-item production-text-item">
                        <svg class="clients-text-icon production-text-icon">
                            <use href="img/svg/sprites.svg#wash-auto"></use>
                        </svg>
                        Автомомобильная химия
                    </li>
                    <li class="clients-text-item production-text-item">
                        <svg class="clients-text-icon production-text-icon">
                            <use href="img/svg/sprites.svg#home"></use>
                        </svg>
                        Бытовая химия
                    </li>
                    <li class="clients-text-item production-text-item">
                        <svg class="clients-text-icon production-text-icon">
                            <use href="img/svg/sprites.svg#dis"></use>
                        </svg>
                        Дезинфицирующие средства
                    </li>
                    <li class="clients-text-item production-text-item">
                        <svg class="clients-text-icon production-text-icon">
                            <use href="img/svg/sprites.svg#aerozol"></use>
                        </svg>
                        Пищевые аэрозоли
                    </li>
                    <li class="clients-text-item production-text-item">
                        <svg class="clients-text-icon production-text-icon">
                            <use href="img/svg/sprites.svg#hand"></use>
                        </svg>
                        Косметические средства
                    </li>
                    <li class="clients-text-item production-text-item">
                        <svg class="clients-text-icon production-text-icon">
                            <use href="img/svg/sprites.svg#paint"></use>
                        </svg>
                        Краски аэрозольные
                    </li>
                </ul>
            </div>
            <!-- /.production-content -->
            <picture class="production-image">
                <source type="image/webp" srcset="img/png/production.webp">
                <source type="image/jpeg" srcset="img/png/production.png">
                <img src="img/png/production.png" alt="png: production" class="production-image">
            </picture>
        </div>
        <!-- /.production-wrapper -->
    </div>
    <!-- /.container -->
</section>
<!-- /.section production section-production -->
<?php include_once("./templates/founder-block.php") ?>
<?php include_once("./templates/research-block.php") ?>
<?php include_once("footer.php") ?>