<?php
$page_title = "Автомобильная химия";
$header_image = "named-image-visible";
include_once("./templates/header-page-block.php") ?>
<?php
$section_title = "Контрактное производство автомобильной химии";
$section_image = "blog-image-1";
include_once("./templates/text-page-block.php") ?>
<div class="container">
    <?php
    $button_color = "slider-button-dark";
    include_once("./templates/swiper-block.php") ?>
</div>
<section class="section manufacture section-manufacture">
    <div class="container">
        <div class="manufacture-wrapper">
            <div class="seporator"></div>
            <h2 class="section-title manufacture-title">Изготовление автохимии</h2>
            <p class="section-text">Но современная методология разработки позволяет оценить значение прогресса
                профессионального сообщества. Есть над чем задуматься: тщательные исследования конкурентов набирают
                популярность среди определенных слоев населения, а значит, должны быть ассоциативно распределены по
                отраслям. В своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных
                форм деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для
                поставленных обществом задач.</p>
            <ul class="manufacture-list">
                <li class="manufacture-list-item">
                    <svg class="clients-text-icon">
                        <use href="img/svg/sprites.svg#him"></use>
                    </svg>
                    Полное описание товаров
                </li>
                <li class="manufacture-list-item">
                    <svg class="clients-text-icon">
                        <use href="img/svg/sprites.svg#wash-auto"></use>
                    </svg>
                    Актуальные цены
                </li>
                <li class="manufacture-list-item">
                    <svg class="clients-text-icon">
                        <use href="img/svg/sprites.svg#him"></use>
                    </svg>
                    Полное описание товаров
                </li>
                <li class="manufacture-list-item">
                    <svg class="clients-text-icon">
                        <use href="img/svg/sprites.svg#wash-auto"></use>
                    </svg>
                    Актуальные цены
                </li>
                <li class="manufacture-list-item">
                    <svg class="clients-text-icon">
                        <use href="img/svg/sprites.svg#paint"></use>
                    </svg>
                    Лаки и краски
                </li>
                <li class="manufacture-list-item">
                    <svg class="clients-text-icon">
                        <use href="img/svg/sprites.svg#him"></use>
                    </svg>
                    Химические производства
                </li>
                <li class="manufacture-list-item">
                    <svg class="clients-text-icon">
                        <use href="img/svg/sprites.svg#paint"></use>
                    </svg>
                    Лаки и краски
                </li>
                <li class="manufacture-list-item">
                    <svg class="clients-text-icon">
                        <use href="img/svg/sprites.svg#him"></use>
                    </svg>
                    Химические производства
                </li>
            </ul>
        </div>
        <!-- /.manufacture-wrapper -->
    </div>
    <!-- /.container -->
    <picture class="manufacture-picture">
        <source type="image/webp" srcset="img/png/manufacture-him.webp">
        <source type="image/jpeg" srcset="img/png/manufacture-him.jpeg">
        <img src="img/png/manufacture-him.jpeg" alt="png: manufacture-him" class="manufacture-picture-image">
    </picture>
</section>
<!-- /.section manufacture section-manufacture -->
<section class="section types section-types">
    <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title types-title">Виды автохимии</h2>
        <p class="section-text types-text">Но современная методология разработки позволяет оценить значение прогресса
            профессионального сообщества. Есть над чем задуматься: тщательные исследования конкурентов набирают
            популярность среди определенных слоев населения, а значит, должны быть ассоциативно распределены по
            отраслям.</p>
        <ul class="types-list">
            <li class="types-list-item">Антискотч</li>
            <li class="types-list-item">Многоцелевая смазка</li>
            <li class="types-list-item">Жидкий ключ</li>
            <li class="types-list-item">Высокотемпературная смазка</li>
            <li class="types-list-item">Универсальный очиститель деталей
            </li>
            <li class="types-list-item">Силиконовая смазка</li>
            <li class="types-list-item">Цепная смазка</li>
            <li class="types-list-item">Медная смазка
            </li>
            <li class="types-list-item">Графитовая смазка
            </li>
            <li class="types-list-item">Очиститель кондиционера пенный
            </li>
            <li class="types-list-item">Очиститель тормозных дисков</li>
            <li class="types-list-item">Очиститель битумных пятен
            </li>
            <li class="types-list-item">Очиститель кондционера
            </li>
            <li class="types-list-item">Очиститель дросельной заслонки
            </li>
            <li class="types-list-item">Очиститель обивки
            </li>
            <li class="types-list-item">Тефлоновая смазка</li>
            <li class="types-list-item">Очиститель двигателя
            </li>
            <li class="types-list-item">Универсальный очиститель
            </li>
            <li class="types-list-item">Чернитель шин
            </li>
            <li class="types-list-item">Чернитель шин + очистка
            </li>
        </ul>
    </div>
    <!-- /.container -->
</section>
<!-- /.section types section-types -->
<?php include_once("./templates/research-block.php") ?>
<?php include_once("./templates/scheme-block.php") ?>
<?php include_once("./templates/clients-block.php") ?>
<?php include_once("footer.php") ?>