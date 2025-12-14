<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Ulitka");
$APPLICATION->SetPageProperty("inner", "Контаты");
use Bitrix\Main\Page\Asset;

?>

<div class="contacts">
    <div class="wrapper">
        <div class="page-top">
            <div class="breadcrumbs"><a class="breadcrumbs__item" href="#">Ulitka</a><a class="breadcrumbs__item"
                    href="#">Контакты</a>
            </div>
            <h1 class="page-top__title">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "template1",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/includes/contacts/section-title.php"
                    )
                ); ?>
            </h1>
        </div>
        <div class="contacts__content">
            <div class="contacts__text">
                <div class="t-block">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "template1",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/contacts/adress.php"
                        )
                    ); ?>
                </div>
                <div class="t-block">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "template1",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/contacts/work-time.php"
                        )
                    ); ?>
                </div>
                <div class="t-block">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "template1",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/contacts/shop-phone.php"
                        )
                    ); ?>
                </div>
                <div class="t-block">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "template1",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/contacts/shop-email.php"
                        )
                    ); ?>
                </div>
            </div>
            <div class="contacts__map" id="map"></div>
        </div>
    </div>
</div>
<? Asset::getInstance()->addJs("https://api-maps.yandex.ru/2.1/?lang=ru_RU");?>
<script type="text/javascript">
    ymaps.ready(init);
    var customMap;
    function init() {
        customMap = new ymaps.Map("map", {
            center: [55.050628, 61.593257],
            behaviors: ['default', 'scrollZoom'],
            zoom: 15,
            controls: []
        }, {
            suppressMapOpenBlock: true
        });

        customPlacemark0 = new ymaps.Placemark([55.050628, 61.593257], {}, {
            iconLayout: 'default#image',
            iconImageHref: '<?= SITE_TEMPLATE_PATH ?>/assets/img/balloon.svg',
            iconImageSize: [46, 56],
            iconImageOffset: [-36, -60],
            balloonImageOffset: [-10, -50],
            balloonShadow: true
        });

        customMap.geoObjects.add(customPlacemark0)
    }   
</script>


<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>