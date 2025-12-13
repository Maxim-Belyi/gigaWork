<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Ulitka");
$APPLICATION->SetPageProperty("inner", "О компании");
?>
<main>
    <div class="about">
        <div class="wrapper">
            <div class="page-top">
                <div class="breadcrumbs">
                    <a class="breadcrumbs__item" href="#">Ulitka</a><a class="breadcrumbs__item" href="#">О компании</a>
                </div>
                <h1 class="page-top__title">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "template1",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/about/section_title.php"
                        )
                    ); ?>
                </h1>
                <div class="page-top__author">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "template1",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/about/author.php"
                        )
                    ); ?>
                </div>
            </div>
            <div class="about__top">
                <div class="about__snail">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "template1",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/about/about_img.php"
                        )
                    ); ?>
                </div>
                <div class="about__text">
                    <div class="about__text-author">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "template1",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . "/includes/about/author.php"
                            )
                        ); ?>
                    </div>
                    <div class="about__text-text">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "template1",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . "/includes/about/about_text.php"
                            )
                        ); ?>
                    </div>
                </div>
            </div>
            <div class="about__gallery">

                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "about_gallery",
                    array(
                        "IBLOCK_ID" => "7",
                        "NEWS_COUNT" => "4",
                        "SORT_BY1" => "SORT",
                        "SORT_ORDER1" => "DESC",
                        "SORT_BY2" => "ID",
                        "SORT_ORDER2" => "ASC",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "36000000",
                        "CACHE_GROUPS" => "Y",
                        "SET_TITLE" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "AJAX_MODE" => "N"
                    )
                ); ?>
            </div>

            <div class="about__stats">
                <div class="a-stats">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "about_stats",
                        array(
                            "IBLOCK_ID" => "8",
                            "SORT_BY1" => "SORT",
                            "SORT_ORDER1" => "DESC",
                            "SORT_BY2" => "ID",
                            "SORT_ORDER2" => "ASC",
                            "CACHE_TYPE" => "A",
                            "CACHE_TIME" => "36000000",
                            "CACHE_GROUPS" => "Y",
                            "SET_TITLE" => "N",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "N"
                        )
                    ); ?>
                </div>

            </div>
            <div class="about__video" data-video="">
                <div class="about__video-img">
                    <img src="asset/img/about/video.jpg" alt="" loading="lazy">
                </div>
                <div class="about__video-item">
                    <iframe src="https://www.youtube.com/embed/KPXmZ6bLo5w"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="about__direction">
                <div class="about__direction-title">
                    4 направления нашей работы
                </div>
                <div class="a-direction">
                    <a class="a-direction__item" href="#">
                        <div class="a-direction__item-img">
                            <img src="./img/about/direction-1.jpg" alt="" loading="lazy">
                        </div>
                        <div class="a-direction__item-title">
                            Душевые ограждения
                        </div>
                        <div class="a-direction__item-description">
                            Наша компания уже более 20 лет присутствует на российском рынке как крупный производитель
                            мебели из металла, стекла и дерева.
                        </div>
                    </a><a class="a-direction__item" href="#">
                        <div class="a-direction__item-img">
                            <img src="./img/about/direction-2.jpg" alt="" loading="lazy">
                        </div>
                        <div class="a-direction__item-title">
                            Поддоны
                        </div>
                        <div class="a-direction__item-description">
                            Наша компания уже более 20 лет присутствует на российском рынке как крупный производитель
                            мебели из металла, стекла и дерева.
                        </div>
                    </a><a class="a-direction__item" href="#">
                        <div class="a-direction__item-img">
                            <img src="./img/about/direction-3.jpg" alt="" loading="lazy">
                        </div>
                        <div class="a-direction__item-title">
                            Мебель
                        </div>
                        <div class="a-direction__item-description">
                            Наша компания уже более 20 лет присутствует на российском рынке как крупный производитель
                            мебели из металла, стекла и дерева.
                        </div>
                    </a><a class="a-direction__item" href="#">
                        <div class="a-direction__item-img">
                            <img src="./img/about/direction-4.jpg" alt="" loading="lazy">
                        </div>
                        <div class="a-direction__item-title">
                            Аксессуары
                        </div>
                        <div class="a-direction__item-description">
                            Наша компания уже более 20 лет присутствует на российском рынке как крупный производитель
                            мебели из металла, стекла и дерева.
                        </div>
                    </a>
                </div>
            </div>
            <div class="about__slide">
                <div class="typical__slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="./img/typical/banner.jpg" alt="" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="./img/typical/banner.jpg" alt="" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="./img/typical/banner.jpg" alt="" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="./img/typical/banner.jpg" alt="" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="./img/typical/banner.jpg" alt="" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-pagination">
                        </div>
                    </div>
                </div>
            </div>
            <div class="about__help">
                <div class="a-help">
                    <div class="a-help__title">
                        Помогаем <br>
                        в нестандартных <br>
                        изделиях
                    </div>
                    <div class="a-help__img">
                        <img src="./img/about/help.jpg" alt="" loading="lazy">
                    </div>
                    <div class="a-help__text">
                        <div class="a-help__text-title">
                            Помогаем <br>
                            в нестандартных <br>
                            изделиях
                        </div>
                        <div class="a-help__text-text">
                            <p>
                                Наша компания уже более 20 лет присутствует на российском рынке как крупный
                                производитель мебели из металла, стекла и дерева. В рамках освоения новых горизонтов в
                                200_ году было запущено производство душевых ограждений, мебели и аксессуаров для ванной
                                комнаты, которое преобразовалось в молодой и перспективный бренд Ulitka.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>