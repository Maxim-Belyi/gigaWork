<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
use Bitrix\Main\Page\Asset;
?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $APPLICATION->ShowTitle() ?></title>

    <?php
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/main.css');

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/main.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/vendors.js');

    ?>

    <link rel="apple-touch-icon" sizes="180x180"
        href="<?= SITE_TEMPLATE_PATH ?>/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?= SITE_TEMPLATE_PATH ?>/assets/img/favicons/favicon-32x32.png">
    <link rel="manifest" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/favicons/site.webmanifest">
    <link rel="mask-icon" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/favicons/safari-pinned-tab.svg" color="#00aba9">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">

    <?php $APPLICATION->showHead(); ?>
</head>

<body class="<? $APPLICATION->ShowProperty('main', 'inner') ?>" id="body" id="body">
    <div id="panel">
        <?php $APPLICATION->ShowPanel(); ?>
    </div>
    <div class="layout">
        <header class="header">
            <div class="wrapper header--desktop">
                <div class="header__top"><? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "template1",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/includes/logo.php",
                    ),
                    false
                ); ?>
                    <div class="header__info"><? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "template1",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/header/header_phone.php",
                        ),
                        false
                    ); ?>
                        <div class="header__info-schedule"><? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "template1",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . "/includes/header/header_work-time.php",
                            ),
                            false
                        ); ?></div>
                    </div>


                    <div class="header__nav">
                        <?php $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "header_top-menu",
                            array(
                                "ROOT_MENU_TYPE" => "top",
                                "MAX_LEVEL" => "1",
                                "CHILD_MENU_TYPE" => "top",
                                "USE_EXT" => "N",
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "N",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => ""
                            )
                        ); ?>
                    </div>
                    <div class="header__social"><?php $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "template1",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/vk-logo.php",
                        ),
                        false
                    ); ?></div>
                </div>
                <div class="header__bottom">
                    <div class="header__menu">
                          <?php $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "header_bottom-menu",
                            array(
                                "ROOT_MENU_TYPE" => "bottom",
                                "MAX_LEVEL" => "1",
                                "CHILD_MENU_TYPE" => "",
                                "USE_EXT" => "N",
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "N",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => ""
                            )
                        ); ?>
                    </div>
                </div>
            </div>

            <div class="wrapper header--mobile">
                <div class="header__top">
                    <div class="header__back custom-close"></div><? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "template1",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/includes/logo.php",
                    ),
                    false
                ); ?>
                    <div class="header__burger"></div>
                    <div class="header__mobilemenu">
                        <div class="mobilemenu">
                            <div class="wrapper">
                                <div class="header__nav"><a class="header__nav-item" href="#">О компании</a><a
                                        class="header__nav-item" href="#">Контакты</a><a class="header__nav-item"
                                        href="#">Отзывы</a><a class="header__nav-item" href="#">Сотрудничество</a><a
                                        class="header__nav-item" href="#">Гарантия и сервис</a><a
                                        class="header__nav-item" href="#">Полезные статьи</a>
                                </div>
                                <div class="header__info"><? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "template1",
                                    array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH . "/includes/header/header_phone.php",
                                    ),
                                    false
                                ); ?>
                                    <div class="header__info-schedule"><? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "template1",
                                        array(
                                            "AREA_FILE_SHOW" => "file",
                                            "PATH" => SITE_TEMPLATE_PATH . "/includes/header/header_work-time.php",
                                        ),
                                        false
                                    ); ?></div>
                                </div>
                                <div class="header__social"><? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "template1",
                                    array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH . "/includes/header/header_vk-logo.php",
                                    ),
                                    false
                                ); ?></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="header__catalogmenu">
                        <div class="header__catalogmenu--close"></div>
                        <div class="catalogmenu">
                            <div class="wrapper">
                                <div class="catalogmenu__list">
                                    <div class="cm-item">
                                        <div class="cm-item__top">
                                            <div class="cm-item__top-img"><img
                                                    src="<?= SITE_TEMPLATE_PATH ?>/assets/img/frontpage/catalogmenu-1.jpg"
                                                    alt="" loading="lazy"></div>
                                            <div class="cm-item__top-title">Душевые ограждения</div>
                                        </div>
                                        <div class="cm-item__content">
                                            <div class="cm-link"><a class="cm-link__item" href="#">Угол</a><a
                                                    class="cm-link__item" href="#">Ниша</a><a class="cm-link__item"
                                                    href="#">Свободный вход</a><a class="cm-link__item"
                                                    href="#">Ванна</a><a class="cm-link__item" href="#">Конфигуратор
                                                    нестандартных изделий</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cm-item">
                                        <div class="cm-item__top">
                                            <div class="cm-item__top-img"><img
                                                    src="<?= SITE_TEMPLATE_PATH ?>/assets/img/frontpage/catalogmenu-2.jpg"
                                                    alt="" loading="lazy"></div>
                                            <div class="cm-item__top-title">Душевые поддоны</div>
                                        </div>
                                        <div class="cm-item__content">
                                            <div class="cm-link"><a class="cm-link__item" href="#">Lava</a><a
                                                    class="cm-link__item" href="#">Volna</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cm-item">
                                        <div class="cm-item__top">
                                            <div class="cm-item__top-img"><img
                                                    src="<?= SITE_TEMPLATE_PATH ?>/assets/img/frontpage/catalogmenu-3.jpg"
                                                    alt="" loading="lazy"></div>
                                            <div class="cm-item__top-title">Мебель для ванных комнат</div>
                                        </div>
                                        <div class="cm-item__content">
                                            <div class="cm-link"><a class="cm-link__item" href="#">Стеллажи</a><a
                                                    class="cm-link__item" href="#">Опоры под раковину</a><a
                                                    class="cm-link__item" href="#">Зеркала</a><a class="cm-link__item"
                                                    href="#">Тумбы</a><a class="cm-link__item" href="#">Пеналы</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cm-item">
                                        <div class="cm-item__top">
                                            <div class="cm-item__top-img"><img
                                                    src="<?= SITE_TEMPLATE_PATH ?>/assets/img/frontpage/catalogmenu-4.jpg"
                                                    alt="" loading="lazy"></div>
                                            <div class="cm-item__top-title">Аксессуары</div>
                                        </div>
                                        <div class="cm-item__content">
                                            <div class="cm-link"><a class="cm-link__item" href="#">Полки</a><a
                                                    class="cm-link__item" href="#">Держатели для полотенец</a><a
                                                    class="cm-link__item" href="#">Крючки для полотенец</a><a
                                                    class="cm-link__item" href="#">Держатели туалетной бумаги</a><a
                                                    class="cm-link__item" href="#">Наборы аксессуаров для ванной</a><a
                                                    class="cm-link__item" href="#">Прочие аксессуары</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalogmenu__copyright">© Ulitka, 2021</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>