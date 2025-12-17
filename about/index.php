<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О нас");
$APPLICATION->AddChainItem("О компании", ""); 
?>

<div class="about">
    <div class="wrapper">
        <div class="page-top">
            <?php if ($APPLICATION->GetCurPage(false) !== '/'): ?>
                <div class="breadcrumbs">
                    <? $APPLICATION->IncludeComponent("bitrix:breadcrumb", ".default", array(
                        "START_FROM" => "0",
                        "PATH" => "",
                        "SITE_ID" => SITE_ID
                    )); ?>
                </div>
            <?php endif; ?>

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
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "about_slider",
            array(
                "IBLOCK_ID" => 11,
                "CACHE_TIME" => "36000000",
                "FIELD_CODE" => array("PREVIEW_PICTURE", ""),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_TYPE" => "Content",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "20",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "SORT",
                "SORT_BY2" => "ID",
                "SORT_ORDER1" => "ASC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N"
            )
        ); ?>
    </div>
    <div class="about__help">
        <div class="a-help">
            <div class="a-help__title">

            </div>
            <div class="a-help__img">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "template1",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/includes/about/help_img.php"
                    )
                ); ?>
            </div>
            <div class="a-help__text">
                <div class="a-help__text-title">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "template1",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/about/help-title.php"
                        )
                    ); ?>
                </div>
                <div class="a-help__text-text">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "template1",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/about/help-text.php"
                        )
                    ); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>