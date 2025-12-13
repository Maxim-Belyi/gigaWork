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

            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "about_video",
                array(
                    "IBLOCK_ID" => "9",
                    "NEWS_COUNT" => "1",
                    "PROPERTY_CODE" => array("VIDEO_LINK"),
                    "FIELD_CODE" => array("PREVIEW_PICTURE"),
                    "SET_TITLE" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N"
                )
            ); ?>

           <div class="about__direction">
                <div class="about__direction-title">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "template1",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/about/about_our-work.php"
                        )
                    ); ?>
                </div>
                <div class="a-direction">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "about_cards",
                        array(
                            "IBLOCK_ID" => "10",
                            "SORT_BY1" => "SORT",
                            "SORT_ORDER1" => "DESC",
                            "SORT_BY2" => "ID",
                            "SORT_ORDER2" => "ASC",
                            "CACHE_TYPE" => "A",
                            "FIELD_CODE" => array("NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE"),
                            "PROPERTY_CODE" => array("CARD_LINK"),
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

    <?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>