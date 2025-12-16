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
			2 => "user_name",
			3 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "14",
		"IBLOCK_TYPE" => "Review",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "6",
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
			0 => "user_name",
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
        <div class="review-banner__img"><img src="./img/review/review.jpg" alt="" loading="lazy"></div>
        <div class="review-banner__text">
          <p>Наша компания уже более 20 лет присутствует на российском рынке как крупный производитель мебели из
            металла, стекла и дерева. В рамках освоения новых горизонтов в 200_ году было запущено производство душевых
            ограждений, мебели и аксессуаров для ванной комнаты, которое преобразовалось в молодой и перспективный бренд
            Ulitka. </p>
          <p>В штате фабрики уже насчитывается около 250 специалистов разного профиля.</p>
          <p>Каждый раз, создавая новый товар мы заботимся о комфорте и безопасности наших покупателей, продумывая
            каждую деталь. <br>Мы не стоим на месте, и уже в этом году открыли новое направление - производство душевых
            поддонов из литьевого мрамора. Это позволит нам предлагать комплексные готовые решения, для тех кто ищет
            современный дизайн, качество и надежность. </p>
        </div>
      </div>
    </div>
  </div>
</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>