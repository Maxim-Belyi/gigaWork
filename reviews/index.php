<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Ulitka");
$APPLICATION->SetPageProperty("inner", "Отзывы");

?>
<div class="reviews">
  <div class="wrapper">
    <div class="breadcrumbs"><a class="breadcrumbs__item" href="#">Ulitka</a><a class="breadcrumbs__item"
        href="#">Отзывы</a>
    </div>
    <div class="reviews__top">
      <h1 class="reviews__top-title">Отзывы</h1>
      <div class="reviews__top-btn btn btn--low" data-popup="#review">Оставить отзыв</div>
    </div>

    <div class="popup popup--review" id="review">
      <div class="popup__block">
        <div class="popup__close popup__close--back"></div>
        <div class="popup__title">Ваш отзыв</div>
        <? $APPLICATION->IncludeComponent(
          "bitrix:iblock.element.add.form",
          "review_form",
          array(
            "CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
            "CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
            "CUSTOM_TITLE_DETAIL_PICTURE" => "",
            "CUSTOM_TITLE_DETAIL_TEXT" => "",
            "CUSTOM_TITLE_IBLOCK_SECTION" => "",
            "CUSTOM_TITLE_NAME" => "",
            "CUSTOM_TITLE_PREVIEW_PICTURE" => "",
            "CUSTOM_TITLE_PREVIEW_TEXT" => "",
            "CUSTOM_TITLE_TAGS" => "",
            "DEFAULT_INPUT_SIZE" => "30",
            "DETAIL_TEXT_USE_HTML_EDITOR" => "N",
            "ELEMENT_ASSOC" => "CREATED_BY",
            "GROUPS" => array(
              0 => "2",
            ),
            "IBLOCK_ID" => "14",
            "IBLOCK_TYPE" => "Review",
            "LEVEL_LAST" => "Y",
            "LIST_URL" => "",
            "MAX_FILE_SIZE" => "0",
            "MAX_LEVELS" => "100000",
            "MAX_USER_ENTRIES" => "100000",
            "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
            "PROPERTY_CODES" => array(
              0 => "NAME",
              1 => "PREVIEW_TEXT",
            ),
            "PROPERTY_CODES_REQUIRED" => array(
              0 => "NAME",
              1 => "PREVIEW_TEXT",
            ),
            "RESIZE_IMAGES" => "N",
            "SEF_MODE" => "N",
            "STATUS" => "ANY",
            "STATUS_NEW" => "N",
            "USER_MESSAGE_ADD" => "Спасибо, ваш отзыв принят!",
            "USER_MESSAGE_EDIT" => "",
            "USE_CAPTCHA" => "N",
            "COMPONENT_TEMPLATE" => "review_form"
          ),
          false
        ); ?>
      </div>
    </div>

    <div class="reviews__content">
      <? $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "review_section",
        array(
          "ACTIVE_DATE_FORMAT" => "d.m.Y",
          "ADD_SECTIONS_CHAIN" => "Y",
          "AJAX_MODE" => "N",
          "AJAX_OPTION_ADDITIONAL" => "",
          "AJAX_OPTION_HISTORY" => "N",
          "AJAX_OPTION_JUMP" => "N",
          "AJAX_OPTION_STYLE" => "Y",
          "CACHE_FILTER" => "N",
          "CACHE_GROUPS" => "Y",
          "CACHE_TIME" => "36000000",
          "CACHE_TYPE" => "A",
          "CHECK_DATES" => "Y",
          "DETAIL_URL" => "",
          "DISPLAY_BOTTOM_PAGER" => "Y",
          "DISPLAY_DATE" => "Y",
          "DISPLAY_NAME" => "Y",
          "DISPLAY_PICTURE" => "Y",
          "DISPLAY_PREVIEW_TEXT" => "Y",
          "DISPLAY_TOP_PAGER" => "N",
          "FIELD_CODE" => array(
            0 => "DETAIL_TEXT",
            1 => "admin_reply",
            2 => "NAME",
            3 => "",
          ),
          "FILTER_NAME" => "",
          "HIDE_LINK_WHEN_NO_DETAIL" => "N",
          "IBLOCK_ID" => "14",
          "IBLOCK_TYPE" => "Review",
          "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
          "INCLUDE_SUBSECTIONS" => "Y",
          "MESSAGE_404" => "",
          "NEWS_COUNT" => "5",
          "PAGER_BASE_LINK_ENABLE" => "N",
          "PAGER_DESC_NUMBERING" => "N",
          "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
          "PAGER_SHOW_ALL" => "N",
          "PAGER_SHOW_ALWAYS" => "N",
          "PAGER_TEMPLATE" => "round",
          "PAGER_TITLE" => "Отзывы",
          "PARENT_SECTION" => "",
          "PARENT_SECTION_CODE" => "",
          "PREVIEW_TRUNCATE_LEN" => "",
          "PROPERTY_CODE" => array(
            0 => "NAME",
            1 => "admin_reply",
            2 => "",
          ),
          "SET_BROWSER_TITLE" => "N",
          "SET_LAST_MODIFIED" => "N",
          "SET_META_DESCRIPTION" => "N",
          "SET_META_KEYWORDS" => "Y",
          "SET_STATUS_404" => "N",
          "SET_TITLE" => "N",
          "SHOW_404" => "N",
          "SORT_BY1" => "SORT",
          "SORT_BY2" => "ID",
          "SORT_ORDER1" => "ASC",
          "SORT_ORDER2" => "ASC",
          "STRICT_SECTION_CHECK" => "N",
          "COMPONENT_TEMPLATE" => "review_section"
        ),
        false
      ); ?>

      <div class="review-banner">
        <div class="review-banner__img">
          <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "template1",
            array(
              "AREA_FILE_SHOW" => "file",
              "PATH" => SITE_TEMPLATE_PATH . "/includes/reviews/banner-image.php"
            )
          ); ?>
        </div>
        <div class="review-banner__text">
          <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "template1",
            array(
              "AREA_FILE_SHOW" => "file",
              "PATH" => SITE_TEMPLATE_PATH . "/includes/reviews/banner-text.php"
            )
          ); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>